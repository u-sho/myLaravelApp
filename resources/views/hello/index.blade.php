<html>
    <head>
        <title>Hello</title>
        <style>
            body { color: #999; }
            h1 {
                font-size: 15rem;
                text-align: right;
                color: #f0f0f0;
                margin: -100px -1.5rem;
            }
        </style>
    </head>
    <body>
        <h1>Hello</h1>
        @isset ($msg)
        <h2>Hello, {{ $msg }}!!</h2>
        <h3>Request</h3>
        <p>{{ $url }}</p>
        <pre>{{ $request }}</pre>
        <h3>Response</h3>
        <pre>{{ $response }}</pre>
        @else
        <p>Input your name.</p>
        <form method="POST" action="/hello">
            {{ csrf_field() }}
            <input type="text" name="msg">
            <input type="submit">
        </form>
        @endisset
    </body>
</html>