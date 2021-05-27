<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Tours;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $dataBlogs = Blog::get();
        return view('admin.blog', compact('dataBlogs'));
    }
    public function blog_form(){
        $dataBlog = [];
        return view('admin.blog_form', compact('dataBlog'));
    }
    public function saveblog(Request $request)
    {
        $dataBlog = $request->all();
        Blog::updateOrCreate([
            'id' => $dataBlog['id'],
        ],[
            'title' => $dataBlog['title'],
            'data' => $dataBlog['data'],
            'description' => $dataBlog['description'],
            'action' => $dataBlog['action'],
            'priority' => $dataBlog['priority'],

        ]);
        return back();
    }
    public function edit_blog($id)
    {
        $dataBlog = Blog::where('id', $id)->first();
        return view('admin.edit_blog', compact('dataBlog'));

    }

    public function delete_blog($id)
    {
        Blog::where('id', $id)->delete();
        return back();
    }
}
