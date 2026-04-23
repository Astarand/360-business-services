@extends('layouts.app')

@section('title', 'Contact Us - 360 Business and Services | Get Expert Business Solutions in Kolkata | GST, Tax and
Company Registration')

@section('meta_description', 'Contact 360 Business and Services for expert business solutions in Kolkata. Get in touch
for GST registration, income tax consultation, company formation, accounting services, and business compliance support.
Professional CA services with personalized attention.')

@section('keywords', 'contact 360 business services, business consultation Kolkata, GST registration contact, income tax
consultant contact, company registration help, accounting services inquiry, CA services contact, business compliance
support, professional business advice Kolkata, startup consultation contact')

@section('canonical_url', url('/contact'))

@section('og_title', 'Contact Us - 360 Business and Services | Expert Business Solutions in Kolkata')
@section('og_description', 'Get in touch with 360 Business and Services for expert business solutions in Kolkata.
Professional consultation for GST, taxation, company registration, and business compliance.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/logo/og-logo.jpg')
@section('og_image_alt', '360 Business and Services Contact - Get Expert Business Solutions in Kolkata')

@section('twitter_title', 'Contact 360 Business and Services | Expert Business Solutions in Kolkata')
@section('twitter_description', 'Contact us for professional business solutions: GST registration, tax consultation,
company formation & compliance support in Kolkata.')

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
                "name": "Contact Us",
                "item": "{{ url('/contact') }}"
            }
        ]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contact 360 Business and Services",
        "description": "Get in touch with 360 Business and Services for expert business solutions including GST registration, tax consultation, and company formation services.",
        "url": "{{ url('/contact') }}",
        "mainEntity": {
            "@type": "Organization",
            "name": "360 Business and Services",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-XXXXXXXXXX",
                "contactType": "customer service",
                "email": "leads@360bizservice.com",
                "availableLanguage": ["English", "Hindi", "Bengali"]
            }
        }
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
                        <h2 class="title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

    <!-- contact-area -->
    <section class="inner-contact-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-contact-img">
                        <img src="{{ asset('assets/img/images/contact_img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-contact-info">
                        <h2 class="title">Contact Details</h2>
                        <div class="contact-info-item">
                            <h5 class="title-two">Company Location</h5>
                            <ul class="list-wrap">
                                <li>11th Floor,TowerNo-1, PS Srijan Corporate Park,<br> GP Block, Sector-V,Kolkata - 700091 </li>
                            </ul>
                        </div>
                        <div class="contact-info-item">
                            <h5 class="title-two">Contact Number</h5>
                            <ul class="list-wrap">
                                <li>+91-8334027857</li>
                                <li>+91-8444089530</li>
                            </ul>
                        </div>
                        <div class="contact-info-item">
                            <h5 class="title-two">E-mail Address</h5>
                            <ul class="list-wrap">
                                <li>contact@360bizservice.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-area -->
    <section class="contact-area contact-bg" data-background="assets/img/bg/contact_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">GET IN TOUCH</span>
                            <h2 class="title tg-element-title">We Are Connected To Help Your Business!</h2>
                        </div>
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind?
                            Oftentimes.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form id="contactFormm" method="POST" action="{{ url('contactForm_submit') }}">

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
                                        <input type="hidden" name="type" value="contact">
                                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="number" name="phone" placeholder="Phone *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="subject" placeholder="Subject *" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea name="comments" placeholder="Comments *" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button id="contactSubmitt" type="submit">Submit Now</button>
                        </form>
                        <br>
                        @if (session('success'))
                        <div class="alert alert-success" id="successMessage">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger" id="errorMessage">
                            {{ session('error') }}
                        </div>
                        @endif
                        <script>
                            // Auto-hide messages after 3 seconds
                            document.addEventListener('DOMContentLoaded', function() {
                                // Hide success message
                                const successMessage = document.getElementById('successMessage');
                                if (successMessage) {
                                    setTimeout(function() {
                                        successMessage.style.transition = 'opacity 0.5s ease-out';
                                        successMessage.style.opacity = '0';
                                        setTimeout(function() {
                                            successMessage.style.display = 'none';
                                        }, 500);
                                    }, 3000);
                                }

                                // Hide error message
                                const errorMessage = document.getElementById('errorMessage');
                                if (errorMessage) {
                                    setTimeout(function() {
                                        errorMessage.style.transition = 'opacity 0.5s ease-out';
                                        errorMessage.style.opacity = '0';
                                        setTimeout(function() {
                                            errorMessage.style.display = 'none';
                                        }, 500);
                                    }, 3000);
                                }
                            });

                            // reCAPTCHA v3 integration
                            let formSubmitted = false;
                            
                            document.getElementById('contactFormm').addEventListener('submit', function(e) {
                                if (formSubmitted) {
                                    return true; // Allow normal submission
                                }
                                
                                e.preventDefault();
                                
                                // Show loading state
                                const submitBtn = document.getElementById('contactSubmitt');
                                const originalText = submitBtn.innerHTML;
                                submitBtn.innerHTML = 'Verifying...';
                                submitBtn.disabled = true;
                                
                                // Execute reCAPTCHA
                                grecaptcha.ready(function() {
                                    grecaptcha.execute('6LczXeQrAAAAAA6_iOZ6PXtD86gQrFT_WFujtvCy', {action: 'contact_form'}).then(function(token) {
                                        // Add token to form
                                        document.getElementById('recaptcha_token').value = token;
                                        
                                        // Mark as submitted and submit the form
                                        formSubmitted = true;
                                        submitBtn.innerHTML = 'Submitting...';
                                        document.getElementById('contactFormm').submit();
                                    }).catch(function(error) {
                                        // Reset button on error
                                        submitBtn.innerHTML = originalText;
                                        submitBtn.disabled = false;
                                        alert('reCAPTCHA verification failed. Please try again.');
                                    });
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
        <div class="contact-shape">
            <img src="{{ asset('assets/img/images/contact_shape.png') }}" alt="">
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-map -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.276741181514!2d88.43154687600611!3d22.56875063311016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275b1e2cf60cf%3A0xf4bb43fdcf0ecf81!2s360%20Business%20%26%20Services!5e0!3m2!1sen!2sin!4v1703518853576!5m2!1sen!2sin"
            allowfullscreen loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->


</main>
<!-- main-area-end -->



@endsection