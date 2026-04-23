@extends('layouts.app')

@section('title', 'Niti Ayog (Darpan) Registration - 360 Business and Services')
@section('meta_description', 'Facilitate your Niti Ayog (Darpan) registration process in Kolkata with comprehensive support from 360 Business and Services. Our expert team specializes in guiding organizations through the intricacies of Niti Ayog Darpan registration, ensuring seamless adherence to regulatory requirements. Whether you are a non-profit organization or an NGO seeking to register with Niti Ayog Darpan portal for transparency and accountability, we provide reliable assistance at every stage of the process. From documentation to filing and compliance, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Niti Ayog Darpan registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to enhance your organization visibility and credibility.')
@section('long_keywords', 'Niti Ayog Darpan registration process in Kolkata, Best Darpan registration services in Kolkata, Requirements for Niti Ayog Darpan registration in Kolkata, Steps to register with Darpan in Kolkata, Professional assistance for Darpan registration in Kolkata, Benefits of Niti Ayog Darpan registration in Kolkata, Legal aspects of Darpan registration in Kolkata, Kolkata Darpan consultant')
@section('short_keywords', 'Niti Ayog Darpan registration Kolkata, Darpan portal registration services, Niti Ayog NGO compliance support, Darpan consultant Kolkata, Darpan assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate your Niti Ayog (Darpan) registration process in Kolkata with comprehensive support from 360 Business and Services. Our expert team specializes in guiding organizations through the intricacies of Niti Ayog Darpan registration, ensuring seamless adherence to regulatory requirements. Whether you are a non-profit organization or an NGO seeking to register with Niti Ayog Darpan portal for transparency and accountability, we provide reliable assistance at every stage of the process. From documentation to filing and compliance, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Niti Ayog Darpan registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to enhance your organization visibility and credibility.')


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
                                <h2 class="title">Niti Ayog (Darpan) Registration</h2>
                                <p>Unlock access to government grants and build institutional credibility with NITI Aayog (Darpan) registration.</p>
                                <p>The NGO Darpan Portal, operated by NITI Aayog (National Institution for Transforming India), is an official platform that connects non-profit organizations with central and state government ministries for funding, project partnerships, and policy contributions. NITI Aayog Registration is mandatory for NGOs and Trusts seeking to apply for government grants, participate in development programs, or be recognized as credible implementation partners.</p>
                                <p>This registration enhances transparency, visibility, and trust in the non-profit sector and is a vital compliance step for mission-driven organizations.</p>
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
                                                        What is NITI Aayog (Darpan) Registration, and who needs to obtain it?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>NITI Aayog (Darpan) registration is a process through which non-governmental organizations (NGOs) and voluntary organizations (VOs) can register with the NITI Aayog's Darpan portal. This registration is required for NGOs and VOs seeking funding or grants from government agencies or seeking to collaborate with government initiatives.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What is the purpose of NITI Aayog (Darpan) Registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The purpose of NITI Aayog (Darpan) registration is to create a database of NGOs and VOs operating in India to facilitate transparency, accountability, and effective monitoring of their activities. It enables government agencies and donors to verify the credibility and track record of NGOs/Vos before providing funding or support.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the benefits of NITI Aayog (Darpan) Registration for NGOs and VOs?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>NITI Aayog (Darpan) registration provides NGOs and VOs with increased visibility and credibility, enhancing their chances of receiving funding or support from government agencies, corporate donors, and other stakeholders. It also facilitates collaboration and partnership opportunities with government initiatives and programs.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Are there any obligations or compliance requirements associated with NITI Aayog (Darpan) Registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>While there are no specific compliance requirements associated with NITI Aayog (Darpan) registration, NGOs and VOs are expected to adhere to relevant laws, regulations, and reporting requirements applicable to their activities. They may also be required to provide periodic updates and reports to the NITI Aayog through the Darpan portal.</p>
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
                                    <li>Registration certificate of the NGO or entity</li>
                                    <li>PAN card of the NGO</li>
                                    <li>PAN and Aadhaar cards of three members of the NGO's executive committee</li>
                                    <li>Mobile No. and Mail ID of the Executive Committee</li>
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
