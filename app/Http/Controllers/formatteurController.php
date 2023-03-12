<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\File;
use App\Models\Skills;
use App\Models\Notification;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class formatteurController extends Controller
{
    public function index() {
        $user = DB::table('users')
        ->where('id', auth()->user()->id)
        ->select('*')
        ->get();
        $formateur = DB::table('skills')
        ->where('user_id', auth()->user()->id)
        ->select('*')
        ->get();
        return view('formateur.formatteur',compact("formateur","user"));
    }
   public function addskills(){
    return view('formateur.addskills');
   }
    public function courseList() {
        $categories = Category::all();
        $formateur_id = auth()->user()->id;
        $formateur_name = User::select('name')->where('id',$formateur_id)->first();
        $cours = Course::where('formateur_id',$formateur_id)->get();
        return view('formateur.formatteur_course_list',compact('categories','cours','formateur_name'));
    }
    public function showskills(){
       
   
    
    
    }
    public function finalskills(Request $request){
        
        $formateur_id = auth()->user()->id;
        Skills::create([
            "nameskill"=> $request->name,
            "porcentageskills"=> $request->procentage,
            "user_id"=>$formateur_id,
     ]);
        $user = DB::table('users')
        ->where('id', auth()->user()->id)
        ->select('*')
        ->get();
        $formateur = DB::table('skills')
        ->where('user_id', auth()->user()->id)
        ->select('*')
        ->get();
       
       
      
          session()->flash('success','votre admin est skills avec succes');
          //return view('formateur.formatteur',coma);
          return view('formateur.formatteur',compact("formateur","user"));
    }
    
    public function createCourse(Request $request) {
    
      
       
       $file_extension=$request->photo->getClientOriginalExtension();
       $file_name=time().'.'.$file_extension;
       $path='assets/file';
       $path2='assets/images';
       $request->photo->move($path,$file_name);
       $file_extension2=$request->photo2->getClientOriginalExtension();
       $file_name2=time().'.'.$file_extension2;

       $request->photo2->move($path2,$file_name2);
     Course::create([
            'name'=>$request->name,
            'price' => $request->price,
            'cat_id' => $request->categories,
            'description' => $request->description,
            'dificulties' => $request->dificulties,
            'image' =>  $file_name2,
            'formateur_id' => $request->formateur_id
        ]);
        $maxValue = Course::max('id');

      
            File::create([
                'file' => $file_name,
                'cours_id' => $maxValue
            ]);


            Notification::create([
                'text'=>"nouvelle notification a ete ajouter ",
                'coure_id' => $maxValue,
                ]);
        

        return redirect()->back();
    }

    public function deleteCourse(Request $request) {
        $file = File::where("cours_id",$request->id);
        $file->delete();
        $cours = Course::find($request->id);
        $cours->delete();
        return redirect()->back();
    }

    public function updateCourseView(Request $request) {
        $cours = Course::find($request->id);
        $categories = Category::all();
        return view('formateur.updateCourse',compact('cours','categories'));
    }

    public function updateCourse(Request $request) {
        if ($request->cours_file) {
            $fileName =time() . '.'. $request->cours_file->extension();  
            $request->cours_file->move(public_path('assets/file'), $fileName);    
            Course::where('id',$request->cours_id)->update([
                'name'=>$request->name,
                'price' => $request->price,
                'cat_id' => $request->categories,
                'description' => $request->description,
                'dificulties' => $request->dificulties,
                'formateur_id' => auth()->user()->id,
                'cours' => $fileName
            ]);
        } else {
            Course::where('id',$request->cours_id)->update([
                'name'=>$request->name,
                'price' => $request->price,
                'cat_id' => $request->categories,
                'description' => $request->description,
                'dificulties' => $request->dificulties,
                'formateur_id' => auth()->user()->id
            ]);
        }

        return redirect()->back();
    }
    public function formateurProfile(){
        return view('skills');
    }
    public function listuser(){
        $user=User::where("role","user")->get();
        return view("formateur.listeuser",compact("user"));
    }
    public function profileformateur(){
        $formateur_id = auth()->user()->id;
        $user=User::where("id", $formateur_id )->get();
        return view("formateur.Profileformateur",compact("user"));
    }
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
}
