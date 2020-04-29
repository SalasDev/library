@extends('layouts.app')


@section('title', $user->username."'s profile")

@section('content')
	<div class="container col-9">
		<div class="card text-center border-light mb-3">
			<div class="card-header">
				<h1 class="card-title center">{{$user->username}}'s Profile</h1>	
			</div>
			<div class="card-body">
				<strong class="card-text">contact: {{$user->email}}</strong>
				<p class="card-tex">{{$user->created_at->diffForHumans()}}</p>	
				@can('edit', $user)
					<a class="btn btn-primary card-button" href="{{ route('user.edit', $user) }}">Edit profile</a>
				@endcan	
			</div>
		</div>
	</div>
	<h3 class="text-info text-center">Books</h3>
	<hr>
	<div class="card-deck">
		@forelse ($user->books as $book)
			<div class="col col-4 py-4">
				<div class="card">
					<div class="card-header">
						<h6>{{ $book->title }}</h6>
					</div>
					<div class="card-body">
						<p>Definition: {{$book->definition?:"Not definition provided"}}</p>
					</div>
					<div class="card-footer">
						<a class="btn btn-primary btn-block" href="{{ route('book.show', $book) }}">Go to</a>
					</div>
				</div>	
			</div>
			
		@empty
			<h3 class="text-warning">No hay registros</h3>
		@endforelse
	</div>
@endsection