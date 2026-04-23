@extends('layouts.app')

@section('title', '360 Business Services | GST, Company Registration & CA Services India')
@section('meta_description', 'Get GST registration in 7 days, company formation in 15 days. Expert CA services across India. Starting ₹499. Free consultation. 24/7 support. 10,000+ happy clients.')
@section('keywords', 'business services India, GST registration online, income tax consultant India, company registration PAN India, accounting services nationwide, CA services online, business compliance India, startup services India, tax filing online, virtual CFO services, business consultation India, MSME registration online, trademark registration India, 360 business services, professional tax filing, TDS return filing, audit services India, online business services, digital CA services, remote accounting services, nationwide business solutions')
@section('canonical_url', url('/'))

@section('og_title', '360 Business and Services | Complete Business Solutions PAN India')
@section('og_description', '360 Business and Services offers complete business solutions across India including GST registration, income tax consultation, company formation, accounting services, and compliance management. Expert CA services for startups and established businesses nationwide.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/logo/og-logo.jpg')
@section('og_image_alt', '360 Business and Services - Complete Business Solutions in Kolkata')

@section('twitter_title', '360 Business and Services | Complete Business Solutions PAN India')
@section('twitter_description', 'Expert business solutions across India: GST registration, income tax consultation, company formation, accounting services & compliance management. Affordable CA services for all business types nationwide.')

@section('breadcrumb_schema')
<link rel="stylesheet" href="{{ asset('assets/css/index-service.css') }}">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        }]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How much does GST registration cost in India?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration costs ₹499 through 360 Business Services. The process takes 7-15 days and includes complete documentation support, online filing, and expert guidance."
            }
        }, {
            "@type": "Question",
            "name": "What is the cost of company registration in India?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Private Limited Company registration costs ₹5999 including government fees, documentation, and expert support. The process takes 15-20 days with complete compliance."
            }
        }, {
            "@type": "Question",
            "name": "Do you provide services across India?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, 360 Business Services provides complete business solutions across India including GST registration, company formation, MSME registration, and tax filing services with 24/7 support."
            }
        }]
    }
</script>
@endsection

@section('main')


