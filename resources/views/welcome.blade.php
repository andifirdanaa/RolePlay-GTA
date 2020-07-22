<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <title>Asik Indo Roleplay</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--icon discord-->
        <link rel="stylesheet" href="path/to/fork-awesome/css/fork-awesome.min.css">
        <!-- external css  -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        
          <!-- Vendor CSS Files -->
          <link href="boos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <link href="boos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
          <link href="boos/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
          <link href="boos/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
          <link href="boos/vendor/venobox/venobox.css" rel="stylesheet">
          <link href="boos/vendor/aos/aos.css" rel="stylesheet">

          <!-- Template Main CSS File -->
          <link href="boos/css/style.css" rel="stylesheet">
          <link href="price/style.css" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            .logo{
                background :url('/img/logo.png');
                background-position : center;
                background-repeat : no-repeat;
                width : 300px;
                height : 300px;
                position: relative;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top{
                margin-top : 47px;
                height : 300px;
                width : 300px;
                position : center;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links {
                color: black;
                padding: 0 25px;
                letter-spacing: .8rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .but{
                text-color : white;
            }
            .a{
                color : white;
                font-size: 13px;
                font-weight : 600;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .picture{
              background-position : center;
              margin-bottom: 15px;
              overflow: hidden;
              height: 260px;
               max-width: 100%;
                position: relative;
            }

        </style>
    </head>
    <body>
         <!-- ======= Header ======= -->
          <header id="header" class="header-transparent">
            <div class="container">

              <div id="logo" class="pull-left">
                <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="#hero">Regna</a></h1>-->
              </div>

              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="index.html">Play</a></li>
                  <li><a href="#call-to-action">Tentang</a></li>
                  <li><a href="#team">Discord</a></li>
                  <li><a href="#portfolio">Donasi</a></li>
                  <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->
            </div>
          </header><!-- End Header -->

        <section id="hero">
            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1><img class="top" src="/img/logo.png">
                <div class="title m-b-md">
                    <b><a href="" class="typewrite" data-period="2000" data-type='[ "Asik Indonesia Roleplay.", "enjoy!." ]'>
                        <span class="wrap"></span>
                    </a></b>
                </div></h1>

                <div class="links">
                <a href="fivem://connect/52.187.164.222" class="btn-get-started"><span>Masuk Kota</span></a>
                <a href="ts3server://asikindonesiaroleplay.site" class="btn-get-started">Masuk Teamspeak</a>
                <a href="https://discord.gg/VTa6W8u" class="btn-get-started">Masuk Discord</a>
                <a href="/Launcher" class="btn-get-started">Download Launcher</a>
                    
                </div>
                <div class="container">
           <!--  <font size="24" style="color: gold">AIR</font>
                <font size="4" style="color: white">Asik Indo RolePlay adalah sebuah kota yang memiliki perekonomian yang rapi dan teratur. ROLEPLAY adalah sebuah permainan yang mana kita beranggapan serius tetapi FUN dan seakan akan hidup di kota tersebut seperti kehidupan sesungguhnya. </font> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Tentang</h3>
            @foreach($status as $row)
            <p class="cta-text">{{$row->text}}</p>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Action Section -->

    <!-- ======= Discord Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <p class="section-description">Foto Gallery</p>
        </div>
        <div class="row">
          @foreach($image as $row)
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="{{asset('images/'.$row->image)}}" alt=""></div>
               <h4>{{$row->tittle}}</h4>
             <!--  <span>Chief Executive Officer</span> -->
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Donasi</h3>
          <p class="section-description">Pilih Donasi</p>
        </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 col-xs-12 portfolio-item filter-app">
            
            <div class="pricingTable">
                    <div class="pricing-content">
                        <div class="pricingTable-header">
                            <h3 class="title">Bronze</h3>
                        </div>
                        <ul class="content-list">
                            <li>Role Discord</li>
                            <li>Uang IC Rp.300.000.000</li>
                            <li>Motor H2R</li>
                            <li>Pajak gratis 1 Minggu</li>
                            <li class="disable">Nomor HP</li>
                            <li class="disable">Plat Nomor</li>
                            <li class="disable">Mobil</li>
                            <li class="disable">Voucher</li>
                        </ul>
                        <div class="price-value">
                            <span class="amount">Rp.150.000,-</span>
                            <span class="duration">per month</span>
                        </div>
                        <div class="pricingTable-signup">
                            <a href="https://api.whatsapp.com/send?phone=6281383262628&text=Hai%20Kak,%0ASaya%20mau%20donasi%20Bronze%0ANama%20:%0ANama%20IC%20:%0ANama%20Discord%20:%20">BUY</a>
                        </div>
          </div>
        </div>
      </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
             <div class="pricingTable blue">
                    <div class="pricing-content">
                        <div class="pricingTable-header">
                            <h3 class="title">Silver</h3>
                        </div>
                        <ul class="content-list">
                            <li>Role Discord</li>
                            <li>Uang IC Rp.700.000.000</li>
                            <li>Pajak gratis 2 Minggu</li>
                            <li>Nomor HP cantik min.4 digit</li>
                            <li>1 Mobil Ferrari </li>
                            <li class="disable">1 Plat Nomor format</li>
                            <li class="disable">Rumah</li>
                            <li class="disable">Voucher</li>
                        </ul>
                        <div class="price-value">
                            <span class="amount">Rp.250.000,-</span>
                            <span class="duration">per month</span>
                        </div>
                        <div class="pricingTable-signup">
                            <a href="https://api.whatsapp.com/send?phone=6281383262628&text=Hai%20Kak,%0ASaya%20mau%20donasi%20Silver%0ANama%20:%0ANama%20IC%20:%0ANama%20Discord%20:%20">BUY</a>
                        </div>
          </div>
        </div>
      </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
             <div class="pricingTable magenta">
                    <div class="pricing-content">
                        <div class="pricingTable-header">
                            <h3 class="title">Gold</h3>
                        </div>
                        <ul class="content-list">
                            <li>Role Discord</li>
                            <li>Uang IC Rp.900.000.000</li>
                            <li>Pajak gratis 1 Bulan</li>
                            <li>Nomor HP cantik min.3 digit</li>
                            <li>1 Mobil Khusus request </li>
                            <li>1 Plat Nomor bebas min.3 digit</li>
                            <li>1 Rumah perumahan</li>
                            <li>Voucher modif</li>
                        </ul>
                        <div class="price-value">
                            <span class="amount">Rp.300.000,-</span>
                            <span class="duration">per month</span>
                        </div>
                        <div class="pricingTable-signup">
                            <a href="https://api.whatsapp.com/send?phone=6281383262628&text=Hai%20Kak,%0ASaya%20mau%20donasi%20Gold%0ANama%20:%0ANama%20IC%20:%0ANama%20Discord%20:%20">BUY</a>
                        </div>
                 </div>
              </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
        
         <!-- ======= Footer ======= -->
          <footer id="footer">
            <div class="footer-top">
              <div class="container">

              </div>
            </div>

            <div class="container">
              <div class="copyright">
               &copy; 2020 <b>Team Baron</b> All Rights Reserved. Desainer Web AF
              </div>
              <div class="credits">
                <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
              -->
               
              </div>
            </div>
          </footer><!-- End Footer -->

        <script type="text/javascript" src="custom-js/custom-js.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
         <!-- Vendor JS Files -->
          <script src="boos/vendor/jquery/jquery.min.js"></script>
          <script src="boos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="boos/vendor/jquery.easing/jquery.easing.min.js"></script>
          <script src="boos/vendor/php-email-form/validate.js"></script>
          <script src="boos/vendor/counterup/counterup.min.js"></script>
          <script src="boos/vendor/waypoints/jquery.waypoints.min.js"></script>
          <script src="boos/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="boos/vendor/superfish/superfish.min.js"></script>
          <script src="boos/vendor/hoverIntent/hoverIntent.js"></script>
          <script src="boos/vendor/owl.carousel/owl.carousel.min.js"></script>
          <script src="boos/vendor/venobox/venobox.min.js"></script>
          <script src="boos/vendor/aos/aos.js"></script>

          <!-- Template Main JS File -->
          <script src="boos/js/main.js"></script>
    </body>
</html>
