<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class messangerControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        $user_id = auth()->user()->id;
        $userrole = auth()->user()->role;
        if($userrole=="formateur"){
            DB::table('messangers')
            ->where('user_id', $id)
            ->update(['status' =>"false"]);
        }

        return view('messanger.messanger',compact("id"),compact("user_id"));
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
    public function getmessage($id)
    {
        $user_id = auth()->user()->id;


        $messages = DB::table('messangers')
        ->join('users', 'users.id', '=', 'messangers.user_id')
        ->where('user_id', $user_id)
        ->where('receiver_id', $id)
        ->orWhere('user_id', $id)
        ->where('receiver_id', $user_id)

        ->select('*')
        ->get();





        return json_encode($messages);
    }
    public function sendMessage(Request $request)
    {
        $message=$request->data['message'];
        $receiver_id= $request->data['receiver'];
        $user_id=$request->data['sender'];
     DB::insert("INSERT INTO `messangers` (`message`, `user_id`, `receiver_id`) VALUES ('$message', ' $user_id','$receiver_id')");



        return $request->data;
    }
    public function getuser(){
        $user_id = auth()->user()->id;
        $messages = DB::table('messangers')
        ->join('users', 'users.id', '=', 'messangers.user_id')
        ->where('receiver_id','=', $user_id)
        ->where('user_id','<>', $user_id)
        ->select('*')
        ->get();





        return json_encode($messages);
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
