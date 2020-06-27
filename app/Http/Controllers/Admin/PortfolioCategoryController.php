<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $items = PortfolioCategory::all();

        return view('admin.portfoliocategory.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfoliocategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, PortfolioCategory::rules());

        PortfolioCategory::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = PortfolioCategory::findOrFail($id);

        return view('admin.portfoliocategory.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, PortfolioCategory::rules(true, $id));

        $item = PortfolioCategory::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.portfoliocategory.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        PortfolioCategory::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

