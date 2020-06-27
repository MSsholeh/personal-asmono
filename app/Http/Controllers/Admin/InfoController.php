<?php

namespace App\Http\Controllers\Admin;

use App\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Info::latest('created_at')->get();

        return view('admin.info.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2000'],
        ]);
        Info::create($request->only(['title','description']));
        return redirect()->route(ADMIN .'.info.index')->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        return view('admin.info.edit')->with(['item'=> $info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2000'],
        ]);
        $info->update($request->only(['title','description']));
        return back()->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $info->delete();
        return redirect()->route(ADMIN .'.info.index')->withSuccess(trans('app.success_destroy'));
    }
}
