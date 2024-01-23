<x-layout>
    
    
    @if($category->image)
        <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($category->image->path) }}'); background-repeat: no-repeat; background-size: cover;">
        <h1 class="fw-bold">{{ $category->name }}</h1>
        </header>
    @endif

    <main class="main-service vh-100">
        
        <div class="container">
            <div class="row margin-custom">
                <div class="col-12 mt-5">
                    
                    <h4>SONO LA PAGINA TOURS</h4>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio molestias, recusandae nam quo, et non quibusdam qui numquam neque dignissimos aspernatur! Voluptatum vero alias tempore ullam tempora amet provident quas.</h5>
                        
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus ut fuga ipsum voluptate voluptatem repudiandae consequatur voluptatibus, alias at dignissimos maiores illo dicta corporis laboriosam. Natus optio reprehenderit ipsum.</h5>
                    
                    <h5 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quod esse accusantium saepe, magnam rem obcaecati maxime vero, amet magni autem? Laboriosam quas, corrupti dolorum quaerat modi iusto ullam sapiente!</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">

            <a class="btn mt-4 w-75 rounded-0 concierge-button d-flex justify-content-center align-items-center mb-5" href="{{ route('chiediconcierge') }}">CHIEDI AL CONCIERGE</a>

            
        </div>
        
        
        
        
        
        
    </main>

    
</x-layout>