@extends('layout.main')
@section('content')
<section class="content-header">
	<h1>
		Sample
		<small>Sample page</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Sample</a></li>
		<li class="active">view</li>
	</ol>
</section>

<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-12">
			id = {{isset($id)?$id:''}}<br>
			name = {{isset($dname)?$dname:''}}
		</div>
	</div>
	<!-- /.row -->

</section>
@endsection
