@extends('layout.main')
@section('content')
<section class="content-header">
	<h1>
		BookCustom
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Book</a></li>
		<li class="active">Index</li>
	</ol>
</section>

<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<form action="{{url('/book-custom')}}" method="get">
					{{--{{csrf_field()}}--}}
					<div class="box-header with-border">
						<div class="box-title">
							Search
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="">Title</label>
									<input
											type="text"
											name="title"
											class="form-control"
											value="{{isset($input)?$input['title']:''}}" >
								</div>
								<div class="form-group">
									<label for="">Date</label>
									<input
											type="text"
											name="date"
											id="datepicker"
											class="form-control"
											value="{{isset($input)?$input['date']:''}}" >
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="">Author</label>
									
									<select type="text"
											name="author"
											class="form-control"
											value="">
										<option value="0">All.....</option>
										@if(isset($authors))
											@foreach($authors as $author)
												<option
														value="{{$author->id}}"
														{{isset($input)&&$input['author']==$author->id?'selected':''}}>
													{{$author->name}}
												</option>
											@endforeach
										@endif
									</select>
								</div>
								<div class="form-group">
									<label for="">Publisher</label>
									<select type="text"
											name="publisher"
											class="form-control"
											value="">
										<option value="0">All.....</option>
										@if(isset($publishers))
											@foreach($publishers as $publisher)
												<option
														value="{{$publisher->id}}"
														{{isset($input)&&$input['publisher']==$publisher->id?'selected':''}}>
													{{$publisher->name}}
												</option>
											@endforeach
										@endif
									</select>
								</div>
							</div>
						</div>
						
						
					</div>
					<div class="box-footer">
						<button type="submit" class="pull-right btn btn-info">
							<i class="fa fa-search"></i> Search
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Bordered Table</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered" id="book-list">
						<thead>
						<tr>
							<th>Title</th>
							<th>Generation</th>
							<th >Publisher</th>
							<th>Author</th>
							<th >Publish Date</th>
							<th>File</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						@if(isset($books))
							@foreach($books as $book)
								<tr>
									<td>{{$book->title}}</td>
									<td>{{$book->generation}}</td>
									<td>{{($book->publisher!=null)?$book->publisher->name:''}}</td>
									<td>{{($book->author!=null)?$book->author->name:''}}</td>
									<td>{{$book->publish_date}}</td>
									<td>
										@if($book->book!=null)
											<a href="{{asset('storage/'.$book->book)}}">
												<i class="fa fa-file"></i>
											</a>
										@endif
									</td>
									<td>
										<a href="{{url('/book-custom/form/'.$book->id)}}" class="btn btn-xs btn-info">Edit</a>
										<a href="{{url('/book-custom/delete/'.$book->id)}}" class="btn btn-xs btn-danger">Delete</a>
									</td>
								</tr>
							@endforeach
						@endif
						</tbody>
						
					</table>
				</div>
				<!-- /.box-body -->
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
	<script>
		$(document).ready(function () {
			$('#book-list').DataTable()
		})
	</script>
@endpush