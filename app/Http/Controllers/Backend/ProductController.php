<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(15);
        return view('Backend.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.products.create');
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
            'product_name'=>'required',
            'description'=>'required',
            'thumbnail'=>'required'
        ]);
        $path=$request->file('thumbnail')->store('Thumbnials');
        $attachment="";
        if($request->hasFile('attachment')){
            $attachment=$request->file('attachment')->store('Attachment');
        }
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->description=$request->description;
        $product->attachment=$attachment;
        $product->thumbnail=$path;
        $product->save();
        return redirect()->route('listProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $products=Product::where('product_name','LIKE',"%$request->search%")->orWhere('description','LIKE',"%$request->search%");
        return view('Backend.products.index',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::where('id',$id)->first();
        return view('Backend.products.edit',['products'=>$products]);
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
            'product_name'=>'required',
            'description'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            if($request->old_image!=null){
                unlink('storage/'.$request->old_image);
            }
            $path=$request->file('thumbnail')->store('Thumbnials');
        }
        $attachment=$request->old_attachment;
        if($request->hasFile('attachment')){
            if($attachment!=null){
                // unlink('storage/'.$request->old_attachment);
            }
            $attachment=$request->file('attachment')->store('Attachment');
        }
        $data=[
            'product_name'=>$request->product_name,
            'attachment'=>$attachment,
            'description'=>$request->description,
            'thumbnail'=>$path
        ];
        Product::where('id',$id)->update($data);
        return redirect()->route('listProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Product::where('id',$id)->first();
        if($get->thumbnail!=null){
            unlink('storage/'.$get->thumbnail);
        }
        if($get->attachment!=null){
            unlink('storage/'.$get->attachment);
        }
        
        Product::where('id',$id)->delete();
        return redirect()->route('listProduct');
    }
}
