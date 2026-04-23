@extends('layouts.app')

@section('title', 'Ayush Registration - 360 Business and Services')
@section('meta_description', 'Facilitate your Ayush (Ayurveda, Yoga & Naturopathy, Unani, Siddha, and Homoeopathy) registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding practitioners and businesses through the intricacies of Ayush registration, ensuring seamless adherence to regulatory requirements. Whether you are a practitioner or an organization offering Ayush products or services, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Ayush registration obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with Ayush regulations to promote holistic health and wellness.')
@section('long_keywords', 'Ayush registration Kolkata, Ayush renewal services, Ayush compliance support, Ayush consultants Kolkata, Ayush assistance')
@section('short_keywords', 'Ayush registration process in Kolkata, How to renew Ayush registration in Kolkata, Best Ayush registration services in Kolkata, Requirements for Ayush renewal in Kolkata, Steps to obtain Ayush registration in Kolkata, Ayush renewal cost in Kolkata, Professional assistance for Ayush registration in Kolkata, Benefits of Ayush registration in Kolkata, Legal aspects of Ayush renewal in Kolkata, Kolkata Ayush consultant')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate your Ayush (Ayurveda, Yoga & Naturopathy, Unani, Siddha, and Homoeopathy) registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding practitioners and businesses through the intricacies of Ayush registration, ensuring seamless adherence to regulatory requirements. Whether you are a practitioner or an organization offering Ayush products or services, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Ayush registration obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with Ayush regulations to promote holistic health and wellness.')


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
                                <h2 class="title">Ayush Registration</h2>
                                <p>AYUSH Registration is a mandatory regulatory process for individuals, manufacturers, and clinics involved in the production or practice of Ayurveda, Yoga, Naturopathy, Unani, Siddha, and Homeopathy. Issued by the Ministry of AYUSH (Govt. of India), this license ensures that traditional and alternative medicine practices are conducted in accordance with safety, quality, and regulatory standards.</p>
                                <p>Whether you operate a herbal medicine manufacturing unit, run a wellness center, or practice as a qualified traditional medicine doctor, AYUSH certification promotes credibility, public trust, and legal compliance.</p>
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
                                                        What is Ayush registration, and who needs to register under Ayush?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Ayush registration pertains to the registration of products and practitioners under the traditional systems of medicine governed by the Ministry of Ayurveda, Yoga & Naturopathy, Unani, Siddha, and Homeopathy (AYUSH) in India. This registration is essential for manufacturers, distributors, and practitioners involved in Ayurveda, Yoga & Naturopathy, Unani, Siddha, and Homeopathy systems of medicine.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of Ayush registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Ayush registration involves the approval and documentation of products, therapies, and practitioners adhering to the standards and guidelines set by the Ministry of AYUSH. It ensures the quality, safety, and efficacy of Ayurvedic, Yoga & Naturopathy, Unani, Siddha, and Homeopathic products and treatments. Registration requirements may vary depending on the specific category of products or practices.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of Ayush registration for practitioners and manufacturers?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Ayush registration provides legal recognition and authorization for practitioners to offer traditional medicine treatments and services. It also ensures that manufacturers comply with quality standards, which enhances consumer trust and confidence in Ayurvedic, Yoga & Naturopathy, Unani, Siddha, and Homeopathic products. Additionally, Ayush registration opens doors to government schemes, subsidies, and promotional initiatives aimed at promoting traditional systems of medicine.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the disadvantages of not having Ayush registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without Ayush registration can lead to legal repercussions, including fines, penalties, and closure of establishments for non-compliance with regulatory requirements. Unregistered products or practitioners may face challenges in market acceptance and credibility, as consumers prefer products and services that have undergone regulatory scrutiny and approval. Moreover, non-compliance with Ayush regulations can undermine public health and safety by exposing consumers to risks associated with unregulated traditional medicine practices and products.</p>
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
                            <div class="col-lg-12">
                                <ul class="list-wrap1">
                                    <li>The personal details of the applicant</li>
                                    <li>A copy of the manufacturing license is required.</li>
                                    <li>The list of products for which the applicant wants to get COOP, along with the composition of all drugs.</li>
                                    <li>The process for making the products or drugs, along with the formula of the process.</li>
                                    <li>The analysis of the products along with the specification of the final product.</li>
                                    <li>The list of the products that already got COOP approval</li>
                                    <li>Record of stability study evaluation for every batch along with other details of the product, such as date of manufacturing and expiry of the drug, name of the said product, etc.</li>
                                    <li>Report of process validity of three batches if the application is made for the herbal product.</li>
                                    <li>The detailed list of the working staff, along with their qualifications, experience, and approval status,</li>
                                    <li>List of the instruments and machines that are used or will be used.</li>
                                    <li>The layout of the manufacturing unit.</li>
                                    <li>Diagram of the water system.</li>
                                    <li>Diagram of the HVAC system.</li>
                                    <li>Events of export from last year where the re-validation of the COOP is required.</li>
                                    <li>A detailed summary sheet of the products.</li>
                                    <li>Original labels of the products that are required to be applied for WHO-COOP.</li>
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
