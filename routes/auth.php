<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmagController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\MediaKitEmailController;
use App\Http\Controllers\MessageController as ControllersMessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SentMessageController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\SubscriptionController;
use App\Models\MessageController;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Emag;
use App\Models\Interview;
use App\Models\Issue;
use App\Models\Showcase;

//Articles
Route::get('/articles', [ArticleController::class,'index'])->name('articles');
Route::post('/filter', [ArticleController::class, 'filterByIssue'])->name('article.filterByIssue');

Route::get('/emagazine', [EmagController::class,'index'])->name('emagazine');
Route::post('emagazine-filter', [EmagController::class, 'filterByIssue'])->name('emagazine.filterByIssue');

Route::resource('search', SearchController::class);

//Showcases
Route::get('/showcases', [ShowcaseController::class,'index'])->name('showcases');
Route::post('/showcase-filter', [ShowcaseController::class, 'filterByIssue'])->name('showcase.filterByIssue');
Route::get('/showcase-show/{id}', [ShowcaseController::class,'show'])->name('showcase.show');

Route::get('/', [GeneralController::class,'index'])->name('home');

//Interviews
Route::get('/interviews', [InterviewController::class,'index'])->name('interviews');
Route::post('/interview-filter', [InterviewController::class, 'filterByIssue'])->name('interview.filterByIssue');
Route::get('/interview-show/{id}', [InterviewController::class,'show'])->name('interview.show');

Route::middleware('guest')->group(function () {
  
    Route::get('/contact', function () {
        return view('Contact');
    })->name('contact');
    
   
    Route::get('/article-store/{article}', [ArticleController::class,'show'])->name('article.show');
    
    
    Route::get('/team', function () {
        $emags = Emag::where('e_position','1')->get();
        return view('Team',compact('emags'));
    })->name('team');
    
 
    
 /*    
    Route::get('/emagazine', function () {
        return view('e-magazine');
    })->name('emagazine'); */
    

    
    Route::get('/testimonials', function () {
        return view('testimonial');
        })->name('testimonials');

        

    
    
    Route::resource('subscription', SubscriptionController::class);




    Route::resource('mediakit', MediaKitEmailController::class);
    Route::resource('newsletter', NewsletterController::class);
    
    
/* 
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register'); */
/* 
    Route::post('register', [RegisteredUserController::class, 'store']); */

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});


Route::middleware('auth')->group(function () {

    Route::resource('client', ClientController::class);

    Route::resource('issue',IssueController::class);
    Route::resource('category',CategoryController::class);

    //Articles
    Route::get('/article-store/{article}', [ArticleController::class,'edit'])->name('article.edit');
    Route::delete('/article-destroy/{article}', [ArticleController::class,'destroy'])->name('article.destroy');
    Route::put('/article-update', [ArticleController::class,'update'])->name('article.update');
    Route::get('/article-create', [ArticleController::class,'create'])->name('article-create');
    Route::post('/article-store', [ArticleController::class,'store'])->name('article-store');
    Route::get('/article-content/{article}', [ArticleController::class,'contentUpload'])->name('article-upload');

    //Emagazine
    Route::get('/emagazine-store/{emagazine}', [EmagController::class,'edit'])->name('emagazine.edit');
    Route::delete('/emagazine-destroy/{emagazine}', [EmagController::class,'destroy'])->name('emagazine.destroy');
    Route::put('/emagazine-update', [EmagController::class,'update'])->name('emagazine.update');
    Route::get('/emagazine-create', [EmagController::class,'create'])->name('emagazine-create');
    Route::post('/emagazine-store', [EmagController::class,'store'])->name('emagazine-store');
    Route::get('/emagazine-content/{article}', [EmagController::class,'contentUpload'])->name('emagazine-upload');

    //Showcases
    Route::get('/showcase/{showcase}', [ShowcaseController::class,'edit'])->name('showcase.edit');
    Route::delete('/showcase-destroy/{showcase}', [ShowcaseController::class,'destroy'])->name('showcase.destroy');
    Route::put('/showcase-update', [ShowcaseController::class,'update'])->name('showcase.update');
    Route::get('/showcase-create', [ShowcaseController::class,'create'])->name('showcase-create');
    Route::post('/showcase-store', [ShowcaseController::class,'store'])->name('showcase.store');

    //Interview
    Route::get('/interview/{interview}', [InterviewController::class,'edit'])->name('interview.edit');
    Route::delete('/interview-destroy/{interview}', [InterviewController::class,'destroy'])->name('interview.destroy');
    Route::put('/interview-update', [InterviewController::class,'update'])->name('interview.update');
    Route::get('/interview-create', [InterviewController::class,'create'])->name('interview-create');
    Route::post('/interview-store', [InterviewController::class,'store'])->name('interview.store');
  
    
    
    Route::get('/articlecontent', function(){

        $articles = Article::all();

        foreach($articles as $article){
            $article->picture = 'picture.jpg';
            $article->save();
            
        }


        return 'DONE!';


        
    } );

    Route::resource('/create-message',  ControllersMessageController::class);
    Route::resource('/sent-messages',  SentMessageController::class);
    
    Route::get('newsletter', [NewsletterController::class,'index'])->name('newsletter.index');

    Route::get('mediakit', [MediaKitEmailController::class,'index'])->name('mediakit.index');
    Route::get('subscription', [SubscriptionController::class,'index'])->name('subscription.index');
     
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
