<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Denom</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front/css')}}/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front/css')}}/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('front/css')}}/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('front/images')}}/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('front/css')}}/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('front/css')}}/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('front/css')}}/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
          <!--header section start -->
          <div class="header_section">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo"><a href="index.html"><img src="{{asset('front/images')}}/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/contact' }}">تواصل معنا</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ '/about' }}">من نحن</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ '/blog' }}">المدونه</a>
                         </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ '/' }}">الرئيسية</a>
                        </li>



                     </ul>
                  </div>
                  <ul class="navbar-nav mr-auto">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/dashboard2' }}">لوحة التحكم</a>
                     </li>
                     @else
                     <li class="nav-item">
                        <a class="nav-link" href="{{ '/login' }}">تسجيل الدخول</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ '/register' }}">تسجيل جديد</a>
                     </li>
                    @endif

                 </ul>
               </nav>
            </div>
         </div>
         <!--header section end -->

@yield('content')

      <!-- footer section start -->
      <div class="footer_section">
        <div class="container">
           <div class="social_icon">
              <a class="padding_10" href="#"><img src="{{asset('front/images')}}/fb-icon.png"></a>
              <a class="padding_10" href="#"><img src="{{asset('front/images')}}/twitter-icon.png"></a>
              <a class="padding_10" href="#"><img src="{{asset('front/images')}}/linkedin-icon.png"></a>
              <a class="padding_10" href="#"><img src="{{asset('front/images')}}/youtub-icon.png"></a>
           </div>
           <div class="location_main">
              <div class="location_text"><img src="{{asset('front/images')}}/map-icon.png"><span class="padding10"><a href="#">Gb road 123 london Uk </a></span></div>
              <div class="location_text center"><img src="{{asset('front/images')}}/call-icon.png"><span class="padding10"><a href="#">Call : (+01) 123456789012</a></span></div>
              <div class="location_text right"><img src="{{asset('front/images')}}/mail-icon.png"><span class="padding10"><a href="#">demo@gmail.com</a></span></div>
           </div>
           <div class="Enter_mail_main">
              <input type="text" class="Enter_text" placeholder="Enter Your Name" name="Enter Your Name">
              <div class="subscribe_bt"><a href="#">Subscribe</a></div>
           </div>
        </div>
     </div>
     <!-- footer section end -->
     <!-- copyright section start -->
     <div class="copyright_section">
        <div class="container">
           <p class="copyright_text">Copyright 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
        </div>
     </div>
     <!-- copyright section end -->
     <!-- Javascript files-->
     <script src="{{asset('front/js')}}/jquery.min.js"></script>
     <script src="{{asset('front/js')}}/popper.min.js"></script>
     <script src="{{asset('front/js')}}/bootstrap.bundle.min.js"></script>
     <script src="{{asset('front/js')}}/jquery-3.0.0.min.js"></script>
     <script src="{{asset('front/js')}}/plugin.js"></script>
     <!-- sidebar -->
     <script src="{{asset('front/js')}}/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="{{asset('front/js')}}/custom.js"></script>
     <!-- javascript -->
     <script src="{{asset('front/js')}}/owl.carousel.js"></script>
     <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  </body>
</html>
