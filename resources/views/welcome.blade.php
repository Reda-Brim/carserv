<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <title>CarServ </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="welcome/welcome.css">



    <!-- Favicon -->
    <link href="welcome/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="welcome/lib/animate/animate.min.css" rel="stylesheet">
    <link href="welcome/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="welcome/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="welcome/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
            <!-- Spinner Start -->
     {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div> --}}
  <!-- Spinner End -->


  


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <IMg href></IMg>
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Accueil</a>
            <a href = "#propos" class="nav-item nav-link">À propos</a>
            <a href="#faq" class="nav-item nav-link">FAQ</a>
            <a href="#tem" class="nav-item nav-link">Témoignage</a>
            </div>
            
        </div>
        <a href="{{ route('admin.login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Administration<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="welcome/img/res.jfif" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">

                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Pour rouler au hasard il faut être seul. Dés qu’on est deux on va toujours quelques part... </h1>
                                @if (Route::has('user.login'))
                                @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                <a href="{{ route('user.login') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
                                @if (Route::has('user.register'))
                                <a href="{{ route('user.register') }}" class="btn btn-primary py-3 px-5 animated slideInDown">S'inscrire<i class="fa fa-arrow-right ms-3"></i></a>
                                @endif
                                @endauth
                                @endif
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="welcome/img/carousel-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="welcome/img/ll.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Louer une voiture PAS CHÈRE. Le meilleur prix est garanti 100%... Trouvons ensemble la voiture idéale</h1>              
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">  </h6>
                                @if (Route::has('user.login'))
                                
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('user.login') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
                                   @if (Route::has('user.register'))
                                        <a href="{{ route('user.register') }}" class="btn btn-primary py-3 px-5 animated slideInDown">S'inscrire<i class="fa fa-arrow-right ms-3"></i></a>
                                        @endif
                                        @endauth
                                  @endif
                                
                            
                              </div>
                
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="welcome/img/carousel-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->





<!-- A propos Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="welcome/img/nm.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">Experience</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                  <div class="text-center wow fadeInUp" data-wow-delay="0.1s"> 
                    <div style="text-align:center">            
                        <h1 id= "propos" class="text-primary text-uppercase">Pourquoi CarServ?</h1>
                      </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s"> 
                 <h4 class="mb-4"><span class="text-primary"><B>CarServ</span> Est le meilleur endroit pour vous... Grâce à ses multiples fonctions...</B> </h4>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                 <p class="mb-4"><B>CarServ </B>est une solution web complète pour la location et l'achat des voitures en ligne, vous permet de connaître, en temps réel, la disponibilité des voitures dans le parc, et de réaliser des paiements ou opérations périodiques que vous vous devez d'honorer. Elle autorise la centralisation et le suivi de chacune de vos locations et/ou prestations. De la gestion des réservations à l’organisation des réceptions, tout en passant par l’édition de vos devis.</p>
                    </div>
                 <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary"><B>01</B></span>
                            </div>
                            <div class="ps-3">
                            <br>
                                <h6><B>Gestion des vèhicules</B></h6>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary"><B>02</B></span>
                            </div>
                            <div class="ps-3">
                            <br>
                                <h6><B>Gestion des clients</B></h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary"><B>03</B></span>
                            </div>
                            <div class="ps-3">
                                <br>
                                <h6><B>Gestion des documents administratifs</B></h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary"><B>04</B></span>
                                </div>
                                <div class="ps-3">
                                    <br>
                                    <h6><B>Gestion des réservations</B></h6>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- A propos End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">250000</h2>
                <p class="text-white mb-0">Réservations gérées</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">80000</h2>
                <p class="text-white mb-0">Clients gérés</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">300</h2>
                <p class="text-white mb-0">Comptes actifs</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">3800</h2>
                <p class="text-white mb-0">Véhicules gérés</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- FAQ Start -->
<div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <br><br>
                <h1 id="faq" class="mb-5">Question fréquemment posée</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4" >
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0" style="color:black"> Comment créer mon compte CarServ? </h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0" style="color:black">Est ce que les autres clients peuvent consulter mes données ? </h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0" style="color:black">Mes données sont sauvergardés au cas de probléme?</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="welcome/img/ml.jfif"
                                           style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="welcome/img/qes.jfif"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div  class="col-md-6">
                                    <br><br>
                                    <h4 style="text-align:center" class="mb-3">Vous pouvez créer votre compte directement depuis notre application web, dirigez-vous à la page accueil, cliquez sur le bouton "S'inscrire", vous devrez rentrer vos informations personnelles,votre compte sera activé dès que vos informations auront été validé.</h4>
                              
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="welcome/img/sec.jfif"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <br><br><br><br>
                                        <h4 style="text-align:center" class="mb-3">NON, chaque client a un espace isolé sur le serveur, ce qui assure une meilleure sécurité et protection des données.</h4>
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 420px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="welcome/img/back.jfif"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <br><br><br><br>
                                    <h4 style="text-align:center" class="mb-3">Tous les comptes CarServ sont sauvegardés de façon quotidienne, afin de ne jamais perdre les précieuses données relatives à votre activité</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- FAQ End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h1 id="tem" class="mb-5">Témoignages Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="welcome/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Houda Nasibi</h5>
              <br>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Je recommande vivement cette agence de location grand professionnalisme de leur part je n'ai pas été déçu de leur service et de leur prestation.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="welcome/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Amine Alaoui</h5>
             <br>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Une tres bonne adresse. J'ai loué plusieurs fois chez CarServ et je suis vraiment satisfait de leurs professionnalisme et de leurs sérieux, je recommande vivement.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="welcome/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Sami Bennani</h5>
            <br>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Satisfaction totale! Bravo un grand professionalisme, ne peux que recommander. Mon seul souhait est de retrouver les memes prestations l'année prochaine..</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="welcome/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Nadine Bennis</h5>
              <br>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Ponctualité, disponibilité, voitures neuves et propres et des prix très compétitifs. Je recommande pour ceux qui cherchent à louer une voiture en Tunisie..</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Adresse</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 bd Belvédère, Casablanca, Maroc</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>CarServ@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Horaires d'ouvertures</h4>
                <h6 class="text-light">Lundi - Vendredi:</h6>
                <p class="mb-4">09.00 AM - 06.00 PM</p>
                <h6 class="text-light">Samedi - Dimanche:</h6>
                <p class="mb-0">09.00 AM - 12.00 PM</p>
            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="">Location</a>
                <a class="btn btn-link" href="">Achat</a>
                <a class="btn btn-link" href="">Fiabilité</a>
                <a class="btn btn-link" href="">Sécurité</a>
            </div>
           
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">CarServ</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="welcome/lib/wow/wow.min.js"></script>
<script src="welcome/lib/easing/easing.min.js"></script>
<script src="welcome/lib/waypoints/waypoints.min.js"></script>
<script src="welcome/lib/counterup/counterup.min.js"></script>
<script src="welcome/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="welcome/lib/tempusdominus/js/moment.min.js"></script>
<script src="welcome/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="welcome/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="welcome/js/main.js"></script>
    </body>
</html>
