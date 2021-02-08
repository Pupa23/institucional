<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Contact::findOrFail(1);

        return view('components.admin.contact.index', compact('contact'));
    }

    public function update(Request $request)
    {
        try {
            $contact = Contact::findOrFail($request->id);
            $contact->street = $request->street;
            $contact->number = $request->number;
            $contact->city = $request->city;
            $contact->province = $request->province;
            $contact->country = $request->country;
            $contact->email = $request->email;
            $contact->phone = $request->phone;

            $contact->save();

            $request->session()->flash('alert-success', 'Contact updated correctly');
            return redirect()->route('contact-index')->with('success', 'Contact updated correctly');

        }catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

}
