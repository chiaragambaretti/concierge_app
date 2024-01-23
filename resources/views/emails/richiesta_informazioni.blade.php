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
    
    <header class="header-richiestainfo"></header>
        
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center flex-column mt-2">
                    <h1>È stata ricevuta una nuova richiesta di informazioni</h1>
                    
                    <h3 class="mt-3" style="color: var(--color-grey);">Numero della Stanza: <span class="text-white fs-5"> {{ $details['room_number'] }} </span></h3>
                    
                    <h3 style="color: var(--color-grey);">Service: <span class="fs-5 text-white"> {{ $subcategory }} </span></h3>
                    
                    <h3 style="color: var(--color-grey);">Messaggio: <span class="fs-5 text-white">{{ $details['message'] }}</span></h3>
                    
                </div>
            </div>
        </div>
        
    </main>
    
</body>
</html>









