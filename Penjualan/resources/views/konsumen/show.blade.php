@extends("GunawandyTemplate::one-column")
@section('content')
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-7 col-md-offset-2">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="text-right">
<button type="submit" class="btn btn-info btn-sm" onclick="self.history.back()">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>     Kembali</button>
</div>
<strong>Detail Konsumen</strong>                                         
</div>

<table class="table table-striped">
	<tr>
		<th>Nama</th>
		<td>{{ $konsumen->nama }}</td>
	</tr>
		<tr>
		<th>Alamat</th>
		<td>{{ $konsumen->alamat }}</td>
	</tr>
		<tr>
		<th>Tanggal Lahir</th>
		<td>{{ $konsumen->tgl_lahir }}</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>{{ $konsumen->email }}</td>
	</tr>
	<tr>
		<th>Telp</th>
		<td>{{ $konsumen->telp }}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
@endsection

