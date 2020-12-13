<?php

namespace App\Http\Controllers\admin;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index()
    {
        $items = Country::paginate(20);

        return view('admin.country.index', compact('items'));
    }

    public function create()
    {
        return view('admin.country.edit');

    }

    public function store(Request $request)
    {
        //validate inputs
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'sortname_ar' => 'required',
            'sortname_en' => 'required',
            'phonecode' => 'required',
            'flag' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = new Country();
        $item->sortname_ar = $request->sortname_ar;
        $item->sortname_en = $request->sortname_en;
        $item->name_ar = $request->name_ar;
        $item->name_en = $request->name_en;
        $item->phonecode = $request->phonecode;

        if ($request->hasFile('flag')) {
            if ($request->file('flag')->isValid()) {
                try {
                    $flagName = time() . '.' . $request->flag->getClientOriginalExtension();

                    $request->flag->move('files/country/', $flagName);

                    $item->flag = $flagName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة الدولة بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Country::findOrFail($id);
        return view('admin.country.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Country::findOrFail($id);

        return view('admin.country.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate inputs
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'sortname_ar' => 'required',
            'sortname_en' => 'required',
            'phonecode' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = Country::find($id);
        $item->sortname_ar = $request->sortname_ar;
        $item->sortname_en = $request->sortname_en;
        $item->name_ar = $request->name_ar;
        $item->name_en = $request->name_en;
        $item->phonecode = $request->phonecode;

        if ($request->hasFile('flag')) {
            if ($request->file('flag')->isValid()) {
                try {
                    $flagName = time() . '.' . $request->flag->getClientOriginalExtension();

                    $request->flag->move('files/country/', $flagName);

                    $item->flag = $flagName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات الدولة بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Country::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف بيانات الدولة بنجاح.');
        }
    }
}
