<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $items = ArticleCategory::all();

        return view('admin.articlecategory.index', compact('items'));
    }

    public function create()
    {
        return view('admin.articlecategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ArticleCategory::rules());

        $slug = str_slug($request->name).'-'.uniqid();
        $request->request->add(['slug' => $slug]);

        ArticleCategory::create($request->all());

        return redirect()->route(ADMIN . '.articlecategory.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = ArticleCategory::findOrFail($id);

        return view('admin.articlecategory.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ArticleCategory::rules(true, $id));

        $item = ArticleCategory::findOrFail($id);

        $slug = str_slug($request->name).'-'.uniqid();
        $request->request->add(['slug' => $slug]);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.articlecategory.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        ArticleCategory::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

