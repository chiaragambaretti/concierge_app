<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homeservice')}}">
        <img class="logo-navbar" src="../logo-stresa2.png" alt="logo-stresa" width="30" height="24">
      </a>

     
{{-- toggler button --}}
    {{-- <button class="custom-toggler" aria-label="Toggle navigation">
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar3"></span>
        <span class="bar bar4"></span>
    </button> --}}

    <button class="custom-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      {{-- <span class="navbar-toggler-icon"></span> --}}
      <span class="bar bar1 navbar-toggler-icon"></span>
      <span class="bar bar2 navbar-toggler-icon"></span>
      <span class="bar bar3 navbar-toggler-icon"></span>
      <span class="bar bar4 navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {{-- <li class="nav-item">
          @foreach($categories as $category)
          <a class="nav-link active drop-text" aria-current="page" href="{{ route('categoryshow', $category->id) }}">{{ $category->name }}</a>
          @endforeach
        </li> --}}
         <li class="nav-item">
          <a class="nav-link active drop-text" aria-current="page" href="{{ route('categoryshow', ['id' => 1]) }}">Transfer/Car Renting</a>
         </li>
         <li class="nav-item">
          <a class="nav-link active drop-text" aria-current="page" href="{{ route('categoryshow', ['id' => 2]) }}">Gastronomie Experience</a>
         </li>
         <li class="nav-item">
          <a class="nav-link active drop-text" aria-current="page" href="{{ route('categoryshow', ['id' => 3]) }}">Tours</a>
         </li>
         <li class="nav-item">
          <a class="nav-link active drop-text" aria-current="page" href="{{ route('categoryshow', ['id' => 4]) }}">Servizi vari</a>
         </li>

      </ul>

    </div>
  </nav>