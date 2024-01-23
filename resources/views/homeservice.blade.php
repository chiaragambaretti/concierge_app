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
    
<x-navbar :categories="$categories" />

<header class="container-fluid header-concierge mt-4 d-flex align-items-center justify-content-center">  
        <h1 class="fw-bold">Concierge</h1>
</header>

<main class="main-service">

    <div class="container-fluid">
        {{-- car section --}}
       <a href="{{ route('categoryshow', ['id' => 1]) }}">
           <div class="row">
               <div class="col-12 mt-5 d-flex justify-content-center">
                   <img class="img-section" src="./car-service.avif" alt="Transfer/Car Renting">
               </div>
               <div class="col-12">
                   <h2 class="text-center mt-4">Transfer/Car Renting</h2>
               </div>   
           </div>    
        </a> 
        {{-- gastronomie section --}}
        <a href="{{ route('categoryshow', ['id' => 2]) }}">
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-center">
                    <img class="img-section" src="./tagliere-img.jpg" alt="Gastronomie Experience">
                </div>
                <div class="col-12">
                    <h2 class="text-center mt-4">Gastronomie Experience</h2>
                </div>   
            </div>
        </a>
        {{-- tour section --}}
        <a href="{{ route('categoryshow', ['id' => 3]) }}">
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-center">
                    <img class="img-section" src="./barca-stresa.jpg" alt="Tours">
                </div>
                <div class="col-12">
                    <h2 class="text-center mt-4">Tours</h2>
                </div>   
            </div>
        </a>
        {{-- servizi vari section  --}}
        <a href="{{ route('categoryshow', ['id' => 4]) }}">
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-center">
                    <img class="img-section" src="./shopping.avif" alt="Servizi vari">
                </div>
                <div class="col-12">
                    <h2 class="text-center mt-4">Servizi vari</h2>
                </div>   
            </div>
        </a>
        
    </div>

    <hr>
    



</main>
</body>
</html>