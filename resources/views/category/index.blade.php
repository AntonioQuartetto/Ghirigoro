
<x-main>

<x-slot name="title">Categorie</x-slot>



    <div class="section-custom">
    
        <div class="my-3 text-center">
        
            <h2>Lista Categorie</h2>
        
        </div>

          @if (session('success')) 
            <span class="badge text-bg-danger">
                 {{session('success')}}
            </span>
         @endif

        <div>

            <ul>
            
            @foreach ($categories as $category)

                <li class="list-group-item d-flex justify-content-between ">
                    <div>
                        <b>Categoria: </b>{{$category->name}}
                    </div>
                    <span>
                        <a href="{{route('category.show', ['cat' => $category])}}">Info</a>
                    </span>
                </li>
        
            @endforeach
            
            </ul>
        
        </div>


    
    </div>


</x-main>