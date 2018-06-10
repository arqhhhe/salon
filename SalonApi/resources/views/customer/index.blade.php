@extends( 'layouts.app' );

@section( 'title', 'Customers' )

@section( 'content' )

<div class="row">
	<div class="col b-pad-15 container-fluid">
		<a href="/customer/create">
    	<button type="button" class="btn btn-primary">New Customer</button>
    </a>
	
	</div>
</div>

<div class="row white-box">
	<h2 class="box-title1 container-fluid">Customers</h2>

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

			@foreach($customers as $customer)
			<tr>
				<td scope="row">1</td>
				<td>
					<div class="col"> {{ $customer->full_name }} </div>
				</td>
				<td>
					<div class="col"> {{ $customer->phone }} </div>
				</td>
				<td>
					<div class="col"> {{ $customer->gender }} </div>
				</td>
				<td>
					<div class="col"> <a href="/customer/{{ $customer->id }}/edit">
              <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>
              </a>
						</div>
				</td>
				<td>
					<div class="col">
						<form action="/customer/{{ $customer->id }}" method="post" class="form-inline">
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