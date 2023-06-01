
<nav class="navbar navbar-expand-lg navbar-dark p-3">
    <div class="container-fluid">
      <img class ="px-3" src="{{Storage::url('/images/logo/hogwarts-logo.png')}}" alt="Logo">
      <a class="navbar-brand" href="{{route('homepage')}}">Ghirigoro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">

          <li class="nav-item">
            <a class="nav-link mx-2 @if (Route::currentRouteName() == 'homepage') active @endif" aria-current="page" href="{{route('homepage')}}">Homepage</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link mx-2 @if (Route::currentRouteName() == 'book.index') active @endif" aria-current="page" href="{{route('book.index')}}">Lista Libri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 @if (Route::currentRouteName() == 'category.index') active @endif" aria-current="page" href="{{route('category.index')}}">Categorie</a>
          </li>

          @auth

          <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName() == 'book.create') active @endif" href="{{route('book.create')}}">Add Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName() == 'category.create') active @endif" href="{{route('category.create')}}">Add Category</a>
          </li>

          @endauth
          
 
          @auth
          <li class="nav-item"><b class="nav-link">Benvenuto {{ Auth::user()->name }}</b></li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
          <li>

          @else

          <li class="nav-item"><a class="nav-link @if (Route::currentRouteName() == 'register') active @endif" href="{{ route('register') }}">Registrati</a></li>
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteName() == 'login') active @endif" href="{{ route('login') }}">Accedi</a></li>

          @endauth
        </ul>
      </div>
    </div>
</nav>