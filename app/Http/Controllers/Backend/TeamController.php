<?php







namespace App\Http\Controllers\Backend;



use App\Http\Controllers\Controller;



use Illuminate\Http\Request;



use App\Team;



class TeamController extends Controller



{



    /**



     * Display a listing of the resource.



     *



     * @return \Illuminate\Http\Response



     */



    public function index()



    {



        $teams=Team::paginate(15);



        $data=[



            'teams'=>$teams



        ];



        return view('Backend.teams.index',$data);



    }







    /**



     * Show the form for creating a new resource.



     *



     * @return \Illuminate\Http\Response



     */



    public function create()



    {



        return view('Backend.teams.create');



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



            'name'=>'required',



            'position'=>'required',



            'profile'=>'required',

            'background'=>'required'



        ]);



        $path=$request->file('profile')->store('Teams');



        $teams=new Team();



        $teams->name=$request->name;

        $teams->description=$request->background;

        $teams->position=$request->position;



        $teams->profile=$path;



        $teams->save();



        return redirect()->route('listTeam');



    }







    /**



     * Display the specified resource.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function show(Request $request)



    {



        $teams=Team::where('name','LIKE',"%$request->search%")



                    ->orWhere('position','LIKE',"%$request->search%")



                    ->paginate(15);



        $data=[



            'teams'=>$teams



        ];



        return view('Backend.teams.index',$data);



    }







    /**



     * Show the form for editing the specified resource.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function edit($id)



    {



        $teams=Team::where('id',$id)->first();



        $data=[



            'teams'=>$teams



        ];



        return view('Backend.teams.edit',$data);



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



            'name'=>'required',



            'position'=>'required',
            'background'=>'required'



        ]);



        $path=$request->old_image;



        if($request->hasFile('profile')){

            if($path!=null){

                unlink('storage/'.$path);

            }

            $path=$request->file('profile')->store('Profiles');

        }



        $data=[



            'name'=>$request->name,



            'position'=>$request->position,



            'profile'=>$path,

            'description'=>$request->background



        ];



        Team::where('id',$id)->update($data);



        return redirect()->route('listTeam');



    }







    /**



     * Remove the specified resource from storage.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function destroy($id)



    {



        $get=Team::where('id',$id)->first();

        if($get->profile!=null){

            unlink("storage/".$get->profile);

        }

        Team::where('id',$id)->delete();



        return redirect()->route('listTeam');



    }



}



