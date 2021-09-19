<?php
#################################Front#################################
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\AnasayfaController;
use App\Http\Controllers\Front\TecrubeController;
use App\Http\Controllers\Front\TehsilController;
use App\Http\Controllers\Front\BacariqController;
use App\Http\Controllers\Front\MaraqController;
#################################Back#################################
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\AboutController;
use App\Http\Controllers\Back\ExperienceController;
use App\Http\Controllers\Back\EducationController;
use App\Http\Controllers\Back\SkillController;
use App\Http\Controllers\Back\MaraqlarController;
use App\Http\Controllers\Back\SocialController;
Route::group(['prefix'=>'yonetim'],function(){
  Route::redirect('/','yonetim/login');
  Route::get('/login',[AuthController::class,'index'])->name('login.index');
  Route::post('/login',[Authcontroller::class,'login'])->name('login');
  Route::get('/logout',[AuthController::class,'logout'])->name('logout');
      Route::group(['middleware'=>'isAdmin'],function(){
        Route::get('/home',[HomeController::class,'index'])->name('home');
        Route::group(['prefix'=>'haqqimda'],function(){
                Route::get('/haqqimda',[AboutController::class,'index'])->name('yonetim.about');
                Route::get('/create',[AboutController::class,'create'])->name('create.haqqimda');
                Route::post('/create',[AboutController::class,'created'])->name('create');
                Route::get('/update/{id}',[AboutController::class,'update'])->name('update.about');
                Route::post('/update/{id}',[AboutController::class,'updated'])->name('update');
                Route::get('/delete/{id}',[AboutController::class,'delete'])->name('delete');
        });
        
                Route::group(['prefix'=>'socials'],function(){
                Route::get('/social',[SocialController::class,'index'])->name('yonetim.social');
                Route::get('/create',[SocialController::class,'create'])->name('create.social');
                Route::post('/create',[SocialController::class,'created'])->name('create');
                Route::get('/update/{id}',[SocialController::class,'update'])->name('update.social');
                Route::post('/update/{id}',[SocialController::class,'updated'])->name('update');
                Route::get('/delete/{id}',[SocialController::class,'delete'])->name('delete');
        });

                Route::group(['prefix'=>'tecrube'],function(){
                Route::get('/tecrube',[ExperienceController::class,'index'])->name('yonetim.tecrube');
                Route::get('/create',[ExperienceController::class,'create'])->name('create.tecrube');
                Route::post('/create',[ExperienceController::class,'created'])->name('create');
                Route::get('/update/{id}',[ExperienceController::class,'update'])->name('update.tecrube');
                Route::post('/update/{id}',[ExperienceController::class,'updated'])->name('update');
                Route::get('/delete/{id}',[ExperienceController::class,'delete'])->name('delete');
        });

                Route::group(['prefix'=>'tehsil'],function(){
                Route::get('/tehsil',[EducationController::class,'index'])->name('yonetim.tehsil');
                Route::get('/create',[EducationController::class,'create'])->name('create.tehsil');
                Route::post('/create',[EducationController::class,'created'])->name('create');
                Route::get('/update/{id}',[EducationController::class,'update'])->name('update.tehsil');
                Route::post('/update/{id}',[EducationController::class,'updated'])->name('update');
                Route::get('/delete/{id}',[EducationController::class,'delete'])->name('delete');
        });
        
                Route::group(['prefix'=>'bacariq'],function(){
                Route::get('/bacariq',[SkillController::class,'index'])->name('yonetim.bacariq');
                Route::get('/create',[SkillController::class,'create'])->name('create.bacariq');
                Route::post('/create',[SkillController::class,'created'])->name('create');
                Route::get('/update/{id}',[SkillController::class,'update'])->name('update.bacariq');
                Route::post('/update/{id}',[SkillController::class,'updated'])->name('update');
                Route::get('/delete/{id}',[SkillController::class,'delete'])->name('delete');
        });
                
                Route::group(['prefix'=>'interest'],function(){
                Route::get('/interest',[MaraqlarController::class,'index'])->name('yonetim.interest');
                Route::get('/create',[MaraqlarController::class,'create'])->name('create.interest');
                Route::post('/create',[MaraqlarController::class,'created'])->name('create');
                Route::get('/update/{id}',[MaraqlarController::class,'update'])->name('update.interest');
                Route::post('/update/{id}',[MaraqlarController::class,'updated'])->name('update');
                Route::get('/delete/{id}',[MaraqlarController::class,'delete'])->name('delete');
        });   
      
    });
  
});


Route::get('/',[AnasayfaController::class,'index'])->name('haqqimda');
Route::get('/tecrube',[TecrubeController::class,'index'])->name('tecrube');
Route::get('/tehsil',[TehsilController::class,'index'])->name('tehsil');
Route::get('/bacariq',[BacariqController::class,'index'])->name('bacariq');
Route::get('/maraqlar',[MaraqController::class,'index'])->name('maraqlar');





