<x-layout>
    
    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($image->path)}}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $categoryName }}</h1>
    </header>
    
    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h5>Vieni a scoprire l'arte di degustare formaggi con il nostro esclusivo servizio di cheese tasting.</h5>
                    
                    <h5 class="mt-3">Immagina di immergerti in un mondo di sapori e aromi unici, selezionati con cura dai migliori produttori di formaggi.</h5>
                    
                    <h5 class="mt-3">Un viaggio attraverso una vasta gamma di formaggi pregiati, provenienti da diverse regioni del mondo.</h5>
                    
                    <h5 class="mt-3">Esperti conoscitori ti guideranno nella scoperta delle caratteristiche distintive di ciascun formaggio, dalla consistenza al sapore offrendoti una prospettiva approfondita sull'arte della produzione casearia.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-5 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>

            
        </div>
        
        
        
        
        
        
    </main>

    
</x-layout>