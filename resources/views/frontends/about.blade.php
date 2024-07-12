<!DOCTYPE html>
<html lang="en">
<head>

     <title>Auto Stars | Motorsport</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="icon" href="frontend/img/logo.png" type="image/x-icon">
     <link rel="stylesheet" href="frontend/frontendcss/bootstrap.min.css">
     <link rel="stylesheet" href="frontend/frontendcss/font-awesome.min.css">
     <link rel="stylesheet" href="frontend/frontendcss/owl.carousel.css">
     <link rel="stylesheet" href="frontend/frontendcss/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link href="frontend/frontendcss/landing.css" rel="stylesheet" >

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Auto Stars Motorsport</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="{{route('index')}}">Home</a></li>
                         <li><a href="{{route('car')}}">Cars</a></li>
                         <li><a href="{{route('about')}}">About Us</a></li>
                         <li><a href="{{route('login')}}">Login</a></li>
                         <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section id="list">
          <img src="frontend/img/showroom 1.jpg" alt="" style="width:300px; height:210px;">       
          <p>
              Auto Stars Motorsport adalah perusahaan sewa mobil di Depok yang hadir untuk memberikan kemudahan dan kecepatan bagi anda dalam menyewa mobil di Depok. Dimanapun dan kapanpun.
          </p>
          <p>
              Kami memungkinkan anda untuk dapat mengakses ratusan unit mobil siap sewa yang dapat anda pilih sesuai kebutuhan. Mulai dari Sportcar, Hypercar hingga mobil listrik. Semua dapat anda sewa hanya dengan satu klik, hanya di Auto Stars Motorsport.
          </p>
          <div class="Deskripsi">
              <h2>Ini adalah beberapa keunggulan perusahaan jasa sewa mobil Auto Stars Motorsport:</h2>
              <ul>
                  <li><h4>Proses sewa mobil yang mudah dan cepat :</h4> Anda dapat menyewa mobil hanya dengan satu klik melalui website atau aplikasi Auto Stars.</li>
                  <li><h4>Pilihan mobil yang beragam : </h4>Force W menawarkan berbagai jenis mobil untuk memenuhi kebutuhan dan preferensi Anda.</li>
                  <li><h4>Harga sewa yang kompetitif :</h4> Force W menawarkan harga sewa mobil yang terjangkau dengan jaminan kualitas dan layanan terbaik.</li>
                  <li><h4>Layanan yang profesional dan ramah :</h4> Tim Force W selalu siap membantu Anda dalam memilih mobil yang tepat dan memberikan layanan yang terbaik.</li>
                  <li><h4>Memiliki beberapa cabang di jabodetabek :</h4> Memiliki 5 cabang strategis di jabodetabek untuk melayani kebutuhan mobilitas Anda.</li>
                  <li><h4>Memiliki layanan test drive :</h4> Memungkinkan test drive sebelum Anda menyewa mobil, sehingga Anda dapat merasakan kenyamanan dan performa mobil yang ingin disewa.</li>
              </ul>
              <p>
                    <em>Jangan ragu untuk menjelajahi halaman-halaman lain untuk mendapatkan informasi lebih lanjut. Terima kasih atas kunjungan Anda!</em>
              </p>
          </div>
     </section>

     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>Depok <br>Jawa Barat, Indonesia</p>
                              </address>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2024 Auto Stars Motosport</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+62 0821 3999 8222</p>
                                   <p><a href="AutoStarMotorSport@gmail.com">AutoStarMotorSport@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="{{route('index')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('car')}}">Cars</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Thanks For Coming</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <div class="footer-box">
                                             <img src="frontend/img/logo.png" height="90px">
                                             <h3>www.AutoStarMotorsport.com</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="frontend/frontendjs/jquery.js"></script>
     <script src="frontend/frontendjs/bootstrap.min.js"></script>
     <script src="frontend/frontendjs/owl.carousel.min.js"></script>
     <script src="frontend/frontendjs/smoothscroll.js"></script>
     <script src="frontend/frontendjs/custom.js"></script>

</body>
</html>