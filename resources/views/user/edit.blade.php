@extends('layouts.app')
@section('title',  $user->username.' profile edit')

@section('content')
	<h1 class="row justify-content-sm-center">{{$user->username}}'s profile edit</h1>
	<form method="POST" action="{{ route('user.update', $user) }}">
		@csrf
		@method('PUT')
		<div class="row justify-content-sm-center">
			<div class="col-md-auto">
				<label>Username</label>	
			</div>
			<div class="col-md-auto">
				<input type="text" name="username" value="{{old('username', $user->username)}}">
			</div>
			@if ($errors->has('username'))
				<strong>{{$errors->first('username')}}</strong><br>
			@endif	
		</div>
		<div class="row justify-content-sm-center">
			<div class="col-md-auto">
				<label>Email</label>
			</div>
			<div class="col-md-auto">
				<input type="email" name="email" value="{{old('email', $user->email)}}">
			</div>
			@if ($errors->has('email'))
				<strong>{{$errors->first('email')}}</strong><br>
			@endif	
		</div>
		<div class="row">
			<button class="primary" type="submit">Update</button>		
		</div>
	</form>

	
@endsection