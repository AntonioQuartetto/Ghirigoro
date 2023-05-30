

<x-main>

    <x-slot name="title">Library</x-slot>


    <div class="section-custom">
    
        <div class="row p-3">
            <div class="col-12 col-lg-6 text-center p-3">
                <img class="w-100 rounded" src="{{Storage::url('images/images-general/ghirigoro.jpg')}}" alt="Libreria">
            </div>
            <div class="col-12 col-sm-6 text-center p-3">
                <h3>Descrizione</h3>
                <p>
                   E’ il negozio di libri più fornito di DiagonAlley ed è qui che abitualmente gli studenti di Hogwarts acquistano i testi scolastici, che nel giro di poche ore -anche se mancanti - vengono celeremente reperiti. Gli scaffali sono stipati fino al soffitto dei volumi più disparati per argomento e dimensione: vi sono libri grossi come lastroni di pietra rilegati in pelle; libri delle dimensioni di un francobollo foderati in seta; libri pieni di simboli strani dall’aspetto sinistro e alcuni con le pagine bianche. Si dice che la libreria possegga anche numerose copie de “Il Libro invisibile dell’invisibilità” (The Invisible Book of Invisibility) ma, dopo la consegna, nessuno è più riuscito a vedere i preziosi volumi.
                </p>
                <p>
                    Di solito in vetrina vi è un espositore dorato che mostra l’ultimo bestseller ma, nell’estate del 1993, essa è occupata da una grande gabbia di ferro contenete centinaia di copie de “Il Libro dei Mostri” (The Monster Book of Monsters) usato come manuale di Cura delle Creature Magiche dagli studenti del terzo anno (HP PdA). Nel retro della libreria vi è un angolo dedicato esclusivamente alla Divinazione, dove si possono trovare libri come, “Prevedere l'Imprevedibile per Proteggersi Contro Ogni Colpo” (Predicting the Unpredictable Insulate Yourself Against Shocks), “Sfere Infrante. Quando la Fortuna Gira” (Broken Balls: When Fortunes Turn Foul) e “Presagi di Morte. Che Fare Quando il Peggio è in Arrivo” (Death Omens: What to Do When You Know the Worsth is Coming). 
                </p>
                <p>
                    Il Ghirigoro è gestito da una donna gentile e carina che ama molto il suo lavoro e che cerca di soddisfare tutte le esigenze intellettuali dei suoi clienti. Certe volte, alcuni autori famosi vengono invitati dalla proprietaria a promuovere i loro libri, ad esempio, nell'estate del 1992, Gilderoy Allock organizza qui la presentazione del suo ultimo libro, un'autobiografia intitolata "Magicamente Io" (Magical Me); è in quest'occasione che Lucius Malfoy nasconde fra i libri di Ginny Weasley il Diario di Tom Riddle (HP CdS).
                </p>
            </div>
        
        </div>
  


    </div>


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
                        <a href="{{route('book.show', ['book' => $book])}}" type="button" class="btn-list">Info</a>
                    </span>
                </li>
                    
                @endforeach

            </ul>

  </div>

    
</x-main>
