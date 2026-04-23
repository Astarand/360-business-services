@extends('layouts.app')

@section('title', 'FSSAI Registration - 360 Business and Services')
@section('meta_description', 'Simplify your FSSAI (Food Safety and Standards Authority of India) registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding food businesses through the intricacies of FSSAI compliance, ensuring seamless adherence to regulatory requirements. Whether you are a food manufacturer, distributor, or retailer, we provide reliable assistance at every stage of the process. From initial registration to annual filings and renewal, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating FSSAI obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure smooth compliance with FSSAI regulations.')
@section('long_keywords', 'FSSAI registration process in Kolkata, How to renew FSSAI in Kolkata, Best FSSAI registration services in Kolkata, Requirements for FSSAI renewal in Kolkata, Steps to obtain FSSAI registration in Kolkata, FSSAI renewal cost in Kolkata, Professional assistance for FSSAI registration in Kolkata, Benefits of FSSAI registration in Kolkata, Legal aspects of FSSAI renewal in Kolkata, Kolkata FSSAI consultant')
@section('short_keywords', 'FSSAI registration Kolkata, FSSAI renewal services, FSSAI compliance support, FSSAI consultants Kolkata, FSSAI assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Simplify your FSSAI (Food Safety and Standards Authority of India) registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding food businesses through the intricacies of FSSAI compliance, ensuring seamless adherence to regulatory requirements. Whether you are a food manufacturer, distributor, or retailer, we provide reliable assistance at every stage of the process. From initial registration to annual filings and renewal, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating FSSAI obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure smooth compliance with FSSAI regulations.')


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
                                            <input type="number" name="phone" required placeholder="Phone Number">
                                        </div>
                                        <div class="form-grp">
                                            <input type="text" name="city" required placeholder="City">

                                            <input type="hidden" name="page_name" id="pageNameInput" >
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3 pl-0">
                                            <label class="form-check-label justify-content-start mb-0" for="flexSwitchCheckChecked">Get Easy Update through <img src="{{ asset('assets/img/icons/whatsapp.png') }}" alt="whatsapp">  Whatsapp</label>
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
                                <h2 class="title">FSSAI Registration</h2>
                                <p>Ensure food safety compliance and consumer trust with FSSAI registration.</p>
                                <p>The Food Safety and Standards Authority of India (FSSAI) is the apex regulatory body under the Ministry of Health & Family Welfare, responsible for maintaining food safety and hygiene standards across the country. Any individual or entity involved in manufacturing, processing, packaging, storage, distribution, or sale of food products must obtain FSSAI registration or license, depending on business scale.</p>
                                <p>FSSAI License is mandatory for all food businesses to operate legally and avoid penalties under the Food Safety and Standards Act, 2006.</p>
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
                                                        What is FSSAI registration, and who needs to register under FSSAI?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>FSSAI (Food Safety and Standards Authority of India) registration is mandatory for all food businesses involved in the manufacturing, processing, packaging, storage, distribution, and sale of food products in India. This includes food manufacturers, distributors, retailers, wholesalers, importers, exporters, and food service operators.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of FSSAI registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>FSSAI registration ensures that food businesses comply with food safety regulations and standards set by the government to ensure the safety and quality of food products consumed by the public. It involves obtaining a unique FSSAI license or registration number, which must be displayed on all food products and promotional materials.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of FSSAI registration for food businesses?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>FSSAI registration enhances consumer trust and confidence in the safety and quality of food products, leading to increased sales and market credibility for food businesses. It also helps in avoiding legal penalties and regulatory issues by ensuring compliance with food safety regulations. Moreover, FSSAI registration provides access to government schemes, subsidies, and support for food business operators.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the disadvantages of FSSAI registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>While FSSAI registration offers numerous benefits, there are certain challenges associated with it. One potential disadvantage is the complexity of the registration process and the need to adhere to stringent food safety standards, which may require investments in infrastructure, training, and quality control measures. Additionally, non-compliance with FSSAI regulations can lead to fines, penalties, or even closure of the business, posing risks for non-compliant food operators.</p>
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
                                    <li>Incorporation certificate / Registration copy</li>
                                    <li>MOA and AOA Or LLP / Partnership Deed copy</li>
                                    <li>PAN Card of the Company</li>
                                    <li>Office Agreement/Property Deed</li>
                                    <li>Latest Rent Invoice</li>
                                    <li>Latest property tax receipt</li>
                                    <li>The exact nature of business</li>
                                    <li>All Director’s / Partner’s KYC (Pan &amp; Aadhar card)</li>
                                    <li>Name, Contact No &amp; email address for All Directors / Partners</li>
                                    <li>Latest Trade License Copy</li>
                                    <li>Form of Nomination (Form No IX)</li>
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
