@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<form action="{{ route('user.update', $user->id) }}" method="POST" role="form">
			{{csrf_field()}}
			{{ method_field('PATCH') }}
			<legend>Edit User</legend>
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Input field" value="{!! $user->name !!}">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" name="address" placeholder="Input field" value="{!! $user->address !!}">
			</div>

			<div class="form-group">
				<label for="">Birthday</label>
				<input type="date" class="form-control" name="birthday" placeholder="Input field" value="{!! $user->birthday !!}">
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

@endsection