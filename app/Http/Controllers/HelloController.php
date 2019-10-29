<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke() {
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
        </body>
        </html>
        EOF;

        return $html;
    }
}
