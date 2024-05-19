@extends('frontend.layout')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg')">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">
          {{ $catalog->title }}
        </h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">
              <a href="catalogs.html">Catalogs</a>
            </li>
            <li class="breadcrumb-item active text-white-50" aria-current="page">
              {{ $catalog->title }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7">
        <div class="img-catalog-slide-wrap">
          <div class="owl-carousel img-catalog-slide">
            @foreach($catalog->galleries as $gallery)
            <div class="item">
              <img src="{{ Storage::url($gallery->photo) }}" alt="Image" class="img-fluid catalog-img" style="border-radius: 20px;" />
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h2 class="heading text-primary">{{ $catalog->title }}</h2>
        <p class="meta">{{ $catalog->bahan }}</p>
        <p class="meta">{{ $catalog->deskripsi }}</p>
        <p class="meta">Rp{{ $catalog->harga }}</p>
        <a href="https://www.instagram.com/tanganbumi/" class="btn btn-primary py-2 px-3" style="display: inline-flex; align-items: center;">
          Instagram
          <span class="material-symbols-outlined" style="margin-left: 5px; rotate: -45deg;">trending_flat</span>
        </a>
        <a href="https://line.me/R/ti/p/%40510nxsty" class="btn btn-primary py-2 px-3" style="display: inline-flex; align-items: center;">
          Line
          <span class="material-symbols-outlined" style="margin-left: 5px; rotate: -45deg;">trending_flat</span>
        </a>

      </div>
    </div>
  </div>
</div>

<style>
  .catalog-img {
    height: 300px;
    object-fit: contain;

  }

  .material-symbols-outlined {
    display: grid;
    place-items: center;
  }

  .item {
    display: flex;
    justify-content: center;
  }
</style>

<script>
  $(document).ready(function() {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      dotsContainer: '.owl-dots'
    });


  });
</script>


@endsection