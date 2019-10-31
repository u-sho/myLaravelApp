<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function post(Request $request, Response $response)
    {
        $data = [
            'msg' => $request->msg,
            'url' => $request->fullUrl(),
            'request' => $request,
            'response' => $response,
        ];
        return view('hello.index', $data);
    }
}
