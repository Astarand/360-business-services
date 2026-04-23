@extends('layouts.app')

@section('title', 'GST Registration Online ₹499 | GST Number Apply India | 7 Days Process')

@section('meta_description', 'Apply GST registration online in India starting ₹499. Get GST number in 7 days. Expert CA assistance, document preparation, online filing. Free consultation. 15,000+ GST registrations completed.')

@section('keywords', 'GST registration online India, GST number apply online, GST registration process, GST registration cost, how to apply GST online, GST registration documents, GST registration benefits, goods and services tax registration, GST application online, GST registration fees, apply for GST number, GST enrollment online')

@section('canonical_url', url('/gst'))

@section('og_title', 'GST Registration in Kolkata | Professional Tax Registration Services | 360 Business and Services')
@section('og_description', 'Professional GST registration services in Kolkata. Expert assistance for Goods and Services Tax registration, compliance, and filing with fast turnaround time.')
@section('og_type', 'service')
@section('og_image', 'https://360bizservice.com/assets/img/services/gst-registration-kolkata-og.jpg')
@section('og_image_alt', 'GST Registration Services in Kolkata - 360 Business and Services')

@section('twitter_title', 'GST Registration in Kolkata | 360 Business and Services')
@section('twitter_description', 'Fast & reliable GST registration services in Kolkata. Expert assistance for tax compliance & GSTIN registration.')

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
                "name": "GST Registration",
                "item": "{{ url('/gst') }}"
            }
        ]
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
                "text": "GST registration costs ₹499 through 360 Business Services. This includes complete documentation support, online filing, expert CA assistance, and follow-up services. The government fees are separate."
            }
        }, {
            "@type": "Question",
            "name": "How long does GST registration take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration typically takes 7-15 working days once all documents are submitted. 360 Business Services ensures fast processing with expert guidance throughout the process."
            }
        }, {
            "@type": "Question",
            "name": "What documents are required for GST registration?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Required documents include: PAN card, Aadhaar card, business address proof, bank account details, business registration certificate, and photographs. Our experts help prepare all documents correctly."
            }
        }, {
            "@type": "Question",
            "name": "Who needs GST registration in India?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration is mandatory for businesses with annual turnover above ₹40 lakhs (₹20 lakhs for special category states), inter-state suppliers, e-commerce operators, and specific business types regardless of turnover."
            }
        }, {
            "@type": "Question",
            "name": "What are the benefits of GST registration?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration provides input tax credit, legal recognition, seamless inter-state trade, business credibility, government scheme eligibility, and compliance with tax laws."
            }
        }]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "GST Registration Service",
        "description": "Professional GST registration service in India with expert CA assistance, complete documentation support, and online filing.",
        "provider": {
            "@type": "Organization",
            "name": "360 Business and Services",
            "url": "https://360bizservice.com",
            "telephone": "+91-9830747981"
        },
        "serviceType": "Tax Registration",
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "offers": {
            "@type": "Offer",
            "price": "499",
            "priceCurrency": "INR",
            "description": "Complete GST registration service including documentation and filing"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "GST Registration Services",
            "itemListElement": [{
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Document Preparation"
                }
            }, {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Online GST Application Filing"
                }
            }, {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Expert CA Consultation"
                }
            }, {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Post-Registration Support"
                }
            }]
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
                                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
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
                            <h2 class="title">GST Registration</h2>
                            <p>Stay compliant, claim input tax credits, and build credibility with GST registration.</p>
                            <p>Goods and Services Tax (GST) is a unified indirect tax structure in India that has replaced multiple state and central taxes. GST registration is mandatory for businesses whose aggregate turnover exceeds the prescribed threshold (₹40 lakhs for goods, ₹20 lakhs for services — or lower in special category states). It applies to traders, manufacturers, service providers, e-commerce sellers, and freelancers.</p>
                            <p>Registering under GST ensures legal compliance, improves business reputation, and allows you to collect and remit GST, as well as claim Input Tax Credit (ITC) on your purchases.</p>
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
                                                    Who needs to register for GST?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Any business or individual involved in the supply of goods or services in India with an annual turnover above the prescribed threshold limit must register for GST. The threshold limit varies depending on the type of business and its location.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How do I know if my business needs to register for GST?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>You can determine if your business needs to register for GST by checking its annual turnover. If your turnover exceeds the threshold limit specified by the GST authorities, which is ₹40 lakhs for most businesses (₹20 lakhs for businesses in special category states), registration is mandatory. Additionally, certain categories of businesses, regardless of turnover, must register for GST, such as inter-state suppliers, e-commerce operators, and businesses liable to pay reverse charge.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the consequences of not registering for GST?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Ineligibility to collect GST from customers, resulting in higher costs for the business.</li>
                                                        <li>Inability to claim input tax credit on purchases, leading to reduced profitability.</li>
                                                        <li>Penalties and fines imposed by the GST authorities for non-compliance.</li>
                                                        <li>Legal proceedings and restrictions on business activities until GST registration is obtained.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the features of GST registration?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>GST registration provides a legal identity to businesses for collecting tax from customers and claiming input tax credit on purchases. It involves obtaining a unique GSTIN (Goods and Services Tax Identification Number) which is used for all transactions under the GST regime. Registered businesses are required to file regular GST returns providing details of their sales and purchases.</p>
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
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mx-lg-2">
                        <div class="col-lg-6">
                            <h5>For Ltd / Pvt. Ltd Company</h5>
                            <ul class="list-wrap1">
                                <li>Incorporation certificate</li>
                                <li>MOA and AOA</li>
                                <li>PAN Card of the Company</li>
                                <li>Cancelled cheques or bank statements of the company</li>
                                <li>Board Resolution for Authorized Person in GST Management</li>
                                <li>KYC (Pan and Aadhar card), photo, and cancelled cheque of an authorized person</li>
                                <li>KYC of all directors (Pan and Aadhar cards) with photo and cancelled check</li>
                                <li>Notarized NOC from the office address or mutation copy</li>
                                <li>Notarized Office Agreement/Property Deed</li>
                                <li>Latest Rent Invoice</li>
                                <li>Latest property tax receipt</li>
                                <li>Latest office electricity bill</li>
                                <li>The exact nature of business</li>
                                <li>Contact No &amp; email address for all directors and authorized personnel</li>
                                <li>Latest Trade License Copy</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5>For Partnership / LLP</h5>
                            <ul class="list-wrap1">
                                <li>Partnership Deed / LLP Deed copy</li>
                                <li>Pan card of Partnership / LLP</li>
                                <li>Cancelled cheques or bank statements of Partnership / LLP</li>
                                <li>Signed Authorized letter for GST Management</li>
                                <li>KYC (Pan and Aadhar card), photo, and cancelled cheque of an authorized person</li>
                                <li>KYC of all Partners (Pan and Aadhar cards) with photo and cancelled check</li>
                                <li>Notarized Office Agreement/Property Deed</li>
                                <li>Notarized NOC from the office address or mutation copy</li>
                                <li>Latest Rent Invoice</li>
                                <li>Latest property tax receipt</li>
                                <li>Latest office electricity bill</li>
                                <li>The exact nature of business</li>
                                <li>Mobile No &amp; email for all Partners and authorized personnel</li>
                                <li>Latest Trade License Copy</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5>For Sole Proprietorship</h5>
                            <ul class="list-wrap1">
                                <li>Proprietor's Pan card, Aadhar card & Photo</li>
                                <li>Cancelled cheques or bank statement of the company / Individual</li>
                                <li>Notarized Office Agreement / Property Deed</li>
                                <li>Notarized NOC from the office address or mutation copy</li>
                                <li>Latest Rent Invoice</li>
                                <li>Latest property tax receipt</li>
                                <li>Latest office electricity bill</li>
                                <li>The exact nature of business</li>
                                <li>Mobile No & email for all directors and authorized personnel</li>
                                <li>Latest Trade License Copy</li>
                                <li>Mobile No &amp; Email Address of Proprietor &amp; Authorized Person</li>
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