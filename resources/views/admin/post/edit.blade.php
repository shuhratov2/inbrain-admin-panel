@extends('layouts.admin_layout')

@section('title', 'Postni ozgartirish')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Darsni ozgartirish: {{ $post['title'] }}</h1>
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
                        <form action="{{ route('post.update', $post['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Menu tanlang</label>
                                            <select name="category_id" class="form-control" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category['id'] }}" @if ($category['id'] == $post['category_id']) selected
                                                @endif>{{ $category['title'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <label for="exampleInputEmail1">Nomi</label>
                                    <input type="text" value="{{ $post['title'] }}" name="title" class="form-control"
                                        id="exampleInputEmail1" placeholder="Postni nomini kiriting" required>
                                </div>


                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
