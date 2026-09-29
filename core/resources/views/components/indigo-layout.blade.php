<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indigo Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://use.hugeicons.com/font/icons.css">
</head>

<body>
    <nav class="container-fluid py-2">
        <div class="row align-items-center gy-0 m-0">

            <!-- Logo -->
            <div class="col-md-2">
                <a class="navbar-brand" href="#">
                    <div class="img-fitter">
                        <img src="{{ asset('assets/images/indigo/static/logoind.png') }}" alt="logo" class="logo">
                    </div>
                </a>
            </div>

            <!-- Navigation -->
            <div class="col-md-8">

                <div class="nav-wrapper">
                    <ul class="nav">
                        <li><a class="nav-link active" href="#">Home</a></li>

                        <li><a class="nav-link" href="#">Portfolio</a></li>

                        <li><a class="nav-link" href="#">Services</a></li>

                        <li><a class="nav-link" href="#">Education</a></li>

                        <li><a class="nav-link" href="#">About</a></li>

                        <li><a class="nav-link" href="#">Contact</a></li>
                    </ul>

                    <span class="nav-dot"></span>
                </div>

            </div>

            <!-- CTA -->
            <div class="col-md-2 text-end">
                <a href="#" class="btn nav-btn">
                    Let's Talk ↗
                </a>
            </div>

        </div>
    </nav>
    <div class="main">
        {{ $slot }}
    </div>

    <footer>
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <div class="img-holder">
                            <img src="{{ asset('assets/images/indigo/static/logoind.png') }}" alt="logo" class="img-fluid">
                        </div>
                    </a>

                    <p>Designing thoughtful digital experiences for businesses and creators.</p>

                    <div class="row">
                        <div class="col">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>

                    <p>2026 Indigo Hub.</p>
                    <p>Build with curiousity.</p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="container">
                            <h5>Quick Links</h5>
                            <a href="#">Home</a>
                            <a href="#">Portfolio</a>
                            <a href="#">Services</a>
                            <a href="#">Education</a>
                            <a href="#">About</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container">
                            <h5>Services</h5>
                            <a href="#">Website Development</a>
                            <a href="#">Website Design</a>
                            <a href="#">Website Revamp</a>
                            <a href="#">UI/UX Design</a>
                            <a href="#">Visual Identity</a>
                            <a href="#">Consulting</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container">
                            <h5>Contact</h5>
                            <a href="#"><i class="fa-solid fa-envelope me-3"></i>indigohub@gmail.com</a>
                            <a href="#"><i class="fa-solid fa-phone me-3"></i>+234 807-209-9077</a>
                            <a href="#"><i class="fa-solid fa-link me-3"></i>LinkTree</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container">
                            <h5>Newsletter</h5>
                            <p>Get insights and updates right in your inbox.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
