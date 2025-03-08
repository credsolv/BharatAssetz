<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body>

    @include('partials.navbar')

    <div class="">
        @yield('content')
    </div>

    @auth
    <div class="text-center mt-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
    @endauth

    @include('partials.footer')

  
   
</body>
</html>
