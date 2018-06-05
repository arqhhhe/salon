@extends('layouts.app');

@section('title', 'Services')

@section('content')
    <div class="row">
        <div class="col">

            <form action="/service/{{ $service->id }}" method="post">
                @method('PUT')
                <div class="form-group">
                    <label for="name">Service Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter service name" value="{{ $service->name }}">
                </div>
                <div class="form-group">
                    <label for="price">Password</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{ $service->price }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
            
        </div>
    </div>

@endsection