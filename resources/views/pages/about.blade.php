@extends('layouts.app')

@section('title', 'About Us - 360 Business and Services | Professional Business Solutions & CA Services in Kolkata')

@section('meta_description', 'Learn about 360 Business Services - expert CA team providing GST registration, company formation & business compliance across India. 10,000+ happy clients.')

@section('keywords', 'about 360 business services, professional CA services Kolkata, business compliance experts, taxation solutions Kolkata, company registration specialists, GST filing experts, business consultation Kolkata, trusted business advisors, chartered accountant services, startup support Kolkata, MSME services, business licensing experts')

@section('canonical_url', url('/about'))

@section('og_title', 'About 360 Business and Services | Professional Business Solutions in Kolkata')
@section('og_description', 'Learn about 360 Business and Services - your trusted partner for business compliance, licensing, and taxation solutions in Kolkata. Expert CA services with transparency and affordability.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/logo/og-logo.jpg')
@section('og_image_alt', '360 Business and Services - Professional Business Solutions Team in Kolkata')

@section('twitter_title', 'About 360 Business and Services | Professional Business Solutions in Kolkata')
@section('twitter_description', 'Trusted business solutions provider in Kolkata. Expert CA services, company registration, GST filing & business consultation with transparency and affordability.')

@section('breadcrumb_schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ url('/') }}"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "About Us",
                "item": "{{ url('/about') }}"
            }
        ]
    }
</script>
@endsection

@section('main')

<!-- main-area -->

