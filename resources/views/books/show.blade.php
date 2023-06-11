

<x-main>

<x-slot name='title'>Book Details</x-slot>

<div class="my-5 text-white">

  <div class="text-center">
    <h2 class="my-5">Dettagli</h2>
  </div>
  
  <div class="row">

    <div class="col-12 col-sm-6">
      <img class="w-50 ms-5 rounded" src="{{empty($book->image) ? Storage::url('/images/placeholder/placeholder-book.png') : Storage::url($book->image)}}" alt="{{$book->name}}">
    </div>
    
    <div class="col-12 col-sm-6">
      <ul>
      <li><b>Titolo: </b>{{$book->title}}</li>
      <li><b>Autore: </b>{{$book->author->name}} {{$book->author->surname}}</li>
      <li><b>Num.Pagine: </b>{{$book->pages}}</li>
      <li><b>Anno: </b>{{$book->year}} </li>
      </ul>
      <hr>
      <p>Creato da: <b>{{ $book->user->name ?? 'Anonimo' }}</b></p>
    </div>

  </div>

  
 </div>
</x-main>
