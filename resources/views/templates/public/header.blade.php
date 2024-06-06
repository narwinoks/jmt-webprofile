<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Home - Jasamedika Transmedic') </title>
    <meta name="keywords" content="Jasamedika Transmedic" />
    <meta name="description" content="Jasamedika Transmedic" />
    <meta name="author" content="https://jasamedikatransmedic.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZET9LH4LQ7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZET9LH4LQ7');
    </script>
    @include('templates.public.styles')
    @stack('styles')
</head>
