<!DOCTYPE html>
<html lang="pt-br">


  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Tipos de Serviços</title>
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <!--Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      
    <!--Local-->
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
  </head>

<body>
 <!-- INÍCIO - CABEÇALHO -->
 <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- INÍCIO - LOGO -->
    <div class="logo">
      <h1 class="text-light">
        <a href="index.html">
          <img src="assets/img/logo.png" alt="logo">
        </a>
      </h1>
    </div><!-- FIM - LOGO -->

    <!-- INÍCIO - BARRA DE NAVEGAÇÃO -->
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active" href="index.html">Home</a></li>
      <!--   <li class="dropdown">
          <a href="#">
            <span>Sobre</span>
            <i class="bi bi-chevron-down"></i>
          </a>
        <ul>
            <li><a href="about.html">Sobre nós</a></li>
            <li><a href="team.html">Equipe</a></li>
            <li class="dropdown">
              <a href="#">
                <span>História</span>
                <i class="bi bi-chevron-right"></i>
              </a>
              <ul>
                <li><a href="#">Item1</a></li>
                <li><a href="#">Item2</a></li>
                <li><a href="#">Item3</a></li>
                <li><a href="#">Item4</a></li>
                <li><a href="#">Item5</a></li>
              </ul>
            </li>
          </ul> -->
        </li>
        <li><a href="Servicos.html">Serviços</a></li>
        <li><a href="CadUsuario.html">Crie sua conta</a></li>
        <li><a href="Login.html">Entre</a> </li>

        
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- FIM - BARRA DE NAVEGAÇÃO -->

  </div>
</header><!-- FIM - CABEÇALHO -->

  <!--START - MAIN-->
  <main id="main">

    <!--Inicio Recomendações-->
    <section id="banner" class="banner">
      <div class="banner-container">
        <div class="container">
          <div class="banner-container">
            <h2>Principais serviços pedidos</h2>
            <p>Serviços mais realizados em cada categoria
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Mais pedidos</li>
        </ol>
      </div>
    </section><!--END - SECTION - BANNER-->

    <!--START - SECTION - PROJECTS-->
    <section id="projects" class="projects">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="projects-filters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Eletricista</li>
              <li data-filter=".filter-card">Serviços Domesticos</li>
              <li data-filter=".filter-web">Tecnologia</li>
            </ul>
          </div>
        </div>
     
        <div class="row projects-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 projects-item filter-app">
            <div class="projects-wrap">
              <img src="assets/img/projects/eletricista.png" class="img-fluid" alt="">
              <div class="projects-info">
                <h4>Eletricista</h4>
                <p>Solicitar oçamento</p>
                <div class="projects-links">
                  <a 
                    href="assets/img/projects/projects-1.jpg" 
                    data-gallery="projectsGallery" 
                    class="projects-lightbox" 
                    title="React JS">
                      <i class="bx bx-plus"></i>
                  </a>
                  <a href="projects-details.html" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 projects-item filter-web">
            <div class="projects-wrap">
              <img src="assets/img/projects/domestico.jpg" class="img-fluid" alt="">
              <div class="projects-info">
                <h4>Serviços Domesticos</h4>
                <p>Solicitar Orçamento</p>
                <div class="projects-links">
                  <a 
                    href="assets/img/projects/projects-2.jpg" 
                    data-gallery="projectsGallery" 
                    class="projects-lightbox" 
                    title="Kotlin">
                      <i class="bx bx-plus"></i>
                  </a>
                  <a href="projects-details.html" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 projects-item filter-app">
            <div class="projects-wrap">
              <img src="assets/img/projects/tecnologia.jpg" class="img-fluid" alt="">
              <div class="projects-info">
                <h4>Tecnologia</h4>
                <p>Solicitar Orçamento</p>
                <div class="projects-links">
                  <a 
                    href="assets/img/projects/projects-3.jpg" 
                    data-gallery="projectsGallery" 
                    class="projects-lightbox" 
                    title="JavaScript">
                      <i class="bx bx-plus"></i>
                  </a>
                  <a href="projects-details.html" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 projects-item filter-card">
            <div class="projects-wrap">
              <img src="assets/img/projects/trasportentrega.jpg" class="img-fluid" alt="">
              <div class="projects-info">
                <h4>Trasporte e Logistica</h4>
                <p>Solicitar Orçamento </p>
                <div class="projects-links">
                  <a 
                    href="assets/img/projects/projects-4.jpg" 
                    data-gallery="projectsGallery" 
                    class="projects-lightbox" 
                    title="Java">
                      <i class="bx bx-plus"></i>
                  </a>
                  <a href="projects-details.html" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 projects-item filter-web">
            <div class="projects-wrap">
              <img src="assets/img/projects/saudebemestar.jpg" class="img-fluid" alt="">
              <div class="projects-info">
                <h4>Saude é Bem-Estar</h4>
                <p>Solicitar Orçamento</p>
                <div class="projects-links">
                  <a 
                    href="assets/img/projects/projects-5.jpg" 
                    data-gallery="projectsGallery" 
                    class="projects-lightbox" 
                    title="Swift">
                      <i class="bx bx-plus"></i>
                  </a>
                  <a href="projects-details.html" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 projects-item filter-app">
            <div class="projects-wrap">
              <img src="assets/img/projects/aprendizado.jpg" class="img-fluid" alt="">
              <div class="projects-info">
                <h4>Educação e Aprendizagem</h4>
                <p>Solicitar Orçamento</p>
                <div class="projects-links">
           
              </div>
            </div>
          </div>

        </div>

    
    </section><!--END - SECTION - PROJECTS-->

  </main><!--END - MAIN-->

  <!--START - FOOTER-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logo-2.png" alt="logo-2">
            
          
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
              when an unknown printer took a galley of type and scrambled it to make a type 
              specimen book. 
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="about.html">Sobre nós</a></li>
              <li><a href="services.html">Serviços</a></li>
              <li><a href="#">Termos de serviço</a></li>
              <li><a href="#">Política de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Entre em contato conosco</h4>
            <p>
              <strong>Endreço:</strong> Rua Lorem Ipsum <br>
              São Paulo, 456378, Brasil <br>
              <strong>Telefone:</strong> 55 11 1234 5678<br>
              <strong>Email:</strong> loremipsum@email.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Nossa Newsletter</h4>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
              It has roots in a piece of classical Latin literature from 45 BC, 
              making it over 2000 years old. Richard McClintock, a Latin professor 
              at Hampden-Sydney College in Virginia, looked up one of the more obscure 
              Latin words, consectetur.
            </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Inscreva-se">
            </form>
          </div>

        </div>
      </div>
    </div>

  </footer><!--END - FOOTER-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <!--Link-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <!--Local-->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>  
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>