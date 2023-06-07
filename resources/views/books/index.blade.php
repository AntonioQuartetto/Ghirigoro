

<x-main>

    <x-slot name="title">Library</x-slot>


  <div class="section-custom">
  

        <div class="my-3 text-center">

            <h3>Lista Libri</h3>
            <span> <a class="btn btn-success" href="{{route('books.create')}}">Add Book</a></span>

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
                    <span>

                        <a class="btn-list" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$book->id}}').submit();">Elimina</a>
                        <form class="d-none" id="form-delete-{{$book->id}}" action="{{route('books.destroy', ['book' => $book->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        </form>

                    </span>

                    @endauth




                   </div>
                </li>
                    
                @endforeach

            </ul>

  </div>


</x-main>
