<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects.index');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        $nama = "engelbertus Hendro";

        $judul = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quaerat ea voluptate aliquam, praesentium porro blanditiis voluptatibus tempore aliquid. Inventore.';

        return view('pages.about', [
            'nama' => $nama,
            'var_judul' => $judul

        ]);
    }
}
