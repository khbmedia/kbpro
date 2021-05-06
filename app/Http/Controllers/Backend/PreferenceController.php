<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Preference;
use Illuminate\Support\Str;

class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preferences=Preference::paginate(15);
        return view('Backend.preferences.index',['preferences'=>$preferences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.preferences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_preference=$this->validate($request,[   
            'key'=>'required',
            'type'=>'required', 
        ]);
        
        $preference=new Preference();
        $preference->key=$request->key;
        if($request->icon!=null)
        $preference->icon=$request->icon;

        $preference->type=$request->type;
        if($request->value!=null)
        $preference->value=$request->value;

        $preference->save();
        return redirect()->route('listPreference');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $preferences=Preference::where('key','LIKE',"%$request->search%")
                                ->orWhere('type','LIKE',"%$request->search%")
                                ->orWhere('value','LIKE',"%$request->search%")
                                ->get();
        return view('Backend.preferences.index',['preferences'=>$preferences]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit_preference_company($type){
        $data=Preference::where('type',$type)->get();
        return view("Backend.preferences.edit_$type",[$type=>$data]);
    }
   
    public function update_preference_company(Request $request,$type){
        // dd($request->all());
        if($type=="social" || $type=="contact" || $type=="about"){
            $arr_key=[];
            $arr_value=[];
            foreach($request->all() as $item=>$value){
                array_push($arr_key,$item);
                array_push($arr_value,$value);
            }
            $counte=0;
            foreach($arr_key as $new){
                if($counte>0){
                    $arr_key[$counte]=Str::of($new)->replace('_', ' ');
                }
                $counte++;
                
            }
            $i=0;
            foreach($arr_key as $key){
                if($i>0)
                Preference::where('key',$key)->update(['value'=>$arr_value[$i]]);
                $i++;
            }
            return redirect()->back();
        }
        
        
        

        // Preference::create()
    }
    public function edit($id)
    {
        $preferences=Preference::where('id',$id)->first();
        return view('Backend.preferences.edit',['preferences'=>$preferences]);
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
        $data_preference=$this->validate($request,[
            'key'=>'required',
            'type'=>'required',
            
        ]);
        
        $preference=Preference::where('id',$id)->first();
        $preference->key=$request->key;
        if($request->icon!=null)
        $preference->icon=$request->icon;

        $preference->type=$request->type;
        if($request->value!=null)
        $preference->value=$request->value;

        $preference->save();
        return redirect()->route('listPreference');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Preference::where('id',$id)->delete();
        return redirect()->route('listPreference');
    }
}
