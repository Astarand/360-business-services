@extends('layouts.app')

@section('title', 'LLP Registration in Kolkata | Limited Liability Partnership Formation | 360 Business and Services')

@section('meta_description', 'Register your Limited Liability Partnership (LLP) in Kolkata with 360 Business and Services. Expert assistance for LLP formation, documentation, and compliance. Enjoy benefits of limited liability with partnership flexibility. Professional LLP registration services starting from competitive rates with complete support.')

@section('keywords', 'LLP registration Kolkata, limited liability partnership formation, LLP registration process, partnership registration Kolkata, LLP incorporation services, business partnership registration, LLP formation cost, limited liability partnership benefits, professional partnership registration, LLP compliance Kolkata, partnership firm registration')

@section('canonical_url', url('/llp'))

@section('og_title', 'LLP Registration in Kolkata | Limited Liability Partnership Formation | 360 Business and Services')
@section('og_description', 'Professional LLP registration services in Kolkata. Expert assistance for Limited Liability Partnership formation with complete documentation and compliance support.')
@section('og_type', 'service')
@section('og_image', 'https://360bizservice.com/assets/img/services/llp-registration-kolkata-og.jpg')
@section('og_image_alt', 'LLP Registration Services in Kolkata - 360 Business and Services')

@section('twitter_title', 'LLP Registration in Kolkata | 360 Business and Services')
@section('twitter_description', 'Expert LLP registration services in Kolkata. Professional assistance for Limited Liability Partnership formation & compliance.')

@section('breadcrumb_schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
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
            "name": "LLP Registration",
            "item": "{{ url('/llp') }}"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "LLP Registration Services",
    "description": "Professional Limited Liability Partnership registration services in Kolkata with expert assistance for LLP formation, documentation and legal compliance.",
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
        "name": "LLP Registration Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "LLP Name Reservation"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "LLP Agreement Drafting"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "ROC Filing & Registration"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "LLP Compliance Support"
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

                                            <input type="hidden" name="page_name" id="pageNameInput" >
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3 pl-0">
                                            <label class="form-check-label justify-content-start mb-0" for="flexSwitchCheckChecked">Get Easy Update through <img src="{{ asset('assets/img/icons/whatsapp.png') }}"> Whatsapp</label>
                                            <div class="ms-5">
                                                <input class="form-check-input" name="whatsapp_update" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>

                                        <button type="submit" class="submit-btn"  id="registerFormSubmit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-7 order-lg-0 order-0">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title">Limited Liability Partnership (LLP)</h2>
                                <p>Combine flexibility with legal protection — register your LLP with expert support.</p>
                                <p>A Limited Liability Partnership (LLP) is a modern business structure that blends the advantages of a traditional partnership with the benefit of limited liability for its partners. Recognized under the LLP Act, 2008, it is ideal for startups, professionals, and growing SMEs who seek operational flexibility with financial protection.</p>
                                <h6>Price Starting from ₹12,999/-</h6>
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
        <x-Brand/>
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
                                                        What is Limited Liability Partnership (LLP)?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>LLP Was Introduced In India By Way Of The Limited Liability Partnership Act, 2008. The Basic Premise Behind The Introduction Of Limited Liability Partnership (LLP) Is To Provide A Form Of Business Entity That Is Simple To Maintain While Providing Limited Liability To The Owners. Since, Its Introduction In 2010, LLPs Have Been Well Received With Over 1 Lakhs Registrations So Far Until September, 2014.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Features of Limited Liability Partnership
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>Just Require 2 Entrepreneurs.</li>
                                                            <li>More Credibility Than Partnership Firm.</li>
                                                            <li>Limited Liability Is Main Feature.</li>
                                                            <li>Partnership Firm's Next Version In Simply Words.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Disadvantages of Limited Liability Partnership
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>Difficult To Get VC And Angel Funds As Compare To Private Limited.</li>
                                                            <li>Less Features As Compare To Pvt Ltd Company..</li>
                                                            <li> Mixture Disadvantages Of Partnership Firm</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Can an LLP convert to another business structure?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>In some jurisdictions, LLPs may have the option to convert to other business structures, such as a private limited company or partnership. Conversion requirements and procedures vary by jurisdiction and may be subject to approval by regulatory authorities. It is advisable to seek legal advice before undertaking any conversion process.</p>
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
