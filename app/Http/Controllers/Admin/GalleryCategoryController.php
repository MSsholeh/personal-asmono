<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GalleryCategory;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $items = GalleryCategory::all();

        return view('admin.gallerycategory.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallerycategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, GalleryCategory::rules());

        GalleryCategory::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = GalleryCategory::findOrFail($id);

        return view('admin.gallerycategory.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, GalleryCategory::rules(true, $id));

        $item = GalleryCategory::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.gallerycategory.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        GalleryCategory::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

