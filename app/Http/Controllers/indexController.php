<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Blog;
use App\Models\avis;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cours = Course::all();
        $blogs = Blog::all();
        return view('index',compact('categories','cours','blogs'));
    }
    public function formateurProfile($id) {
        $users = DB::table('users')
        ->where('id',$id)
        ->select('*')
        ->get();
        $formateur = DB::table('skills')
        ->where('user_id',$id)
        ->select('*')
        ->get();
        return view('skills',compact("formateur","users"));
    }
    public function rating(Request $request){
        avis::create([
           
            "status"=> $request->rating,
            
     ]);
     return redirect()->back();
    }
}