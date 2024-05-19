<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CatalogRequest;
use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;

class CatalogController extends Controller
{
   
    public function index(): View
    {
        $catalogs = Catalog::get();

        return view('admin.catalog.index', compact('catalogs'));
    }

    public function create(): View
    {
        return view('admin.catalog.create');
    }

    public function edit(Catalog $catalog, Gallery $galleries): View
    {
        return view('admin.catalog.edit', compact('catalog' , 'galleries'));
    }

    public function store(CatalogRequest $request): RedirectResponse
    {
        if($request->validated()){

            $banner = $request->file('banner')->store('assets/catalog', 'public');
            $slug = Str::slug($request->title, '-');
            Catalog::create($request->except('banner') + ['banner' => $banner, 'slug' => $slug]);
        }
        

        return redirect()->route('admin.catalogs.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function update(CatalogRequest $request, Catalog $catalog): RedirectResponse
    {
        if($request->validated()){
            $slug = Str::slug($request->title, '-');
            if($request->banner){
                File::delete('storage/' . $catalog->banner);
                $banner = $request->file('banner')->store('assets/catalog', 'public');                
                $catalog->update($request->except('banner') + ['banner' => $banner, 'slug' => $slug]);
            }else{
                $catalog->update($request->validated() + ['slug' => $slug]);
            }
        }
        return redirect()->route('admin.catalogs.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(catalog $catalog): RedirectResponse
    {
        File::delete('storage/' . $catalog->banner);
        $catalog->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}


