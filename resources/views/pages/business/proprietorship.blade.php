@extends('layouts.app')

@section('title', 'Sole Proprietorship Registration in Kolkata | Start Your Business | 360 Business and Services')

@section('meta_description', 'Start your sole proprietorship business in Kolkata with 360 Business and Services. Expert assistance for sole trader registration, professional tax enrollment, and business setup. Simple, affordable, and fast registration process. Get full control of your business with minimal compliance. Starting from ₹1,500.')

@section('keywords', 'sole proprietorship registration Kolkata, sole trader registration, individual business registration, proprietorship business setup, professional tax enrollment, business registration Kolkata, sole proprietor registration, single owner business, freelancer registration, individual entrepreneur registration, small business registration')

@section('canonical_url', url('/proprietorship'))

@section('og_title', 'Sole Proprietorship Registration in Kolkata | Simple Business Setup | 360 Business and Services')
@section('og_description', 'Start your solo business venture in Kolkata with expert guidance. Professional sole proprietorship registration services with minimal compliance and maximum control.')
@section('og_type', 'service')
@section('og_image', 'https://360bizservice.com/assets/img/services/sole-proprietorship-kolkata-og.jpg')
@section('og_image_alt', 'Sole Proprietorship Registration Services in Kolkata - 360 Business and Services')

@section('twitter_title', 'Sole Proprietorship Registration in Kolkata | 360 Business and Services')
@section('twitter_description', 'Start your sole proprietorship business in Kolkata. Expert registration services with minimal compliance & maximum control.')

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
                "name": "Business Formation",
                "item": "{{ url('/services') }}"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Sole Proprietorship",
                "item": "{{ url('/proprietorship') }}"
            }
        ]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Sole Proprietorship Registration Services",
        "description": "Professional sole proprietorship registration services in Kolkata for individual entrepreneurs and freelancers seeking simple business setup.",
        "provider": {
            "@type": "Organization",
            "name": "360 Business and Services",
            "url": "https://360bizservice.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "11th Floor,TowerNo-1, PS Srijan Corporate Park, GP Block, Sector-V",
                "addressLocality": "Kolkata",
                "addressRegion": "West Bengal",
                "postalCode": "700091",
                "addressCountry": "IN"
            },
            "telephone": "+91-9830747981"
        },
        "serviceType": "Business Registration",
        "areaServed": {
            "@type": "State",
            "name": "West Bengal"
        },
        "category": "Business Formation",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Sole Proprietorship Services",
            "itemListElement": [{
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Professional Tax Enrollment"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Business Name Registration"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Tax Registration Support"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Documentation Assistance"
                    }
                }
            ]
        }
    }
</script>
@endsection



@section('main')

<!-- main-area -->
<main class="fix">

    <!-- services-details-area -->
    <section class="services-details-area pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 order-1 order-lg-1">
                    <aside class="services-sidebar">
                        <div class="services-widget">
                            <h4 class="sw-title">Register your company today</h4>
                            <div class="services-widget-form">
                                <form id='registerForm'>
                                    @csrf
                                    <div class="form-grp">
                                        <input type="email" name="email" required placeholder="E-mail Address">
                                    </div>
                                    <div class="form-grp">
                                        <input type="phone" name="phone" required placeholder="Phone Number">
                                    </div>
                                    <div class="form-grp">
                                        <input type="text" name="city" required placeholder="City">

                                        <input type="hidden" name="page_name" id="pageNameInput">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3 pl-0">
                                        <label class="form-check-label justify-content-start mb-0" for="flexSwitchCheckChecked">Get Easy Update through <img src="{{ asset('assets/img/icons/whatsapp.png') }}"> Whatsapp</label>
                                        <div class="ms-5">
                                            <input class="form-check-input" name="whatsapp_update" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        </div>
                                    </div>

                                    <button type="submit" class="submit-btn" id="registerFormSubmit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-7 order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">Sole Proprietorship</h2>
                            <p>Start your business journey with the simplest and most affordable structure – Sole Proprietorship.</p>
                            <p>A Sole Proprietorship is a popular business structure where a single individual owns, manages, and controls the entire operation. It is ideal for small businesses, freelancers, traders, and individual service providers who want to start quickly with minimal compliance.</p>
                            <h6>Price Starting from ₹1,500/-(P tax Enrollment & Registration only ) [Depend Upon the company turnover]</h6>
                            <div class="sd-inner-wrap sd-inner-wrap-four">
                                <div class="row">
                                    <div class="col-12 pb-10">
                                        <div class="content">
                                            <ul class="list-wrap">
                                                <li>
                                                    <img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">
                                                    Cost-effective efficiency and timeliness&nbsp;
                                                    <div class="tooltip-container">
                                                        T&C*
                                                        <div class="tooltip-content">
                                                            <p class="mb-0"><strong>Terms & Condition*</strong></p>
                                                            <ul style="padding-left: 20px;">
                                                                <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Total payment may vary depending on government fees and the entity of the company.</li>
                                                                <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Downtime on the government portal may cause work delays.</li>
                                                                <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Documents should be appropriate as per the requirements.</li>
                                                                <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Documents must be provided in time to avoid delay.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                                <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Online & Offline Services Available</li>
                                                <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Hand holding post services</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-btn-two d-flex justify-content-start">
                                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#DocModal">Required Documents for apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- services-details-area-end -->

    <!-- brand-area -->
    <x-Brand />
    <!-- brand-area-end -->

    <!-- services-details-area -->
    <section class="services-details-area pt-20 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <div class="company-benefit-wrap">
                                <div class="accordion-wrap-three">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What is a sole proprietorship?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>A sole proprietorship is a business structure where an individual operates and owns the business as a single entity. In this setup, there is no legal distinction between the business and the owner, making the owner personally responsible for all aspects of the business.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How is a sole proprietorship taxed?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>In a sole proprietorship, business income is typically reported on the owner's personal income tax return. The business itself is not taxed separately. The owner is responsible for paying income taxes on the profits generated by the business at their individual tax rate.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the advantages of a sole proprietorship?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Some advantages include simplicity of setup, full control and decision-making by the owner, and direct ownership of profits. Additionally, there are fewer regulatory requirements and formalities compared to other business structures.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the potential risks and liabilities of a sole proprietorship?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>One major drawback is that the owner has unlimited personal liability for the business debts and obligations. This means that personal assets, such as a home or savings, may be at risk to satisfy business-related debts. Additionally, the business is more vulnerable to the owner's personal financial situation.</p>
                                                </div>
                                            </div>
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
    <!-- services-details-area-end -->
    <div class="modal fade" id="DocModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 my-auto">
                            <ul class="list-wrap1">
                                <h6>Documents for Proprietor:</h6>
                                <li>Voter ID / Aadhar card / Passport copy</li>
                                <li>PAN Card</li>
                                <li>Passport Size photo</li>
                                <li>Latest bank statement</li>
                                <li>Valid Mobile No & Mail ID</li>
                                <p><strong>** All the above papers should be self-attested.</strong></p>
                                <li>Property Deed & Mutation copy, if owned.</li>
                                <li>Notarized Rent agreement</li>
                                <li>Notarized Office NOC by the rent owner.</li>
                                <li>Latest Rent Invoice</li>
                                <li>Latest office property tax receipt</li>
                                <li>Latest Office Electricity bill</li>
                                <li>Office Images</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- main-area-end -->



@endsection