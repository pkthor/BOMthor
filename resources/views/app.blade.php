<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta property="og:site_name" content="BOM thor" />
	    <meta property="og:title" content="BOM thor" />
	    <meta property="og:description" content="Thorderson Family audio of the Book of Mormon" />
	    <meta property="og:image" itemprop="image" content="https://www.bomthor/img/moroni.jpg" />
		<meta property="og:url" content="https://www.bomthor.xzy" />
		<meta property="og:type" content="website" />
	    <meta property="og:image:width" content="512">
	    <meta property="og:image:height" content="512">
		<!-- <meta property="fb:app_id" content="375423224454196"/> -->


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
