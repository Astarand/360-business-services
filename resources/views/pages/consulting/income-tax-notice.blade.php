@extends('layouts.app')

@section('title', 'Income Tax Notice & Clarification - 360 Business and Services')
@section('meta_description', 'Ensure prompt and effective handling of income tax notices and clarifications in Kolkata with our expert assistance at 360 Business and Services. We specialize in providing guidance and support to individuals and businesses facing income tax-related notices or seeking clarifications from tax authorities. Whether you have received a notice regarding tax assessment, discrepancies in returns, or compliance issues, or you require clarification on income tax rules and regulations, our experienced team is here to help. We will assist you in understanding the notice, preparing a suitable response, and liaising with tax authorities to resolve the matter efficiently. With our expertise in income tax matters, we will ensure that you address the notice or clarification accurately and in a timely manner, minimizing any potential penalties or disruptions to your financial affairs. Partner with us for the best income tax notice and clarification services in Kolkata and navigate the complexities of income tax compliance with confidence.')
@section('long_keywords', 'Income tax notice handling in Kolkata, How to respond to income tax notices in Kolkata, Best income tax notice and clarification services in Kolkata, Requirements for income tax notice resolution in Kolkata, Steps to address income tax notices in Kolkata, Professional assistance for income tax notices in Kolkata, Benefits of resolving income tax notices in Kolkata, Legal aspects of income tax notices in Kolkata, Kolkata income tax consultants for notices')
@section('short_keywords', 'Income tax notice Kolkata, Tax clarification services, Income tax consultants Kolkata, Notice assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure prompt and effective handling of income tax notices and clarifications in Kolkata with our expert assistance at 360 Business and Services. We specialize in providing guidance and support to individuals and businesses facing income tax-related notices or seeking clarifications from tax authorities. Whether you have received a notice regarding tax assessment, discrepancies in returns, or compliance issues, or you require clarification on income tax rules and regulations, our experienced team is here to help. We will assist you in understanding the notice, preparing a suitable response, and liaising with tax authorities to resolve the matter efficiently. With our expertise in income tax matters, we will ensure that you address the notice or clarification accurately and in a timely manner, minimizing any potential penalties or disruptions to your financial affairs. Partner with us for the best income tax notice and clarification services in Kolkata and navigate the complexities of income tax compliance with confidence.')


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
                                <h2 class="title">Income Tax Notice & Clarification</h2>
                                <p>An Income Tax Notice is an official communication from the tax authorities regarding discrepancies or queries in a taxpayer’s filings. It may require clarification, additional information, or rectification of errors. Responding promptly and accurately to such notices is essential to ensure compliance with tax regulations and avoid penalties. Taxpayers should carefully review the notice, seek professional advice if needed, and provide the requested information or explanations within the specified timeframe to resolve the matter effectively.</p>
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
                                                        What are Income Tax Notices, and why are they issued?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Income Tax Notices are official communications issued by the Income Tax Department to taxpayers to seek clarification, provide information, or address compliance issues related to income tax laws and regulations. They are issued to ensure compliance with tax provisions and address any discrepancies or non-compliance detected by the tax authorities.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What types of Income Tax Notices can taxpayers receive?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Taxpayers can receive various types of Income Tax Notices, including notices for non-filing or delayed filing of income tax returns, discrepancies in reported income or deductions, mismatch in tax payments and declared income, requests for additional information or documents, and scrutiny assessments.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What should taxpayers do upon receiving an Income Tax Notice?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Upon receiving an Income Tax Notice, taxpayers should carefully review the notice to understand the nature of the issue or query raised by the tax authorities. They should promptly respond to the notice within the specified timeframe, provide the requested information or clarification, and take necessary actions to rectify any non-compliance or discrepancies identified.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the consequences of non-compliance with Income Tax Notices?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Non-compliance with Income Tax Notices can lead to penalties, fines, interest charges, and legal actions by the tax authorities. It may also result in adverse impacts on the taxpayer's tax liabilities, refund claims, and compliance status. Therefore, it is essential for taxpayers to promptly address and resolve any issues raised in Income Tax Notices to avoid potential repercussions.</p>
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
