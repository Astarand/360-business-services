@extends('layouts.app')

@section('title', 'Drug License - 360 Business and Services')
@section('meta_description', 'Secure your pharmaceutical business in Kolkata with our expert assistance for obtaining a Drug License. At 360 Business and Services, we specialize in guiding businesses through the intricate process of acquiring Drug Licenses, ensuring compliance with pharmaceutical regulations. Whether you are a pharmacy, drug store, or manufacturing unit, our experienced team provides reliable support at every stage, from documentation to approval. With our streamlined solutions, navigating the complexities of Drug License acquisition becomes seamless, allowing you to focus on serving your customers and growing your business. Partner with us for the best Drug License services in Kolkata and ensure the legality and success of your pharmaceutical venture.')
@section('long_keywords', 'Drug License application process in Kolkata, How to get Drug License in Kolkata, Best Drug License services in Kolkata, Requirements for Drug License in Kolkata, Steps to obtain Drug License in Kolkata, Drug License cost in Kolkata, Professional assistance for Drug License in Kolkata, Benefits of Drug License in Kolkata, Legal aspects of Drug License in Kolkata, Kolkata Drug License consultant')
@section('short_keywords', 'Drug License Kolkata, Pharmaceutical License, Drug License Consultants Kolkata, Drug License Assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Secure your pharmaceutical business in Kolkata with our expert assistance for obtaining a Drug License. At 360 Business and Services, we specialize in guiding businesses through the intricate process of acquiring Drug Licenses, ensuring compliance with pharmaceutical regulations. Whether you are a pharmacy, drug store, or manufacturing unit, our experienced team provides reliable support at every stage, from documentation to approval. With our streamlined solutions, navigating the complexities of Drug License acquisition becomes seamless, allowing you to focus on serving your customers and growing your business. Partner with us for the best Drug License services in Kolkata and ensure the legality and success of your pharmaceutical venture.')


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
                                <h2 class="title">Drug License</h2>
                                <p>Legally manufacture, distribute, or sell pharmaceuticals with a government-approved Drug License.</p>
                                <p>A Drug License is a mandatory legal permit issued by the Central Drugs Standard Control Organization (CDSCO) or State Drug Control Department, authorizing individuals or businesses to manufacture, distribute, or sell pharmaceutical and medicinal products in India. Governed by the Drugs and Cosmetics Act, 1940, this license ensures that all activities related to drugs comply with quality, safety, and ethical standards.</p>
                                <p>It is compulsory for pharmacies, drug retailers, wholesalers, chemists, distributors, and manufacturing units to obtain a valid license before starting operations.</p>
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
                                                        What is a Drug License?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Drug License, also known as a pharmaceutical license or a drug selling license, is a legal permit issued by the respective state's drug control authority or the Central Drugs Standard Control Organization (CDSCO) for the sale, distribution, or manufacturing of drugs and pharmaceutical products. It is mandatory for individuals or entities involved in the sale, distribution, or manufacturing of drugs, including pharmacies, wholesalers, retailers, and drug manufacturers.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the types of Drug Licenses available, and how do they differ?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Drug Licenses are categorized into various types based on the nature of the activity and the scale of operation. These include Retail Drug License (for pharmacies and retailers), Wholesale Drug License (for wholesalers), Manufacturing Drug License (for drug manufacturers), and Loan License (for contract manufacturing under a manufacturing licensee).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the responsibilities and obligations of holding a Drug License?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Holders of Drug Licenses are responsible for ensuring compliance with applicable laws, regulations, and quality standards related to the sale, distribution, or manufacturing of drugs. They are required to maintain accurate records of inventory, sales, and transactions, ensure the safety, efficacy, and quality of drugs, and report adverse events or incidents as per regulatory requirements.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the consequences of operating without a valid Drug License?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without a valid Drug License is illegal and may lead to severe consequences, including penalties, fines, suspension or revocation of the license, closure of the establishment, and legal actions by drug authorities. Additionally, unauthorized sale or distribution of drugs poses risks to public health and safety and undermines consumer trust in the healthcare system.</p>
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
                                    <li>Board of resolution signed</li>
                                    <li>Office Rent Agreement / Property Deed</li>
                                    <li>Aadhar Card, Voter card & Pan Card of Applicant</li>
                                    <li>Refrigerator bill of the office address</li>
                                    <li>Aadhar card, voter card, pan card, Qualification certificate (Graduation - 1.5 yr / Secondary - 5yr +) of an experience person</li>
                                    <li>Experience certificate of that Experience person</li>
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
