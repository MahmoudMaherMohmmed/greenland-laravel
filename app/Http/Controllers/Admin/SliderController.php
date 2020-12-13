<?php

namespace App\Http\Controllers\admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $items = Slider::paginate(20);

        return view('admin.slider.index', compact('items'));
    }

    public function create()
    {
        return view('admin.slider.edit');

    }

    public function store(Request $request)
    {
        //validate slider inputs
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);

        //save slider data
        $item = new Slider();
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->content_ar = $request->content_ar;
        $item->content_en = $request->content_en;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                    $request->image->move('files/slider/', $imageName);
                    $item->image = $imageName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة الى الاسليد بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Slider::findOrFail($id);
        return view('admin.slider.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate slider data
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'status' => 'required'
        ]);

        //update slider data
        $item = Slider::find($id);
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->content_ar = $request->content_ar;
        $item->content_en = $request->content_en;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                    $request->image->move('files/slider/', $imageName);
                    $item->image = $imageName;

                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات الاسليد بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Slider::find($id);

        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف بيانات الاسليدر بنجاح.');
        }
    }
}
