<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="header">
      <div class="container-fluid">
      
          
                                    
    
        <nav class=" top-nav navbar navbar-expand-lg  navbar-dark bg-dark ">
            <div class="container">
              <a class="navbar-brand" href="#">Relax</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5  ">
            <li class="nav-item">
              <a class="nav-link active fs-5" aria-current="page" href="{{'relax'}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="{{'roomu'}}">room</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#services">services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="/party2">party</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="/roomh">type-room</a>
          </li>
          <li class="nav-item">
              <a class="nav-link fs-5" href="#call us">call us</a>
            </li>
            <div class="d-flex">
            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest</div>
             </ul>

        <!--    
          <div class="d-flex" > <a class="nav-link text-light " href="{{'login'}}"> login</a>
        
          <a class="nav-link text-light" href="{{('register')}}"> register</a> 
         
        </div>-->
      </div></div>

        </nav></div></div>
        @yield('content')
        
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/animation.js"></script>
      <script src="assets/js/imagesloaded.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="asset/vendor/aos/aos.js"></script>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 
</script>
<script src="{{asset('js-file/counter2.js')}}"></script>
<script src="js-file/stare.js"></script>

<script>
function myFunction() {
setTimeout(
    function() {
      document.getElementById('loading').style.display='none';
    }, 3);
}</script>
</body>