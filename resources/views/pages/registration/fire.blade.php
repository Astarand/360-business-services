@extends('layouts.app')

@section('title', 'Fire License - 360 Business and Services')
@section('meta_description', 'Simplify your fire license registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of fire safety compliance, ensuring seamless adherence to regulatory requirements. Whether you are establishing a new business or renewing existing permits, we provide reliable assistance at every stage of the process. From initial application to periodic inspections and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating fire license obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with fire safety regulations to protect your business and premises.')
@section('long_keywords', 'Fire license registration process in Kolkata, How to renew fire license in Kolkata, Best fire license registration services in Kolkata, Requirements for fire license renewal in Kolkata, Steps to obtain fire license registration in Kolkata, Fire license renewal cost in Kolkata, Professional assistance for fire license registration in Kolkata, Benefits of fire license registration in Kolkata, Legal aspects of fire license renewal in Kolkata, Kolkata fire license consultant')
@section('short_keywords', 'Fire license registration Kolkata, Fire license renewal services, Fire license compliance support, Fire license consultants Kolkata, Fire license assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Simplify your fire license registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of fire safety compliance, ensuring seamless adherence to regulatory requirements. Whether you are establishing a new business or renewing existing permits, we provide reliable assistance at every stage of the process. From initial application to periodic inspections and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating fire license obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with fire safety regulations to protect your business and premises.')


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
                                <h2 class="title">Fire License</h2>
                                <p>Operate safely and legally with a certified Fire Safety NOC for your premises.</p>
                                <p>A Fire License (commonly referred to as Fire Safety Certificate or Fire NOC) is an essential regulatory approval issued by the Fire Department under the local Municipal Corporation or State Fire Services. It certifies that a commercial or industrial premises has adequate fire prevention and safety measures in place as per the National Building Code (NBC) and other local fire safety regulations.</p>
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
                                                        What is a fire license, and who needs to obtain it?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A fire license, also known as a fire safety certificate or no-objection certificate (NOC) from the fire department, is a legal document issued by the local fire authorities. It signifies that a building or establishment has complied with fire safety regulations and standards, ensuring the safety of occupants in the event of a fire. Businesses, residential complexes, educational institutions, healthcare facilities, and other public buildings typically need to obtain a fire license.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                         What are the features of a fire license?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A fire license confirms that the building has implemented necessary fire safety measures such as fire alarms, smoke detectors, fire extinguishers, emergency exits, and evacuation plans. It involves a thorough inspection of the premises by fire department officials to assess compliance with fire safety regulations and standards. The license is usually valid for a specific period and may require renewal periodically.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of obtaining a fire license?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Obtaining a fire license ensures compliance with fire safety regulations, reducing the risk of fire-related accidents and injuries. It helps protect lives and property by ensuring that appropriate fire safety measures are in place and functioning effectively. Moreover, having a valid fire license enhances the reputation and credibility of businesses and buildings, instilling confidence among occupants, customers, and stakeholders.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        WWhat are the disadvantages of not having a fire license?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without a valid fire license can pose significant risks, including legal liabilities, fines, penalties, and potential closure of the establishment. In the event of a fire-related incident, insurance claims may be affected, and occupants may be at greater risk due to inadequate fire safety measures. Additionally, non-compliance with fire safety regulations can damage the reputation and credibility of businesses, leading to loss of trust and business opportunities.</p>
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
                                    <li>Property Related all Papers</li>
                                    <li>Property Site Plan</li>
                                    <li>Master plan of Building</li>
                                    <li>Latest Trade License</li>
                                    <li>Applicant’s Aadhar card</li>
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
