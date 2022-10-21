<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <div class="layout-space">
        @yield('content')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
