<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser= Auth::id();
        $user=User::where('id', $iduser)->get();
        return view("profile",compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request)
    {
        $iduser= Auth::id();
        $file_extension=$request->photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='assets/uploads';
        $request->photo->move($path,$file_name);
        
        //$user = User::where('id', $iduser)->first();
        DB::table('users')
        ->where('id', $iduser)
        ->update(['image' =>$file_name]);
        session()->flash('message', 'votre image a ete changer avec success'); 
        return redirect()->back();
       
 
    }
     public function changePassowrd(Request $request){

 $iduser= Auth::id();
 if($request->pwd1==$request->pwd2){

    DB::table('users')
        ->where('id', $iduser)
        ->update(['name' =>$request->name,"password"=>$request->pwd1]);
        session()->flash('message', 'votre profile a ete changer avec success'); 
        return redirect()->back();

 }
 else{
    session()->flash('error', 'verifier votre modepasse'); 
    return redirect()->back();

 }

     }
    
    
   public function search(Request $request){

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
