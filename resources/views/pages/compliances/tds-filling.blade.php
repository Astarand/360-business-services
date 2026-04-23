@extends('layouts.app')

@section('title', 'TDS Fillings - 360 Business and Services')
@section('meta_description', 'Ensure accurate and timely TDS (Tax Deducted at Source) filings in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of TDS compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are a small business, a corporation, or a sole proprietorship, our experienced team provides reliable support for all your TDS filing needs. From deducting TDS on payments to preparing TDS returns and reconciling financial records, we ensure that your filings are completed efficiently and accurately. With our streamlined solutions, navigating the intricacies of TDS filings becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best TDS filing services in Kolkata and ensure compliance with tax laws.')
@section('long_keywords', 'TDS filing process in Kolkata, How to file TDS returns in Kolkata, Best TDS filing services in Kolkata, Requirements for TDS filings in Kolkata, Steps to complete TDS filings in Kolkata, TDS filing cost in Kolkata, Professional assistance for TDS filings in Kolkata, Benefits of TDS filings in Kolkata, Legal aspects of TDS filings in Kolkata, Kolkata TDS consultants')
@section('short_keywords', 'TDS filing Kolkata, TDS compliance, TDS consultants Kolkata, Tax deducted at source')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure accurate and timely TDS (Tax Deducted at Source) filings in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of TDS compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are a small business, a corporation, or a sole proprietorship, our experienced team provides reliable support for all your TDS filing needs. From deducting TDS on payments to preparing TDS returns and reconciling financial records, we ensure that your filings are completed efficiently and accurately. With our streamlined solutions, navigating the intricacies of TDS filings becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best TDS filing services in Kolkata and ensure compliance with tax laws.')


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
                                <h2 class="title">TDS Fillings</h2>
                                <p>TDS (Tax Deducted at Source) filing is a vital tax compliance process where entities deduct tax from payments made to individuals or organizations as per the Income Tax Act, 1961. It involves the timely submission of TDS returns, detailing the deducted taxes and deposited amounts with the government. Adhering to TDS regulations ensures transparency and accuracy in tax transactions. Entities are required to file TDS returns periodically, typically on a quarterly basis, to avoid penalties and maintain tax compliance.</p>
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
                                                        What is TDS (Tax Deducted at Source) Filing?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>TDS Filing refers to the process of reporting tax deductions made at the source of income to the tax authorities. It is mandatory for entities, including individuals, businesses, and government bodies, responsible for deducting TDS to file TDS returns with the Income Tax Department.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What types of payments are subject to TDS?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Various types of payments, such as salaries, interest, rent, commission, professional fees, dividends, and contract payments, are subject to TDS under the Income Tax Act. The rates and thresholds for TDS deduction vary depending on the nature of the payment and the provisions of the law.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the different TDS forms and their purposes?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The different TDS forms include Form 24Q for TDS on salaries, Form 26Q for TDS on payments other than salaries, Form 27Q for TDS on payments to non-residents, and Form 27EQ for TDS on payments made to contractors and professionals. Each form is used to report specific types of TDS deductions.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the consequences of non-compliance with TDS filing requirements?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Non-compliance with TDS filing requirements may result in penalties, fines, and legal actions by the Income Tax Department. It can also lead to disallowance of TDS deductions, interest charges on delayed filings, and adverse impacts on the deductor's reputation and compliance status.</p>
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
