<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class=" treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Sample</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('/sample/index')}}"><i class="fa fa-circle-o"></i> List</a></li>
					<li><a href="{{url('/sample/form')}}"><i class="fa fa-circle-o"></i> Add</a></li>
				</ul>
			</li>
			<li class=" treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Book Resource</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('/book')}}"><i class="fa fa-circle-o"></i> List</a></li>
					<li><a href="{{url('/book/create')}}"><i class="fa fa-circle-o"></i> Add</a></li>
				</ul>
			</li>
			<li class=" treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Book Custom</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('/book-custom')}}"><i class="fa fa-circle-o"></i> List</a></li>
					<li><a href="{{url('/book-custom/form')}}"><i class="fa fa-circle-o"></i> Add</a></li>
				</ul>
			</li>
			<li class=" treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Author</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('/author')}}"><i class="fa fa-circle-o"></i> List</a></li>
					<li><a href="{{url('/author/form')}}"><i class="fa fa-circle-o"></i> Add</a></li>
				</ul>
			</li>
			<li class=" treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Publisher</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{url('/publisher')}}"><i class="fa fa-circle-o"></i> List</a></li>
					<li><a href="{{url('/publisher/form')}}"><i class="fa fa-circle-o"></i> Add</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>