

<x-main>

<x-slot name="title">Library</x-slot>




    



    @if (session('success')) 
        {{session('success')}}
    @endif

    <ul class="list-group">
    
    
    @foreach ($books as $book)

    <li class="list-group-item d-flex justify-content-between ">
        <div>
            <b>Titolo: </b>{{$book->title}}
        </div>
        <span>
            <a href="{{route('book.show', ['book' => $book])}}" type="button" class="btn btn-info text-end">Info</a>
        </span>
    </li>
        
    @endforeach

    </ul>

    
</x-main>
