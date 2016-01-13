@extends("GunawandyTemplate::one-column")
@section('content')
<br>
</br>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-danger">
				<div class="panel-heading"><strong>SORRY!</strong></div>

				<div class="panel-body">
				Wrong combination of username & password <br>
				<a href="/auth/login" class="alert-link">Try again</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection