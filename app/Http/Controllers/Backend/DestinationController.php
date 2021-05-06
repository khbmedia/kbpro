<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Destination;
class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations=Destination::orderByDesc('id')->paginate(15);
        return view('Backend.destinations.index',['destinations'=>$destinations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.destinations.create');
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
            'destination'=>'required',
            'description'=>'required',
            'thumbnail'=>'required'
        ]);
        $path=$request->file('thumbnail')->store('Thumbnials');
       
        $destination=new Destination();
        $destination->destination=$request->destination;
        $destination->description=$request->description;
        $destination->thumbnail=$path;
        $destination->save();
        return redirect()->route('listDestination');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $destinations=Destination::where('destination','LIKE',"%$request->search%")->orWhere('description','LIKE',"%$request->search%");
        return view('Backend.destinations.index',['destinations'=>$destinations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destinations=Destination::where('id',$id)->first();
        return view('Backend.destinations.edit',['destinations'=>$destinations]);
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
            'destination'=>'required',
            'description'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            if($request->old_image!=null){
                unlink('storage/'.$request->old_image);
            }
            $path=$request->file('thumbnail')->store('Thumbnials');
        }
       
        $data=[
            'destination'=>$request->destination,
            'description'=>$request->description,
            'thumbnail'=>$path
        ];
        Destination::where('id',$id)->update($data);
        return redirect()->route('listDestination');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Destination::where('id',$id)->first();
        if($get->thumbnail!=null){
            unlink('storage/'.$get->thumbnail);
        }
        
        Destination::where('id',$id)->delete();
        return redirect()->route('listDestination');
    }
}
