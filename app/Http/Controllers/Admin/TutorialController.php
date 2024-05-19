<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TutorialRequest;

class TutorialController extends Controller
{
   
    public function index(): View
    {
        $tutorials = Tutorial::get();

        return view('admin.tutorials.index', compact('tutorials'));
    }

    public function create(): View
    {
        return view('admin.tutorials.create');
    }

    public function store(TutorialRequest $request): RedirectResponse
    {
        Tutorial::create($request->validated());

        return redirect()->route('admin.tutorials.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Tutorial $tutorial): View
    {
        return view('admin.tutorials.edit', compact('tutorial'));
    }

    public function update(TutorialRequest $request, Tutorial $tutorial): RedirectResponse
    {
        $tutorial->update($request->validated());

        return redirect()->route('admin.tutorials.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Tutorial $tutorial): RedirectResponse
    {
        $tutorial->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}