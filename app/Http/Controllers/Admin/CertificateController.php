<?php

namespace App\Http\Controllers\admin;

use App\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index()
    {
        $items = Certificate::paginate(20);

        return view('admin.certificate.index', compact('items'));
    }

    public function create()
    {
        return view('admin.certificate.edit');

    }

    public function store(Request $request)
    {
        //validate user
        $this->validate($request, [
            'title_ar' => 'required',
            'title_en' => 'required',
            'certificate' => 'required',
            'status' => 'required'
        ]);

        //save data
        $item = new Certificate();
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->description_ar = $request->description_ar;
        $item->description_en = $request->description_en;

        if ($request->hasFile('certificate')) {
            if ($request->file('certificate')->isValid()) {
                try {
                    $certificateName = time() . '.' . $request->certificate->getClientOriginalExtension();

                    $request->certificate->move('files/certificate/', $certificateName);

                    $item->certificate = $certificateName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة الشهاده بنجاح.');
        }
    }

    public function show($id)
    {
        $item = Certificate::findOrFail($id);
        return view('admin.certificate.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Certificate::findOrFail($id);

        return view('admin.certificate.edit', compact('item'));
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
        $item = Certificate::find($id);
        $item->title_ar = $request->title_ar;
        $item->title_en = $request->title_en;
        $item->description_ar = $request->description_ar;
        $item->description_en = $request->description_en;

        if ($request->hasFile('certificate')) {
            if ($request->file('certificate')->isValid()) {
                try {
                    $certificateName = time() . '.' . $request->certificate->getClientOriginalExtension();

                    $request->certificate->move('files/certificate/', $certificateName);

                    $item->certificate = $certificateName;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }

        $item->status = $request->status;
        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات الشهاده بنجاح.');
        }
    }

    public function destroy($id)
    {
        $item = Certificate::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف بيانات الشهاده بنجاح.');
        }
    }
}
