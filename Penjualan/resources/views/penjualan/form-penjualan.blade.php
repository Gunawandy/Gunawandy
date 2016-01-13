@extends("GunawandyTemplate::one-column")

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-23"> 
<br>
<h2>Form Tambah Penjualan</h2>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
    <label for="username" class="control-label col-xs-2">Konsumen</label>
    <div class="col-xs-3">
    <select name="konsumen_id" class="form-control">
    <?php
        $konek = mysqli_connect("localhost","root","","penjualan");   
        $query = "select * from konsumen";
        $hasil = mysqli_query($konek,$query);
        while($data=mysqli_fetch_array($hasil)){
            echo "<option value=$data[id]>$data[nama]</option>";
    } ?>
    </select>
    </div>
    </div>
    
    <div class="form-group">
    <label for="username" class="control-label col-xs-2">ISP</label>
    <div class="col-xs-3">
    <select name="isp_id" class="form-control">
    <?php
        $konek = mysqli_connect("localhost","root","","penjualan");   
        $query = "select * from isp";
        $hasil = mysqli_query($konek,$query);
        while($data=mysqli_fetch_array($hasil)){
            echo "<option value=$data[id]>$data[nama]</option>";
    } ?>
    </select>
    </div>
    </div>

    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
	<div class="form-group">
        <label for="alamat" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
         <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
        </div>
    </div>
</form>
@stop