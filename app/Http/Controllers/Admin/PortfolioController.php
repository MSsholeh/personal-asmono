<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioCategory;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioController extends Controller
{
    public function index()
    {
        $items = Portfolio::latest('created_at')->get();

        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        $category = PortfolioCategory::pluck('name', 'id');

        return view('admin.portfolio.create', compact('category'));
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

            // crop image
            $image = Image::make(public_path('/uploads/'. $uploadname));
            $croppath = public_path('/uploads/'.$uploadname);

            $image->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
            $image->save($croppath);

            Portfolio::create([
                'image' => 'uploads/'.$uploadname,
                'title' => $request->title,
                'desc' => $request->desc,
                'category_id' => $request->category_id
            ]);
        }else{
            Portfolio::create($request->all());
        }

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Portfolio::findOrFail($id);
        $category = PortfolioCategory::pluck('name', 'id');

        return view('admin.portfolio.edit', compact('item','category'));
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

            // crop image
            $image = Image::make(public_path('/uploads/'. $uploadname));
            $croppath = public_path('/uploads/'.$uploadname);

            $image->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
            $image->save($croppath);

            $item->update([
                'image' => 'uploads/'.$uploadname,
                'title' => $request->title,
                'desc'  => $request->desc,
                'category_id' => $request->category_id
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.portfolio.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Portfolio::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

