
<x-main>

    <x-slot name="title">Categorie</x-slot>



    <div class="section-custom">
    
        <div class="d-flex justify-content-between  mx-2 my-4 p-4">
        
            <h2>Lista Categorie</h2>
            <span> <a class="btn btn-success" href="{{route('category.create')}}">Aggiungi Categoria</a></span>
        
        </div>

        @if (session('success')) 
            <span class="badge text-bg-danger">
                 {{session('success')}}
            </span>
        @endif

       
        <ul>
            
            @foreach ($categories as $category)

                <li class="p-1 list-group-item d-flex justify-content-between">
                    <div>
                        <b>Categoria: </b>{{$category->name}}
                    </div>
                   <div>
                     <span>
                        <a href="{{route('category.show', ['category' => $category])}}" class="btn-list">Dettagli</a>
                    </span>

                    @auth
                        
                    <span>
                        <a href="{{route('category.edit', ['category' => $category->id])}}" type="button" class="btn-list">Modifica</a>
                    </span>
                    <span>

                        <a class="btn-list" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$category->id}}').submit();">Elimina</a>
                        <form class="d-none" id="form-delete-{{$category->id}}" action="{{route('category.destroy', ['category' => $category->id])}}" method="POST">
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