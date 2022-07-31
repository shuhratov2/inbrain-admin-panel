@extends('layouts.admin_layout')

@section('title', 'Hamma Menu')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kirish</h1>
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
                                    Title_uz
                                </th>
                                <th>
                                    Title_ru
                                </th>
                                <th>
                                    Title_en
                                </th>

                                <th>
                                    Text_uz
                                </th>
                                <th>
                                    Text_ru
                                </th>
                                <th>
                                    Text_en
                                </th>

                                <th>
                                    Video title
                                </th>

                                <th>
                                  Video link
                                </th>

                                <th style="width: 30%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kirishs as $kirish)
                                <tr>
                                    <td>
                                        {{ $kirish['id'] }}
                                    </td>
                                    <td>
                                        {{ $kirish['title_uz'] }}
                                    </td>
                                    <td>
                                        {{ $kirish['title_ru'] }}
                                    </td>
                                    <td>
                                        {{ $kirish['title_en'] }}
                                    </td>

                                    <td>
                                        {{ $kirish['text_uz'] }}
                                    </td>
                                    <td>
                                        {{ $kirish['text_ru'] }}
                                    </td>
                                    <td>
                                        {{ $kirish['text_en'] }}
                                    </td>

                                    <td>
                                        {{ $kirish['video_title'] }}
                                    </td>

                                    <td>
                                        {{ $kirish['link'] }}
                                    </td>


                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('kirish.edit', $kirish['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Ozgartirish
                                        </a>
                                        <form action="{{ route('kirish.destroy', $kirish['id']) }}" method="POST"
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
