<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\BanRequest;
use App\Models\Ban;

class BanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ban.index')->with([
            'bans' => Ban::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ban.edit')->with([
            'action' => route('ban.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BanRequest $request)
    {
        $validated = $request->validated();
        $image_path = 'ban/' . time() . '.' . $request->file('image')->extension();

        $request->file('image')->storeAs('public', $image_path);

        $validated['image'] = $image_path;
        Ban::create($validated);
        return redirect()->route('ban.index')->with('success','Ban has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ban $ban)
    {
        return view('admin.ban.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $ban 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ban $ban)
    {
        return view('admin.ban.edit')->with([
            'action' => route('ban.update',$ban),
            'method' => 'PUT',
            'data'   => $ban
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BanRequest $request, Ban $ban)
    {
        $validate = $request->validated();
        
        $old_image = $request->old_image;
        
        
        if($request->hasFile('image')){
            $image_path = 'ban/' . time() . '.' . $request->file('image')->extension();

            $request->file('image')->storeAs('public', $image_path);

           $validate['image'] = $image_path;
            
            
            Storage::disk('public')->delete($old_image);
            $ban->update($validate);
            return redirect()->route('ban.index')->with('success','Item has been updated successfully');
        }else{
            $ban->update([
                'name'   => $request->name,
                'slug' => $request->slug,
            ]);
            return redirect()->route('ban.index')->with('success','Item has been updated successfully');
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
        $image = Ban::find($id);
        $old_image = $image->image;
        Storage::disk('public')->delete($old_image);
        Ban::find($id)->delete();
        return redirect()->route('ban.index')
            ->withSuccess(__('Ban delete successfully.'));
    }
}
