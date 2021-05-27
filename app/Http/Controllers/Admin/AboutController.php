<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $dataAbouts = About::get();
        return view('admin.about', compact('dataAbouts'));
    }
    public function about_form(){
        $dataAbout = [];
        return view('admin.about_form', compact('dataAbout'));
    }
    public function saveabout(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataAbout = $request->all();
        About::updateOrCreate([
            'id' => $dataAbout['id'],
        ],[
            'title' => $dataAbout['title'],
            'description' => $dataAbout['description'],
            'image' => $request->file('image')->getClientOriginalName(),
            'action' => $dataAbout['action'],
            'priority' => $dataAbout['priority'],

        ]);
        return back();
    }
    public function edit_about($id)
    {
        $dataAbout = About::where('id', $id)->first();
        return view('admin.edit_about', compact('dataAbout'));

    }

    public function delete_about($id)
    {
        About::where('id', $id)->delete();
        return back();
    }
}
