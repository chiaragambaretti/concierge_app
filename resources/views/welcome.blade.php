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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 d-flex justify-content-center">
                {{-- messaggio credenziali errate --}}
                @if(session('error_message'))
                <div class="text-style text-center mt-4">
                    {{ session('error_message') }}
                </div>
                @endif
            </div>

        </div>
    </div>
    
    <x-header></x-header>
    
    <main>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-5">
                    {{-- form room login --}}
                    <x-form-login></x-form-login>
                </div>
            </div>
        </div>

    </main>
    
</body>
</html>