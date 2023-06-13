

<x-main>

  <x-slot name="title">Modifica</x-slot>

  <div class="container px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card border-0 rounded-3 shadow-lg">
          <div class="card-body p-4 formContainer">
            <div class="text-center">
              <h2 class="p-1 my-3">Modifica il libro</h2>
              <h3 class="p-1 mb-4">{{$book->title}}</h3>
              
            </div>

            <form action="{{route('books.update', ['book' => $book->id])}}" method="POST" enctype="multipart/form-data">

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
              
              
              <!-- Title Input -->
              <div class="col-6  mb-3">
                <b><span class="text-danger">
            
                  @error('title')
                    *
                  @enderror

                </span></b> 
                <label class="form-label"><b>Titolo:</b></label>
                <input class="input-custom" type="text" name="title" value="{{$book->title}}" placeholder="Titolo"/>  
                        
              </div>
            
              
              <!-- Pages Input -->
              <div class="col-6 mb-3">
              <b><span class="text-danger">
            
                  @error('pages')
                    *
                  @enderror

                </span></b>
                <label class="form-label"><b>Pagine:</b></label>
                <input class="input-custom" type="text" name="pages" value="{{$book->pages}}" placeholder="Pagine"/>
              </div>

              <!-- Author Input -->
              <div class="col-6 mb-3">
              <b><span class="text-danger">
            
                  @error('author')
                    *
                  @enderror

                </span></b>
              <label class="form-label"><b>Autore:</b></label>
                 <select class="input-custom" name="author_id" id="author_id">

                  
                    @foreach ($authors as $author)
                      <option @if ($book->author_id == $author->id) selected @endif
                       value="{{$author->id}}">
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
                <input class="input-custom" type="text" name="year" value="{{$book->year}}" placeholder="Anno"/> 
              </div>

              <!-- Category -->

              <div class="col-6 mb-3">

                <span><b>Categorie:</b></span>

                 @foreach ($categories as $category)
                  <div class="form-check">
                   
                      <b>
                        <span class="text-danger">
              
                        @error('year')
                          *
                        @enderror

                        </span>
                      </b>

                      <input class="form-check-input"
                       type="checkbox"
                        name="categories[]" 
                       value="{{$category->id}}" 
                       id="category_id"
                        {{-- @checked($book->categories->contains($category->id)) --}}
                        @if ($book->categories->contains($category->id))
                            checked
                        @endif
                        >
                      <label class="form-check-label" for="category_id"><b>{{$category->name}}</b></label>
                
                  </div>
                  @endforeach
                  
              </div>

                <!-- File Input -->

                <div class="col-6 mb-3">

                  <div class="container">
                    <h4>Immagine attuale, voi cambiarla?</h4>
                    <img class="w-50" src="{{empty($book->image) ? Storage::url('/images/placeholder/placeholder-book.png') : Storage::url($book->image)}}" alt="Copertina del libro: {{$book->title}}">
                  </div>

                </div>


                <div class="col-6 mb-3">
                  <label class="form-lable"><b>Nuova Immagine:</b></label>
                  <input class="input-custom" type="file" name="image"/> 
                </div>

                

              <!-- Submit button -->
              <div class="d-grid my-3">
                <button class="btn-list btn-lg" id="submitButton" type="submit">Salva</button>
              </div>
            </form>

              <!-- Delete Button -->
            <div class="d-grid text-center">
            
              <a class="btn-list btn-lg" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$book->id}}').submit();">Elimina</a>
              <form class="d-none" id="form-delete-{{$book->id}}" action="{{route('books.destroy', ['book' => $book->id])}}" method="POST">
              @method('DELETE')
              @csrf
              </form>

      
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


</x-main>