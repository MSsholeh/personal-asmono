<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    public function index()
    {
        $items = Slider::latest('created_at')->get();

        return view('admin.sliders.index', compact('items'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Slider::rules());

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

            Slider::create([
                'image' => 'uploads/'.$uploadname,
                'title' => $request->title,
                'sub_title' => $request->sub_title
            ]);
        }else{
            Slider::create($request->all());
        }

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Slider::findOrFail($id);

        return view('admin.sliders.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Slider::rules(true, $id));

        $item = Slider::findOrFail($id);

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
                'sub_title' => $request->sub_title
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.sliders.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Slider::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

