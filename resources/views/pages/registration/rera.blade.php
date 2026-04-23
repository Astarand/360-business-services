@extends('layouts.app')

@section('title', 'RERA License - 360 Business and Services')
@section('meta_description', 'Simplify your RERA (Real Estate Regulatory Authority) license registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding real estate developers and agents through the intricacies of RERA compliance, ensuring seamless adherence to regulatory requirements. Whether you are a developer launching a new project or an agent involved in property transactions, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating RERA license obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with RERA regulations to build trust and transparency in the real estate sector.')
@section('long_keywords', 'RERA license registration process in Kolkata, How to renew RERA license in Kolkata, Best RERA license registration services in Kolkata, Requirements for RERA renewal in Kolkata, Steps to obtain RERA license registration in Kolkata, RERA renewal cost in Kolkata, Professional assistance for RERA license registration in Kolkata, Benefits of RERA license registration in Kolkata, Legal aspects of RERA renewal in Kolkata, Kolkata RERA consultant')
@section('short_keywords', 'RERA license registration Kolkata, RERA renewal services, RERA compliance support, RERA consultants Kolkata, RERA assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Simplify your RERA (Real Estate Regulatory Authority) license registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding real estate developers and agents through the intricacies of RERA compliance, ensuring seamless adherence to regulatory requirements. Whether you are a developer launching a new project or an agent involved in property transactions, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating RERA license obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with RERA regulations to build trust and transparency in the real estate sector.')


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
                                <h2 class="title">RERA License</h2>
                                <p>Promote transparency, build buyer trust, and operate legally with RERA compliance.</p>
                                <p>RERA stands for the Real Estate (Regulation and Development) Act, 2016, a transformative legislation enacted to regulate India’s real estate sector. It mandates registration of all residential and commercial real estate projects, as well as real estate agents, to ensure transparency, accountability, and timely project delivery.</p>
                                <p>Whether you're a developer, promoter, or real estate broker, RERA registration is legally required before advertising, selling, or marketing a real estate project in India.</p>
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
                                                        What is a RERA license, and who needs to obtain it?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A RERA (Real Estate Regulatory Authority) license is a mandatory registration required for real estate developers and agents involved in the sale or promotion of residential and commercial projects in India. The Real Estate (Regulation and Development) Act, 2016 mandates developers to obtain RERA registration for their projects to ensure transparency, accountability, and protection of buyers' interests.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of a RERA license?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A RERA license signifies compliance with the provisions of the Real Estate (Regulation and Development) Act, 2016, and its rules and regulations. It involves submitting project details, including land title, approvals, timelines, and financial details, to the respective state's RERA authority for scrutiny and registration. RERA registration ensures that developers adhere to standards of construction quality, project completion timelines, and fair business practices.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of obtaining a RERA license for developers and buyers?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>For developers, a RERA license enhances credibility and trust among prospective buyers by demonstrating transparency and compliance with regulatory norms. It promotes accountability and protects buyers' interests by ensuring timely delivery of projects and resolving disputes through the RERA authority's grievance redressal mechanism. For buyers, RERA registration provides assurance of investing in a regulated and transparent real estate market, reducing the risks associated with fraudulent practices and delayed projects.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the disadvantages of not having a RERA license?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without a RERA license can lead to legal consequences, including penalties, fines, and sanctions, imposed by the RERA authority for non-compliance with regulatory requirements. Developers without RERA registration may face challenges in selling their projects as buyers prefer properties registered under RERA for the protection it offers. Moreover, non-compliance with RERA norms undermines the objective of consumer protection and transparency in the real estate sector, potentially eroding trust in the industry.</p>
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
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mx-lg-2">
                            <div class="col-lg-12">
                                <ul class="list-wrap1">
                                    <h5>Promoter Details:</h5>
                                    <li>Promoter's PAN card.</li>
                                    <li>Promoter's Aadhaar card.</li>
                                    <li>Details of the promoter's past five years of projects.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Project Details:</h5>
                                    <li>Project name, location, and details</li>
                                    <li>Project layout and carpet area details.</li>
                                    <li>Commencement and completion date of the project.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Legal Title of the Land:</h5>
                                    <li>Proof of ownership of the land, such as a sale deed.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Encumbrance Certificate:</h5>
                                    <li>Ensures that the property is free from any legal dues.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Sanctioned Plan:</h5>
                                    <li>Approval of building plans from the competent authority.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Project Cost Details:</h5>
                                    <li>Estimated project cost and the means of finance.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Bank Details:</h5>
                                    <li>Details of the bank accounts where 70% of the funds collected from buyers will be deposited.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Architectural and Structural Details:</h5>
                                    <li>Details of the architect and structural engineer.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Affidavit:</h5>
                                    <li>An affidavit by the promoter stating the details of the project.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Project Brochure:</h5>
                                    <li>Details of the project include amenities and specifications</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Details of Litigations:</h5>
                                    <li>Any pending litigation related to the project.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Project Insurance:</h5>
                                    <li>Details of the insurance taken for the project.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Auditor's Report:</h5>
                                    <li>A financial audit report of the promoter..</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Consent Letters:</h5>
                                    <li>Consent letters from various authorities, as applicable.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Undertaking:</h5>
                                    <li>An undertaking stating the possession date, project completion, etc.</li>
                                </ul>
                                <h6 >Any other documents as required by the RERA authority.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- main-area-end -->

@endsection
