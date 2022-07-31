@extends('layouts.admin_layout')

@section('title', 'Menuni ozgartirish')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

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
                        <form action="{{ route('hom.update', $hom['id']) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="form-group">


                                    <label for="exampleInputEmail1">Video link</label>
                                    <input type="text" value="{{ $hom['link'] }}" name="link" class="form-control" id="exampleInputEmail1"
                                        placeholder="Menu nomini kiriting" required>


                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title_uz</label>
                                    <input type="text" value="{{ $hom['title_uz'] }}" name="title_uz" class="form-control" id="exampleInputEmail1"
                                        placeholder="Menu nomini kiriting" required>


                                        <label for="exampleInputEmail1">Title_ru</label>
                                        <input type="text" value="{{ $hom['title_ru'] }}" name="title_ru" class="form-control" id="exampleInputEmail1"
                                            placeholder="Menu nomini kiriting" required>

                                            <label for="exampleInputEmail1">Title_en</label>
                                            <input type="text" value="{{ $hom['title_en'] }}" name="title_en" class="form-control" id="exampleInputEmail1"
                                                placeholder="Menu nomini kiriting" required>


                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">

                                    <div class="form-group">
                                        <label>Text_uz</label>
                                        <textarea name="text_uz" class="editor" >{{$hom->text_uz}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Text_ru</label>
                                        <textarea name="text_ru" class="editor" >{{$hom->text_ru}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Text_en</label>
                                        <textarea name="text_en" class="editor" >{{$hom->text_en}}</textarea>
                                    </div>



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
