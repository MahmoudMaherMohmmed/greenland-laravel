<?php

namespace App\Http\Controllers\admin;

use App\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function index()
    {
        $items = Currency::paginate(20);

        return view('admin.currency.index', compact('items'));
    }

    public function create()
    {
        return view('admin.currency.edit');

    }

    public function store(Request $request)
    {
        //validate user
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'code_ar' => 'required',
            'code_en' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = new Currency();
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->code_ar = $request->code_ar;
        $item->code_en = $request->code_en;
        $item->value = $request->value;
        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة العملة بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Currency::findOrFail($id);
        return view('admin.currency.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Currency::findOrFail($id);

        return view('admin.currency.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate user
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'code_ar' => 'required',
            'code_en' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = Currency::find($id);
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->code_ar = $request->code_ar;
        $item->code_en = $request->code_en;
        $item->value = $request->value;
        $item->status = $request->status;

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات العملة.');
        }
    }

    public function destroy($id)
    {
        $item = Currency::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف بيانات العملة.');
        }
    }
}
