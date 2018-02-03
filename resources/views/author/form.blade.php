@extends('layout.main')
@section('content')
	<section class="content-header">
		<h1>
			Author
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Author</a></li>
			<li class="active">Form</li>
		</ol>
	</section>
	
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-lg-offset-3">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Author Form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" method="post" action="{{url('/author/save')}}">
						
						{{csrf_field()}}
						@if(isset($model))
							<input type="hidden" name="id" value="{{$model->id}}">
						@endif
						<div class="box-body">
							<div class="form-group">
								<label for="">Name</label>
								<input
										type="text"
										name="input[name]"
										class="form-control"
										required
										value="{{isset($model)?$model->name:''}}" >
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input
										type="email"
										name="input[email]"
										class="form-control"
										required
										value="{{isset($model)?$model->email:''}}" >
							</div>
							<div class="form-group">
								<label for="">Gender</label>
								<select
										name="input[gender]"
										required
										class="form-control select2">
									<option
											value="M"
											{{isset($model)&&$model->gender=='M'?'selected':''}}>
										Male
									</option>
									<option
											value="F"
											{{isset($model)&&$model->gender=='F'?'selected':''}}>
										Female
									</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Date of Birth</label>
								<input
										type="text"
										id="datepicker"
										required
										name="input[dob]"
										value="{{isset($model)?$model->dob:''}}"
										class="form-control">
							</div>
						</div>
						<!-- /.box-body -->
						
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row -->
	
	</section>
@endsection
@push('scripts')
	<script>
		$('.select2').select2();
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
		})
		
		@if(session('errors'))
		
				@if (count($errors) > 0)
		var message = '<ul>';
		@foreach ($errors->all() as $error)
			message += '<li>{{ $error }}</li>';
		@endforeach
			message +='</ul>';
		@endif
		$.notify({
// options
			title:'Fail',
			icon:'glyphicon glyphicon-floppy-remove',
			message: message
		},{
// settings
			type: 'danger',
			animate: {
				enter: 'animated fadeInRight',
				exit: 'animated fadeOutRight'
			},
		});
	@endif
	</script>
@endpush
