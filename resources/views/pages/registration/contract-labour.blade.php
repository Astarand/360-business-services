@extends('layouts.app')

@section('title', 'Contract Labour Registration - 360 Business and Services')
@section('meta_description', 'Simplify your Contract Labour registration process in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of contract labour compliance, ensuring seamless adherence to regulatory requirements. Whether you are engaging contract workers for short-term projects or long-term arrangements, we provide reliable assistance at every stage of the registration process. From documentation to filing and compliance, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating contract labour registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to maintain a smooth and legally compliant workforce.')
@section('long_keywords', 'Contract labour registration process in Kolkata, Best contract labour registration services in Kolkata, Requirements for contract labour registration in Kolkata, Steps to register contract labour in Kolkata, Professional assistance for contract labour registration in Kolkata, Benefits of contract labour registration in Kolkata, Legal aspects of contract labour registration in Kolkata, Kolkata labour contractor consultant')
@section('short_keywords', 'Contract labour registration Kolkata, Labour contractor registration services, Contract workforce compliance support, Labour consultant Kolkata, Contract labour assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Simplify your Contract Labour registration process in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of contract labour compliance, ensuring seamless adherence to regulatory requirements. Whether you are engaging contract workers for short-term projects or long-term arrangements, we provide reliable assistance at every stage of the registration process. From documentation to filing and compliance, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating contract labour registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to maintain a smooth and legally compliant workforce.')


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
                    <div class="col-lg-7  order-lg-0 order-0">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title">Contract Labour Registration</h2>
                                <p>Legally engage contract workers and ensure fair labour practices with Contract Labour Registration.</p>
                                <p>Contract Labour Registration is a mandatory compliance requirement under the Contract Labour (Regulation & Abolition) Act, 1970, applicable to principal employers and contractors who employ 20 or more contract workers on any day in a year. This registration ensures that outsourced or third-party workers receive fair wages, safe working conditions, and statutory benefits.</p>
                                <p>The license helps safeguard both employers and contract workers by promoting transparent and legal employment practices, especially in industries like construction, logistics, housekeeping, manufacturing, and security services.</p>
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
                                                        What is Contract Labour Registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Contract Labour Registration is a mandatory registration required for establishments or contractors engaging contract workers in certain activities as defined under the Contract Labour (Regulation and Abolition) Act, 1970. This registration applies to both principal employers (establishments) and contractors (service providers) engaging contract labour.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the activities covered under Contract Labour Registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Contract Labour Registration is typically required for activities defined as "contract work" under the Contract Labour Act, which includes construction work, manufacturing, maintenance, cleaning, security services, and other specified services where contract labour is engaged.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the consequences of non-compliance with Contract Labour Registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Non-compliance with Contract Labour Registration and related provisions of the Contract Labour Act may result in legal consequences, including penalties, fines, and legal actions by the Labour Department. Additionally, non-registration may lead to disruptions in business operations, loss of contracts, and damage to the reputation and credibility of the establishment or contractor. It is essential to ensure compliance with labor laws to avoid such risks.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the obligations of principal employers and contractors under Contract Labour Registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Principal employers and contractors are required to comply with various obligations under the Contract Labour Act, including ensuring payment of wages, providing safety and welfare measures, maintaining records of contract workers, and submitting periodic returns to the Labour Department. They are also responsible for ensuring adherence to statutory requirements related to working conditions, hours of work, and other labor welfare provisions.</p>
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
                                    <li>Application Form</li>
                                    <li>Proof of Business PAN Card</li>
                                    <li>Address Proof</li>
                                    <li>ID Proof of Proprietor/Partners/Directors</li>
                                    <li>Labor License Fee Receipt</li>
                                    <li>List of Contract Workers</li>
                                    <li>Site Plan</li>
                                    <li>Copy of Labor Agreement/Contract</li>
                                    <li>Employee Welfare Measures</li>
                                    <li>Registers and Records</li>
                                    <li>Annual Return</li>
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
