@extends('layouts.admin_layout')

@section('title', 'Menuni ozgartirish')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tag {{ $tag['tag_uz'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('tag.update', $tag['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tag_uz</label>
                                    <input type="text" value="{{ $tag['tag_uz'] }}" name="tag_uz" class="form-control"
                                        id="exampleInputEmail1" placeholder="Menu nomini kiriting" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">About_uz</label>
                                    <input type="text" value="{{ $tag['about_uz'] }}" name="about_uz" class="form-control"
                                        id="exampleInputEmail1" placeholder="Menu nomini kiriting" required>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tag_ru</label>
                                    <input type="text" value="{{ $tag['tag_ru'] }}" name="tag_ru" class="form-control"
                                        id="exampleInputEmail1" placeholder="Menu nomini kiriting" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">About_ru</label>
                                    <input type="text" value="{{ $tag['about_ru'] }}" name="about_ru" class="form-control"
                                        id="exampleInputEmail1" placeholder="Menu nomini kiriting" required>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tag_en</label>
                                    <input type="text" value="{{ $tag['tag_en'] }}" name="tag_en" class="form-control"
                                        id="exampleInputEmail1" placeholder="Menu nomini kiriting" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">About_en</label>
                                    <input type="text" value="{{ $tag['about_en'] }}" name="about_en" class="form-control"
                                        id="exampleInputEmail1" placeholder="Menu nomini kiriting" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Yangilash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
