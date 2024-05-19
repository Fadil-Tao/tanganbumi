@extends('frontend.layout')

@section('content')
<style>
  .catalog-slider {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    /* Adjust spacing between cards */
  }

  .catalog-item {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    flex: 1 1 calc(33.333% - 20px);
    /* 3 items per row with a gap */
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    /* Add bottom margin for spacing between rows */

  }

  .catalog-item .img {
    width: 100%;
    overflow: hidden;
  }

  .catalog-item img {
    width: 100%;
    height: 200px;
    /* Adjust height as needed */
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
      flex: 1 1 calc(50% - 20px);
      /* 2 items per row on large screens */
    }
  }

  @media (max-width: 768px) {
    .catalog-item {
      flex: 1 1 100%;
      /* 1 item per row on medium and small screens */
    }
  }
</style>


<div class="hero">
  <div class="hero-slide">
    @foreach($sliders as $slider)
    <div class="img overlay" style="background-image: url('{{ Storage::url($slider->banner) }}')"></div>
    @endforeach
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center">
        <h1 class="heading" data-aos="fade-up">
          Custom Hand Painted and Beaded Jewerly
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="font-weight-bold text-primary heading">
          Katalog
        </h2>
      </div>
      <div class="col-lg-6 text-lg-end">
        <p>
          <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Lihat Semua Katalog</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="catalog-slider-wrap">
          <div class="catalog-slider" style="display: flex;">

            @foreach($catalogs as $catalog)
            @if($loop->index < 3) <div class="catalog-item">
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
          @else
          @break
          @endif
          @endforeach


          <div id="catalog-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section sec-testimonials">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-6">
        <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
          Apa Kata Mereka
        </h2>
      </div>
      <div class="col-md-6 text-md-end">
        <div id="testimonial-nav">
          <span class="prev" data-controls="prev">Sebelumnya</span>

          <span class="next" data-controls="next">Selanjutnya</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
    </div>
    <div class="testimonial-slider-wrap">
      <div class="testimonial-slider">
        @foreach($testimonials as $testimonial)
        <div class="item">
          <div class="testimonial">
            <img src="{{ Storage::url($testimonial->photo) }}" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
            <div class="rate">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
            </div>
            <h3 class="h5 text-primary mb-4">{{ ($testimonial->name) }}</h3>
            <blockquote>
              <p>
                &ldquo;{{ ($testimonial->message) }}.&rdquo;
              </p>
            </blockquote>
            <p class="text-black-50">{{ ($testimonial->order) }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection