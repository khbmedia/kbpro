<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Destination;
use App\Tour;
use App\Travel_Type;
use App\Gallery;
use DB;
use Auth;
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $tour=DB::table('tours')
        ->orderBy('id','desc')
        ->paginate(15);
    return view('Backend.tours.index',['tours'=>$tour]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_type=Travel_Type::all();
        $destination=Destination::all();
        $data=[
            'destinations'=>$destination,
            'TravelType'=>$travel_type
        ];
        return view('Backend.tours.create',$data);
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
            'code'=>'required',
            'location'=>'required',
            'des_id'=>'required',
            'amount_night'=>'required',
            'thumbnail'=>'required',
            'amount_day'=>'required',
            'type_id'=>'required',
            'overview'=>'required'
        ]);
        $path="";
        if($request->hasFile('thumbnail')){
            $path=$request->file('thumbnail')->store('Thumbnails');
        }
        $path_video="";
        if($request->hasFile('video')){
            $path_video=$request->file('video')->store('Videos');
        }
        
        $tour=new Tour();
        $tour->code=$request->code;
        $tour->location=$request->location;
        $tour->des_id=$request->des_id;
        $tour->overview=$request->overview;
        $tour->amount_night=$request->amount_night;
        $tour->amount_day=$request->amount_day;
        $tour->thumbnail=$path;
        $tour->type_id=$request->type_id;
        $tour->video=$path_video;
        $tour->save();
        $path_gallary="";
        if($request->hasFile('gallery')){
            foreach($request->file('gallery') as $item){
                $path_gallary=$item->store("Gallery");
                $gallery=new Gallery();
                $gallery->tour_id=$tour->id;
                $gallery->image=$path_gallary;
                $gallery->save();
            }
        }
        return redirect()->route('listTour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour=Tour::query()->where('code','LIKE',"%{$request->search}%")->orWhere('content','LIKE',"%{$request->search}%")->paginate(15);
    // dd($category);
    return view('Backend.tours.index',['tours'=>$tour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destinations=Destination::all();
        $tour=Tour::where('id',$id)->first();
        return view('Backend.tours.edit',['tours'=>$tour,'destinations'=>$destinations]);
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
            'code'=>'required',
            'location'=>'required',
            'des_id'=>'required',
            'amount_night'=>'required',
            'thumbnail'=>'required',
            'amount_day'=>'required',
            'type_id'=>'required',
            'overview'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            $path=$request->file('thumbnail')->store('Thumbnails');
            unlink('storage/'.$request->old_image);
        }
        $path_video=$request->old_video;
        if($request->hasFile('video')){
            $path_video=$request->file('video')->store('Video');
            unlink('storage/'.$request->old_video);
        }
        $tour=Tour::where('id',$id)->first();
        $tour->code=$request->code;
        $tour->location=$request->location;
        $tour->des_id=$request->des_id;
        $tour->overview=$request->overview;
        $tour->amount_night=$request->amount_night;
        $tour->amount_day=$request->amount_day;
        $tour->thumbnail=$path;
        $tour->type_id=$request->type_id;
        $tour->video=$path_video;
        $tour->save();
        if($request->hasFile('gallery')){
            $gallery=Gallery::where('tour_id',$tour->id)->get();
            foreach($gallery as $item){
                unlink('storage/'.$item->image);
                Gallery::where('id',$item->id)->delete();
            }
            foreach($request->file('gallery') as $item){
                $path_gallary=$item->store("Gallery");
                $gallery=new Gallery();
                $gallery->tour_id=$tour->id;
                $gallery->image=$path_gallary;
                $gallery->save();
            }
        }
        return redirect()->route('listTour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Tour::where('id',$id)->with('gallery')->first();
        unlink('storage/'.$get->thumbnail);
        unlink('storage/'.$get->video);
        foreach($get->gallery as $item){
            unlink('storage/'.$item->image);
            Gallery::where('id',$item->id)->delete();
        }
        Tour::where('id',$id)->delete();
        return redirect()->route('listTour');
    }
}
