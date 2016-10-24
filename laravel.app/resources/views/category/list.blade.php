@extends('category.layout')
@section('content')
	<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Action</td>
		</tr>
		@foreach($category_list as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td><strong>{{$category->name}}</strong></td>
			<td>
				<a class="btn btn-info" href="{{url('category/edit/')}}/{{$category->id}}" role="button">Edit</a>
				<a class="btn btn-danger" href="#" role="button">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
@stop