<!-- main-area -->
<main class="fix">

    <!-- banner-area -->
    <section class="banner-area">
        <div class="container pb-lg-5 pb-sm-3">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="banner-content-three text-center">
                        <h5 class="title  mb-1 index-title" data-aos="fade-right" data-aos-delay="0">Strategic Compliance, Expert Taxation, Trusted Consultancy</h5>
                        <h5 data-aos="fade-right index-subtitle" data-aos-delay="300" style="color:#2f80ed;"> End to End Smart solutions with affordable price</h5>
                        <!-- Search form -->
                        <form id="searchForm" class="banner-form justify-content-center mx-auto" data-aos="fade-right" data-aos-delay="600">
                            <div class="d-flex align-items-center">
                                <input id="searchInput" class="form-control typewriter-input" type="text" placeholder="Search...">
                                <button type="submit"><i class="fi fi-rr-search"></i></button>
                            </div>
                            <div id="searchResults" class="dropdown-menu result-dropdown" aria-labelledby="searchInput"></div>
                        </form>
                        <div id="searchResults" class="dropdown-menu search-dropdown" aria-labelledby="searchInput"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-wrap-three">
            <img src="{{ asset('assets/img/banner/h3_banner_shape02.png') }}" alt="360 Business Services Banner Design Element">
        </div>
        <!-- brand-area -->
        <x-Brand />
        <!-- brand-area-end -->
    </section>
    <!-- banner-area-end -->

    <!-- about-area -->
    <section class="about-area-four">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                    <div class="about-img-wrap-four">
                        <div class="mask-img-wrap">
                            <img src="{{ asset('assets/img/images/h3_about_img01.jpg') }}" alt="Professional Business Consultation Team at 360 Business Services">
                        </div>
                        <div class="icon"><i class="flaticon-business-presentation"></i></div>
                        <img src="{{ asset('assets/img/images/h3_about_img02.png') }}" alt="Business Growth Strategy Visualization" class="img-two">
                        <div class="about-shape-wrap-three">
                            <img src="{{ asset('assets/img/images/h3_about_shape01.png') }}" alt="Design Element">
                            <img src="{{ asset('assets/img/images/h3_about_shape02.png') }}" alt="Business Growth Chart">
                            <img src="{{ asset('assets/img/images/h3_about_shape03.png') }}" alt="Professional Services Icon">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-four">
                        <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">About 360 Business and Services</span>
                            <h2 class="title tg-element-title"> We provide Complete Business Solution </h2>
                        </div>
                        <p>Our extensive range of business services is designed to support companies across India at every stage of growth. From <a href="{{ route('pvt') }}" title="Private Limited Company Registration">company incorporation</a> to <a href="{{ route('gst-return-filling') }}" title="GST Return Filing Services">tax compliance</a>, we offer expert solutions tailored to your specific needs nationwide.</p>
                        <p>With our professional team and years of experience, we ensure that your business operations run smoothly across India while you focus on what matters most - growing your business. Whether you need <a href="{{ route('gst') }}" title="GST Registration Online">GST registration</a>, <a href="{{ route('msme') }}" title="MSME Registration Certificate">MSME certification</a>, or <a href="{{ route('virtual-cfo-service') }}" title="Virtual CFO Services">financial consulting</a>, we're here to help.</p>
                        <div class="about-list-three">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Expert & Professional Team:</h2>
                                        <p>A dedicated group of seasoned professionals with a track record of delivering exceptional results. <a href="{{ route('career') }}" title="Join Our Team">Join our growing team</a> to build your career in business services.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-mission"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Client-Centric Approach:</h2>
                                        <p>Putting your business needs at the forefront, we tailor solutions that drive success. <a href="{{ route('services') }}" title="Browse All Services">Explore all our services</a> to find the perfect fit for your business.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services-area-two services-bg-two services-area-refined">
        <div class="container">
            <div class="row">
                <!-- Left Column - Content -->
                <div class="col-lg-6">
                    <div class="services-content-left" style="height: 100%; padding: 40px 20px;">
                        <div class="section-title-two mb-30 tg-heading-subheading animation-style3">
                            <span class="sub-title" style="background: rgba(37, 117, 252, 0.1); color: #2575fc; padding: 8px 20px; border-radius: 30px; font-weight: 600; display: inline-block; margin-bottom: 15px;">WHAT WE DO?</span>
                            <h2 class="title tg-element-title" style="font-size: 42px; line-height: 1.3; margin-bottom: 25px; font-weight: 700; color: #0b2154;">We provide you comprehensive Services for your Business</h2>
                        </div>
                        <div class="content-paragraph" style="margin-bottom: 30px;">
                            <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 20px;">Our extensive range of business services is designed to support companies across India at every stage of growth. From incorporation to compliance, we offer expert solutions tailored to your specific needs nationwide.</p>
                            <p style="font-size: 16px; line-height: 1.8; color: #666;">With our professional team and years of experience, we ensure that your business operations run smoothly across India while you focus on what matters most - growing your business.</p>
                        </div>
                        <a href="{{ route('services') }}" class="btn primary-btn">EXPLORE ALL SERVICES</a>

                       
                    </div>
                </div>

                <!-- Right Column - Service Cards -->
                <div class="col-lg-6">
                    <div class="service-slider-container" style="position: relative; margin-top: 20px;">
                        <!-- Service Cards Wrapper -->
                        <div class="service-slider" id="serviceSlider" style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 20px 50px rgba(0,0,0,0.1);">
                            <!-- Active Service Card (Full View) -->
                            <div class="active-service-card" id="activeServiceCard" style="background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%); padding: clamp(25px, 5vw, 45px); color: white; min-height: clamp(400px, 60vw, 520px); position: relative; border-radius: 15px 15px 0 0; overflow: hidden;">
                                <!-- Background Pattern -->
                                <div style="position: absolute; top: 0; right: 0; width: clamp(150px, 40vw, 300px); height: clamp(150px, 40vw, 300px); background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjEuMjE2IDEwMS4wNzFjMTcuODQtMjAuMDkgNDQuNTgtMzIuNzIgNzQuNTI3LTMyLjcyIDU0LjkwOCAwIDk5LjQ2MiA0NC41NTQgOTkuNDYyIDk5LjQ2MiAwIDU0LjkwNy00NC41NTQgOTkuNDYyLTk5LjQ2MiA5OS40NjItMjkuOTQ2IDAtNTYuNjg3LTEyLjYzLTc0LjUyNy0zMi43MiIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utd2lkdGg9IjIiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iLjEiLz48cGF0aCBkPSJNMTQ4LjQ2NSAxNDguNDY1YzAtMjkuMDQgMjMuNTUtNTIuNTkgNTIuNTktNTIuNTkgMjkuMDQgMCA1Mi41OSAyMy41NSA1Mi41OSA1Mi41OSAwIDI5LjA0LTIzLjU1IDUyLjU5LTUyLjU5IDUyLjU5LTI5LjA0IDAtNTIuNTktMjMuNTUtNTIuNTktNTIuNTl6IiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMiIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBvcGFjaXR5PSIuMSIvPjwvc3ZnPg=='); background-repeat: no-repeat; background-position: top right; opacity: 0.6;"></div>

                                <!-- Service Icon with Enhanced Styling -->
                                <div class="service-icon" style="background: rgba(255,255,255,0.2); width: clamp(60px, 12vw, 90px); height: clamp(60px, 12vw, 90px); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: clamp(20px, 4vw, 30px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); position: relative; z-index: 2;">
                                    <i class="flaticon-calculator" id="activeIcon" style="font-size: clamp(24px, 5vw, 36px); color: white;"></i>
                                </div>

                                <!-- Service Title with Enhanced Typography -->
                                <h2 class="service-title" id="activeTitle" style="font-size: clamp(20px, 5vw, 32px); font-weight: 700; margin-bottom: clamp(15px, 3vw, 25px); color: white; position: relative; z-index: 2; line-height: 1.3;">Accounting & Auditing Services</h2>

                                <!-- Service Content with Better Spacing and Visibility -->
                                <div class="service-content" id="activeContent" style="position: relative; z-index: 2; max-width: 100%;">
                                    <ul style="list-style: none; padding-left: 0; margin-bottom: clamp(20px, 4vw, 30px);">
                                        <li style="margin-bottom: clamp(12px, 2.5vw, 16px); display: flex; align-items: flex-start;">
                                            <span style="background: rgba(255,255,255,0.4); min-width: clamp(24px, 4vw, 28px); height: clamp(24px, 4vw, 28px); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: clamp(10px, 2vw, 15px); font-size: clamp(12px, 2vw, 14px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex-shrink: 0;">✓</span>
                                            <span style="font-size: clamp(14px, 3vw, 17px); line-height: 1.6; font-weight: 500;">Maintain clean, up-to-date financial records</span>
                                        </li>
                                        <li style="margin-bottom: clamp(12px, 2.5vw, 16px); display: flex; align-items: flex-start;">
                                            <span style="background: rgba(255,255,255,0.4); min-width: clamp(24px, 4vw, 28px); height: clamp(24px, 4vw, 28px); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: clamp(10px, 2vw, 15px); font-size: clamp(12px, 2vw, 14px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex-shrink: 0;">✓</span>
                                            <span style="font-size: clamp(14px, 3vw, 17px); line-height: 1.6; font-weight: 500;">Ensure internal & external audit readiness</span>
                                        </li>
                                        <li style="margin-bottom: clamp(12px, 2.5vw, 16px); display: flex; align-items: flex-start;">
                                            <span style="background: rgba(255,255,255,0.4); min-width: clamp(24px, 4vw, 28px); height: clamp(24px, 4vw, 28px); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: clamp(10px, 2vw, 15px); font-size: clamp(12px, 2vw, 14px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex-shrink: 0;">✓</span>
                                            <span style="font-size: clamp(14px, 3vw, 17px); line-height: 1.6; font-weight: 500;">Customized accounting solutions</span>
                                        </li>
                                        <li style="margin-bottom: clamp(12px, 2.5vw, 16px); display: flex; align-items: flex-start;">
                                            <span style="background: rgba(255,255,255,0.4); min-width: clamp(24px, 4vw, 28px); height: clamp(24px, 4vw, 28px); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: clamp(10px, 2vw, 15px); font-size: clamp(12px, 2vw, 14px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex-shrink: 0;">✓</span>
                                            <span style="font-size: clamp(14px, 3vw, 17px); line-height: 1.6; font-weight: 500;">MIS reports & actionable financial insights</span>
                                        </li>
                                        <li style="display: flex; align-items: flex-start;">
                                            <span style="background: rgba(255,255,255,0.4); min-width: clamp(24px, 4vw, 28px); height: clamp(24px, 4vw, 28px); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: clamp(10px, 2vw, 15px); font-size: clamp(12px, 2vw, 14px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex-shrink: 0;">✓</span>
                                            <span style="font-size: clamp(14px, 3vw, 17px); line-height: 1.6; font-weight: 500;">End-to-end regulatory compliance support</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('services') }}" id="activeLink" class="details-link" style="color: white; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; background: rgba(255,255,255,0.25); padding: clamp(10px, 2vw, 14px) clamp(20px, 4vw, 32px); border-radius: 50px; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.15); backdrop-filter: blur(5px); font-size: clamp(14px, 3vw, 16px);">
                                        See Details <i class="fas fa-arrow-right" style="margin-left: clamp(8px, 1.5vw, 12px);"></i>
                                    </a>
                                </div>

                                <!-- Service Card Number with Enhanced Styling -->
                                <div class="service-number" style="position: absolute; top: clamp(20px, 4vw, 45px); right: clamp(20px, 4vw, 45px); font-size: clamp(14px, 3vw, 18px); font-weight: 700; background: rgba(255,255,255,0.2); padding: clamp(4px, 1vw, 5px) clamp(10px, 2vw, 15px); border-radius: 30px; backdrop-filter: blur(5px); box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                                    <span id="currentServiceIndex">1</span>/<span id="totalServices">14</span>
                                </div>
                            </div>

                            <!-- Service Navigation -->
                            <div class="service-navigation" style="background: white; padding: clamp(15px, 3vw, 25px); display: flex; align-items: center; justify-content: space-between; border-top: 1px solid rgba(0,0,0,0.05); flex-wrap: wrap; gap: 15px;">
                                <div class="nav-buttons" style="display: flex; gap: clamp(15px, 3vw, 20px); align-items: center;">
                                    <button id="prevService" class="nav-btn prev-btn" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border: 2px solid #2575fc; width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 25px rgba(37, 117, 252, 0.15); position: relative; overflow: hidden;">
                                        <i class="fas fa-chevron-left" style="color: #2575fc; font-size: clamp(16px, 3vw, 20px); transition: all 0.3s ease; z-index: 2; position: relative;"></i>
                                        <span class="btn-ripple" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%); opacity: 0; transition: opacity 0.3s ease; z-index: 1;"></span>
                                    </button>
                                    <button id="nextService" class="nav-btn next-btn" style="background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%); border: 2px solid transparent; width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 10px 30px rgba(37, 117, 252, 0.4); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden;">
                                        <i class="fas fa-chevron-right" style="color: white; font-size: clamp(16px, 3vw, 20px); transition: all 0.3s ease; z-index: 2; position: relative;"></i>
                                        <span class="btn-glow" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); opacity: 0; transition: opacity 0.3s ease; z-index: 1;"></span>
                                    </button>
                                </div>

                                <div class="service-indicators" id="serviceIndicators" style="display: none;">
                                    <!-- Indicators hidden as requested -->
                                </div>

                                <!-- Hidden progress bar for auto-slide timing -->
                                <div style="display: none;">
                                    <span id="autoSlideStatus">Auto</span>
                                    <span class="slide-progress">
                                        <span id="progressBar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Service Thumbnails -->
                        <div class="service-thumbnails" style="display: none;">
                            <!-- Thumbnails hidden on mobile for cleaner look -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- choose-area -->
    <section class="choose-area-enhanced jarallax choose-bg position-relative" data-background="{{ asset('assets/img/bg/choose_bg.jpg') }}">
        <!-- Enhanced Background Overlay -->
        <div class="choose-overlay"></div>

        <!-- Floating Elements -->
        <div class="floating-elements">
            <div class="floating-icon floating-icon-1" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="floating-icon floating-icon-2" data-aos="fade-down" data-aos-delay="400">
                <i class="fas fa-shield-alt"></i>
            </div>
            <div class="floating-icon floating-icon-3" data-aos="fade-left" data-aos-delay="600">
                <i class="fas fa-trophy"></i>
            </div>
        </div>

        <div class="choose-shape">
            <img src="{{ asset('assets/img/images/choose_shape.png') }}" alt="" data-aos="fade-right" data-aos-delay="0">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Enhanced Content -->
                <div class="col-lg-6">
                    <div class="pricing-cta-panel" data-aos="fade-right" data-aos-delay="200">
                        <span class="pricing-cta-kicker">
                            <i class="fas fa-shield-alt"></i>
                            Pricing & Trust
                        </span>

                        <h2 class="title tg-element-title pricing-cta-title pb-4">Simple pricing built around trust, clarity, and confidence.</h2>

                        <p class="pricing-cta-description pb-4">We believe pricing should be transparent, easy to understand, and completely free from hidden surprises. Our quotation gives you a clear view of every charge, so you can compare services confidently and choose the package that best matches your business needs.</p>

                        <a href="{{ asset('assets/img/Quotetion.pdf') }}" class="btn" target="_blank" rel="noopener noreferrer">See Pricing of our exclusive services</a>
                    </div>
                </div>

                <!-- Right Column - Autoplay Video Showcase -->
                 <div class="col-lg-6">
                    <div class="video-showcase-card wow fadeInLeft" data-wow-delay=".2s" data-aos="fade-left" data-aos-delay="300">
                        <div class="video-box-head">
                            <h3 class="video-box-title">Inside 360 Business Services</h3>
                            <p class="video-box-subtitle">A quick look at how we help businesses scale with confidence.</p>
                        </div>

                        <div class="video-box-player-wrap">
                            <video class="video-box-player" autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/img/images/h3_about_img01.jpg') }}">
                                <source src="{{ asset('assets/img/my-video.mp4') }}" type="video/mp4">
                            </video>

                            <a href="{{ asset('assets/img/my-video.mp4') }}" class="video-box-lightbox popup-video" aria-label="Open video in lightbox">
                                <span class="video-box-play-icon"><i class="fas fa-play"></i></span>
                                <span>Watch Fullscreen</span>
                            </a>
                        </div>

                        <div class="video-box-meta">
                            <div class="video-meta-item">
                                <span class="video-meta-label">Coverage</span>
                                <strong>PAN India</strong>
                            </div>
                            <div class="video-meta-item">
                                <span class="video-meta-label">Support</span>
                                <strong>24/7</strong>
                            </div>
                            <div class="video-meta-item">
                                <span class="video-meta-label">Experience</span>
                                <strong>13+ Years</strong>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- pricing-area -->
    <section class="pricing-area-two">
        <div class="pricing-shape">
            <img src="{{ asset('assets/img/images/pricing_shape.png') }}" alt="" data-aos="fade-left" data-aos-delay="200">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="section-title-two mb-50 tg-heading-subheading animation-style3">
                        <span class="sub-title">Flexible Pricing Plan</span>
                        <h2 class="title tg-element-title">We've offered the best pricing for you</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-end text-start mb-50">
                        <a href="{{ asset('assets/img/Quotetion.pdf') }}" class="btn" target="_blank" rel="noopener noreferrer">See Our Quotation</a>
                    </div>
                </div>
            </div>
            <div class="pricing-item-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h2 class="title">Start up</h2>
                                <p>Starts from</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>Rs.</strong>19,999</h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">DIN & DSC</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">MCA Name approval</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Company Formation</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Business Commencement</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Auditor Recruitment</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Tan Registration</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Trade License</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">P-Tax Registration</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Business Bank Account</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Shop & Establishment</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{ route('payment') }}" class="btn">GET THE PLAN NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box active">
                            <span class="popular-tag">Popular</span>
                            <div class="pricing-head">
                                <h2 class="title">Standard</h2>
                                <p>Starts from</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>Rs.</strong>24,999</h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">DIN & DSC</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">MCA Name approval</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Company Formation</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Business Commencement</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Auditor Recruitment</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Tan Registration</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Trade License</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">P-Tax Registration</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Business Bank Account</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Shop & Establishment</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">MSME registration</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">PF & ESI Registration</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{ route('payment') }}" class="btn">GET THE PLAN NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h2 class="title">Accounting Outsource</h2>
                                <p>Starts from</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>Rs.</strong>6,499<span>/Month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Professional Accountant Support</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">CA provides backend support</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Weekly Accountant support</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Monthly GST returns</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Company accounts management</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">PF & ESI Management</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">TDS return submission</li>
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">Virtual CFO Services</li>
                                </ul>
                                <p><strong>Note :</strong> The above-mentioned monthly service charges will depend on the volume of business and banking transactions.</p>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{ route('payment') }}" class="btn">GET THE PLAN NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview-Section-->
    <section class="overview-area pt-120 pb-120" style="position: relative;">
        <div class="overview-shape aos-init aos-animate" data-aos="fade-left" data-aos-delay="200"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Content Column - Mobile First -->
                <div class="col-lg-7 col-md-12 order-2 order-lg-1">
                    <div class="overview-content" style="text-align: center; text-align: left;">
                        <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                            <span class="sub-title" style="display: inline-block; background: rgba(37, 117, 252, 0.1); color: #2575fc; padding: 8px 20px; border-radius: 30px; font-weight: 600; margin-bottom: 15px;">Why Choose Us</span>
                            <h2 class="title tg-element-title" style="font-size: clamp(24px, 5vw, 42px); line-height: 1.3; margin-bottom: 20px; color: #0b2154;">Your Trusted Partner for Business Excellence</h2>
                        </div>
                        <p class="info-one" style="font-size: clamp(14px, 4vw, 16px); line-height: 1.7; color: #666; margin-bottom: 15px;">With over a decade of experience in business consulting, we bring unparalleled expertise and innovative solutions to help your business thrive in today's competitive landscape.</p>
                        <p class="info-two" style="font-size: clamp(14px, 4vw, 16px); line-height: 1.7; color: #666; margin-bottom: 30px;">Our commitment to excellence, personalized approach, and proven track record make us the ideal partner for your business growth journey.</p>

                        <!-- Mobile Optimized Stats Cards -->
                        <div class="content-bottom">
                            <div class="stats-container" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; justify-content: flex-start;">
                                <!-- Years of Excellence Card -->
                                <div class="stat-card" style="flex: 1; min-width: 280px; max-width: 320px; background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%); padding: 30px 25px; border-radius: 20px; text-align: center; box-shadow: 0 15px 35px rgba(37, 117, 252, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;">
                                    <!-- Background Pattern -->
                                    <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.6;"></div>
                                    <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.08); border-radius: 50%;"></div>

                                    <div class="stat-icon" style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; position: relative; z-index: 2;">
                                        <i class="flaticon-trophy" style="font-size: 32px; color: white;"></i>
                                    </div>
                                    <h2 class="count" style="font-size: clamp(36px, 8vw, 48px); font-weight: 700; color: white; margin-bottom: 10px; position: relative; z-index: 2;">
                                        <span class="odometer" data-count="13">0</span>+
                                    </h2>
                                    <p style="font-size: clamp(14px, 3vw, 16px); color: rgba(255,255,255,0.9); margin: 0; font-weight: 500; position: relative; z-index: 2;">Years of Excellence</p>
                                </div>

                                <!-- Companies Served Card -->
                                <div class="stat-card" style="flex: 1; min-width: 280px; max-width: 320px; background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); padding: 30px 25px; border-radius: 20px; text-align: center; box-shadow: 0 15px 35px rgba(106, 17, 203, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;">
                                    <!-- Background Pattern -->
                                    <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.6;"></div>
                                    <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.08); border-radius: 50%;"></div>

                                    <div class="stat-icon" style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; position: relative; z-index: 2;">
                                        <i class="flaticon-rating" style="font-size: 32px; color: white;"></i>
                                    </div>
                                    <h2 class="count" style="font-size: clamp(36px, 8vw, 48px); font-weight: 700; color: white; margin-bottom: 10px; position: relative; z-index: 2;">
                                        <span class="odometer" data-count="4000">0</span>+
                                    </h2>
                                    <p style="font-size: clamp(14px, 3vw, 16px); color: rgba(255,255,255,0.9); margin: 0; font-weight: 500; position: relative; z-index: 2;">Companies Served</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="col-lg-5 col-md-10 order-1 order-lg-2" style="margin-bottom: 40px; margin-bottom: 0;">
                    <div class="overview-img-wrap" style="text-align: center; position: relative;">
                        <img src="assets/img/images/overview_img01.jpg" alt="Business Excellence" style="max-width: 100%; height: auto; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                        <img src="assets/img/images/iso.png" alt="Professional Team" data-parallax="{&quot;x&quot; : 50}" style="max-width: 120px; position: absolute; top: 20px; right: 20px; background: white; padding: 15px; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15); transition: all 0.3s ease;" class="iso-image">
                        <img src="assets/img/images/overview_img_shape.png" alt="Shape" style="position: absolute; bottom: -20px; left: -20px; max-width: 100px; opacity: 0.7;">
                        <div class="icon" style="position: absolute; bottom: 20px; right: 20px; background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 25px rgba(37, 117, 252, 0.3);">
                            <i class="flaticon-report-1" style="font-size: 24px; color: white;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Specific Styles -->
        <style>
            @media (max-width: 768px) {
                .overview-area {
                    padding: 60px 0 !important;
                }

                .overview-content {
                    text-align: center !important;
                    padding: 0 15px;
                }

                .stats-container {
                    justify-content: center !important;
                    flex-direction: column;
                    align-items: center;
                }

                .stat-card {
                    min-width: 100% !important;
                    max-width: 350px !important;
                    margin: 0 auto;
                }

                .stat-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 20px 40px rgba(37, 117, 252, 0.4);
                }

                .overview-img-wrap {
                    margin-bottom: 40px;
                }

                .overview-img-wrap img:first-child {
                    border-radius: 20px;
                }

                /* Keep ISO image smaller on mobile */
                .iso-image {
                    max-width: 70px !important;
                    padding: 8px !important;
                    top: 15px !important;
                    right: 15px !important;
                    border-radius: 10px !important;
                }
            }

            @media (max-width: 480px) {
                .overview-area {
                    padding: 40px 0 !important;
                }

                .stat-card {
                    padding: 25px 20px !important;
                    margin-bottom: 20px;
                }

                .section-title-two .sub-title {
                    padding: 6px 16px !important;
                    font-size: 14px !important;
                }
            }

            /* Desktop Specific Styles */
            @media (min-width: 769px) {
                .stat-card:hover {
                    transform: translateY(-10px) scale(1.02);
                    box-shadow: 0 25px 50px rgba(37, 117, 252, 0.4);
                }

                /* Make ISO image larger on desktop */
                .iso-image {
                    max-width: 150px !important;
                    padding: 20px !important;
                    border-radius: 20px !important;
                    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2) !important;
                }

                .iso-image:hover {
                    transform: scale(1.1) rotate(2deg);
                    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25) !important;
                }
            }

            /* Large Desktop Screens */
            @media (min-width: 1200px) {
                .iso-image {
                    max-width: 180px !important;
                    padding: 25px !important;
                    top: 30px !important;
                    right: 30px !important;
                }
            }
        </style>
    </section>
    <!-- Overview-Section-End-->

    <!-- testimonial-area -->
    <section class="testimonial-area-five">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="testimonial-img-five">
                        <img src="{{ asset('assets/img/images/h5_testimonial_img.png') }}" alt="">
                        <img src="{{ asset('assets/img/images/h5_testimonial_shape01.png') }}" alt="" class="shape-one">
                        <img src="{{ asset('assets/img/images/h5_testimonial_shape02.png') }}" alt="" class="shape-two">
                        <img src="{{ asset('assets/img/images/h5_testimonial_shape03.png') }}" alt="" class="shape-three">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content-five">
                        <div class="section-title title-three mb-50 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Our Testimonials</span>
                            <h2 class="title tg-element-title">What our awesome customers say</h2>
                        </div>
                        <div class="testimonial-item-wrap-five">
                            <div class="testimonial-active-five">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="content-top">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/img/icons/quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p>Last ten years of our relationship with 360 Business and Services. We are so satisfied with the service of this organization that today we have moved our entire accounts of our firm from Mumbai to Kolkata.</p>
                                        <div class="testimonial-avatar">
                                            <div class="avatar-thumb">
                                                <img src="{{ asset('assets/img/images/testi_avatar01.png') }}" alt="">
                                            </div>
                                            <div class="avatar-info">
                                                <h2 class="title">Mr.Anil Rana</h2>
                                                <span>Director - Indian Art projects Pvt.Ltd</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="content-top">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/img/icons/quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p>We have been getting reliable support and service for several years from 360 Business and Services. not only for our company but also for our business center and clients.</p>
                                        <div class="testimonial-avatar">
                                            <div class="avatar-thumb">
                                                <img src="{{ asset('assets/img/images/testi_avatar02.png') }}" alt="">
                                            </div>
                                            <div class="avatar-info">
                                                <h2 class="title">Mr.Sailesh Alley</h2>
                                                <span>Area Director - Akasa Co working Pvt.Ltd</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="content-top">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/img/icons/quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p>360 Business and Services is the official vendor of our company compliance & taxation. This organization has been working with our company and our clients with trust since 2017.</p>
                                        <div class="testimonial-avatar">
                                            <div class="avatar-thumb">
                                                <img src="{{ asset('assets/img/images/testi_avatar03.png') }}" alt="">
                                            </div>
                                            <div class="avatar-info">
                                                <h2 class="title">Mr.Adrijit Ghosh </h2>
                                                <span>Senior Manager - Operations - AWFIS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="content-top">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('assets/img/icons/quote.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p>We are working with 360 Business and Services for a long time now, they has been providing the trade license, GST and various company compliances and taxation services for our clients .</p>
                                        <div class="testimonial-avatar">
                                            <div class="avatar-thumb">
                                                <img src="{{ asset('assets/img/images/testi_avatar04.png') }}" alt="">
                                            </div>
                                            <div class="avatar-info">
                                                <h2 class="title">Mr.Raja Mukherjee</h2>
                                                <span>Area Sales Manager(TL) - Regus Business Centre</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-nav-five"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- request-area -->
    <section class="request-area-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="request-content-two">
                        <div class="section-title-two white-title mb-15 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Request a Call Back</h2>
                        </div>
                        <p>Your convenience, our commitment. Request a callback today!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="request-form-wrap">
                        <form method="POST" id="CallForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" placeholder="E-mail *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="tel" name="phone" placeholder="Phone *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" onclick="submitForm()">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="request-shape-wrap">
            <img src="{{ asset('assets/img/images/h2_request_shape01.png') }}" alt="">
            <img src="{{ asset('assets/img/images/h2_request_shape02.png') }}" alt="" data-aos="fade-left" data-aos-delay="200">
        </div>
    </section>
    <!-- request-area-end -->

    <!-- blog-post-area -->
    <section class="blog-post-area">
        <div class="blog-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">News & Blogs</span>
                        <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                        <p>Exploring the Vast Horizons of Business: Insights, Tips, and Strategies to Navigate Your Journey with 360 Business and Services</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="{{ route('accountAuditService') }}"><img src="{{ asset('assets/img/blog/blog_thumb_01.jpg') }}" alt=""></a>
                            <span class="date"><strong>5</strong>Jan</span>
                        </div>
                        <div class="blog-post-content">
                            <a href="{{ route('error') }}" class="tag">Company Compliance</a>
                            <h2 class="title"><a href="{{ route('accountAuditService') }}">Accounts & Auditing Services</a></h2>
                            <p>Everything you need about Accounts & Auditing Services for your business.</p>
                            <a href="{{ route('accountAuditService') }}" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="{{ route('accountingOutsourcing') }}"><img src="{{ asset('assets/img/blog/blog_thumb_02.jpg') }}" alt=""></a>
                            <span class="date"><strong>10</strong>Jan</span>
                        </div>
                        <div class="blog-post-content">
                            <a href="{{ route('error') }}" class="tag">Company Compliance</a>
                            <h2 class="title"><a href="{{ route('accountingOutsourcing') }}"> Accounting Outsourcing</a></h2>
                            <p>No dedicate accountant? No Problem we Provide 360 accounts Support for your Business.</p>
                            <a href="{{ route('accountingOutsourcing') }}" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="{{ route('companyCompliance') }}"><img src="{{ asset('assets/img/blog/blog_thumb_03.jpg') }}" alt=""></a>
                            <span class="date"><strong>15</strong>Jan</span>
                        </div>
                        <div class="blog-post-content">
                            <a href="{{ route('error') }}" class="tag">Company Compliance</a>
                            <h2 class="title"><a href="{{ route('companyCompliance') }}">GST Registration & Returns</a></h2>
                            <p>Everything you need behalf of GST related for your business.</p>
                            <a href="{{ route('companyCompliance') }}" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-post-area-end -->


</main>
<!-- main-area-end -->
@php
$mainMenu = [
'Business Setup' => ['Sole Proprietorship', 'Partnership Firm', 'Limited Liability Partnership(LLP)', 'One Person Company', 'Ltd / Private Limited Company', 'Nidhi Company', 'Section 8 Company', 'NGO & Trust Registration', 'E-commerce Business'],
'Registration' => ['Trade License', 'GST Registration', 'MSME Registration', 'Professional Tax', 'PF & ESIC Registration', 'FSSAI Registration', 'ISO Certificate', 'Fire License', 'Ayush Registration'], // Add more submenu items here
'Compliances' => ['Business Commencement', 'Auditor Recruitment', 'Annual Compliance & Filling', 'Personal Tax Filling', 'Business Tax Filling', 'Compliance Audits'] // Add more submenu items here
];
@endphp
<script src="{{ asset('assets/js/index-service.js') }}"></script>
<script>
    function searchMenuItems(query) {
        const searchResults = document.getElementById('searchResults');
        searchResults.innerHTML = '';

        const menuItems = {
            'Sole Proprietorship': '{{ route("proprietorship") }}',
            'Partnership Firm': '{{ route("partnership") }}',
            'Limited Liability Partnership(LLP)': '{{ route("llp") }}',
            'One Person Company': '{{ route("onepersoncompany") }}',
            'Ltd / Private Limited Company': '{{ route("pvt") }}',
            'Nidhi Company': '{{ route("nidhi") }}',
            'Section 8 Company': '{{ route("section8") }}',
            'NGO & Trust Registration': '{{ route("ngo-trust") }}',
            'E-commerce Business': '{{ route("e-commerce") }}',
            'Trade License': '{{ route("trade") }}',
            'GST Registration': '{{ route("gst") }}',
            'MSME Registration': '{{ route("msme") }}',
            'Professional Tax': '{{ route("ptax") }}',
            'PF & ESIC Registration': '{{ route("pfesic") }}',
            'FSSAI Registration': '{{ route("fssai") }}',
            'ISO Certificate': '{{ route("iso") }}',
            'Fire License': '{{ route("fire") }}',
            'Ayush Registration': '{{ route("ayush") }}',
            'RERA License': '{{ route("rera") }}',
            'Labour License': '{{ route("labour") }}',
            'Pollution License': '{{ route("pollution") }}',
            'Shop & Establishment': '{{ route("shop") }}',
            'Digital Signature (DSC)': '{{ route("dsc") }}',
            'Registered Office Change': '{{ route("registered-office-change") }}',
            'Add & Remove Director': '{{ route("add-remove-director") }}',
            'Contract Labour Registration': '{{ route("contract-labour") }}',
            'Niti Ayog (Darpan) Registration': '{{ route("niti") }}',
            'Trademark Registration': '{{ route("trademark") }}',
            'International Trademark': '{{ route("international-trademark") }}',
            'Trademark Objection': '{{ route("trademark-objection") }}',
            'Copyright Registration': '{{ route("copyright") }}',
            'Import Export Code (IEC)': '{{ route("iec") }}',
            'On Shop Liquor License': '{{ route("liquor") }}',
            'Clinical Establishment': '{{ route("clinical") }}',
            'Drug License': '{{ route("drag") }}',
            'Start Up Registration': '{{ route("startup") }}',
            'Business Commencement': '{{ route("business-commencement") }}',
            'Auditor Recruitment': '{{ route("auditor-recruitment") }}',
            'Annual Compliance & Filling': '{{ route("annual-compliance") }}',
            'Personal Tax Filling': '{{ route("p-tax-filling") }}',
            'Business Tax Filling': '{{ route("business-tax-filling") }}',
            'Compliance Audits': '{{ route("compliance-audit") }}',
            'GST Return Filling': '{{ route("gst-return-filling") }}',
            'GST Annual Filling': '{{ route("gst-annual-filling") }}',
            'TDS Filling': '{{ route("tds-filling") }}',
            'PF Filling': '{{ route("pf-filling") }}',
            'Professional Tax': '{{ route("professional-tax") }}',
            'GST Invoicing': '{{ route("gst-invoicing") }}',
            'E Way Bill': '{{ route("eway-bill") }}',
            'Form-16': '{{ route("form-16") }}',
            'Statutory Audit': '{{ route("statutory-audit") }}',
            'Internal Audit': '{{ route("internal-audit") }}',
            'External Audit': '{{ route("external-audit") }}',
            'IT & ITES Permission - Webel': '{{ route("webel") }}',
            'Property Tax Assessment': '{{ route("property-tax-assessment") }}',
            'Property Registration & Deed': '{{ route("property-registration") }}',
            'GST Notice & Clarification': '{{ route("gst-notice") }}',
            'Income Tax Notice & Clarification': '{{ route("income-tax-notice") }}',
            'Strike Off Company': '{{ route("strike-off") }}',
            'Company Helth Checkup': '{{ route("company-helth-checkup") }}',
            'Management Consulting': '{{ route("management-consulting") }}',
            'Accountant Outsourcing': '{{ route("account-outsourcing") }}',
            'Details Project Report(DPR)': '{{ route("details-project-report") }}',
            'Non-Disclose Agreement(NDA)': '{{ route("nda") }}',
            'Service Level Agreement': '{{ route("service-level-agreement") }}',
            'Business Contracts': '{{ route("business-contract") }}',
            'Power Of Attorney': '{{ route("power-of-attorney") }}',
            'Hindu Undivided Family Deed': '{{ route("hindu") }}',
            'Virtual CFO Services': '{{ route("virtual-cfo-service") }}',
            'HR Policies & Procedures': '{{ route("hr") }}',
            'Payroll Management': '{{ route("payroll-management") }}',
            'Tech Support': '{{ route("360-tech") }}',
            'Accounting Software': '{{ route("e-cashbook") }}',
            'Legal Notice': '{{ route("legal-notice") }}',
            'Annual Compliances & Taxation': '{{route("annual")}}',
            'Company Internal & External Audits': '{{ route("iea") }}',
            'Property Registration & Deed': '{{route("pd")}}',
            'Property Tax Assessment & Mutation': '{{route("ptaxm")}}'
        };

        Object.entries(menuItems).forEach(([menuItem, route]) => {
            if (menuItem.toLowerCase().includes(query.toLowerCase())) {
                const menuItemElement = document.createElement('a');
                menuItemElement.classList.add('dropdown-item');
                menuItemElement.textContent = menuItem;
                menuItemElement.setAttribute('href', route);
                searchResults.appendChild(menuItemElement);
            }
        });

        if (searchResults.children.length > 0) {
            searchResults.style.display = 'block';
        } else {
            searchResults.style.display = 'none';
        }
    }

    document.getElementById('searchInput').addEventListener('input', function(e) {
        const query = e.target.value.trim();
        if (query.length > 0) {
            searchMenuItems(query);
        } else {
            document.getElementById('searchResults').style.display = 'none';
        }
    });

    document.getElementById('searchForm').addEventListener('submit', function(e) {
        e.preventDefault();
    });

    document.getElementById('searchResults').addEventListener('click', function(e) {
        if (e.target.tagName === 'A') {
            // Prevent default behavior of anchor tag
            e.preventDefault();
            // Get the href attribute of the clicked item
            const href = e.target.getAttribute('href');
            // Navigate to the corresponding page
            window.location.href = href;
        }
    });
</script>

@endsection