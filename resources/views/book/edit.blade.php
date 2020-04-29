@extends('layouts.app')

@section('title', 'Editar')

@section('content')
	<div class="container col-6 py-5">
		<h1 class="text-center">Edit {{ $book->title }}</h1>
		<form method="POST" action="{{ route('book.update', $book) }}">
			@csrf
			@method('PUT')
			@include('book._form')
		</form>
	</div>
@endsection