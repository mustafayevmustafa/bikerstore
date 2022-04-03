<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\ReklamRequest;
use App\Models\Reklam;
//use Illuminate\Support\Facades\File;
class ReklamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reklam.index')->with([
            'reklams' => Reklam::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reklam.edit')->with([
            'action' => route('reklam.store'),
            'method' => null,
            'data'   => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReklamRequest $request)
    {
        $validated = $request->validated();
        $image_path = 'reklam/' . time() . '.' . $request->file('image')->extension();

        $request->file('image')->storeAs('public', $image_path);

        $validated['image'] = $image_path;
        $marka     = Reklam::create($validated);
        return redirect()->route('reklam.index')->with('success','Reklam has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reklam $reklam)
    {
        return view('admin.reklam.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $reklam
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reklam $reklam)
    {
        return view('admin.reklam.edit')->with([
            'action' => route('reklam.update',$reklam),
            'method' => 'PUT',
            'data'   => $reklam
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReklamRequest $request, Reklam $reklam)
    {

        $validate = $request->validated();
        $old_image = $request->old_image;


        if($request->hasFile('image')){
            $image_path = 'reklam/' . time() . '.' . $request->file('image')->extension();

            $request->file('image')->storeAs('public', $image_path);

           $image = $validate['image'] = $image_path;


            Storage::disk('public')->delete($old_image);
            $reklam->update($validate);
            return redirect()->route('reklam.index')->with('success','Item has been updated successfully');
        }else{
            $reklam->update([
                'title'   => $request->title,
                'content' => $request->content,
                'link'    => $request->link
            ]);
            return redirect()->route('reklam.index')->with('success','Item has been updated successfully');
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
        $image = Reklam::find($id);
        $old_image = $image->image;
        Storage::disk('public')->delete($old_image);
        Reklam::find($id)->delete();
        return redirect()->route('reklam.index')
            ->withSuccess(__('Reklam delete successfully.'));
    }
}
