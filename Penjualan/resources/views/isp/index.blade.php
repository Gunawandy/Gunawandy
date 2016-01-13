@extends("GunawandyTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Daftar ISP</h2>
</div>
<br>
<div class="container">
<div class="col-md-12">

<br>
<a href="/isp/create">
<button class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus" aria-hidden="true">Tambah</span></button></a>
<br>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>ID</th>
		<th>Nama ISP</th>
		<th>Kuota</th>
		<th>Operator</th>
		<th>Kadaluarsa</th>
		<th>Retailer</th>
		<th>Harga</th>
		<th>Action</th>

	</thead>
	@foreach($isp as $index=>$isp)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $isp->nama }}</th>
		<th>{{ $isp->kuota }}</th>
		<th>{{ $isp->operator }}</th>
		<th>{{ $isp->kadaluarsa }}</th>
		<th>{{ $isp->retailer }}</th>
		<th>{{ $isp->harga }}</th>
		<th>
			
			<a href="{{ url("/isp/$isp->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>	
			<a href="{{ url("/isp/$isp->id/delete")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop