<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class PodcastController extends Controller
{
    public function index()
    {
        $items = Portfolio::where('type','podcast')->latest('created_at')->get();

        return view('admin.podcast.index', compact('items'));
    }

    public function create()
    {
        return view('admin.podcast.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Portfolio::rules());

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            Portfolio::create([
                'image'         => 'uploads/'.$uploadname,
                'title'         => $request->title,
                'description'   => $request->description,
                'status'        => $request->status,
                'type'          => $request->type,
            ]);
        }else{
            Portfolio::create($request->all());
        }

        return redirect()->route(ADMIN . '.podcast.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Portfolio::findOrFail($id);

        return view('admin.podcast.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Portfolio::rules(true, $id));

        $item = Portfolio::findOrFail($id);

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            $item->update([
                'image'         => 'uploads/'.$uploadname,
                'title'         => $request->title,
                'description'   => $request->description,
                'status'        => $request->status,
                'type'          => $request->type,
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.podcast.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Portfolio::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

