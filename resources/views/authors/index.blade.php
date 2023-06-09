

<x-main>

<x-slot name="title">Autori</x-slot>



  <div class="section-custom">
  

        <div class="d-flex justify-content-between  mx-2 my-4 p-4">

            <h3>Lista Autori</h3>
            <span> <a class="btn btn-success" href="{{route('authors.create')}}">Aggiungi Autore</a></span>

        </div>

            @if (session('success')) 
                <span class="badge text-bg-danger">
                    {{session('success')}}
                </span>
            @endif

            <ul>
                
                @foreach ($authors as $author)

                <li class="list-group-item d-flex justify-content-between ">
                    <div>
                        <b>Nome: </b>{{$author->name}}
                    </div>
                   <div>
                    <span>
                        <a href="{{route('authors.show', ['author' => $author])}}" type="button" class="btn-list">Dettagli</a>
                    </span>



                    @auth
                    <span>
                        <a href="{{route('authors.edit', ['author' => $author->id])}}" type="button" class="btn-list">Modifica</a>
                    </span>
                    <span>

                        <a class="btn-list" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$author->id}}').submit();">Elimina</a>
                        <form class="d-none" id="form-delete-{{$author->id}}" action="{{route('authors.destroy', ['author' => $author->id])}}" method="POST">
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