<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use App\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function vacancy(){
        $dataVacancys = Vacancy::get();
        return view('admin.vacancy', compact('dataVacancys'));
    }
    public function about_form(){
        $dataVacancy = [];
        return view('admin.vacancy_form', compact('dataVacancy'));
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
