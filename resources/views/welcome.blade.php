<!doctype html>
<html lang="en">

  <head>    
    <meta charset="utf-8">
    <meta name="description" content="Responsive Bootstrap Landing Page Template">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>SEAMCO</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="css/material.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="/css/lightslider.css"/>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css">
    <style type="text/css">
      li img {
        width: 100%;
        height: 75vh;
      }

      .md-ad {
        position: sticky;
        top: 0;
      }
      @media screen and (max-width: 600px) {
        .hide_if_mobile {
          visibility: hidden;
          clear: both;
          float: left;
          margin: 10px auto 5px 20px;
          width: 28%;
          display: none;
        }
        .small_if_mobile {
          height: 90px;
          width: auto;
        }
      }
    </style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6429484135715885",
              enable_page_level_ads: true
         });
    </script>
  </head>

  <body>

    <div class="navbar navbar-inverse menu-wrap">
      <div class="navbar-header text-center">
        <a class="navbar-brand" href="javascript:void(0)">SEAMCO</a>
      </div>
        <ul class="nav navbar-nav main-navigation">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#features">Our Goals</a></li>
          <li><a href="#why">Purpose</a></li>
          <li><a href="#gallery">Gallery</a></li>
        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    
    <div class="content-wrap">
     <header class="hero-area" id="home">
      
      <div class="container">
          <div class="col-md-12">

            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <div class="navbar-header col-md-12">
                  <a href="#" style="font-size: 3.5em; color: #C4C3C3">
                    <img class="small_if_mobile" src="{{ asset('img/seamco_logo.png') }}" width="200" height="150"> 
                    <b style="color: #3399FF; padding-top: 30px" class="hide_if_mobile">Seafarers Mighty Credit Cooperative</b>
                  </a>
                </div>
                <div class="navbar-right">
                  <button class="menu-icon"  id="open-button">
                    <i class="mdi-navigation-menu"></i>
                  </button>             
                </div>
              </div>
              <b style="color: #3399FF; display: none;" class="col-md-12 show_if_mobile">Seafarers Mighty Credit Cooperative</b>
            </div>
        </div>        
        <div class="contents text-right">
          <h2 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms"><b>Your trusted partner in advancing economic and quality of life</b></h1>
          <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Thrift - Respect - Unity - Service - Transparency</p>
          <a href="http://membership.seamco.org" class="btn btn-lg btn-primary wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms" target="_blank">Join Us Today!</a>
          <a href="#features" class="btn btn-lg btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Learn More</a>
        </div>   
    </header>

    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">Our GOALS</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">The goals of this Cooperative are to help improve the quality of services of its members and in furtherance thereto shall aim</h2>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-trending-up"></i>
              </div>
              <div class="features-text">
                <h4>Save for the future!</h4>
                <p>
                  Instill culture of saving and financial stability among its members.
                </p>
              </div>
             </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="features">
              <div class="icon">
                <i class="mdi mdi-star"></i>
              </div>
              <div class="features-text">
                <h4>Life quality</h4>
                <p>
                  Promote quality of life among members through mutual and SEAMCO Programs.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-communication-business"></i>
              </div>
              <div class="features-text">
                <h4>Our part in the nation's economy</h4>
                <p>
                  Implement programs and activities that addresses socio-economic needs of the community.
                </p>
              </div>
            </div>
          </div>            


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="features">
              <div class="icon">
                <i class="mdi mdi-security"></i>
              </div>
              <div class="features-text">
                <h4>Secure your money</h4>
                <p>
                  Provide protection to the loans and funds of the members.
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="features">
              <div class="icon">
                <i class="mdi mdi-credit-card"></i>
              </div>
              <div class="features-text">
                <h4>Loans for members</h4>
                <p>
                  Source of credit for its members at affordable rates of interest.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="features">
              <div class="icon">
                <i class="mdi mdi-arrow-expand-all"></i>
              </div>
              <div class="features-text">
                <h4>To help more members!</h4>
                <p>
                  Increase membership in regional and national level.
                </p>
              </div>
            </div>
          </div>   
        </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="features">
              <div class="icon">
                <i class="mdi mdi-lightbulb-on-outline"></i>
              </div>
              <div class="features-text">
                <h4>Share financial knowledge</h4>
                <p>
                  Conduct financial education program for the members.
                </p>
              </div>
            </div>
          </div>     
        </div>
      </div>
    </section>

    <section id="why" class="section">
      <div class="container">
        
        <div class="row">     

          <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="{{ asset('img/new-advert-seamco2-1.jpg') }}" height="800" width="600" alt="">
          </div>

          <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="pull-left content">
              <h2> Purpose of SEAMCO</h2> <br>
              <p style="font-size: 1.5em">
                The cooperative has been organized, bearing <br>
                in mind the following ideologies:<br>
              </p> <br>
              <ul class="list-item"> 
                <li><i class="mdi-action-done"></i>Promotes and undertakes savings and lending services among its members</li>
                <li><i class="mdi-action-done"></i>Generates a common pool of funds in order to provide financial assistance to its members for productive and provident purposes</li>
                <li><i class="mdi-action-done"></i>Engages to provide the basic and necessary services to seafarers and to the maritime industry as a whole</li>
              </ul>
              <a href="http://membership.seamco.org" class="btn btn-lg btn-primary" target="_blank">Join Us Now!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section id="main-features" class="section main-feature-gray gallery">
      <div class="container">

        <div class="row">   
          <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Our Mission
              </h3>
              <p style="font-size: 1.5em">
                To provide development opportunities and maximize member’s wealth through cost effective
                services consistent with universal cooperative principles and transparent management
              </p>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/mission.jpg" class="img-responsive" alt="">
          </div>  

        </div>

      </div>
    </section>

     <section id="main-features" class="section">
      <div class="container">


        <div class="row">   
          <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/vision.jpg" class="img-responsive" alt="">
          </div>    

          <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Our Vision
              </h3>
              <p style="font-size: 1.5em">
                To be the leading cooperative in transforming lives for a Better Communities
              </p>
            </div>
          </div>
          
        </div>

      </div>
    </section>

    <section id="cta">
      <div class="container">
        <div class="row text-center">         
            <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Join Us Today and Take Control of Your Future!</h3>
             <a href="http://membership.seamco.org" class="btn btn-lg btn-border" target="_blank">Register Now!</a>
          </div>
      </div>
    </section>

    <section id="main-features" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Gallery</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">SEAMCO's events and activities</h2>
        </div>
      </div>
      <div id="gallery" class="row">
        <div class="container">
          <div class="col-md-12">
            <div class="item">            
                <div class="clearfix">
                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                      <li data-thumb="uploads/lamac/post_presentation.jpg"> 
                        <img src="uploads/lamac/post_presentation.jpg" />
                      </li>
                      <li data-thumb="uploads/lamac/presentation.jpg"> 
                        <img src="uploads/lamac/presentation.jpg" />
                      </li>
                      <li data-thumb="uploads/lamac/arrival_2.jpg"> 
                        <img src="uploads/lamac/arrival_2.jpg" />
                      </li>
                      <li data-thumb="uploads/lamac/arrival.jpg"> 
                        <img src="uploads/lamac/arrival.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/planting_3.jpg"> 
                        <img src="uploads/mangrove_planting/planting_3.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/planting_2.jpg"> 
                        <img src="uploads/mangrove_planting/planting_2.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/planting_1.jpg"> 
                        <img src="uploads/mangrove_planting/planting_1.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/jjc.jpg"> 
                        <img src="uploads/mangrove_planting/jjc.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/green.jpg"> 
                        <img src="uploads/mangrove_planting/green.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/first_year.jpg"> 
                        <img src="uploads/mangrove_planting/first_year.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/cert.jpg"> 
                        <img src="uploads/mangrove_planting/cert.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/all.jpg"> 
                        <img src="uploads/mangrove_planting/all.jpg" />
                      </li>
                      <li data-thumb="uploads/mangrove_planting/mangrove_tarp.jpg"> 
                        <img src="uploads/mangrove_planting/mangrove_tarp.jpg" />
                      </li>
                      <li data-thumb="uploads/seamco_one_year.jpg"> 
                        <img src="uploads/seamco_one_year.jpg" />
                      </li>
                      <li data-thumb="uploads/anniversary_post.jpg"> 
                        <img src="uploads/anniversary_post.jpg" />
                      </li>
                      <li data-thumb="img/welcome.jpg"> 
                        <img src="img/welcome.jpg" />
                      </li>
                      <li data-thumb="img/happy.jpg"> 
                        <img src="img/happy.jpg" />
                      </li>
                      <li data-thumb="img/ribbon_cutting.jpg"> 
                        <img src="img/ribbon_cutting.jpg" />
                      </li>
                      <li data-thumb="img/signing.jpg"> 
                        <img src="img/signing.jpg" />
                      </li>
                      <li data-thumb="img/the_team.jpg"> 
                        <img src="img/the_team.jpg" />
                      </li>
                      <li data-thumb="img/blessing.jpg"> 
                        <img src="img/blessing.jpg" />
                      </li>
                  </ul>
                </div>
            </div>
          </div>
        </div>  
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">That's Where We Are</h2>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-maps-map"></i>
                  </div>
                  <h4>Location</h4>
                  <p>2F Hotel De Mercedes Hotel, Pelaez Street, Brgy. Kalubihan, Cebu City</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-content-mail"></i>
                  </div>
                  <h4>Email</h4>
                  <p>info@seamco.org</p>
                </div>
              </div>
              <div class="clear"></div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-settings-phone"></i>
                  </div>
                  <h4>Contact Numbers</h4>
                  <p>
                    0928 268 3776 <br>
                    413-2230  
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-thumb-up"></i>
                  </div>
                  <h4>Social Media</h4>
                  <p>
                    <a href="https://www.facebook.com/seafafersmightycreditcoop/" target="_blank">SEAMCO Facebook page</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">Love to Hear From You</h2>
            <!-- Form -->
            <form class="contact-form" role="form" action="{{ route('emails.store') }}" method="post">
              {{ csrf_field() }}
              <i class="mdi-action-account-box"></i>
              <input type="text" class="form-control" name="name" placeholder="Please enter your name here" value="{{ old('name') }}">
            
              <i class="mdi-content-mail"></i>
              <input type="email" class="form-control" name="email_address" placeholder="Your email address, so we can email back to you!" value="{{ old('email_address') }}">                  
                                    
              <textarea class="form-control" name="message" placeholder="Your question or message" rows="4">{{ old('message') }}</textarea>              
              <button type="submit" id="submit" class="btn btn-lg btn-primary">Send Message</button>
              <div id="success" style="color:#3F51B5;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>    

    <div class="map-area">      
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.34694995703802!2d123.8986894119334!3d10.297698732928804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9995871dc5b47%3A0xad3c30426b79ca30!2sHotel+De+Mercedes!5e0!3m2!1sfil!2sph!4v1540115758656" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
    </div>

    <section id="footer">     
      <!-- Go to Top Link -->
      <a href="#home" class="btn btn-primary back-to-top">
      <i class=" mdi-hardware-keyboard-arrow-up"></i>
      </a>
    </section> 

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
             © Seafarers Mighty Credit Cooperative 2018 All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </section>     
    </div>  
        

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/jquery.mmenu.min.all.js"></script> 
    <script src="/js/count-to.js"></script>   
    <script src="/js/jquery.inview.min.js"></script>     
    <script src="/js/main.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/jquery.nav.js"></script>      
    <script src="/js/smooth-on-scroll.js"></script>
    <script src="/js/smooth-scroll.js"></script>
    <script src="/js/lightslider.js"></script> 

    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();

            $("#content-slider").lightSlider({
                      loop:true,
                      keyPress:true
            });

            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:1500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
        });


        @if($errors->count() > 0)
          alert('error')
        @elseif(request()->email_sent)
          alert('email sent')
        @endif
    </script>

  </body>

</html>