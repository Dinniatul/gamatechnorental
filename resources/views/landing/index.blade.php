@extends('layouts.main')
@section('container')
<header class="masthead text-dark mt-5" style="background-color: #f1f3ff">
      <div class="container">
        <br /><br />
        <div class="row">
          <div class="col-md-6 mb-4">
            <h1>Sewa & Rental Mobil Terbaik di Kawasan Padang</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum hic ducimus minus ullam beatae cupiditate ex distinctio repellendus atque dolorum debitis reiciendis, suscipit necessitatibus voluptate itaque nihil eveniet
              tenetur quidem!
            </p>
            <button class="btn btn-success">Mulai Sewa Mobil</button>
          </div>
          <div class="col-md-6">
            <img class="mobil" src="{!! asset('img/img_car.png') !!}"  width="662" />
          </div>
        </div>
      </div>
    </header>
    <!-- /Header -->

    <!-- our service -->
    <section id="our-service">
      <div class="container mt-5">
        <div class="row">
          <div class="col-6 text-center ">
            <img class="img-service" width="340" src="{!! asset('img/img_service.png') !!}"  />
          </div>
          <div class="col-6  mt-5">
            <h2 class="mt-4"><b> Best Car Rental for any kind Off Trip in Padang !</b></h2>
            <p class="mt-5">
              Sewa mobil di Padang bersama Binar Car Rental jaminan harga lebih murah dibandingkan yang lain, kondisi mobil baru, serta kualitas pelayanan terbaik untuk perjalanan wisata, bisnis, wedding, meeting, dll.
            </p>
              <p>
                <img src="{!! asset('img/cklis.svg') !!}" /> Sewa Mobil Dengan Supir di Bali 12 Jam
              </p> 
              <p>
                <img src="{!! asset('img/cklis.svg') !!}" /> Sewa Mobil Lepas Kunci di Bali 24 Jam
              </p>
              <p>
                <img src="{!! asset('img/cklis.svg') !!}" /> Gratis Antar - Jemput Mobil di Bandara
              </p>
              <p>
                <img src="{!! asset('img/cklis.svg') !!}" /> Layanan Airport Transfer / Drop In Out
              </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end our service -->

    <!-- why us -->
    <section id="why-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h1 class="mb-3 why-us">Why Us?</h1>
            <p class="text-ws">Mengapa Harus Pilih Gamatechno Car Rental ?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mt-3">
            <div class="card">
              <div class="card-body" style="min-height: 250px;">
                <blockquote class="blockquote mb-0">
                  <img class="img" src="{!! asset('img/icon_complete.svg') !!}"/>
                  <h5 class="mt-3">Mobil Lengkap</h5>
                  <p class="mt-3">Tersedia Banyak Pilihan Mobil, kondisi masih baru, bersih dan terawat</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="card">
              <div class="card-body" style="min-height: 250px;">
                <blockquote class="blockquote mb-0">
                  <img class="img" src="{!! asset('img/icon_price.svg') !!}"/>
                  <h5 class="mt-3">Harga Murah</h5>
                  <p class="mt-3">Harga murah dan bersaing, bisa bandingkan harga kami dengan rental mobil lain</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="card">
              <div class="card-body" style="min-height: 250px;">
                <blockquote class="blockquote mb-0">
                  <img src="{!! asset('img/icon_24hrs.svg') !!}" />
                  <h5 class="mt-3">Layanan 24 Jam</h5>
                  <p class="mt-3">Siap melayani kebutuhan Anda selama 24 jam nonstop. Kami juga tersedia di akhir minggu</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="card">
              <div class="card-body" style="min-height: 250px;">
                <blockquote class="blockquote mb-0">
                  <img src="{!! asset('img/icon_professional.svg') !!}" />
                  <h5 class="mt-3">Sopir Profesional</h5>
                  <p class="mt-3">Sopir yang profesional, berpengalaman, jujur, ramah dan selalu tepat waktu</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial -->
    <section id="testimonial" class="py-5">
      <div class="container pt-5">
        <h2 class="h2 text-center">Testimonial</h2>
        <p class="text-center py-3">Berbagai review positif dari para pelanggan kami</p>
        <div id="carouselExampleControls" class="carousel slide mx-auto" style="max-width: 80%" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active bg-aliceblue ">
              <div class="row mx-4 my-5">
                <div class="col-xl-2 m-auto">
                  <img src="{!! asset('img/photo1-testimoni.png') !!}" class="d-block testimonial-img m-auto" alt="Person" />
                </div>
                <div class="col-xl-10">
                  <img src="{!! asset('img/Rate.png') !!}" class="testimonial-rating" alt="Rating" />
                  <p class ="testimonial-text">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”
                  </p>
                  <p class="testimonial-name">John Dee 32, Bromo</p>
                </div>
              </div>
            </div>
            <div class="carousel-item bg-aliceblue">
              <div class="row mx-4 my-5">
                <div class="col-xl-2 m-auto">
                  <img src="{!! asset('img/photo2-testimoni.png') !!}" class="d-block testimonial-img m-auto" alt="Person" />
                </div>
                <div class="col-xl-10">
                  <img src="{!! asset('img/Rate.png') !!}" class="testimonial-rating" alt="Rating" />
                  <p class ="testimonial-text">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod””
                  </p>
                  <p class="testimonial-name">John Dee 32, Bromo</p>
                </div>
              </div>
            </div>
            <div class="carousel-item bg-aliceblue">
              <div class="row mx-4 my-5">
                <div class="col-xl-2 m-auto">
                  <img src="{!! asset('img/photo1-testimoni.png') !!}" class="d-block testimonial-img m-auto" alt="Person" />
                </div>
                <div class="col-xl-10">
                  <img src="{!! asset('img/Rate.png') !!}" class="testimonial-rating" alt="Rating" />
                  <p class ="testimonial-text">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod””
                  </p>
                  <p class="testimonial-name">John Dee 32, Bromo</p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
          <div class="text-center">
            <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" class="testimonial-media">&#8249;</a>
            <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" class="testimonial-media">&#8250;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- started section -->
    <section>
      <div class="container">
        <div class="container mt-3 mb-5 rounded text-center text-white p-4" style="background-color: #0d28a6">
          <div class="jumbotron">
            <h3 class="display-4 text-bold">Sewa Mobil di (Lokasimu) Sekarang</h3>
            <p class="card-text mt-3 p-4 " style="font-size: 14px">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis veniam minima perferendis eaque optio voluptatibus maiores, officia saepe labore debitis,<br />
              quasi culpa enim repellendus excepturi animi sunt quidem ab tempore?
            </p>
            <a class="btn btn-success btn-lg" href="#" role="button">Mulai Sewa Mobil</a>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mb-5">
            <h5 class="mt-2"><b>Frequently Asked Question</b></h5>
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing</p>
          </div>
          <div class="col-md-7 mb-5 faq-sec">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item border mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Apa saja syarat yang dibutuhkan ?</button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item border mb-3">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Berapa hari minimal sewa mobil lepas kunci?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                  </div>
                </div>
              </div>
              <div class="accordion-item border mb-3">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Berapa hari sebelumnya sebaiknya booking sewa mobil?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but
                    just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                  </div>
                </div>
              </div>
              <div class="accordion-item border mb-3">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Apakah ada biaya antar-jemput?</button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but
                    just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                  </div>
                </div>
              </div>
              <div class="accordion-item border mb-3">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Bagaimana jika terjadi kecelakaan?</button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but
                    just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection