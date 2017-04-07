@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="box box-info">
            <form action="{{url('master/helper/store')}}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama Helper</label>
                        <input type="text" class="form-control" name="helperName" placeholder="Nama Helper">    
                    </div>
                    <div class="form-group">
                        <label>No Tel Helper</label>
                        <input type="text" class="form-control" name="helperPhone" placeholder="No Telp Helper">   
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
