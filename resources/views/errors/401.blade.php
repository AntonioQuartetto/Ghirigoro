
<x-main>

<x-slot name=title>401 Unauthorized</x-slot>

    <div class="container text-center">

        <img src="{{ Storage::url('\images\images-general\401-image.jpg') }}" class="unauthorized-custom">

         <p class="container mt-3">
            <a href="{{ route('homepage') }}" class="btn-401-error py-2 px-4">
                Torna alla Homepage
            </a>
        </p>
    </div>

</x-main>
