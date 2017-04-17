@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr style="background-color: #3c8dbc;">
                        <th style="width: 10px">#</th>
                        <th>Nama Jenis</th>
                    </tr>
                    @foreach($jenis as $index => $jen)
                    <tr>
                        <td>{{$index+1}}.</td>
                        <td>{{$jen->JenisName}}</td>
                    </tr>
                    @endforeach 
                  </table>
            </div>
        </div>
    </div>
</div>

<a class="btn btn-info" href='{{url('master/jenis/create')}}'>Tambah Jenis Baru</a>
@endsection
