

<x-main>

    <x-slot name="title">Library</x-slot>


  <div class="section-custom">
  

        <div class="my-3 text-center">

            <h3>Lista Libri</h3>

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
                    <span>
                        <a href="{{route('books.show', ['book' => $book])}}" type="button" class="btn-list">Info</a>
                    </span>
                </li>
                    
                @endforeach

            </ul>

  </div>

    
</x-main>
