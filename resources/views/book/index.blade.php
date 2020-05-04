@extends('layouts.app')

@section('content')
	<h1 class="text-center text-capitalize">latest books added</h1>
	<hr>
	<div class="card-deck">
		@forelse ($books as $book)
			<div class="col col-4 py-4">
				<div class="card rounded-pill">
					<div class="card-header">
						<h3 class="text-dark text-center text-capitalize">{{ $book->title }}</h3>
					</div>
					<div class="card-body">
						<p>Definition: {{$book->definition?:"Not definition provided"}}</p>
						<p>by: <a href="{{ route('user.show', $book->users->first()) }}">{{$book->users->first()->username}}</a></p>
					</div>
					<div class="card-footer">
						<a class="btn btn-primary btn-block" href="{{ route('book.show', $book) }}">Go to</a>
					</div>
				</div>	
			</div>
			
		@empty
			<li><p>No hay registros</p></li>
		@endforelse
	</div>
	<hr>
	<div class="btn-group btn-block">
		<div class="container-fluid row justify-content-end">
			{{$books->links()}}		
		</div>
	</div>
@endsection