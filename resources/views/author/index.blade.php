@extends('layout.main')
@section('content')
	<section class="content-header">
		<h1>
			Author
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Author</a></li>
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
						<table class="table table-bordered" id="book-list">
							<thead>
							<tr>
								<th>Id</th>
								<th>Author Name</th>
								<th>Gender</th>
								<th>Date Of Birth</th>
								<th>Books</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							@if(isset($authors))
								@foreach($authors as $author)
									<tr>
										<td>{{$author->id}}</td>
										<td>{{$author->name}}</td>
										<td>{{$author->gender}}</td>
										<td>{{$author->dob}}</td>
										<td>
											<a href="{{url('/author/book/'.$author->id)}}">
												{{count($author->books)}}
											</a>
										</td>
										<td>
											<a href="{{url('/author/form/'.$author->id)}}" class="btn btn-xs btn-info">Edit</a>
											<button
													onclick="deleteConfirm('{{url('/author/delete/'.$author->id)}}')"
													class="btn btn-xs btn-danger">Delete
											</button>
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
		$(document).ready(function () {
			$('#book-list').DataTable()
		})
		@if(session('success'))
		$.notify({
// options
			title: 'Success',
			icon: 'glyphicon glyphicon-floppy-saved',
			message: '{{session('success')}}'
		}, {
// settings
			type: 'success'
		});
				@endif

		var deleteConfirm = function (url) {
				swal({
					title: "Are you sure?",
					text: "Once deleted, you will not be able to recover this Author",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				}).then(function(willDelete) {
					if(willDelete) {
						$.get(url, function (response) {
							console.log(response)
							if (response){
								swal("Author has been deleted!", {
									icon: "success",
								}).then(function () {
									window.location.reload()
								});
								
							} else {
								swal("Author has not been deleted!", {
									icon: "error",
								});
							}
							
						})
						
					}
				});
			}
	</script>
@endpush