<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use App\Tours;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function tours(){
        $dataTours = Tours::get();
        return view('admin.tours', compact('dataTours'));
    }
    public function tours_form(){
        $dataTour = [];
        return view('admin.tours_form', compact('dataTour'));
    }
    public function savetours(Request $request)
    {
       $request->file('image')->store('unloads', 'public');

        $dataTour = $request->all();
        Tours::updateOrCreate([
            'id' => $dataTour['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataTour['title'],
            'price' => $dataTour['price'],
            'action' => $dataTour['action'],
            'priority' => $dataTour['priority'],

        ]);
        return back();
    }
    public function edit_tours($id)
    {
        $dataTour = Tours::where('id', $id)->first();
        return view('admin.edit_tours', compact('dataTour'));

    }

    public function delete_tours($id)
    {
        Tours::where('id', $id)->delete();
        return back();
    }
}
