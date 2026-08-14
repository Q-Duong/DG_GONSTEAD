<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AdminTestimonialController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

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

//-------------------------------------------- Frontend --------------------------------------------
Route::get('locale/{locale}', [LocalizationController::class, 'locale'])->name('locale');
$locale = Request::segment(1);
if (in_array($locale, ['en'])) {
    App::setLocale($locale);
} else {
    App::setLocale('vn');
    $locale = '';
}

Route::group(['prefix' => $locale], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    //About us
    Route::prefix('ve-chung-toi')->group(function () {
        Route::get('/', [HomeController::class, 'aboutUsIndex'])->name('about_us.index');
    });

    //Legal
    Route::prefix('phap-ly')->group(function () {
        Route::get('/', [HomeController::class, 'legalIndex'])->name('legal.index');
    });

    //Team of experts
    Route::prefix('doi-ngu-chuyen-mon')->group(function () {
        Route::get('/', [HomeController::class, 'teamExpertsIndex'])->name('team_experts.index');
    });

    //Services
    Route::prefix('dich-vu')->group(function () {
        Route::get('/', [HomeController::class, 'servicesIndex'])->name('services.index');
        Route::get('/{slug}', [HomeController::class, 'servicesShow'])->name('services.show');
    });

    //Blog
    Route::prefix('tin-tuc')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/{blog_slug}', [BlogController::class, 'detail'])->name('blog.detail');
    });

    //Contact
    Route::prefix('lien-he')->group(function () {
        Route::get('/', [HomeController::class, 'contactIndex'])->name('contact.index');
        Route::post('/dat-lich', [ContactController::class, 'submitAppointment'])->name('contact.submit');
    });

    //Testimonials
    Route::get('/cam-nhan', [TestimonialController::class, 'index'])->name('testimonials.index');

    Route::get('/goc-giai-dap', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/goc-giai-dap/{slug}', [FaqController::class, 'show'])->name('faq.show');
});

Auth::routes();
Route::get('/admin', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
//-------------------------------------------- Backend --------------------------------------------
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    //Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');

    //Information Account
    Route::get('/information', [AdminController::class, 'information'])->name('information');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/save-infomation', [AdminController::class, 'store_information'])->name('store-information');


    //403
    Route::get('/403', function () {
        return view('403');
    })->name('403');

    //Blog
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog.index');
        Route::get('create', [BlogController::class, 'create'])->name('blog.create');
        Route::get('edit', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('store', [BlogController::class, 'store'])->name('blog.store');
        Route::patch('update', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('delete', [BlogController::class, 'destroy'])->name('blog.destroy');
    });

    Route::resource('testimonials', AdminTestimonialController::class);

    //File
    Route::prefix('file')->group(function () {
        Route::post('process', [FileController::class, 'process'])->name('file.process');
        Route::delete('revert', [FileController::class, 'revert'])->name('file.revert');
        Route::delete('delete', [FileController::class, 'destroy'])->name('file.destroy');
        Route::delete('delete-content', [FileController::class, 'destroyContent'])->name('file.destroy_content');
        Route::post('upload-image-ck', [FileController::class, 'upload_image_ck'])->name('file.upload_image_ck');
    });
});

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    echo ('View clear succcess');
    Artisan::call('route:clear');
    echo ('route clear is available for configuration ');
});


Route::prefix('clear')->group(function () {
    Route::get('route', [ConfigController::class, 'clearRoute']);
    Route::get('cache', [ConfigController::class, 'clearCache']);
});

Route::get('/clear/route', [ConfigController::class, 'clearRoute']);

Route::post('/upload-image-ck', [BlogController::class, 'upload_image_ck'])->name('upload-image-ck');
