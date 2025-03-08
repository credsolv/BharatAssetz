<!DOCTYPE html>
<html lang="en">

  
@include('partials.header')

<body>

    <div class="main-wrapper">
        @include('partials.header-admin')
        @include('partials.sidebar-admin') <!-- Admin Sidebar -->

        <div class="page-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
      
      

    </div>

    @include('partials.footer') <!-- Common Footer -->

   
</body>
</html>
