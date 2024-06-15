<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>2G Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.svg" rel="icon">
  <link href="assets/img/logo.svg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.svg" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Su di noi</a></li>
          <li><a href="#services">Servizi</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contattaci</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>2G Group produce software di qualità.</h1>
            <p>Sviluppiamo software che accresca la visibità e aiuti nella gestione del tuo business.</p>
            <div class="d-flex">
              <a href="#contact" class="btn-get-started">Contattaci</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <section id="tech" class="clients section">

      <div class="container" data-aos="zoom-in">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/php.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/java_original_wordmark_logo_icon_146459.png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/mysql_original_wordmark_logo_icon_146417.png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/react_original_logo_icon_146374.png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/laravel_plain_wordmark_logo_icon_146439 (1).png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/bootstrap_plain_logo_icon_146619.png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/html_original_wordmark_logo_icon_146478.png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/python_18894 (1).png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/github-logo_icon-icons.com_73546.png"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/figma_logo_icon_147289 (1).png" class="img-fluid"
                alt=""></div>
            <div class="swiper-slide"><img
                src="assets/img/clients/1485282157-adobe-photoshop-raster-graphics-editor-cc-creative-cloud_78285 (1).png"
                class="img-fluid" alt=""></div>

          </div>
        </div>

      </div>

    </section>

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Su di noi</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Il nostro obiettivo è quello di portare software di <strong> qualità </strong> ai nostri clienti. Il
              software per noi deve essere:
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Intuitivo.</strong></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Veloce.</strong></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Sicuro.</strong></span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Siamo un piccolo team di tre giovani con esperienza pregressa nell'industria
              che ha l'ambizione di alzare l'asticella della qualità media del software in esecuzione sui vostri
              computer. </p>
            <a href="#services" class="read-more"><span>Scopri i nostri servizi</span><i
                class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- 
    <section id="why-us" class="section why-us" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section>/Why Us Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servizi</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div id="1" class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-pc-display-horizontal icon"></i></div>
              <h4><a href="#contact" class="stretched-link">Sviluppo di siti web:</a></h4>
              <p>Realizzazione di siti web per il tuo business, personalizzati e responsive.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-phone icon"></i></div>
              <h4><a href="#contact" class="stretched-link">Sviluppo di applicazioni mobili:</a></h4>
              <p>Implementazione di applicazione per smartphone e tablet.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="#contact" class="stretched-link">Sviluppo di software gestionale:</a></h4>
              <p>Realizzazione di software gestionale custom per il tuo business e compatibile con qualunque
                dispositivo.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="#contact" class="stretched-link"> </a>UX Design </h4>
              <p> Ottimizzazione dell'esperienza utente nel mondo Digitale</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/ale4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Alessandra Abet</h4>
                <p>Sito web per un'artista emergente.</p>
                <a href="portfolio-details-ale.html" title="Dettagli" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/alfredo.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Alfedo Pumilia</h4>
                <p>Sito web per un violinista napoletano</p>
                <a href="portfolio-details-alfredo.html" title=" Dettagli" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/portfolio/fabio.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MaydayMassage</h4>
                <p>Sito vetrina per un massaggiatore</p>
                <a href="portfolio-details-fabio.html" title="Dettagli" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/giuseppe.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Giuseppe Muntoni</h4>
                <span>Software engineer e co-founder</span>
                <p>Amo l'informatica a 360 gradi. Il mio focus è quello di costruire software robusto e resiliente.</p>
                <a href="./assets/cv/Giuseppe_Muntoni_Resume.pdf" download="Giuseppe_Muntoni_Resume.pdf">Scarica
                  CV</a>
                <div class="social">
                  <a href="https://github.com/giuseppe-muntoni
                  "><i class="bi bi-github"></i></a>
                  <a href="https://www.linkedin.com/in/giuseppe-muntoni/"> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/giorgio.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Giorgio Perez</h4>
                <span>Software developer e co-founder</span>
                <p>Web developer appassionato di creare esperienze interattive e coinvolgenti, pronto a trasformare le tue idee digitali in realtà.</p>
                <a href="./assets/cv/Nero Minimalista Curriculum Vitae.pdf" download="Giorgio_Perez_CV.pdf">Scarica
                  CV</a>
                <div class="social">
                  <a href="https://github.com/giorgiop62"><i class="bi bi-github"></i></a>
                  <a href="https://www.linkedin.com/in/giorgio-perez/"> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/michele2.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Michele Benigni</h4>
                <span>UX design e Web design</span>
                <p>Creo esperienze digitali intuitive e coinvolgenti con il nostro approccio all'UX design, mirato a migliorare la soddisfazione degli utenti e massimizzare le conversioni.</p>
                <a href="./assets/cv/Michele_Benigni_WebDevCV_IT-13.pdf" download="Michele_Benigni_WebDevCV.pdf">Scarica
                  CV</a>
                <div class="social">
                  <a href="https://github.com/michelebenigniDoit
                  "><i class="bi bi-github"></i></a>
                  <a href="https://www.linkedin.com/in/michele-benigni-ba3186136"> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>
      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contattaci</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Indirizzo</h3>
                  <p>Pisa, PI 56127</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Numero </h3>
                  <p>+39 3922680976</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email </h3>
                  <p>info@2ggroup.net</p>
                </div>
              </div><!-- End Info Item -->

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46146.92998565158!2d10.354178692493774!3d43.70674330126051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d5919af0f6598f%3A0xaab80fb5a78478c8!2sPisa%20PI!5e0!3m2!1sit!2sit!4v1718263605238!5m2!1sit!2sit"
                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
              data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nome</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2"> Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Oggetto</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Messaggio</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Il tuo messaggio è stato inviato. Grazie!</div>

                  <button type="submit">Invia un messaggio</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">


    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">2G Group</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Pisa, PI 56127</p>
            <p class="mt-3"><strong>Numero:</strong> <span>+39 3922680976</span></p>
            <p><strong>Email:</strong><span> info@2ggroup.net</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Link Utili</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">Su di noi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Servizi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio"></a>Portfolio</li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Servizi</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Sviluppo siti web</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Sviluppo di applicazioni mobile</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Sviluppo di software: gestionale</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Supporto IT e Help Desk</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Seguici</h4>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/g.ggroup2024?igsh=MTJzOGdzZXZ4empqdg=="><i
                class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">2G Group</strong> <span>All Rights Reserved</span></p>

    </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>