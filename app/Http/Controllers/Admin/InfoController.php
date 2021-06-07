<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function info(){
        $dataInfos = Info::get();
        return view('admin.info', compact('dataInfos'));
    }
    public function info_form(){
        $dataInfo = [];
        return view('admin.info_form', compact('dataInfo'));
    }
    public function saveinfo(Request $request)
    {

        $dataInfo = $request->all();
        Info::updateOrCreate([
            'id' => $dataInfo['id'],
        ],[
            'description' => $dataInfo['description'],
            'action' => $dataInfo['action'],
            'priority' => $dataInfo['priority'],

        ]);
    }
    public function edit_info($id)
    {
        $dataInfo = Info::where('id', $id)->first();
        return view('admin.edit_info', compact('dataInfo'));

    }

    public function delete_info($id)
    {
        Info::where('id', $id)->delete();
        return back();
    }
}
