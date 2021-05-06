<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Project;
use App\Service;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::paginate(15);
        return view('Backend.projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$data=[
    'services'=>Service::all()
];
        return view('Backend.projects.create',$data);
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
            'project_name'=>'required',
            'project_info'=>'required',
            'thumbnail'=>'required'            
        ]);
        $projects=new Project();
        $projects->project_name=$request->project_name;
        $projects->project_info=$request->project_info;
        if($request->service_id!=null){
            $projects->service_id=$request->service_id;
        }
        
        $projects->thumbnail=$request->file('thumbnail')->store('Thumbnails');
        $projects->save();
        return redirect()->route('listProject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $projects=Project::where('project_name','LIKE',"%$request->search%")
                            ->orWhere('project_info','LIKE',"%$request->search%")
                            ->orWhere('service_id','LIKE',"%$request->search%")
                            ->paginate(15);
        return view('Backend.projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $data=[
            'projects'=>Project::where('id',$id)->first(),
            'services'=>Service::all()
        ];
        return view('Backend.projects.edit',$data);
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
            'project_name'=>'required',
            'project_info'=>'required'         
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            $path=$request->file('thumbnail')->store('Thumbnails');
        }
        $data=[
            'project_name'=>$request->project_name,
            'project_info'=>$request->project_info,
            'service_id'=>$request->service_id,
            'thumbnail'=>$path  
        ];
        Project::where('id',$id)->update($data);
        return redirect()->route('listProject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Project::where('id',$id)->first();
        unlink('storage/'.$get->thumbnail);
        Project::where('id',$id)->delete();
        return redirect()->route('listProject');
    }
}
