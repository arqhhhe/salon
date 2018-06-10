<?php

namespace App\Http\Controllers;

use App\Billing;
use App\Customer;
use App\Employee;
use App\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billings = Billing::all();

        return view('billing.index', ['billings' => $billings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::where( 'updated_at', '>', Carbon::now()->subHour(10) )->get();
        $employees = Employee::all();
        $services = Service::all();
        return view('billing.create', ['customers' => $customers, 'employees' => $employees, 'services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $billing = new Billing();
        $billing->customer_id = $request->customer;
        $billing->employee_id = $request->employee;
        $billing->total_amount = $request->total_amount;
        $billing->discount_rate = $request->discount_rate;
        $billing->discount_amount = $request->discount_amount;
        $billing->total_paid = $request->total_paid;


        $billing->save();

        $billing->services()->sync($request->services);



        return redirect('/billing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function edit(Billing $billing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billing $billing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
