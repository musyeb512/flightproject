<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Flights;
use Session;
use DB;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::get();
        $flights = flights::get();
        return view('admin.flights.flight-list', compact('operators', 'flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // so here we will call the validation function okay
        $this->flight_validation($request);
        $flight_name = $request->get('flight_name');
        $flight_code = $request->get('flight_code');
        $total_seats = $request->get('total_seats');
        $operator_id = $request->get('operator_id');
        // $status = $request->get('status');
            
        $insertFlight = [
            'flight_name' => $flight_name,
            'flight_code' => $flight_code,
            'total_seats' => $total_seats,
            'operator_id' => $operator_id,
            // 'status' => $status,
            'created_at' => \Carbon\carbon::now(),
            'updated_at' => \Carbon\carbon::now(),
        ];
        // dd($insertBus); // we will check okay if we are having all the data okay
        DB::table('flights')->insert( $insertFlight);
        Session::flash('msg', 'Flight Register Successfully!');
        return redirect()->back();

        return view('admin.flights.flight-list');
    }

    public function flight_validation(){
        $rules = [  // this array okay to validate our buses input before insertation to our database
            'flight_name' => 'required',
            'flight_code' => 'required',
            'total_seats' => 'required',
            'opeartor_id' => 'required',
        ];

    }
    // we can use anther validation if we want but i will show you how to work on that also okay
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
