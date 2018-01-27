@extends('layout.main')
@section('content')
<section class="content-header">
	<h1>
		Publisher
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Publisher</a></li>
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
							<th>Publisher Name</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						@if(isset($publishers))
							@foreach($publishers as $publisher)
								<tr>
									<td>{{$publisher->id}}</td>
									<td>{{$publisher->name}}</td>
									<td>{{$publisher->address}}</td>
									<td>
										<a href="{{url('/publisher/form/'.$publisher->id)}}" class="btn btn-xs btn-info">Edit</a>
										<a href="{{url('/publisher/delete/'.$publisher->id)}}" class="btn btn-xs btn-danger">Delete</a>
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
	</script>
@endpush