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
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Graph</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
				</div>
				<!-- /.box-body -->
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
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>
	<script>
		$(document).ready(function () {
			$('#book-list').DataTable()
		})
		var data = [];
		@if(isset($publishers))
			@foreach($publishers as $publisher)
				data.push({
					"name": "{{$publisher->name}}",
					"y": parseInt("{{count($publisher->books)}}"),
				})
			@endforeach
		@endif
		
		// Create the chart

		// Create the chart
		Highcharts.chart('container', {
			chart: {
				type: 'column'
			},
			title: {
				text: ''
			},
			
			xAxis: {
				type: 'category'
			},
			yAxis: {
				title: {
					text: ''
				}
			},
			legend: {
				enabled: false
			},
			plotOptions: {
				series: {
					borderWidth: 0,
					dataLabels: {
						enabled: true,
						format: '{point.y}'
					}
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{point.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},

			"series": [
				{
					"name": "Browsers",
					"colorByPoint": true,
					"data": data
				}
			]
		});
	</script>
@endpush