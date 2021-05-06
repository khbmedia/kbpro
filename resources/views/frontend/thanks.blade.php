@extends('frontend.layout.app')
    @section('content')
    @include('frontend.include.header_2')
	@section('title','Thanks You')
	@if (session('thank'))
    <div class="alert alert-success">
        {{ session('thank') }}
    </div>
@endif

    @endsection
	
	
	