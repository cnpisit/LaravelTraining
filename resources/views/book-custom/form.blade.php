@extends('layout.main')
@section('content')
	<section class="content-header">
		<h1>
			BookCustom
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Book</a></li>
			<li class="active">Form</li>
		</ol>
	</section>
	
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-lg-offset-3">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Book Form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" method="post" action="{{url('/book-custom/save')}}" enctype="multipart/form-data">
						
						{{csrf_field()}}
						@if(isset($model))
							<input type="hidden" name="id" value="{{$model->id}}">
						@endif
						<div class="box-body">
							<div class="form-group">
								<label for="">Title</label>
								<input
										type="text"
										name="input[title]"
										class="form-control"
										required
										value="{{isset($model)?$model->title:''}}" >
							</div>
							<div class="form-group">
								<label for="">Generation</label>
								<input
										type="text"
										name="input[generation]"
										class="form-control"
										value="{{isset($model)?$model->generation:''}}">
							</div>
							<div class="form-group">
								<label for="">File</label>
								<input class="form-control" type="file" name="book">
							</div>
							<div class="form-group">
								<label for="">Publisher</label>
								<select
										name="input[publisher_id]"
										required
										class="form-control select2">
									@if(isset($publishers))
										@foreach($publishers as $publisher)
											<option
													value="{{$publisher->id}}"
													{{isset($model)&&$model->publisher_id==$publisher->id?'selected':''}}>
												{{$publisher->name}}
											</option>
										@endforeach
									@endif
								</select>
							</div>
							<div class="form-group">
								<label for="">Author</label>
								<select
										name="input[author_id]"
										required
										class="form-control select2">
									@if(isset($authors))
										@foreach($authors as $author)
											<option
													value="{{$author->id}}"
													{{isset($model)&&$model->author_id==$author->id?'selected':''}}>
												{{$author->name}}
											</option>
										@endforeach
									@endif
								</select>
							</div>
							<div class="form-group">
								<label for="">Publish Date</label>
								<input
										type="text"
										id="datepicker"
										name="input[publish_date]"
										value="{{isset($model)?$model->publish_date:''}}"
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
	</script>
@endpush
