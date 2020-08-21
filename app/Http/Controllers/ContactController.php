<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
   public function submit(ContactRequest $req) {
      // $validate = $req->validate([
      //   'subject' => 'required | min:5 | max:30',
      //   'message' => 'required | min:15 | max:300'
      // ]);      
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact -> save();
        return redirect()->route('home')->with('success', 'Сообщение было добавленно');     
   }

   public function allData() {
        $contact = new Contact;
        dd($contact->all());
      //   return view('messages', ['data' => $contact->find(2)]);
   }
}


