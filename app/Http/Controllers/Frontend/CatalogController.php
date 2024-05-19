<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Catalog;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::get();
        return view('frontend.catalog.index', compact('catalogs'));
    }
    public function showslug($slug)
    {
        $catalog = Catalog::where('slug', $slug)->firstOrFail();
        return view('frontend.catalog.single', compact('catalog'));
    }
}
