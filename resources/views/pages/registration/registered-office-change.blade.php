@extends('layouts.app')

@section('title', 'Register Office Change - 360 Business and Services')
@section('meta_description', 'Facilitate the process of changing your registered office address in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of registered office change registration, ensuring seamless adherence to regulatory requirements. Whether you are relocating within the city or to a new area, we provide reliable assistance at every stage of the process. From documentation to filing and renewal, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating the registered office change process in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to maintain accurate records and legal standing for your business.')
@section('long_keywords', 'Registered office change process in Kolkata, How to change registered office address in Kolkata, Best office address change services in Kolkata, Requirements for office relocation in Kolkata, Steps to change registered office address in Kolkata, Office relocation cost in Kolkata, Professional assistance for registered office change in Kolkata, Benefits of office address change in Kolkata, Legal aspects of registered office relocation in Kolkata, Kolkata registered office change consultant')
@section('short_keywords', 'Registered office change Kolkata, Office address change services, Office relocation support, Change of registered office consultants Kolkata, Office address assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate the process of changing your registered office address in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of registered office change registration, ensuring seamless adherence to regulatory requirements. Whether you are relocating within the city or to a new area, we provide reliable assistance at every stage of the process. From documentation to filing and renewal, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating the registered office change process in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to maintain accurate records and legal standing for your business.')


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
                    <div class="col-lg-7  order-lg-0 order-0">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title">Registered Office Change</h2>
                                <p>Legally update your company’s official address with hassle-free support and ROC filing.</p>
                                <p>A Registered Office is the official address of a company where all statutory communications, legal notices, and government correspondence are sent. If your company changes this address — whether within the same city, across cities, or to another state — it must be formally updated with the Ministry of Corporate Affairs (MCA) through prescribed ROC filings.</p>
                                <p>Timely compliance is mandatory to avoid penalties and to ensure your business remains in good legal standing.</p>
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
                                                        What is a Registered Office Change?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Registered Office Change refers to the process of altering the official address of a company or business entity as recorded with the relevant government authorities. It becomes necessary when a company relocates its principal place of business to a new address within the same state or to a different state altogether.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the steps involved in changing the Registered Office of a company?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The process typically involves obtaining approval from the company's board of directors, convening a board meeting to pass a resolution for the change of registered office, and filing necessary forms and documents with the Registrar of Companies (ROC). Additionally, advertisements may need to be published in local newspapers to inform stakeholders about the change.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of changing the Registered Office?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Changing the Registered Office allows a company to adapt to its evolving business needs, including expansion, relocation to more strategic locations, or cost-saving measures. It may also align with operational requirements, such as proximity to clients, suppliers, or talent pools. Moreover, a change in the registered office may enhance the company's image or branding.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the potential challenges or disadvantages of changing the Registered Office?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Despite the benefits, there could be challenges associated with changing the Registered Office, such as administrative complexities, regulatory compliance requirements, and potential disruptions to business operations during the transition period. Additionally, stakeholders, including customers, suppliers, and regulatory authorities, must be duly informed about the change to avoid misunderstandings or legal issues.</p>
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
                                    <li>Notarized NOC from the office address or mutation copy</li>
                                    <li>Notarized Office Agreement/Property Deed</li>
                                    <li>Latest Rent Invoice</li>
                                    <li>Latest property tax receipt</li>
                                    <li>Latest office electricity bill</li>
                                    <li>Office Images (Indoor &amp; Outdoor)</li>
                                    <li>DSC of One Director</li>
                                    <li>Board Resolution for Address Change</li>
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
