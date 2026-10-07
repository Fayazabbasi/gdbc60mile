<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display gallery pictures.
     */
    public function index()
    {
        $galleries = Gallery::orderBy('sort_order')
            ->latest()
            ->get();

        return view('backend.galleries.create', compact('galleries'));
    }


    /**
     * Show form for creating a gallery picture.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }


    /**
     * Store a new gallery picture.
     */
public function store(Request $request)
{
$request->validate([
'title'       => 'required|string|max:255',
'images'      => 'required|array|min:1',
'images.*'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
'category'    => 'nullable|string|max:100',
'description' => 'nullable|string',
'is_active'   => 'nullable|boolean',
'sort_order'  => 'nullable|integer',
]);

foreach ($request->file('images') as $image) {

    $path = $image->store('gallery', 'public');

    Gallery::create([
        'title'       => $request->title,
        'image'       => $path,
        'category'    => $request->category,
        'description' => $request->description,
        'is_active'   => $request->boolean('is_active'),
        'sort_order'  => $request->sort_order ?? 0,
    ]);
}


return redirect()
    ->route('gallery.index')
    ->with('success', 'Gallery pictures uploaded successfully.');

}


    /**
     * Show form for editing a gallery picture.
     */
    public function edit(Gallery $gallery)
    {
        return view(
            'backend.gallery.edit',
            compact('gallery')
        );
    }


    /**
     * Update a gallery picture.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category'    => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'is_active'   => 'nullable|boolean',
            'sort_order'  => 'nullable|integer',
        ]);


        $gallery->title = $request->title;
        $gallery->category = $request->category;
        $gallery->description = $request->description;
        $gallery->is_active = $request->boolean('is_active');
        $gallery->sort_order = $request->sort_order ?? 0;


        // Replace image if a new one was uploaded
        if ($request->hasFile('image')) {

            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }

            $path = $request->file('image')->store(
                'gallery',
                'public'
            );

            $gallery->image = $path;
        }


        $gallery->save();


        return redirect()
            ->route('gallery.index')
            ->with('success', 'Gallery picture updated successfully.');
    }


    /**
     * Delete a gallery picture.
     */
    public function destroy(Gallery $gallery)
    {
        // Delete image from storage
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();


        return redirect()
            ->route('gallery.index')
            ->with('success', 'Gallery picture deleted successfully.');
    }
}
