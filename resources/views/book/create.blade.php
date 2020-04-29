@extends('layouts.app')

@section('title', 'Create a new book')

@section('content')
	<div class="container col-6 py-5">
		<h1 class="col col-12 text-center">Books Registration</h1>
		<form method="POST" action="{{ route('book.store') }}">
			@csrf
			@include('book._form')
		</form>
	</div>
@endsection