<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function index($username, $password)
    {

        $uName = 'admin';
        $uPass = '123';

        if ($username == $uName && $password == $uPass) {
            return "selamat datang $username";
        } else {
            return "username dan password salah";
        }
    }

    public function salam($username)
    {
        return "selamat datang $username";
    }
}
