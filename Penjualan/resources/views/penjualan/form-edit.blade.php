@extends("GunawandyTemplate::one-column")
@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-12"> 
<br>
<h2>Form Edit Status</h2>
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
<br>
<form action="{{ $url }}" method="post" class="form-horizontal">
	

    <div class="form-group">
        <label for="kategori" class="control-label col-xs-1">Status</label>
        <div class="col-xs-3">
    <select class="form-control" name="status">
        <option value="Lunas" {{ ($penjualan->status=='Lunas')?'selected':'' }} >Lunas</option>
        <option value="Belum Bayar" {{ ($penjualan->status=='Belum Bayar')?'selected':'' }} >Belum Bayar</option>

    </select>
        </div>
    </div>

     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        </div>
    </div>
</form>
@endsection