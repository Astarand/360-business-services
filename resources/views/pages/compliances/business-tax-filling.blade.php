@extends('layouts.app')

@section('title', 'Business Tax Fillings - 360 Business and Services')
@section('meta_description', 'Ensure accurate and timely business tax filings in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of tax compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are a corporation, a partnership, or a sole proprietorship, our experienced team provides reliable support for all your business tax filing needs. From preparing corporate tax returns to optimizing deductions and credits, we ensure that your tax filings are completed efficiently and in compliance with tax laws. With our streamlined solutions, navigating the intricacies of business tax filings becomes hassle-free, allowing you to focus on running and growing your business. Partner with us for the best business tax filing services in Kolkata and ensure peace of mind during tax season.')
@section('long_keywords', 'Business tax filing process in Kolkata, How to file business taxes in Kolkata, Best business tax filing services in Kolkata, Requirements for business tax filings in Kolkata, Steps to complete business tax filings in Kolkata, Business tax filing cost in Kolkata, Professional assistance for business tax filings in Kolkata, Benefits of business tax filings in Kolkata, Legal aspects of business tax filings in Kolkata, Kolkata tax consultants')
@section('short_keywords', 'Business tax filings Kolkata, Corporate tax services, Tax compliance assistance, Tax consultants Kolkata')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure accurate and timely business tax filings in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of tax compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are a corporation, a partnership, or a sole proprietorship, our experienced team provides reliable support for all your business tax filing needs. From preparing corporate tax returns to optimizing deductions and credits, we ensure that your tax filings are completed efficiently and in compliance with tax laws. With our streamlined solutions, navigating the intricacies of business tax filings becomes hassle-free, allowing you to focus on running and growing your business. Partner with us for the best business tax filing services in Kolkata and ensure peace of mind during tax season.')


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
                                <h2 class="title">Business Tax Fillings</h2>
                                <p>Business tax filing is the process of reporting a company's income, expenses, and other financial information to the government for tax assessment and compliance. This involves submitting various forms and documents to accurately report business income, deductions, credits, and taxes owed. Timely and precise tax filing ensures adherence to tax laws and regulations, helps avoid penalties, and maximizes tax benefits for businesses. Professional assistance from tax experts or reliable software can streamline the process, ensuring businesses meet their tax obligations efficiently and effectively.</p>
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
                                                        What are Business Tax Filings?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Business Tax Filings refer to the process of reporting a business entity's income, deductions, and taxes owed to the government authorities. They are required annually and are typically due by a specified deadline, which varies depending on the type of business entity and jurisdiction.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the consequences of failing to file business taxes?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Failing to file business taxes can result in penalties, fines, and interest charges imposed by the tax authorities. It may also lead to audits, legal actions, and seizure of assets in severe cases. Additionally, non-compliance can negatively impact the business's reputation, credit rating, and ability to operate legally.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What documents are needed for Business Tax Filings?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The documents needed for Business Tax Filings may include income statements (such as profit and loss statements and balance sheets), financial statements, payroll records, depreciation schedules, tax forms (such as W-2s, 1099s, and K-1s), and any other relevant financial documents.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What types of business entities are required to file taxes?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Various types of business entities are required to file taxes, including sole proprietorships, partnerships, limited liability companies (LLCs), S corporations, C corporations, and other entities recognized by tax authorities. Each type of entity has its own tax filing requirements and forms.</p>
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
