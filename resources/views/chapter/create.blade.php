@extends('layouts.app')
@section('title',  'Create a new chapter')

@section('content')
	<div class="row justify-content-center">
		<h1 class="col col-auto">Create a new chapter of '{{$book->title}}'</h1>
		<form class="col col-12" method="POST" action="{{ route('chapter.store', $book) }}">
			@csrf
			@include('chapter._form')
		</form>
	</div>
@endsection