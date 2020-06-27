<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
        $items = Message::latest('created_at')->get();

        return view('admin.message.index', compact('items'));
    }

    public function create()
    {
        return view('admin.message.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Message::rules());

        Message::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Message::findOrFail($id);

        return view('admin.message.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Message::rules(true, $id));

        $item = Message::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.message.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Message::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

