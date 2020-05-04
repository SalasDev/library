@extends('layouts.app')

@section('title', $book->title)

@section('content')
	<div class="container col-9">
		<div class="row justify-content-center">
			<div class="card-header col-12">
				<h1 class="text-capitalize text-center text-dark">{{ $book->title }}</h1>			
			</div>
			<div class="card-body">
				<p class="card-text text-secondary">Definition: {{$book->definition?:'Not definition provided'}}</p>
				<p>By: <a href="{{ route('user.show', $book->users->first()) }}">{{ $book->users->first()->username }}</a></p>
				@can('edit', $book)
					<div class="btn-group btn-block btn-sm" role="group">
						<a class="btn btn-secondary" role="btn" href="{{ route('chapter.create', $book) }}">Add chapter</a>
						<a class="btn btn-primary" role="btn" href="{{ route('book.edit', $book) }}">Edit book</a>
						<a href="#" class="btn btn-danger" onclick="document.getElementById('delete_book').submit()">Delete</a>
						<form id="delete_book" method="POST" action="{{ route('book.destroy', $book) }}">
							@csrf
							@method('DELETE')
						</form>	
					</div>
				@endcan	
			</div>
			
			<div class="card-footer text-muted col-12">
				<p class="text-center text-info">At: {{ $book->created_at->diffForHumans()}}</p>
			</div>
		</div>
		
	</div>
	
	<div class="content py-4">
		<h2 class="text-info text-center">Chapters</h2>
		<hr>
		<div class="col justify-content-center">
			<ul class="list-group col">
				@forelse ($chapters as $chapter)
					<li class="list-group-item bg-dark">
						<div class="row align-content-center">
							<div class="col col-sm-4 align-content-center">
								<a 
									class="font-weight-bold text-capitalize" 
									href="{{ route('chapter.show', ['book' => $book, 'chapter' => $chapter]) }}"
								>
									#{{$chapter->chapter_num}} {{$chapter->title}}
								</a>	
							</div>
							<div class="col col-sm-4 align-content-center">
								<p class="text-sm text-light">{{$chapter->created_at->diffForHumans()}}</p>
							</div>
							<div class="col col-sm-4 justify-content-end align-content-center btn-group btn-group-sm">
								<a class="btn btn-primary" href="{{ route('chapter.edit', ['book' => $book, 'chapter' => $chapter]) }}">Edit</a>
								<a class="btn btn-danger" href="#" onclick="document.getElementById('delete_chapter').submit()">Delete</a>
								<form 
									id="delete_chapter" 
									class="flex-row"
									method="POST" 
									action="{{ route('chapter.destroy', ['book' => $book, 'chapter' => $chapter]) }}"
								>
									@csrf
									@method('DELETE')
								</form>	
							</div>
						</div>
					</li>
				@empty
					<li class="list-group-item alert-warning">No chapters yet</li>
				@endforelse
			</ul>	
		</div>
	</div>
@endsection