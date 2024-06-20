<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(int $id){
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieAge = 1;
        $cookiePath = '/';
        $cookieHost = $_SERVER['SERVER_NAME'];
        $cookieSLS = false;
        $cookieHTTP = true;

        return response($data,200)->cookie($cookieName,$cookieValue,$cookieAge,$cookiePath,$cookieHost,$cookieSLS,$cookieHTTP);
    }
}
