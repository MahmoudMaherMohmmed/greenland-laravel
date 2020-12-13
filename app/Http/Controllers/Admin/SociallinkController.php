<?php

namespace App\Http\Controllers\Admin;

use App\SocialLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SociallinkController extends Controller
{
    public function index()
    {
        $items = SocialLink::paginate(20);

        return view('admin.sociallink.index', compact('items'));
    }

    public function create()
    {
        return view('admin.sociallink.edit');
    }

    public function store(Request $request)
    {
        //validate inputs
        $this->validate($request, [
            'icon' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);

        //save data
        $item = new SocialLink();
        $item->icon = $request->icon;
        $item->link = $request->link;
        $item->color = $request->color;
        $item->status = $request->status;

        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم اضافة الرابط الاجتماعى.');
        }
    }

    public function show($id)
    {
        $item = SocialLink::findOrFail($id);
        return view('admin.sociallink.show', compact('item'));
    }

    public function edit($id)
    {
        $item = SocialLink::findOrFail($id);

        return view('admin.sociallink.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //validate inputs
        $this->validate($request, [
            'icon' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);

        //save data
        $item = SocialLink::find($id);
        $item->icon = $request->icon;
        $item->link = $request->link;
        $item->color = $request->color;
        $item->status = $request->status;

        if ($item->save()) {
            return redirect()->back()->with('msg', 'تم تعديل بيانات الرابط الاجتماعى.');
        }
    }

    public function destroy($id)
    {
        $item = SocialLink::find($id);
        if ($item->delete()) {
            return redirect()->back()->with('msg', 'تم حذف الرابط الاجتماعى.');
        }
    }
}
