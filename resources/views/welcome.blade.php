<!DOCTYPE html>
<html lang="en">
<head>
<title>Adventure</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

        <link rel="stylesheet" href="styles/tooplate-style.css">
</head>

<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header">

    <!-- Top Bar -->

    

    <!-- Main Navigation -->

    <nav class="main_nav">
      <div class="container">
        <div class="row">
          <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
            <div class="logo_container">
              <div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt="">Adventure</a></div>
            </div>
            <div class="main_nav_container ml-auto">
              <ul class="main_nav_list">
                <li class="main_nav_item"><a href="{{url('/')}}">home</a></li>
                <li class="main_nav_item"><a href="#intro">offers</a></li>
                <li class="main_nav_item"><a href="#contact">contact</a></li>
                <li class="main_nav_item"><a href="{{url('/home')}} " class="nav-link">login/registration</a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>  
    </nav>

  </header>


  <!-- Home -->

  <div class="home">
    
    <!-- Home Slider -->

    <div class="home_slider_container">
      
      <div class="owl-carousel owl-theme home_slider">

        <!-- Slider Item -->
        <div class="owl-item home_slider_item">
 
          <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

          <div class="home_slider_content text-center">
            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
              <h1>Pebblar</h1>
              <div class="button home_slider_button"><div class="button_bcg"></div><a href="https://pebblar.com/" target="_blank">explore now<span></span><span></span><span></span></a></div>
            </div>
          </div>
        </div>

        <!-- Slider Item -->
        <div class="owl-item home_slider_item">
          <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

          <div class="home_slider_content text-center">
            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
              <h1>Roadtrippers</h1>
              <div class="button home_slider_button"><div class="button_bcg"></div><a href="https://www.tripit.com/web" target="_blank">explore now<span></span><span></span><span></span></a></div>
            </div>
          </div>
        </div>

        <!-- Slider Item -->
        <div class="owl-item home_slider_item">
          <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

          <div class="home_slider_content text-center">
            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
              <h1>Trip It</h1>
              <div class="button home_slider_button"><div class="button_bcg"></div><a href="https://www.tripit.com/web" target="_blank">explore now<span></span><span></span><span></span></a></div>
            </div>
          </div>
        </div>

      </div>
      
      <!-- Home Slider Nav - Prev -->
      <div class="home_slider_nav home_slider_prev">
        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
          <defs>
            <linearGradient id='home_grad_prev'>
              <stop offset='0%' stop-color='#fa9e1b'/>
              <stop offset='100%' stop-color='#8d4fff'/>
            </linearGradient>
          </defs>
          <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
          M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
          C22.545,2,26,5.541,26,9.909V23.091z"/>
          <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
          11.042,18.219 "/>
        </svg>
      </div>
      
      <!-- Home Slider Nav - Next -->
      <div class="home_slider_nav home_slider_next">
        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
          <defs>
            <linearGradient id='home_grad_next'>
              <stop offset='0%' stop-color='#fa9e1b'/>
              <stop offset='100%' stop-color='#8d4fff'/>
            </linearGradient>
          </defs>
        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
        C22.545,2,26,5.541,26,9.909V23.091z"/>
        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
        17.046,15.554 "/>
        </svg>
      </div>

      
      
    </div>

  </div>


  <!-- Intro -->
  
  <div class="intro" id="intro">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="intro_title text-center">We have the best tours</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="intro_text text-center">
            <p>Plan your own unique itinerary as detailed as you’d like,You will get what you want!</p>
          </div>
        </div>
      </div>
      <div class="row intro_items">

        <!-- Intro Item -->

        <div class="col-lg-4 intro_col">
          <div class="intro_item">
            <div class="intro_item_overlay"></div>
            <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
              <div class="intro_date">May 25th - June 01st</div>
              <div class="button intro_button"><div class="button_bcg"></div><a href="https://pebblar.com/" target="_blank">see more<span></span><span></span><span></span></a></div>
              <div class="intro_center text-center">
                <h1>Mauritius</h1>
                <div class="intro_price">From $1450</div>
                <div class="rating rating_4">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Intro Item -->

        <div class="col-lg-4 intro_col">
          <div class="intro_item">
            <div class="intro_item_overlay"></div>
            <div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
              <div class="intro_date">May 25th - June 01st</div>
              <div class="button intro_button"><div class="button_bcg"></div><a href="https://roadtrippers.com/" target="_blank">see more<span></span><span></span><span></span></a></div>
              <div class="intro_center text-center">
                <h1>Greece</h1>
                <div class="intro_price">From $1450</div>
                <div class="rating rating_4">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Intro Item -->

        <div class="col-lg-4 intro_col">
          <div class="intro_item">
            <div class="intro_item_overlay"></div>
            <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
              <div class="intro_date">May 25th - June 01st</div>
              <div class="button intro_button"><div class="button_bcg"></div><a href="https://www.tripit.com/web" target="_blank">see more<span></span><span></span><span></span></a></div>
              <div class="intro_center text-center">
                <h1>Scotland</h1>
                <div class="intro_price">From $1450</div>
                <div class="rating rating_4">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="contact" id="contact">
    <div class="contact_background" style="background-image:url(images/contact.png)"></div>

    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="contact_image">
            
          </div>
        </div>

        <div class="col-lg-7">
          <div class="contact_form_container">
            @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}

            <div class="contact_title">get in touch</div>
            <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Message & Phone Number</label>
     <textarea name="message" class="form-control"></textarea>
    </div><br><br>
    <div class="form-group text-center">
     <input type="submit" name="send" class="btn btn-info" value="Send Message" />
    </div>
   </form>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<br><br>
        
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">Back To Top</a>
                    </div>
                </div>
              
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 Flight Tour and Travel Company
                
                | Design By: <em>Najaf & Musyeb</em></p>
                </div>
            </div>
        </div>
    </footer>

      </div>
    </div>
  </div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>