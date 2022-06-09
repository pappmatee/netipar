<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Image;
use App\Models\Phone;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = new Contact();

        $contact->full_name = $request->get('full_name');
        $contact->save();

        $emails = [];
        foreach ($request->get('email') as $email) {
            $emails[] = new Email(['email' => $email]);
        }
        $contact->emails()->saveMany($emails);

         $phones = [];
         foreach($request->get('phone') as $phone) {
             $phones[] = new Phone(['phone' => $phone]);
         }
        $contact->phones()->saveMany($phones);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $request->file('image')->storeAs('public', $image->hashName());

            $imageObj = new Image();
            $imageObj->file_name = $image->hashName();

            $contact->image()->save($imageObj);
        }

        $contact->address()->create([
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'zip' => $request->get('zip')
        ]);

        if($request->has('address_check')) {
            $contact->address()->create([
                'mailing_address' => $request->get('mailing_address'),
                'mailing_city' => $request->get('mailing_city'),
                'mailing_zip' => $request->get('mailing_zip')
            ]);
        }

        return redirect()->route('phonebook.index')->with('success', 'Contact has been added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('contact.edit');
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
