@extends('layouts.app')
@section('title',  'Edit a chapter')

@section('content')
	<div class="row justify-content-center">
		<h1 class="col col-auto">Edit chapter '{{$chapter->title}}'</h1>
		<form class="col col-12" method="POST" action="{{ route('chapter.update', ['book' => $book, 'chapter' => $chapter]) }}">
			@csrf
			@method('PUT')
			@include('chapter._form')
		</form>
	</div>
@endsection