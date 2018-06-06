@extends('layouts.app');

@section('title', 'New employee')

@section('content')
    <div class="row">
        <div class="col">

            <form action="/employee/{{ $employee->id }}" method="post">
                @method('PUT')
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                           placeholder="Enter Full Name" value="{{ $employee->full_name }}">
                </div>
                {{--<div class="form-group">--}}
                {{--<label for="email">Email</label>--}}
                {{--<input type="email" class="form-control" name="email" id="email" placeholder="Email">--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                           value="{{ $employee->phone }}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        @if( $employee->gender == 'male')
                            <option value="male" selected="selected">Male</option>
                            <option value="female">Female</option>
                        @else
                            <option value="male">Male</option>
                            <option value="female" selected="selected">Female</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control">{{ $employee->address }}</textarea>
                </div>
                <div class="form-group">
                    @foreach($services as $service)
                        {{--<div> Test {{ $service }}</div>--}}
                        <input type="checkbox" name="services[]" id="service{{ $service->id }}" {{ $service->checked }} value="{{ $service->id }}">
                        <label for="employee{{ $service->id }}">{{ $service->name }}</label>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>

        </div>
    </div>

@endsection