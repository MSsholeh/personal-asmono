<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GalleryCategory;
use App\Gallery;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::latest('created_at')->get();

        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        $category = GalleryCategory::pluck('name', 'id');

        return view('admin.gallery.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, Gallery::rules());

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            // crop image
            $image = Image::make(public_path('/uploads/'. $uploadname));
            $croppath = public_path('/uploads/'.$uploadname);

            $image->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
            $image->save($croppath);

            Gallery::create([
                'image' => 'uploads/'.$uploadname,
                'title' => $request->title,
                'category_id' => $request->category_id,
                'year' => $request->year,
                'location' => $request->year,
            ]);
        }else{
            Gallery::create($request->all());
        }

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Gallery::findOrFail($id);

        $category = GalleryCategory::pluck('name', 'id');

        return view('admin.gallery.edit', compact('item','category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Gallery::rules(true, $id));

        $item = Gallery::findOrFail($id);

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            // crop image
            $image = Image::make(public_path('/uploads/'. $uploadname));
            $croppath = public_path('/uploads/'.$uploadname);

            $image->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
            $image->save($croppath);

            $item->update([
                'image' => 'uploads/'.$uploadname,
                'title' => $request->title,
                'category_id' => $request->category_id,
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.gallery.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Gallery::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

