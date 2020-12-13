<?php

namespace App\Http\Controllers\admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $items = Setting::paginate(20);

        return view('admin.setting.index', compact('items'));
    }

    public function create()
    {
        return view('admin.setting.edit');

    }

    public function store(Request $request)
    {
        //validate user inputs
        $this->validate($request, [
            'title_ar' => 'required | max:191',
            'title_en' => 'required | max:191',
            'logo' => 'required',
            'status' => 'required',
        ]);

        //redirect user back
        return redirect()->back()->with('msg', 'بيانات موقعك موجوده بالفعل.');
    }

    public function show($id)
    {
        $item = Setting::findOrFail($id);
        return view('admin.setting.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Setting::findOrFail($id);

        return view('admin.setting.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate user inputs
        $this->validate($request, [
            'title_ar' => 'required | max:191',
            'title_en' => 'required | max:191',
            'status' => 'required',
        ]);

        //save setting data
        $item = Setting::find($id);
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;

        if ($request->hasFile('logo')) {
            if ($request->file('logo')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->logo->getClientOriginalExtension();
                    $request->logo->move('files/logos/', $imageName);

                    $item->logo = $imageName;


                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل البيانات بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Setting::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف البيانات بنجاح.');
        }
    }
}
