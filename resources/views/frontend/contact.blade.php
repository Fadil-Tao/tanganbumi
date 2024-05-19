@extends('frontend.layout')

@section('content')

<div class="hero page-inner overlay" style="background-image: url('{{ asset('tanganbumi/images/foto5.jpg') }}');">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">Kontak Kami</h1>

        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
          </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info">
          <div class="address mt-2">
            <i class="icon-room"></i>
            <h4 class="mb-2">Location:</h4>
            <p>
              Balikpapan Baru<br />
              Balikpapan
            </p>
          </div>

          <div class="open-hours mt-4">
            <i class="icon-clock-o"></i>
            <h4 class="mb-2">Open Hours:</h4>
            <p>
              Everyday<br />
              11:00 AM - 23.00 PM
            </p>
          </div>

          <div class="email mt-4">
            <i class="icon-chat"></i>
            <h4 class="mb-2">Line:</h4>
            <a href="https://line.me/R/ti/p/%40510nxsty">
              <p>@tanganbumi</p>
            </a>
          </div>

          <div class="phone mt-4">
            <i class="icon-instagram"></i>
            <h4 class="mb-2">Instagram:</h4>
            <a href="https://www.instagram.com/tanganbumi/">
              <p>@tanganbumi</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <form action="#">
          <div class="row">
            <div class="col-6 mb-3">
              <input type="text" class="form-control" placeholder="Your Name" />
            </div>
            <div class="col-6 mb-3">
              <input type="email" class="form-control" placeholder="Your Email" />
            </div>
            <div class="col-12 mb-3">
              <input type="text" class="form-control" placeholder="Subject" />
            </div>
            <div class="col-12 mb-3">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>

            <div class="col-12">
              <input type="submit" value="Send Message" class="btn btn-primary" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection