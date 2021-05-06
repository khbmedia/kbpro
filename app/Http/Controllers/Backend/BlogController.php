<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use DB;
use Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $blog=DB::table('blogs')
        ->join('categories','categories.id','=','blogs.category_id')
        ->select('blogs.*','categories.category')
        ->paginate(15);
    return view('Backend.blogs.index',['blogs'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('Backend.blogs.create',['categories'=>$category]);
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
            'title'=>'required',
            'content'=>'required',
            'thumbnail'=>'required',
            'category_id'=>'required'
        ]);
        $path="";
        if($request->hasFile('thumbnail')){
            $path=$request->file('thumbnail')->store('Thumbnails');
        }
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->thumbnail=$path;
        $blog->user_id=Auth::user()->id;
        $blog->category_id=$request->category_id;
        $blog->save();
        return redirect()->route('listBlog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Category::query()->where('title','LIKE',"%{$request->search}%")->orWhere('content','LIKE',"%{$request->search}%")->paginate(15);
    // dd($category);
    return view('Backend.blogs.index',['blogs'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::all();
        $blog=Blog::where('id',$id)->first();
        return view('Backend.blogs.edit',['blogs'=>$blog,'categories'=>$category]);
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
            'title'=>'required',
            'content'=>'required',
            'category_id'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            $path=$request->file('thumbnail')->store('Thumbnails');
            unlink('storage/'.$request->old_image);
        }
        $data=[
            'title'=>$request->title,
            'content'=>$request->content,
            'thumbnail'=>$path,
            'category_id'=>$request->category_id
        ];
        Blog::where('id',$id)->update($data);
        return redirect()->route('listBlog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Blog::where('id',$id)->first();
        unlink('storage/'.$get->thumbnail);
        Blog::where('id',$id)->delete();
        return redirect()->route('listBlog');
    }
}
