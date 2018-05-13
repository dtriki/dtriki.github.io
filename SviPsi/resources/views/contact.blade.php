<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Kontaktirajte nas</title>

    <!-- Prvi link vezan za ikonice (fb,twitter,instagram...) -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/temp/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/temp/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/temp/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/temp/component.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/temp/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/temp/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/temp/vegas.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/temp/style.css') }}" rel="stylesheet" type="text/css">



    <!-- Google web font  -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- Contact section -->

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">

                <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
                    <h1>Pošaljite poruku</h1>
                    <p>Kako bi nas kontaktirali popunite formular ispod. Mi ćemo odgovoriti u najkraćem mogućem roku .
                        Molimo Vas da popunite pravilno sve informacije , tako da možemo da vas kontaktiramo. </p>
                </div>

                <!-- dodao za email -->
                @if (Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                @endif

            <!-- promenio action=# -->
                <form action="{{ route('contact.store') }}" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
                    {{csrf_field()}}
                    <div class="col-md-6 col-sm-6">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Ime">
                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Poruka"></textarea>
                        @if ($errors->has('message'))
                            <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                        <input type="submit" class="form-control" value="POŠALJI PORUKU">
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>

<!-- Javascript  -->
<script type="text/javascript" src="{{ asset('js/temp/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/vegas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/toucheffects.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/smoothscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/temp/custom.js') }}"></script>

</body>
</html>