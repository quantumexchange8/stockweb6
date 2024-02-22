<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title>
        @yield('title')
    </title>
    @include('layouts.partials.head')
</head>

<body class="home">
    <div class="page_wrapper">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.script')

</div>  <!-- End of .page_wrapper -->

</body>
</html>