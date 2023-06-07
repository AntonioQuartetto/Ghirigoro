<x-main>

<x-slot name="title">Aggiungi Autore</x-slot>


<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4 formContainer">
          <div class="text-center">
            <h2 class="p-4">Aggiungi un Autore</h2>
            <p></p>
            
          </div>

          <form action="{{route('authors.store')}}" method="POST" >

                @method('POST')
                @csrf

            <div class="row">
            

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
            
            
            <!-- Name Input -->
            <div class="col-6  mb-3">
              <label class="form-label"><b>Nome:</b></label>
              <input class="input-custom" type="text" name="name" value="{{ old('name') }}" placeholder="Nome Autore"/>  
              <span class="text-danger">
           
                @error('name')
                  {{$message}}
                @enderror

              </span>         
            </div>

              <!-- Surname Input -->
            <div class="col-6  mb-3">
              <label class="form-label"><b>Cognome:</b></label>
              <input class="input-custom" type="text" name="surname" value="{{ old('surname') }}" placeholder="Cognome Autore"/>  
              <span class="text-danger">
           
                @error('surname')
                  {{$message}}
                @enderror

              </span>         
            </div>
           

               <!-- Birthday Input -->
            <div class="col-6  mb-3">
              <label class="form-label"><b>Data di Nascita: </b></label>
              <input class="input-custom" type="date" name="birthday" value="{{ old('birthday') }}" placeholder="Data di Nascita"/>  
              <span class="text-danger">
           
                @error('birthday')
                  {{$message}}
                @enderror

              </span>         
            </div>
          

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn-user py-3" id="submitButton" type="submit">Aggiungi Autore</button>
            </div>
          </form>
     

        </div>
      </div>
    </div>
  </div>
</div>


</x-main>