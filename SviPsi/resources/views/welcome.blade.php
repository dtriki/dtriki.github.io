<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Svi mi i psi</title>
    <!--
    Snapshot Template
    http://www.templatemo.com/tm-493-snapshot

    Zoom Slider
    https://vegas.jaysalvat.com/

    Caption Hover Effects
    http://tympanus.net/codrops/2013/06/18/caption-hover-effects/
    -->

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
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->

<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section  -->

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="http://localhost/SviPsi/public/" class="navbar-brand smoothScroll" style="text-shadow: 2px 2px #48b5ff;font-size: 40px;;text-decoration:none;margin-top:auto; font-family: Chiller;color:white ">Svi mi i<span style="color: black"> psi</span>  </a>

        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll"><span>Početna</span></a></li>
                <li><a href="#about" class="smoothScroll"><span>O nama</span></a></li>
                <li><a href="#gallery" class="smoothScroll"><span>Galerija</span></a></li>
                <li><a href="http://localhost/SviPsi/public/contact" class="smoothScroll"><span>Kontakt</span></a></li>
                <li><a href="http://localhost/SviPsi/public/login" class="smoothScroll"><span>Prijavi se</span></a></li>
                <li><a href="http://localhost/SviPsi/public/register" class="smoothScroll"><span>Kreiraj nalog</span></a></li>
                <li><a href="http://localhost/SviPsi/public/trainer_register" class="smoothScroll"><span>Postani dreser</span></a></li>
            </ul>
        </div>

    </div>
</div>


<!-- Home section -->

<section id="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <h1 style="font-weight: bold;" class="wow fadeInUp" data-wow-delay="0.6s">Dobrodošli</h1>
                <p style="font-weight: bold;" class="wow fadeInUp" data-wow-delay="0.9s">Povećaj brigu o svom psu zajedno sa nama!</p>
                <a style="font-weight: bold;margin-right: 5px;" href="http://localhost/SviPsi/public/event" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Dešavanja</a>
                <a style="font-weight: bold;" href="#about" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Zakaži dresuru</a>
                <a style="font-weight: bold;margin-left: 5px;" href="http://localhost/SviPsi/public/maps" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Mapa</a>
            </div>

        </div>
    </div>
</section>


<!-- About section -->

<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-thumb">
                    <h1>O nama</h1>
                    <p> Web sajt “Svi mi i psi” služi da olakša vlasnicima brigu o njihovim kućnim ljubimcima.
                        Sajt sadrži mapu grada na kojoj su obeležene nesigurne teritorije za šetnju ljubimaca, pet-friendly kafići kao i veterinarske stanice.
                        Takođe, pored same mape, sajt ima mogućnost pravljenja događaja koji će biti vidljivi samo onim ljudima koje ste pozvali na iste.
                        Pored ovoga, web-aplikacija “Svi mi i psi” pruža online zakazivanja časova dresure kao i mnoge druge funkcionalnosti.
                </div>
            </div>

            <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                <img src="images/about-img.jpg" class="img-responsive img-circle" alt="About">
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title text-center">
                    <p style="font-size: 50px">DiS Team</p>
                    <h3>Dodati</h3>
                </div>
            </div>

            <!-- team carousel -->
            <div id="team-carousel" class="owl-carousel">

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img1.jpg" class="img-responsive img-circle" alt="Dejan">
                        </div>
                        <h2 class="heading">Dejan, Administrator</h2>
                        <p class="description">Preko noći postaje slavan samo onaj ko je danima neumorno radio.</p>
                    </div>
                </div>

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img2.jpg" class="img-responsive img-circle" alt="Sara">
                        </div>
                        <h2 class="heading">Sara, Pronalazač</h2>
                        <p class="description">Sve što radiš, radi pažljivo i misli na kraj. Rad pobeđuje sve.</p>
                    </div>
                </div>

                <!--

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img3.jpg" class="img-responsive img-circle" alt="Linda">
                        </div>
                        <h2 class="heading">Linda, Manager</h2>
                        <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
                    </div>
                </div>

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img4.jpg" class="img-responsive img-circle" alt="Sandy">
                        </div>
                        <h2 class="heading">Sandy, Director</h2>
                        <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
                    </div>
                </div>

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img5.jpg" class="img-responsive img-circle" alt="Lukia">
                        </div>
                        <h2 class="heading">Lukia, Fashion</h2>
                        <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
                    </div>
                </div>

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img6.jpg" class="img-responsive img-circle" alt="George">
                        </div>
                        <h2 class="heading">George, Admin</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                </div>

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img7.jpg" class="img-responsive img-circle" alt="Day">
                        </div>
                        <h2 class="heading">Day, Accountant</h2>
                        <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
                    </div>
                </div>

                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="images/team-img8.jpg" class="img-responsive img-circle" alt="Lynn">
                        </div>
                        <h2 class="heading">Lynn, Marketing</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                </div>

            -->

            </div>

            <!-- end team carousel -->

        </div>
    </div>
</section>


<!-- Gallery section -->

<section id="gallery">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h1>Galerija</h1>
                    <p>Mi dajemo psima naše slobodno vreme, raspoloživo mesto i višak ljubavi. Zauzvrat, psi nama daju sebe cele - to je najbolja pogodba koju je čovek ikada sklopio. </p>
                </div>
            </div>

            <ul class="grid cs-style-4">
                <li class="col-md-6 col-sm-6">
                    <figure>
                        <div><img src="images/gallery-img1.jpg" alt="image 1"></div>
                        <figcaption>
                            <h1>Marko i Ben</h1>
                            <small style="color: #12b2ff;">Ako mislite da psi ne znaju da broje, stavite tri pseća keksa u džep a zatim svom psu dajte dva. </small>
                          <!--  <a href="#">Read More</a> -->
                        </figcaption>
                    </figure>
                </li>

                <li class="col-md-6 col-sm-6">
                    <figure>
                        <div><img src="images/gallery-img2.jpg" alt="image 2"></div>
                        <figcaption>
                            <h1>Monika i Lara</h1>
                            <small style="color: #12b2ff;">Moj cilj u životu je da budem onoliko dobra koliko moj pas misli da jesam.</small>
                           <!-- <a href="#">Details</a> -->
                        </figcaption>
                    </figure>
                </li>

                <li class="col-md-6 col-sm-6">
                    <figure>
                        <div><img src="images/gallery-img3.jpg" alt="image 3"></div>
                        <figcaption>
                            <h1>Isidora i Beki</h1>
                            <small style="color: #12b2ff;">Pas, u životu najveći prijatelj, prvi je da poželi dobrodošlicu i glavni u odbrani.</small>
                           <!-- <a href="#">Learn More</a> -->
                        </figcaption>
                    </figure>
                </li>

                <li class="col-md-6 col-sm-6">
                    <figure>
                        <div><img src="images/gallery-img4.jpg" alt="image 4"></div>
                        <figcaption>
                            <h1>Sanja i Klara</h1>
                            <small style="color: #12b2ff;">Razlog zašto pas ima toliko prijatelja je taj što maše svojim repom, umesto jezikom.</small>
                            <!--<a href="#">Full Post</a>-->
                        </figcaption>
                    </figure>
                </li>
            </ul>

        </div>
    </div>
</section>


<!-- Footer section -->

<footer>
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12">

                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
                </ul>

            </div>

        </div>

    </div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

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