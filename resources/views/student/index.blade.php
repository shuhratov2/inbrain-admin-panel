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
                                    name_uz
                                </th>
                                <th>
                                    name_ru
                                </th>
                                <th>
                                    name_en
                                </th>
                                <th>
                                     body_uz
                                </th>
                                <th>
                                    body_ru
                                </th>
                                <th>
                                    body_en
                                </th>
                                <th>
                                    profile_image_uz
                                </th>
                                <th>
                                    profile_image_ru
                                </th>
                                <th>
                                    profile_image_en
                                </th>


                                <th style="width: 21%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $stu)
                                <tr>
                                    <td>
                                        {{$stu->name_uz}}
                                    </td>
                                    <td>
                                        {{$stu->name_ru}}
                                    </td>
                                    <td>
                                        {{$stu->name_en}}
                                    </td>
                                    <td>
                                        {{$stu->body_uz}}
                                    </td>
                                    <td>
                                        {{$stu->body_ru}}
                                    </td>
                                    <td>
                                        {{$stu->body_en}}
                                    </td>
                                    <td>
                                        <img src="{{asset('uploads/students/' . $stu->profile_image_uz)}}" width="70px" height="70px" alt="Image_uz">
                                    </td>
                                    <td>
                                        <img src="{{asset('uploads/students/' . $stu->profile_image_ru)}}" width="70px" height="70px" alt="Image_ru">
                                    </td>
                                    <td>
                                        <img src="{{asset('uploads/students/' . $stu->profile_image_en)}}" width="70px" height="70px" alt="Image_en">
                                    </td>

                                    <td class="project-actions text-right">

                                        <form action="{{ url('admin_panel/delete-student/'.$stu->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
