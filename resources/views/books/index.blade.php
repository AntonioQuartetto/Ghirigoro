
<x-main>

    <x-slot name="title">Library</x-slot>


  <div class="section-custom">
  

        <div class="d-flex justify-content-between  mx-2 my-4 p-4">

            <h3>Lista Libri</h3>

            <span> <a class="btn btn-success" href="{{route('books.create')}}">Aggiungi Libro</a></span>

            <span>
            
                <form action="{{ route('search') }}" method="POST" class="d-flex" role="search">
                    @method("POST")
                    @csrf
                    <input name="search" class="form-control me-2" type="search" placeholder="Cerca un Libro" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>

            </span>
            
        </div>

            @if (session('success')) 
                <span class="badge text-bg-danger">
                    {{session('success')}}
                </span>
            @endif

            <ul>
                
                @foreach ($books as $book)
                

                <li class="list-group-item d-flex justify-content-between ">
                    <div>
                        <b>Titolo: </b>{{$book->title}}
                    </div>
                   <div>
                    <span>
                        <a href="{{route('books.show', ['book' => $book])}}" type="button" class="btn-list">Dettagli</a>
                    </span>



                    @auth
                    <span>
                        <a href="{{route('books.edit', ['book' => $book->id])}}" type="button" class="btn-list">Modifica</a>
                    </span>
                  

                    @endauth




                   </div>
                </li>

                    
                @endforeach

            </ul>

  </div>


</x-main>
