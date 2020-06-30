<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experiences;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class ExperiencesController extends Controller
{
    public function index()
    {
        $items = Experiences::latest('created_at')->get();

        return view('admin.experiences.index', compact('items'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Experiences::rules());

        Experiences::create($request->all());

        return redirect()->route(ADMIN . '.experiences.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Experiences::findOrFail($id);

        return view('admin.experiences.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Experiences::rules(true, $id));

        $item = Experiences::findOrFail($id);

        $item->update($request->all());


        return redirect()->route(ADMIN . '.experiences.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Experiences::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

