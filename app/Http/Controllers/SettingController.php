<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use App\Http\Requests\settingRequest;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('dashboead.settings');
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
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(settingRequest $request, setting $setting)
    {
        //
       
      /* $setting=setting::find($id);*/
        $setting->update($request->validated());
       /* $setting->logo=$request->logo;
        $setting->decsrption=$request->decsrption;
        $setting->adddress=$request->adddress;
        $setting->favicon=$request->favicon;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->facebook=$request->facebook;
        $setting->instagram=$request->instagram;
        $setting->save();*/
$image=$request->file('logo')->getClientOriginalName();
$path=$request->file('logo')->storeAs('user',$image,'kinana');
$setting->logo=$path;

                 /* $image=setting::find();*/
              /*   $setting=setting::find($id);*/
             /*    $setting->logo=$request->logo;*/

/*return $setting;*/
        // return redirect()->route('setting')->with('success', 'تم تحديث الاعدادات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