<main class="fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">About us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('assets/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src="{{ asset('assets/img/images/breadcrumb_shape02.png') }}" alt="">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area about-bg" data-background="{{ asset('assets/img/bg/about_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center pb-50">
                <div class="col-lg-5">
                    <div class="about-img-wrap">
                        <img src="{{ asset('assets/img/images/about_img01.png') }}" alt="" class="main-img">
                        <img src="{{ asset('assets/img/images/about_img_shape01.png') }}" alt="">
                        <img src="{{ asset('assets/img/images/about_img_shape02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title mb-25 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">About Us</span>
                            <h2 class="title tg-element-title">Smart Accounting for Smarter Businesses</h2>
                        </div>
                        <p> We specialize in company compliance, licensing, and taxation solutions,
                            delivering precision, expertise, and reliability. As your trusted partner, we
                            streamline complex regulations, ensuring seamless compliance and
                            financial efficiency
                        </p>
                        <p>From startup inception to sustained growth, we provide comprehensive,
                            client-focused solutions tailored to your unique business needs. Our
                            mission is to empower businesses with cost-effective excellence, offering
                            expert guidance, unwavering support, and a commitment to long-term
                            success at every stage of your journey
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- mission-vision-area -->
    <section class="mission-vision-area-simple">
        <!-- Simple Background -->
        <div class="simple-bg-wrapper">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </div>

        <!-- Section Header -->
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-header text-center" data-aos="fade-up">
                        <div class="section-badge">
                            <span class="badge-text">Our Foundation</span>
                        </div>
                        <h2 class="section-title">
                            Mission & Vision <span class="title-highlight">That Drives Excellence</span>
                        </h2>
                        <p class="section-subtitle">Transforming businesses through innovation, integrity, and unwavering commitment to success</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission & Vision Cards -->
        <div class="container">
            <div class="row">
                <!-- Mission Card -->
                <div class="col-lg-6 mb-40">
                    <div class="mv-card mission-card" data-aos="fade-right" data-aos-delay="100">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="card-number">01</div>
                        </div>

                        <div class="card-content">
                            <h3 class="card-title">Our Mission</h3>
                            <p class="card-description">
                                we deliver end-to-end compliance, licensing, and taxation
                                solutions with precision, expertise, and reliability. Our
                                mission is to simplify complexities, ensure seamless
                                compliance, and optimize financial efficiency, empowering
                                businesses from startup to growth with affordable, client
                                centric solutions and unwavering support.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="col-lg-6 mb-40">
                    <div class="mv-card vision-card" data-aos="fade-left" data-aos-delay="200">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="card-number">02</div>
                        </div>

                        <div class="card-content">
                            <h3 class="card-title">Our Vision</h3>
                            <p class="card-description">
                                We strive to be the leading business solutions provider,
                                recognized for excellence, integrity, and innovation. Our
                                vision is to create a hassle-free regulatory experience,
                                enabling businesses to focus on growth while we ensure
                                compliance and financial efficiency. Through an expert
                                driven, client-first approach, we aim to redefine industry
                                standards, making compliance and financial management
                                accessible, efficient, and rewarding
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission-vision-area-end -->

    <!-- choose-area -->
    <section class="choose-area-two">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="choose-img-two">
                        <img src="{{ asset('assets/img/images/h4_choose_img.png') }}" alt="">
                        <img src="{{ asset('assets/img/images/choose_img_shape01.png') }}" alt="">
                        <img src="{{ asset('assets/img/images/choose_img_shape02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content-two">
                        <div class="section-title-two white-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Why Choose Us</span>
                            <h2 class="title tg-element-title">We'll Ensure You Always Get the Best Guidance.</h2>
                        </div>
                        <p>Morem ipsum dolor sit amet, consectetur adipiscing elita florai psum dolor sit amet, consecteture.Borem.</p>
                        <div class="choose-circle-wrap">
                            <div class="circle-item">
                                <div class="chart" data-percent="100">
                                    <div class="circle-content">
                                        <span class="percentage">100%</span>
                                        <p>Business Growth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="circle-item">
                                <div class="chart" data-percent="98">
                                    <div class="circle-content">
                                        <span class="percentage">98%</span>
                                        <p>Trusted Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="circle-item">
                                <div class="chart" data-percent="100">
                                    <div class="circle-content">
                                        <span class="percentage">100%</span>
                                        <p>Satisfaction</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose-shape">
            <img src="{{ asset('assets/img/images/choose_shape.png') }}" alt="" data-aos="fade-right" data-aos-delay="200">
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- features-area -->
    <section class="features-area-four">
        <div class="container">
            <div class="features-item-wrap-four">
                <div class="row align-items-center">
                    <div class="section-title-two mb-30 text-center">
                        <h5 class="title">Core Value of our Company</h5>
                    </div>
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-2 text-center">
                                <img class="pb-20" src="{{ asset('assets/img/icons/icon-1.png') }}" alt="icon">
                                <h2 class="title">Commitment</h2>
                            </div>

                            <div class="col-lg-2 text-center">
                                <img class="pb-20" src="{{ asset('assets/img/icons/icon-2.png') }}" alt="icon">
                                <h2 class="title">Respect</h2>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img class="pb-20" src="{{ asset('assets/img/icons/icon-3.png') }}" alt="icon">
                                <h2 class="title">Integrity</h2>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img class="pb-20" src="{{ asset('assets/img/icons/icon-4.png') }}" alt="icon">
                                <h2 class="title">Vison</h2>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img class="pb-20" src="{{ asset('assets/img/icons/icon-5.png') }}" alt="icon">
                                <h2 class="title">Empathy</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- faq-area -->
    <section class="faq-area">
        <div class="faq-bg-shape" data-background="{{ asset('assets/img/images/faq_shape01.png') }}"></div>
        <div class="faq-shape-wrap">
            <img src="{{ asset('assets/img/images/faq_shape02.png') }}" alt="">
            <img src="{{ asset('assets/img/images/faq_shape03.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-5 col-md-9">
                    <div class="faq-img-wrap">
                        <img src="{{ asset('assets/img/images/faq_img01.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/images/faq_img02.jpg') }}" alt="" data-parallax='{"y" : 100 }'>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="faq-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Our Service Benifits</span>
                            <h2 class="title tg-element-title">Keep Your Business Safe & Ensure High Availability.</h2>
                        </div>
                        <div class="accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What are end-to-end solutions for businesses or startups?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our services include office setup, company formation, Business related licenses and registrations, digital marketing, and website development for your businesses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What is the accounting outsourcing support for your business?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Company accounting and taxation are crucial for sales and operations. Outsourcing professional accountants manages these tasks worry-free, ensuring smooth operations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What about the service of Business health check Up?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Regular business health checks help identify financial and business strengths, weaknesses, and areas for improvement, ensuring growth and progress towards your goals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            Do you provide company taxation services, including GST?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, We provide all types of company compliance, taxation, GST registration, returns, and related reliable services by a professional team.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- journey-timeline-area -->
    <section class="journey-timeline-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-70 tg-heading-subheading animation-style3">
                        <span class="sub-title tg-element-title">Our Journey</span>
                        <h2 class="title tg-element-title">Milestones That Define Our Excellence</h2>
                        <p>From humble beginnings to industry leadership, our journey reflects our commitment to excellence and innovation in business services.</p>
                    </div>
                </div>
            </div>

            <div class="premium-timeline">
                <div class="timeline-line">
                    <div class="line-fill"></div>
                </div>

                <!-- Timeline Item 1 -->
                <div class="timeline-entry left-entry">
                    <div class="timeline-point">
                        <span class="year">2011</span>
                        <div class="point-circle"></div>
                    </div>
                    <div class="timeline-card-wrapper">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/img/icons/start-up.png') }}" alt="Foundation">
                                </div>
                                <h3>Foundation</h3>
                            </div>
                            <div class="card-body">
                                <p>Started with a vision to provide comprehensive business solutions with just 3 dedicated professionals.</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-entry right-entry">
                    <div class="timeline-point">
                        <span class="year">2012</span>
                        <div class="point-circle"></div>
                    </div>
                    <div class="timeline-card-wrapper">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/img/icons/growth.png') }}" alt="Expansion">
                                </div>
                                <h3>Expansion</h3>
                            </div>
                            <div class="card-body">
                                <p>Expanded our service portfolio to include taxation and compliance solutions, serving 50+ clients.</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-entry left-entry">
                    <div class="timeline-point">
                        <span class="year">2015</span>
                        <div class="point-circle"></div>
                    </div>
                    <div class="timeline-card-wrapper">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/img/icons/award-symbol.png') }}" alt="Recognition">
                                </div>
                                <h3>Recognition</h3>
                            </div>
                            <div class="card-body">
                                <p>Received industry recognition for excellence in business consulting and financial advisory services.</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-entry right-entry">
                    <div class="timeline-point">
                        <span class="year">2020</span>
                        <div class="point-circle"></div>
                    </div>
                    <div class="timeline-card-wrapper">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/img/icons/team.png') }}" alt="Team Growth">
                                </div>
                                <h3>Team Growth</h3>
                            </div>
                            <div class="card-body">
                                <p>Expanded our team to 25+ professionals, each specialized in different aspects of business services.</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 5 -->
                <div class="timeline-entry left-entry">
                    <div class="timeline-point">
                        <span class="year">2024</span>
                        <div class="point-circle"></div>
                    </div>
                    <div class="timeline-card-wrapper">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/img/icons/transformation.png') }}" alt="Digital Transformation">
                                </div>
                                <h3>Digital Transformation</h3>
                            </div>
                            <div class="card-body">
                                <p>Embraced digital solutions to enhance service delivery and client experience during global challenges.</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 6 -->
                <div class="timeline-entry right-entry">
                    <div class="timeline-point">
                        <span class="year">2025</span>
                        <div class="point-circle"></div>
                    </div>
                    <div class="timeline-card-wrapper">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/img/icons/leadership.png') }}" alt="Market Leadership">
                                </div>
                                <h3>Market Leadership</h3>
                            </div>
                            <div class="card-body">
                                <p>Achieved milestone of serving 700+ businesses with comprehensive end-to-end business solutions.</p>
                            </div>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="timeline-shape-wrap">
            <img src="{{ asset('assets/img/images/h2_about_shape03.png') }}" alt="" class="shape-one" data-aos="fade-right" data-aos-delay="400">
            <img src="{{ asset('assets/img/images/h3_overview_shape02.png') }}" alt="" class="shape-two" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
    <!-- journey-timeline-area-end -->

    <!-- request-area -->
    <section class="request-area request-bg" data-background="{{ asset('assets/img/bg/request_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="request-content tg-heading-subheading animation-style1">
                        <h2 class="title tg-element-title">Let's Request a Schedule For <br> Free Consultation</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="request-content-right">
                        <div class="request-contact">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icons/whatsapp.png') }}" alt="Phone">
                            </div>
                            <div class="content">
                                <span>Hotline 24/7</span>
                                <a href="tel:+918334027857">+91-8334027857</a>
                            </div>
                        </div>
                        <div class="request-btn">
                            <a href="{{ route('contact') }}" class="btn">Request a Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="request-shape">
            <img src="{{ asset('assets/img/images/request_shape.png') }}" alt="">
        </div>
    </section>
    <!-- request-area-end -->

    <!-- brand-area -->
    <x-Brand />
    <!-- brand-area-end -->


</main>

<!-- main-area-end -->

@endsection