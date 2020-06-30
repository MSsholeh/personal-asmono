<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
use Image;

class AboutController extends Controller
{
    public function index()
    {
        return redirect('admin/about/1/edit')->withSuccess(trans('app.success_update'));
    }


    public function store(Request $request)
    {
        $this->validate($request, GeneralSetting::rules());

        GeneralSetting::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    public function edit($id)
    {
        $item = GeneralSetting::findOrFail($id);

        return view('admin.about.edit', compact('item'));
    }

    public function update(Request $request)
    {
        $id=1;

        $this->validate($request, GeneralSetting::rules(true, $id));

        $item = GeneralSetting::findOrFail($id);

        if($image = $request->file('about_photo')) {

            $image       = $request->file('about_photo');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('uploads/' .$filename));

            $item->update([
                'about_photo' => 'uploads/' .$filename
            ]);
        }

        if($favicon = $request->file('about_image')) {

            $favicon    = $request->file('about_image');
            $filefav    = $favicon->getClientOriginalName();

            $favicon_resize = Image::make($favicon->getRealPath());
            $favicon_resize->save(public_path('uploads/' .$filefav));

            $item->update([
                'about_image' => 'uploads/' .$filefav
            ]);
        }


        $item->update([
            'about_name' => $request->about_name,
            'about_caption' => $request->about_caption,
            'about_short_description' => $request->about_short_description,
            'year_experience' => $request->year_experience,
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
            'email' => $request->email,
            'address'=> $request->address,
        ]);

        return redirect()->route(ADMIN . '.about.index');
    }
}

