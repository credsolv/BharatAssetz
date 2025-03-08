<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - Bharat Assetz</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    @include('partials.header') <!-- Common Header -->

    <div class="main-wrapper">
        @include('partials.sidebar-branch') <!-- Branch Sidebar -->

        <div class="page-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer') <!-- Common Footer -->

</body>
</html>
