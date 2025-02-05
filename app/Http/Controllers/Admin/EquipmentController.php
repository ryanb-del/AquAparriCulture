<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = Equipment::all();
        return view('admin..equipments.index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin..equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload if available
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('list_of_equipment', 'public');
        } else {
            $imagePath = null;
        }

        // Create the new equipment
        Equipment::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
        Equipment::create([
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description,
            'type' => 'aquatic'
        ]);


        return redirect()->route('equipments.index')->with('success', 'Equipment created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('admin.equipments.edit', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $equipment = Equipment::findOrFail($id);
        $equipment->name = $request->name;
        $equipment->description = $request->description;

        // Handle image upload if available
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('list_of_equipment', 'public');
            $equipment->image = $imagePath;
        }

        $equipment->save();

        return redirect()->route('admin.equipments.index')->with('success', 'Equipment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->delete();

        return redirect()->route('equipments.index')->with('success', 'Equipment deleted successfully!');
    }
}
