<div class="form-group">
	<div class="row my-4">
		<div class="col col-4 form-row">
			<label class="col col-sm-6 text-lg-right" for="chapter_num">Chapter#</label>
			<input 
				type="number" 
				step=0.01 
				name="chapter_num" 
				id="chapter_num" 
				class="form-control col-sm-6"
				value="{{old('chapter_num', $chapter->chapter_num)}}"
			>
			@if ($errors->first('chapter_num'))
				<div class="col justify-content-center">
					<p class="alert alert-danger text-center">{{$errors->first('chapter_num')}}</p>
				</div>
			@endif
		</div>
		<div class="col col-8 form-row">
			<label class="col col-sm-3 text-lg-right" for="title">Chapter title</label>
			<input 
				type="text" 
				name="title" 
				id="title" 
				class="form-control col-sm-9"
				value="{{old('title', $chapter->title)}}"
			>
			@if ($errors->first('title'))
				<div class="col justify-content-center">
					<p class="alert alert-danger text-center">{{$errors->first('title')}}</p>
				</div>
			@endif
		</div>
	</div>
	<div class="row my-4">
		<label class="col col-sm-2 text-lg-right" for="content">Chapter content</label>
		<textarea 
			rows=30 
			type="text" 
			name="content" 
			id="content" 
			class="form-control col-sm-10"
		>{{old('content', $chapter->content)}}</textarea>
		@if ($errors->first('content'))
			<div class="col justify-content-center">
				<p class="alert alert-danger text-center">{{$errors->first('content')}}</p>
			</div>
		@endif
	</div>
	<div class="row my-4 justify-content-end">
		<button class="btn btn-primary col-sm-4" type="submit">Register</button>
	</div>
</div>