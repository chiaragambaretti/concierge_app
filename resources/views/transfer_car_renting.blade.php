<x-layout>
    
    
    @if($category->image)
        <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($category->image->path) }}'); background-repeat: no-repeat; background-size: cover;">
        <h1 class="fw-bold">{{ $category->name }}</h1>
        </header>
    @endif

    <main class="main-service vh-150">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    
                    <h5 class="mt-3">
                        
                    Benvenuti nell'eccezionale servizio di transfer e noleggio auto offerto dal nostro hotel! Presso di noi, ci impegniamo a rendere il vostro soggiorno il più comodo e senza preoccupazioni possibile.</h5>
                        
                    <h4 class="mt-3">Servizio di Transfer</h4>
                        
                    <h5 class="mt-3">I nostri trasferimenti in hotel sono gestiti da conducenti professionisti e cortesi, pronti ad accogliervi con un servizio di alta classe. Indipendentemente dal vostro punto di arrivo, il nostro autista sarà lì per accogliervi e condurvi comodamente all'hotel. Che siate in viaggio d'affari o in vacanza, garantiamo un trasferimento senza intoppi, in veicoli puliti e confortevoli.</h5>

                    <h4>Noleggio Auto</h4>
                    
                    <h5 class="mt-3">Se preferite l'indipendenza durante il vostro soggiorno, approfittate del nostro servizio di noleggio auto. Offriamo una vasta gamma di veicoli di qualità, dalle berline eleganti ai SUV spaziosi. I nostri veicoli sono regolarmente controllati e manutenuti per garantire la vostra sicurezza e comfort durante il viaggio.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-4 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center mb-5" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>

            
        </div>
        
        
        
        
        
        
    </main>

    
</x-layout>