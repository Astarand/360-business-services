@extends('layouts.app')

@section('title', 'Professional Tax - 360 Business and Services')
@section('meta_description', 'Facilitate your Professional Tax registration and renewal in Kolkata with the comprehensive support of 360 Business and Services. Our seasoned team specializes in guiding individuals and businesses through the intricacies of Professional Tax compliance, ensuring seamless adherence to regulatory requirements. Whether you are a self-employed professional or an employer responsible for deducting Professional Tax from employees salaries, we provide reliable assistance at every stage of the process. From initial registration to annual filings and renewal, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Professional Tax obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure smooth compliance with Professional Tax regulations.')
@section('long_keywords', 'LProfessional Tax registration process in Kolkata, How to renew Professional Tax in Kolkata, Best Professional Tax registration services in Kolkata, Requirements for Professional Tax renewal in Kolkata, Steps to obtain Professional Tax registration in Kolkata, Professional Tax renewal cost in Kolkata, Professional assistance for Professional Tax registration in Kolkata, Benefits of Professional Tax registration in Kolkata, Legal aspects of Professional Tax renewal in Kolkata, Kolkata Professional Tax consultant')
@section('short_keywords', 'Professional Tax registration Kolkata, Professional Tax renewal services, Professional Tax compliance support, Professional Tax consultants Kolkata, Professional Tax assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate your Professional Tax registration and renewal in Kolkata with the comprehensive support of 360 Business and Services. Our seasoned team specializes in guiding individuals and businesses through the intricacies of Professional Tax compliance, ensuring seamless adherence to regulatory requirements. Whether you are a self-employed professional or an employer responsible for deducting Professional Tax from employees salaries, we provide reliable assistance at every stage of the process. From initial registration to annual filings and renewal, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Professional Tax obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure smooth compliance with Professional Tax regulations.')


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
                <div class="col-lg-7  order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">Professional Tax</h2>
                            <p>Ensure state-wise tax compliance for employees and professionals with timely professional tax registration.</p>
                            <p>Professional Tax (PT) is a state-level tax imposed on income earned by individuals engaged in professions, employment, trades, and businesses. In West Bengal, professional tax is governed by the West Bengal State Tax on Professions, Trades, Callings and Employments Act, 1979, and is applicable to salaried individuals, freelancers, professionals (CA, lawyer, doctor), and business owners.</p>
                            <p>Both employers and self-employed individuals must register and pay professional tax as per the prescribed income slabs.</p>
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
                                                    What is professional tax, and who is liable to pay it?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Professional tax is a state-level tax levied on income earned by individuals engaged in professions, trades, or employment. The liability to pay professional tax varies from state to state but typically applies to individuals who earn a salary or income from practicing a profession, trade, or employment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the features of professional tax?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Professional tax is a compulsory levy imposed by state governments on individuals earning an income. It is deducted by employers from the salaries of employees and deposited with the respective state government. The tax rates and slabs are determined by each state government, and exemptions or deductions may apply based on the income level and profession of the individual.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the advantages of professional tax?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Professional tax serves as a significant source of revenue for state governments, which utilize the funds for various development initiatives and public services. It helps in promoting fiscal discipline and accountability among professionals by ensuring their contribution towards state finances. Moreover, professional tax is relatively simple to administer and collect, contributing to efficient tax compliance.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the disadvantages of professional tax?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>One potential disadvantage of professional tax is its regressive nature, as it imposes a fixed burden on individuals regardless of their income level. This could disproportionately affect lower-income professionals, placing an additional financial burden on them. Additionally, compliance with professional tax regulations may add to the administrative burden for employers, especially in states with complex tax structures.</p>
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
                                <li>Company Incorporation/Registration copy</li>
                                <li>Company Pan Card</li>
                                <li>Latest Trade License</li>
                                <li>Bank Statement / Cancelled Cheque</li>
                                <li>Nature of Business</li>
                                <li>Contact Person Name, Mobile No &amp; email</li>
                                <li>Complete Office Address</li>
                                <li>Police Station &amp; Post Office Name</li>
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