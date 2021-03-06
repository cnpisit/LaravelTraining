@extends('layout.main')
@section('content')
<section class="content-header">
	<h1>
		Sample
		<small>Sample page</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Sample</a></li>
		<li class="active">form</li>
	</ol>
</section>

<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-lg-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Quick Example</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" id="exampleInputFile">
							
							<p class="help-block">Example block-level help text here.</p>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Check me out
							</label>
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
