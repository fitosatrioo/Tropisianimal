<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="galeri.css">
    <title>Galeri</title>
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
              <a class="nav-link active" href="/galeri">Galeri</a>
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
      <div class="banner-image d-flex align-items-center">
        <div class="container" style="position: relative; display:inline-block" id="cfd" style="padding-top: 4rem" id="halo">
             <div class="row">
            <div class="col-md-12 col-sm-12">
        
                <h1 class="judul1">Galeri</h1>
               
            </div>
        </div>
        </div>
    </section>
    {{-- BAGIAN 1 END --}}

    {{-- GALERI --}}
    <section>
        <div class="container">
            <div class="row" style="padding-top: 4rem;">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assets/x1/CAROUSEL.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/x1/CAROUSEL.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/x1/CAROUSEL.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="row row-cols-4" style="padding-bottom: 3rem; padding-top: 1.8rem;">

              @foreach ($datas as $item)
                <div class="col-12 col-lg-3 col-md-6 pt-3 text-center"  id="galeri">
                    <div class="carousel-item active">
                        <img src="uploads/gallery/{{ $item->image }}" class="galeri1 w-100" alt="...">
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="carousel-item active">
                        <img src="assets/x1/rusa2.png" class="galeri1" alt="...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-item active">
                        <img src="assets/x1/gajahbag2.png" class="galeri1" alt="...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-item active">
                        <img src="assets/x2/kakatua.png" class="galeri1" alt="...">
                    </div>
                </div> --}}
            

              
                {{-- <div class="col-md-3 pt-4">
                    <div class="carousel-item active">
                        <img src="assets/x1/kudanil.png" class="galeri1" alt="...">
                    </div>
                </div>
                <div class="col-md-3 pt-4">
                    <div class="carousel-item active">
                        <img src="assets/x2/orangutan.png" class="galeri1" alt="...">
                    </div>
                </div>
                <div class="col-md-3 pt-4">
                    <div class="carousel-item active">
                        <img src="assets/x2/laut.png" class="galeri1" alt="...">
                    </div>
                </div>
                <div class="col-md-3 pt-4">
                    <div class="carousel-item active">
                        <img src="assets/x2/komodo.png" class="galeri1" alt="...">
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </section>

    {{-- GALERI END --}}

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