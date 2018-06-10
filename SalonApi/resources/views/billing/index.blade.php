@extends( 'layouts.app' );


@section( 'title', 'billings' )



@section( 'content' )

    <div class="row">
        <div class="col b-pad-15 container-fluid">
            <a href="/billing/create">
                <button type="button" class="btn btn-primary">New Billing</button>

            </a>
        </div>
    </div>
    <div class="row white-box">
        <h2 class="box-title1 container-fluid">Billings</h2>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Employee</th>
                <th>Service</th>
                {{--<th>Edit</th>--}}
                {{--<th>Delete</th>--}}
            </tr>
            </thead>
            <tbody>

            @foreach($billings as $billing)
                <tr>
                    <td scope="row">1</td>
                    <td>
                        <div class="col"> {{ $billing->customer->full_name }}</div>
                    </td>
                    <td>
                        <div class="col">{{ $billing->employee->full_name }} </div>
                    </td>
                    <td>
                        @foreach($billing->services as $service)
                            <div class="col">{{ $service->name }}</div>
                        @endforeach
                    </td>

                    {{--<td>--}}
                        {{--<div class="col">--}}
                            {{--<a href="/billing/{{ $billing->id }}/edit">--}}
                                {{--<button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<div class="col">--}}
                            {{--<form action="/billing/{{ $billing->id }}" method="post" class="form-inline">--}}
                                {{--@method('DELETE')--}}
                                {{--<button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i>--}}
                                {{--</button> {{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</td>--}}

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection