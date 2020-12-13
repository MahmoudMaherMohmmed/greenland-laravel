<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $items = User::paginate(20);

        return view('admin.user.index', compact('items'));
    }

    public function create()
    {
        return view('admin.user.edit');

    }

    public function store(Request $request)
    {
        //validate user data
        $this->validate($request, [
            'username' => 'required | max:191',
            'firstname' => 'required | max:191',
            'lastname' => 'required | max:191',
            'email' => 'required | email | unique:users',
            'phone' => 'required | numeric',
            'password' => 'required | confirmed',
            'status' => 'required',
        ]);

        //insert user data
        $item = new User();
        $item->username = $request->username;
        $item->firstname = $request->firstname;
        $item->lastname = $request->lastname;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->password = Hash::make($request->password);
        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة المستخدم بنجاح.');
        }
    }

    public function show($id)
    {
        $item = User::findOrFail($id);
        return view('admin.user.show', compact('item'));
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view('admin.user.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate user data
        $this->validate($request, [
            'username' => 'required | max:191',
            'firstname' => 'required | max:191',
            'lastname' => 'required | max:191',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'status' => 'required',
        ]);

        //insert user data
        $item = User::find($id);
        $item->username = $request->username;
        $item->firstname = $request->firstname;
        $item->lastname = $request->lastname;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات المستخدم بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = User::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف المستخدم بنجاح.');
        }
    }
}
