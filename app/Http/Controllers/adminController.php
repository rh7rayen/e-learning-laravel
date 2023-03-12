<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Paiment;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function index() {
        $formatteurs = User::where('role','formateur')->get();
       
       
        $userData = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');


            $userTotal = Paiment::select(DB::raw("SUM(total) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
            $data = DB::table('avis')
            ->select(
             DB::raw('status as status'),
             DB::raw('count(*) as number'))
            ->groupBy('status')
            ->get();
          $array[] = ['status', 'Number'];
          
          $i=0;
          foreach($data as $key => $value)
          {
              $i++;
           $array[$i] = [$value->status, $value->number];
          }
     


    return view('admin.admin',compact('userData','userTotal'))->with('status', json_encode($array));
       
    }

    public function addformateurview() {
        $formatteurs = User::where('role','formateur')->get();
        return view('admin.addformateur',compact('formatteurs'));
    }

    public function createformatteur(Request $request) {
        Image::make($request->img)->save('assets/images/'.$request->img->hashName());
        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
            'role' => 'formateur',
            'image' => $request->img->hashName(),
        ]);
        return redirect()->back();
    }

    public function deleteformateur(Request $request) {
        $formatteur = User::find($request->id);
        $formatteur->delete();
        return redirect()->back();
    }

    public function editformateur(Request $request) {
        $formatteur = User::find($request->id);
        return view('admin.editformateur',compact('formatteur'));
    }

    public function updateformateur(Request $request) {
        if ($request->password) {
            User::where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        } if ($request->img) {
            Image::make($request->img)->save('assets/images/'.$request->img->hashName());
            User::where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $request->img->hashName(),
            ]);
        } if ($request->img && $request->password) {
            Image::make($request->img)->save('assets/images/'.$request->img->hashName());
            User::where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'image' => $request->img->hashName(),
            ]);
        }

        return redirect()->back();
    }

    public function categories_list() {
        $categories = Category::all();
        return view('admin.categoriesList',compact('categories'));
    }

    public function add_categorie(Request $request) {
        // return $request->img;
        Image::make($request->img)->save('assets/images/'.$request->img->hashName());
        Category::create([
            'cat_name' => $request->name,
            'cat_img' => $request->img->hashName(),
            'cat_description' => $request->description,
        ]);
        return redirect()->back();
    }
    public function showstudent(){
        $user = User::where("role","=","user")->get();
        return view('admin.showstudent',compact('user'));

    }
    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $user =DB::table('users')->where('name','LIKE','%'.$request->text.'%')->get();
        return view('admin.search', compact("user"));
    }
}