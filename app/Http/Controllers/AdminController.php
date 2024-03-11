<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "selamat datang admin";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function pembaca()
    {
        echo "selamat datang User anda bisa membaca apa saja disini";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function penulis()
    {
        echo "selamat datang Penulis, Mau tulis cerita apa aja hari ini?";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function peredar()
    {
        echo "selamat datang peredar";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='logout'>Logout >></a>";
    }
}
