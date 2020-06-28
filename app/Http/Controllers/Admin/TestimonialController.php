<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class TestimonialController extends Controller
{
    public function index()
    {
        $items = Testimonial::latest('created_at')->get();

        return view('admin.testimonial.index', compact('items'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Testimonial::rules());

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            Testimonial::create([
                'image'         => 'uploads/'.$uploadname,
                'name'          => $request->name,
                'position'      => $request->position,
                'description'   => $request->description,
            ]);
        }else{
            Testimonial::create($request->all());
        }

        return redirect()->route(ADMIN . '.testimonial.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Testimonial::findOrFail($id);

        return view('admin.testimonial.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Testimonial::rules(true, $id));

        $item = Testimonial::findOrFail($id);

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            $item->update([
                'image'         => 'uploads/'.$uploadname,
                'name'          => $request->name,
                'position'      => $request->position,
                'description'   => $request->description,
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.testimonial.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Testimonial::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

