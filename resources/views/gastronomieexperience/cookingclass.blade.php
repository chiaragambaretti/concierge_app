<x-layout>
    
    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($image->path)}}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $categoryName }}</h1>
    </header>
    
    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h5>Ti invitiamo a intraprendere un viaggio gastronomico con la nostra esclusiva esperienza di Lezioni di Cucina. Approfondisci il mondo dell'arte culinaria mentre i nostri chef esperti ti guidano nella creazione di piatti deliziosi, svelando i segreti di una cucina eccezionale.</h5>
                    
                    <h5 class="mt-3">invitiamo a intraprendere un viaggio gastronomico con la nostra esclusiva esperienza di Lezioni di Cucina. Approfondisci il mondo dell'arte culinaria mentre i nostri chef esperti ti guidano nella creazione di piatti deliziosi, svelando i segreti di una cucina eccezionale.</h5>
                    
                    <h5 class="mt-3"> Dai classici italiani alle cucine internazionali contemporanee, le Lezioni di Cucina celebrano la ricchezza dei sapori e l'uso di prodotti freschi e di alta qualità.</h5>
                    
                    <h5 class="mt-3">Lascia le Lezioni di Cucina non solo con un palato soddisfatto, ma anche con nuove abilità culinarie. Sorprendi famiglia e amici con la capacità di ricreare i piatti imparati durante questa esperienza indimenticabile.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-5 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>
            
        </div>
           
    </main>
 
</x-layout>