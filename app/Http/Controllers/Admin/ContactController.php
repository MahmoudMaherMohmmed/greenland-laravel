<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $items = Contact::paginate(20);

        return view('admin.contact.index', compact('items'));
    }

    public function create()
    {
        return view('admin.contact.edit');

    }

    public function store(Request $request)
    {
        //validate inputs
        $this->validate($request, [
            'address_ar' => 'required',
            'address_en' => 'required',
            'email_1' => 'required | email',
            'phone_1' => 'required',
            'phone_2' => 'required',
            'line' => 'required',
            'whatsapp' => 'required',
        ]);

        //save data
        $item = new Contact();
        $item->address_ar = $request->address_ar;
        $item->address_en = $request->address_en;
        $item->email_1 = $request->email_1;
        $item->email_2 = $request->email_2;
        $item->email_3 = $request->email_3;
        $item->phone_1 = $request->phone_1;
        $item->phone_2 = $request->phone_2;
        $item->phone_3 = $request->phone_3;
        $item->line = $request->line;
        $item->whatsapp = $request->whatsapp;
        $item->whatsapp_2 = $request->whatsapp_2;

        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة البيانات بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Contact::findOrFail($id);
        return view('admin.contact.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Contact::findOrFail($id);

        return view('admin.contact.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate inputs
        $this->validate($request, [
            'address_ar' => 'required',
            'address_en' => 'required',
            'email_1' => 'required | email',
            'phone_1' => 'required',
            'phone_2' => 'required',
            'line' => 'required',
            'whatsapp' => 'required',
        ]);

        //save data
        $item = Contact::find($id);
        $item->address_ar = $request->address_ar;
        $item->address_en = $request->address_en;
        $item->email_1 = $request->email_1;
        $item->email_2 = $request->email_2;
        $item->email_3 = $request->email_3;
        $item->phone_1 = $request->phone_1;
        $item->phone_2 = $request->phone_2;
        $item->phone_3 = $request->phone_3;
        $item->line = $request->line;
        $item->whatsapp = $request->whatsapp;
        $item->whatsapp_2 = $request->whatsapp_2;

        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل البيانات بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Contact::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف المعلومات بنجاح.');
        }
    }
}
