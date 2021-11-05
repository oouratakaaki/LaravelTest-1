<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function room($room)
    {
        $item = [
            'param' => $room
        ];
        return view('room',$item);
    }
}