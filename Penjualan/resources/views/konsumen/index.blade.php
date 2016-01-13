@extends("GunawandyTemplate::one-column")
@section("content")
<br>

<div class="container">
<div class="col-md-12">
<h2>Daftar Member</h2>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Action</th>
		<th>Operation</th>
	</thead>
	@foreach($konsumen as $index=>$konsumen)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $konsumen->nama }}</th>
		<th>{{ $konsumen->alamat }}</th>
		<th>
			<a href="/members/{{ $konsumen->id }}"><button class="btn btn-info btn-sm">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Info</span></button></a>
			<a href="{{ url("/members/$konsumen->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
			<a href="{{ url("/members/$konsumen->id/delete")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span>
			</button></a>	
		</th>
		<th>
			<a href="{{ url("/members/$konsumen->id/jual")}}"><button class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-book" aria-hidden="true"> Penjualan</span></button></a>	
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop