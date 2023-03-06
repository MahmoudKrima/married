<div class="py-12 pt-0 " >
    <div class="py-12 pt-0 ">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ '/login' }}">تسجيل الدخول</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ '/register' }}">تسجيل جديد</a>
                            </li>
                        </ul>
                        </nav>
                    </div>
                </div>
                <!--header section end -->
            </body>
    </div>

    <div class="row" style="background-color:#c4bfbf45;">
        <div class="col-6">
            <x-guest-layout >
                <x-auth-card>
                    <x-slot name="logo">
                        {{-- <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a> --}}
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}"style="text-align:right" >
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('البريد الالكترونى')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('كلمة السر')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('تذكرنى') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('تذكر كلمة السر؟؟') }}
                                </a>
                            @endif

                            <x-button class="ml-3" style="background-color:#e83e8db6;">
                                {{ __('تسجيل الدخول') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
        <!--about section start -->
        <div class="about_section pt-6 col-6" >
            <div class="container-fluid">
                <div class="col-lg-10 padding_0">
                    <div class="abiut_images_main">
                        <div><img src="{{asset('front/images')}}/img-1.png" class="image_2"></div>
                        <div><img src="{{asset('front/images')}}/img-2.png" class="image_1"></div>
                        <div class="main"><img src="{{asset('front/images')}}/img-3.png" class="image_3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--about section end -->
    </div>
</div>
