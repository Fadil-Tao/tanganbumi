<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catalog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
   
    public function index(): View
    {
        $galleries = Gallery::get();
        $catalogs = Catalog::get();

        return view('admin.gallery.index', compact('galleries','catalogs'));
    }

    public function create(): View
    {
        $catalogs = Catalog::all();
        return view('admin.gallery.create', compact('catalogs'));
    }

    public function store(GalleryRequest $request): RedirectResponse
    {
        if($request->validated()) {
            $catalog_id = (int)$request->catalog_id;
            $photo = $request->file('photo')->store('assets/gallery', 'public');
            Gallery::create($request->except('photo') + ['photo' => $photo, 'catalog_id' => $catalog_id]);
        }

        return redirect()->route('admin.galleries.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit( Gallery $gallery): View
    {
        $catalogs = Catalog::all();
        return view('admin.gallery.edit', compact('gallery', 'catalogs'));
    }

    public function update(GalleryRequest $request, Gallery $gallery): RedirectResponse
    {
        if($request->validated()){
            if($request -> photo){
                File::delete('storage/'.$gallery->photo);
                $photo = $request->file('photo')->store('assets/gallery', 'public');
                $gallery->update($request->except('photo') + ['photo' => $photo]);
            }else{
                $gallery->update($request->validated());
            }
        } 

        return redirect()->route('admin.galleries.edit', $gallery->id)->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        File::delete('storage/'.$gallery->photo);
        $gallery->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}