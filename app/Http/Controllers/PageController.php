<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use App\ContactMap;
use App\Home;
use App\People;
use App\Tours;
use App\Vacancy;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $DataHomes = Home::get();
        return view('index',compact('DataHomes'));
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

    public function vacancy()
    {
        $dataVacancys = Vacancy::get();
        return view('vacancy', compact('dataVacancys'));
    }

    public function contact()
    {
        $dataContacts = Vacancy::get();
        return view('contact', compact('dataContacts'));
    }
}
