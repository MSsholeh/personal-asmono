<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class MemberController extends Controller
{
    public function index()
    {
        $items = Member::latest('created_at')->get();

        return view('admin.members.index', compact('items'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Member::rules());

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

            Member::create([
                'image' => 'uploads/'.$uploadname,
                'name' => $request->name,
                'desc' => $request->desc,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'website' => $request->website
            ]);
        }else{
            Member::create($request->all());
        }

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $this->validate($request, Member::rules(true, $id));

        $item = Member::findOrFail($id);

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
                'name' => $request->name,
                'desc' => $request->desc,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'website' => $request->website
            ]);

        }else{

            $item->update($request->all());

        }

        return view('admin.members.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Member::rules(true, $id));

        $item = Member::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.members.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Member::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

