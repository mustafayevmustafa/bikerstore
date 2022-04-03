<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.setting.edit')->with([
            'action' => route('setting.update',$setting),
            'method' => 'PUT',
            'data'   => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        $validate = $request->validated();
        $old_image = $request->old_image;
        if($request->hasFile('site_logo')){
            $image_path = 'site_logo/' . time() . '.' . $request->file('site_logo')->extension();

            $request->file('site_logo')->storeAs('public', $image_path);

            $validate['site_logo'] = $image_path;
            Storage::disk('public')->delete($old_image);
            $setting->update($validate);
            return redirect()->route('setting.edit',$setting)
            ->with('success', "Setting updated");
        }else{
            $setting->update([
                'site_title'  => $request->site_title,
                'site_url'    => $request->site_url,
                'address'     => $request->address,
                'email'       => $request->email,
                'mobile'      => $request->mobile,
                'description' => $request->description,
                'keywords'    => $request->keywords,
                'author'      => $request->author
            ]);
            return redirect()->route('setting.edit',$setting)
            ->with('success', "Setting updated");
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
