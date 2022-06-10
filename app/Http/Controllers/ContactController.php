<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
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
        $contact = Contact::find($id);
        return view('contact.edit')->with('contact', $contact);
    }


    public function update(UpdateContactRequest $request, $id)
    {
        $contact = Contact::find($id);

        $contact->full_name = $request->get('full_name');
        $contact->save();

        $contact->emails()->delete();
        $emails = [];
        foreach ($request->get('email') as $email) {
            $emails[] = new Email(['email' => $email]);
        }
        $contact->emails()->saveMany($emails);

        $contact->phones()->delete();
        $phones = [];
        foreach($request->get('phone') as $phone) {
            $phones[] = new Phone(['phone' => $phone]);
        }
        $contact->phones()->saveMany($phones);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $request->file('image')->storeAs('public', $image->hashName());

            $imageObj = Image::whereId($contact->id);
            $imageObj->file_name = $image->hashName();

            $contact->image()->save($imageObj);
        }

        $contact->address()->update([
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'zip' => $request->get('zip')
        ]);

        if($request->has('address_check')) {
            $contact->address()->update([
                'mailing_address' => $request->get('mailing_address'),
                'mailing_city' => $request->get('mailing_city'),
                'mailing_zip' => $request->get('mailing_zip')
            ]);
        }

        return redirect()->route('phonebook.index')->with('success', 'Contact has been added successfully');
    }

    public function destroy($id)
    {
        Debugbar::info($id);
        $contact = Contact::find($id);

        $contact->delete();
        $contact->emails()->delete();
        $contact->phones()->delete();
        $contact->image()->delete();
        $contact->address()->delete();

        return response('result', 200);
    }
}
