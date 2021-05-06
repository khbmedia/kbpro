<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table('users')
                ->join('roles','users.role_id','=','roles.id')
                ->select('users.*','roles.role')
                ->paginate(15);
        return view("Backend.users.index",['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function create()
    {
        $roles=Role::all();
        return view('Backend.users.create',['roles'=>$roles]);
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
            'email'=>'required',
            'password'=>'required|same:con_password',
        ]);
        $path="";
        if($request->hasFile('profile')){
            $path=$request->file('profile')->store('profiles');
        }
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->role_id=$request->role_id;
        $user->profile=$path;
        $user->save();
        return redirect()->route('listUser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=User::where('name','LIKE',"%$request->search%")
                    ->orWhere('email','LIKE',"%$request->search%")
                    ->paginate(15);
        return view('Backend.users.index',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Role::all();
        $users=User::where('id',$id)->first();
        return view('Backend.users.edit',['users'=>$users,'roles'=>$roles]);
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
        $path=$request->old_image;
        if($request->hasFile('profile')){
            if($path!=null){
                unlink('storage/'.$request->old_image);
            }
            
            $path=$request->file('profile')->store('profiles');
        }
        $data=[];
        if(empty($request->password)){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'profile'=>$path
        ];
        }else{
            $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|same:con_password',
            ]);
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'profile'=>$path,
                'password'=>Hash::make($request->password)
            ];
        }
        
        User::where('id',$id)->update($data);
       

        return redirect()->route('listUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::where('id',$id)->first();
        $count=User::all()->count();
        
        if($user->id==Auth::user()->id){
            return redirect()->back()->with('error','You can not delete yourself.');
        }
        if($count==1){
            return redirect()->back()->with('error','You can not delete user because system can not work without user');
        }
        if($user->profile!=null){
            unlink('storage/'.$user->profile);
        }
        
        User::where('id',$id)->delete();

        return redirect()->route('listUser');
    }
}
