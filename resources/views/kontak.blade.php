<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="kontak.css">
    <title>Kontak</title>
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sticky-nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="sticky-nav">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" aria-current="page" href="/">Home</a>
              <a class="nav-link" href="/tentang">Tentang</a>
              <a class="nav-link" href="/berita">Berita</a>
              <a class="nav-link" href="/galeri">Galeri</a>
              <a class="nav-link active" href="/kontak">Kontak</a>
              <a href="/login"><i class="fas fa-sign-in-alt mt-2 ms-3"  style="color: white; "></i></a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    {{-- NAVBAR END --}}
    <section>
      <div class="banner-image d-flex align-items-center">
        <div class="container" style="position: relative; display:inline-block" id="cfd" style="padding-top: 4rem" id="halo">
             <div class="row">
            <div class="col-md-12 col-sm-12">
        
                <h1 class="judul1">Kontak Kami</h1>
               
            </div>
        </div>
        </div>
    </section>

    <section>
      <div class="container">
          <div class="row" style="padding-top: 3rem; padding-bottom: 3rem">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650427!2d107.66179861431733!3d-6.9432060698981015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1642582251686!5m2!1sid!2sid" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="row" id="titlebag3">
              <h1>Kontak Kami</h1>
          </div>
          <form action="/kontak" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row text-center">
              <div class="col-md-8">
                  <label form="comments" class="form-label"></label>
                  <textarea class="form-control" placeholder="Deskripsi" style="background-color: #f3f3f3;" name="deskripsi" id="comments" cols="30" rows="13"></textarea>
              </div>
              <div class="col-md-4 mb-5">
                  <label form="subject" class="form-label"></label>
                  <textarea class="form-control" style="background-color: #f3f3f3;" placeholder="Subject" name="subject" id="subject" cols="10" rows="2"></textarea>
                  <label form="nama" class="form-label"></label>
                  <textarea class="form-control" style="background-color: #f3f3f3;" placeholder="Nama" name="name" id="nama" cols="10" rows="2"></textarea>
                  <label form="email" class="form-label"></label>
                  <textarea class="form-control" style="background-color: #f3f3f3;" placeholder="Email" name="email" id="email" cols="10" rows="2"></textarea>
                  <div class="d-grid gap-2 mt-4" style="height: 68px">
                      <button class="btn btn-success" type="submit">Kirim          <svg xmlns="http://www.w3.org/2000/svg" width="17.986" height="18.414" viewBox="0 0 17.986 18.414">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: none;
                              stroke: #fff;
                              stroke-linecap: round;
                              stroke-linejoin: round;
                              stroke-width: 2px;
                            }
                          </style>
                        </defs>
                        <g id="send" transform="translate(1 1.414)">
                          <line id="Line_2" data-name="Line 2" class="cls-1" x1="9" y2="9" transform="translate(6.572)"/>
                          <path id="Path_2" data-name="Path 2" class="cls-1" d="M17.818,2,12.282,17.818,9.118,10.7,2,7.536Z" transform="translate(-2 -1.818)"/>
                        </g>
                      </svg></button>
                    </div>
              </div>
          </div>
        </form>
  
          <div class="container pt-4 pb-5">
          <div class="d-flex justify-content-md-evenly"></div>
          <div class="row row-cols-3 text-center">
              <div class="col">
                <span class="dot">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 18.829 14.834">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: none;
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 2px;
                          }
                        </style>
                      </defs>
                      <g id="mail" transform="translate(-0.607 -3)">
                        <path id="Path_25" data-name="Path 25" class="cls-1" d="M3.6,4H16.439a1.609,1.609,0,0,1,1.6,1.6V15.23a1.609,1.609,0,0,1-1.6,1.6H3.6A1.609,1.609,0,0,1,2,15.23V5.6A1.609,1.609,0,0,1,3.6,4Z"/>
                        <path id="Path_26" data-name="Path 26" class="cls-1" d="M18.043,6l-8.022,5.615L2,6" transform="translate(0 -0.396)"/>
                      </g>
                    </svg>
              </span>
                  <h5 class="isikontak">Email</h5>
                  <h6 class="isikontak2">tropisianimal@gmail.com</h6>
              </div>
              <div class="col">
                  <span class="dot">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 18.044 18.077">
                          <defs>
                            <style>
                              .cls-1 {
                                fill: none;
                                stroke: #fff;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 2px;
                              }
                            </style>
                          </defs>
                          <path id="phone" class="cls-1" d="M18.155,14.035v2.42A1.613,1.613,0,0,1,16.4,18.068a15.963,15.963,0,0,1-6.961-2.476,15.73,15.73,0,0,1-4.84-4.84A15.963,15.963,0,0,1,2.118,3.758,1.613,1.613,0,0,1,3.724,2h2.42A1.613,1.613,0,0,1,7.757,3.387a10.357,10.357,0,0,0,.565,2.267,1.613,1.613,0,0,1-.363,1.7L6.934,8.381a12.906,12.906,0,0,0,4.84,4.84L12.8,12.2a1.613,1.613,0,0,1,1.7-.363,10.357,10.357,0,0,0,2.267.565,1.613,1.613,0,0,1,1.387,1.637Z" transform="translate(-1.111 -1)"/>
                        </svg>
                  </span>
                  <h5 class="isikontak">Phone</h5>
                  <h6 class="isikontak2">+62 812 3456 7890</h6>
              </div>
              <div class="col">
                  <span class="dot">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 15.128 18.045">
                          <defs>
                            <style>
                              .cls-1 {
                                fill: none;
                                stroke: #fff;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 2px;
                              }
                            </style>
                          </defs>
                          <g id="map-pin" transform="translate(-2)">
                            <path id="Path_27" data-name="Path 27" class="cls-1" d="M16.128,7.564c0,5.105-6.564,9.481-6.564,9.481S3,12.669,3,7.564a6.564,6.564,0,1,1,13.128,0Z"/>
                            <circle id="Ellipse_17" data-name="Ellipse 17" class="cls-1" cx="2.5" cy="2.5" r="2.5" transform="translate(7 5.046)"/>
                          </g>
                        </svg>
                  </span>
                  <h5 class="isikontak">Location</h5>
                  <h6 class="isikontak2">Kota Bandung, Jawa Barat
                      <br>Indonesia
                  </h6>
              </div>
          </div>
      </div>
      </div>
      </div>
  </section>
    {{-- FOOTER --}}
    <footer class="puter bg-dark text-white">
      <div class="container text-md-start pt-5">
        <div class="row">
          <div class="col-md-6 col-12 mt-3">
            <h5><img src="assets/x1/tropisianimal.png" alt=""></h5>
            <p class="text-white" class="list-unstyled" style="margin-top: 1.5rem; color: grey;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum minus in enim dolores, eaque esse, voluptates culpa officia, dolorum praesentium autem quod explicabo. Impedit, quia velit voluptatum repellendus quam corrupti!</p>
            <div style="margin-top: 15px">
              <h5><img src="assets/x1/pesbuk.png" alt=""><img src="assets/x1/twitter.png" alt="" style="margin-left: 0.5rem"></h5>
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="row">
              <div class="col-lg-4 col-sm-6 mt-3">
                <h5>Useful Links</h5>
                <div class="list-unstyled" style="margin-top: 1.5rem">
                  <p style="margin-bottom: 0.5rem"><a href="#" class="text-white"></a>Blog</p>
                  <p style="margin-bottom: 0.5rem"><a href="#"></a>Hewan</p>
                  <p style="margin-bottom: 0.5rem"><a href="#"></a>Galeri</p>
                  <p><a href="#"></a>Testimonial</p>
                </div>
              </div>
  
              <div class="col-lg-4 col-6 mt-3">
                <h5>Privacy</h5>
                <div class="list-unstyled" style="margin-top: 1.5rem">
                  <p style="margin-bottom: 0.5rem"><a href="#" class="text-white"></a>Karir</p>
                  <p style="margin-bottom: 0.5rem"><a href="#"></a>Tentang Kami</p>
                  <p style="margin-bottom: 0.5rem"><a href="#"></a>Kontak Kami</p>
                  <p><a href="#"></a>Servis</p>
                </div>
              </div>
  
              <div class="col-lg-4 col-12 mt-3">
                <h5>Contact Info</h5>
                <div class="list-unstyled" style="margin-top: 1.5rem;">
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