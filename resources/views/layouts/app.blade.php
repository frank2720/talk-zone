<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO Meta Tags -->
        <meta name="description" content="Pudfra talk is a place for conversation about computer and science technology inclusive of mathematics" />
        <meta name="author" content="Your name" />

         <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
         <meta property="og:site_name" content="pudfra-talk" /> <!-- website name -->
         <meta property="og:site" content="" /> <!-- website link -->
         <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
         <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
         <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
         <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
         <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->
 

        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link href="{{asset('css/swiper.css')}}" rel="stylesheet" />
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            <!-- Footer -->
            <div class="footer">
            <div class="container px-4 sm:px-8">
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="https://github.com/frank2720">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-github fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://twitter.com/pudfra">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://wa.me/254741061815">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-whatsapp fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="mailto:otienofrank477@gmail.com">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fa fa-envelope fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of container -->
    
            <!-- end of footer -->


            
            <!-- end of container -->
            </div> <!-- end of copyright -->
            </main>
        </div>
        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
