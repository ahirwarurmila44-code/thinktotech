<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('description', 'ThinkToTech builds modern websites and powerful software solutions for growing businesses.')">

   <title>
        @yield('title', 'ThinkToTech — Modern Websites. Powerful Software.')
    </title>

    <meta
        name="description"
        content="@yield('meta_description', 'ThinkToTech builds modern websites, custom Laravel software, business management systems and APIs for growing businesses.')"
    />

    <meta
        name="keywords"
        content="@yield('meta_keywords', 'Laravel development, website development, custom software, business software, API development, ThinkToTech')"
    />

    <meta name="author" content="ThinkToTech">

    <meta
        name="robots"
        content="index, follow"
    />

    <meta
        property="og:title"
        content="@yield('og_title', 'ThinkToTech — Modern Websites. Powerful Software.')"
    />

    <meta
        property="og:description"
        content="@yield('og_description', 'Modern websites and powerful custom software for growing businesses.')"
    />

    <meta
        property="og:type"
        content="website"
    />

    <meta
        property="og:url"
        content="{{ url()->current() }}"
    />

    <meta
        property="og:image"
        content="{{ asset('images/og-image.jpg') }}"
    />

    <meta
        name="twitter:card"
        content="summary_large_image"
    />

    <meta
        name="twitter:title"
        content="@yield('og_title', 'ThinkToTech — Modern Websites. Powerful Software.')"
    />

    <meta
        name="twitter:description"
        content="@yield('og_description', 'Modern websites and powerful custom software for growing businesses.')"
    />

    <meta
        name="twitter:image"
        content="{{ asset('images/og-image.jpg') }}"
    />

    <link
        rel="canonical"
        href="{{ url()->current() }}"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>