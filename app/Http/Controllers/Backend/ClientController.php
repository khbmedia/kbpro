<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::paginate(15);
        return view('Backend.clients.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.clients.create');
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
            'company_name'=>'required',
            'logo'=>'required'
        ]);
        $path=$request->file('logo')->store('logos');
            $clients=new Client();
            $clients->company_name=$request->company_name;
            $clients->logo=$path;
            $clients->save();
            return redirect()->route('listClient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $clients=Client::where('company_name','LIKE',"%$request->search%")->paginate(15);
        return view('Backend.clients.index',['clients'=>$clients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients=Client::where('id',$id)->first();
        return view('Backend.clients.edit',['clients'=>$clients]);
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
            'company_name'=>'required'
        ]);
        $path=$request->old_image;
        if($request->hasFile('logo')){
            $path=$request->file('logo')->store('logos');
        }
        $data=[
            'company_name'=>$request->company_name,
            'logo'=>$path
        ];
        Client::where('id',$id)->update($data);
        return redirect()->route('listClient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Client::where('id',$id)->first();
        unlink('storage/'.$get->logo);
        Client::where('id',$id)->delete();
        return redirect()->route('listClient');

    }
}
