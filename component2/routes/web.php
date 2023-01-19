<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


Route::get('ping', function(){
    // request()->validate([
    //     'email' => 'required|email'
    // ])
    $mailchimp = new \MailchimpMarketing\ApiClient();


    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us9'
    ]);
    // 774bbc5a58

    $response = $mailchimp->lists->addListMember('774bbc5a58',[
        'email_address' => request('email'),
        'status' => 'subscribed'
    ]);
    // $response = $mailchimp->ping->get();

    // ddd($response);

    return redirect('/')->with('success', 'You are now signed up for the newsletter!');
}
);

Route::view('/', 'welcome');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('posts/dashboard', [PostController::class, 'dash']);

Route::resource('posts', PostController::class)->middleware(['auth', 'web']);
Route::resource('users', UserController::class)->middleware(['auth', 'web']);






