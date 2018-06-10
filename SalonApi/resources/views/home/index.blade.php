@extends('layouts.app');



@section('title', 'Home')



@section('content')



<div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box bg-danger white_text">
            <h3 class="box-title">NEW CUSTOMER</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-people text-info"></i></li>
                <li class="text-right"><span class="counter">23</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box bg-info white_text">
            <h3 class="box-title">TOTAL SERVICES</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-folder text-purple"></i></li>
                <li class="text-right"><span class="counter">169</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box bg-purple white_text">
            <h3 class="box-title">SERVICE PENDING</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-folder-alt text-danger"></i></li>
                <li class="text-right"><span class="counter">311</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box bg-inverse white_text">
            <h3 class="box-title">TOTAL Invoices</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-layers text-success"></i></li>
                <li class="text-right"><span class="counter">117</span></li>
            </ul>
        </div>
    </div>
</div>



@endsection