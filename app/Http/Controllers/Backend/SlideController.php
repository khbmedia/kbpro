<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides=Slide::paginate(15);
        return view('Backend.slides.index',['slides'=>$slides]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.slides.create');
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
            'image'=>'required',
        ]);
        $slide=new Slide();
        $path="";
        if($request->hasFile('image')){
            $path=$request->file('image')->store('Slides');
        }
        if($request->title!="")
        $slide->title=$request->title;

        if($request->description!="")
        $slide->description=$request->description;

        if($request->link!="")
        $slide->link=$request->link;

        $slide->image=$path;
        $slide->save();
        return redirect()->route('listSlide');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $slides=Slide::where('image','LIKE',"%$request->search%")->get();
        return view('Backend.slides.index',['slides'=>$slides]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slides=Slide::where('id',$id)->first();
        return view('Backend.slides.edit',['slides'=>$slides]);
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
        $path="";
        $slide=Slide::where('id',$id)->first();
        if($request->hasFile('image')){
            $path=$request->old_image;
            if($path!=null){
                unlink("storage/".$path);
            }$path=$request->file('image')->store('Slides');
        }else{
            $path=$request->old_image;
        }
        
        
        if($request->title!="")
        $slide->title=$request->title;
        
        if($request->description!="")
        $slide->description=$request->description;

        if($request->link!="")
        $slide->link=$request->link;

        $slide->image=$path;
        $slide->save();
        return redirect()->route('listSlide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Slide::where('id',$id)->first();
        if($get->image!=null){
            unlink('storage/'.$get->image);
        }
        $get->delete();
        return redirect()->route('listSlide');
    }
}
