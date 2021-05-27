<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Http\Controllers\Controller;
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
        Home::updateOrCreate([
            'id' => $dataHome['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataHome['title'],
            'description_1' => $dataHome['description_1'],
            'description_2' => $dataHome['description_2'],
            'description_3' => $dataHome['description_3'],
            'action' => $dataHome['action'],
            'priority' => $dataHome['priority'],

        ]);
        return back();
    }
    public function edit_home($id)
    {
        $dataHome = Home::where('id', $id)->first();
        return view('admin.edit_home', compact('dataHome'));

    }

    public function delete_home($id)
    {
        Home::where('id', $id)->delete();
        return back();
    }
}
