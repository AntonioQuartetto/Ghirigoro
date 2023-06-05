<x-main>

<x-slot name="title">Registrati</x-slot>

<div class="card-body p-md-5 section-custom text-white">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

            <p class="text-center h1 fw-bold mb-5 mt-4">Registrati</p>

            <form action="{{ route('register') }}" method="POST">
            @csrf
            @method('POST')


            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
            {{-- Input Name  --}}
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                <input type="text" name="name" id="name" class="form-control">
                <label class="form-label" for="name">Nome e Cognome</label>
                <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>

            

            {{-- Input Email --}}
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                <input type="email" name="email" id="email" class="form-control">
                <label class="form-label" for="form3Example3c">Email</label>
                <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            
            
            {{-- Input Password --}}
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                <input type="password" name="password" id="password" class="form-control">
                <label class="form-label" for="password">Password</label>
                <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            

            {{-- Input Password Confirmation --}}
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                <label class="form-label" for="password_confimation">Conferma la Password</label>
                <div class="form-notch"><div class="form-notch-leading"></div><div class="form-notch-middle"></div><div class="form-notch-trailing"></div></div></div>
                @error('password_confimation') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="submit" class="btn-user px-5 py-1" style="">Registrati</button>
            </div>

            </form>

        </div>
        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

            <img src="{{Storage::url('\images\images-general\ghirigoro-facciata.jpg')}}" class="img-fluid rounded" alt="Ghirigoro">

        </div>
    </div>
</div>


</x-main>