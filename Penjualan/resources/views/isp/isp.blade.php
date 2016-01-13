@extends("GunawandyTemplate::one-column")
@section("content")
<br>
<div class="text-center">
<h2>Daftar ISP</h2>
</div>

<div class="container">
<div class="col-md-12">
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama ISP</th>
		<th>Kuota</th>
		<th>Operator</th>
		<th>Kadaluarsa</th>
		<th>Retailer</th>
		<th>Harga</th>
	</thead>
	@foreach($isp as $index=> $isp)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $isp->nama }}</th>
		<th>{{ $isp->kuota }}</th>
		<th>{{ $isp->operator }}</th>
		<th>{{ $isp->kadaluarsa }}</th>
		<th>{{ $isp->retailer }}</th>
		<th>{{ $isp->harga }}</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop