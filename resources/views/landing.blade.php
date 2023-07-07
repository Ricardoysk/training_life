<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Training Life</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/landing_page/css/styles.css')}}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{asset('assets/landing_page/assets/img/logos/training_life.png')}}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Planes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenido a Training Life</div>
                <div class="masthead-heading text-uppercase">Entrenando tu vida</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{url('/login')}}">Iniciar Sesión</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center"> 
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-brands fa-nutritionix fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Nutrición</h4>
                        <p class="text-muted">Ofrecemos un servicio de nutrición en línea que incluye evaluación nutricional personalizada, creación de planes de alimentación adaptados, asesoramiento y seguimiento, suministro de recursos y herramientas, y comunicación en línea con nuestros profesionales de la nutrición.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-dumbbell fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Personal Training</h4>
                        <p class="text-muted">Ofrecemos un servicio de entrenamiento personalizado en línea que incluye evaluación física personalizada, creación de planes de entrenamiento adaptados, asesoramiento y seguimiento, suministro de recursos y herramientas, y comunicación en línea con nuestros entrenadores personales.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Estrategia</h4>
                        <p class="text-muted">Ofrecemos un servicio de Power BI centrado en la toma de decisiones. Proporcionamos asesoramiento estratégico, creación de informes interactivos y paneles visuales, integración de datos, capacitación y soporte técnico. Nuestro servicio te ayuda a analizar datos en tiempo real, identificar patrones y tomar decisiones informadas basadas en datos sólidos para impulsar el éxito de tu negocio.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/landing_page/assets/img/portfolio/1.jpg')}}" alt="..." />
                                
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Entrenamiento personalizado</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/landing_page/assets/img/portfolio/2.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Planificación de programas de entrenamiento</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/landing_page/assets/img/portfolio/3.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Entrenamiento en grupos pequeños</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/landing_page/assets/img/portfolio/4.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Entrenamiento para eventos específicos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/landing_page/assets/img/portfolio/5.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Entrenamiento<br> en línea</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/landing_page/assets/img/portfolio/6.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Asesoramiento<br> nutricional</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Planes</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/landing_page/assets/img/about/entrenamiento.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>$19.990 al mes</h4>
                                <h4 class="subheading">Entrenamiento</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">*Cuestionario de evaluación inicial.<br>
                                                                            *Plan de entrenamiento personalizado.<br>
                                                                            *Contacto inicial: Llamada o WhatsApp.<br>
                                                                            *Contacto ilimitado con tu entrenador.<br>
                                                                            *Resolución de consultas en menos de 24h.<br>
                                                                            *Seguimiento semanal y reajustes sin límites.<br>
                                                                            *Elige tus evaluaciones, hasta 4 al mes.<br>
                                                                            *Guía de Entrenamiento y Educación Nutricional.<br>
                                                                            *Vídeos explicativos.<br>
                                                                            *Servicio con un acompañamiento total.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/landing_page/assets/img/about/nutricion.jpg')}}"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>$25.990 al mes</h4>
                                <h4 class="subheading">Plan Nutricional</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">*Cuestionario de evaluación inicial.<br>
                                                                            *Plan de alimentación personalizado.<br>
                                                                            *Contacto inicial: Llamada o WhatsApp.<br>
                                                                            *Contacto ilimitado con tu nutricionista.<br>
                                                                            *Resolución de consultas en menos de 24h.<br>
                                                                            *Seguimiento semanal y reajustes sin límites.<br>
                                                                            *Elige tus evaluaciones, hasta 4 al mes.<br>
                                                                            *Guía de Educación Nutricional y Entrenamiento.<br>
                                                                            *Recetario de las comidas de tu menú.<br>
                                                                            *Servicio con un acompañamiento total.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/landing_page/assets/img/about/entrenamiento_nutricion.jpg')}}" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>$34.990 al mes</h4>
                                <h4 class="subheading">Nutrición + Entrenamiento</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">*Cuestionario de evaluación inicial.<br>
                                                                            *Plan de alimentación personalizado.<br>
                                                                            *Plan de entrenamiento personalizado.<br>
                                                                            *Contacto inicial: Llamada o WhatsApp.<br>
                                                                            *Contacto ilimitado con tu entrenador.<br>
                                                                            *Contacto ilimitado con tu nutricionista.<br>
                                                                            *Resolución de consultas en menos de 24h.<br>
                                                                            *Seguimiento semanal y reajustes sin límites.<br>
                                                                            *Elige tus evaluaciones, hasta 4 al mes.<br>
                                                                            *Guía de Entrenamiento y Educación Nutricional.<br>
                                                                            *Vídeos explicativos.<br>
                                                                            *Recetario de las comidas de tu menú.<br>
                                                                            *Servicio con un acompañamiento total.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/landing_page/assets/img/about/plan_duo.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>$51.990 al mes</h4>
                                <h4 class="subheading">Plan Parejas</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">*2 Cuestionarios de evaluación inicial.<br>
                                                                            *Plan de alimentación personalizado para 2 personas.<br>
                                                                            *2 Planes de entrenamiento personalizados.<br>
                                                                            *Contacto inicial: Llamada o WhatsApp.<br>
                                                                            *Contacto ilimitado con tu entrenador.<br>
                                                                            *Contacto ilimitado con tu nutricionista.<br>
                                                                            *Resolución de consultas en menos de 24h.<br>
                                                                            *Seguimiento semanal y reajustes sin límites.<br>
                                                                            *Elige tus evaluaciones, hasta 4 al mes.<br>
                                                                            *Guía de Entrenamiento y Educación Nutricional.<br>
                                                                            *Vídeos explicativos.<br>
                                                                            *Recetario de las comidas de vuestro menú.<br>
                                                                            *Servicio con un acompañamiento total.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Disfruta de tu mejor 
                                versión con nuestros
                                <br />
                                Planes.
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Equipo</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/landing_page/assets/img/team/constanza.jpg')}}" alt="..." />
                            <h4>Constanza Yañez Zurita</h4>
                            <p class="text-muted">Instructora de Spinning</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Whatsapp Profile"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Whatsapp Profile"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div> -->
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/landing_page/assets/img/team/jenny.jpg')}}" alt="..." />
                            <h4>Jennifer Solange Perez Muñoz</h4>
                            <p class="text-muted">Personal Trainer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Whatsapp Profile"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Training Life 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/landing_page/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Entrenamiento personalizado</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/landing_page/assets/img/portfolio/1.jpg')}}" alt="..." />
                                    <p>Proporcionar entrenamiento individualizado a clientes según sus necesidades, metas y nivel de condición física. Esto puede incluir ejercicios de fuerza, resistencia, flexibilidad y entrenamiento cardiovascular.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Atrás
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/landing_page/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Planificación de programas de entrenamiento</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/landing_page/assets/img/portfolio/2.jpg')}}" alt="..." />
                                    <p>Crear programas de entrenamiento personalizados para que los clientes sigan de manera independiente, estableciendo objetivos, diseñando rutinas de ejercicios y proporcionando pautas y recomendaciones específicas.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li> -->
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Atrás
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/landing_page/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Entrenamiento en grupos pequeños</h2>

                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/landing_page/assets/img/portfolio/3.jpg')}}" alt="..." />
                                    <p>Dirigir sesiones de entrenamiento en grupos pequeños, donde trabajas con varias personas a la vez, brindando instrucciones, asesoramiento y motivación. Esto puede ser en un gimnasio, en exteriores o en instalaciones deportivas.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Atrás
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/landing_page/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Entrenamiento para eventos específicos</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/landing_page/assets/img/portfolio/4.jpg')}}" alt="..." />
                                    <p>Preparar a los clientes para eventos deportivos, competencias o desafíos específicos, como maratones, triatlones, carreras de obstáculos, etc. Esto implica diseñar un programa de entrenamiento enfocado en los requisitos y demandas de la competencia en particular.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Atrás
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/landing_page/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Entrenamiento en línea</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/landing_page/assets/img/portfolio/5.jpg')}}" alt="..." />
                                    <p>Ofrecer servicios de entrenamiento en línea a través de plataformas digitales, brindando programas de entrenamiento, asesoramiento nutricional y seguimiento a distancia. Esto puede incluir comunicación a través de videoconferencias, correos electrónicos o aplicaciones móviles.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Atrás
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/landing_page/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Asesoramiento nutricional</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/landing_page/assets/img/portfolio/6.jpg')}}" alt="..." />
                                    <p> Proporcionar orientación y asesoramiento sobre nutrición y dieta, ayudando a los clientes a desarrollar hábitos alimenticios saludables y a alcanzar sus objetivos de composición corporal.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Atrás
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets/landing_page/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
