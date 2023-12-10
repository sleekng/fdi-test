<?php

use App\Http\Controllers\MediaKitEmailController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Counter;
use App\Models\MediaKitEmail;
use App\Models\Messages;
use App\Models\Newsletter;
use App\Models\SentMessage;
use App\Models\Subscription;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {

   $mediakit = MediaKitEmail::select('email')->count();
   $newsletter = Newsletter::select('email')->count();
   $subscription = Subscription::select('email')->count();
   $sentmessage = SentMessage::select('email')->count();
   $messages = Messages::select('email')->count();

    return view('dashboard',[
        'mediakit' => $mediakit,
        'newsletter' => $newsletter,
        'subscription' => $subscription,
        'sentmessage' => $sentmessage,
        'messages' => $messages
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});   


Route::resource('subscription', SubscriptionController::class);
Route::resource('mediakit', MediaKitEmailController::class);
Route::resource('newsletter', NewsletterController::class);
Route::resource('message', MessagesController::class);



require __DIR__.'/auth.php';
