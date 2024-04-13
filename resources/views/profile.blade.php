<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>

    @extends('layouts.app')
    @section('content')
        @include('default')

        <div class="container mt-4">
            <h4>{{ $pageTitle }}</h4>
            <hr>
            <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
                <div class="bi-person-circle me-3 fs-1"></div>
                <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
            </div>
        </div>
    @endsection

    @vite('resources/js/app.js')
</body>

</html>
