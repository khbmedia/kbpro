<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials=Social::paginate(15);
        return view('Backend.socials.index',['socials'=>$socials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'social_name'=>'required',
            'icon'=>'required',
            'link'=>'required'
        ]);
        $social=new Social();
        $social->name=$request->social_name;
        $social->icon=$request->file('icon')->store('Icon');
        $social->link=$request->link;
        $social->save();
        return redirect()->route('listSocial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $socials=Social::where('social_name','LIKE',"%$request->search%")->get();
        return view('Backend.socials.index',['socials'=>$socials]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socials=Social::where('id',$id)->first();
        return view('Backend.socials.edit',['socials'=>$socials]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'social_name'=>'required',
            'link'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('icon')){
            if($path!=null){
                unlink('storage/',$path);
            }
            $path=$request->file('icon')->store('Icon');
        }
        $social=Social::where('id',$id)->first();
        $social->name=$request->social_name;
        $social->icon=$path;
        $social->link=$request->link;
        $social->save();
        return redirect()->route('listSocial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Social::where('id',$id)->first();
        if($get->icon!=null){
            unlink('storage/'.$get->icon);
        }
        $get->delete();
        return redirect()->route('listSocial');
    }
}
