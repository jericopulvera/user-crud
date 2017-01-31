@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<form action="{{ route('user.store') }}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Create User</legend>
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" name="address" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Birthday</label>
				<input type="date" class="form-control" name="birthday" placeholder="Input field">
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

@endsection