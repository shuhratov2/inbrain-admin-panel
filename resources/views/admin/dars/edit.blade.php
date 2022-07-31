@extends('layouts.admin_layout')

@section('title', 'Darsga malumot qoshish')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Darsga malumot qoshish</h1>
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
                        <form action="{{ route('dars.update', $edit['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Menu tanlang</label>
                                            <select name="category_id" class="form-control" required>
                                                <option value="{{ $edit->id }}">{{ $edit->title }}
                                                </option>
                                                {{ $edit->title }}

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Menu tanlang</label>
                                            <select name="post_id" class="form-control" required>
                                                @foreach ($edit->posts as $fan)
                                                    <td>{{ $fan->title }}</td>
                                                    <option value="{{ $fan->id }}">{{ $fan->title }}
                                                    </option>
                                                    {{ $fan->title }}
                                                @endforeach
                                            </select>
                                        </div>
                                        @foreach ($edit->dars as $dars)


                                        <label for="exampleInputEmail1">Title_uz</label>
                                        <input type="text" name="title_uz" class="form-control" id="exampleInputEmail1"
                                            placeholder="Dars nomini kiriting" value="{{ $dars->title_uz }}">
                                        <label for="exampleInputEmail1">Title_ru</label>
                                        <input type="text" name="title_ru" class="form-control" id="exampleInputEmail1"
                                            placeholder="Введите название урока" value="{{ $dars->title_ru }}">
                                        <label for="exampleInputEmail1">Title_en</label>
                                        <input type="text" name="title_en" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter the name of the lesson" value="{{ $dars->title_en }}">

                                        <div class="form-group">
                                            <label>Text_uz</label>
                                            <textarea name="text_uz" class="editor" >{{$dars->text_uz}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Text_ru</label>
                                            <textarea name="text_ru" class="editor" >{{$dars->text_ru}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Text_en</label>
                                            <textarea name="text_en" class="editor" >{{$dars->text_en}}</textarea>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Qoshish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
