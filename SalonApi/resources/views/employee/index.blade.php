@extends('layouts.app');

@section('title', 'employees')

@section('content')
    <div class="row">
        <div class="col">
            <a href="/employee/create">
                <button type="button" class="btn btn-primary">New Employee</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @foreach($employees as $employee)
                <div class="row">
                    <div class="col">
                        {{ $employee->full_name }}
                    </div>
                    <div class="col">
                        {{ $employee->phone }}
                    </div>
                    <div class="col">
                        {{ $employee->gender }}
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a href="/employee/{{ $employee->id }}/edit">
                                    <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>
                                </a>
                            </div>
                            <div class="col">
                                <form action="/employee/{{ $employee->id }}" method="post" class="form-inline">
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