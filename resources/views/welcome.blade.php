<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    <div id="app">

        <carousel :autoplay="true">

            <img src="https://picsum.photos/seed/one/640/480">
            <img src="https://picsum.photos/seed/two/640/480">
            <img src="https://picsum.photos/seed/three/640/480">
            <img src="https://picsum.photos/seed/four/640/480">
            <img src="https://picsum.photos/seed/five/640/480">
            <img src="https://picsum.photos/seed/six/640/480">
        </carousel>
    </div>

    <script src="/js/app.js"></script>

</body>

</html>