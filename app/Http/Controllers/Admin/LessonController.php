<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;


class LessonController extends Controller
{

    public function index()
    {
        $lessons = Lesson::orderBy('created_at', 'desc')->get();

        return view('admin.lesson.index', [
            'lessons' => $lessons
        ]);
    }


    public function create()
    {
        return view('admin.lesson.create');
    }

    public function store(Request $request)
    {
        $new_lesson = new Lesson();
        $new_lesson->title_uz = $request->title_uz;
        $new_lesson->title_ru = $request->title_ru;
        $new_lesson->title_en = $request->title_en;
        $new_lesson->text_uz = $request->text_uz;
        $new_lesson->text_ru = $request->text_ru;
        $new_lesson->text_en = $request->text_en;
        $new_lesson->link = $request->link;
        $new_lesson->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli qoshildi!');
    }


    public function show(Lesson $lesson)
    {
        //
    }


    public function edit(Lesson $lesson)
    {
        return view('admin.lesson.edit', [
            'lesson' => $lesson
        ]);
    }


    public function update(Request $request, Lesson $lesson)
    {

        $lesson->title_ru = $request->title_ru;
        $lesson->title_en = $request->title_en;
        $lesson->text_uz = $request->text_uz;
        $lesson->text_ru = $request->text_ru;
        $lesson->title_uz = $request->title_uz;
        $lesson->text_en = $request->text_en;
        $lesson->link = $request->link;
        $lesson->save();

        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli yangilandi!');
    }


    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->back()->withSuccess('Malumot muvvafaqiyatli ochirildi!');
    }
}
