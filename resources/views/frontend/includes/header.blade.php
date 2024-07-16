<!--Header Starts Here-->
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo" href="{{ route('home') }}">
        <img src="{{ asset('/') }}frontend/assets/images/logo.png" alt="logo">
<!--       <h2>Shamima Haque</h2>-->
        </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}" >About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('services') }}">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
</header>
<!--Header Ends Here-->
