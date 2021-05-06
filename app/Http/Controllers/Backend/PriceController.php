<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices=Price::paginate(15);
        return view('Backend.prices.index',['prices'=>$prices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_price=$this->validate($request,[
            'price'=>'required|numeric',
            'title'=>'required',
            'description'=>'required',
            'icon'=>'required'
            
        ]);
        
        $price=new Price();
        $price->price=$request->price;
        $price->title=$request->title;
        $price->description=$request->description;
        $price->icon=$request->icon;
        $price->save();
        return redirect()->route('listPrice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $prices=Price::where('title','LIKE',"%$request->search%")
                                ->orWhere('price','LIKE',"%$request->search%")
                                ->orWhere('description','LIKE',"%$request->search%")
                                ->get();
        return view('Backend.prices.index',['prices'=>$prices]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prices=Price::where('id',$id)->first();
        return view('Backend.prices.edit',['prices'=>$prices]);
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
        $data_price=$this->validate($request,[
            'price'=>'required',
            'title'=>'required',
            'description'=>'required',
            'icon'=>'required'
            
        ]);
        
        $price=Price::where('id',$id)->first();
        $price->price=$request->price;
        $price->title=$request->title;
        $price->description=$request->description;
        $price->icon=$request->icon;
        $price->save();
        return redirect()->route('listPrice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Price::where('id',$id)->delete();
        return redirect()->route('listPrice');
    }
}
