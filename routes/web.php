<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\PageController;
use App\Models\Product;
use App\Models\GalleryImage;
use App\Models\Page;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ActivityLogController;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// =========================================================================
// ROUTE FRONT-END / PUBLIC WEBSITE
// =========================================================================

Route::get('/', function () {
    $page = Page::where('slug', 'beranda')->first();
    return view('frontend.index', compact('page'));
})->name('home');

Route::get('/tentang', function () {
    $page = Page::where('slug', 'tentang')->firstOrFail();
    return view('frontend.tentang', compact('page'));
})->name('about');

Route::get('/layanan', function () {
    $page = Page::where('slug', 'layanan')->firstOrFail();
    return view('frontend.layanan', compact('page'));
})->name('services');

Route::get('/produk', function () {
    $products = Product::where('is_active', true)->get();
    $page = Page::where('slug', 'produk')->first();
    return view('frontend.produk', compact('products', 'page'));
})->name('products.frontend.index');

Route::get('/galeri', function () {
    $images = GalleryImage::orderBy('order')->get();
    $page = Page::where('slug', 'galeri')->first();
    return view('frontend.galeri', compact('images', 'page'));
})->name('gallery.index');

Route::get('/kontak', function () {
    $page = Page::where('slug', 'kontak')->firstOrFail();
    return view('frontend.kontak', compact('page'));
})->name('contact');

Route::get('/faq', function () {
    $page = Page::where('slug', 'faq')->firstOrFail();
    return view('frontend.faq', compact('page'));
})->name('faq.index');

// =========================================================================
// ROUTE DINAMIS (HARUS PALING BAWAH BAGIAN FRONTEND)
// =========================================================================



// =========================================================================
// ROUTE DASHBOARD UMUM (BREEZE DEFAULT UNTUK NON-ADMIN)
// =========================================================================

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


// =========================================================================
// ROUTE PROFILE (BREEZE DEFAULT)
// =========================================================================




// =========================================================================
// ROUTE ADMIN DASHBOARD
// =========================================================================

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('pages', PageController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class)->except(['create', 'store']);
    Route::resource('blog', BlogController::class);
    Route::resource('testimonials', TestimonialController::class);
    
    Route::resource('categories', CategoryController::class);


    Route::get('activity-log', [ActivityLogController::class, 'index'])->name('activity-log.index');
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
});


// =========================================================================
// AUTHENTICATION ROUTES DARI BREEZE
// =========================================================================

require __DIR__.'/auth.php';
