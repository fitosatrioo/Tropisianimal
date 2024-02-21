<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <link href="assets/font-awesome/css/all.min.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/brands.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/solid.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <body>
    {{-- NAVBAR --}}
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="assets/x1/tropisianimal.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sticky-nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="sticky-nav">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" href="/">Home</a>
              <a class="nav-link" href="/tentang">Tentang</a>
              <a class="nav-link" href="/berita">Berita</a>
              <a class="nav-link" href="/galeri">Galeri</a>
              <a class="nav-link" href="/kontak">Kontak</a>
              <a href="/login"><i class="fas fa-sign-in-alt mt-2 ms-3"  style="color: white; "></i></a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    {{-- NAVBAR END --}}

    {{-- BAGIAN 1 --}}
    <section>
      <div class="banner-image d-flex align-items-center" id="banner1">
      <div class="container">
          <div class="row">
              <div class="col-11" id="titlebanner">
                  <h1>Hewan</h1>
                  <h1>Tropis di Dunia</h1>
                  {{-- <p class="judul2 col-5">Lorem ipsum dolor sit amet consectetur adipisicing elit,  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, ut enim ad</p> --}}
                  <div class="text-1">Lorem, ipsum dolor sit amet consectetur</div>
                  <div class="text-1">adipiscing elit, sed do eiusmod tempor incididunt</div>
                  <div class="text-1">ut labore et dolore magna aliqua, ut enim ad</div>
              </div>
          </div>
      </div>
      </div>
      </section>
    
    {{-- BANNER 1 END --}}

    {{-- BAGIAN 2 --}}
    <section>
      <div class="container" style="padding-top: 5rem">
          <div class="center_div">
              <div class="row">
                  <div class="col-lg-6 col-12" style="padding-top: 3rem" id="titlebag1">
                      <div class="row">
                          <div class="col-12 top_div">
                              <h4>TENTANG KAMI</h4>
                              <h1>Membangun</h1>
                              <h1>Komunitas Hewan</h1>
                              <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ab debitis consectetur omnis sunt, modi soluta quidem reprehenderit eum sapiente velit vel. Dolor ex, a quidem laborum ratione vel nobis.</h6>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur et ratione tempore voluptatum impedit dolorum dolores quam assumenda delectus deleniti doloremque laboriosam, nisi maiores, architecto dicta necessitatibus quia veritatis provident.</p>
                             <a href="/tentang"> <button type="button" class="btn btn-lg btn-success">Baca Selengkapnya  <svg xmlns="http://www.w3.org/2000/svg" width="12.405" height="13.639" viewBox="0 0 12.405 13.639">
                                <defs>
                                  <style>
                                    .cls-2 {
                                      fill: none;
                                      stroke: #fff;
                                      stroke-linecap: round;
                                      stroke-linejoin: round;
                                      stroke-width: 2px;
                                    }
                                  </style>
                                </defs>
                                <g id="arrow-right_1_" data-name="arrow-right (1)" transform="translate(-4.405 -3.586)">
                                  <line id="Line_3" data-name="Line 3" class="cls-2" x2="10" transform="translate(5.405 10.405)"/>
                                  <path id="Path_3" data-name="Path 3" class="cls-2" d="M12,5l5.405,5.405L12,15.811" transform="translate(-1.595)"/>
                                </g>
                              </svg>
                                
                              </button></a>
                          </div>
                      </div>
                  </div>
                  {{-- kanan --}}
                  <div class="col-lg-6 col-12">
                      <div class="row mb-3">
                          <div class="col-6">
                              <img src="assets/x2/alessandro-desantis-9_9hzZVjV8s-unsplash@2x.png" class="w-100" id="sec1pict1" alt="">
                          </div>
                          <div class="col-6">
                              <img src="assets/x2/komodo.png" id="sec1pict1" class="w-100" alt="">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <img src="assets/x2/kyle-nieber-3ryX0ShTMWg-unsplash@2x.png" class="w-100" id="sec1pict2" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <section style="padding-top: 5rem">
      <div class="banner-image d-flex" id="banner2">
          <div class="container">
              <div class="row" id="titlebag2">
                  <h1>Kami Membawa Anda</h1>
                  <h1>Untuk Mengetahui Lebih Dalam</h1>
              </div>
              @include('components.cardpaw')
          </div>
      </div>
  </section>
  
  <section style="padding-top: 5rem">
      <div class="container">
          <div class="row" id="titlebag3">
              <h4>BERITA</h4>
              <h1>Baca Berita Terbaru Kami</h1>
              <h1>Dalam Tropisianimal</h1>
          </div>
      </div>
      <div class="container" style="padding-top: 2rem">
          <div class="row">
            
              @foreach($datas as $item)
              <div class="col-md-4 mb-4">
                  <a class="nav-link" href="/berita/{{ $item->id }}"><div class="card">
                          <div style="background-color: rgb(245, 238, 238)">
                              <img class="card-img-top"
                                  src="uploads/news/{{ $item->image }}"
                                  alt="Card image cap" id="imgcard2" style="width: 100%">
                              <div class="card-body text-center">
                                  <div class="card-text" id="titlecard2">
                                      <h1>{{ $item->title }}</h1>
                                      <p>{!! $item->content !!}</p>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          @endforeach
           
          </div>
      </div>
  </section>
  
  <section style="padding-top: 5rem">
      <div class="container">
          <div class="row" id="titlebag4">
              <h4>GALERI</h4>
              <h1>Lihat Lebih Banyak Hewan Tropis</h1>
              <h1>Pada Galeri Kami</h1>
          </div>
      </div>
          <div class="owl-carousel owl-theme mt-4" id="owl">
              <div class="imgcarousel"><img src="assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/orangutan.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/oscar-merchant-sCt1TLNIxFw-unsplash@2x.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/kakatua.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/orangutan.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/oscar-merchant-sCt1TLNIxFw-unsplash@2x.png" style="width: 100%" alt=""></div>
              <div class="imgcarousel"><img src="assets/x2/kakatua.png" style="width: 100%" alt=""></div>
          </div>
              <div class="owl-dots">
              <div class="owl-dot active"><span></span></div>
              <div class="owl-dot"><span></span></div>
              <div class="owl-dot"><span></span></div>
  </section>
  
    {{-- BAGIAN 5 END --}}

    {{-- FOOTER --}}
    <footer class="puter bg-dark text-white">
        <div class="container text-md-start pt-5">
          <div class="row">
            <div class="col-md-6 col-12 mt-3">
              <h5><img src="assets/x1/tropisianimal.png" alt=""></h5>
              <p class="" class="list-unstyled2" style="margin-top: 1.5rem;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum minus in enim dolores, eaque esse, voluptates culpa officia, dolorum praesentium autem quod explicabo. Impedit, quia velit voluptatum repellendus quam corrupti!</p>
              <div style="margin-top: 15px">
                <h5><img src="assets/x1/pesbuk.png" alt=""><img src="assets/x1/twitter.png" alt="" style="margin-left: 0.5rem"></h5>
              </div>
            </div>
    
            <div class="col-md-6">
              <div class="row">
                <div class="col-lg-4 col-sm-6 mt-3">
                  <h5>Useful Links</h5>
                  <div class="text-white" style="margin-top: 1.5rem">
                    <p style="margin-bottom: 0.5rem"><a href="#" class="text-white"></a>Blog</p>
                    <p style="margin-bottom: 0.5rem"><a href="#"></a>Hewan</p>
                    <p style="margin-bottom: 0.5rem"><a href="#"></a>Galeri</p>
                    <p><a href="#"></a>Testimonial</p>
                  </div>
                </div>
    
                <div class="col-lg-4 col-6 mt-3">
                  <h5>Privacy</h5>
                  <div class="text-white" style="margin-top: 1.5rem">
                    <p style="margin-bottom: 0.5rem"><a href="#" class="text-white"></a>Karir</p>
                    <p style="margin-bottom: 0.5rem"><a href="#"></a>Tentang Kami</p>
                    <p style="margin-bottom: 0.5rem"><a href="#"></a>Kontak Kami</p>
                    <p><a href="#"></a>Servis</p>
                  </div>
                </div>
    
                <div class="col-lg-4 col-12 mt-3">
                  <h5>Contact Info</h5>
                  <div class="text-white" style="margin-top: 1.5rem;">
                    <p><a href="#" class="icon"><i class="fa fa-envelope" style="color: white; margin-right: 10px"></i></a>tropisianimal@gmail.com</p>
                    <p><a href="#" class="icon"><i class="fa fa-phone" style="color: white; margin-right: 10px"></i></a>+62 812 3456 7890</p>
                    <p><a href="#" class="icon"><i class="fa fa-map-marker fa-map-marker-alt" style="color: white; margin-right: 10px"></i></a>Kota Bandung, Jawa Barat</p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="bottom-footer text-center pt-5 pb-3">
              <p class="copyright">Copyright &copy;2020 All rights reserved</p>
            </div>
          </div>
        </div>
      </footer>
    {{-- FOOTER END --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
  $('.owl-carousel').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  dots:false,
  autoplay:true,
  autoplaytimeout: 1000,
  stagepadding: 50,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})
  </script>  

  <script>
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function(){
        if(window.pageYOffset > 100){
            nav.classList.add('bg-info', 'shadow');
        } else {
            nav.classList.remove('bg-info', 'shadow');
        }
      });
  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>