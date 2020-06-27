<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.users.index', compact('items'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, User::rules());

        User::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('admin.users.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, User::rules(true, $id));

        $item = User::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.users.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        User::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

