<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
use Image;

class GeneralSettingController extends Controller
{
    public function index()
    {
        return redirect('admin/generalsetting/1/edit')->withSuccess(trans('app.success_update'));
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

        return view('admin.generalsetting.edit', compact('item'));
    }

    public function update(Request $request)
    {
        $id=1;

        $this->validate($request, GeneralSetting::rules(true, $id));

        $item = GeneralSetting::findOrFail($id);

        if($image = $request->file('website_logo')) {

            $image       = $request->file('website_logo');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(190, 40);
            $image_resize->save(public_path('uploads/' .$filename));

            $item->update([
                'website_logo' => 'uploads/' .$filename
            ]);
        }

        if($favicon = $request->file('website_favicon')) {

            $favicon    = $request->file('website_favicon');
            $filefav    = $favicon->getClientOriginalName();

            $favicon_resize = Image::make($favicon->getRealPath());
            $favicon_resize->resize(40, 40);
            $favicon_resize->save(public_path('uploads/' .$filefav));

            $item->update([
                'website_favicon' => 'uploads/' .$filefav
            ]);
        }


        $item->update([
            'website_name' => $request->website_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'metatext' => $request->metatext,
            'keyword' => $request->keyword,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,

        ]);


        return redirect()->route(ADMIN . '.generalsetting.index');
    }
}

