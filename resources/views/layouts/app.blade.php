<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
   <header>
    <nav class="navbar bg-secondary ">
        <div class="container text-dark">
          <div class="d-flex">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 text-dark">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 text-dark">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 text-dark ">Register</a>
                    @endif
                @endauth
            </div>
        @endif
          </div>
            <div class="d-flex">
              <img src="img/logo.png" alt="" height="50" width="50"> 
              </div>
           <div class="d-flex">
              <h3 style="font-family: 'Cairo', sans-serif;">عالم الهواتف</h3>
           </div>
          
      </nav>

   </header>


       <main>@yield('content')</main> 


       <footer class="text-center text-white" style="background-color: #e8e9e9;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"><i class="fa fa-twitter"></i></a>
      
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"><i class="	fa fa-facebook-square"></i></a>
      
              <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"><i class="fa fa-snapchat-square"></i></a>
          
          </section>
        </div>
        <div class="text-center text-dark p-3 bg-secondary">
            بواسطة نجود المطيرى
        </div>
      </footer>
    </div>
</body>
</html>
