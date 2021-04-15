@extends('templates/header')
@section('content')

    <section class="content-header">
        <h1>
            Duta Kelas
        </h1>
        <small>SMKN 1 PADAHERANG </small>
        <ol class="breadcrumb">
            <li> <a href="{{url('/)}}"> <i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Data Kelas</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href=" {{url('kelas/add')}} " class="btn btn-success"><li class="fa fa-plus-circle"></li>Tambah </a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $row)
                    <tr>
                        <td>{{ !empty($i) ? ++i : 1 }}</td>
                        <td>{{ $row->nama_kelas }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>
                            <a href="{{ url('kelas/$row->id_kelas/edit') }}" class="btn btn-sm btn-warning"> <i class="fa fa-pencil"></i></a>
                            <form action="{{ url('kelas/$row->id_kelas/hapus') }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    @endsection