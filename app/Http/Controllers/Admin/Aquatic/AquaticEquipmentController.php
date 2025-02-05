<?php

namespace App\Http\Controllers\Admin\Aquatic;

use App\Http\Controllers\Controller;
use App\Models\AquaEquipment; // Use the AquaEquipment model instead of Equipment
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AquaticEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all equipment from the aqua-equipments table
        $equipments = AquaEquipment::all();
        
        // Return the view with the fetched equipments
        return view('admin.aquatic.equipments.index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aquatic.equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:50000',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('list_of_equipment'), $imageName);
        }

        // Using AquaEquipment model to insert into the correct table
        AquaEquipment::create([
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description,
            'type' => 'aquatic',
        ]);

        return redirect()->route('admin.aquatic.index')->with('success', 'Equipment saved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the equipment to edit using AquaEquipment model
        $equipment = AquaEquipment::findOrFail($id);
        return view('admin.aquatic.equipments.edit', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:50000',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Find the equipment to update using AquaEquipment model
        $equipment = AquaEquipment::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($equipment->image) {
                Storage::delete('list_of_equipment/' . $equipment->image);
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('list_of_equipment'), $imageName);
        } else {
            // Keep the old image if no new image is uploaded
            $imageName = $equipment->image;
        }

        // Update the equipment record
        $equipment->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.aquatic.index')->with('success', 'Equipment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the equipment to delete using AquaEquipment model
        $equipment = AquaEquipment::findOrFail($id);

        // Delete the image from storage if it exists
        if ($equipment->image) {
            Storage::delete('list_of_equipment/' . $equipment->image);
        }

        // Delete the equipment record from the database
        $equipment->delete();

        return redirect()->route('admin.aquatic.equipments.index')->with('success', 'Equipment deleted successfully');
    }
}
