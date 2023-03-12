<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    public function blog_list() {
        $categories = Category::all();
        $blogs = Blog::all();
        return view('formateur.blogList',compact('categories','blogs'));
    }

    public function createBlog(Request $request) {
       Image::make($request->blog_img)->save('assets/images/'.$request->blog_img->hashName());
        Blog::create([
            'text' => $request->blog,
            'title' => $request->title,
            'image' => $request->blog_img->hashName(),
            'cat_id' => $request->categories,
            'formateur_id' => $request->formateur_id
        ]);
        return redirect()->back();
    }

    public function blogDetails(Request $request) {
        $blog = Blog::find($request->id);
        return view('blogDetails',compact('blog'));
    }
}