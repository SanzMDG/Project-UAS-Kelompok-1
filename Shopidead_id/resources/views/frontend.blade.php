<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Etalase e-commerce</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    
    
    
    <link rel="manifest" href="{{ asset('frontend/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/assets/css/theme.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="{{ url('/') }}"><img class="d-inline-block rounded-circle" width="50px" height="50px" src="{{ asset('assets/img/logo_etalase.png') }}" alt="logo" /><span class="text-1000 fw-bold ms-2">Etalase e-commerce</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#best">Best Deals</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#news">News</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#shop">Shop</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#testimoni">Testimoni</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('register') }}">Register</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('login') }}">Login</a></li>
            </ul>
            <form class="d-flex"><a class="text-1000" href="#footer">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a><a class="text-1000" href="#shop">
                <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg></a><a class="text-1000" href="#best-seller">
                <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg></a></form>
          </div>
        </div>
      </nav>
      <section class="py-11 bg-light-gradient border-bottom border-white border-5">
        <div class="bg-holder overlay overlay-light" style="background-image:url({{ asset('frontend/assets/img/gallery/header-bg.png') }});background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-12 mb-10">
              <div class="d-flex align-items-center flex-column">
                <h1 class="fw-normal"> With an outstanding style, only for you</h1>
                <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Exclusively designed for you</h1>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="header" style="margin-top: -23rem !important;">

        <div class="container">
          <div class="row g-0">
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"> <img class="img-fluid rounded" src="{{ asset('frontend/assets/img/gallery/her.png') }}" width="790" alt="...">
                <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light rounded" href="#!">For Her</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"> <img class="img-fluid rounded" src="{{ asset('frontend/assets/img/gallery/him.png')}}" width="790" alt="..." />
                <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light rounded" href="#!">For Him </a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container">
          <div class="row h-100" id="best">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Best Deals</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/flat-hill.png')}}" alt="...">

                        
                        <a href="#" class="btn btn-secondary">Details</a>
                        
                        </img>
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 500.000</span><span class="text-primary">IDR 350.000</span></div>
                          </div><a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title fs-5" id="exampleModalLabel">Flat Hill Slingback</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h5>Deskripsi: </h5>
                                <p class="text-900">Flat Hill Slingback adalah kombinasi sempurna antara gaya klasik dan kenyamanan modern. Dirancang untuk memenuhi gaya hidup aktif Anda, sepatu ini menawarkan gaya yang elegan namun tetap praktis untuk digunakan sehari-hari.</p>
                                <h5>Testimoni: </h5>
                                <p class="text-900">"Flat Hill Slingback benar-benar melebihi harapan saya. Saya mencari sepatu yang tidak hanya stylish tetapi juga nyaman untuk dipakai sepanjang hari, dan sepatu ini memberikan keduanya. Saya sangat suka dengan desain slingback-nya yang elegan dan materialnya yang berkualitas tinggi. Bahkan setelah mengenakannya seharian, kaki saya tetap nyaman tanpa rasa sakit." <br>- Ria Ricis. Influencer.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <a href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">
                                  <button type="button" class="btn btn-secondary">Buy Now</button>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/blue-ring.png')}}" alt="...">
                        <a href="#" class="btn btn-secondary">Details</a>
                        </img>
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Ocean Blue Ring</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 300.000</span></div>
                          </div><a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1"></a>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title fs-5" id="exampleModalLabel">Ocean Blue Ring</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h5>Deskripsi: </h5>
                                <p class="text-900">Ocean Blue Ring adalah perhiasan yang memikat dengan keindahan yang tak tertandingi. Didesain dengan teliti, cincin ini menampilkan batu permata biru laut yang memikat, dikelilingi oleh aksen yang mengilap, menciptakan kilauan yang menakjubkan di setiap sudutnya.</p>
                                <h5>Testimoni: </h5>
                                <p class="text-900">"Saya sangat terkesan dengan keindahan Ocean Blue Ring yang saya beli. Batu permata biru lautnya benar-benar memukau, dan desainnya sangat elegan. Saya sering mendapat pujian saat mengenakannya di acara-acara khusus, karena cincin ini benar-benar menonjolkan keanggunan dan keindahan alaminya. Sangat merekomendasikan kepada siapa pun yang mencari perhiasan yang istimewa dan berkelas." <br>- Luna Maya. Artis.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <a href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">
                                  <button type="button" class="btn btn-secondary">Buy Now</button>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/wallet.png')}}" alt="...">
                        <a href="#" class="btn btn-secondary">Details</a> 
                        </img>
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Brown Leathered Wallet</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 350.000</span><span class="text-primary">IDR 180.000</span></div>
                          </div><a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"></a>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title fs-5" id="exampleModalLabel">Brown Leathered Wallet</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h5>Deskripsi: </h5>
                                <p class="text-900">Dompet Kulit Cokelat adalah aksesori fungsional dan stylish yang cocok untuk pria maupun wanita yang mengutamakan kualitas dan gaya. Dibuat dari kulit asli yang dipilih secara khusus untuk ketahanan dan penampilannya yang elegan, dompet ini menampilkan sentuhan artisanal yang jelas terlihat dalam setiap jahitan dan detailnya.</p>
                                <h5>Testimoni: </h5>
                                <p class="text-900">"Saya sangat puas dengan dompet kulit cokelat ini. Kulitnya sangat berkualitas dan terasa mewah, dan saya suka dengan tampilannya yang sederhana namun elegan. Dompet ini memiliki banyak ruang penyimpanan yang saya butuhkan untuk kartu dan uang tunai, dan saya senang bahwa itu juga cukup ramping untuk muat di saku saya tanpa membuatnya terlihat berat." <br>- Jefri Nichol. Artis.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <a href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">
                                  <button type="button" class="btn btn-secondary">Buy Now</button>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/wrist-watch.png')}}" alt="...">
                        <a href="#" class="btn btn-secondary">Details</a> 
                        </img>
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Silverside Wristwatch</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 700.000</span><span class="text-primary">IDR 500.000</span></div>
                          </div><a class="stretched-link" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal3"></a>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title fs-5" id="exampleModalLabel">Silverside Wristwatch</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h5>Deskripsi: </h5>
                                <p class="text-900">Silverside Wristwatch adalah perpaduan sempurna antara keanggunan dan keandalan. Dirancang dengan presisi untuk memberikan performa yang tak tertandingi, jam tangan ini menghadirkan kualitas premium dalam setiap detailnya.</p>
                                <h5>Testimoni: </h5>
                                <p class="text-900">"Saya telah menggunakan Silverside Wristwatch selama beberapa bulan sekarang dan saya benar-benar terkesan. Desainnya yang elegan membuatnya cocok untuk setiap kesempatan, baik itu untuk keseharian atau acara formal. Saya suka dengan kualitas materialnya yang terasa kokoh dan tahan lama, serta mekanisme jam yang sangat akurat."<br>- Kadam Sidiq. Influencer.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <a href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">
                                  <button type="button" class="btn btn-secondary">Buy Now</button>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row h-100 g-0" id="collection">
          <div class="col-lg-7 mx-auto text-center mb-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Collection</h5>
            </div>
            <div class="col-md-6">
              <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                <h4 class="text-800">Exclusive collection 2024</h4>
                <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Be exclusive</h1>
                <p class="mb-5 fs-1">The best everyday option in a Super Saver range within a reasonable price. It is our responsibility to keep you 100 percent stylish. Be smart &amp; , trendy with us.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/outfit.png')}}" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Outfit</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row h-100 g-2 py-1">
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/vanity-bag.png')}}" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Vanity Bags</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/hat.png')}}" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Hats</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/high-heels.png')}}" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">High Heels</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0">
        <div class="container">
          <div class="row h-100" id="news">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-3">Checkout New Arrivals</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/full-body.png')}}" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">IDR 350.000</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Flat Hill Slingback</h4>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/formal-coat.png')}}" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">IDR 300.000</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Ocean Blue Ring</h4>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/ocean-blue.png')}}" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">IDR 180.000</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Brown Leathered Wallet</h4>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('frontend/assets/img/gallery/sweater.png')}}" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">IDR 500.000</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Silverside Wristwatch</h4>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="categoryWomen">
        <div class="container">
          <div class="row h-100" id="shop">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Shop By Category</h5>
            </div>
            <div class="col-12">
              <nav>
                <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="true">For Women</button>
                  <button class="nav-link" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">For Men</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentWomen">
                      <div class="tab-pane fade" id="pills-dresses" role="tabpanel" aria-labelledby="pills-dresses-tab">
                        <div class="carousel slide" id="carouselCategoryDresses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-1.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 150.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-2.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 150.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-3.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 150.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-4.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 250.000</span><span class="text-primary">IDR 200.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>
                      <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                        <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/red-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 100.000</span><span class="text-primary">IDR 80.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/pink-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 85.000</span><span class="text-primary">IDR 70.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/orange-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 85.000</span><span class="text-primary">IDR 70.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/purple-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 100.000</span><span class="text-primary">IDR 80.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-wshoes" role="tabpanel" aria-labelledby="pills-wshoes-tab">
                        <div class="carousel slide" id="carouselCategoryWShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-1.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoes WBB</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-2.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoes BWB</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-3.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoes WRB</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-4.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoes BBR</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-wwatch" role="tabpanel" aria-labelledby="pills-wwatch-tab">
                        <div class="carousel slide" id="carouselCategoryWwatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-1.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch BW</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 800.000</span><span class="text-primary">IDR 950.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-2.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch DBG</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 800.000</span><span class="text-primary">IDR 950.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-3.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch GLD</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 800.000</span><span class="text-primary">IDR 950.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-4.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch BRW</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 800.000</span><span class="text-primary">IDR 950.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-wsunglasses" role="tabpanel" aria-labelledby="pills-wsunglasses-tab">
                        <div class="carousel slide" id="carouselCategoryWSunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-1.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass PRP</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 170.000</span><span class="text-primary">IDR 110.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-2.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass BLP</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 170.000</span><span class="text-primary">IDR 110.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-3.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass BLU</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 170.000</span><span class="text-primary">IDR 110.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-4.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass BRN</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 170.000</span><span class="text-primary">IDR 110.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-wbagpacks" role="tabpanel" aria-labelledby="pills-wbagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryWBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-1.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks RED</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-2.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks YLW</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-3.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks ORG</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-4.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks BLC</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab-men" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-tshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-tshirt" type="button" role="tab" aria-controls="pills-tshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shirt-tab" data-bs-toggle="pill" data-bs-target="#pills-shirt" type="button" role="tab" aria-controls="pills-shirt" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shoes-tab" data-bs-toggle="pill" data-bs-target="#pills-shoes" type="button" role="tab" aria-controls="pills-shoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-watch-tab" data-bs-toggle="pill" data-bs-target="#pills-watch" type="button" role="tab" aria-controls="pills-watch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-sunglasses" type="button" role="tab" aria-controls="pills-sunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-bagpacks" type="button" role="tab" aria-controls="pills-bagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContentMen">
                      <div class="tab-pane fade show active" id="pills-tshirt" role="tabpanel" aria-labelledby="pills-tshirt-tab">
                        <div class="carousel slide" id="carouselCategoryTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/white-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 150.000</span><span class="text-primary">IDR 100.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sky-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 150.000</span><span class="text-primary">IDR 100.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/yellow-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 150.000</span><span class="text-primary">IDR 100.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/black-tshirt.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 150.000</span><span class="text-primary">IDR 100.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-shirt" role="tabpanel" aria-labelledby="pills-shirt-tab">
                        <div class="carousel slide" id="carouselCategoryShirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-5.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 350.000</span><span class="text-primary">IDR 200.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-6.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 350.000</span><span class="text-primary">IDR 200.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-7.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 350.000</span><span class="text-primary">IDR 200.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shirt-8.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 350.000</span><span class="text-primary">IDR 200.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-shoes" role="tabpanel" aria-labelledby="pills-shoes-tab">
                        <div class="carousel slide" id="carouselCategoryShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-5.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe NEX</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-6.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe FLX</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-7.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe RTX</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/shoe-8.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe CVY</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 400.000</span><span class="text-primary">IDR 250.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-watch" role="tabpanel" aria-labelledby="pills-watch-tab">
                        <div class="carousel slide" id="carouselCategoryWatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-5.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch BLCM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 600.000</span><span class="text-primary">IDR 500.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-6.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch BRWM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 600.000</span><span class="text-primary">IDR 500.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-7.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch GXM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 600.000</span><span class="text-primary">IDR 500.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/watch-8.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch GRM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 600.000</span><span class="text-primary">IDR 500.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
                        <div class="carousel slide" id="carouselCategorySunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-5.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass BLM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 130.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-6.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass BCM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 130.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-7.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass KYM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 130.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/sunglass-8.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass BLUM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 200.000</span><span class="text-primary">IDR 130.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>

                      <div class="tab-pane fade" id="pills-bagpacks" role="tabpanel" aria-labelledby="pills-bagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-5.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks REDM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-6.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks YLWM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-7.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks ORGM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/bagpacks-8.png')}}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks BLDM</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 450.000</span><span class="text-primary">IDR 400.000</span></div>
                                    </div><a class="stretched-link" href="#!"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="https://api.whatsapp.com/send/?phone=6285892226663&text&type=phone_number&app_absent=0">Shop Now</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row h-100" id="best-seller">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Best Sellers</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselBestSellers" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/handbag.png')}}" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 1.250.000</span><span class="text-danger">IDR 1.100.000</span></div>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/earrings.png')}}" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 490.000</span><span class="text-danger">IDR 350.000</span></div>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/lathered-wristwatch.png')}}" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 250.000</span><span class="text-danger">IDR 190.000</span></div>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{ asset('frontend/assets/img/gallery/tie.png')}}" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">IDR 100.000</span><span class="text-danger">IDR 75.000</span></div>
                          </div><a class="stretched-link" href="#!"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pb-8">
        <div class="container-fluid container-lg">
        <div class="col-lg-7 mx-auto text-center mb-6" id="testimoni">
          <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">What They Said</h5>
        </div>
          <div class="row h-100 g-2 justify-content-center">
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="{{ asset('frontend/assets/img/gallery/shoes-blog-1.png')}}" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="{{ asset('frontend/assets/img/gallery/author-1.png')}}" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i data-feather="heart"> </i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h6 class="text-900 mt-3">Kelly Hudson . <span class="fw-normal">Influencer . </span></h6>
                  <div>
                  <span class="text-900 text-center"><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><span class="text-900 ms-2"></span></span>
				          </div>
                  <p class="text-900 mt-3">"Saya telah menjadi pengguna setia platform ini selama lebih dari dua tahun sekarang, dan saya tidak bisa lebih puas dengan pengalaman berbelanja online saya di sini. Salah satu hal yang saya sangat hargai adalah navigasi yang mudah dan intuitif. Saya dapat dengan cepat menemukan produk yang saya cari, baik itu pakaian, peralatan elektronik, atau perlengkapan rumah tangga"</p>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="{{ asset('frontend/assets/img/gallery/fashion-blog-2.png')}}" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="{{ asset('frontend/assets/img/gallery/author-2.png')}}" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i data-feather="heart"> </i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h6 class="text-900 mt-3">Rotondwa Johnny . <span class="fw-normal">Pengusaha </span></h6>
                  <span class="text-900 text-center"><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><span class="text-900 ms-2"></span></span>
                  <p class="text-900 mt-3">"Sebagai seorang ahli e-commerce, saya merekomendasikan platform ini karena antarmukanya yang intuitif dan strategi pemasaran yang efektif. Ini tidak hanya mempermudah pengguna, tetapi juga mendukung pertumbuhan bisnis secara signifikan."</p>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="{{ asset('frontend/assets/img/gallery/spring-dress-blog-3.png')}}" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="{{ asset('frontend/assets/img/gallery/author-3.png')}}" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i data-feather="heart"> </i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h6 class="text-900 mt-3">Martin . <span class="fw-normal">Artis </span></h6>
                  <span class="text-900 text-center"><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><i data-feather="star" fill="black"></i><span class="text-900 ms-2"></span></span>
                  <p class="text-900 mt-3">"Saya harus mengatakan bahwa pengalaman belanja saya di platform ini melebihi ekspektasi saya. Dari proses pendaftaran yang cepat hingga navigasi yang lancar di seluruh situs, semuanya sangat intuitif dan ramah pengguna. Saya juga sangat menghargai keragaman produk yang tersedia di sini, dengan pilihan yang luas dari berbagai merek ternama."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-11">
        <div class="bg-holder overlay overlay-0" style="background-image:url({{ asset('frontend/assets/img/gallery/cta.png') }});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="carousel slide carousel-fade" id="carouseCta" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-12">
                        <div class="text-light text-center py-2">
                          <h5 class="display-4 fw-normal text-400 fw-normal mb-4">Lokasi Outlet Kami Di</h5>
                          <h1 class="display-1 text-white fw-normal mb-8">Kemayoran, Jakarta Pusat, Indonesia.</h1><a class="btn btn-lg text-light fs-1" href="https://maps.app.goo.gl/fjDjLr6ramc4rKhH6" role="button">Lihat Maps
                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-7">
        <div class="container">
          <div class="row" id="footer">
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Company Info</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Affiliate</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Fashion Blogger</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Help &amp; Support</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Shipping Info</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Refunds</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to Order</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to Track</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Size Guides</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Customer Care</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Contact Us</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Payment Methods</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Bonus Point</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-auto ms-auto">
              <h5 class="lh-lg fw-bold text-1000">Signup For The Latest News</h5>
              <div class="row input-group-icon mb-5">
                <div class="col-12">
                  <input class="form-control input-box" type="email" placeholder="Enter Email" aria-label="email" />
                  <svg class="bi bi-arrow-right-short input-box-icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#424242" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                  </svg>
                </div>
              </div>
              <p class="text-800">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg><span class="text-800">+6285892226663</span>
              </p>
              <p class="text-800">
                <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg><span class="text-800">etalase_ec@gmail.com</span>
              </p>
            </div>
          </div>
        <!-- end of .container-->
      </section>

      <section class="py-0 pt-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 border-top text-center">
              <div class="copyright-text mt-3"> 
                <p>Copyright &copy; 2024 Etalase e-commerce</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('frontend/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('frontend/vendors/feather-icons/feather.min.js')}}"></script>
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('frontend/assets/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>