<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('created_at', 'desc')->get();

        return view('admin.tag.index', [
            'tags' => $tags
        ]);
    }


    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $new_tag = new Tag();
        $new_tag->tag_uz = $request->tag_uz;
        $new_tag->tag_ru = $request->tag_ru;
        $new_tag->tag_en = $request->tag_en;
        $new_tag->about_uz = $request->about_uz;
        $new_tag->about_ru = $request->about_ru;
        $new_tag->about_en = $request->about_en;
        $new_tag->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli qoshildi!');
    }


    public function show(Tag $tag)
    {
        //
    }


    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', [
            'tag' => $tag
        ]);
    }


    public function update(Request $request, Tag $tag)
    {

        $tag->tag_uz = $request->tag_uz;
        $tag->tag_ru = $request->tag_ru;
        $tag->tag_en = $request->tag_en;
        $tag->about_uz = $request->about_uz;
        $tag->about_ru = $request->about_ru;
        $tag->about_en = $request->about_en;
        $tag->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli yangilandi!');
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli ochirildi!');
    }
}
