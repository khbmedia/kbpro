<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::paginate(15);
        return view('Backend.testimonials.index',['testimonials'=>$testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.testimonials.create');
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
            'witnens'=>'required',
            'address'=>'required',
            'company_name'=>'required',
            'position'=>'required',
            'quote'=>'required',
            'profile'=>'required'
        ]);

        $path=$request->file('profile')->store('profiles');
        $testimonials=new Testimonial();
        $testimonials->witnens=$request->witnens;
        $testimonials->address=$request->address;
        $testimonials->company_name=$request->company_name;
        $testimonials->position=$request->position;
        $testimonials->quote=$request->quote;
        $testimonials->profile=$path;
        $testimonials->save();
        return redirect()->route('listTestimonial');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $testimonials=Testimonial::where('witnens','LIKE',"%$request->search%")->orWhere('quote','LIKE',"%$request->search%")->paginate(15);
        return view('Backend.testimonials.index',['testimonials'=>$testimonials]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials=Testimonial::where('id',$id)->first();
        return view('Backend.testimonials.edit',['testimonials'=>$testimonials]);
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
            'witnens'=>'required',
            'address'=>'required',
            'company_name'=>'required',
            'position'=>'required',
            'quote'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('profile')){
            unlink('storage/'.$request->old_image);
            $path=$request->file('profile')->store('profiles');
        }
        $data=[
            'witnens'=>$request->witnens,
            'address'=>$request->address,
            'company_name'=>$request->company_name,
            'position'=>$request->position,
            'quote'=>$request->quote,
            'profile'=>$path
        ];
        Testimonial::where('id',$id)->update($data);
        return redirect()->route('listTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Testimonial::where('id',$id)->first();
        unlink('storage/'.$get->profile);
        Testimonial::where('id',$id)->delete();
        return redirect()->route('listTestimonial');
    }
}
