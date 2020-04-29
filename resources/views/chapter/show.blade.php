@extends('layouts.app')

@section('title', $chapter->title)

@section('content')
	<div class="row justify-content-center my-5">
		<h1>{{$chapter->title}} #{{$chapter->chapter_num}}</h1>
	</div>
	<div class="container col col-lg text-break" style="font-size:160%;">
		<p class="text-justify">{!!$chapter->content!!}</p>
	</div>
	<div class="row justify-content-end my-5">
		<div class="btn-group">
			<a class="btn btn-primary" href="{{ route('book.show', $book) }}">Go back</a>
		</div>	
	</div>
	<hr>
	<div class="row">
		<h4 class="font-weight-bold">Comments</h4>

	</div>
	
@endsection