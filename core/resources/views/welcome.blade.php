<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chiringo Core</title>
    <link rel="stylesheet" href="/assets/css/welcome.css" />
    <link rel="stylesheet" href="cc-responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <section class="hero">
      <div class="hero-floor"></div>
      <nav class="navbar custom-nav ps-5 pe-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <div class="img-fitter">
              <img src="{{"/assets/images/landing_page/logo1.png"}}" alt="Logo" class="logo" />
            </div>
          </a>

          <div class="nav-links">
            <a href="#">Explore</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
          </div>

          <button class="menu-btn">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>

        <!-- <div class="menu-overlay">
          <button class="close-btn">
            <i class="fa-solid fa-xmark"></i>
          </button>

          <div class="overlay-content">
            <div class="quick-links">
              <a href="#">Build Your Brand</a>
              <a href="#"> Order Sweet Treats</a>
              <a href="#">Shop Home Finds</a>
              <a href="#">Start A Project</a>
              <a href="#">About ChiringoCore</a>
              <a href="#">Contact us</a>
            </div>
          </div>
        </div> -->
      </nav>

      <div class="text-center text-light pb-5">
        <h1>ChiringoCore</h1>
        <h5>creative. fun. functional</h5>
        <h6>Choose an experience.</h6>
      </div>

      <div class="cards">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="glow color1"></div>
            <div class="glasscard bg1">
              <div class="overlay"></div>
              <h4 class="stretch">Indigo Hub</h4>
              <div class="card-content">
                <p>Websites • Branding <br />• Digital Experiences</p>
                <a href="#" class="explore" type="button"> Explore → </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="glow color2"></div>
            <div class="glasscard bg2">
              <div class="overlay"></div>
              <h4>Bakerium <br />& <br />The Botany</h4>
              <div class="card-content">
                <p>Specialty Bakes • Treats <br />• Catering</p>
                <a href="#" class="explore" type="button"> Explore → </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="glow color3"></div>
            <div class="glasscard bg3">
              <div class="overlay"></div>
              <h4 class="stretch">Ace The Space</h4>
              <div class="card-content">
                <p>Decor • Organization <br />• Lifestyle</p>
                <a href="#" class="explore" type="button"> Explore → </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="main.js"></script>
  </body>
</html>
