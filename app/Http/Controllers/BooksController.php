<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Writer;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view("admin.books.books")->with("books", $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        $writers = Writer::all();
        return view("admin.books.create-book", compact("categories", "publishers", "writers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required",
            "name" => "required|max:255",
            "description" => "required|max:255",
            "categoryId" => "required",
            "publisherId" => "required",
            "writerId" => "required"
        ]);

        $requestData = $request->all();
        $fileName = time().$request->file("image")->getClientOriginalName();
        $path = $request->file("image")->storeAs("image", $fileName, "public");
        $requestData["image"] = "/storage/".$path;
        $result =  Book::create($requestData);

        if($result){
            return redirect("/admin/kitaplar")->with("alert_message", "Kitap eklendi");
        }else{
            return redirect("/admin/kitaplar")->with("alert_message", "Kitap eklenemedi");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
