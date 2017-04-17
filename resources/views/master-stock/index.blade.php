@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr style="background-color: #3c8dbc;">
                        <th style="width: 10px">#</th>
                        <th>Jenis</th>
                        <th>Stock Isi</th>
                        <th>Stock Kosong</th>
                        <th>Stock Total</th>
                        <th>Tanggal Tambah Stock</th>
                    </tr>
                    @foreach($stock as $index => $item)
                    <tr>
                        <td>{{$index+1}}.</td>
                        <td>{{$item->JenisName}}</td>
                        <td>{{$item->StockIsi}}</td>
                        <td>{{$item->StockKosong}}</td>
                        <td>{{$item->StockTotal}}</td>
                        <td>{{$item->StockDateAdd}}</td>
                    </tr>
                    @endforeach 
                  </table>
            </div>
        </div>
    </div>
</div>

<!-- <a class="btn btn-info" href='{{url('master/stock/create')}}'>Tambah Customer Baru</a> -->
@endsection
