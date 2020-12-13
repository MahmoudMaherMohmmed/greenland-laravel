<?php

namespace App\Http\Controllers\admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $items = Product::paginate(10);

        return view('admin.product.index', compact('items'));
    }

    public function create()
    {
        return view('admin.product.edit');

    }

    public function store(Request $request)
    {
        //validate user data
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'code' => 'required',
            'category_id' => 'required | not_in:0',
            'price' => 'required | numeric',
            'currency_id' => 'required | not_in:0',
            'image' => 'required',
            'featured' => 'required',
            'status' => 'required',
        ]);

        //save product
        $item = new Product();
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->description_ar = $request->description_ar;
        $item->description_en = $request->description_en;
        $item->code = $request->code;
        $item->category_id = $request->category_id;
        $item->price = $request->price;
        $item->currency_id = $request->currency_id;
        $item->featured = $request->featured;


        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                    $request->image->move('files/product/', $imageName);

                    $item->image = $imageName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة المنتج بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Product::findOrFail($id);
        return view('admin.product.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Product::findOrFail($id);

        return view('admin.product.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate user data
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'code' => 'required',
            'category_id' => 'required | not_in:0',
            'price' => 'required | numeric',
            'currency_id' => 'required | not_in:0',
            'featured' => 'required',
            'status' => 'required',
        ]);

        //save product
        $item = Product::find($id);
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->description_ar = $request->description_ar;
        $item->description_en = $request->description_en;
        $item->code = $request->code;
        $item->category_id = $request->category_id;
        $item->price = $request->price;
        $item->currency_id = $request->currency_id;
        $item->featured = $request->featured;


        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                try {
                    $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                    $request->image->move('files/product/', $imageName);

                    $item->image = $imageName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات المنتج بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Product::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف بيانات المنتج بنجاح.');
        }
    }
}
