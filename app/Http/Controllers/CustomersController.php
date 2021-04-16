<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $customers = Validator::make($request->all(),[
            'username' => 'required|unique:Customers',
            'email' => 'required|email|unique:Customers',
            'first_name' => 'required',
            'last_name' => 'required',
            'adress' => 'required|string',
            'city' => 'required|string',
            'phone_number' => 'required|numeric'
        ]);
        try {
            $customers = new Customers();
            $customers->username = $request->input('username');
            $customers->first_name = $request->input('first_name');
            $customers->last_name = $request->input('last_name');
            $customers->email = $request->input('email');
            $customers->adress = $request->input('adress');
            $customers->city = $request->input('city');
            $customers->phone_number = $request->input('phone_number');
            $customers->save();
            return response()->json($customers, 201);
        } catch(\Exception $e) {
            return response()->json(['error' => 'failed registration', 'Message' => $e->getMessage()], 422);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single_customer($id){
        try{
            $customers = Customers::findOrFail($id);
            return response()->json($customers, 200);
        } catch (\Exception $e) {
            return response()->json(['Message' => $e->getMessage()], 404);
        }
    }

    public function all_customers(){
        try {
            $customers = Customers::all();
            return response()->json($customers, 200);
        } catch (\Exception $e) {
            return response()->json(['Message' => $e->getMessage()], 404);
        }
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
