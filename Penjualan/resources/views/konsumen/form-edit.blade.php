@extends("GunawandyTemplate::one-column")

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-23"> 
<br>
<h2>Form Edit Konsumen</h2>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Sorry!</strong> There is some problem with your input , Please Check Again! <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<hr>
<form action="{{ $url }}" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="nama" class="control-label col-xs-2">Nama</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="nama" value="{{ $konsumen->nama }}">
        </div>
    </div>
    
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="alamat" value="{{ $konsumen->alamat }}">
        </div>
    </div>

    <div class="form-group">
        <label for="tgl_lahir" class="control-label col-xs-2">Tanggal Lahir</label>
        <div class="col-xs-3">
        <input type="date" class="form-control" name="tgl_lahir" value="{{ $konsumen->tgl_lahir }}">
        </div>
    </div>


    <div class="form-group">
        <label for="email" class="control-label col-xs-2">Email</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="email" value="{{ $konsumen->email }}">
        </div>
    </div>

    <div class="form-group">
        <label for="telp" class="control-label col-xs-2">Telp</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="telp" value="{{ $konsumen->telp }}">
        </div>
    </div>
    
    <div class="form-group">
        <label for="waktubeli" class="control-label col-xs-2">Waktu Beli</label>
        <div class="col-xs-3">
        <input type="date" class="form-control" name="waktubeli" value="{{ $konsumen->waktu_beli }}">
        </div>
    </div>
    

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
	<div class="form-group">
        <label for="alamat" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
       <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        </div>
    </div>
</form>
@stop