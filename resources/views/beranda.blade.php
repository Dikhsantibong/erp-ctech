@extends('layouts.app')


@section('content')
<!--====== Required meta tags, styles, scripts, and all body content dipindahkan ke sini dari file asli -->
        <!--====== Preloader ======-->
        <div class="preloader">
            <div class="loading-container">
                <div class="loading"></div>
                <div id="loading-icon"><img src="{{ asset('assets/images/loader.png') }}" alt=""></div>
            </div>
        </div>
        <!--====== Start Overlay ======-->
        <div class="offcanvas__overlay"></div>
        <!--=== Start  Header Area  ===-->
       @include('partials.header')
        <!--======  Smooth Wrapper  ======-->
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <!--======  Main  ======-->
                <main>
                    <!--======  Start Hero Section  ======-->
                    <section class="agk-hero">
                        <div class="hero-wrapper-three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--=== Hero Content ===-->
                                        <div class="hero-content mb-70 pf_fadeup">
                                            <h1>Agency For Growth Through Innovative <span>Marketing.</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Hero Image ===-->
                            <div class="hero-image-box text-center pf_fadeup">
                                <img src="assets/images/marketing-agency/hero/hero-img1.jpg" alt="Hero Iamge">
                                <svg width="835" height="172" viewBox="0 0 835 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M42 92V41.5C42 18.5802 23.4198 0 0.5 0H834.5V171.999C834.5 149.907 816.591 132 794.5 132H82C59.9086 132 42 114.091 42 92Z" fill="#0E0F11"/>
                                </svg>
                                <div class="text-box">
                                    <p>A <span>digital marketing agency</span> focused delivering innovative strategies to accelerate business growth, enhance brand visibility, and increase customer engagement, using data-driven approaches.</p>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Hero Section  ======-->
                    <!--======  Start Company Section  ======-->
                    <section class="agk-company">
                        <div class="container">
                            <div class="company-slider-wrapper">
                                <svg width="1293" height="6" viewBox="0 0 1293 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 3L5 5.88675V0.113249L0 3ZM1287.33 3C1287.33 4.47276 1288.53 5.66667 1290 5.66667C1291.47 5.66667 1292.67 4.47276 1292.67 3C1292.67 1.52724 1291.47 0.333333 1290 0.333333C1288.53 0.333333 1287.33 1.52724 1287.33 3ZM4.5 3.5H1290V2.5H4.5V3.5Z" fill="#313131"/>
                                    </svg>
                                    
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--=== Company Slider ===-->
                                        <div class="company-slider pt-40 pb-30">
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company1.png" alt="Company">
                                                </div>
                                            </div>
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company2.png" alt="Company">
                                                </div>
                                            </div>
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company3.png" alt="Company">
                                                </div>
                                            </div>
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company4.png" alt="Company">
                                                </div>
                                            </div>
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company5.png" alt="Company">
                                                </div>
                                            </div>
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company6.png" alt="Company">
                                                </div>
                                            </div>
                                            <!--=== Company Item ===-->
                                            <div class="company-item">
                                                <div class="agk-image">
                                                    <img src="assets/images/marketing-agency/company/company3.png" alt="Company">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <svg width="1293" height="6" viewBox="0 0 1293 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1293 3L1288 0.113249V5.88675L1293 3ZM5.66663 3C5.66663 1.52724 4.47266 0.333333 3 0.333333C1.52722 0.333333 0.333252 1.52724 0.333252 3C0.333252 4.47276 1.52722 5.66667 3 5.66667C4.47266 5.66667 5.66663 4.47276 5.66663 3ZM1288.5 2.5L3 2.5V3.5L1288.5 3.5V2.5Z" fill="#313131"/>
                                    </svg>
                                    
                            </div>
                        </div>
                    </section><!--======  End Company Section  ======-->
                    <!--======  Start About Section  ======-->
                    <section class="agk-about pt-130 pb-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <!--=== Agk Content Box ===-->
                                    <div class="agk-content-box style-one mb-50 pf_fadeup">
                                        <div class="section-title mb-20">
                                            <span class="sub-title">About us</span>
                                            <h2>Strategic growth powered 
                                            by Agenko Agency!</h2>
                                        </div>
                                        <p>At Agenko Agency, we specialize in delivering strategic growth solutions tailored to elevate your business to new heights. By combining innovative strategies, data-driven insights, and creative expertise, we help companies unlock their full.</p>
                                    <p>Our dedicated team works closely with clients to understand their unique goals, crafting customized plans that drive measurable results.</p>
                                    <div class="agk-button mb-30">
                                        <a href="about.html" class="theme-btn style-one">
                                            <span class="text-flip">
                                                <span class="text">LEARN MORE</span>
                                                <span class="text">LEARN MORE</span>
                                            </span>
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <!--=== Counter Box ===-->
                                            <div class="agenko-counter-box style-one">
                                                <div class="content">
                                                    <h2 class="mb-10"><span class="count">240</span>+</h2>
                                                    <p>Projects success rate 99%</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <!--=== Counter Box ===-->
                                            <div class="agenko-counter-box style-one">
                                                <div class="content">
                                                    <h2 class="mb-10"><span class="count">23</span>+</h2>
                                                    <p>Award for digital innovation</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <!--=== Agk Image Box ===-->
                                    <div class="agk-image-box style-one mb-50 pf_fadeup">
                                        <div class="agk-image">
                                            <img src="assets/images/digital-agency/about/about1.jpg" alt="">
                                        </div>
                                        <div class="agenko-experince-box style-one">
                                            <h2><span>24</span>+</h2>
                                            <p>Years On The Market</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End About Section  ======-->
                    <!--======  Start Counter Section  ======-->
                    <section class="agk-counter pt-60 pb-30 gray-dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!--=== Agk Counter Item ===-->
                                    <div class="agenko-counter-box style-two text-center mb-40 pf_fadeup">
                                        <div class="content">
                                            <h2><span class="count">15</span>k+</h2>
                                            <p>Project Complete</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!--=== Agk Counter Item ===-->
                                    <div class="agenko-counter-box style-two text-center mb-40 pf_fadeup">
                                        <div class="content">
                                            <h2><span class="count">28</span>+</h2>
                                            <p>Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!--=== Agk Counter Item ===-->
                                    <div class="agenko-counter-box style-two text-center mb-40 pf_fadeup">
                                        <div class="content">
                                            <h2><span class="count">30</span>+</h2>
                                            <p>Team Member</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!--=== Agk Counter Item ===-->
                                    <div class="agenko-counter-box style-two text-center mb-40 pf_fadeup">
                                        <div class="content">
                                            <h2><span class="count">49</span>+</h2>
                                            <p>Awards Winning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Counter Section  ======-->
                    <!--======  Start Services Section  ======-->
                    <section class="agk-services pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-50 pf_fadeup">
                                        <span class="sub-heading">Our Service</span>
                                        <h2>We are Digital Agency With
                                            25+ Years Experience</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Text Box ===-->
                                    <div class="text-box mb-50 pf_fadeup">
                                        <p>We are a <span>Digital Agency</span> with over 25 years of experience, specializing in delivering cutting-edge digital solutions, including web design, marketing, and branding, to help businesses achieve sustainable growth and success.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-six mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-network"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Business Service</h4>
                                            <p>Offering a wide range of business services, including consulting, strategy development, and operational support to drive efficiency.</p>
                                            <div class="agk-button">
                                                <a href="services.html" class="theme-btn style-two"><span class="text">Learn More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-six mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-network"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Intelligent Architecture</h4>
                                            <p>Offering a wide range of business services, including consulting, strategy development, and operational support to drive efficiency.</p>
                                            <div class="agk-button">
                                                <a href="service-details.html" class="theme-btn style-two"><span class="text">Learn More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-six mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-network"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Branding Service</h4>
                                            <p>Offering a wide range of business services, including consulting, strategy development, and operational support to drive efficiency.</p>
                                            <div class="agk-button">
                                                <a href="service-details.html" class="theme-btn style-two"><span class="text">Learn More</span><span class="icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Services Section  ======-->
                    <!--======  Start Project Section  ======-->
                    <section class="agk-project pt-85 pb-100">
                        <div class="container">
                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-55 pf_fadeup">
                                        <span class="sub-title">Complete work</span>
                                        <h2>We are leading Innovative
                                            marketing agency.</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Agk Button ===-->
                                    <div class="agk-button float-lg-end mb-60 pf_fadeup">
                                        <a href="projects.html" class="theme-btn style-one">
                                            <span class="text-flip">
                                                <span class="text">LEARN MORE</span>
                                                <span class="text">LEARN MORE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--=== Agk Project Item ===-->
                                    <div class="agenko-project-item style-three mb-50 pf_fadeup">
                                        <div class="thumbnail">
                                            <img src="assets/images/marketing-agency/project/project1.jpg" alt="Project Image">
                                            <div class="hover-content">
                                                <div class="project-categories">
                                                    <a href="#">Website</a>
                                                    <a href="#">Landing Page</a>
                                                    <a href="#">UI/UX</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4><a href="project-details.html">Daily Schedule Mobile Apps</a></h4>
                                            <p>A daily schedule app designed to help users efficiently plan, organize, activities.</p>
                                        </div>
                                    </div>
                                    <!--=== Agk Project Item ===-->
                                    <div class="agenko-project-item style-three mb-50 pf_fadeup">
                                        <div class="thumbnail">
                                            <img src="assets/images/marketing-agency/project/project2.jpg" alt="Project Image">
                                            <div class="hover-content">
                                                <div class="project-categories">
                                                    <a href="#">Website</a>
                                                    <a href="#">Landing Page</a>
                                                    <a href="#">UI/UX</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4><a href="project-details.html">Rawr Studio Website </a></h4>
                                            <p>Rawr Studio is a creative agency specializing in bold, innovative designs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Agk Project Item ===-->
                                    <div class="agenko-project-item style-three mt-50 pf_fadeup">
                                        <div class="thumbnail">
                                            <img src="assets/images/marketing-agency/project/project3.jpg" alt="Project Image">
                                            <div class="hover-content">
                                                <div class="project-categories">
                                                    <a href="#">Website</a>
                                                    <a href="#">Landing Page</a>
                                                    <a href="#">UI/UX</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4><a href="project-details.html">Nexus Production Landing Page</a></h4>
                                            <p>A production company delivering innovative solutions for film, video, and media.</p>
                                        </div>
                                    </div>
                                    <!--=== Agk Project Item ===-->
                                    <div class="agenko-project-item style-three mt-50 pf_fadeup">
                                        <div class="thumbnail">
                                            <img src="assets/images/marketing-agency/project/project4.jpg" alt="Project Image">
                                            <div class="hover-content">
                                                <div class="project-categories">
                                                    <a href="#">Website</a>
                                                    <a href="#">Landing Page</a>
                                                    <a href="#">UI/UX</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4><a href="project-details.html">Financial Claim Dashboard</a></h4>
                                            <p>A dashboard designed for tracking, managing, and streamlining financial claims.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Project Section  ======-->
                    <!--======  Start Features Section  ======-->
                    <section class="agk-features gray-dark pt-120 pb-90">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-45 pf_fadeup">
                                        <span class="sub-title">How We Are</span>
                                        <h2>We are leading Innovative
                                            marketing agency.</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Text Box ===-->
                                    <div class="text-box mb-40 pf_fadeup">
                                        <p>Leading Innovation <span>marketing agency</span> We are a leading innovative marketing agency, specializing in creative solutions that drive business growth, enhance brand visibility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-seven mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-social-media-marketing"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Research</h4>
                                            <p>We are a leading innovative marketing agency, specializing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-seven mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-social-media-marketing"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Planning</h4>
                                            <p>We are a leading innovative marketing agency, specializing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-seven mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-social-media-marketing"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Development</h4>
                                            <p>We are a leading innovative marketing agency, specializing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--=== Agk Iconic Box ===-->
                                    <div class="agenko-iconic-box style-seven mb-40 pf_fadeup">
                                        <div class="icon">
                                            <i class="flaticon-social-media-marketing"></i>
                                        </div>
                                        <div class="content">
                                            <h4> Deployment</h4>
                                            <p>We are a leading innovative marketing agency, specializing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--======  End Project Section  ======-->
                    <!--=== Start Testimonial Section ===-->
                    <section class="agenko-testimonial pt-130 pb-130">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-45 pf_fadeup">
                                        <span class="sub-title">Client Feedback</span>
                                        <h2>Hear from Our Satisfied 
                                            Clients Feedback</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Text Box ===-->
                                    <div class="text-box mb-45 pf_fadeup">
                                        <p>Discover how our clients achieved success with Binorly Agency's expert <span>web design and development</span>, delivering outstanding digital solutions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--=== Agk Image Box ===-->
                                    <div class="agenko-image-box agenko-rotate-image mb-50 pf_fadeup">
                                        <div class="agenko-image">
                                            <img src="assets/images/marketing-agency/testimonial/testimonial1.jpg" alt="Testimonial">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Testimonial Slider ===-->
                                    <div class="testimonial-slider mb-50 pf_fadeup">
                                        <!--=== Agk Testimonial Item ===-->
                                        <div class="agenko-testimonial-item style-three">
                                            <div class="testimonial-content">
                                                <ul class="ratings">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <p>Binorly Agency completely transformed our online presence! Their exceptional website development expertise went beyond expectations, creating a visually stunning and user-friendly website. The team's attention to detail and commitment to!</p>
                                                <div class="author-item">
                                                    <div class="author-info">
                                                        <h4>Mr. David Liam</h4>
                                                        <span class="position">CEO & Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--=== Agk Testimonial Item ===-->
                                        <div class="agenko-testimonial-item style-three">
                                            <div class="testimonial-content">
                                                <ul class="ratings">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <p>Binorly Agency completely transformed our online presence! Their exceptional website development expertise went beyond expectations, creating a visually stunning and user-friendly website. The team's attention to detail and commitment to!</p>
                                                <div class="author-item">
                                                    <div class="author-info">
                                                        <h4>Mr. David Liam</h4>
                                                        <span class="position">CEO & Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--=== End Testimonial Section ===-->
                    <!--=== Start CTA Section ===-->
                    <section class="agk-cta">
                        <div class="agenko-cta-wrappper gray-dark pt-40 pb-20">
                            <div class="shape shape_one"><span></span></div>
                            <div class="shape shape_two"><span></span></div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <!--=== Section Title ===-->
                                        <div class="section-title mb-30 pf_fadeup">
                                            <h2>Ground-up to product 
                                                design Sector.</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Agk Button ===-->
                                        <div class="agenko-button float-lg-end mb-40 pf_fadeup">
                                            <a href="contact.html" class="theme-btn style-one">
                                                <span class="text-flip">
                                                    <span class="text">Contact With Us</span>
                                                    <span class="text">Contact With Us</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--=== End CTA Section ===-->
                    <!--=== Start Blog Section ===-->
                    <section class="agenko-blog pt-130 pb-80">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!--=== Section Title ===-->
                                    <div class="section-title mb-50 pf_fadeup">
                                        <span class="sub-title">Latest Blogs </span>
                                        <h2>Expert Insights and News
                                            Stay Ahead with Us</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Agk Button ===-->
                                    <div class="text-box mb-40 pf_fadeup">
                                        <p>Explore expert insights, industry trends, and the latest digital news to keep your business informed and ahead of the competition</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--=== Agk Blog Post ===-->
                                    <div class="agenko-blog-item style-three mb-40 pf_fadeup">
                                        <div class="post-thumbnail">
                                            <img src="assets/images/marketing-agency/blog/blog1.jpg" alt="Blog Image">
                                        </div>
                                        <div class="post-content-wrap">
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span><a href="#">Web Design</a></span>
                                                    <span><a href="#">02 Oct, 2025</a></span>
                                                </div>
                                                <h4 class="title"><a href="blog-details.html">Creative Javanese a Lead Designer & Mobile 
                                                    UI/UX Core Checklist</a></h4>
                                            </div>
                                            <div class="post-button">
                                                <a href="blog-details.html" class="icon-btn style-one"><i class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Agk Blog Post ===-->
                                    <div class="agenko-blog-item style-three mb-40 pf_fadeup">
                                        <div class="post-thumbnail">
                                            <img src="assets/images/marketing-agency/blog/blog2.jpg" alt="Blog Image">
                                        </div>
                                        <div class="post-content-wrap">
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span><a href="#">Web Design</a></span>
                                                    <span><a href="#">02 Oct, 2025</a></span>
                                                </div>
                                                <h4 class="title"><a href="blog-details.html">Defensive Guide to Make a Daily More Creative 
                                                    Website Productive Working Flow</a></h4>
                                            </div>
                                            <div class="post-button">
                                                <a href="blog-details.html" class="icon-btn style-one"><i class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--=== End Blog Section ===-->
                </main>
                @include('partials.footer')
            </div>
        </div>
        <!--====== Jquery js ======-->
        <script src="assets/js/plugins/jquery-3.7.1.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/plugins/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <!--====== Gsap Js ======-->
        <script src="assets/js/plugins/gsap/gsap.min.js"></script>
        <script src="assets/js/plugins/gsap/SplitText.min.js"></script>
        <script src="assets/js/plugins/gsap/ScrollSmoother.min.js"></script>
        <script src="assets/js/plugins/gsap/ScrollTrigger.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/plugins/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
        <!--====== Waypoint js ======-->
        <script src="assets/js/plugins/jquery.waypoints.js"></script>
        <!--====== CounterUp js ======-->
        <script src="assets/js/plugins/jquery.counterup.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/theme.js"></script>
@endsection