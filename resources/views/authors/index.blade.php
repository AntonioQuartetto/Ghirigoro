

<x-main>

<x-slot name="title">Autori</x-slot>


<h1 class="text-white">Index Autori</h1>





  <div class="section-custom">
  

        <div class="my-3 text-center">

            <h3>Lista Libri</h3>
            <span> <a class="btn btn-success" href="{{route('authors.create')}}">Add Author</a></span>

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
                        <form class="d-none" id="form-delete-{{$author->id}}" action="{{route('authors.delete', ['book' => $author->id])}}" method="POST">
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