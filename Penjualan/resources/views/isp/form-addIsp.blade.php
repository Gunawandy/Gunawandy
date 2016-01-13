@extends("GunawandyTemplate::one-column")

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-12"> 
<br>
<h2>Form Tambah ISP</h2>
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
<br>
<form action="{{ $url }}" method="post" class="form-horizontal">
	
	 <div class="form-group">
        <label for="nama" class="control-label col-xs-1">Nama ISP</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="nama" placeholder="Nama Isp">
        </div>
    </div>
	
    <div class="form-group">
        <label for="kuota" class="control-label col-xs-1">Kuota</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="kuota" placeholder="Kuota">
        </div>
    </div>

    <div class="form-group">
        <label for="operator" class="control-label col-xs-1">Operator</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="operator" placeholder="Operator">
        </div>
    </div>

    <div class="form-group">
        <label for="kadaluarsa" class="control-label col-xs-1">Kadaluarsa</label>
        <div class="col-xs-3">
    <input type="date" class="form-control" name="kadaluarsa" placeholder="YYYY-MM-DD">
        </div>
    </div>

        <div class="form-group">
        <label for="retailer" class="control-label col-xs-1">Retailer</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="retailer" placeholder="Retailer">
        </div>
    </div>


    <div class="form-group">
        <label for="harga" class="control-label col-xs-1">Harga</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="harga" placeholder="Harga">
        </div>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
            <a href="/petugas"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
        </div>
    </div>
</form>
@endsection