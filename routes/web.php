<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::as('frontend.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/login', [FrontendController::class, 'login'])->name('login');
    Route::get('/register', [FrontendController::class, 'register'])->name('register');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/team', [FrontendController::class, 'team'])->name('team');
    Route::get('/payment', [FrontendController::class, 'payment'])->name('payment');
    Route::get('software', [FrontendController::class, 'software'])->name('software');
    Route::get('/domain', [FrontendController::class, 'domain'])->name('domain');
    Route::get('/hosting', [FrontendController::class, 'hosting'])->name('hosting');
    Route::get('/logo', [FrontendController::class, 'logo'])->name('logo');
    Route::get('/sms-marketing', [FrontendController::class, 'sms_marketing'])->name('sms.marketing');
    Route::get('/web-design-development', [FrontendController::class, 'web_design'])->name('web.design');
});


Route::get('/run-artisan', function () {
    Artisan::call('optimize:clear');
    $output = Artisan::output();
    return response()->json([
        'output' => $output,
    ]);
});
