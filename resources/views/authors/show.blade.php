<x-main>

<x-slot name="title">Dettagli Autore</x-slot>

<div class="my-5 text-white">

    <div class="text-center">
      <h2 class="my-5">Dettagli Autore</h2>
    </div>
  
  <div class="row">

    <div class="col-12 col-sm-6">
     
    </div>
    
    <div class="col-12 col-sm-6">
      <ul>
      <li><b>Nome: </b>{{$author->name}}</li>
      <li><b>Cognome: </b>{{$author->surname}} </li>
      <li><b>Anno di Nascita: </b>{{$author->birthday->format('d-m-Y')}}</li>

        <ul>
          @forelse($author->books as $book)

            <li>{{$book->title}}</li>

          @empty

          Nessun Libro Aggiunto

          @endforelse
        </ul>
      </ul>
    </div>



  </div>

</x-main>