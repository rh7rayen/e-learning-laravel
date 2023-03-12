<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\indexController::class,'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('admin')->group(function(){
    Route::get('/',[App\Http\Controllers\adminController::class, 'index'])->name('admin');

    Route::get('/ajouter_formatteur',[App\Http\Controllers\adminController::class, 'addformateurview'])->name('admin.addformateur');
    
    Route::post('/createformateur',[App\Http\Controllers\adminController::class,'createformatteur'])->name('createformatteur');
    
    Route::get('/deleteformateur',[App\Http\Controllers\adminController::class,'deleteformateur'])->name('deleteformateur');
    Route::get('/editformateur',[App\Http\Controllers\adminController::class,'editformateur'])->name('editformateur');
    Route::post('/updateformateur',[App\Http\Controllers\adminController::class,'updateformateur'])->name('updateformateur');
    Route::get('/categories_list',[App\Http\Controllers\adminController::class,'categories_list'])->name('categories_list');
    Route::post('/add_categorie',[App\Http\Controllers\adminController::class,'add_categorie'])->name('add_categorie');
    Route::get('/showstudent',[App\Http\Controllers\adminController::class,'showstudent'])->name('admin.showstudent');
    Route::get('/deleuser/{id}',[App\Http\Controllers\adminController::class,'deleteuser'])->name('deleteuser');
    Route::post('/seacrh',[App\Http\Controllers\adminController::class,'search']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('formateur')->group(function(){

    Route::get('/',[App\Http\Controllers\formatteurController::class,'index'])->name('formateur_dashboard');

    Route::get('/courses_list',[App\Http\Controllers\formatteurController::class,'courseList'])->name('formatteur_course_list');
    
    Route::post('/createCourse',[App\Http\Controllers\formatteurController::class,'createCourse'])->name('createCourse');
    Route::post('/createBlog',[App\Http\Controllers\BlogController::class,'createBlog'])->name('createBlog');
    Route::get('/deleteCourse',[App\Http\Controllers\formatteurController::class,'deleteCourse'])->name('deleteCourse');
    Route::get('/updateCourseView',[App\Http\Controllers\formatteurController::class,'updateCourseView'])->name('updateCourseView');
    Route::post('/updateCourse',[App\Http\Controllers\formatteurController::class,'updateCourse'])->name('updateCourse');
    Route::get('/blog_list',[App\Http\Controllers\BlogController::class,'blog_list'])->name('blog_list');
    Route::get('/Profileformateur',[App\Http\Controllers\formatteurController::class,'profileformateur']);
    Route::get('/addskills',[App\Http\Controllers\formatteurController::class,'addskills'])->name('addskills');
    Route::post('/finalskills',[App\Http\Controllers\formatteurController::class,'finalskills'])->name('finalskills');
    Route::get('/listeuser', [App\Http\Controllers\formatteurController::class,'listuser'])->name('listuser');

});

Route::get('/courses',[App\Http\Controllers\courseController::class,'index'])->name('courses');
Route::get('/coursesDetails/{id}',[App\Http\Controllers\courseController::class,'coursesDetails'])->name('coursesDetails');
Route::get('/coursesPreview/{id}',[App\Http\Controllers\courseController::class,'coursesPreview'])->name('coursesPreview');
Route::get('/blogDetails/{id}',[App\Http\Controllers\BlogController::class,'blogDetails'])->name('blogDetails');
Route::get('/panier/{id}',[App\Http\Controllers\PanierController::class,'panier']);
Route::get('/index',[App\Http\Controllers\PanierController::class,'index']);
Route::get('/deleteCoures/{id}',[App\Http\Controllers\PanierController::class,'index']);
Route::get('/courses',[App\Http\Controllers\courseController::class,'index'])->name('courses');
Route::get('/deleteCours/{id}',[App\Http\Controllers\courseController::class,'delete']);

Route::get('/allcourse',[App\Http\Controllers\courseController::class,'allcourse']);
Route::get('/get_causes_against_category/{id}',[App\Http\Controllers\courseController::class,'get_causes_against_category']);
Route::get('/paiment/{montant}',[App\Http\Controllers\paimentController::class,'index']);
Route::post('/facture',[App\Http\Controllers\paimentController::class,'create']);
Route::get('/profile',[App\Http\Controllers\userController::class,'index']);
Route::post('/uploadImage',[App\Http\Controllers\userController::class,'uploadImage']);
Route::post('/changePassowrd',[App\Http\Controllers\userController::class,'changePassowrd']);

Route::get('/congratulation',[App\Http\Controllers\userController::class,'congratulation']);
Route::get('/notif',[App\Http\Controllers\notificationController::class,'index']);


Route::get('/formateurProfile/{id}',[App\Http\Controllers\indexController::class,'formateurProfile']);
Route::get('/messanger/{id}',[App\Http\Controllers\messangerControler::class,'index']);
Route::post('/sendmessage',[App\Http\Controllers\messangerControler::class,'sendMessage']);

Route::get('/getuser',[App\Http\Controllers\messangerControler::class,'getuser']);
Route::get('/getmessage/{id}', [App\Http\Controllers\messangerControler::class,'getmessage'])->name('getmessage');

Route::get('/messanger/{id}',[App\Http\Controllers\messangerControler::class,'index']);
Route::post('/sendmessage',[App\Http\Controllers\messangerControler::class,'sendMessage']);

Route::get('/getuser',[App\Http\Controllers\messangerControler::class,'getuser']);
Route::get('/getmessage/{id}', [App\Http\Controllers\messangerControler::class,'getmessage'])->name('getmessage');
Route::post('/recherche',[App\Http\Controllers\courseController::class,'recherche']);
Route::post('/rating',[App\Http\Controllers\indexController::class,'rating']);