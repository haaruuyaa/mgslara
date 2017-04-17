@extends('admin_template')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="box box-info">
            <form action="{{url('master/jenis/store')}}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama Jenis</label>
                        <input type="text" class="form-control" name="jenisName" placeholder="Nama Helper">    
                    </div>                    
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
