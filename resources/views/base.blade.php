<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/solar/bootstrap.min.css" integrity="sha512-0BjJSwKzc+sx3vM/B9nEU98M/hCLM2bcIWrzGe9fqJZFVicDjxu2vrHd0/7ildD+23p5JsQNo8IEL+sOb+A1iw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
<header>    
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">NewHome 🏡</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('house.index') }}">Accueil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('house.create') }}">Ajouter une Home</a>
              </li>
            </ul>
          </div>
          @auth
          @if (Auth::check())
          <div class="nav-item">
            <a href="" class="nav-link me-2 text-light-emphasis">{{auth()->user()->name}}</a>
            <a class="nav-link me-4 text-light-emphasis" href="{{ route('auth.logout') }}"> Se déconnecter</a>
          </div>   
          @endif
          @endauth
          @guest
          <div class="nav-item">
            <a class="nav-link me-4 text-light-emphasis" href="{{ route('auth.login') }}"> Se connecter</a>
          </div>
          @endguest
        </div>
      </nav>
      
</header> 
@if (session('success'))
  <div class="container mt-4">
      <p class="alert alert-success">{{session('success')}}</p>
  </div>
@endif 
@if (session('edit'))
  <div class="container mt-4">
      <p class="alert alert-primary">{{session('edit')}}</p>
  </div>
@endif 
@if (session('delete'))
  <div class="container mt-4">
      <p class="alert alert-warning">{{session('delete')}}</p>
  </div>
@endif 
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>