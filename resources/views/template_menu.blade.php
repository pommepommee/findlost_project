<div class="menu">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/img/logo_placemaker.png" height="70px" width="70px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="/accueil" style="color:white;">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" style="border-right: 1px solid #FFFF"></li>
        <li class="nav-item">
          <a class="nav-link" href="#">Objet trouvé ?</a>
        </li>
        <li class="nav-item" style="border-right: 1px solid #FFFF"></li>
        @if(Auth::check())
          @include('menu_connected')
        @else
          @include('menu_disconnected')
        @endif
    </div>
  </nav>
</div>
