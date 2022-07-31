@extends('layouts.admin_layout')

@section('title', 'Hamma darslar')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hamma darslar</h1>
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
            <div class="card">
                <div class="card-body p-0">
                    <table class="table  table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Menu
                                </th>
                                <th>
                                    Soni
                                </th>
                                <th>
                                    Title uz
                                </th>
                                <th>
                                    Title ru
                                </th>
                                <th>
                                    Title en
                                </th>
                                <th>
                                    Text uz
                                </th>
                                <th>
                                    Text ru
                                </th>
                                <th>
                                    Text en
                                </th>


                                <th style="width: 21%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dars as $dars)
                                <tr>
                                    <td>
                                        {{ $dars['id'] }}
                                    </td>
                                    <td>
                                        {{ $dars['category_id'] }}
                                    </td>
                                    <td>
                                        {{ $dars['post_id'] }}
                                    </td>
                                    <td>
                                        {{ $dars['title_uz'] }}
                                    </td>
                                    <td>
                                        {{ $dars['title_ru'] }}
                                    </td>
                                    <td>
                                        {{ $dars['title_en'] }}
                                    </td>
                                    <td>
                                        {{ $dars['text_uz'] }}
                                    </td>
                                    <td>
                                        {{ $dars['text_ru'] }}
                                    </td>
                                    <td>
                                        {{ $dars['text_en'] }}
                                    </td>
                                    {{-- <td>
                                        {{ $dars->category['title'] }}
                                    </td> --}}


                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('dars.edit', $dars['category_id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Ozgartirish
                                        </a>
                                        <form action="{{ route('dars.destroy', $dars['category_id']) }}" method="POST"
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
