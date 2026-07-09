<x-indigo-layout>
    <!--hero-->
    <section class="hero">
        <div class="row m-0">
            <div class="col-lg-5">
                <div class="false-button">
                    <span class="dot">●</span> Digital Product Studio
                </div>

                <div class="hero-text">
                    <h1>Designing thoughtful <span> digital experiences</span>
                        that help you exist beautifully on the web.</h1>

                    <p>We partner with businesses, founders and creators to design and build websites that are
                        meaningful, functional and made to make an impact. </p>

                    <button class="btn hero-btn-grad">View Our Work ↗</button>
                    <button class="btn hero-btn-norm">Start a Project ↗</button>
                </div>
            </div>

            <!-- hero image-->
            <div class="col-lg-6">
                <div class="hero-photo">
                    <img src="{{ asset('assets/images/indigo/hero.png') }}" alt="hero photo">
                </div>
            </div>

            <!--socials-->
            <div class="col-lg-1">
                <div class="socials">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>

                    <div class="scroll-indicator">
                        <div class="border-dash"></div>

                        <span>Scroll to explore</span>
                        <i class="fa-solid fa-arrow-down-long "></i>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--stats-->
    <section class="stats-card">
        <div class="row">
            <div class="col-lg-3">
                <div class="holder">
                    <div class="emoji">
                        <img src="{{ asset('/assets/images/stats/construction.png') }}" alt="">
                    </div>
                    <div class="stat">
                        <h2 class="digit"><span>14</span>+</h2>
                        <h4 class="stat-tag">Projects Completed</h4>
                        <p class="stat-text">Across various industries</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="holder">
                    <div class="emoji">
                        <img src="{{ asset('/assets/images/stats/construction.png') }}" alt="">
                    </div>
                    <div class="stat">
                        <h2 class="digit"><span>8</span>+</h2>
                        <h4 class="stat-tag">Happy Clients</h4>
                        <p class="stat-text">Long-term partnerships</p>
                    </div>
                </div>


            </div>
            <div class="col-lg-3">
                <div class="holder">
                    <div class="emoji">
                        <img src="{{ asset('/assets/images/stats/construction.png') }}" alt="">
                    </div>
                    <div class="stat">
                        <h2 class="digit"><span>2</span>+</h2>
                        <h4 class="stat-tag">Years of Experience</h4>
                        <p class="stat-text">In the industry</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="holder">
                    <div class="emoji">
                        <img src="{{ asset('/assets/images/stats/construction.png') }}" alt="">
                    </div>
                    <div class="stat">
                        <h2 class="digit"><span>98</span>%</h2>
                        <h4 class="stat-tag">Client Satisfaction</h4>
                        <p class="stat-text">We love what we do</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--portfolio-->
    <section class="portfolio">
        <div class="row">
            <div class="col-lg-10">
                <div class="label">Portfolio</div>
                <h1 class="title">Selected Work</h1>
            </div>

            <div class="col-lg-2">
                <span class="director">View All Projects</span>
                <a href="#" class="pointer"><i class="fa-solid fa-arrow-right-long "></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="portfolio-bg"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('assets/images/indigo/portfolio/portfolio.png') }}');">
                    <h4 class="work-tag">01</h4>
                    <h3 class="brand">Bakeriium</h3>
                    <p class="category">Brand & Web Design</p>
                    <a href="#" type="button" class="btn case-btn">View Case Study</a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-bg"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('assets/images/indigo/portfolio/portfolio.png') }}');">
                    <h4 class="work-tag">02</h4>
                    <h3 class="brand">Bakeriium</h3>
                    <p class="category">Brand & Web Design</p>
                    <a href="#" type="button" class="btn case-btn">View Case Study</a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-bg"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('assets/images/indigo/portfolio/portfolio.png') }}');">
                    <h4 class="work-tag">03</h4>
                    <h3 class="brand">Bakeriium</h3>
                    <p class="category">Brand & Web Design</p>
                    <a href="#" type="button" class="btn case-btn">View Case Study</a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-bg"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('assets/images/indigo/portfolio/portfolio.png') }}');">
                    <h4 class="work-tag">04</h4>
                    <h3 class="brand">Bakeriium</h3>
                    <p class="category">Brand & Web Design</p>
                    <a href="#" type="button" class="btn case-btn">View Case Study</a>
                </div>
            </div>
        </div>
    </section>

    <!--services-->
    <section>
        <div class="row">
            <div class="col-lg-10">
                <div class="label">Services</div>
                <h1 class="title">What I Can Help You With</h1>
            </div>

            <div class="col-lg-2">
                <span class="director">Explore All Services</span>
                <a href="#" class="pointer"><i class="fa-solid fa-arrow-right-long "></i></a>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="service-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="service-icon" style="display: inline"></div>
                        </div>
                        <div class="col-lg-10">
                            <h3 class="service-title">Website Design</h3>
                            <p class="service-text">Modern, responsive and beautiful designs that reflects your brand
                                and engages your audience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="service-icon" style="display: inline"></div>
                        </div>
                        <div class="col-lg-10">
                            <h3 class="service-title">Website Design</h3>
                            <p class="service-text">Modern, responsive and beautiful designs that reflects your brand
                                and engages your audience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="service-icon" style="display: inline"></div>
                        </div>
                        <div class="col-lg-10">
                            <h3 class="service-title">Website Design</h3>
                            <p class="service-text">Modern, responsive and beautiful designs that reflects your brand
                                and engages your audience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="service-icon" style="display: inline"></div>
                        </div>
                        <div class="col-lg-10">
                            <h3 class="service-title">Website Design</h3>
                            <p class="service-text">Modern, responsive and beautiful designs that reflects your brand
                                and engages your audience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="service-icon" style="display: inline"></div>
                        </div>
                        <div class="col-lg-10">
                            <h3 class="service-title">Website Design</h3>
                            <p class="service-text">Modern, responsive and beautiful designs that reflects your brand
                                and engages your audience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-indigo-layout>
