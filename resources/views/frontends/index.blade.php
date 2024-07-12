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


     <!-- MENU -->
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

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Search for cool car?</h1>
                                        <h3>Auto Starts Motosport can give what you want!</h3>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Auto Stars Motosport</h1>
                                        <h3>a showroom that has become an icon in the automotive world since it was founded in 1995. Strategically located in the center of a busy city, this showroom was founded with the vision to become the main center for car and motorbike lovers who want the best quality and service.
                                        With a strong dedication to customer satisfaction, Auto Stars Motosport not only offers a variety of well-known branded vehicles, but is also a place that provides a special shopping experience. And ..... </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>It is trusted and has also become a mainstay for luxury car collectors</h1>
                                        <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About us</h2>

                                   <br>

                                   <p class="lead">Auto Stars Motorsport is a car rental company in Depok that is here to provide convenience and speed for you in renting a car in Depok. Wherever and whenever.

                                        We enable you to access hundreds of ready-to-rent car units that you can choose according to your needs. Starting from Sportcars, Hypercars to electric cars. You can rent everything with just one click, only at Auto Stars Motorsport.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

          <section id="car">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Cars <small>The Collections Cars</small></h2>
                              </div>
                         </div>
                              <div class="col-md-6 col-sm-6">
                                   <div class="team-thumb">
                                        <div class="team-image">
                                             <img src="frontend/img/bmwz41.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="team-info">
                                             <h3>BMW Z4</h3>

                                             <p class="lead"><small>from</small> <strong>Rp 5.000.000</strong> <small>daily</small></p>

                                             <span>The first-generation BMW Z4, designed by Danish BMW-designer Anders Warming, came as the E85 roadster and E86 coupé. It improved upon the Z3 with a larger size and stiffer chassis.</span>
                                        </div>
                                        <div class="team-thumb-actions">
                                             <a href="{{route('car')}}" class="section-btn btn btn-primary btn-block">View Offer</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <div class="team-thumb">
                                        <div class="team-image">
                                             <img src="frontend/img/Porsche 911.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="team-info">
                                             <h3>Porsche 911</h3>

                                             <p class="lead"><small>from</small> <strong>Rp 7.000.000</strong> <small>daily</small></p>

                                             <span>The Porsche 911 (pronounced Nine Eleven or in German: Neunelf) is a two-door 2+2 high performance rear-engined sports car introduced in September 1964 by Porsche AG of Stuttgart, Germany.</span>
                                        </div>
                                        <div class="team-thumb-actions">
                                             <a href="{{route('car')}}" class="section-btn btn btn-primary btn-block">View Offer</a>
                                        </div>
                                   </div>
                              </div>
                              <br><br>
                              <div class="col-md-6 col-sm-6 mt-5">
                                   <div class="team-thumb">
                                        <div class="team-image">
                                             <img src="frontend/img/Bugatti Chiron.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="team-info">
                                             <h3>Bugatti Chiron</h3>

                                             <p class="lead"><small>from</small> <strong>Rp 10.000.000 </strong> <small>daily</small></p>

                                             <span>The Bugatti Chiron is a mid-engine two-seater sports car designed and developed in Germany by Bugatti Engineering GmbH and manufactured in Molsheim, France, by French automobile manufacturer Bugatti Automobiles S.A.S.</span>
                                        </div>
                                        <div class="team-thumb-actions">
                                             <a href="{{route('car')}}" class="section-btn btn btn-primary btn-block">View Offer</a>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-6 mt-5">
                                   <div class="team-thumb">
                                        <div class="team-image">
                                             <img src="frontend/img/hyundai ioniq 5.jpg" class="img-responsive" alt="">
                                        </div>
                                        <br>
                                        <div class="team-info">
                                             <h3>Hyundai Ioniq</h3>

                                             <p class="lead"><small>from</small> <strong>Rp 3.000.000 </strong> <small>daily</small></p>

                                             <span>The Bugatti Chiron is a mid-engine two-seater sports car designed and developed in Germany by Bugatti Engineering GmbH and manufactured in Molsheim, France, by French automobile manufacturer Bugatti Automobiles S.A.S.</span>
                                        </div>
                                        <div class="team-thumb-actions">
                                             <a href="{{route('car')}}" class="section-btn btn btn-primary btn-block">View Offer</a>
                                        </div>
                                   </div>
                              </div>
                         </div>    
                    </div>
               </div>
          </section>
     </main>

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