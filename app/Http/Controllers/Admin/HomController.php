<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hom;

class HomController extends Controller
{
    public function index()
    {
        $homs = Hom::orderBy('created_at', 'desc')->get();

        return view('admin.hom.index', [
            'homs' => $homs
        ]);
    }


    public function create()
    {
        return view('admin.hom.create');
    }

    public function store(Request $request)
    {
        $new_hom = new Hom();
        $new_hom->title_uz = $request->title_uz;
        $new_hom->title_ru = $request->title_ru;
        $new_hom->title_en = $request->title_en;
        $new_hom->text_uz = $request->text_uz;
        $new_hom->text_ru = $request->text_ru;
        $new_hom->text_en = $request->text_en;
        $new_hom->link = $request->link;
        $new_hom->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli qoshildi!');
    }


    public function show(Hom $hom)
    {
        //
    }


    public function edit(Hom $hom)
    {
        return view('admin.hom.edit', [
            'hom' => $hom
        ]);
    }


    public function update(Request $request, Hom $hom)
    {
        $hom->link = $request->link;
        $hom->title_ru = $request->title_ru;
        $hom->title_en = $request->title_en;
        $hom->text_uz = $request->text_uz;
        $hom->text_ru = $request->text_ru;
        $hom->title_uz = $request->title_uz;
        $hom->text_en = $request->text_en;
        $hom->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli yangilandi!');
    }


    public function destroy(Hom $hom)
    {
        $hom->delete();
        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli ochirildi!');
    }
}
