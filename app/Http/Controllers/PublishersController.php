<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view("admin.publishers.publishers")->with("publishers", $publishers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.publishers.create-publisher");
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
        $result = Publisher::create($inputs);
        if($result){
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı eklendi");
        }else{
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı eklenemedi");
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
        $publisher = Publisher::find($id);
        if($publisher){
            return view("admin.publishers.edit-publisher")->with("publisher", $publisher);
        }else{
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı bulunamadı");
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

        $publisher = Publisher::find($id);
        $inputs = $request->all();

        $result = $publisher->update($inputs);
        if($result){
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı güncellendi");
        }else{
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı güncellenemedi");
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
        $result = Publisher::destroy($id);
        if($result){
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı silindi");
        }else{
            return redirect("/admin/yayimcilar")->with("alert_message", "Yayımcı silinemedi");
        }
    }
}
