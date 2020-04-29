
<div class="form-group row">
	<label class="col-sm-2 col-form-label" for="title">Book title</label>
	<input class="form-control col-sm-10" type="text" id="title" name="title" placeholder="book title" value="{{old('title', $book->title)}}"><br>
	@if ($errors->has('title'))
		<p class="alert-danger col-lg">{{$errors->first('title')}}</p>
	@endif	
</div>
<div class="form-group row">
	<label for="description" class="col-sm-2 col-form-label">Description</label>
	<textarea class="form-control col-sm-10" id="definition" name="definition">{{old('Put your definition', $book->definition)}}</textarea>
</div>
<div class="row justify-content-end">
	<button class="btn btn-primary col-10" type="submit">Register</button>
</div>
