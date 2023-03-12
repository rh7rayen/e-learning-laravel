<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class panierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser= Auth::id();
        $total = DB::table('paniers')
        
        ->join('users', 'users.id', '=', 'paniers.user_id')
        ->join('courses', 'courses.id', '=', 'paniers.coure_id')
        ->where('user_id','=',$iduser)
        ->distinct('coure_id')
        ->count();
        echo $total;

    }
    public function panier($id){
        
        $iduser= Auth::id();

      
        $count = DB::table('paniers')
        
        ->join('users', 'users.id', '=', 'paniers.user_id')
        ->join('courses', 'courses.id', '=', 'paniers.coure_id')
        ->where('coure_id','=',$id)
        ->count();
       
        
      
       if($count>0){
        session()->flash('message', 'ce type de cour a éte achete'); 

       }
       else{
        
        Panier::create([
            'user_id' => $iduser ,
            'coure_id' => $id,
           
        ]);
        //return redirect()->back();
     
    }
    $total = DB::table('paniers')
        
    ->join('users', 'users.id', '=', 'paniers.user_id')
    ->join('courses', 'courses.id', '=', 'paniers.coure_id')
    ->where('user_id','=',$iduser)
    ->get();
    return view('panier',compact("total"));
    }
 


    public function showprice(){

      

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
