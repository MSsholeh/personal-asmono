<?php

namespace App\Http\Controllers\Admin;

use App\CompanyProfile;
use Illuminate\Http\Request;
use App\GeneralSetting;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;


class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = CompanyProfile::first();
        return view('admin.companyprofile.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'link' => ['required', 'active_url', 'max:2000']
        ]);
        $item = CompanyProfile::firstOrFail();
        $item->update([
            'title' => $request->input('title'),
            'link' => $request->input('link'),
        ]);
        return redirect()->route(ADMIN . '.companyprofile.index')->withSuccess(trans('app.success_update'));;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyProfile $companyProfile)
    {
        //
    }
}
