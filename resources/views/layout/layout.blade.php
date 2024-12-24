<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economic Space</title>
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    
    {{-- custom css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tutor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mentorship.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    {{-- logo for page title --}}
    <link rel="icon" type="image/svg" href="{{ asset('assets/socmed/logo_favicon.svg') }}" sizes="32x32">

    {{-- animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    {{-- icon --}}
    <script src="https://kit.fontawesome.com/92b0bdfcf0.js" crossorigin="anonymous" defer></script>
    {{-- typed animation --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    @vite(['resources/css/app.css', 'resources/css/ds.css'])
    {{-- meta description --}}
    <meta name="description"
        content="Ultimate hub for university students to support them Academically with Expert Tutors, while providing with Insights for their Future Career Plan through Insights Exploration with Mentors">
</head>

<body class="overflow-x-hidden">

    @if (!(isset($hideNavbar) && $hideNavbar))
        @include('layout.navbar')
    @endif

    <main class="{{!(isset($hideNavbar) && $hideNavbar) ? "pt-20 md:pt-32" : ""}}max-w-[100vw] min-h-[100vh] bg-white text-black">
        @yield('content')
    </main>


    @if (!(isset($hideNavbar) && $hideNavbar))
        @include('layout.footer')
    @endif
    

    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>

    {{-- animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    {{-- jquery --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    {{-- custom js --}}
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>
