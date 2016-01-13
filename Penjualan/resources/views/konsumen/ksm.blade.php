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
		<th>Operation</th>
	</thead>
	@foreach($konsumen as $index=>$konsumen)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $konsumen->nama }}</th>
		<th>{{ $konsumen->alamat }}</th>
	
		<th>
			<a href="{{ url("/mbr/$konsumen->id/jual")}}"><button class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-book" aria-hidden="true"> Penjualan</span></button></a>	
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop