@extends('layouts.app')

@section('title', 'Trademark Objection - 360 Business and Services')
@section('meta_description', 'Handle trademark objections efficiently with the comprehensive support of 360 Business and Services in Kolkata. Our expert team specializes in navigating trademark objection processes, ensuring seamless resolution while protecting your intellectual property rights. Whether you are facing objections due to similarity with existing trademarks or other reasons, we provide reliable assistance at every stage of the objection proceedings. From analyzing the grounds of objection to preparing and filing responses, trust us to handle the legal complexities while you focus on your business priorities. With our expertise, overcoming trademark objections in Kolkata becomes a streamlined process. Partner with us for efficient solutions and ensure the continued protection of your trademark assets.')
@section('long_keywords', 'Handling trademark objections in Kolkata, How to respond to trademark objections, Trademark objection resolution services, Professional assistance for trademark objections, Overcoming trademark objections in Kolkata, Legal aspects of trademark objection responses, Kolkata trademark objection consultant')
@section('short_keywords', 'Trademark objection, Objection response services, Trademark objection assistance, Kolkata trademark consultant')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Handle trademark objections efficiently with the comprehensive support of 360 Business and Services in Kolkata. Our expert team specializes in navigating trademark objection processes, ensuring seamless resolution while protecting your intellectual property rights. Whether you are facing objections due to similarity with existing trademarks or other reasons, we provide reliable assistance at every stage of the objection proceedings. From analyzing the grounds of objection to preparing and filing responses, trust us to handle the legal complexities while you focus on your business priorities. With our expertise, overcoming trademark objections in Kolkata becomes a streamlined process. Partner with us for efficient solutions and ensure the continued protection of your trademark assets.')


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
                                <h2 class="title">Trademark Objection</h2>
                                <p>Don’t let objections stop your brand — respond professionally and secure your trademark.</p>
                                <p>A Trademark Objection is an initial hurdle in the trademark registration process where the Trademark Examiner raises concerns regarding your application after reviewing it. This does not mean your application is rejected, but it requires a timely and well-drafted reply to proceed further.</p>
                                <p>Objections are issued under Section 9 (lack of distinctiveness) or Section 11 (similarity with existing marks) of the Trade Marks Act, 1999. Prompt and strategic handling of the objection can help safeguard your brand rights and resume the registration process.</p>
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
                                                        What is a trademark objection, and why does it occur?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A trademark objection is a formal objection raised by the trademark office during the examination process of a trademark application. It occurs when the trademark examiner identifies issues with the application, such as similarity to existing trademarks, lack of distinctiveness, or failure to meet legal requirements.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the common reasons for trademark objections?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Common reasons for trademark objections include similarity to existing trademarks in the same or related classes, lack of distinctiveness or descriptive nature of the trademark, violation of public morality or deceptive elements in the trademark, and failure to comply with legal formalities or documentation requirements.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What happens if the trademark objection is not addressed?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>If the trademark objection is not adequately addressed within the specified timeframe or if the trademark examiner is not satisfied with the response provided by the applicant, the trademark application may be abandoned or refused. The applicant may lose the opportunity to register the trademark and may need to reapply or pursue other legal avenues to protect their trademark rights.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Can trademark objections be challenged?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>es, trademark objections can be challenged through various legal avenues, such as filing a formal appeal or review petition with the trademark office, seeking mediation or negotiation with the objecting party, or initiating legal proceedings before the Intellectual Property Appellate Board (IPAB) or the courts. It is essential to seek legal advice and assistance to navigate the process effectively.</p>
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
