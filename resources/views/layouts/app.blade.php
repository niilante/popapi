<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'POPAPI') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
</head>
<body>

    <div class="container-fluid">
        <div class="row header">
            <div class="container menu text-center">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/documentation') }}">Documentation</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-md-offset-4 text-center">
                <div class="title">POPAPI</div>
            </div>
        </div>

        <div class="row nav" id="vueApiInput">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <span class="input-group-addon">http://popapi.co/api/</span>
                    <input v-model="userInput" v-on:change="checkFail" type="text" id="interactive" class="form-control" placeholder="star-wars/1/">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" v-on:click="getAPI">GET</button>
                    </span>
                </div>
            </div>
        </div>

        <div class="row content" id="vueApiOutput">
            <div class="col-md-6 col-md-offset-3 response">
                <h2>Response</h2>
                <pre class="interactive_output">@{{ apiResponse }}</pre>
            </div>

            @yield('content')
        </div>

        <div class="row footer">
            Created with <span class="red">&hearts;</span>
        </div>
    </div>

    <script src="{{ elixir('js/all.js') }}"></script>

    @yield('footer')

</body>
</html>