<?php

namespace App\Http\Controllers\Admin\Aquatic;

use App\Http\Controllers\Controller;
use App\Models\Fisheries;
use Illuminate\Http\Request;

class FisheriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fish = Fisheries::all();
        return view('admin.aquatic.fisheries.index', compact('fish'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aquatic.fisheries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            // Create a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public/images directory
            $image->move(public_path('list_of_fish'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is uploaded
        }

        // Create a new Fisheries resource
        Fisheries::create([
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description,
            'harvest' => $request->harvest,
            'type' => $request->type,
        ]);

        return redirect()->back()->with('success', 'Saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fish = Fisheries::find($id);
        return view('admin.aquatic.fisheries.edit', compact('fish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fish = Fisheries::find($id);

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            // Create a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public/images directory
            $image->move(public_path('list_of_fish'), $imageName);

            // Delete the old image if a new one is uploaded
            if ($fish->image) {
                unlink(public_path('list_of_fish') . '/' . $fish->image);
            }

            $fish->image = $imageName;
        }

        $fish->name = $request->name;
        $fish->description = $request->description;
        $fish->harvest = $request->harvest;
        $fish->type = $request->type;

        // Save the updated data
        $fish->save();

        return redirect()->route('admin.fisheries.index')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fish = Fisheries::find($id);
        if ($fish) {
            // Delete the image from the server
            if ($fish->image) {
                unlink(public_path('list_of_fish') . '/' . $fish->image);
            }

            // Delete the resource
            $fish->delete();
        }

        return redirect()->route('admin.fisheries.index')->with('success', 'Deleted successfully');
    }
}
