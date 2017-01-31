@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 50px;">
	<div class="row">
		
		
		<div class="col-md-12">
			<h4>User CMS</h4>
			<div class="table-responsive">
				
				<table id="mytable" class="table table-bordred table-striped">
					
					<thead>
						
						<th><input type="checkbox" id="checkall" /></th>
						<th>Name</th>
						<th>Address</th>
						<th>Birthday</th>
						<th>Edit</th>
						<th>Delete</th>
					</thead>
					<tbody>
						
						@foreach($users as $user)
						<tr>
							<td><input type="checkbox" class="checkthis" /></td>
							<td>{!! $user->name !!}</td>
							<td>{!! $user->address !!}</td>
							<td>{!! $user->birthday !!}</td>
							<td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-xs" ><span class="fa fa-pencil"></span></a></td>
							<td>
								<form method="POST" action="{{ route('user.destroy', $user->id) }}">
									{{ csrf_field()}}
									{{ method_field('DELETE') }}
									<button class="btn btn-danger btn-xs" ><span class="fa fa-trash"></span></button>
								</form>
							</td>
						</tr>
						@endforeach
						
					</tbody>
					
				</table>
				<a href="{{ route('user.create') }}" type="button" class="btn btn-primary">Add New User</a>
				<div class="clearfix"></div>
				<ul class="pagination pull-right">
					{{ $users->links() }}
				</ul>
				
			</div>
			
		</div>
	</div>
</div>
@endsection