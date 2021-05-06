<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::paginate(15);
        return view('Backend.services.index',['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.services.create');
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
            'service_name'=>'required',
            'description'=>'required',
            'thumbnail'=>'required'
        ]);
        $path=$request->file('thumbnail')->store('Thumbnials');
        // $attachment="";
        // if($request->hasFile('attachment')){
        //     $attachment=$request->file('attachment')->store('Attachment');
        // }
        $service=new Service();
        $service->service_name=$request->service_name;
        $service->description=$request->description;
        // $service->attachment=$attachment;
        $service->thumbnail=$path;
        $service->save();
        return redirect()->route('listService');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $services=Service::where('service_name','LIKE',"%$request->search%")->orWhere('description','LIKE',"%$request->search%");
        return view('Backend.services.index',['services'=>$services]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Service::where('id',$id)->first();
        return view('Backend.services.edit',['services'=>$services]);
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
            'service_name'=>'required',
            'description'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            if($request->old_image!=null){
                unlink('storage/'.$request->old_image);
            }
            $path=$request->file('thumbnail')->store('Thumbnials');
        }
        // $attachment=$request->old_attachment;
        // if($request->hasFile('attachment')){
        //     if($attachment!=null){
        //         // unlink('storage/'.$request->old_attachment);
        //     }
        //     $attachment=$request->file('attachment')->store('Attachment');
        // }
        $data=[
            'service_name'=>$request->service_name,
            // 'attachment'=>$attachment,
            'description'=>$request->description,
            'thumbnail'=>$path
        ];
        Service::where('id',$id)->update($data);
        return redirect()->route('listService');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Service::where('id',$id)->first();
        if($get->thumbnail!=null){
            unlink('storage/'.$get->thumbnail);
        }
        if($get->attachment!=null){
            unlink('storage/'.$get->attachment);
        }
        
        Service::where('id',$id)->delete();
        return redirect()->route('listService');
    }
}

