<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kirish;

class KirishController extends Controller
{
    public function index()
    {
        $kirishs = Kirish::orderBy('created_at', 'desc')->get();

        return view('admin.kirish.index', [
            'kirishs' => $kirishs
        ]);
    }


    public function create()
    {
        return view('admin.kirish.create');
    }

    public function store(Request $request)
    {
        $new_kirish = new Kirish();
        $new_kirish->title_uz = $request->title_uz;
        $new_kirish->title_ru = $request->title_ru;
        $new_kirish->title_en = $request->title_en;
        $new_kirish->text_uz = $request->text_uz;
        $new_kirish->text_ru = $request->text_ru;
        $new_kirish->text_en = $request->text_en;
        $new_kirish->video_title = $request->video_title;
        $new_kirish->link = $request->link;
        $new_kirish->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli qoshildi!');
    }


    public function show(Kirish $kirish)
    {
        //
    }


    public function edit(Kirish $kirish)
    {
        return view('admin.kirish.edit', [
            'kirish' => $kirish
        ]);
    }


    public function update(Request $request, Kirish $kirish)
    {

        $kirish->title_uz = $request->title_uz;
        $kirish->title_ru = $request->title_ru;
        $kirish->title_en = $request->title_en;
        $kirish->text_uz = $request->text_uz;
        $kirish->text_ru = $request->text_ru;
        $kirish->text_en = $request->text_en;
        $kirish->video_title = $request->video_title;
        $kirish->link = $request->link;
        $kirish->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli yangilandi!');
    }


    public function destroy(Kirish $kirish)
    {
        $kirish->delete();
        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli ochirildi!');
    }
}
