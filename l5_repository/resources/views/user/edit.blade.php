
@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" /><link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
@endsection
@section('content')
<header class="m-md text-center">
	<h2>Edit User</h2>
</header>

<div class="row">
	<div class="col-lg-12">
		<section class="panel">

			<div class="panel-body">

					<form class="form-horizontal form-bordered" enctype="multipart/form-data" action="{{url('/user/update/'.$user->id)}}" method="post">
					{{ csrf_field() }}

					


					<div class="form-group">
						<label class="col-md-2 control-label">name *</label>
						<div class="col-md-10">
							<input type="text" name="name" required class="form-control" value="{{$user->name}}">
						</div>
					</div>

					<div class="col-md-10">
						<label class="col-md-2 control-label">email *</label>

						<input type="text" name="email" required class="form-control" value="{{$user->email}}">
					</div>
				</div>

                <div class="col-md-10">
					<label class="col-md-2 control-label">password*</label>
                    <input type="text" name="password" required class="form-control" value="{{$user->password}}">
                </div>
            </div>


					<p class="m-md text-center">
						<button type="submit" class="mb-xs mt-xs mr-xs btn btn-sm btn-block btn-primary">edit  <i class="fa fa-save"></i></button>
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
