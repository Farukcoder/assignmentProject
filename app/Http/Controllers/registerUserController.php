<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        // $http = new \GuzzleHttp\Client;


        // $url = env('ADMIN_URL') . 'api/nagorik_register?';

        // $form_data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'private_user_name ' => $request->user_name,
        //     'password ' => $request->password,
        //     'address ' => $request->address,
        //     'ssn' => $request->ssn,
        //     'stripe_scret_key' => $request->_token,
        // ];
        $name = $request->name;
        $email = $request->email;
        $user_name  = $request->username;
        $password  = $request->password;
        $address  = $request->address;
        $ssn = $request->ssn;
        $stripe_scret_key = $request->_token;

        $url = env('APP_URL') . 'api/register';

        $http = new \GuzzleHttp\Client();

        $response = $http->post($url, [
            'headers' => [
                'Authorization' => 'Bearer' . session()->get('token.access_token'),
                'APP-KEY' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9'
            ],
            'query' => [
                'name' => $name,
                'email' => $email,
                'private_user_name' => $user_name,
                'password' => $password,
                'address' => $address,
                'ssn' => $ssn,
                'stripe_scret_key' => $stripe_scret_key,

            ]
        ]);

        $result = json_decode((string) $response->getBody(), true);

        if($result['status'] == "success"){
            return view('auth.register',compact('result'));
        }else{
            return view('auth.register');
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
