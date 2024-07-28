<!doctype html>
<html lang="en" dir="lrt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="These template is suitable for charity , NGO , non-profit organization , donation , church or a fundraising website.">
    <meta name="keywords"
        content="charity, causes, donate, charity foundation, charity hub, charity theme, donations, non profit, fundraiser,social, ngo, non-profit, nonprofit, organization, volunteer">
    <meta name="author" content="initTheme">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Charity & Donation HTML Template">
    <meta property="og:site_name" content="donate Website">
    <meta property="og:site_name" content="Charitfix">
    <meta property="og:url" content="www.Charitfix.com">
    <meta property="og:image" content="www.Charitfix.com">
    <meta property="og:description"
        content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization">
    <meta name="twitter:title" content="Charity & Donation HTML Template">
    <meta name="twitter:description"
        content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization">
    <meta name="twitter:image" content="www.Charitfix.com">
    <meta name="twitter:card" content="summary">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield("title", "Mustatrd Seed")
    </title>

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- FAVICON --}}
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset('assets/images/icon/favicon.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-5.3.0.min.css')}}">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/remixicon.css')}}">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugin.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main-style.css')}}">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rtl.css')}}"> -->
    @livewireStyles
</head>

<body>

    <div class="loading-page" id="preloader-active">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <x-menu />
    {{$slot}}
    <x-footer />

    @livewireScripts
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-5.3.0.min.js')}}"></script>
    <!-- Plugin -->
    <script src="{{ asset('assets/js/plugin.js')}}"></script>
    <!-- Main js-->
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>