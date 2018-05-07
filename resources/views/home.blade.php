@extends('layouts.app')

@section('content')

<div class="site-container">

  <div id="top"></div>

  <!-- Site header -->
  <header class="site-header">
    <div class="header-base">

      <!-- Nav toggle -->
      <button type="button" id="navigation-toggle" class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Site logo -->
      <a href="#" class="site-logo d-flex align-items-center">
        <img src="/assets/images/logo.png" alt="">
      </a>

    </div>
    <nav class="site-navigation header-collapse">
      <ul>
        <li>
          <a href="#home" data-toggle="tooltip" data-placement="right" title="Home"><i class="fas fa-home"></i></a>
        </li>
        <li>
          <a href="#about-us" data-toggle="tooltip" data-placement="right" title="About Us"><i class="fas fa-info"></i></a>
        </li>
        <li>
          <a href="#what-we-do" data-toggle="tooltip" data-placement="right" title="What we do"><i class="fas fa-briefcase"></i></a>
        </li>
        <li>
          <a href="#subscribe" data-toggle="tooltip" data-placement="right" title="Subscribe"><i class="far fa-newspaper"></i></a>
        </li>
        <li>
          <a href="#contact" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-envelope"></i></a>
        </li>
      </ul>
    </nav>

  </header>

  <!-- Back to top button -->
  <a href="#top" id="back-to-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <section id="home" class="d-md-flex fullscreen-md">
    <div class="overlay">
      <div class="overlay-inner" data-gradient-bg="[['#AA076B','#61045F'],['#02AAB0','#00CDAC'],['#DA22FF','#9733EE']]"></div>
      <div class="overlay-inner opacity-30" id="bubble-2-background"></div>
    </div>
    <div class="container align-self-md-center text-center">
      <h1 class="heading-uppercase text-white mb-3">Codex <span class="font-weight-bold">S.A.</span></h1>
      <p class="lead text-white mb-5">Imaginación y Creatividad en soluciones digitales.<br>Nosotros creamos soluciones digitales para resolver problemas reales a personas o empresas.</p>
      <a href="#about-us" class="btn btn-white scrollto">Saber más</a>
      <a href="#our-work" class="btn btn-outline-white scrollto">Nuestro trabajo</a>
    </div>
  </section>

  <section id="about-us">
    <div class="container animated" data-animation="fadeInUp">
      <h2 class="mb-4">Talento creativo, y amplia experiencia en Sistemas</h2>
      <p>La experiencia combinada con el uso de plataformas ágiles para el desarrollo de aplicaciones empresariales nos ha permito crear proyectos en diferentes arquitecturas tipo: Cliente Servidor (C/S), Aplicaciones Enriquecidas para Internet (Rich internet Applications - RIA), Aplicaciones Móviles y Software-como-Servicio (SaaS), donde nos anticipamos a todos los aspectos en los procesos de desarrollo e implementación de aplicaciones con una metodología única que simplifica el éxito de los proyectos con una satisfacción total de nuestros clientes.</p>
    </div>
  </section>

  <section id="what-we-do" class="border-top">
    <div class="container">
      <h2 class="mb-4">Qué hacemos ?</h2>
      <p class="mb-5">Nuestra metodología de trabajo para el desarrollo de sistemas a medida se basa en dos pilares fundamentales. Primero, que el analista de Codex S.A. tome un conocimiento detallado de la situacion de nuestro Cliente y especialmente del proceso a informatizar estudiando los circuitos arministrativos, o en otras palabras decimos que Codex S.A. obtenga el conocimiento necesario para “hablar el mismo idioma” que nuestro Cliente. Segundo, aplicamos nuestra experiencia para diseñar la solución apropiada y dar valor agregado al producto final.</p>
      <div class="row">

        <div class="col-md-6 col-sm-6 mb-4">
          <div class="feature-block feature-boxed feature-bordered animated" data-animation="fadeInUp">
            <div class="feature-icon text-primary mb-4">
              <div>
                <i class="ti-timer"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Somos veloces</h3>
            <p>Nuestros analistas y programadores realizan un trabajo documentado y rapido. La mejor manera de obterner resultados excelentes.</p>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 mb-4">
          <div class="feature-block feature-boxed feature-bordered animated" data-animation="fadeInUp" data-animation-delay="150">
            <div class="feature-icon text-primary mb-4">
              <div>
                <i class="ti-brush-alt"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Diseño estilizado</h3>
            <p>Nos concentramos en un diseño hermoso, logrando interfaces no solos bellos sino muy utiles y faciles de utilizar.</p>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 mb-4">
          <div class="feature-block feature-boxed feature-bordered animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="feature-icon text-primary mb-4">
              <div>
                <i class="ti-book"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Buena documentacion</h3>
            <p>Cada proyecto, cada trabajo recien un tratamiento especial en documentacion, todas las fases son perfectamente documentadas y quedan a disposicion del cliente.</p>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 mb-4">
          <div class="feature-block feature-boxed feature-bordered animated" data-animation="fadeInUp" data-animation-delay="450">
            <div class="feature-icon text-primary mb-4">
              <div>
                <i class="ti-layers"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Multimes Estilos</h3>
            <p>Trabajamos con planillas profesionales, tanto para aplicaciones moviles, como la de los sitios webs que creamos.</p>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 mb-4 mb-sm-0">
          <div class="feature-block feature-boxed feature-bordered animated" data-animation="fadeInUp" data-animation-delay="600">
            <div class="feature-icon text-primary mb-4">
              <div>
                <i class="ti-settings"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Sistemas Configurables</h3>
            <p>Nuestros desarrollos son pensandos para ser parametrizados y un alto nivel. De esa forma aumentamos la velocidad de respuesta a nuestros clientes.</p>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <div class="feature-block feature-boxed feature-bordered animated" data-animation="fadeInUp" data-animation-delay="750">
            <div class="feature-icon text-primary mb-4">
              <div>
                <i class="ti-headphone-alt"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Soporte Amigable</h3>
            <p>Tanto nuestros analistas como asistentes de soporte tecnico, poseen una excelente capacitacion en atencion a cliente, para otimizar la calidad del soporte técnico.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="subscribe" class="pt--120 pb--120">
    <div class="overlay">
      <div class="overlay-inner bg-image-holder bg-cover bg-center">
        <img src="/assets/images/1920x1280.jpg" alt="background">
      </div>
      <div class="overlay-inner bg-dark opacity-40"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <h2 class="text-white mb-4">Reciba nuestras novedades en su mail</h2>
          <p class="text-white mb-5">Eviaremos información cuando la creamos importante, tanto sobre sistemas como noticas tecnológicas.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-10">
          <div class="text-white">
            <!-- <form class="" id="sf" name="sf" action="/emails/store" method="post"> -->
              {{ Form::open(array('route' => 'homecontroller.store', 'class' => 'form-horizontal', 'role' => 'form',  'autocomplete' => 'off')) }}
              <div class="row">

                <div class="form-process"></div>

                <div class="col-12 col-lg-8">
                  <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Ingrese su direccion de email" class="form-control fc-norounded required">
                  </div>
                </div>

                <div class="col-12 d-none">
                  <input type="text" id="sf-botcheck" name="sf-botcheck" value="" class="form-control" />
                </div>

                <div class="col-12 col-lg-4">
                  <!-- <button class="btn btn-outline-white btn-norounded btn-block" type="submit" id="sf-submit" name="sf-submit">Agregar</button> -->
                  {{ Form::submit('Agregar', array('class' => 'btn btn-outline-white btn-norounded btn-block')) }}
                </div>

              </div>
            </form>
            <div class="subscribe-form-result pt-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="our-work" class="pb-0 border-top">
    <div class="container">
      <h2 class="mb-4">Nuestro trabajo</h2>
      <p class="mb-5">Estos son algunos de nuestros ultimos trabajos.</p>
      <nav class="portfolio-filter isotope-filter mb-5">
        <ul>
          <li><a href="#" class="button-border-color active" data-filter="*">All</a></li>
          <li><a href="#" class="button-border-color" data-filter=".web">Web</a></li>
          <li><a href="#" class="button-border-color" data-filter=".app">App</a></li>
          <li><a href="#" class="button-border-color" data-filter=".streaming">Streaming Server</a></li>
        </ul>
      </nav>
    </div>
    <div class="container">
      <div id="portfolio-gallery" class="portfolio-container isotope-container mfp-gallery row m-0">

        <article class="portfolio-item isotope-item col-12 col-md-6 col-lg-4 p-0 app">
          <a href="/assets/images/primicia.jpg">
            <div class="item-media">
              <img src="/assets/images/primicia.jpg" alt="">
            </div>
            <div class="item-overlay bg-dark"></div>
            <div class="item-details text-white">
              <h4 class="h5">App Admin Primicia</h4>
              <p class="font-italic">Web</p>
            </div>
          </a>
        </article>

        <article class="portfolio-item isotope-item col-12 col-md-6 col-lg-4 p-0 app">
          <a href="/assets/images/munivirasoro.jpg">
            <div class="item-media">
              <img src="/assets/images/munivirasoro.jpg" alt="">
            </div>
            <div class="item-overlay bg-dark"></div>
            <div class="item-details text-white">
              <h4 class="h5">Municipalidad Virasoro</h4>
              <p class="font-italic">Web</p>
            </div>
          </a>
        </article>

        <article class="portfolio-item isotope-item col-12 col-md-6 col-lg-4 p-0 web">
          <a href="/assets/images/itunet.jpg">
            <div class="item-media">
              <img src="/assets/images/itunet.jpg" alt="">
            </div>
            <div class="item-overlay bg-dark"></div>
            <div class="item-details text-white">
              <h4 class="h5">Site Itunet.com.ar</h4>
              <p class="font-italic">Web</p>
            </div>
          </a>
        </article>

        <article class="portfolio-item isotope-item col-12 col-md-6 col-lg-4 p-0 streaming">
          <a href="/assets/images/librefm.jpg">
            <div class="item-media">
              <img src="/assets/images/librefm.jpg" alt="">
            </div>
            <div class="item-overlay bg-dark"></div>
            <div class="item-details text-white">
              <h4 class="h5">Libre FM</h4>
              <p class="font-italic">Streaming Server</p>
            </div>
          </a>
        </article>


        <article class="portfolio-item isotope-item col-12 col-md-6 col-lg-4 p-0 web">
          <a href="/assets/images/vv.jpg">
            <div class="item-media">
              <img src="/assets/images/vv.jpg" alt="">
            </div>
            <div class="item-overlay bg-dark"></div>
            <div class="item-details text-white">
              <h4 class="h5">VirasoroVirtual.com</h4>
              <p class="font-italic">Web</p>
            </div>
          </a>
        </article>



        <article class="portfolio-item isotope-item col-12 col-md-6 col-lg-4 p-0 streaming">
          <a href="/assets/images/radiomaster.jpg">
            <div class="item-media">
              <img src="/assets/images/radiomaster.jpg" alt="">
            </div>
            <div class="item-overlay bg-dark"></div>
            <div class="item-details text-white">
              <h4 class="h5">RadioMaster887.com</h4>
              <p class="font-italic">Streaming Server</p>
            </div>
          </a>
        </article>




      </div><!-- .portfolio-container end -->
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 col-xl-9">
          <h2 class="mb-4">Contactenos</h2>
          <p>¿Quieres decir hola? ¿Quieres saber más sobre nosotros? Llámenos o envíenos un correo electrónico y nos pondremos en contacto con usted tan pronto como podamos.</p>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-12 col-md-4 mb-5 mb-md-0">
          <div class="feature-block animated" data-animation="fadeInUp">
            <div class="feature-icon mb-4">
              <div>
                <i class="ti-mobile"></i>
              </div>
            </div>
            <p>(0054) 9 3756 610566<br/>
            (0054) 9 3756 517551</p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-5 mb-md-0">
          <div class="feature-block animated" data-animation="fadeInUp" data-animation-delay="150">
            <div class="feature-icon mb-4">
              <div>
                <i class="ti-location-pin"></i>
              </div>
            </div>
            <p>Lavalle 2835, Centro, Gob. Virasoro, Corrientes,<br/>
            Argentina</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="feature-block animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="feature-icon mb-4">
              <div>
                <i class="ti-email"></i>
              </div>
            </div>
            <p>hola@codex-sa.com<br/>
              miguel@codex-sa.com<br/>
            victor@codex-sa.com</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="">
            <!-- <form class="mb-0" id="cf" name="cf" action="include/sendemail.php" method="post"> -->
              {{ Form::open(array('route' => 'homecontroller.consultas', 'class' => 'form-horizontal', 'role' => 'form',  'autocomplete' => 'off')) }}
              <div class="row">

                <div class="form-process"></div>

                <div class="col-12 col-md-6">
                  <div class="form-group error-text-white">
                    <input type="text" id="name" name="name" placeholder="Ingrese su nombre" class="form-control fc-norounded required">
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group error-text-white">
                    <input type="email" id="email" name="email" placeholder="Ingrese su email" class="form-control fc-norounded required">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group error-text-white">
                    <input type="text" id="subject" name="subject" placeholder="Tema o asunto" class="form-control fc-norounded">
                  </div>
                </div>

                <div class="col-12 mb-4">
                  <div class="form-group error-text-white">
                    <textarea name="message" id="message" placeholder="Ingrese su mensaje" class="form-control fc-norounded required" rows="7"></textarea>
                  </div>
                </div>

                <div class="col-12 d-none">
                  <input type="text" id="cf-botcheck" name="cf-botcheck" value="" class="form-control fc-norounded" />
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit">Enviar mensaje</button>
                </div>

              </div>
            </form>
            <div class="contact-form-result pt-1"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Site footer -->
  <footer class="site-footer bg-light">
    <div class="container">
      <nav class="socials-icons">
        <ul class="mx-auto">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </nav>
      <p class="text-center">© 2018 Codex S.A. - All Rights Reserved</p>
    </div>
  </footer>

</div>

@endsection
