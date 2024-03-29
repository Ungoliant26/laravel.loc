<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {

        $contact = new Contact();
        $contact -> name = $req -> input('name');
        $contact -> email = $req -> input('email');
        $contact -> subject = $req -> input('subject');
        $contact -> message = $req -> input('message');

        $contact -> save();

        return redirect() -> route('home') -> with('success', 'Информация была добавлена в БД');
    }

    public function allData() {
        $contact = new Contact;
        return view('messages', ['data' => $contact -> all()]);
    }

    public function showMessage($id) {
        $contact = new Contact;
        return view('oneMessages', ['data' => $contact -> find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('updateMessage', ['data' => $contact -> find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req) {
        $contact =  Contact::find($id);
        $contact -> name = $req -> input('name');
        $contact -> email = $req -> input('email');
        $contact -> subject = $req -> input('subject');
        $contact -> message = $req -> input('message');

        $contact -> save();

        return redirect() -> route('contactMessage', $id) -> with('success', 'Данные были обновлены');
    }

    public function deleteMessage($id) {
        Contact::find($id) -> delete();
        return redirect() -> route('contactData') -> with('success', 'Данные были удалены');
    }
}
