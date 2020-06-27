<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class AboutController extends Controller
{
    public function index()
    {
        $items = About::latest('created_at')->get();

        return view('admin.about.index', compact('items'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, About::rules());

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

            About::create([
                'image' => 'uploads/'.$uploadname,
                'title' => $request->title,
                'desc' => $request->desc
            ]);
        }else{
            About::create($request->all());
        }

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = About::findOrFail($id);

        return view('admin.about.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, About::rules(true, $id));

        $item = About::findOrFail($id);

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
                'desc'  => $request->desc
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.about.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        About::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

