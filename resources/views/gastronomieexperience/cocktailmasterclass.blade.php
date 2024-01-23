<x-layout>
    
    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($image->path)}}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $categoryName }}</h1>
    </header>
    
    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h5>Abbiamo il piacere di offrire un'esperienza unica e coinvolgente: la Cocktail Masterclass.</h5>

                    <h5>Un'opportunità affascinante per immergerti nel mondo dell'arte della mixology e scoprire i segreti dietro la creazione dei cocktail più raffinati.</h5>
                    
                    <h5 class="mt-3">La nostra Cocktail Masterclass è guidata da esperti barman altamente qualificati, pronti a condividere le loro abilità e a introdurti al mondo affascinante dei cocktail. </h5>
                    
                    <h5 class="mt-3">La nostra Cocktail Masterclass è guidata da esperti barman altamente qualificati, pronti a condividere le loro abilità e a introdurti al mondo affascinante dei cocktail. </h5>
                    
                    <h5 class="mt-3">Ogni partecipante avrà a disposizione una stazione di lavoro completamente attrezzata, fornita di tutti gli strumenti necessari per creare il cocktail perfetto.</h5>

                    <h5>Un'esperienza pratica che ti permetterà di mettere alla prova le tue abilità sotto la guida attenta del nostro team.</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-5 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>
            
        </div>
           
    </main>
 
</x-layout>