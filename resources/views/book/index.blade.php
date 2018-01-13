@extends('layout.main')
@section('content')
<section class="content-header">
	<h1>
		Book
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
				<div class="box-header with-border">
					<h3 class="box-title">Bordered Table</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tr>
							<th style="width: 10px">#</th>
							<th>Title</th>
							<th>Generation</th>
							<th >Publisher</th>
							<th>Author</th>
							<th >Publish Date</th>
							<th>Action</th>
						</tr>
						@if(isset($books))
							@foreach($books as $book)
								<tr>
									<td>{{$book->id}}</td>
									<td>{{$book->title}}</td>
									<td>{{$book->generation}}</td>
									<td>{{$book->publisher_id}}</td>
									<td>{{$book->author_id}}</td>
									<td>{{$book->publish_date}}</td>
									<td>
										<a href="{{url('/book/'.$book->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>
										<form action="{{url('/book/'.$book->id)}}" method="POST">
											<input type="hidden" name="_method" value="delete">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button type="submit" class="btn btn-sm btn-danger">Delete</button>
										</form>
									</td>
								</tr>
							@endforeach
						@endif
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
	<!-- /.row -->

</section>
@endsection
