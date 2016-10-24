@extends('layouts/app')
@section('subview')
	<div class="col-md-offset-1 col-md-3">
        @include('includes.sidebar')
    </div>
    <div class="col-md-7">
        @yield('content')
    </div>
@stop