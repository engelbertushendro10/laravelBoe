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

    public function umur($nama, $umur)
    {
        if (is_numeric($umur > 0)) {
            if ($umur < 15) {
                $status = 'anak-anak';
            } elseif ($umur >= 15 && $umur < 30) {
                $status = 'pemuda';
            } elseif ($umur >= 30 && $umur < 50) {
                $status = 'dewasa';
            } elseif ($umur >= 50) {
                $status = 'lansia';
            }
        } else {
            return "kategori tidak di temukan";
        }
        return "nama anda adalah $nama, anda berumur $umur dan status anda adalah $status";
    }

    public function salam($username)
    {
        return "selamat datang $username";
    }
}
