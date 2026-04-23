@extends('layouts.app')

@section('title', 'Private Limited Company Registration Online ₹5999 | Pvt Ltd Company Formation India')
@section('meta_description', 'Register Private Limited Company online in India starting ₹5999. Complete Pvt Ltd formation in 15 days. Expert CA assistance, document preparation, ROC filing. Free consultation. 10,000+ companies registered.')
@section('keywords', 'private limited company registration online, pvt ltd company formation India, company registration online India, private company registration cost, pvt ltd registration process, company incorporation online, private limited company benefits, company formation services India, ROC filing online, startup company registration, business registration India, company registration consultants')
@section('canonical_url', url('/pvt'))

@section('og_title', 'Private Limited Company Registration in Kolkata | Pvt Ltd Formation | 360 Business and Services')
@section('og_description', 'Professional Pvt Ltd company registration services in Kolkata. Expert assistance for company formation, documentation & compliance. Limited liability protection starting from ₹10,999.')
@section('og_type', 'service')
@section('og_image', 'https://360bizservice.com/assets/img/services/private-limited-company-registration-og.jpg')
@section('og_image_alt', 'Private Limited Company Registration Services in Kolkata - 360 Business and Services')

@section('twitter_title', 'Pvt Ltd Company Registration in Kolkata | 360 Business and Services')
@section('twitter_description', 'Expert Private Limited Company registration in Kolkata. Professional assistance for company formation & compliance. Limited liability protection from ₹10,999.')

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
                "name": "Private Limited Company Registration",
                "item": "{{ url('/pvt') }}"
            }
        ]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Private Limited Company Registration",
        "description": "Professional Private Limited Company registration services in Kolkata with expert assistance for company formation, documentation and legal compliance.",
        "provider": {
            "@type": "Organization",
            "name": "360 Business and Services",
            "url": "https://360bizservice.com"
        },
        "serviceType": "Company Registration",
        "areaServed": {
            "@type": "State",
            "name": "West Bengal"
        },
        "offers": {
            "@type": "Offer",
            "price": "10999",
            "priceCurrency": "INR",
            "description": "Starting price for Private Limited Company registration including basic documentation and filing"
        },
        "category": "Business Formation",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Private Limited Company Registration Services",
            "itemListElement": [{
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Company Name Reservation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "DIN & DSC for Directors"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "MOA & AOA Drafting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "ROC Filing & Certificate of Incorporation"
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
                <div class="col-lg-7 order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">Private Limited Company</h2>
                            <p>Incorporate your business with credibility, growth potential, and limited liability.</p>
                            <p>A Private Limited Company (Pvt Ltd) is one of the most trusted and widely adopted business structures in India. Registered under the Companies Act, 2013, it offers a perfect blend of limited liability, separate legal existence, and corporate credibility. It is the preferred structure for startups, SMEs, and high-growth businesses aiming to attract investors and scale rapidly.</p>
                            <h6>Price Starting from ₹16,499/-</h6>
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

                                                <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                                <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Online & Offline Services Available</li>
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
                                                    What is Private Limited Company?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>One Of The Most Popular Types Of Business Entities Is A Private Limited Company. A Company Registration In India Requires A Minimum Of Two Members And Directors. The Directors Of A Private Limited Company Have Limited Liability To Creditors. In A Case Of Default, Banks/Creditors Can Only Sell Company's Assets But Not Personal Assets Of Directors.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Features of Pvt.Ltd Company
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Require 2 Person As Entrepreneur I.E Directors.</li>
                                                        <li>Easily Setup And Recommend To Growing Startups.</li>
                                                        <li>Limited Liability For Members.</li>
                                                        <li>More Credibility As Compare To Others.</li>
                                                        <li>Easily Raise Funds From Investors.</li>
                                                        <li>ESOP Option Are Available To Motivated Employees.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Advantage of Pvt.Ltd Company
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Preferred By Banks, VCs & Investors</li>
                                                        <li>Easy To Allocate And Redistribute Shares To Investors Or Other Directors</li>
                                                        <li>Separate Legal Entity Which Limits Your Liability</li>
                                                        <li>Offers The Flexibility Of A Partnership Firm And The Advantages Of A Public Ltd Company</li>
                                                        <li>Easy To Register, Manage & Run</li>
                                                        <li>Easy To Dissolve Or Wind-Up.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Disadvantages of Pvt.Ltd Company
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Statutory Compliance Are High.</li>
                                                        <li>High Setup Cost As Compare To Others.</li>
                                                        <li> Involvement Of Other Directors In Decision Makings.</li>
                                                        <li>Restricted To Transfer Of The Shares To Others Without Agreements.</li>
                                                        <li> Not Allow Invite To Public For Deposits.</li>
                                                    </ul>
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 my-auto">
                            <ul class="list-wrap1">
                                <h6>Documents for Directors:</h6>
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
                                <li><strong>** Min. Two Directors ( At least one Director must be Indian Resident) </strong></li>
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