@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr style="background-color: #3c8dbc;">
                        <th style="width: 10px">#</th>
                        <th>Nama Helper</th>
                        <th>No Tel</th>
                    </tr>
                    @foreach($helpers as $index => $helper)
                    <tr>
                        <td>{{$index+1}}.</td>
                        <td>{{$helper->helperName}}</td>
                        <td>{{$helper->helperPhone}}</td>
                    </tr>
                    @endforeach 
                  </table>
            </div>
        </div>
    </div>
</div>

<a class="btn btn-info" href='{{url('master/helper/create')}}'>Tambah Helper Baru</a>
@endsection
