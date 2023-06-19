<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Más verde</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/scriptform.js') }}"></script>
        <script src="{{ asset('js/validarcontraseñas.js') }}"></script>

        <!-- Styles -->
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" style="background-color: #0f4229;" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html">Más verde</a>
                <button class="navbar-toggler text-uppercase font-weight-bold  text-white rounded "style="background-color: #7ac64d" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="iniciosesion2.html"><i class="fa-solid fa-2x fa-right-to-bracket"></i></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="registrarse2.html"><i class="fa-solid fa-2x fa-registered"></i></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Nuestros productos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Acerca de nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="contacto2.html">Contáctenos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="recuperar-contraseña.html">Recuperar contraseña</a></li>
                        
                        <div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                                    <div class="portfolio-compra d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"></i></div>
                                    </div>
                                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/carrito/carrito-inside.html"><i class="fa-solid fa-2x fa-cart-shopping"></i></a></li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center" style="background-color: #dcf5bc">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0 text-dark">Más verde</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0 text-dark">En nuestra tienda, encontrarás una gran variedad de productos como hierbas medicinales, tés, suplementos vitamínicos y minerales, aceites esenciales, productos de belleza naturales, alimentos orgánicos, entre otros.</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Nuestros productos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/jarabe.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/bebe.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cereal.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/remedio.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/Proteina.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/crema.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio compra-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Tenemos productos de muy buena calidad para cuidar tu salud ofreciendo excelencia y ética en la información dentro del contexto moral y profesional al cuerpo medico, tienda naturista, cadena de distribución y consumidores en general, tanto como en el mercado nacional.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Todos nuestros productos son cuidadosamente seleccionados para garantizar que sean de la más alta calidad y completamente naturales. Además, nuestros expertos en nutrición y salud están siempre disponibles para responder cualquier pregunta que puedas tener y ofrecerte recomendaciones personalizadas.</p></div>
                </div>
                    </a>
                </div>
            </div>
        </section>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Donde nos ubicamos</h4>
                        <p class="lead mb-0">
                            Cra. 13 #6510
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Síguenos en nuestras redes</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://web.facebook.com/SupermercadoNaturista/?locale=es_LA&_rdc=1&_rdr target=" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/Super_Naturista" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contáctenos</h4>
                        <p class="lead mb-0">
                            3225189806
                            <br>
                            3054431372
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Mas verde 2023</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/jarabe.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary me-2" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Agregar al carrito
                                    </button>    
                                    <button class="btn btn-primary ms-2" data-bs-dismiss="modal">
                                            <i class=""></i>
                                            Cerrar
                                    </button> 
                                    <br>
                                    <br>
                                    <form>
                                        <h1>Califícanos</h1>
                                        <p class="clasificacion">
                                          <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                          --><label for="radio1">★</label><!--
                                          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                          --><label for="radio2">★</label><!--
                                          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                          --><label for="radio3">★</label><!--
                                          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                          --><label for="radio4">★</label><!--
                                          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                          --><label for="radio5">★</label>
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/bebe.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary me-2" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Agregar al carrito
                                    </button>    
                                    <button class="btn btn-primary ms-2" data-bs-dismiss="modal">
                                            <i class=""></i>
                                            Cerrar
                                    </button>
                                    <br>
                                    <br>
                                    <form>
                                        <h1>Califícanos</h1>
                                        <p class="clasificacion">
                                          <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                          --><label for="radio1">★</label><!--
                                          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                          --><label for="radio2">★</label><!--
                                          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                          --><label for="radio3">★</label><!--
                                          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                          --><label for="radio4">★</label><!--
                                          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                          --><label for="radio5">★</label>
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cereal.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary me-2" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Agregar al carrito
                                    </button>    
                                    <button class="btn btn-primary ms-2" data-bs-dismiss="modal">
                                            <i class=""></i>
                                            Cerrar
                                    </button>
                                    <br>
                                    <br>
                                    <form>
                                        <h1>Califícanos</h1>
                                        <p class="clasificacion">
                                          <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                          --><label for="radio1">★</label><!--
                                          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                          --><label for="radio2">★</label><!--
                                          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                          --><label for="radio3">★</label><!--
                                          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                          --><label for="radio4">★</label><!--
                                          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                          --><label for="radio5">★</label>
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/remedio.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary me-2" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Agregar al carrito
                                    </button>    
                                    <button class="btn btn-primary ms-2" data-bs-dismiss="modal">
                                            <i class=""></i>
                                            Cerrar
                                    </button>
                                    <br>
                                    <br>
                                    <form>
                                        <h1>Califícanos</h1>
                                        <p class="clasificacion">
                                          <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                          --><label for="radio1">★</label><!--
                                          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                          --><label for="radio2">★</label><!--
                                          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                          --><label for="radio3">★</label><!--
                                          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                          --><label for="radio4">★</label><!--
                                          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                          --><label for="radio5">★</label>
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Proteina.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary me-2" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Agregar al carrito
                                    </button>    
                                    <button class="btn btn-primary ms-2" data-bs-dismiss="modal">
                                            <i class=""></i>
                                            Cerrar
                                    </button>
                                    <br>
                                    <br>
                                    <form>
                                        <h1>Califícanos</h1>
                                        <p class="clasificacion">
                                          <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                          --><label for="radio1">★</label><!--
                                          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                          --><label for="radio2">★</label><!--
                                          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                          --><label for="radio3">★</label><!--
                                          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                          --><label for="radio4">★</label><!--
                                          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                          --><label for="radio5">★</label>
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/crema.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary me-2" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Agregar al carrito
                                    </button>    
                                    <button class="btn btn-primary ms-2" data-bs-dismiss="modal">
                                            <i class=""></i>
                                            Cerrar
                                    </button>
                                    <br>
                                    <br>
                                    <form>
                                        <h1>Calificanos</h1>
                                        <p class="clasificacion">
                                          <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                          --><label for="radio1">★</label><!--
                                          --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                          --><label for="radio2">★</label><!--
                                          --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                          --><label for="radio3">★</label><!--
                                          --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                          --><label for="radio4">★</label><!--
                                          --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                          --><label for="radio5">★</label>
                                        </p>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
