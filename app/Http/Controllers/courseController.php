<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Panier;
use App\Models\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class courseController extends Controller
{
    public function index() {
        $cours = Course::all();
        return view('courses',compact('cours'));
    }
     public function delete($id){
        $iduser= Auth::id();
        $res=Panier::where('user_id',$iduser)->count();
        if($res>0){
        $res=Panier::where('panier_id',$id)->delete();
        return redirect()->back();
        }
        else{
            $res=Panier::where('panier_id',$id)->delete();
            return view('courses');
        }

     }
    public function coursesDetails(Request $request) {
        $cours = Course::find($request->id);
        return view('courseDetails',compact('cours'));
    }

    public function coursesPreview(Request $request) {
        $cours_file = File::find($request->id);
        return view('coursPreview',compact('cours_file'));
    }
    public function allcourse(){
        $sub_categories = DB::table('courses')->first();
        $main_category = DB::table('categories')->get();
        return view('allcourses', ['sub_categories' => $sub_categories, 'main_category' => $main_category]);
    }
    public function category() {


      

    }


public function recherche(Request $request){

    $cours =DB::table('courses')->where('name','LIKE','%'.$request->text.'%')->get();
    return view('search', compact("cours"));

   
}
    public function get_causes_against_category($id){
     
        $data =DB::table('courses')->where("cat_id","=",$id)->get();

        echo json_encode($data);
    }
}
