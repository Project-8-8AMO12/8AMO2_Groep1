<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>@yield('title')</title>
</head>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<body>
    <section id="main_template_class">
        <header class="">
            @include('pages.components.nav')
        </header>
        <main class="justify-content-center">
            @yield('body')
        </main>
    </section>
    <footer>
        @include('pages.components.footer')
    </footer>
</body>

</html>