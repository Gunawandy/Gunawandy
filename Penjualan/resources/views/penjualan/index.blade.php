@extends("GunawandyTemplate::one-column")
@section("content")
<br>

<div class="container">
<div class="col-md-12">
<h2>Daftar Penjualan</h2>
<br>
<a href="/penjualan/create">
<button class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span></button></a>
<br>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Konsumen</th>
		<th>Isp</th>
		<th>Status</th>
		<th>Action</th>
	</thead>
	@foreach($penjualan as $index=>$penjualan)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $penjualan->konsumen->nama }}</th>
		<th>{{ $penjualan->isp->nama}}</th>
		<th>{{ $penjualan->status }}</th>
		<th>
			<a href="{{ url("/penjualan/$penjualan->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop