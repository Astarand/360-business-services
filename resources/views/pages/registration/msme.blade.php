@extends('layouts.app')

@section('title', 'MSME Registration Online ₹1999 | Udyam Registration Certificate India')

@section('meta_description', 'Apply MSME Udyam registration online in India starting ₹1999. Get MSME certificate in 10 days. Government subsidies, loan benefits. Expert assistance. 8,000+ MSME registrations completed.')

@section('keywords', 'MSME registration online India, Udyam registration online, MSME certificate apply, small business registration India, MSME registration process, MSME registration benefits, Udyam registration portal, MSME registration cost, micro small medium enterprise registration, MSME loan benefits, MSME registration documents')

@section('canonical_url', url('/msme'))

@section('og_title', 'MSME Registration in Kolkata | Udyam Registration Services | 360 Business and Services')
@section('og_description', 'Professional MSME/Udyam registration services in Kolkata. Get government benefits, subsidies, and loans for your small business with expert assistance.')
@section('og_type', 'service')
@section('og_image', 'https://360bizservice.com/assets/img/services/msme-registration-kolkata-og.jpg')
@section('og_image_alt', 'MSME Registration Services in Kolkata - 360 Business and Services')

@section('twitter_title', 'MSME Registration in Kolkata | 360 Business and Services')
@section('twitter_description', 'Get MSME/Udyam Registration in Kolkata. Professional assistance for government benefits & business subsidies.')

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
                "name": "Registration Services",
                "item": "{{ url('/services') }}"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "MSME Registration",
                "item": "{{ url('/msme') }}"
            }
        ]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "MSME Registration Services",
        "description": "Professional MSME/Udyam registration services in Kolkata helping businesses unlock government benefits, subsidies, and financial support.",
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
        "serviceType": "Government Registration",
        "areaServed": {
            "@type": "State",
            "name": "West Bengal"
        },
        "category": "Business Registration",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "MSME Registration Services",
            "itemListElement": [{
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Udyam Registration Application"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "MSME Classification Support"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Government Benefits Consultation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Documentation & Compliance"
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
                <div class="col-lg-5 order-lg-1 order-1">
                    <aside class="services-sidebar">
                        <div class="services-widget">
                            <h4 class="sw-title">register your company today</h4>
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
                <div class="col-lg-7  order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">MSME Registration</h2>
                            <p>Empower your business with government benefits and financial support through MSME registration.</p>
                            <p>MSME Registration — also known as Udyam Registration — is a government-recognized process that classifies businesses as Micro, Small, or Medium Enterprises under the MSME Development Act, 2006. It enables entrepreneurs to avail of a wide range of government schemes, including subsidies, tax benefits, collateral-free loans, and priority sector lending.</p>
                            <p>Whether you're a manufacturer, trader, or service provider, registering as an MSME boosts your business credibility and unlocks exclusive support from financial institutions and government agencies.</p>
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

                                                <li class="justify-content-lg-center"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
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
                                                    What is MSME registration and who is eligible to register under MSME?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>MSME registration is a government initiative that provides recognition to Micro, Small, and Medium Enterprises (MSMEs). Any business engaged in manufacturing or service provision with investment and turnover below the prescribed limits is eligible for MSME registration. The eligibility criteria vary based on the nature of the enterprise (micro, small, or medium).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the features of MSME registration?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>MSME registration provides various benefits to small and medium-sized enterprises, including access to government schemes, subsidies, and incentives. It also facilitates easier access to credit facilities from banks and financial institutions at lower interest rates. Additionally, MSME registration enables participation in government tenders and procurement processes, fostering business growth opportunities.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the advantages of MSME registration?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>MSME registration offers several advantages, such as priority sector lending by banks, exemption from certain direct taxes, and credit for minimum alternate tax (MAT). It also enhances the competitiveness of MSMEs by providing preferential treatment in government policies and procurement processes. Moreover, MSME registration promotes formalization of businesses, leading to better access to markets and technology.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the disadvantages of MSME registration?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>While MSME registration provides various benefits, there are some challenges associated with it. One potential disadvantage is the requirement for compliance with certain regulations and reporting obligations, which may increase administrative burden for small enterprises. Additionally, MSMEs may face stiff competition from larger players in the market, which could pose challenges to their growth and sustainability.</p>
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
        <div class="modal-dialog modal-dialog-centered modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mx-lg-2">
                        <div class="col-lg-12">
                            <ul class="list-wrap1">
                                <li>Aadhar Card</li>
                                <li>Pan Card</li>
                                <li>Trade License / Name of Enterprise</li>
                                <li>Bank Statement / Cancelled Cheque</li>
                                <li>Nature of Business</li>
                                <li>Complete Office Address</li>
                                <li>Police Station &amp; Post Office Name</li>
                                <li>Date of Incorporation / Registration</li>
                                <li>Contact Person Name, Mobile No &amp; email</li>
                                <li>Mobile No should be attached with Aadhar card (Mandate)</li>
                                <li>Business Turnover</li>
                                <li>GST Registration ( If available then GST No ) </li>
                                <li>Last Income Tax Return Copy </li>
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