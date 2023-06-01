<x-main>

<x-slot name="title">Accedi</x-slot>

 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5"><b>Accedi</b></h5>
            <form action="{{route('login')}}" method="POST">
              @csrf
              @method('POST')
              
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
               @error('email') <span class="small text-danger">{{ $message }}</span> @enderror

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
               @error('password') <span class="small text-danger">{{ $message }}</span> @enderror

              <div class="d-grid">
                <button class="btn-user fw-bold" type="submit">Accedi</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-main>