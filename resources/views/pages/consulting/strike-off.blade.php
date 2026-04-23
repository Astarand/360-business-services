@extends('layouts.app')

@section('title', 'Strike Off Company - 360 Business and Services')
@section('meta_description', 'Facilitate the smooth process of striking off a company in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the intricate steps involved in the dissolution and striking off of companies, ensuring adherence to regulatory requirements and deadlines. Whether you are a small business or a corporation looking to wind up operations, our experienced team provides reliable support for all your strike-off needs. From preparing necessary documentation to filing applications with the Registrar of Companies (RoC) and fulfilling statutory obligations, we ensure that the strike-off process is completed efficiently and accurately. With our tailored solutions, navigating the complexities of company strike-off becomes hassle-free, allowing you to dissolve your company in compliance with the law. Partner with us for the best strike-off company services in Kolkata and ensure a seamless exit strategy for your business.')
@section('long_keywords', 'Strike off company process in Kolkata, How to dissolve a company in Kolkata, Best strike off company services in Kolkata, Requirements for company strike off in Kolkata, Steps to complete company dissolution in Kolkata, Strike off company cost in Kolkata, Professional assistance for company strike off in Kolkata, Benefits of striking off a company in Kolkata, Legal aspects of company dissolution in Kolkata, Kolkata strike off company consultants')
@section('short_keywords', 'Strike off company Kolkata, Company dissolution services, Strike off consultants Kolkata, Strike off assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate the smooth process of striking off a company in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the intricate steps involved in the dissolution and striking off of companies, ensuring adherence to regulatory requirements and deadlines. Whether you are a small business or a corporation looking to wind up operations, our experienced team provides reliable support for all your strike-off needs. From preparing necessary documentation to filing applications with the Registrar of Companies (RoC) and fulfilling statutory obligations, we ensure that the strike-off process is completed efficiently and accurately. With our tailored solutions, navigating the complexities of company strike-off becomes hassle-free, allowing you to dissolve your company in compliance with the law. Partner with us for the best strike-off company services in Kolkata and ensure a seamless exit strategy for your business.')


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
                                <h2 class="title">Strike Off Company</h2>
                                <p>Striking off a company refers to the process of removing its name from the official registry, effectively dissolving it. This typically happens when a company ceases operations, has no assets or liabilities, and wishes to close its legal entity. The process involves filing the necessary forms and documents with the appropriate government authorities, ensuring compliance with regulatory requirements. Once struck off, the company ceases to exist as a legal entity, and its name is removed from public records.</p>
                                <div class="sd-inner-wrap sd-inner-wrap-four">
                                    <div class="row">
                                        <div class="col-12 pb-10">
                                            <div class="content">
                                                <ul class="list-wrap">
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                                    <li>
                                                        <img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">
                                                        Cost-effective efficiency and timeliness  &nbsp;
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
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Proactive compliance management</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Unlock the business's growth potential.</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Transparency and communication</li>
                                                    <li><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Comprehensive service offerings</li>

                                                </ul>
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
                                                        What is Strike Off Company, and why does it occur?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Strike Off Company refers to the process of removing a company's name from the register of companies maintained by the Registrar of Companies (RoC). It occurs when a company fails to comply with statutory requirements, such as filing annual returns and financial statements, for an extended period or when the company wishes to voluntarily wind up its operations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the reasons for Strike Off Company by the Registrar of Companies (RoC)?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The Registrar of Companies (RoC) may strike off a company for reasons such as non-compliance with filing requirements, failure to commence business within the prescribed time, failure to maintain registered office address, or existence of a defunct or inactive company.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the implications of Strike Off Company for the company and its directors?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The implications of Strike Off Company include the dissolution of the company's legal entity, cessation of business operations, loss of rights and assets, and potential liability for the company's directors in certain cases of non-compliance or fraudulent activities.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Can a company be reinstated after being struck off by the Registrar of Companies (RoC)?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes, a company struck off by the Registrar of Companies (RoC) may be reinstated through a legal process, which typically involves filing an application for restoration with the National Company Law Tribunal (NCLT) or other appropriate authority, providing reasons for the strike off, and obtaining approval for reinstatement by demonstrating compliance with statutory requirements and payment of necessary fees.</p>
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
    </main>
    <!-- main-area-end -->

@endsection
