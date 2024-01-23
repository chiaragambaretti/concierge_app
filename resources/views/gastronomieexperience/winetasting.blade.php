<x-layout>
    
    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($image->path)}}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $categoryName }}</h1>
    </header>
    
    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h5> Nell'incantevole cornice del Lago Maggiore celebriamo l'arte del buon vivere attraverso il nostro esclusivo servizio di wine tasting. </h5>
                    
                    <h5 class="mt-3">Il nostro sommelier esperto ha curato una selezione raffinata di vini provenienti da rinomate cantine locali e internazionali. </h5>
                    
                    <h5 class="mt-3">Dalle bollicine scintillanti ai robusti rossi, ogni bottiglia è stata scelta per offrire un viaggio gustativo unico e indimenticabile.</h5>
                    
                    <h5 class="mt-3">Scopri i segreti della produzione vinicola locale e immergiti nell'affascinante mondo dei vigneti con il nostro emozionante programma di giri in cantina.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-5 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>
            
        </div>
   
    </main>
    
</x-layout>