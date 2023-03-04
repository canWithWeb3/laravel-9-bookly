<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.categories")->with("categories", $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create-category");
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
            "name" => "required|min:2|max:255"
        ]);

        $inputs = $request->all();
        $result = Category::create($inputs);
        if($result){
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori eklendi");
        }else{
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori eklenemedi");
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
        $category = Category::find($id);
        if($category){
            return view("admin.categories.edit-category")->with("category", $category);
        }else{
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori bulunamadı");
        }
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
        $request->validate([
            "name" => "required|min:2|max:255"
        ]);

        $category = Category::find($id);
        $inputs = $request->all();

        $result = $category->update($inputs);
        if($result){
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori güncellendi");
        }else{
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori güncellenemedi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Category::destroy($id);
        if($result){
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori silindi");
        }else{
            return redirect("/admin/kategoriler")->with("alert_message", "Kategori silinemedi");
        }
    }
}
