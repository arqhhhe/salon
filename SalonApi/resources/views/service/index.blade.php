@extends( 'layouts.app' );



@section( 'title', 'Services' )



@section( 'content' )

<div class="row">
	<div class="col b-pad-15 container-fluid">

		<a href="/service/create">

                <button type="button" class="btn btn-primary">New Service</button>

            </a>

	

	</div>

</div>



<div class="row white-box">
	<h2 class="box-title1 container-fluid">Services</h2>

	<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
		<thead class="thead-dark">
			<tr>
				<th>#</th>
				<th>First</th>
				<th>price</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($services as $service)
			<tr>
				<td scope="row">1</td>
				<td>
					<div class="col">{{ $service->name }} </div>
				</td>
				<td>
					<div class="col"> {{ $service->price }}</div>
				</td>
				<td>
					<div class="col"> <a href="/service/{{ $service->id }}/edit">

                                    <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>

                                </a>

						</div>
				</td>
				<td>
					<div class="col">
						<form action="/service/{{ $service->id }}" method="post" class="form-inline">

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