<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Frequently;

class FrequentlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frequentlys=Frequently::paginate(15);
        return view('Backend.frequentlys.index',['frequentlys'=>$frequentlys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.frequentlys.create');
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
            'question'=>'required',
            'description'=>'required',
            
        ]);
        $frequently=new Frequently();
        $path="";
        if($request->hasFile('thumbnail')){
            $path=$request->file('thumbnail')->store('Frequentlys');
        }
        $frequently->question=$request->question;
        $frequently->description=$request->description;
        $frequently->photo=$path;
        $frequently->save();
        return redirect()->route('listFrequently');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $frequentlys=Frequently::where('photo','LIKE',"%$request->search%")
                                ->orWhere('question','LIKE',"%$request->search%")
                                ->orWhere('description','LIKE',"%$request->search%")
                                ->get();
        return view('Backend.frequentlys.index',['frequentlys'=>$frequentlys]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frequentlys=Frequently::where('id',$id)->first();
        return view('Backend.frequentlys.edit',['frequentlys'=>$frequentlys]);
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
            'question'=>'required',
            'description'=>'required',
            
        ]);
        $frequently=Frequently::where('id',$id)->first();
        $old_image=$request->old_image;
        $path=$old_image;
        if($request->hasFile('thumbnail')){
            if($path!=null){
                unlink('storage/'.$path);
            }
            $path=$request->file('thumbnail')->store('Frequentlys');
        }
        $frequently->question=$request->question;
        $frequently->description=$request->description;
        $frequently->photo=$path;
        $frequently->save();
        return redirect()->route('listFrequently');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Frequently::where('id',$id)->first();
        if($get->photo!=null){
            unlink('storage/'.$get->photo);
        }
        $get->delete();
        return redirect()->route('listFrequently');
    }
}
