

<x-main>

<x-slot name="title">Modifica Categorie</x-slot>

<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4 formContainer">
          <div class="text-center">
            <h2 class="p-4">Modifica la categoria {{$category->name}}</h2>
            <p></p>
            
          </div>

          <form action="{{route('category.update', ['category' => $category->id])}}" method="POST" >

                @method('PUT')
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
            
            
            <!-- Category Input -->
            <div class="col-6  mb-3">
              <label class="form-label"><b>Categoria:</b></label>
              <input class="input-custom" type="text" name="name" value="{{$category->name}}" placeholder="Categoria"/>  
              <span class="text-danger">
           
                @error('name')
                  {{$message}}
                @enderror

              </span>         
            </div>
           
          

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Salva</button>
            </div>
          </form>
     

        </div>
      </div>
    </div>
  </div>
</div>


</x-main>