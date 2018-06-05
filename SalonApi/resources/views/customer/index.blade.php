@extends('layouts.app');

@section('title', 'Customers')

@section('content')
    <div class="row">
        <div class="col">
            <a href="/customer/create">
                <button type="button" class="btn btn-primary">New Customer</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @foreach($customers as $customer)
                <div class="row">
                    <div class="col">
                        {{ $customer->full_name }}
                    </div>
                    <div class="col">
                        {{ $customer->phone }}
                    </div>
                    <div class="col">
                        {{ $customer->gender }}
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a href="/customer/{{ $customer->id }}/edit">
                                    <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>
                                </a>
                            </div>
                            <div class="col">
                                <form action="/customer/{{ $customer->id }}" method="post" class="form-inline">
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection