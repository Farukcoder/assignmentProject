<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Customer;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list_data()
    {
        $data = Customer::whereNull('deleted_at')->get();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // return $request->all();
        $validate = Validator::make($request->all(), [
            "name" => "required",
            "private_user_name" => "required",
            // "password" => "required",
            "email" => "required",
            // "ssn" => "required",
        ]);

        if (!$validate->fails()) {
            DB::beginTransaction();
            try {

                $customer_data = [
                    "name" => $request->name,
                    "email" => $request->email,
                    "private_user_name" => $request->private_user_name,
                    "address" => $request->address,
                    "ssn" => $request->ssn,
                    "stripe_scret_key" => $request->stripe_scret_key,
                ];

                // dd($customer_data);
                // employee data store
                $customer_id = DB::table('customer')->insertGetId($customer_data);

                //user data store
                DB::table('users')->insert([
                    "customer_id" => $customer_id,
                    "username" => $request->private_user_name,
                    "password" => Hash::make($request->password),
                    "email" => $request->email
                ]);

                // all right
                DB::commit();
                return response()->json(['message' => 'Registration Successfully !', "status" => "success",]);

            } catch (\Exception $e) {
                DB::rollback();
                return response()->json([
                    "status" => "error",
                    "message" => "Something wrong !!",
                    "error" => $e->getMessage()
                ]);
            }
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Something wrong !!",
                "errors" => $validate->errors()
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
