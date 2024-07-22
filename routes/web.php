
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontsiteController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\BannerSlideController; 
use App\Http\Controllers\TeamMemberController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', [FrontsiteController::class, "index"]);

// تعريف مسارات لوحة القيادة مع ميدل وير المصادقة
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    #region categories
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    #endregion

    #region products
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create')->middleware('role:editor');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store')->middleware('role:editor');
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('role:editor');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('role:editor');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('role:editor');
    Route::put('products/{product}/activate', [ProductController::class, 'activate'])->name('products.activate')->middleware('role:editor');
    #endregion

    #region Banner
    Route::get('banner_slides', [BannerSlideController::class, 'index'])->name('banner_slides.index');
    Route::get('banner_slides/create', [BannerSlideController::class, 'create'])->name('banner_slides.create');
    Route::post('banner_slides', [BannerSlideController::class, 'store'])->name('banner_slides.store');
    Route::get('banner_slides/{bannerSlide}/edit', [BannerSlideController::class, 'edit'])->name('banner_slides.edit');
    Route::put('banner_slides/{bannerSlide}', [BannerSlideController::class, 'update'])->name('banner_slides.update');
    Route::delete('banner_slides/{bannerSlide}', [BannerSlideController::class, 'destroy'])->name('banner_slides.destroy');
    #endregion

    #region team
    Route::get('teamMembers', [TeamMemberController::class, 'index'])->name('team_members.index');
    Route::get('teamMembers/create', [TeamMemberController::class, 'create'])->name('team_members.create');
    Route::post('teamMembers', [TeamMemberController::class, 'store'])->name('team_members.store');
    Route::get('teamMembers/{teamMember}/edit', [TeamMemberController::class, 'edit'])->name('team_members.edit');
    Route::put('teamMembers/{teamMember}', [TeamMemberController::class, 'update'])->name('team_members.update');
    Route::delete('teamMembers/{teamMember}', [TeamMemberController::class, 'destroy'])->name('team_members.destroy');
    #endregion
});

// مسارات لإدارة المستخدمين فقط من قبل المديرين
Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->name('admin.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

// مسارات لإدارة الفئات فقط من قبل المديرين
Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->name('admin.')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// مسارات المشرفين
Route::middleware(['auth', 'role:supervisor'])->prefix('supervisor')->name('supervisor.')->group(function () {
    Route::post('products/{product}/approve', [ProductController::class, 'approve'])->name('products.approve');
});

// مسارات المصادقة
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
        Route::post('login', [UserController::class, 'login'])->name('login.post');
        Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [UserController::class, 'register'])->name('register.post');
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [UserController::class, 'logout'])->name('logout');
    });
});
