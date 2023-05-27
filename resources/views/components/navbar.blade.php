
    <nav class="navbar navbar-expand-lg navbar-dark p-3">
    <div class="container-fluid">
      <img class ="px-3" src="{{Storage::url('/images/logo/hogwarts-logo.png')}}" alt="Logo">
      <a class="navbar-brand" href="{{route('book.index')}}">Ghirigoro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 @if (Route::currentRouteName() == 'book.index') active @endif" aria-current="page" href="{{route('book.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if (Route::currentRouteName() == 'book.create') active @endif" href="{{route('book.create')}}">Add Book</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Blog</a></li>
              <li><a class="dropdown-item" href="#">About Us</a></li>
              <li><a class="dropdown-item" href="#">Contact us</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </nav>