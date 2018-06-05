@extends('layouts.app');

@section('title', 'Services')

@section('content')
    <div class="row">
        <div class="col">
            <a href="/service/create">
                <button type="button" class="btn btn-primary">New Service</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @foreach($services as $service)
                <div class="row">
                    <div class="col">
                        {{ $service->name }}
                    </div>
                    <div class="col">
                        {{ $service->price }}
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a href="/service/{{ $service->id }}">
                                    <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>
                                </a>
                            </div>
                            <div class="col">
                                <form action="/service/{{ $service->id }}" method="post" class="form-inline">
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