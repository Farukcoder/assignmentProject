<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class LoginUserController extends Controller
{
    public function login(Request $request)
    {

        $http = new \GuzzleHttp\Client;

        $url = env('APP_URL') . 'api/login';
        $email = $request->email;
        $password = $request->password;
        $response = $http->post($url, [
            'headers' => [
                'Authorization' => 'Bearer' . session()->get('token.access_token'),
                'APP-KEY' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9'
            ],
            'query' => [
                'email' => $email,
                'password' => $password

            ]
        ]);

        $result = json_decode((string) $response->getBody(), true);

        // dd($result);
        if(!empty($result['data'])){
            return view('home');
        }else{
            return view('auth.login',compact('result'));
        }
    }
}
