<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        @yield('title', 'Car Store')
    </title>

</head>

<body>
  

   


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container text-black-50">
            <a href="{{ route('home') }}" class="" data-event-module-slug="header"data-event-label="logo">
                <svg role="img" aria-labelledby="ferrari-logo-svg-title" viewBox="0 0 162 224"
                    style="height: 62px; width:41px;">
                    <title>Ferrari logo</title>
                    <path fill="#ffffff"
                        d="M76.6 5.5c.8.4 1.1.7 1.9.9.7.2 1.7.7 1.9.1.3-.6-.1-1.4-.6-2.1-.8-1.3-1.2-1.6-2.3-3.4-.2-.4-.4-.8-.8-.8 0 0-.1 1.3-.5 2.1-.3.7-1.1 1.2-1 1.7.1.5.6 1.1 1.4 1.5z">
                    </path>
                    <path fill="#ffffff"
                        d="M160.2 91.2c-.9 1.2-1.3 3.6-2.6 5.6-1.8 2.8-4.4 6.2-5.7 6.2-.7 0-.9-1.6-.9-1.6s-.9-2.7.6-6.1c1.1-2.4 1.7-3.1 3.1-4.9 1.3-1.7 2.1-2.6 3-4.4.8-1.6 1-1.9 1.5-4.4.1-.6-.1-1.9-.7-1.8-.8 0-3 4.8-5.3 7.5-2.2 2.5-6.3 5.7-6.3 5.7s-.4.3-.4-.5c-.1-.7-.2-2.8.2-4.7.4-1.9 1-3.8 2.7-6.7 1.9-3.3 4.3-5.6 5.5-6.8.5-.5 2-1.4 1.2-1.9-.7-.4-2.8 1.4-4.4 2.6-2 1.5-2.7 1.9-4.7 4.3s-2.5 3.4-2.5 3.4-1.9 3.1-2.4 6.1c-.5 3-.5 4.7-.5 4.7s0 2.7.3 4.3c.2 1.7.9 4.3.9 4.3s1 2.9 1.4 4.7c.4 1.8 1.1 7.1 1.1 7.1s.5 3.8.2 7.4c-.3 3.6-.6 5.7-1 6.8-.4 1.1-1.5 4-3.3 6-1.7 1.9-2.1 2.2-2.1 2.2s-1.8 1.5-3.3 2.3c-1.5.8-3.7 1.8-4.7 2.1-1 .2-2.4.3-2.5.3h-1.3l-.4-.3-.2-.8s-1-3.9-2.2-6.4c-1-2.1-3.1-5-3.1-5s-3.6-4.9-6.4-7.6c-3.2-3.2-6.8-5.6-9-7.3-.8-.6-2.6-1.7-2.6-1.7s-7.3-7.3-9.9-13.1c-1.8-4-3-6.9-2.5-11.3.1-1 .5-2.9.7-2.9l1.3.4c.1.1 1.3 1.2 2.4 1.6.6.2 1.7.4 1.7.4s.9.1 1.4.2c.5.2 1.4.5 2 .8.6.3 1.5.9 1.5.9l1.7 1.3 1.8 1.4s1 .7 1.3.8c.3.1.5.2.6.2h.4s.4-.1.5-.5c.1-.5-.5-.1-1.4-1.1-1-.9-1.4-1.7-1.4-1.7s-.2-.8-1-1.7c-.8-.9-1.8-1.7-1.8-1.7s-.7-.5-1.7-.8c-1-.3-1.3-.3-1.4-.7-.1-.4 1.2-.2 1.2-.2s1.5.2 2.7.8c1.2.6 1.9 1.3 1.9 1.3l.8.7.5.5.5.3s.5.5.6-.2c.1-.6-.1-1.1-.2-1.2l-.5-.5-2-1.7c-.6-.6-1-1-1.6-1.4-.6-.4-1.5-1-2.6-1.4-1-.4-1.6-.3-2.6-.8-.7-.3-1.3-.5-1.7-1.1-.1-.1-.6-.5.3-.3.9.2 1.5.5 2.5.7 1.6.4 2.6.4 4.1.9.6.2 1.4.6 1.4.6l1.9.8s2.6 1.4 4.4 1.5 3.3-.3 3.9-.6c.6-.2 1.7-.9 2-1.2s.5-.6.5-.6l.2-.5v-.4c-.5-.6-1.5 1-3.1 1.3-1.7.3-1.6.5-2.7.3-1.2-.2-1.9-.5-2.8-1.4-1.6-1.5-2.2-2.9-4.3-3.8-.9-.4-2.5-.8-2.5-.8s-2.2-.7-3.4-1.4c-.9-.5-2.8-.8-2.2-1.6.3-.4 2.7 1 4.5 1.2 1.3.2 2.2.1 3.2.1s2.4-.3 2.6-.3c.2-.1 1 0 1.7.2s1.1.5 1.8.8c.7.3 1.5.8 1.7.8l.4.1.2-.2.1-.2-.1-.2-.3-.2-.6-.4s-.9-.5-1.7-1.3c-.8-.8-1.5-1.7-2.7-2.1-1.2-.4-2.6-.6-2.6-.6l-1.4-.1-.6-.1s-1-.3-.2-.5 1.2-.3 1.4-.3c.1-.1 1.5-.2 2.3.1.8.3 2.1 1 2.2 1 .1.1 1.3 1 2.6 1.3 1.3.3 3 .4 3 .4l.8-.2.4-.1.3-.2-.1-.5s0-.4-.6-.5c-.6-.1-1.8-.3-2.9-1.1-1.1-.8-1.9-1.6-1.9-1.6s-.8-.7-2.4-1.1c-1.5-.4-2-.4-2-.4l-.5-.2-1.1-.5s-.5-.3-.9-.8-1-1.4.7-.9c1.7.5 2.1.8 2.1.8s.9.9 1.7 1c.5.1.9.2 1.2-.2.5-.5-.9-1.1-1.9-1.8-.8-.5-1.6-1.8-1.6-1.8s-.6-.5.3-.3c.9.2 2.5 1.2 2.5 1.2s.8.4 1.2.5c.3.1 1.1.6 1.5.8.3.1 1.2.3 1.8.6.8.5 1.2 1.3 1.6 1.6.4.3.7.8 1.2.9.5.1.6.3.9.1.3-.2.4-.3.4-.3s.1-.2-.4-.5-1.1-1.1-1.1-1.1l-.2-.4-.1-.4-.5-.8-.9-1.3s-1.4-1.9-2.7-2.6c-1.2-.7-2.1-1.1-2.1-1.1s-.6-.3-.9-.5c-.5-.4-.7-.7-1.1-1.2-.5-.6-.7-1-1.3-1.6-1.1-1.1-4.5-1.7-3.2-2.5.7-.4 1.6-.2 2-.1.4.1 1.3.5 2.2.8.6.2 1 .2 1.6.4.6.2 1.3.3 1.6.5.3.2.6.6.8.7.1.1.9 1.4 2.3 2.1s2.1 1.2 3.5 1.3c1.1.1 2.9-.3 2.9-.3s.5-.2.1-.7c-.5-.5-.5-.6-.9-.7-1.6-.6-2.9-.4-4.1-1.6-.5-.5-.7-.6-1.1-1.4-.4-.8-.2-1-.5-1.5-.2-.5-.7-1.2-.7-1.2s-1.5-1.8-3.1-2.7c-1.7-.9-2.9-1.8-3.1-2-.3-.2-.9-1-.9-1l-.5-.8-.3-.6c-.2-1.1 1.8.3 2.9.7 1.8.6 2.7 1.4 4.5 2 1 .3 1.6.3 2.6.7 1.7.7 2.2 2.4 4 2.6 1 .1 3 .5 2.6-.4-.4-1-2.4-1-3.4-2.2-.5-.5-.5-1-1-1.5-.8-1-2.7-1.9-2.7-1.9s-.6-.5-1.3-1.9c-.6-1.4-2.1-2.4-4.8-3.7-1.8-.9-5.4-1.1-4-2 .8-.6 1.5-.5 2.6-.2 1.1.4 1.5.9 2.4 1.3.9.4 1.3.5 1.5.6.2.1.9.4 1.2.4.2.1 1.7.3 2.1.4l2 .5 1.6.6s.8.3 1.3.3 1.3-.2 1.3-.2l.6-.4.1-.2s.3-.5-.5-.6c-.7-.1-1.1-.1-1.2-.1l-.7-.2-.3-.1s-1.4-1.1-2.6-1.6c-1.3-.5-1.5-.6-1.5-.6l-.5-.1-.6-.1s-.5 0-1.3-.7-1.1-1.1-1.8-1.8l-.9-.9s-.8-.6-.8-1.1c.1-.8 1.8.9 1.8.9l1.2.8s1 .7 2.8.8c1.8.1 4-.5 4-.5s.3-.2 1.3.1c1 .3 1.8.9 1.8.9l.8.7 1.2 1.3.2-.1c.1-.1.6-.6-.3-1.7-.9-1.1-2.4-2.1-2.4-2.1s-2-1.2-4-1.6c-2-.4-2.9-.4-2.9-.4s-1.5 0-2.4-1c-.9-1-1.5-2-1.5-2L109 27s-.5-.6-1.5-1c-.9-.4-1.9-1-1.9-1s-1.5-.5-1.6-1.2c-.3-1.3 2.5 0 4 .3 1.4.3 2 .8 3.4 1.1 1.2.3 1.9.4 3.2.3.7 0 1.1-.1 1.8-.2.7 0 1.2-.1 1.9 0 1 .2 1.4.7 2.4 1.1.6.3.9.6 1.6.7.6.1 1.8.5 1.6-.1l-.3-.4c-.5-.7-1.1-.7-1.7-1.2-1.3-1-1.9-1.8-3.4-2.5-1-.5-1.6-.7-2.7-.9-.8-.1-1.4.1-2.2-.1-.9-.3-1.2-.7-2.1-1.2-1.4-.8-2.2-1.5-3.7-2.1-1-.4-2.7-.8-2.7-.8l-.7-.1-.3-.1c-1.4-.5 2.5-1.6 4.3-2.1.9-.2 1.3-.4 2.2-.3.8.1 1.7 1.2 2.6.7 1.3-.7-1.5-2.6-2.4-2.9-1.2-.5-3.3-.1-3.3-.1l-4.6-.1-1.3-.2s-.8 0-1.4-.7c-.6-.7-2.9-3.5-5.5-3.9-2.7-.4-3.5 0-3.7-.2-2.3-3.6-4.7-4.4-6.5-6.1C84 1.2 83.2.1 83 .2c-.2.1-.5 1.6-1 2.9-.6 1.5-.2 2.2.1 2.8.4.6.9 1-.1 1.6-1 .6-2.3.4-2.3.4s-1.1-.2-2-.7c-.9-.4-2.8-1.2-2.8-1.2s-1.8-.5-3-.4-1.3.2-2.2.3c-.5 0-.7 0-1.2.1-.4.1-.9-.2-.9.3s1 .5 1.7.8c.7.3 2.3.3 2 .7-.4.4-1.9.5-2 .4-.1 0-1.1-.2-1.9-.2-1.3.1-1.4.1-3.3 1-.3.1-.2.8.4.6.7-.2 1.7-.4 2.8-.4 1.2 0 1.9.4 3.1.7 1 .3 1.1.5 2.6.7.3 0 .9-.2.9.2 0 .2-.4.5-.4.5s-.9.2-.8.5c.2.4 1 0 1.4 0 .4 0 1 .1.9.5l-.2.3c-1.1.3-1.7.5-2.7.9-2.5 1-3.5 2.2-5.9 3.4-2.3 1.1-6 2.5-6 2.5s-1.1.6-2.7 1-1.7.3-2.8.5c-1.1.1-1.6.3-2.5.8-.6.3-.9.6-1.4 1.1l-1.4 2.1-.8 1.2c-.2.4-.4.6-.5 1-.2.5-.3.7-.4 1.2-.3 1.2 0 1.9.2 3.1.1.3.1.5.2.8.1.3.5.6.5.6l.4.1s1.4-.1 2.3-.3c.9-.2 2.2-.5 2.2-.5l1.7-.5 1.1-.4s.7 0 .8.4c.1.3-.2.8-.2.8s-.6.3-1.1.5c-.5.2-1.7.5-1.8.6l-1.3.4-1.1.1s-.2.1-.4.4c-.2.3-.2.3-.2.5.2.2.3.4.5.6.4.3.6.5 1.1.6.7.3 1.1.2 1.8.2 1 0 1.6-.2 2.5-.6.8-.5 1.1-.5 2.2-.9.3-.1.9-.2 1.1-.2 1.9-.2 3 .1 4.9.4 1.9.3 2.8.9 4.7 1.2 2 .3 3.2.9 5.3.4 1-.2 1.6-.7 2.1.3.5.9.4 1.4.4 1.4s0 .6-.7 2.5-2.9 6.6-2.9 6.6l-1.5 3s-1.2 2.4-4 5.5-3 3.3-3 3.3-1.5 1.1-3 3-1.5 2.6-2.9 4c-.9.9-1.4 1.4-2.5 2.1s-2.4.5-5.9 2.9c-3 2.1-4.6 3.8-4.8 3.7-.2-.1-1.2-.9-1.6-1.1-.3-.2-6.1-4.1-6.1-4.1l-2.4-1.6-1.1-.7-.2-.4-.6-.8s-.9-1.1-2-2c-1.1-1-2.3-1.8-4.1-2.2-1.7-.5-2.8-.8-4.5-.2-1.1.4-1.7.8-2.5 1.6-1 1-1.2 1.8-2 3s-1.6 2.3-2 2.9c-.4.6-1.2 2.2-1.2 2.2s-2 3.2-3.1 5.3c-1.3 2.3-1.8 3.7-3 5.9-1.9 3.5-4.6 7.1-5.3 8.7-.7 1.6-.8 1.8-.8 1.8s-.2.9-.3 1.5c-.1.6-.1 1.6-.2 2-.1.5-.4 1-.5 1.1-.1.1-1.2 2.4-1.6 3.9-.4 1.5-1.3 6.2-.2 6.8 1.1.6 9.2-2.9 10.3-6.3.7-2.2-2.2-3.3-1.4-5.3.3-.7.5-.8 1-1.5.8-1.3.5-4 2-6.5 1.1-1.8 3.3-4.1 6.3-7.5 1.9-2.1 3.7-5.5 3.7-5.5s.4-1.2 1.2-1c.9.2 1.7.1 1.7.1l.4.3.8.8 1.2 1.8s2 2.9 2.7 3.7c.7.8 1.4 1.4 2.4 2.2 1.1 1 1.5 1.5 2.9 2.6 2 1.6 1.3 2.2-1.3.8-.9-.5-2.3-1-3.4-1.3-1.2-.3-5.7-1.5-8-1.8-2.2-.3-2.6-.2-2.6-.2s-1.1-.1-2.4.7c-1.3.8-2 1.4-2 1.4s-1.5 1.7-1.6 2c-.1.3-.8 1.5-.8 1.5s-.4.6-.5 1.3c-.2.7-.1 1.4-.1 1.4l.1 1.5.1 1.4s.3 3.5 1 7c.2 1 .4 2.6.4 2.6l.5 3.6s.3 3.8.6 5.1c.3 1.2.5 1.3.7 2.1.4 1.5-.3 2.2.4 4s1.3 1.6 2 2.7c.5.8.7 1 1.1 2 .4 1 1.7 4.3 3.2 6.7 1.6 2.5 3.7 5.6 5.1 5.3 1.4-.3 2.4-2.5 2.4-2.5s1.6-4.3.6-8.5c-1-4.3-5.6-2.3-6.2-5.4-.1-.7 0-1.8 0-1.8s-.1-1.3-.3-1.7c-.2-.4-1.8-3.4-2.4-5.9-.5-1.9-.4-8-.8-9.7-1.1-4.4-1.2-4-.6-4.8.7-.8 1.3-.6 1.3-.6l.9.1.7.3s.8.5 1.3.8c.4.3 1.8 1.4 1.8 1.4l3.4 2.2s1.9 1.1 2.7 1.5c.8.4 1.5.9 1.5.9l.9.6 1.5 1.1.3.3.2.4s.7 1.6 3.7 3.3c2.4 1.4 4.5 1 5.4 2.1.2.2 1.9 2.5 2.7 3.9 1 1.6 2.2 3.5 2.6 4.1s2.9 3.7 2.9 3.7l3.3 3.6 4.3 4 3.9 3.3 2.5 2s2.2 2.1 4.7 3.8c2.4 1.6 2.5 1.8 4.1 2.9 1.2.8 2.8 1.9 4.4 3.1 1.6 1.3 3.4 3.7 2.7 4.5-.5.3-1.4-1-3.1-2.5-1.4-1.2-2.1-1.8-3.5-2.8-1.8-1.4-2.7-2.1-4.7-3.3-1-.6-2.8-1.7-2.9-1.5-.7 2.1-.6 4.1-.5 6.7.1 1.8.4 3.6 1 5.9.5 2.2 1 3.4 1.8 5.5s2.3 5.4 2.3 5.4l2.3 4.6 2.1 3.5 1.1 1.8.4.6s.5 1.2 0 2-1.1 2.5-2 2.6c-.9.2-3 .3-3 .3l-11.9-.2-6.2-.5s-.7-.4-4.3-.4c-2.1 0-3.8.9-5 1-1 .1-5.9-.3-9.2 1-3.1 1.3-4.5 1.6-5.6 3.6-.8 1.5 3.9 3.9 7.8 4.8 6.3 1.4 4.5-1.3 6.9-3 .3-.2.4-.4.7-.5 1.6-.5 2.5.8 4.1.8 1.8 0 2.8-.6 4.6-.9 9.1-1.2 23.3 3.1 23.3 3.1s3.5 1.1 5.1.8c1.9-.4 1.5-1.1 2.1-2.2.5-.9.3-1.1.4-2.1 0-.6-.1-.9-.2-1.5-.4-1.7-1.5-4.1-1.5-4.1s-.8-1.8-1.1-2.7c-.4-1.3-.8-2.1-1-3.5-.6-3.7-.5-3.4-.5-5.5 0-3.8.4-5.9 1.4-9.6 1.5-5.4 4.3-7.7 6.4-12.9.6-1.4.6-3.4 1.3-3.6.8-.1.7 2.5.3 4-1.3 5.2-4.5 7.4-6 12.7-1.1 4.1-1.7 6.5-1.4 10.7.1 2.3 1 5.9 1 5.9s1.2 4 1.8 5.5c.6 1.5 1.8 4 1.8 4l2.7 4.8 1.4 2.3s1 .9.5 2.4-1.5 2.4-2.7 3.7c-3.4 4-11.3 9.9-13.3 11.3-2.8 2.1-2.7 2.7-2.9 3.3-1.1 3.2-4.3 3.3-7.8 7.1-.8.8-2.9 3-2.5 4.9.2.7 8.8 2.2 13.8.1 3.9-1.7.5-3.6 1.6-5.5.8-1.4 2.8-1.4 3.7-2.6 1.5-2 .5-1.9 1.8-3.5 4.3-5.2 7.1-8.2 14.8-12.9.7-.4 2-1 2-1s1.1-.5 1.5-1.1c.5-.8.4-1.5.4-2.4 0-.6-.1-.9-.1-1.5 0-.7.1-1.1-.1-1.8-.2-1.1-.9-2-1.3-2.6-.4-.5-1.1-1.4-1.5-3.3-.5-1.9-.5-3.5.3-5.6.8-2.1 2.6-3.8 2.6-3.8l4.5-3s3.9-2.8 5.1-3.9c1.3-1.1 3.8-3.4 5.6-6 2.1-2.9 3.2-4.7 4.1-8.2.3-1.3.6-3.3.6-3.3s0-1.4.8-1.5c.8-.1 1 .2 1 .2s.7.4.9 2.4c.1 2-.5 4.3-.5 4.3s-.6 2.3-.8 3.7c-.1.9-.1 1.4-.1 2.4 0 1.7.7 3.1.7 3.1s.4.3.4-.4c0-.8.2-2 .5-3.2.3-1 .5-.8 1.1-2.5.8-2.2.1-2 .5-3.3.2-.6.7-1.2 1.3-1.2.6 0 .7.8.7.8s.6 2.6.1 5-2.3 5.7-2.3 5.7l-1.4 2.4s-1 1.7-1.4 2.8c-.4 1.2-.5 1.7-.3 2.8.3 1.2 1.2 2.8 1.7 2.5.4-.3-.6-1.3.6-3.7 1.2-2.4 2.8-3.9 2.8-3.9s2.2-2.6 3.2-4.6c.9-1.8 1.8-4.7 1.8-4.7s.7-2.6.5-4.8c-.1-2.1-.5-3.2-.5-3.2l-.9-1.6-.5-1.2.2-.7c.2-.1.9.4 1.5 1.2.6.8 1.2 1.8 1.5 3.2.3 1 .4 1.9.4 2.8 0 .8-.3 4.1.9 6.2.5 1 1.7 3.3 1.8 2.3.2-2.3-.8-3.4-.7-5.5.1-2.4.7-1.8.9-3 .2-1.3.5-1.6.3-3.3-.2-1.6-.9-3.7-.9-3.7l-.7-1.6-.3-.6s.2-.3.5-.3l2.4-.8s3.1-1.4 4.3-2.4c1.3-.9 2.8-2.5 2.8-2.5s2-2.5 3-4.3c2.4-4.5 2.4-10.2 2.3-12.8-.1-2.5-.8-5.8-.8-5.8s-.8-4-.6-6.6c.2-2.6.4-3.8.4-3.8s-.1-2.6 2.1-5.4c2.2-2.8 3.2-4.6 3.6-6.7.4-1.8-.2-4.7-1-3.6zM94 73.2c-.3 0-.7-.4-.7-.4s-.1-.1.2-.3c.3-.2.7-.1.7-.1l.3.1.5.7c-.1.3-.7.1-1 0zm1.2-3.3c-.3-.1-.8-.4-.8-.4s-.1-.2.2-.4c.3-.2.8-.1.8-.1l.3.2c.1.1.6.6.6.8 0 .3-.7 0-1.1-.1zm1.1-3.4c-.4-.1-1-.5-1-.5s-.1-.2.3-.4 1-.1 1-.1l.4.2c.2.2.7.7.7 1-.1.3-1-.1-1.4-.2zm.9-3.1c-.4-.1-1-.5-1-.5s-.1-.2.3-.4 1-.1 1-.1l.4.2c.2.2.7.7.7 1-.1.2-1-.2-1.4-.2zm.9-3.7c-.5-.1-1.1-.6-1.1-.6s-.1-.2.3-.5 1.1-.1 1.1-.1l.4.2c.2.2.8.8.8 1.1 0 .4-1.1-.1-1.5-.1zm.6-4c-.6-.1-1.4-.7-1.4-.7s-.2-.3.4-.6c.5-.3 1.3-.2 1.3-.2l.5.3c.2.2.9 1 1 1.4 0 .4-1.2-.1-1.8-.2zm.4-4c-.7-.1-1.7-.9-1.7-.9s-.2-.3.4-.7c.6-.4 1.6-.2 1.6-.2s.3.1.6.3c.3.3 1.1 1.2 1.2 1.7.1.5-1.4-.1-2.1-.2zm.6-4.6c-.8-.1-1.9-1-1.9-1s-.2-.4.5-.8c.7-.5 1.8-.2 1.8-.2s.4.1.7.4c.3.3 1.3 1.4 1.4 1.9 0 .6-1.7-.2-2.5-.3zm-.4-18.6c-.6-.1-1.4-.7-1.4-.7s-.2-.2.4-.5c.6-.3 1.4-.1 1.4-.1s.3.1.5.3c.2.2 1 .9 1 1.3 0 .3-1.3-.2-1.9-.3zm2.2 4.5c.1.4-1.3-.1-2-.2-.6-.1-1.5-.8-1.5-.8s-.2-.3.4-.6c.6-.4 1.4-.2 1.4-.2s.3.1.6.3c.3.3 1 1.1 1.1 1.5zm-2.9 7.4c.6-.4 1.6-.2 1.6-.2s.3.1.6.3c.3.3 1.1 1.2 1.2 1.7.1.5-1.4-.1-2.1-.3-.7-.1-1.7-.9-1.7-.9s-.2-.2.4-.6zm1.3-3.4c-.7-.1-1.7-.9-1.7-.9s-.2-.3.4-.7c.6-.4 1.6-.2 1.6-.2s.3.1.6.3c.3.3 1.1 1.2 1.2 1.7.1.6-1.4 0-2.1-.2zm1.3-15c.8.2 1 .7.6.7-.4.1-.6.1-.9.1-.9 0-.8-.4-2 .2-1.2.6-.3.3-2 .9-1.6.6-1.2-1-1.2-1s.1-.3.3-1.1 1.2 0 1.9 0c1.3 0 2.4 0 3.3.2zm-4.5-6.2l.5.3c.2.2.9 1 1 1.4.1.4-1.2-.1-1.7-.2-.6-.1-1.4-.7-1.4-.7s-.2-.3.4-.6c.5-.4 1.2-.2 1.2-.2zM93.1 11c.5-.3 1.3-.2 1.3-.2l.5.3c.2.2.9 1 1 1.4.1.4-1.2-.1-1.7-.2-.6-.1-1.4-.7-1.4-.7s-.2-.3.3-.6zm-1 64.8c.3-.2.7-.1.7-.1l.3.1.5.7c0 .2-.6-.1-.9-.1-.3 0-.7-.4-.7-.4s-.2-.1.1-.2zM52 28.2c-.3.2-.5.3-.9.6-.5.4-1 1.4-1.3 1.1-.4-.3-.2-1.4-.2-1.4s.3-.8.7-1.6c.5-.8 1.1-.8 1.1-.8.6 0 1.7.4 1.7 1.3.1.9-.6.5-1.1.8zm8.2 3.1s-.4.1-.5-.6c-.1-.7.5-.8.5-.8s1.2-.6 1.2.2c.1.7-1.2 1.2-1.2 1.2zm10.7-13.6s-1.3 2.1-3.1 2.9c-1.8.8-3 1.2-6.4 1.5-.5 0-.3-.3-.3-.3s3.9-1.1 6.1-2.3c1.2-.7 2.6-1.6 3-2 1.4-1.2.7.2.7.2zM3.7 104.3c0 .5-.6 1.4-.8 1.4-.2 0-.6-.9-.5-1.4.1-.5.2-1.9 1-1.7.6.1.3 1.2.3 1.7zM6.3 93s-.9 1.9-1.2 1.1c-.3-.7.3-2 .3-2 .8-.7 1.1-1.7 1.5-1.3.3.4-.6 2.2-.6 2.2zm12.4-19.5c-.9 1-3.7 6.3-4.3 5.4-.6-.7 2.7-5.7 3.4-6.7.7-1.1 1.3-.9 1.3-.9l.2.2c-.1 0 .3 1-.6 2zm7.5-7.9s-2 .4-1.7-.3c.4-.7 1.8-1 1.8-1 1.1.2 1.3.3 1.2.8.1.5-1.3.5-1.3.5zm8.1 14c-.9.9-1.2-.3-2.5-1.8-1.3-1.4-1-2.6-1-2.6h.2l.2.1.5.2.3.3 1 1c.4.6 1.5 2.6 1.3 2.8zm-15.5 29.9c-.3 0-.6-.6-.6-.6s-.8-1.2-1.1-2.1c-.3-.8-.4-2.1-.4-2.1s-.2-1.7-.2-2.3c.1-.8.1-1.5.2-1.9.1-.4.5-.3.5-.3.6 0 .6.5.6.5v.3s0 1.8.1 3.2c0 .4 1.1 4.9 1.1 4.9s.2.4-.2.4zm-.2-21c-.7 1.1-1.2 1.1-1.2 1.1 0-.1-.2-.5.4-1.7.6-1.2 1.2-1.1 1.2-1.1l.2.2s.1.4-.6 1.5zm7.1 41.9c.2-.4 1.5.6 1.5.6.5.1 1 1 1 1s.2.7-.4.9c-.6.3-1-.3-1-.3s-1.3-1.8-1.1-2.2zm9.4-30.6c-1.4-.3-4.4-2.6-5.6-3.2-1.2-.6-3.2-.8-2.3-1.6.1-.1.2-.3.4-.3s1.1.3 1.1.3l2.2.9c.1 0 1.2.5 2.1 1 .8.5 2.2 1.4 2.2 1.4l.6.5c0 .2.7 1.3-.7 1zm12.2-19.9s-1.7 2.3-2.7 3.7c-1.3 1.9-2.9 4.8-3.2 4.5-.3-.3 1.4-3.5 2.3-5.2 1-2.1 2.5-3.2 3.1-3.4 1.3-.6.5.4.5.4zM41.9 180s0 .4-.7.9-1 .2-1.1.2-.8-.4-.8-.8c.1-.4 1.2-.7 1.2-.7 1.9-.1 1.4.4 1.4.4zm15.5-.6c-.7-.1-.8-.3-.7-.4 0-.1.2-.3 1-.3s.8.4.8.4c0 .3-.3.4-1.1.3zm17.8 1c-1.5.4-2.1.2-3.4.3-1.1.1-1.6.2-2.7.2-1.9 0-2.1.1-4.8-.7-.5-.2-1.1-.8-.9-1 .2-.3.6-.2.6-.2s3.4.6 5.6.7c1.6.1 2.4.2 4 .1.9 0 .4-.1 1.8-.1.5-.1.2.6-.2.7zm9.5-2.8c-.1.1-.7.3-1.2.4-.6.1-.3-.4-.3-.4s.4-.6.9-.9c.6-.3.9 0 .9 0 .2.4-.2.8-.3.9zm7.4-19.2c-.7 1.5-.9 2-1 3.4-.2 1.5.7 5.7-.7 4.1-.5-.7-1-4-.6-5.6.7-3.6 3.6-4.6 2.3-1.9zm-20.2 61.1c-.6.4.6 1.6-1.3 1.5-1.1-.1-.5-1.1-.4-1.2l.7-1c.5-.7.8-.8 1.3-1.1.5-.3.9.5.9.5s.2.3.2.7c0 .3-.9.2-1.4.6zm10.5-10.1l-.9.7c-.1 0-.7.5-.9.2-.2-.3.1-.7.1-.8 0-.1.6-.8 1.1-1 .5-.3.8 0 .8 0 .3.7-.2.9-.2.9zm4.7-175.2s-.4 1.3-1.2 1.6c-1 .3-4.8.4-4.9.1-.1-.3 4.4-.7 6.1-2.4.4-.4 0 .7 0 .7zm-1.4-3.3c.3-.5.1.8.1.8s-.3 1.3-1 1.7c-.9.5-3.1 1.1-3.3.8 0-.2 2.9-1.1 4.2-3.3zm-6.2-15s.4 0 1 .3c.6.4 1 1.6 1 1.6s.1.2-.4.2c-.3 0-.3-.5-.6-.7-.4-.3-.7-.4-1.2-.6-.5-.2-1.2.1-1.3-.4 0-.6 1.5-.4 1.5-.4zm-4.6 3.3s.2-.6 1.1-1.1c.8-.5 1.9-.5 1.9-.5s.6 0 1.3.5c.7.5 1.3 2.2 1.3 2.2s.2 1.1-.3 1.5c-.5.4-1.3-.3-1.7-.9-.5-.6-.8-.8-1.5-1-.8-.3-2 .6-2.2 0 0-.2.1-.7.1-.7zM74.6 33c-.6.1-.2-.5-.2-.5s1.7-.7 2.8-1.3c1.8-.9 5.2-4.5 4.3-2.8-.4.8-1.6 1.8-1.6 1.8s-1.4 2-1.7 2.3c-1.3 1-2.9.4-3.6.5zM60.5 71.8l.1-.2s3-2 7.7-1.4c2.8.4 5.5 2.9 5.1 3.2-.4.3-1 0-1.2 0l-1-.5-1.5-.4S67 71.9 65 72c-2 .1-3.8.8-3.8.8s-.8.4-1-.1c-.1-.6.3-.9.3-.9zm7.4 56.3C61 122.8 52.6 112 53.6 111c.9-.8 4.3 4.2 9.4 9.7 5.4 5.8 11.7 11.3 11.9 12 .4 1.2-4.4-2.6-7-4.6zm15.7-74.7c-2.9 5-6.9 8.8-6.9 8.8-1.4 1-.5-.8-.5-.8s3.9-5.4 5.7-9.2c1.3-2.7 2.1-6.3 2.7-7 1.4-1.7.7 5.2-1 8.2zm8 54.8c-3-3.6-5.2-7.5-5.9-12.4-.2-1.1-.2-2.7.8-2.5.9.1.8 1.8.8 2.2.3 2.9 1.5 5.8 3.7 9.3 3.1 4.9 8.1 8.7 7.9 9-.5.5-5.5-3.4-7.3-5.6zm.9 93.5c-1.7 1.6-4.6 3.8-4.6 3.8h-.4v-.5l.1-.2.2-.3.2-.3.2-.3.6-.7 1.4-1.3 1.4-1.3 2.2-2.2s.8-.9 1.1-1.1c.3-.2.5-.4.8-.6.4-.2.9-.5 1.1-.3v.4c.1.3-2.5 3.2-4.3 4.9zm6.2-74c-1.3.9-1.8.8-2.6 1.7-.9 1.1-1.2 4.8-2.1 3.3-.9-1.5-.3-3.6 1.2-5.2 1.8-2.1 5.7-1.4 3.5.2zm4.7 65.8c.6-.2.9-.1.9-.1l.2.4c0 .1-.8 1.2-1.2 1.2-.5-.1-.3-.7-.3-.7s-.2-.6.4-.8zm17.1-40.7c-.9-.6.5-2.4.5-3.9 0-1.2-.2-2.1-.2-3.1s1-1.3 1-1.3c.2 0 .6.2 1.1 1.2s-.8 8.1-2.4 7.1zm30.6-28.6c-.2 4.2-.4 7.2-2.9 10.4-3 3.9-8.2 7.9-7.1 4.7.7-1.9 5.3-4.3 7.1-9.6 1-3.2 1.2-6.2 1.2-6.2l-.2-6.1s-.1-.5-.1-1.2c.3-.8.7-.2.7-.2l.2.3c0 .2 1.2 4.9 1.1 7.9z">
                    </path>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Logo -->

            <!-- Toggle button for small screens -->


            <!-- Navbar content -->

            <div class="collapse navbar-collapse" id="navbarContent">

                <!-- Nav right -->
                <ul class="navbar-nav me-auto text-uppercase ">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Racing</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.AboutPage') }}">Sports Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collections</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.linhkien') }}">Linh kiện</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.AboutPage') }}">About Us</a>
                    </li> --}}
                    <!-- Dropdown menu -->
                </ul>
                <!-- /nav left -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Museum
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Service 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Service 2</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Service 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="StoreDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Store</a>
                        <ul class="dropdown-menu" aria-labelledby="StoreDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('store.index') }}">Car</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Spare Parts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-comments"></i></a>
                    </li>




                    <li class="nav-item">
                        <form action="{{ route('search') }}" method="GET" class="nav-link">
                            <input type="text" name="SearchValue" id="SearchInput">
                            <ul id="suggestionList" class="bg-warning" style="display: none;"></ul>

                            <script lang="Javascript">
                                var searchInput = document.getElementById('SearchInput');
                                var suggestionList = document.getElementById('suggestionList');

                                // Lắng nghe sự kiện khi người dùng nhập vào input
                                searchInput.addEventListener('input', function() {
                                    var query = this.value;

                                    // Ẩn danh sách gợi ý khi không có kết quả hoặc query trống
                                    if (query.length === 0) {
                                        suggestionList.style.display = 'none';
                                        return;
                                    }

                                    // Gửi yêu cầu AJAX để lấy các gợi ý
                                    $.ajax({
                                        url: "{{ route('store.suggest') }}",
                                        method: 'GET',
                                        data: {
                                            query: query
                                        },
                                        success: function(response) {
                                            suggestionList.innerHTML = '';

                                            // Hiển thị danh sách gợi ý và hiển thị nó
                                            response.forEach(function(store) {
                                                var listItem = document.createElement('li');
                                                listItem.textContent = store.name;
                                                suggestionList.appendChild(listItem);
                                            });

                                            suggestionList.style.display = 'block';
                                        }
                                    });
                                });
                            </script>
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="UserDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i>
                        </a>

                        @guest
                            <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}"><i
                                            class="fa-solid fa-user-gear"></i>
                                        Đăng nhập</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}"><i
                                            class="fa-solid fa-right-from-bracket"></i>Tạo tài khoản</a>
                                </li>
                            </ul>
                        @else
                            <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                                <li>
                                    <a class="dropdown-item" href="">
                                        <i class="fa-solid fa-user-gear"></i>
                                        Cài đặt
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('cart.index') }}">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        Đơn hàng
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('my-account.orders') }}">
                                        <i class="fa-solid fa-file-invoice-dollar"></i>
                                        Danh sách hóa đơn
                                    </a>
                                </li>
                                <li>
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                        <a class="dropdown-item" role="button"
                                            onclick="document.getElementById('logout').submit();">
                                            <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
                                        </a>
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        @endguest

                    </li>
                </ul>





            </div>
        </div>
    </nav>

    <div class="container-fluid" style="padding: 0; margin-top: 80px">
        @yield('sect1')
    </div>
    <div class="container">
    </div>
    <div class="container-fluid bg-white" style="padding:0; margin-top: 80px">
        @yield('sect2')
    </div>
    <div class="container-fluid bg-light" style="margin-top: 80px">
        @yield('sect3')
    </div>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            @yield('sect4')
        </div>
    </div>
    <div class="container-fluid bg-dark-subtle">
        @yield('sect5')
    </div>
    <div class="container">


    </div>
    <section>

    </section>
    <section class="container-fluid bg-dark text-white d-none d-lg-blo">
        <nav class="container bg-dark text-light navbar-collapse ">
            <div class="row row-cols-md-3 row-cols-lg-5 d-none d-md-flex mt-3 ">
                <div class="col nav-item">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="text-uppercase nav-link">Racing</a></li>
                        <li class="nav-item">Charles Leclerc</li>
                        <li class="nav-item">Carlos Sainz</li>
                        <li class="nav-item">Hypercar</li>
                        <li class="nav-item">Esports</li>
                    </ul>
                </div>
                <div class="col nav-items">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="text-uppercase nav-link">Sports Cars</a></li>
                        <li class="nav-item">Range</li>
                        <li class="nav-item">Configure your Ferrari</li>
                        <li class="nav-item">Owners</li>
                        <li class="nav-item">MyFerrari</li>
                    </ul>
                </div>
                <div class=" col nav-items">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="text-uppercase nav-link">Collections</a></li>
                        <li class="nav-item">Men</li>
                        <li class="nav-item">Women</li>
                        <li class="nav-item">Kids</li>
                        <li class="nav-item">Shoes</li>
                    </ul>
                </div>
                <div class="col nav-items">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="text-uppercase nav-link">Experiences</a></li>
                        <li class="nav-item">Corse Clienti</li>
                        <li class="nav-item">Ferrari Esports Series</li>
                        <li class="nav-item">Ferrari Museums</li>
                        <li class="nav-item">Ferrari Land Barcelona</li>
                    </ul>
                </div>
                <div class="col nav-items">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="text-uppercase nav-link">About Us</a></li>
                        <li class="nav-item">Corporate</li>
                        <li class="nav-item">Media Centre</li>
                        <li class="nav-item">News</li>
                        <li class="nav-item">Magazine</li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
        <nav class="container bg-dark text-light navbar-collapse">
            <div class="row row-cols-md-3 row-cols-lg-3 d-none d-md-flex mt-3 text-uppercase">
                <div class="col nav-item py-3"><i class="pe-2 fa-brands fa-square-facebook"></i>Facebook</div>
                <div class="col nav-item py-3"><i class="pe-2 fa-brands fa-square-instagram"></i>Intagram</div>
                <div class="col nav-item py-3"><i class="pe-2 fa-brands fa-tiktok"></i>Tiktok</div>
                <div class="col nav-item py-3"><i class="pe-2 fa-brands fa-twitch"></i>Twitch</div>
                <div class="col nav-item py-3"><i class="pe-2 fa-brands fa-twitter"></i>Twitter</div>
                <div class="col nav-item py-3"><i class="pe-2 fa-brands fa-youtube"></i>Youtube</div>
            </div>
        </nav>
        <hr>
        <div class="container text-center justify-center text-white-50">
            <div class="row ps-5 pe-5 pb-5">
                <div class="col-1 ps-5 pe-5"></div>
                <div class="col">
                    <span>Ferrari N.V. - Holding company - A company under Dutch law, having its official seat in
                        Amsterdam,
                        the Netherlands and its corporate address at Via Abetone Inferiore No. 4, I-41053 Maranello
                        (MO),
                        Italy, registered with the Dutch trade register under number 64060977</span>
                    <span><br></span>
                    <span>Ferrari S.p.A. - A company under Italian law, having its registered office at Via Emilia Est
                        No.
                        1163, Modena, Italy, Companies' Register of Modena, VAT and Tax number 00159560366 and share
                        capital
                        of Euro 20,260,000</span>
                    <span><br></span>
                    <span>Copyright 2023 - All rights reserved</span>
                </div>
                <div class="col-1 ps-5 pe-5"></div>
            </div>
        </div>

    </section>

    <style>
        .corner-button {
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: 2;
            /* Để nút nổi lên trên phần tử chứa */
        }
    </style>
</body>

</html>
