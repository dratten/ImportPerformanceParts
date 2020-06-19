<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Import Perfomance Parts</title>
        <link href="/css/bootstrap.css" rel="stylesheet" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/css/prettyPhoto.css" rel="stylesheet" />
        <link href="/css/price-range.css" rel="stylesheet" />
        <link href="/css/animate.css" rel="stylesheet" />
        <link href="/css/main.css" rel="stylesheet" />
        <link href="/css/responsive.css" rel="stylesheet" />

        <link rel="shortcut icon" href="images/ico/favicon.ico" />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="144x144"
            href="images/ico/apple-touch-icon-144-precomposed.png"
        />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="114x114"
            href="images/ico/apple-touch-icon-114-precomposed.png"
        />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="72x72"
            href="images/ico/apple-touch-icon-72-precomposed.png"
        />
        <link
            rel="apple-touch-icon-precomposed"
            href="images/ico/apple-touch-icon-57-precomposed.png"
        />
    </head>
    <body>
      @include('nav')

      @yield('content')

    </body>

</html>
