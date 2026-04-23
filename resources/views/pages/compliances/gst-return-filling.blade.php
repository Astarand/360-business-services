@extends('layouts.app')

@section('title', 'GST Return Fillings - 360 Business and Services')
@section('meta_description', 'Ensure accurate and timely GST return filings in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of Goods and Services Tax (GST) compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are a small business, a corporation, or a sole proprietorship, our experienced team provides reliable support for all your GST return filing needs. From preparing GST returns to verifying input tax credits and reconciling financial records, we ensure that your filings are completed efficiently and accurately. With our streamlined solutions, navigating the intricacies of GST return filings becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best GST return filing services in Kolkata and ensure compliance with GST laws.')
@section('long_keywords', 'GST return filing process in Kolkata, How to file GST returns in Kolkata, Best GST filing services in Kolkata, Requirements for GST return filings in Kolkata, Steps to complete GST return filings in Kolkata, GST return filing cost in Kolkata, Professional assistance for GST return filings in Kolkata, Benefits of GST return filings in Kolkata, Legal aspects of GST return filings in Kolkata, Kolkata GST consultants')
@section('short_keywords', 'GST return filing Kolkata, GST filing services, GST compliance assistance, GST consultants Kolkata')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure accurate and timely GST return filings in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of Goods and Services Tax (GST) compliance, ensuring adherence to regulatory requirements and deadlines. Whether you are a small business, a corporation, or a sole proprietorship, our experienced team provides reliable support for all your GST return filing needs. From preparing GST returns to verifying input tax credits and reconciling financial records, we ensure that your filings are completed efficiently and accurately. With our streamlined solutions, navigating the intricacies of GST return filings becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best GST return filing services in Kolkata and ensure compliance with GST laws.')



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
                                <h2 class="title">GST Return Fillings</h2>
                                <p>GST return filing is a vital aspect of Goods and Services Tax (GST) compliance for businesses in India. It involves the periodic submission of details related to sales, purchases, and tax payments to the tax authorities. Timely and accurate filing ensures businesses comply with GST regulations and avoid penalties. Furthermore, GST return filing provides businesses with a transparent record of tax liabilities and input tax credits, helping to facilitate smooth operations and effective financial planning.</p>
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
                                                        What is GST Return Filing?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>GST Return Filing refers to the process of reporting details of sales, purchases, and tax liabilities to the government under the Goods and Services Tax (GST) regime. It is necessary for businesses registered under GST to comply with tax regulations and fulfill their reporting obligations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Who needs to file GST returns?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>All businesses registered under GST, including manufacturers, traders, service providers, and online sellers, need to file GST returns. The frequency and types of returns to be filed depend on the turnover and nature of the business.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the types of GST returns and their frequencies?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The types of GST returns and their frequencies include GSTR-1 (monthly/quarterly), GSTR-3B (monthly), GSTR-4 (quarterly for composition taxpayers), GSTR-9 (annual), and GSTR-9C (annual reconciliation statement for taxpayers above a certain turnover).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the consequences of non-compliance with GST return filing?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Non-compliance with GST return filing may result in penalties, fines, and legal actions by the tax authorities. It can also lead to the suspension or cancellation of GST registration, loss of input tax credit, and disruptions in business operations. Additionally, non-compliance may affect the business's reputation and credibility.</p>
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
