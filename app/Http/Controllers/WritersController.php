<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Writer;
use Illuminate\Http\Request;

class WritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::all();
        return view("admin.writers.writers")->with("writers", $writers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.writers.create-writer");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file("image")->getClientOriginalName();
        $path = $request->file("image")->storeAs("image", $fileName, "public");
        $requestData["image"] = "/storage/".$path;
        Writer::create($requestData);
        return "gönderildi";
        // $request->validate([
        //     "name" => "required|min:2|max:255"
        // ]);

        // $inputs = $request->all();
        // $result = Writer::create($inputs);
        // if($result){
        //     return redirect("/admin/yazarlar")->with("alert_message", "Yazar eklendi");
        // }else{
        //     return redirect("/admin/yazarlar")->with("alert_message", "Yazar eklenemedi");
        // }
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
        $writer = Writer::find($id);
        if($writer){
            return view("admin.writers.edit-writer")->with("writer", $writer);
        }else{
            return redirect("/admin/writers")->with("alert_message", "Yazar bulunamadı");
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

        $writer = Writer::find($id);
        $inputs = $request->all();

        $result = $writer->update($inputs);
        if($result){
            return redirect("/admin/yazarlar")->with("alert_message", "Yazar güncellendi");
        }else{
            return redirect("/admin/yazarlar")->with("alert_message", "Yazar güncellenemedi");
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
        $result = Writer::destroy($id);
        if($result){
            return redirect("/admin/yazarlar")->with("alert_message", "Yazar silindi");
        }else{
            return redirect("/admin/yazarlar")->with("alert_message", "Yazar silinemedi");
        }
    }
}
