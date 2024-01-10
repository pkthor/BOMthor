<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta property="og:site_name" content="Thor BofM" />
    <meta property="og:title" content="Thor BofM" />
    <meta property="og:description" content="The Book of Mormon read by members of the Thorderson family." />
    <meta property="og:image" itemprop="image" content="https://www.ldmaltavoce.com/img/christus.jpg/" />
    <meta property="og:url" content="https://www.ldmaltavoce.com/thorBOM" />
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="fb:app_id" content="375423224454196"/>

    <title inertia></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
        @env ('local')
            <!-- <script src="http://localhost:8080/js/bundle.js"></script> -->
        @endenv
		
		<link itemprop="thumbnailUrl" href="https://www.ldmaltavoce.com/img/christus.jpg">

		<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
		<link itemprop="url" href="https://www.ldmaltavoce.com/img/christus.jpg">
		</span>
    </body>
</html>
