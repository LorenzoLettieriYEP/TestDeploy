<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme='dark'>
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('game_create')}}">Crea Gioco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('game_index')}}">Tutti i giochi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          {{--? Vedi il contenuto solo se NON sei loggato --}}
          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('register')}}">Registrati</a>
          </li>
          @endguest
          {{--? Vedi il contenuto solo se SEI loggato --}}
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                    <button class="nav-link active">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @endauth
        </ul>
      </div>
    </div>  
  </nav>