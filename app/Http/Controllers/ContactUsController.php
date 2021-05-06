<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;

use App\ContactUs;

use Illuminate\Mail\Mailable;
use App\Mail\RequestQuotation;
use Mail;


class ContactUsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        //

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

        $this->validate($request,[

            'name'=>'required',

            'mail'=>'required',

            'content'=>'required'

        ]);

        

        $comment=new ContactUs();

        $comment->name=$request->name;

        $comment->mail=$request->mail;

        $comment->content=$request->content;

        $comment->save();
            
        $data=[
            'name'=>$request->name,
            'email'=>$request->mail,
            'message'=>$request->content
        ];
        Mail::to('info@s-pcs.com')->send(new RequestQuotation($data));
        Session::flash('message', 'Your form has been submited successfully'); 

        Session::flash('alert-success', 'success');



        

        return redirect()->back();

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

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

