<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Travel_Type;

class TravelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TravelType=Travel_Type::paginate(15);
        // dd($TravelType);
        return view('Backend.TravelType.index',['TravelType'=>$TravelType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.TravelType.create');
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
            'type'=>'required'
        ]);
        $TravelType=new Travel_Type();
        $TravelType->type=$request->type;
        $TravelType->save();
        return redirect()->route('listTravelType');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    $TravelType=Travel_Type::query()->where('type','LIKE',"%{$request->search}%")->orWhere('id','LIKE',"%{$request->search}%")->paginate(1);
    return view('Backend.TravelType.index',['TravelType'=>$TravelType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TravelType=Travel_Type::where('id',$id)->first();
        return view('Backend.TravelType.edit',['TravelType'=>$TravelType]);
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
            'type'=>'required'
        ]);
        Travel_Type::where('id',$id)->update(['type'=>$request->type]);
        return redirect()->route('listTravelType');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Travel_Type::where('id',$id)->delete();
        return redirect()->route('listTravelType');
    }
}
