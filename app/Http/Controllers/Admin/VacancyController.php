<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VacancyController extends Controller
{
    public function vacancy(){
        $dataVacancys = Vacancy::get();
        return view('admin.vacancies', compact('dataVacancys'));
    }

    public function vacancy_form(){
        $dataVacancy = [];
        return view('admin.vacancy_form', compact('dataVacancy'));
    }

    public function savevacancy(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataVacancy = $request->all();
        Vacancy::updateOrCreate([
            'id' => $dataVacancy['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataVacancy['title'],
            'description' => $dataVacancy['description'],
            'action' => $dataVacancy['action'],
            'priority' => $dataVacancy['priority'],

        ]);
        return back();
    }

    public function edit_vacancy($id)
    {
        $dataVacancy = Vacancy::where('id', $id)->first();
        return view('admin.edit_vacancy', compact('dataVacancy'));
    }

    public function delete_vacancy($id)
    {
        Vacancy::where('id', $id)->delete();
        return back();
    }

    public function compose(View $view)
    {
        $view->with('header', $this->id->count());
    }
}
