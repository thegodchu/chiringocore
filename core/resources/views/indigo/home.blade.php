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
                    <img src="{{ asset('assets/images/indigo/static/hero.png') }}" alt="hero photo">
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
                        <img src="{{ asset('/assets/images/indigo/stats/building-blocks.png') }}" alt="">
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
                        <img src="{{ asset('/assets/images/indigo/stats/smiley.png') }}" alt="">
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
                        <img src="{{ asset('/assets/images/indigo/stats/reinforced.png') }}" alt="">
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
                        <img src="{{ asset('/assets/images/indigo/stats/review.png') }}" alt="">
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
    <section class="portfolio mb-50">
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
    <section class="mb-50">
        <div class="row">
            <div class="col-lg-10">
                <div class="label">Services</div>
                <h1 class="title">What I <span class="highlight">Can Help You </span> With</h1>
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

    <!--why choose us-->
    <section class="mb-50">
        <div class="label">Why Indigo Hub</div>

        <div class="row">
            <div class="col-lg-3">
                <h1 class="title">Why <span class="highlight">Indigo</span> Hub</h1>
                <div class="reason-text">
                    <p>We blend creativity, strategy and technology to build digital experiences that are beautiful,
                        functional
                        and built to grow with your brand.</p>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row text-center">
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="icon">
                                <i class="hgi hgi-stroke hgi-rounded hgi-idea-01"></i>
                            </div>

                            <h5>Thoughtful Strategy</h5>
                            <p>We start by understanding your business, goals and audience to create the right
                                foundation.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="icon">
                                <i class="hgi hgi-stroke hgi-rounded hgi-pen-tool-03"></i>
                            </div>

                            <h5 class="heading">Beautiful Interfaces</h5>
                            <p>Designs that communicate your brand and create meaningful user experiences.</p>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="icon">
                                <i class="hgi hgi-stroke hgi-rounded hgi-web-programming"></i>
                            </div>

                            <h5 class="heading">Reliable Development</h5>
                            <p>Clean, efficient and scalable codes that brings your vision to life seamlessly.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="icon">
                                <i class="hgi hgi-stroke hgi-rounded hgi-ai-co-editing"></i>
                            </div>

                            <h5 class="heading">Long-term Partnership</h5>
                            <p>We grow with you, providing support and solutions that adapt as you evolve.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--process-->
    <section class="mb-50">
        <div class="row">
            <div class="col-lg-10">
                <div class="label">Process</div>
                <h1 class="title">Our Process</h1>
                <div class="reason-text">
                    <p>
                        A simple collaborative process that turns ideas into impactful digital products. </p>
                </div>
            </div>

            <div class="col-lg-2">
                <span class="director">See How It Works</span>
                <a href="#" class="pointer"><i class="fa-solid fa-arrow-right-long "></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 process-col">
                <div class="reason-card">
                    <div class="work-tag">01</div>
                    <div class="icon">
                        <i class="hgi hgi-stroke hgi-rounded hgi-ai-search-02"></i>
                    </div>

                    <h5>Discover</h5>
                    <p>We learn about your business, audience and goals in depth.</p>
                </div>

                <div class="process-arrow">
                    <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i>
                </div>
            </div>

            <div class="col-lg-2 process-col">
                <div class="reason-card">
                    <div class="work-tag">02</div>
                    <div class="icon">
                        <i class="hgi hgi-stroke hgi-rounded hgi-document-validation"></i>
                    </div>

                    <h5>Plan</h5>
                    <p>We define the strategy, structure and roadmap for your project.</p>
                </div>

                <div class="process-arrow">
                    <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i>
                </div>
            </div>

            <div class="col-lg-2 process-col">
                <div class="reason-card">
                    <div class="work-tag">03</div>
                    <div class="icon">
                        <i class="hgi hgi-stroke hgi-rounded hgi-edit-01"></i>
                    </div>

                    <h5>Design</h5>
                    <p>Crafting beautiful, intuitive designs that reflect your brand.</p>
                </div>

                <div class="process-arrow">
                    <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i>
                </div>
            </div>

            <div class="col-lg-2 process-col">
                <div class="reason-card">
                    <div class="work-tag">04</div>
                    <div class="icon">
                        <i class="hgi hgi-stroke hgi-rounded hgi-code-xml"></i>
                    </div>

                    <h5>Develop</h5>
                    <p>Bringing designs to life with clean, efficient and scalable codes.</p>
                </div>

                <div class="process-arrow">
                    <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i>
                </div>
            </div>

            <div class="col-lg-2 process-col">
                <div class="reason-card">
                    <div class="work-tag">05</div>
                    <div class="icon">
                        <i class="hgi hgi-stroke hgi-rounded hgi-start-up-02"></i>
                    </div>

                    <h5>Launch</h5>
                    <p>We test, refine, and deploy your product for the world.</p>
                </div>

                <div class="process-arrow">
                    <i class="hgi hgi-stroke hgi-rounded hgi-arrow-right-02"></i>
                </div>
            </div>

            <div class="col-lg-2 process-col">
                <div class="reason-card">
                    <div class="work-tag">06</div>
                    <div class="icon">
                        <i class="hgi hgi-stroke hgi-rounded hgi-customer-support"></i>
                    </div>

                    <h5>Support</h5>
                    <p>We provide ongoing support and updates to help you grow.</p>
                </div>
            </div>

        </div>

    </section>

    <!--education-->
    <section class="mb-50">
        <div class="label">Insights</div>
        <h1 class="title">Learn With <span class="highlight">Indigo</span> Hub</h1>

        <div class="row">
            <div class="col-lg-3">
                <div class="reason-text">
                    <p>Sharing what I learn while building thoughtful digital experiences.</p>
                </div>
                <button class="btn hero-btn-grad">Explore Resources ↗</button>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="holder-bg">
                                <span class="tag">Video</span>
                            </div>
                            <div class="description">
                                <h5>Building ChiringoCore</h5>
                                <p>From concept to fully functional product</p>

                                <div class="duration">05:40</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="holder-bg">
                                <span class="tag">Video</span>
                            </div>
                            <div class="description">
                                <h5>Responsive Layouts</h5>
                                <p>Creating layouts that adapt to any screen</p>

                                <div class="duration">07:23</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="holder-bg">
                                <span class="tag">Article</span>
                            </div>
                            <div class="description">
                                <h5>Designing for Impact</h5>
                                <p>Principles that help your brand stand out online</p>

                                <div class="duration">3 mins read</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="reason-card">
                            <div class="holder-bg">
                                <span class="tag">Video</span>
                            </div>
                            <div class="description">
                                <h5>Design Decision</h5>
                                <p>The thought process behind clean and effective designs</p>

                                <div class="duration">12:08</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--testimonials-->
    <section class="mb-50">
        <div class="row">
            <div class="col-lg-10">
                <div class="label">Testimonials</div>
                <h1 class="title">What <span class="highlight">Clients </span> Say</h1>
            </div>

            <div class="col-lg-2">
                <span class="director">View All Testimonials</span>
                <a href="#" class="pointer"><i class="fa-solid fa-arrow-right-long "></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="reason-card">
                    <div class="star"></div>

                    <h5 class="comment"> Working with Indigo Hub felt like having a creative partner who truly
                        cared about my vision.</h5>
                    <span class="quote"></span>
                    <div class="line"></div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="author-image">
                                <img src="{{ asset('/assets/images/indigo/testimonial_author/bodytea.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="author-details">
                                <h5 class="author-name">Amara E.</h5>
                                <p class="business">Founder, Syaeom Studios</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="reason-card">
                    <div class="star"></div>

                    <h5 class="comment">They understood exactly what I needed and delivered beyond my expectations.
                    </h5>
                    <span class="quote"></span>
                    <div class="line"></div>

                    <div class="row author">
                        <div class="col-lg-3">
                            <div class="author-image">
                                <img src="{{ asset('/assets/images/indigo/testimonial_author/studiothis.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="author-details">
                                <h5 class="author-name">Jedidiah O.</h5>
                                <p class="business">Product Manager, Paydove</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="reason-card">
                    <div class="star"></div>

                    <h5 class="comment">Excellent delivery. The attention to detail and level of communication is
                        next level. </h5>
                    <span class="quote"></span>
                    <div class="line"></div>

                    <div class="row author">
                        <div class="col-lg-3">
                            <div class="author-image">
                                <img src="{{ asset('/assets/images/indigo/testimonial_author/me.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="author-details">
                                <h5 class="author-name">Tariq W.</h5>
                                <p class="business">CEO, Zoda</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!--about me-->
    <section class="mb-50">
        <div class="label">About Me</div>

        <div class="row">
            <div class="col-lg-4">
                <div class="img-box">
                    <img src="{{ asset('/assets/images/indigo/static/faceshot.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-text">
                    <h3 class="brand">Hi, I'm <span class="highlight">Chiringo</span>.</h3>

                    <p>I enjoy designing digital experiences that are thoughtful, cohesive and functional. My goal isn't
                        simply to build websites, but to help businesses and creators build a meaningful presence on the
                        web. </p>

                    <p>When I'm not designing or coding, I'm creating content, learning new things and sharing insights
                        with the community. </p>

                    <button class="btn hero-btn-norm">Read More About Me ↗</button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="line-down"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="holder">

                            <img src="{{ asset('/assets/images/indigo/stats/construction.png') }}" alt="">

                            <div class="stat">
                                <h2 class="digit"><span>14</span>+</h2>
                                <h4 class="stat-tag about-stat">Projects Completed</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="holder">

                            <img src="{{ asset('/assets/images/indigo/stats/construction.png') }}" alt="">

                            <div class="stat">
                                <h2 class="digit"><span>2</span>+</h2>
                                <h4 class="stat-tag about-stat">Years of Experience</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="holder">

                            <img src="{{ asset('/assets/images/indigo/stats/construction.png') }}" alt="">

                            <div class="stat">
                                <h2 class="digit"><span>10</span>+</h2>
                                <h4 class="stat-tag about-stat">Happy Clients</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="contact"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('assets/images/indigo/static/cta.png') }}');">
        >
        <div class="row m-0">
            <div class="col-lg-4">
                <h2 class="title">Ready to build something <span class="highlight">meaningful</span></h2>
            </div>

            <div class="col-lg-4">
                <p>Whether you're starting from scratch or improving an existing presence, I'd love to hear about your
                    idea.</p>
            </div>

            <div class="col-lg-4">
                <button class="btn hero-btn-grad">Start a Project</button>
                <button class="btn hero-btn-norm">Let's Talk</button>
            </div>
        </div>

    </section>
</x-indigo-layout>
