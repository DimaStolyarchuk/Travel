<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use App\ContactMap;
use App\Contacts;
use App\Home;
use App\Info;
use App\InfoSait;
use App\People;
use App\Tours;
use App\Vacancy;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('id'))
        {
            $relation = Info::where('id', $request->get('id'))->with('homes')->first();
            $DataHomes = $relation->homes;
        } else {
            $DataHomes = Home::get();
        }
        $isInfoSelect = Info::get();

        return view('index', compact('isInfoSelect', 'DataHomes', 'dataInfo'));

    }

    public function about()
    {
        $dataAbouts = About::get();
        return view('about',compact('dataAbouts'));
    }
    public function tours()
    {
        $dataTours = Tours::get();
        return view('tours',compact('dataTours'));
    }

    public function blog()
    {
        $dataBlogs = Blog::get();
        return view('blog', compact('dataBlogs'));
    }

    public function vacancies($id)
    {

        $dataVacancys = Vacancy::find($id);
        return view('vacancies', compact('dataVacancys'));
    }

    public function contact()
    {
        $dataContacts = Contacts::get();
        return view('contact', compact('dataContacts'));
    }

    public function info()
    {
        $DataHomes = Home::get();
        $dataInfo = InfoSait::get();
        return view('info', compact('dataInfo', 'DataHomes'));
    }
}
