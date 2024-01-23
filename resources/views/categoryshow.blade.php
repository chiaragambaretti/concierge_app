<x-layout>

    <header class="container-fluid header-category mt-4 d-flex align-items-center justify-content-center"  style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($category->image->path) }}'); background-repeat: no-repeat; background-size: cover;">  
        <h1 class="fw-bold">{{ $category->name }}</h1>
    </header>

<main class="main-service">

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($subCategories as $subCategory)
            <div class="col-6 col-md-6 mt-4 margin-col-custom">
                <a href="{{ route($subCategoryRoutes[$subCategory->name]) }}">
                    @foreach ($subCategory->imageSubcategories as $imageSubcategory)
                    <img class="img-subcategories img-fluid" src="{{ asset($imageSubcategory->path) }}" alt="{{ $subCategory->name }}">
                    @endforeach
                    <h6 class="mt-3 fw-semibold text-center subCatTitle-text">{{ $subCategory->name }}</h6>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    
    
    
    
    
    

</main>


</x-layout>