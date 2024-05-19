@extends('frontend.layout')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('tanganbumi/images/foto13.jpg') }}')">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">Catalogs</h1>

        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-white-50" aria-current="page">
              Catalogs
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row mb-4 align-items-center">
      <div class="col-lg-6 text-center mx-auto">
        <h2 class="font-weight-bold text-primary heading">
          Featured Catalogs
        </h2>
      </div>
    </div>
    <div class="row">
      @foreach($catalogs as $catalog)
      <div class="catalog-item">
        <a href="{{ route('catalog.showslug', $catalog->slug) }}" class="img">
          <img src="{{ Storage::url($catalog->banner) }}" alt="{{ $catalog->title }}" class="img-fluid" />
        </a>

        <div class="catalog-content">
          <div class="price mb-2"><span>Rp{{$catalog->harga}}</span></div>
          <div>
            <span class="d-block mb-2 text-black-50">{{ $catalog->title }}</span>
            <span class="city d-block mb-3">{{ $catalog->bahan }}</span>
            <a href="{{ route('catalog.showslug', $catalog->slug) }}" class="btn btn-primary py-2 px-3">See details</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<style>
  .catalog-slider {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Adjust spacing between cards */
}

.catalog-item {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    flex: 1 1 calc(33.333% - 20px); /* 3 items per row */
    display: flex;
    flex-direction: column;
    margin-bottom: 20px; /* Add bottom margin for spacing between rows */
    margin-right: 20px; /* Adjust the right margin for spacing between items */
}


.catalog-item .img {
    width: 100%;
    overflow: hidden;
}

.catalog-item img {
    width: 100%;
    height: 200px; /* Adjust height as needed */
    object-fit: cover;
}

.catalog-content {
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex-grow: 1;
}

.catalog-content .price {
    font-size: 1.2em;
    font-weight: bold;
}

.catalog-content .btn {
    margin-top: auto;
}

/* Media Queries for Responsiveness */
@media (max-width: 1200px) {
    .catalog-item {
        flex: 1 1 calc(50% - 20px); /* 2 items per row on large screens */
    }
}

@media (max-width: 768px) {
    .catalog-item {
        flex: 1 1 100%; /* 1 item per row on medium and small screens */
    }
}
</style>
@endsection