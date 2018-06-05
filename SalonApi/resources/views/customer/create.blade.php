@extends('layouts.app');

@section('title', 'New Customer')

@section('content')
    <div class="row">
        <div class="col">

            <form action="/customer" method="post">
                {{--@method('POST')--}}
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Full Name">
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="email">Email</label>--}}
                    {{--<input type="email" class="form-control" name="email" id="email" placeholder="Email">--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="gender">Email</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="male" selected="selected">Male</option>
                        <option value="female">Female</option>
                    </select>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
            
        </div>
    </div>

@endsection