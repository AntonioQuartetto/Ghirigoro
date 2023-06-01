<x-main>

<x-slot name="title">Accedi</x-slot>

 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="section-custom">
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

              <div class="d-flex flex-row align-items-center mb-4">
                <label class="form-outline flex-fill mb-0 p-3"><b>Email address</b></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                
                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
              </div>
               

              <div class="d-flex flex-row align-items-center mb-4">
              <label class="form-outline flex-fill mb-0 p-3"><b>Password</b></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
              </div>
               

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
