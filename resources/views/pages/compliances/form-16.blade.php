@extends('layouts.app')

@section('title', 'Form-16 - 360 Business and Services')
@section('meta_description', 'Ensure accurate and compliant Form-16 generation in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of Form-16 compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are an employer or an employee, our experienced team provides reliable support for all your Form-16 needs. From generating Form-16s to verifying employee tax deductions and reconciling financial records, we ensure that your filings are completed efficiently and accurately. With our streamlined solutions, navigating the intricacies of Form-16 generation becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best Form-16 services in Kolkata and ensure compliance with tax laws.')
@section('long_keywords', 'Form-16 generation process in Kolkata, How to generate Form-16 in Kolkata, Best Form-16 services in Kolkata, Requirements for Form-16 generation in Kolkata, Steps to create Form-16 in Kolkata, Form-16 generation cost in Kolkata, Professional assistance for Form-16 generation in Kolkata, Benefits of Form-16 in Kolkata, Legal aspects of Form-16 in Kolkata, Kolkata Form-16 consultants')
@section('short_keywords', 'Form-16 Kolkata, Form-16 generation, Tax compliance, Form-16 consultants Kolkata')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure accurate and compliant Form-16 generation in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of Form-16 compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are an employer or an employee, our experienced team provides reliable support for all your Form-16 needs. From generating Form-16s to verifying employee tax deductions and reconciling financial records, we ensure that your filings are completed efficiently and accurately. With our streamlined solutions, navigating the intricacies of Form-16 generation becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best Form-16 services in Kolkata and ensure compliance with tax laws.')


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
                                <h2 class="title">Form-16</h2>
                                <p>Form-16 is an essential document provided by employers to employees in India, detailing salary, tax deductions, and TDS (Tax Deducted at Source) for a specific financial year. It serves as proof of income earned and taxes paid. Employers issue Form-16 annually, typically on or before July 31st of the following financial year. Employees use Form-16 to file their income tax returns, as it outlines taxable income and tax deducted by the employer, helping calculate tax liabilities or refunds.</p>
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
                                                        What is Form-16?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Form-16 is a certificate issued by employers to their employees, providing details of the salary earned, taxes deducted, and other income sources during the financial year. It serves as proof of income earned and taxes paid and is essential for filing income tax returns.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Who issues Form-16, and who is eligible to receive it?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Form-16 is issued by employers to their employees who are subject to tax deduction at source (TDS) on their salaries. It is typically provided to employees earning a salary and having taxes deducted at source under the Income Tax Act.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What information is included in Form-16?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Form-16 contains details such as the employee's name and address, employer's name and address, Permanent Account Number (PAN) of both the employee and employer, summary of salary earned, allowances and perquisites received, deductions under various sections of the Income Tax Act, tax deducted at source (TDS), and other relevant details.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What is the purpose of Form-16?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The primary purpose of Form-16 is to facilitate the filing of income tax returns by employees. It provides a summary of income earned and taxes deducted during the financial year, which helps employees calculate their taxable income, claim deductions, and reconcile their tax liabilities with the tax deducted at source by their employer.</p>
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
