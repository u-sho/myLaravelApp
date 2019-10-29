<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function __invoke(Request $request, Response $response) {
        $html = <<<EOF
        <html>
        <head>
            <title>Hello</title>
            <style>
                body { color: #999; }
                h1 {
                    font-size: 15rem;
                    text-align: right;
                    color: #f0f0f0;
                    margin: -100px -1.5rem 0 0;
                }
            </style>
        </head>
        <body>
            <h1>Hello</h1>
            <h3>Request</h3>
            <p>{$request->fullUrl()}</p>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
        </body>
        </html>
        EOF;

        $response->setContent($html);
        return $response;
    }
}
