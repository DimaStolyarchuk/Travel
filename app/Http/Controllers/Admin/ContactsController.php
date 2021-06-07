<?php

namespace App\Http\Controllers\Admin;

use App\Contacts;
use App\ContactsMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contacts(){
        $dataContacts = Contacts::get();

        return view('admin.contacts', compact('dataContacts'));
    }
    public function contacts_form(){
        $dataContact = [];
        return view('admin.contacts_form', compact('dataContact'));
    }
    public function savecontacts(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataContact = $request->all();
        Contacts::updateOrCreate([
            'id' => $dataContact['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'phone' => $dataContact['phone'],
            'description_1' => $dataContact['description_1'],
            'description_2' => $dataContact['description_2'],
            'description_3' => $dataContact['description_3'],
            'action' => $dataContact['action'],
            'priority' => $dataContact['priority'],

        ]);
        return back();
    }
    public function edit_contacts($id)
    {
        $dataContact = Contacts::where('id', $id)->first();
        return view('admin.edit_contact', compact('dataContact'));

    }

    public function delete_contacts($id)
    {
        Contacts::where('id', $id)->delete();
        return back();
    }

    public function savecontactsmail(Request $request){
        $dataContactsMail = $request->all();
        ContactsMail::Create([
            'name' => $dataContactsMail['name'],
            'email' => $dataContactsMail['email'],
            'message' => $dataContactsMail['message'],
        ]);
        $this->mail($dataContactsMail);
        return back();
    }

    public function mail($data){
        Mail::send('emails.welcome', compact('data'), function ($message) use ($data){
            $message->from('test@i.ua');
            $message->to($data['email']);
            $message->subject('Hello');
        });
    }
}
