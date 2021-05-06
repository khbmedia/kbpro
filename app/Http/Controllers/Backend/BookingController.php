<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Geust;
use DB;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=DB::table('books')
            ->join('geusts','books.geust_id','=','geusts.id')
            ->join('tours','books.tour_id','=','tours.id')
            ->select('books.*','geusts.*','tours.*')
            ->paginate(15);
        
       
        $data=[
            'book'=>$book
        ];
        return view('backend.books.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $book=DB::table('books')
            ->join('geusts','books.geust_id','=','geusts.id')
            ->join('tours','books.tour_id','=','tours.id')
            ->select('books.*','geusts.*','tours.*')
            ->where('tours.code','LIKE',"%$request->search%")
            ->orWhere('geusts.id','LIKE',"%$request->search%")
            ->orWhere('books.travel_date','LIKE',"%$request->search%")
            ->paginate(15);
        $data=[
            'book'=>$book
        ];
        return view('backend.books.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_status($id,$status){
        
        Book::where('id',$id)->update(['status'=>$status]);
        return redirect()->route('listBooking');
    }
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
