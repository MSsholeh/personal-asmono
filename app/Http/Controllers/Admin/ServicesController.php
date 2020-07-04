<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $items = Services::latest('created_at')->get();

        return view('admin.services.index', compact('items'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Services::rules());

        Services::create($request->all());

        return redirect()->route(ADMIN . '.services.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Services::findOrFail($id);

        return view('admin.services.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Services::rules(true, $id));

        $item = Services::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.services.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Services::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

