<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $data = [
            "data_tag" => Tag::get()
        ];

        return view("admin.tag.index", $data);
    }

    public function store(Request $request)
    {
        Tag::create($request->all());

        return back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Tag::where("id", $request->id)
        ];

        return view("admin.tag.edit", $data);
    }

    public function update(Request $request)
    {
        Tag::where("id", decrypt($request->id))->update([
            "nama" => $request->nama
        ]);

        return back();
    }

    public function destroy($id)
    {
        Tag::where("id", $id)->first();

        return back();
    }
}
