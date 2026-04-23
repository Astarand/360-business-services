@extends('layouts.app')

@section('title', 'Company Health Checkup  - 360 Business and Services')
@section('meta_description', 'Ensure the robustness of your companys operations with our comprehensive Company Health Checkup services in Kolkata at 360 Business and Services. We specialize in conducting thorough assessments of your companys financial, operational, and compliance aspects to identify strengths, weaknesses, and areas for improvement. Whether you are a small business or a large corporation, our experienced team provides reliable support to enhance your companys overall health and performance. From reviewing financial statements to assessing internal controls and compliance with regulatory requirements, we provide actionable insights to optimize your business operations. With our tailored solutions, navigating the complexities of company health assessments becomes hassle-free, allowing you to make informed decisions and drive sustainable growth. Partner with us for the best Company Health Checkup services in Kolkata and ensure the long-term success and resilience of your business.')
@section('long_keywords', 'Company health checkup process in Kolkata, How to conduct a company health checkup in Kolkata, Best company health checkup services in Kolkata, Requirements for company health assessments in Kolkata, Steps to complete a company health checkup in Kolkata, Company health checkup cost in Kolkata, Professional assistance for company health assessments in Kolkata, Benefits of company health checkups in Kolkata, Legal aspects of company health assessments in Kolkata, Kolkata company health checkup consultants')
@section('short_keywords', 'Company health checkup Kolkata, Business assessment services, Company health consultants Kolkata, Health checkup assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure the robustness of your companys operations with our comprehensive Company Health Checkup services in Kolkata at 360 Business and Services. We specialize in conducting thorough assessments of your companys financial, operational, and compliance aspects to identify strengths, weaknesses, and areas for improvement. Whether you are a small business or a large corporation, our experienced team provides reliable support to enhance your companys overall health and performance. From reviewing financial statements to assessing internal controls and compliance with regulatory requirements, we provide actionable insights to optimize your business operations. With our tailored solutions, navigating the complexities of company health assessments becomes hassle-free, allowing you to make informed decisions and drive sustainable growth. Partner with us for the best Company Health Checkup services in Kolkata and ensure the long-term success and resilience of your business.')


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
                                <h2 class="title">Company Health Checkup </h2>
                                <p>A Company Health Checkup evaluates the overall well-being and performance of an organization, examining key aspects such as financial stability, operational efficiency, compliance with regulations, and employee satisfaction. Through comprehensive analysis and evaluation, it identifies strengths, weaknesses, and areas for improvement, empowering management to make informed decisions and implement strategic changes for long-term success. This process promotes transparency, fosters accountability, and ensures the company operates efficiently to achieve its goals and sustain growth.</p>
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
                                                        What is a Company Health Checkup, and why is it important?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Company Health Checkup is a comprehensive assessment of a company's overall health, performance, and compliance with regulatory requirements. It is important to identify strengths, weaknesses, risks, and opportunities for improvement, thereby ensuring the company's sustainability and growth.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the key areas covered in a Company Health Checkup?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Company Health Checkup covers various areas such as financial health, operational efficiency, compliance with laws and regulations, governance practices, risk management, human resources management, market competitiveness, and strategic alignment with organizational goals.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the benefits of a Company Health Checkup?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The benefits of a Company Health Checkup include early detection of problems or weaknesses, optimization of resources and processes, improvement in operational efficiency and profitability, enhancement of corporate governance and compliance practices, mitigation of risks, and better strategic decision-making.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        How often should a Company Health Checkup be conducted?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The frequency of conducting a Company Health Checkup may vary depending on factors such as the size, complexity, and industry of the company, as well as changes in regulatory requirements and market conditions. It is generally recommended to conduct a health checkup periodically, such as annually or biennially, to ensure ongoing monitoring and improvement of the company's performance and compliance.</p>
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
