@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="box box-info">
            <form action="{{url('master/customer/store')}}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <input type="text" class="form-control" name="customerName" placeholder="Nama Customer">    
                    </div>
                    <div class="form-group">
                        <label>No Tel Customer</label>
                        <input type="text" class="form-control" name="customerPhone" placeholder="No Telp Customer">   
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
