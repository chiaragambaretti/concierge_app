<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONCIERGE</title>

     {{-- @vite --}}
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        {{-- messaggio di corretto invio --}}
        @if(session('success'))
        <div class="text-style text-center mt-4">
            {{ session('success') }}
           <div class="col-12 d-flex justify-content-center">
                <a class="btn mt-5 login-button" href="{{route('homeservice')}}">Torna alla Home</a>
            </div> 
        </div>
        @endif
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-3 mb-5">

                <form class="form-login" method="POST" action="{{ route('inviarichiesta') }}">
                    @csrf
                    <div>
                        <label for="room_number" class="form-label"></label>
                        <input type="text" name="room_number" required class="form-control rounded-0 text-style" id="room_number" value="{{ $roomNumber }}">
                        
                        <label for="subcategory" class="text-style text-white mt-4"></label>
                        <select class="form-select rounded-0 form-login w-100 text-style" name="subcategory" id="subcategory" required>
                            <option selected>Service</option>
                            @foreach($subcategories as $subcat)
                            <option value="{{ $subcat->id }}">{{ $subcat->name }}</option>
                            @endforeach    
                        </select>

                        <div class="mt-3">
                            <label for="message" class="form-label"></label>
                            <textarea class="form-control rounded-0" id="message" name="message" rows="3" style="height: 500px" placeholder="Scrivi qui la tua richiesta" required></textarea>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn mt-5 w-75 rounded-0 login-button">INVIA</button>
                    </div>


                </form>
                
            </div>
        </div>
    </div>

</body>
</html>

