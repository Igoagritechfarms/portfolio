<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dr.John Yesudhas CEO-Profile</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css



    ">
  <style>
    #col {
      color: white;
    }

   

    section {
      --space: 1.25rem;
      width: 90%;
      margin: 2rem auto;
      display: grid;
      gap: var(--space);
      grid-template-columns: repeat(auto-fill, minmax(20rem, 1fr));
    }

    .card {
      width: 100%;
      cursor: default;
      padding: var(--space);
      border-radius: 0.25rem;
      background-color: var(--sdcolor);
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-0.5rem);
    }

    .card-img {
      width: 100%;
      height: 15rem;
      overflow: hidden;
      position: relative;
      border-radius: 0.25rem;
    }

    .card-img img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      object-position: center;
    }

    .card-img figcaption {
      background-color: var(--ttcolor);
      color: var(--sdcolor);
      font-size: 0.85rem;
      padding: 0.5rem 0.75rem;
      width: 100%;
      position: absolute;
      bottom: 0;
    }

    .card-title {
      text-transform: capitalize;
      margin: 0.75rem 0;
    }

    .container1 {
      width: 100%;
      max-width: 870px;
      margin: 0 auto;
    }

    .about-awardsbox {
      margin: 20px;
      color: black;
    }

    .grid2 {
      border-radius: 8px;
      background: url(http://api.thumbr.it/whitenoise-361x370.png?background=d6d6d6ff&noise=626262&density=18&opacity=36);
      overflow: hidden;
      width: 100%;
      max-width: 1920px;
      list-style: none;
      text-align: center;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }

    .grid2 figure {
      position: relative;
      z-index: 1;
      display: inline-block;
      overflow: hidden;
      margin: 0px;
      width: 270px;
      height: 270px;
      text-align: center;
    }

    .grid2 figure img {
      position: relative;
      display: block;
      margin: 0 auto;
    }

    .grid2 figure figcaption {
      /*text-transform: uppercase;*/
      font-size: 1.25em;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .grid2 figure figcaption::before,
    .grid2 figure figcaption::after {
      pointer-events: none;
    }

    .grid2 figure figcaption,
    .grid2 figure a {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    /* Anchor will cover the whole item by default */
    /* For some effects it will show as a button */
    .grid2 figure a {
      z-index: 1000;
      text-indent: 200%;
      white-space: nowrap;
      font-size: 0;
      opacity: 0;
    }

    .grid2 figure h2 {
      font-weight: 300;
    }

    .grid2 figure h2 span {
      font-weight: 800;
    }

    .grid2 figure h2,
    .grid2 figure p {
      margin: 0;
    }

    .grid2 figure p {
      padding-top: 20px;
      padding-left: 30px;
      padding-right: 30px;
      letter-spacing: 1.2px;
      font-size: 72.5%;
      font-weight: bold;
    }

    /*---------------*/
    /***** Oscar *****/
    /*---------------*/
    figure.effect-oscar {
      cursor: pointer;
    }

    figure.effect-oscar img {
      top: 50%;
    }

    figure.effect-oscar figcaption {
      /*-webkit-transition: background-color 0.75s;
	transition: background-color 0.75s;*/
      -webkit-transition: all 0.75s;
      transition: all 0.75s;
      background: rgba(90, 90, 90, 0.1);
    }

    figure.effect-oscar figcaption::before {
      position: absolute;
      top: 30px;
      right: 30px;
      bottom: 30px;
      left: 30px;
      border: 1px solid #e0e0e0;
      content: '';
    }

    figure.effect-oscar h2 {
      transform: scale(0);
      font-size: 3.438em;
      -webkit-transition: -webkit-transform 0.35s;
      transition: transform 0.35s;
      -webkit-transform: translate3d(0, 100%, 0);
      transform: translate3d(0, 100%, 0);
    }

    figure.effect-oscar figcaption::before,
    figure.effect-oscar p {
      opacity: 0;
      -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, transform 0.35s;
      -webkit-transform: scale(0);
      transform: scale(0);
    }

    figure.effect-oscar:hover h2 {
      transform: scale(0);
      font-size: large;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    figure.effect-oscar:hover figcaption::before,
    figure.effect-oscar:hover p {
      opacity: 1;
      -webkit-transform: scale(1);
      transform: scale(1);
    }

    figure.effect-oscar:hover figcaption {
      background-color: rgba(255, 255, 255, .75);
      -webkit-transition: all 0.75s;
      transition: all 0.75s;
      transform: scale(1);
    }

    figure.effect-oscar:hover img {
      opacity: 0.1;
    }

    @media screen and (max-width: 41.5em) {
      .grid figure {
        width: 100%;
      }
    }


    .row {
      display: flex;
      flex-wrap: wrap;
    }

    .column {
      width: 100%;
      padding: 0 1em 1em 1em;
      text-align: center;
    }

    .card2 {
      width: 100%;
      height: 100%;
      padding: 2em 1.5em;
      background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
      background-size: 100% 200%;
      background-position: 0 2.5%;
      border-radius: 5px;
      box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      transition: 0.5s;
    }

    #text-text-col {
      font-size: 20px;
      font-weight: 600;
      color: #1f194c;
      margin: 1em 0;
    }

    #text-text-font {
      color: #575a7b;
      font-size: 15px;
      line-height: 1.6;
      letter-spacing: 0.03em;
    }

    .icon-wrapper {
      background-color: #2c7bfe;
      position: relative;
      margin: auto;
      font-size: 30px;
      height: 2.5em;
      width: 2.5em;
      color: #ffffff;
      border-radius: 50%;
      display: grid;
      place-items: center;
      transition: 0.5s;
    }

    .card2:hover {
      background-position: 0 100%;
    }

    .card2:hover .icon-wrapper {
      background-color: #ffffff;
      color: #2c7bfe;
    }

    .card2:hover h3 {
      color: #ffffff;
    }

    .card2:hover p {
      color: #f0f0f0;
    }

    @media screen and (min-width: 768px) {
      section {
        padding: 0 2em;
      }

      .column {
        flex: 0 50%;
        max-width: 50%;
      }
    }

    @media screen and (min-width: 992px) {
      section {
        padding: 1em 3em;
      }

      .column {
        flex: 0 0 33.33%;
        max-width: 33.33%;
      }
    }
    .navbar-nav .nav-link {
    color: #333;
    font-weight: 500;
    padding: 10px 15px;
    transition: all 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover {
    color: #007bff;
    background-color: rgba(0, 123, 255, 0.1);
    border-radius: 5px;
}

.navbar-brand {
    transition: all 0.3s ease-in-out;
}

.navbar-brand:hover {
    background-color: rgba(0, 123, 255, 0.2);
    border-radius: 10px;
}

  </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->


  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5">
    <div class="container-fluid">
        <!-- Mobile Brand -->
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">CEO Profile</h1>
        </a>

        <!-- Navbar Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-between py-3 py-lg-0" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0">
                <li class="nav-item">
                    <a href="#home" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#awards" class="nav-link">Awards</a> <!-- Fixed ID -->
                </li>
            </ul>

            <!-- Center Profile -->
            <a href="index.php" class="navbar-brand bg-secondary py-2 px-4 mx-3 d-none d-lg-block text-center">
                <h1 class="text-primary fw-bold m-0">Profile</h1>
            </a>

            <ul class="navbar-nav me-auto py-0">
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a> <!-- Fixed ID -->
                </li>
                <li class="nav-item">
                    <a href="blog.php" class="nav-link">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


  <!-- Navbar End -->


  <!-- Header Start -->
  <div class="container-fluid bg-light my-6 mt-0" id="home">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 py-6 pb-0 pt-lg-0">
          <h3 class="text-primary mb-3" id="col">I'm</h3>
          <h1 class="display-3 mb-3">Dr.John Yesudhas</h1>
          <h2 class="typed-text-output d-inline"></h2>
          <div class="typed-text d-none"> CEO of IGO Group,Techfarming Expert,IGMA CORE Committee
          </div>
          <div class="d-flex align-items-center pt-5">
            <!-- <a href="" class="btn btn-primary py-3 px-4 me-5">Download CV</a> -->
            <div class="d-flex align-items-center pt-5">
              <button type="button" class="btn-play" data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/Gy44COGEGD0" data-bs-target="#videoModal">
                <span></span>
              </button>
              <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
            </div>

            <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content rounded-0">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">YouTube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="ratio ratio-16x9">
                      <iframe class="embed-responsive-item" src="" id="video" allow="autoplay"
                        allowscriptaccess="always" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid" src="img/profile.jpg" alt="">
        </div>
      </div>

    </div>
  </div>

  <!-- Header End -->


  <!-- Video Modal Start -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var videoModal = document.getElementById("videoModal");
      var videoIframe = document.getElementById("video");

      videoModal.addEventListener("show.bs.modal", function (event) {
        var button = event.relatedTarget; // Get button that triggered the modal
        var videoSrc = button.getAttribute("data-src"); // Get video URL

        if (videoSrc) {
          videoIframe.src = videoSrc + "?autoplay=1&rel=0&modestbranding=1";
        }
      });

      videoModal.addEventListener("hidden.bs.modal", function () {
        videoIframe.src = ""; // Stop video when modal closes
      });
    });
  </script>

  <!-- Video Modal End -->


  <!-- About Start -->
  <div class="container-xxl py-6" id="about">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="d-flex align-items-center mb-5">
            <div class="years flex-shrink-0 text-center me-4">
              <h1 class="display-1 mb-0">10+</h1>
              <h5 class="mb-0">Years</h5>
            </div>
            <h3 class="lh-base mb-0">of working experience of Agriculture</h3>
          </div>
          <p class="mb-4">Dr. John Yesudhas – CEO, IGO Group
            With 10+ years of experience, Dr. John Yesudhas leads IGO Group, driving innovations in polyhouse farming,
            hydroponics, and agritech. An award-winning expert in precision agriculture, he pioneers sustainable farming
            solutions.</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3" style="color: green;"></i>Project, product &
            services</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Identifying customers & Consulting</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Converting land space</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Outdoor land, indoor space, and rooftop
            space into highly profitable Agri projects.</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Construction of projects </p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Exports and distribution of buyback</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Supply of seeds, fertilizer, pesticides,
            insecticides, fungicides and fumigation chemicals</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>AMC maintenance of crop & Buyback of the
            produce</p>
          <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="row g-3 mb-4">
            <div class="col-sm-6">
              <img class="img-fluid rounded" src="img/client1.jpg" alt="">
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded" src="img/client2.jpg" alt="">
            </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
            <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up" id="text-col">1500</h2>
          </div>
          <p class="mb-4">Dr. John Yesudhas – Visionary Leader & CEO, IGO Group
            Dr. John Yesudhas, with 10+ years of experience, has successfully led IGO Group to serve 5000+ clients and
            complete 500+ projects across agriculture, agritech, and microfinance. Under his leadership, IGO Group has
            become a trusted name in polyhouse farming, hydroponics, vertical farming, indigenous goat breeding, fresh
            produce delivery, and financial empowerment for small businesses.</p>
          <p class="mb-4">With a strong commitment to precision agriculture, sustainability, and innovation, he has
            received multiple national awards and partnered with leading institutions to drive the future of farming.
            His expertise continues to shape the industry, empowering farmers, entrepreneurs, and businesses with
            cutting-edge solutions</p>
          <div class="d-flex align-items-center mb-3">
            <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
            <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up"><span id="text-col">1500</span></h2>
          </div>
          <p class="mb-0">Dr. John Yesudhas – 1500+ Successful Farming Projects
            Dr. John Yesudhas, CEO of IGO Group, has led 1,500+ successful farming projects, making IGO a leader in
            polyhouse, hydroponics, vertical farming, open cultivation, goat farming, mushroom farming, and
            agri-engineering solutions.
          </p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3" style="color: green;"></i>Polyhouse &
            Greenhouse Farming – Climate-controlled, high-yield farms</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Hydroponics & Vertical Farming – Soilless
            farming for maximum productivity</p>
          <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Open Field Cultivation – High-efficiency
            crop production</p>


        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Expertise Start -->
  <h1 class="display-5 mb-0" style="margin-left: 100px;">Education</h1>

  <section id="awards">
    <a href="#">
      <article class="card">
        <figure class="card-img">
          <img src="img/scl1.jpg" />
          <figcaption>
            Image from pixabay
          </figcaption>
        </figure>
        <div class="card-body">
          <h3 class="card-title" style="font-size: 28px;">SSLC School</h3>
          <p class="card-text">Chellammal Vidyalaya Senior Secondary School</p>
        </div>
      </article>
    </a>
    <a href="#">
      <article class="card">
        <figure class="card-img">
          <img src="img/scl2.jpg" />
        </figure>
        <div class="card-body">
          <h3 class="card-title" style="font-size: 28px;">HSC School</h3>
          <p class="card-text">Modern senior secondary school nanganallur chennai</p>
        </div>
      </article>
    </a>
    <a href="#">
      <article class="card">
        <figure class="card-img">
          <img src="img/clg.jpg" />

        </figure>
        <div class="card-body">
          <h4 class="card-title"> Electronics & communication engineer</h4>
          <p class="card-text">Sathyabama engineering college</p>
        </div>
      </article>
    </a>
  </section>
  <!-- Expertise End -->
  <!--awards-->
  <div class="container1">
    <div class="about-awardsbox">
      <div class="grid2">
        <figure class="effect-oscar">
          <figcaption>
            <img src="img/award.jpg" style="height:100%;margin-top:-138px;margin-bottom: -45px;" />
            <p>BEST CEO OF THE YEAR 2023
              <br><br>- BEST EMARGING CEO AWARD
            </p>
          </figcaption>
        </figure>
        <figure>
          <figcaption>
            <h1 style="padding-top:80px;">Awards</h1>
          </figcaption>
        </figure>
        <figure class="effect-oscar">
          <figcaption>
            <img src="img/award1.jpg" style="height:100%;margin-top:-138px;" />
            <p>BEST INNOVATIVE AGRI ENGINEERING BRAND
              <br>- MSME AWARDS
            </p>
          </figcaption>
        </figure>
        <figure class="effect-oscar">
          <figcaption>
            <img src="img/award2.jpg" style="height:100%;margin-top:-138px;" />
            <p>INDIAS LEADING AGRI ENGINEERING BRAND
              <br>- INDIA TRADE AWARDS
            </p>
          </figcaption>
        </figure>
        <figure class="effect-oscar">
          <figcaption>
            <img src="img/award3.jpg" style="height:100%;margin-top:-138px;" />
            <p>BEST ENTREPRENTURE OF THE YEAR IN AGRI ENGINEERING
              <br>- SISI AWARDS
            </p>
          </figcaption>
        </figure>
        <figure class="effect-oscar">
          <figcaption>
            <img src="img/award4.jpg" style="height:100%;margin-top:-138px;" />
            <p>BEST EMERGING AGRI ENGINEERING COMPANY OF THE YEAR
              <br>- NATIONAL SERVICE EXCELLENCE AWARDS
            </p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
  <!--awards end-->

  <!-- Service Start -->
  <h1 class="display-5 mb-0" style="margin-left: 100px;">My Services</h1>

  <section id="services">

    <div class="row" style="width: 300%;">
      <div class="column">
        <div class="card2">
          <div class="icon-wrapper">
            <i class="fa-solid fa-fish-fins"></i>
          </div>
          <h3 id="text-text-col">IGO fisheries farming projects</h3>
          <p id="text-text-font">IGO Agritech Farms' Fish Farming Project offers sustainable, high-yield aquaculture
            with expert support. We ensure advanced breeding,
            optimal water management, and maximum profits

          </p>
        </div>
      </div>
      <div class="column">
        <div class="card2">
          <div class="icon-wrapper">
            <i class="fa-solid fa-cow"></i>
          </div>
          <h3 id="text-text-col">IGO Goat farming projects</h3>
          <p id="text-text-font ">
            At IGO Agritech Farms, we design and manage goat farming projects tailored to our clients' needs.
            Our services include modern farming techniques, sustainable practices,
            and community engagement to ensure successful operations.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card2">
          <div class="icon-wrapper">
            <i class="fa-solid fa-seedling"></i>
          </div>
          <h3 id="text-text-col">IGO Mushroom farming projects</h3>
          <p id="text-text-font ">
            At IGO Agritech Farms, we specialize in designing and implementing comprehensive mushroom farming
            projects for clients across India. Our services include setting up indoor, outdoor, and rooftop
            mushroom cultivation systems, tailored to meet each client's specific needs.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card2">
          <div class="icon-wrapper">
            <i class="fa-solid fa-carrot"></i>
          </div>
          <h3 id="text-text-col">Strawberry farming projects </h3>
          <p id="text-text-font ">
            IGO Agritech Farms specializes in implementing strawberry farming projects for clients, utilizing
            advanced techniques . Our comprehensive services cover every stage, from project planning to harvest,
            guaranteeing high-quality yields and client satisfaction.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card2">
          <div class="icon-wrapper">
            <i class="fa-solid fa-leaf"></i>
          </div>
          <h3 id="text-text-col">Cucumber farming projects</h3>
          <p id="text-text-font ">
            IGO Agritech Farms offers comprehensive cucumber farming projects, guiding clients from seed selection
            to harvest. Our expertise ensures high-quality yields and maximized profits. Partner
            with us to leverage advanced farming techniques and achieve optimal results in your agricultural ventures.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card2">
          <div class="icon-wrapper">
            <i class="fa-solid fa-seedling"></i>
          </div>
          <h3 id="text-text-col">Nursery gardening projects </h3>
          <p id="text-text-font ">
            IGO Agritech Farms offers comprehensive nursery gardening projects tailored to our clients' needs, providing
            expert garden setup and maintenance services.
            Our sustainable practices ensure thriving gardens that enhance the beauty and ecological balance of your
            space.
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php include 'blog.php';?>


  <?php include 'brand.php';?>



  <!-- Service End -->


  <!-- Projects Start -->
  <!-- <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                       
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
  <!-- Projects End


     <h1 class="display-5 mb-0" style="margin-left: 100px;">Blog</h1>
     <div class="container">
  <h1 class="center">Client Logo Slider</h1>
  <p class="center">by <a href="http://haneenkrimly.com" target="_blank">Haneen Krimly</a></p>
  
   <section class="client-slider">
      <div class="slide"><img src="https://i.ibb.co/6HynNKS/wordpress.png"></div>
      <div class="slide"><img src="https://i.ibb.co/41kkqNJ/cnn.png"></div>
      <div class="slide"><img src="https://i.ibb.co/g6W04GJ/google.png"></div>
      <div class="slide"><img src="https://i.ibb.co/CsFyzY8/hbo.png"></div>
      <div class="slide"><img src="https://i.ibb.co/T20Ssx4/hulu.png"></div>
      <div class="slide"><img src="https://i.ibb.co/ncvNQSB/ibm.png"></div>
      <div class="slide"><img src="https://i.ibb.co/yPzSXPL/microsoft.png"></div>
   </section>
</div>

  <! Contact Start -->
  <!-- <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">Floor A block, Venkateshwara Avenue, Harish viceroy, Plot no: 3&4 First, Madipakkam Main Rd, Madipakkam, Chennai, Tamil Nadu 600091.</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+7397386189</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">ceojohnyesudas@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Contact End -->


  <!-- Map Start -->
  <!-- <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
        </div>
    </div> -->
  <!-- Map End -->


  <!-- Copyright Start -->
  <?php include 'footer.php'; ?>
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>