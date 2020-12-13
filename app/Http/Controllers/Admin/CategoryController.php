<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $items = Category::paginate(20);

        return view('admin.category.index', compact('items'));
    }

    public function create()
    {
        return view('admin.category.edit');

    }

    public function store(Request $request)
    {
        //validate user
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = new Category();
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->description_ar = $request->description_ar;
        $item->description_en = $request->description_en;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();

                    $request->image->move('files/category/', $imageName);

                    $item->image = $imageName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة القسم بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Category::findOrFail($id);
        return view('admin.category.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Category::findOrFail($id);

        return view('admin.category.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate user
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = Category::find($id);
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->description_ar = $request->description_ar;
        $item->description_en = $request->description_en;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();

                    $request->image->move('files/category/', $imageName);

                    $item->image = $imageName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات القسم بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Category::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف بيانات القسم بنجاح.');
        }
    }
}
