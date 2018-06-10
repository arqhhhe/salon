@extends( 'layouts.app' );



@section( 'title', 'employees' )



@section( 'content' )

<div class="row">
	<div class="col b-pad-15 container-fluid">
		<a href="/employee/create">
                <button type="button" class="btn btn-primary">New Employee</button>

            </a>
	</div>
</div>
<div class="row white-box">
	<h2 class="box-title1 container-fluid">EmployeeS</h2>
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
		<thead class="thead-dark">
			<tr>
				<th>#</th>
				<th>First</th>
				<th>Phone</th>
				<th>Gander</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>

			@foreach($employees as $employee)
			<tr>
				<td scope="row">1</td>
				<td>
					<div class="col"> {{ $employee->full_name }}</div>
				</td>
				<td>
					<div class="col">{{ $employee->phone }} </div>
				</td>
				<td>
					<div class="col">{{ $employee->gender }}</div>
				</td>
				<td>
					<div class="col">
						<a href="/employee/{{ $employee->id }}/edit">
                          <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>
                         </a>					
					</div>
				</td>
				<td>
					<div class="col">
						<form action="/employee/{{ $employee->id }}" method="post" class="form-inline">
							@method('DELETE')
							<button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button> {{ csrf_field() }}
						</form>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection