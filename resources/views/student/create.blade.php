@extends('layouts.admin_layout')

@section('title', 'Dars qoshish')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> Yangilik qoshish
                        <a href="{{url('admin_panel/students')}}" class="btn btn-danger float-none">Orqaga qaytish</a>
                    </h4>

                </div>
                <div class="card-body">
                    <form action="{{url('admin_panel/add-student')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Yangilik nomini kiriting (uz)</label>
                            <input type="text" name="name_uz" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik nomini kiriting (ru)</label>
                            <input type="text" name="name_ru" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik nomini kiriting (en)</label>
                            <input type="text" name="name_en" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik textini kiriting (uz)</label>
                            <input type="text" name="body_uz" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik textini kiriting (ru)</label>
                            <input type="text" name="body_ru" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik textini kiriting (en)</label>
                            <input type="text" name="body_en" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik rasmini tanlang(uz)</label>
                            <input type="file" name="profile_image_uz" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik rasmini tanlang(ru)</label>
                            <input type="file" name="profile_image_ru" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Yangilik rasmini tanlang(en)</label>
                            <input type="file" name="profile_image_en" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
