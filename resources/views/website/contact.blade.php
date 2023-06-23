@extends('layouts.app')


@section('content')

    <!-- inner banner -->
    <div class="inner-banner" id="home">
        <div class="container">
        </div>
    </div>
    <!-- //inner banner -->

    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <div class="contact py-sm-5 py-4" id="contact">
        <div class="container py-lg-3">
            <h3 class="heading mb-4">Contact Us</h3>
            <div class="row pt-lg-4">
                <div class="col-lg-5">
                    <div class="w3-contact-left">
                        <p class="mb-4">Holon Translations would like to thank you for your interest and for visiting our website. You may be asked to give personal information. Answering these questions is voluntary. All personal data obtained on the website will be stored and processed exclusively for your individual file and for sending or preparing information or quotes. Yafo Translations guarantees that your details will be treated as confidential according to the terms of the Data Protection Act. In particular, we guarantee that your details will not be passed on to third parties.</p>

                        <h4 class="about-left-agile mb-4">Contact Information </h4>

                        <p><span class="fa fa-map-marker mr-2"></span>  Holon , Israel.</p>
                        <hr>
                        <p><span class="fa fa-phone mr-2"></span>+972569959594</p>
                        <hr>
                        <p><span class="fa fa-envelope-open mr-2"></span><a href="mailto:info@Holontranslation.com" class="ml-3">info@Holontranslation.com</a></p>
                    </div>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-5">
                    <!-- register form grid -->
                    <div class="register-top1">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

{{--                        {!! Form::open(['url'=>['/contact'],'method'=>'post' , 'class' => 'register-wthree']) !!}--}}
                            <form action="{{url('/contact')}}" method="post" class="register-wthree">


                        {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter Your Name" name="name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 mt-md-0 mt-4">
                                        <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 mt-md-0 mt-4">
                                        <input class="form-control" type="text" placeholder="Subject" name="subject" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea placeholder="Enter your message here" name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-aasana-w3 btn-block w-100 text-uppercase">Send</button>
                                </div>
                            </div>
{{--                            {!! Form::close() !!}--}}
                            </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- //contact-->
    <!-- map -->
    <div class="w3l-map p-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d128660.085518192!2d34.73615116249815!3d32.0625139231187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4cba171f02dd%3A0xcf0da271e00f643e!2sJaffa%2C+Holon%2C+Israel!5e0!3m2!1sen!2s!4v1549052278849"></iframe>
{{--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54128.98336245328!2d34.7461895767311!3d32.013448818821395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502b4bb0c33bf39%3A0xfbdd79640525e72d!2sHolon%2C%20Israel!5e0!3m2!1sen!2s!4v1620000287728!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
    </div>
    <!-- //map -->
<br><br><br>
@endsection
