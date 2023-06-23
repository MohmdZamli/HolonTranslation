<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>New Soft for IT & Translation</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <link href="{{url('assets/website/css/bootstrap.css')}}" rel="stylesheet" id="bootstrap-css">
        <link href="{{url('assets/website/css/style.css')}}" rel="stylesheet" id="bootstrap-css">
        <link href="{{url('assets/website/css/font-awesome.min.css')}}" rel="stylesheet" id="bootstrap-css">

    <!-- //css files -->

        <!--web font-->
        <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <!--//web font-->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <style>
            section {
                padding-top: 4rem;
                padding-bottom: 5rem;
                background-color: #f1f4fa;
            }
            .wrap {
                display: flex;
                background: white;
                padding: 1rem 1rem 1rem 1rem;
                border-radius: 0.5rem;
                box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
                margin-bottom: 2rem;
            }

            .wrap:hover {
                background: linear-gradient(135deg,#6394ff 0%,#fc636b 100%);
                color: white;
            }

            .ico-wrap {
                margin: auto;
            }

            .mbr-iconfont {
                font-size: 4.5rem !important;
                color: #313131;
                margin: 1rem;
                padding-right: 1rem;
            }
            .vcenter {
                margin: auto;
            }

            .mbr-section-title3 {
                text-align: left;
            }
            h2 {
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
            }
            .display-5 {
                font-family: 'Source Sans Pro',sans-serif;
                font-size: 1.4rem;
            }
            .mbr-bold {
                font-weight: 700;
            }

            p {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
                line-height: 25px;
            }
            .display-6 {
                font-family: 'Source Sans Pro',sans-serif;
                font-size: 1re}
            /***************************************/

            /**********************
    /***** Services *******
    /*********************/
            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            section{
                padding: 60px 0;
            }
            section .section-title{
                text-align:center;
                color:#007b5e;
                margin-bottom:50px;
                text-transform:uppercase;
            }
            #what-we-do{
                background:#ffffff;
            }
            #what-we-do .card{
                padding: 1rem!important;
                border: none;
                margin-bottom:1rem;
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #what-we-do .card:hover{
                -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
                box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            }
            #what-we-do .card .card-block{
                padding-left: 50px;
                position: relative;
            }
            #what-we-do .card .card-block a{
                color: #007b5e !important;
                font-weight:700;
                text-decoration:none;
            }
            #what-we-do .card .card-block a i{
                display:none;

            }
            #what-we-do .card:hover .card-block a i{
                display:inline-block;
                font-weight:700;

            }
            #what-we-do .card .card-block:before{
                font-family: FontAwesome;
                position: absolute;
                font-size: 39px;
                color: #007b5e;
                left: 0;
                -webkit-transition: -webkit-transform .2s ease-in-out;
                transition:transform .2s ease-in-out;
            }
            #what-we-do .card .block-1:before{
                content: "\f0e7";
            }
            #what-we-do .card .block-2:before{
                content: "\f0eb";
            }
            #what-we-do .card .block-3:before{
                content: "\f00c";
            }
            #what-we-do .card .block-4:before{
                content: "\f209";
            }
            #what-we-do .card .block-5:before{
                content: "\f0a1";
            }
            #what-we-do .card .block-6:before{
                content: "\f218";
            }
            #what-we-do .card:hover .card-block:before{
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
    <header>

        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center">
                <div class="header-agile">
                    <h1>
                        <a class="navbar-brand logo" href="{{url('/')}}">
                            <span style="color: #fc636b;" class="fa fa-product">New Soft</span>
                        </a>
                    </h1>
                </div>
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="mr-lg-3 mr-2 active"><a href="{{url('/')}}">Home</a></li>
                            <li class="mr-lg-3 mr-2"><a href="#about">about</a></li>
                            <li class="mr-lg-3 mr-2"><a href="#services">services</a></li>
                            <li class="mr-lg-3 mr-2"><a href="{{url('/languages')}}">languages</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="buttons mt-lg-0 mt-2">
                    <a href="{{url('/contact')}}">Contact Us </a>
                </div>

            </div>
        </div>
    </header>
    <!-- //header -->

    @yield('content')


    <!-- footer -->
    <footer class="py-5">
        <div class="container py-md-3">
            <div class="row footer-grids">
                <div class="col-md-4">
                    <div class="footer-grid left">
                        <h2 class="logo"><a href="{{url('/')}}">
                                <span style="color: #fc636b;" class="fa fa-product">New Soft</span>  for IT & Translation

                            </a></h2>
                    </div>
                </div>
                <div class="col-md-4 middle">
                    <p class="btn call"> <span class="fa fa-phone"></span> Call: +972567734466</p>
                    <p class="btn call"> <span class="fa fa-envelope-open mr-2"></span> info@newsoftitsolutions.com</p>

                </div>
                <div class="col-md-4 right">
                    <!-- to top -->
                    <div class="top-icon">
                        <a href="#home" class="move-top text-center"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>To Top</a>
                    </div>
                    <!-- //to top -->
                </div>
            </div>
            <div class="middle mt-3">
                <ul class="social mt-4">
                    <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                </ul>
                <p>© {{date('Y')}} New Soft for IT & Translation. All Rights Reserved  <a href="#" target="_blank"></a></p>

            </div>

        </div>
    </footer>
    <!-- //footer -->
    @stack('modals')

    @livewireScripts

    </body>
</html>
