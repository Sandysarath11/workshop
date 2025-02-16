<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkshopController extends Controller
{
    // Display a listing of the workshops
    public function index()
    {
        $workshops = Workshop::all();
        return view('workshops.index', compact('workshops'));
    }

    // Show the form for creating a new workshop
    public function create()
    {
        return view('workshops.create');
    }

    // Store a newly created workshop in storage
    public function store(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'desc' => 'required|string',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        'video' => 'required|mimes:mp4,avi,mkv|max:50000', // Max file size 50 MB (50,000 KB)
    ]);

    // Handle the image upload
    $imagePath = $request->file('image')->store('workshops/images', 'public');
    
    // Handle the video upload
    $videoPath = $request->file('video')->store('workshops/videos', 'public');

    // Create the new workshop
    Workshop::create([
        'name' => $validated['name'],
        'desc' => $validated['desc'],
        'image' => $imagePath,
        'video' => $videoPath,
    ]);

    return redirect()->route('workshops.index')->with('success', 'Workshop created successfully!');
}

public function update(Request $request, Workshop $workshop)
{
    // Validate the form data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'desc' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        'video' => 'nullable|mimes:mp4,avi,mkv|max:50000', // Max file size 50 MB (50,000 KB)
    ]);

    // If a new image was uploaded, delete the old one and store the new image
    if ($request->hasFile('image')) {
        // Delete the old image
        Storage::disk('public')->delete($workshop->image);
        
        // Store the new image
        $imagePath = $request->file('image')->store('workshops/images', 'public');
        $workshop->image = $imagePath;
    }

    // If a new video was uploaded, delete the old one and store the new video
    if ($request->hasFile('video')) {
        // Delete the old video
        Storage::disk('public')->delete($workshop->video);
        
        // Store the new video
        $videoPath = $request->file('video')->store('workshops/videos', 'public');
        $workshop->video = $videoPath;
    }

    // Update the workshop
    $workshop->update([
        'name' => $validated['name'],
        'desc' => $validated['desc'],
    ]);

    return redirect()->route('workshops.index')->with('success', 'Workshop updated successfully!');
}


    // Display the specified workshop
    public function show($id)
    {
        $workshop = Workshop::findOrFail($id);
        return view('workshops.show', compact('workshop'));
    }

    // Show the form for editing the specified workshop
    public function edit($id)
    {
        $workshop = Workshop::findOrFail($id);
        return view('workshops.edit', compact('workshop'));
    }

    

    // Remove the specified workshop from storage
    public function destroy($id)
    {
        $workshop = Workshop::findOrFail($id);
        $workshop->delete();

        return redirect()->route('workshops.index')->with('success', 'Workshop deleted successfully.');
    }
}
