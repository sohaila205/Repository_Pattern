
@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" /><link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
@endsection
@section('content')
<header class="m-md text-center">
	<h2>Add User</h2>
</header>

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		
			<div class="panel-body">

					<form class="form-horizontal form-bordered" enctype="multipart/form-data" action="{{url('/user/store')}}" method="post">
					{{ csrf_field() }}
					<label class="col-md-2 control-label">name *</label>
						<div class="col-md-10">
							<input type="text" required name="name" class="form-control">
						</div>

						<label class="col-md-2 control-label">email *</label>
						<div class="col-md-10">
							<input type="text" required name="email" class="form-control">
						</div>
						
						<label class="col-md-2 control-label">password *</label>
						<div class="col-md-10">
							<input type="text" required name="password" class="form-control">
						</div>

					<p class="m-md text-center">
						<button type="submit" class="mb-xs mt-xs mr-xs btn btn-sm btn-block btn-primary">submit  <i class="fa fa-save"></i></button>
					</p>
				</form>
			</div>
		</section>
	</div>
</div>


@endsection
@section('scripts')
<script src="{{asset('assets/vendor/jquery-autosize/jquery.autosize.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
<script src="{{asset('assets/vendor/select2/select2.js')}}"></script>

@endsection
