<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang</title>
    <link rel="stylesheet" href="postberita.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
</head>
<body>
  
        
 <section>   
<form action="/berita/{{ $news->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      
          <div class="container mt-5" style="position: relative;">
            <h3 class="text-center" style=" color:black;">{{ $news->title }}</h3>
            <div class="row  mt-5 justify-content-left" style="width: 1200px">
              {{-- <div class="col-md-4">
                <div style="width: 19rem;">
                  <img src="assets/logo_hydro.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    
                    <p class="card-text">HYDRO adalah Business to Business (B to B) marketplace yang mempertemukan antara pemilik produk dengan para online marketer yang siap membantu memasarkan produk para produsen secara online.</p> --}}
      
      
                    <div class="col-lg-12 justify-content-md-center col-6">
                        <div class="card shadow">
                          <div class="img-area text-center mt-2 w-100"><img src="/uploads/news/{{ $news->image }}" alt=""></div>
                          <div class="img-text" style="margin-top: 30px">
                            <h6 style="margin-left: 7px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ab debitis consectetur omnis sunt, modi soluta quidem reprehenderit eum sapiente velit vel. Dolor ex, a quidem laborum ratione vel nobis.</h6>
                            <p style="margin-left: 7px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur et ratione tempore voluptatum impedit dolorum dolores quam assumenda delectus deleniti doloremque laboriosam, nisi maiores, architecto dicta necessitatibus quia veritatis provident.</p>
                           
                          </div>
                        </div>
                      </div>
              
            </div>
          </div>
        </form><br><br>
      </section> 
    

          <footer class="puter bg-dark text-white">
            <div class="container text-md-start pt-5">
              <div class="row">
                <div class="col-md-6 col-12 mt-3">
                  <h5>Tropisianimal</h5>
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
    


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>