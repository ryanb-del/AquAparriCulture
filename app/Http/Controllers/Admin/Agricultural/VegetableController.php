<?php

namespace App\Http\Controllers\Admin\Agricultural;

use App\Http\Controllers\Controller;
use App\Models\Vegetables;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vegetable = Vegetables::all();
        return view('admin.agricultural.vegetables.create')
        ->with('vegetable',$vegetable);
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
            $image->move(public_path('list_of_vegetables'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is uploaded
        }

        Vegetables::create([
            'image' => $imageName,
            'name' => $request->name,
            'duration' => $request->duration,
            'description' => $request->description,
           // Save the image file name or null
        ]);
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
