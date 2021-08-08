<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home(){
        $DataHomes = Home::get();
        return view('admin.home', compact('DataHomes'));
    }

    public function home_form(){

        $dataInfos = Info::get();
        $dataHome = [];
        return view('admin.home_form', compact('dataHome', 'dataInfos'));
    }

    public function savehome(Request $request)                // принятие и сохранение данных
    {

        $dataHome = $request->all();
        $image2 = isset($dataHome['image_2']) ? $dataHome['image_2'] : '';
        $request->file('image') ? $request->file('image')->store('unloads', 'public') : '';

        $home = Home::updateOrCreate([
            'id' => $dataHome['id'],
        ],[
            'image' => ($request->file('image')) ? $request->file('image')->getClientOriginalName() : $image2,
            'title' => $dataHome['title'],
            'action' => $dataHome['action'],
            'priority' => $dataHome['priority'],
        ]);


        $home->infos()->detach();

        $home->infos()->attach($dataHome['info_id']);
        return back();

    }
    public function edit_home($id)
    {
        $dataInfos = Info::get();
        $dataHome = Home::where('id', $id)->first();
        $infos = $dataHome->infos->toArray();
        return view('admin.edit_home', compact('dataHome','dataInfos', 'infos'));

    }

    public function delete_home($id)
    {
        Home::where('id', $id)->delete();
        return back();
    }
}
