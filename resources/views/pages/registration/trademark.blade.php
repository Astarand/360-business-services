@extends('layouts.app')

@section('title', 'Trademark Registration - 360 Business and Services')
@section('meta_description', 'Streamline your trademark registration process in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding individuals and businesses through the intricacies of trademark registration, ensuring seamless adherence to legal requirements. Whether you are trademarking a brand name, logo, or slogan, we provide reliable assistance at every stage of the process. From conducting trademark searches to filing applications and responding to office actions, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating trademark registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure protection for your intellectual property assets.')
@section('long_keywords', 'Trademark registration process in Kolkata, How to register a trademark in Kolkata, Best trademark registration services in Kolkata, Requirements for trademark registration in Kolkata, Steps to obtain trademark registration in Kolkata, Trademark registration cost in Kolkata, Professional assistance for trademark registration in Kolkata, Benefits of trademark registration in Kolkata, Legal aspects of trademark registration in Kolkata, Kolkata trademark consultant')
@section('short_keywords', 'Trademark registration Kolkata, Trademark application services, Trademark compliance support, Trademark consultants Kolkata, Trademark assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Streamline your trademark registration process in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding individuals and businesses through the intricacies of trademark registration, ensuring seamless adherence to legal requirements. Whether you are trademarking a brand name, logo, or slogan, we provide reliable assistance at every stage of the process. From conducting trademark searches to filing applications and responding to office actions, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating trademark registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure protection for your intellectual property assets.')


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
                            <h2 class="title">Trademark Registration</h2>
                            <p>Protect your brand name, logo, and identity with Trademark Registration.</p>
                            <p>Trademark Registration is a vital legal step for any business, startup, or entrepreneur looking to secure their brand identity, name, logo, tagline, or product packaging. It grants exclusive ownership rights over the mark and prevents unauthorized use by competitors. Registered trademarks are recognized under the Trade Marks Act, 1999, offering nationwide protection and legal remedies against infringement.</p>
                            <p>Whether you're launching a new brand, growing a product line, or entering e-commerce, a registered trademark builds trust, visibility, and legal authority in the market.</p>
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

                                                <li class="justify-content-lg-center"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
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
                                                    What is trademark registration?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Trademark registration is the process of legally protecting a word, phrase, symbol, design, or combination thereof that identifies and distinguishes the goods or services of one party from those of others. It grants exclusive rights to use the trademark in connection with specific goods or services, providing legal recourse against unauthorized use or infringement by competitors.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What can be registered as a trademark?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>A wide range of elements can be registered as trademarks, including words, names, slogans, logos, symbols, designs, sounds, smells, and even colors or combinations thereof, provided they meet the criteria of distinctiveness, non-descriptiveness, and non-functionality.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How long does trademark registration last?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Trademark registration is valid for a period of 10 years from the date of registration, renewable indefinitely for successive 10-year terms upon payment of renewal fees. It is important to timely renew the registration to maintain the exclusive rights to the trademark.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the benefits of trademark registration?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Trademark registration offers several benefits, including exclusive rights to use the trademark in connection with specific goods or services, legal protection against infringement or unauthorized use by competitors, enhanced brand recognition and reputation, and the ability to license or sell the trademark for commercial gain.</p>
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
                    <div class="row mx-lg-2">
                        <div class="col-lg-12">
                            <ul class="list-wrap1">
                                <li>Form TM-48 ( Form of Authorization ) </li>
                                <li>Logo with Tagline</li>
                                <li>List of Services</li>
                                <li>Incorporation Certificate</li>
                                <li>Trade License</li>
                                <li>Udyami Registration</li>
                                <li>Name of Signatory &amp; Designation</li>
                                <li>KYC (Pan &amp; Aadhar card) of Signatory</li>
                                <li>Mobile no &amp; Email Id of Signatory</li>
                                <li>List of Services</li>
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