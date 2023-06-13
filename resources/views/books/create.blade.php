

<x-main>

  <x-slot name="title">Add Book</x-slot>

  <div class="container px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card border-0 rounded-3 shadow-lg">
          <div class="card-body p-4 formContainer">
            <div class="text-center">
              <h2 class="p-4">Aggiungi un libro</h2>
              <p></p>
              
            </div>

            <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">

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
              
              
              <!-- Title Input -->
              <div class="col-6  mb-3">
                <b><span class="text-danger">
            
                  @error('title')
                    *
                  @enderror

                </span></b> 
                <label class="form-label"><b>Titolo:</b></label>
                <input class="input-custom" type="text" name="title" value="{{ old('title') }}" placeholder="Titolo"/>  
                        
              </div>
            
              
              <!-- Pages Input -->
              <div class="col-6 mb-3">
              <b><span class="text-danger">
            
                  @error('pages')
                    *
                  @enderror

                </span></b>
                <label class="form-label"><b>Pagine:</b></label>
                <input class="input-custom" type="text" name="pages" value="{{ old('pages') }}" placeholder="Pagine"/>
              </div>

              <!-- Author Input -->
              <div class="col-6 mb-3">
              <b><span class="text-danger">
            
                  @error('author_id')
                    *
                  @enderror

                </span></b>
              <label class="form-label"><b>Autore:</b></label>

                  <select class="input-custom" name="author_id" id="author_id">
                  
                      <option value="" disabled selected>
                        Seleziona Autore
                      </option> 

                    @foreach ($authors as $author)
                      <option value="{{$author->id}}">
                        {{$author->name}} {{$author->surname}}
                      </option>  
                    @endforeach
                    
                  </select>

                
              </div>

              <!-- Year Input -->
              <div class="col-6 mb-3">
              <b><span class="text-danger">
            
                  @error('year')
                    *
                  @enderror

                </span></b>
                <label class="form-label"><b>Anno:</b></label>
                <input class="input-custom" type="text" name="year" value="{{ old('year') }}" placeholder="Anno"/> 
              </div>

              <!-- Category -->
            
              <div class="col-6 mb-3">
                
                <span><b>Categorie:</b></span>

                 @foreach ($categories as $category)
                  <div class="form-check">
                   
                      <b>
                        <span class="text-danger">
              
                        @error('categories')
                          *
                        @enderror

                        </span>
                      </b>

                      <input class="form-check-input" 
                      type="checkbox" name="categories[]" 
                      value="{{$category->id}}" 
                      id="category_id"/>
                     
                      <label class="form-check-label" for="category_id"><b>{{$category->name}}</b></label>
                
                  </div>
                  @endforeach

              </div>
            




                <!-- File Input -->
              <div class="col-6 mb-3">
              <b><span class="text-danger">
            
                  @error('image')
                    *
                  @enderror

                </span></b>
                <label class="form-lable"><b>Immagine Del Libro:</b></label>
                <input class="input-custom" type="file" name="image"/> 
              </div>

              <!-- Add button -->
              <div class="d-grid">
                <button class="btn-user py-3" id="submitButton" type="submit">Aggiungi Libro</button>
              </div>
            </form>
      

          </div>
        </div>
      </div>
    </div>
  </div>


</x-main>