<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Dars;
use Illuminate\Http\Request;

class DarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dars = Dars::orderBy('created_at', 'DESC')->get();

        return view('admin.dars.index', [
            'dars' => $dars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  Category::with('posts')->get();

        return view('admin.dars.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dars = new Dars();
        $dars->category_id = $request->category_id;
        $dars->post_id = $request->post_id;
        $dars->title_uz = $request->title_uz;
        $dars->title_ru = $request->title_ru;
        $dars->title_en = $request->title_en;
        $dars->text_uz = $request->text_uz;
        $dars->text_ru = $request->text_ru;
        $dars->text_en = $request->text_en;


        $dars->save();

        return redirect()->back()->withSuccess('Dars muvvafaqiyatli qoshildi!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Category::with(['dars','posts'])->find($id);


        return view('admin.dars.edit', [
            'edit' => $edit,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $dars = Dars::where('id',$id)->first();
        $dars->category_id = $request->category_id;
        $dars->post_id = $request->post_id;
        $dars->title_uz = $request->title_uz;
        $dars->title_ru = $request->title_ru;
        $dars->title_en = $request->title_en;
        $dars->text_uz = $request->text_uz;
        $dars->text_ru = $request->text_ru;
        $dars->text_en = $request->text_en;

        $dars->save();

        return redirect()->back()->withSuccess('Post muvvafaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dars = Dars::find($id);

        $dars->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');
    }
}
