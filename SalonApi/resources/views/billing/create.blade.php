@extends('layouts.app');

@section('title', 'New billing')

@section('content')
    <div class="row">
        <div class="col">

            <form action="/billing" method="post">
                {{--@method('POST')--}}
                <div class="form-group">
                    <label for="customer">Customer</label>
                    <select name="customer" id="customer" class="form-control">
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="employee">Employee</label>
                    <select name="employee" id="employee" class="form-control">
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @foreach($services as $service)
                        <input
                                class="billing-service"
                                type="checkbox"
                                name="services[]"
                                id="service{{ $service->id }}"
                                data-price="{{ $service->price }}"
                                value="{{ $service->id }}">
                        <label for="service{{ $service->id }}">{{ $service->name }}</label>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="discount">Discount %</label>
                    <input type="number" name="discount_rate" id="discount" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        <strong>Sub Total: Rs. <span class="total-amount"></span></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <strong>Discount: Rs. <span class="discount-amount"></span></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <strong>Amount Payable: Rs. <span class="total-paid"></span></strong>
                    </div>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">Submit</button>

                <input type="hidden" name="total_amount" value="" class="total-amount--hidden">
                <input type="hidden" name="discount_amount" value="" class="discount-amount--hidden">
                <input type="hidden" name="total_paid" value="" class="total-paid--hidden">
                {{ csrf_field() }}
            </form>

        </div>
    </div>

@endsection