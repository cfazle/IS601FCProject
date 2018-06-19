<!doctype html>

<html lang="en">

@include("includes.head")

<body>

<main class="py-4">
    @yield('content')
</main>

<div class="container">
    @include('includes.menu')

    <main role="main">
        @yield('content')
    </main>


    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
</div>


</body>

</html>

