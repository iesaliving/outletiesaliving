<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" onload="if(media!='all')media='all'">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" onload="if(media!='all')media='all'">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
        <style>
            body,html {
                height: 100%;
            }

            @media (max-width: 600px) {
                h1 {
                    font-size: 2rem;
                }
            }        
        </style>
    </head>
    <body class="d-flex justify-content-center">
        <div class="align-self-center text-center mb-4 py-5" style="width: 100vw; background-color: #f4f4f4;">
            <img class="mb-4" src="{{asset('img/logo-header.png')}}" alt="logo" width="150">
            @yield('content')
        </div>    
    </body>
</html>
