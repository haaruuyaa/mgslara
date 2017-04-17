@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr style="background-color: #3c8dbc;">
                        <th style="width: 10px">#</th>
                        <th>Nama Customer</th>
                        <th>No Tel</th>
                    </tr>
                    @foreach($customers as $index => $customer)
                    <tr>
                        <td>{{$index+1}}.</td>
                        <td>{{$customer->CustomerName}}</td>
                        <td>{{$customer->CustomerPhone}}</td>
                    </tr>
                    @endforeach 
                  </table>
            </div>
        </div>
    </div>
</div>

<a class="btn btn-info" href='{{url('master/customer/create')}}'>Tambah Customer Baru</a>
@endsection
