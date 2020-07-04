<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ArticleCategory;
use App\Article;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::latest('created_at')->get();

        return view('admin.article.index', compact('items'));
    }

    public function create()
    {
        $category = ArticleCategory::pluck('name', 'id');

        return view('admin.article.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, Article::rules());

        $slug = str_slug($request->title).'-'.uniqid();
        $request->request->add(['slug' => $slug]);

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);


            Article::create([
                'image'         => 'uploads/'.$uploadname,
                'title'         => $request->title,
                'slug'          => $request->slug,
                'category_id'   => $request->category_id,
                'description'   => $request->description,
                'status'        => $request->status,
            ]);
        }else{
            Article::create($request->all());
        }

        return redirect()->route(ADMIN . '.article.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Article::findOrFail($id);

        $category = ArticleCategory::pluck('name', 'id');

        return view('admin.article.edit', compact('item','category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Article::rules(true, $id));

        $item = Article::findOrFail($id);

        $slug = str_slug($request->title).'-'.uniqid();
        $request->request->add(['slug' => $slug]);

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
                'slug'          => $request->slug,
                'category_id'   => $request->category_id,
                'description'   => $request->description,
                'status'        => $request->status,
            ]);

        }else{

            $item->update($request->all());

        }

        return redirect()->route(ADMIN . '.article.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Article::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

