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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('news.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">

                                    <h1>Yangilik qoshihs</h1>
                                    <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Yangilik nomi</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Text</label>
                                            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Rasm tanlang</label>
                                            <input type="file" class="form-control-file" id="image" name="image">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Qoshish</button>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection
