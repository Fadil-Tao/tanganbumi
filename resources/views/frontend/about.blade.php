@extends('frontend.layout')

@section('content')

<div
      class="hero page-inner overlay"
      style="background-image: url('{{ asset('tanganbumi/images/foto1.jpg') }}')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">About</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row text-left mb-5">
          <div class="col-12">
            <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
          </div>
          <div class="col-lg-6">
            <p class="text-black-50">
            Pada tahun 2020, di tengah tantangan ekonomi global yang disebabkan oleh pandemi COVID-19, Tangan Bumi menjadi salah satu UMKM yang dibuat pada saat itu.
            </p>
            <p class="text-black-50">
            Tangan Bumi menciptakan produk kerajinan daur ulang seperti pembuatan strap masker dari manik-manik maupun jasa_custom_lukis pada barang-barang seperti casing hp, sepatu, jaket, dll. Hingga saat ini, Tangan Bumi masih melakukan pengembangan produk dan menjalankan proses bisnisnya dengan melakukan penjualan melalui platform Instagram.
          </div>
          <div class="col-lg-6">
            <p class="text-black-50">
            Nama : TanganBumi</br>
            Owner : Naura Alya Priskila Efendi</br>
            Since : 2020</br>
            Speciality : Custom Handpainted & Beaded jewely</br>
            Open hours : everyday</br>
            Tagline : Custom your things or your jewerly with our precious beads</br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="section pt-0">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="{{ asset('tanganbumi/images/logo.png') }}" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Quality Catalogue</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Easy and safe</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section pt-0">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="img-about dots">
              <img src="{{ asset('tanganbumi/images/foto1.jpg') }}" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Quality Catalogue</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Easy and safe</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
            <img src="{{ asset('tanganbumi/images/foto8.jpg') }}" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('tanganbumi/images/foto3.jpg') }}" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('tanganbumi/images/foto10.jpg') }}" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="row section-counter mt-5">
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">2917</span></span
              >
              <span class="caption text-black-50"># of Buy Catalogue</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">3918</span></span
              >
              <span class="caption text-black-50"># of Sell Catalogue</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">38928</span></span
              >
              <span class="caption text-black-50"># of All Catalogue</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">1291</span></span
              >

            </div>
          </div>
        </div>
      </div>
    </div>

@endsection