<?php 
$path = (parse_url(url()->current()))['path'];

?>

<ul class="nav nav-pills nav-stacked panel panel-default sidebar">
	<li role="presentation">
		<a href="#"><strong>Category</strong></a>
		<ul class="nav nav-pills nav-stacked fa-ul">
			<li
				@if($path == '/category/add')
					class="active"
				@endif
			><a href="#"><i class="fa-li fa fa-caret-right"></i>Add</a></li>
			<li 
				@if($path == '/category/list')
					class="active"
				@endif
><a href="{{route('cat_list')}}"><i class="fa-li fa fa-caret-right"></i>List</a></li>
		</ul>
	</li>
	<li role="presentation">
		<a href="#"><strong>Product</strong></a>
		<ul class="nav nav-pills nav-stacked">
			<li
				@if($path == '/product/add')
					class="active"
				@endif
			><a href="#"><i class="fa-li fa fa-caret-right"></i>Add</a></li>
			<li
				@if($path == '/product/list')
					class="active"
				@endif
			><a href="#"><i class="fa-li fa fa-caret-right"></i>List</a></li>
		</ul>
	</li>
</ul>
