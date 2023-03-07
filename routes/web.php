<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\WritersController;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/book-detail/{id}", function($id){
    $book = Book::find($id);
    return view("book-detail")->with("book", $book);
});

Route::get("/addToCart/{id}", function($id){
    $book = Book::find($id);
    $count = Book::find($id)->count();
    if(!Auth::user()){
        return redirect()->back()
            ->with("alert_status", "warning")
            ->with("alert_message", "Giriş yapmadınız.");
    }elseif($count === 0){
        return redirect()->back()
            ->with("alert_status", "warning")
            ->with("alert_message", "Kitap bulunamadı.");
    }else{
        $userId = Auth::user()->id;
        $isExist = Cart::where("user_id", $userId)->where("book_id", $id)->count();
        if($isExist){
            return redirect()->back()
                ->with("alert_status", "warning")
                ->with("alert_message", "Sepetenize zaten eklenmiş.");
        }else{
            $result = DB::insert("INSERT INTO carts(user_id,book_id) VALUES (?,?)", [$userId,$id]);
            if($result){
                return redirect()->back()
                    ->with("alert_status", "success")
                    ->with("alert_message", "Sepetinize eklendi.");
            }else{
                return redirect()->back()
                    ->with("alert_status", "danger")
                    ->with("alert_message", "Sepete ekleme hatası.");
            }
        }


    }
});

Route::prefix('/admin')->middleware("auth")->group(function (){
    Route::get("/", function(){
        return view("admin.admin");
    });

    Route::resource("/kategoriler", CategoriesController::class);
    Route::resource("/yayimcilar", PublishersController::class);
    Route::resource("/yazarlar", WritersController::class);
    Route::resource("/kitaplar", BooksController::class);
});
