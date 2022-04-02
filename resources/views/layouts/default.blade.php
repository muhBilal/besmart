<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- feather icon --}}
    <script src="{{ asset('https://unpkg.com/feather-icons') }}"></script>


    <title>{{ $title }}</title>
</head>

<body class="bg-bwhite">

    <!-- header -->
@include('partials.header')

    {{-- content --}}
@yield('content')

<script>
    feather.replace()
</script>
<script src="{{ mix('js/app.js') }}"></script>

</body>

</html>