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
        $dataHome = [];
        return view('admin.home_form', compact('dataHome'));
    }
    public function savehome(Request $request)
    {
        $request->file('image')->store('unloads', 'public');
        $dataHome = $request->all();
        $home = Home::updateOrCreate([
            'id' => $dataHome['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataHome['title'],
            'action' => $dataHome['action'],
            'priority' => $dataHome['priority'],

        ]);

        $home->infos()->attach($dataHome['info_id']);

        return back();
    }
    public function edit_home($id)
    {
        $dataInfos = Info::get();
        $dataHome = Home::where('id', $id)->first();
        return view('admin.edit_home', compact('dataHome','dataInfos'));

    }

    public function delete_home($id)
    {
        Home::where('id', $id)->delete();
        return back();
    }
}
