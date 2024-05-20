<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> --}}

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <style>
        @font-face {
            font-family: "amsterdam";
            src: url('/fonts/Amsterdam-ZVGqm.ttf');
        }
        @font-face {
            font-family: "casandra";
            src: url('/fonts/CassandraPersonalUseRegular-3BjG.ttf');
        }
        @font-face {
            font-family: "autumn";
            src: url('/fonts/AutumnFlowers-9YVZK.otf');
        }

        body {
            background-color: #0c0c0c;
        }

        h1 {
            color: white;
        }
    </style>
</head>
<body>
    <div class="row m-2">
        <h1 style="font-family: monospace">{{ $wisdom }}</h1>
        <div class="col-5">
            <button onclick="location.reload()" class="btn btn-primary me-2">Another one !</button>
            {{-- <button onclick="location.href = '/inspire'" class="btn btn-primary">Notify it!</button> --}}
        </div>
    </div>
</body>
</html>
