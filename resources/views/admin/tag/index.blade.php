@extends('layouts.admin_layout')

@section('title', 'Hamma Menu')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hamma Teglar</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>k

                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table  table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Tag_uz
                                </th>
                                <th>
                                    Tag_ru
                                </th>
                                <th>
                                    Tag_en
                                </th>
                                <th>
                                    Tag_about_uz
                                </th>
                                <th>
                                    Tag_about_ru
                                </th>
                                <th>
                                    Tag_about_en
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        {{ $tag['id'] }}
                                    </td>
                                    <td>
                                        {{ $tag['tag_uz'] }}
                                    </td>
                                    <td>
                                        {{ $tag['tag_ru'] }}
                                    </td>
                                    <td>
                                        {{ $tag['tag_en'] }}
                                    </td>
                                    <td>
                                        {{ $tag['about_uz'] }}
                                    </td>
                                    <td>
                                        {{ $tag['about_ru'] }}
                                    </td>
                                    <td>
                                        {{ $tag['about_en'] }}
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('tag.edit', $tag['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Ozgartirish
                                        </a>
                                        <form action="{{ route('tag.destroy', $tag['id']) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Ochirish
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
