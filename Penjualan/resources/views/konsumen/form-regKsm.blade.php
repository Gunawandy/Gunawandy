@extends("GunawandyTemplate::one-column")

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-23"> 
<br>
<h2>Form Registrasi Kosumen</h2>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>SORRY!</strong> There is some problem with your input , Please Check Again! <br><br>
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
        <input type="text" class="form-control" name="nama"  placeholder="nama">
        </div>
    </div>
    
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="alamat"  placeholder="Alamat">
        </div>
    </div>

    <div class="form-group">
        <label for="tgl_lahir" class="control-label col-xs-2">Tanggal Lahir</label>
        <div class="col-xs-3">
        <input type="date" class="form-control" name="tgl_lahir" placeholder="YYYY-MM-DD">
        </div>
    </div>


    <div class="form-group">
        <label for="email" class="control-label col-xs-2">Email</label>
        <div class="col-xs-3">
        <input type="email" class="form-control" name="email" placeholder="Example@mail.com">
        </div>
    </div>
    
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Telp</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="telp" placeholder="Telp">
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Username</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Password</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="password" placeholder="Password">
        </div>
    </div>
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
	<div class="form-group">
        <label for="alamat" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
         <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Daftar</span></button>
        </div>
    </div>
</form>
@stop