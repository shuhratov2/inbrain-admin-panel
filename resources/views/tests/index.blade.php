@extends('layouts.admin_layout')

@section('title', 'Hamma testlar')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Test project</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin_panel/test/create') }}" class="btn btn-success btn-sm" title="Add New test">
                            <i class="fa fa-plus" aria-hidden="true"></i> Qo'shish
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kurs</th>
                                        <th>Dars</th>
                                        <th>Savol</th>
                                        <th>Harakatlar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tests as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->curse }}</td>
                                        <td>{{ $item->lesson }}</td>
                                        <td>{{ $item->question }}</td>


                                        <td>
                                            <a href="{{ url('/admin_panel/test/' . $item->id) }}" title="View test"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ko'rish</button></a>
                                            <a href="{{ url('/admin_panel/test/' . $item->id . 'admin_panel/edit') }}" title="Edit test"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> O'zgartirish</button></a>

                                            <form method="POST" action="{{ url('/admin_panel/test' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete test" onclick="return confirm(`&quot;Ochirmoqchimisiz?&quot;`)"><i class="fa fa-trash-o" aria-hidden="true"></i> O'chirish</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
