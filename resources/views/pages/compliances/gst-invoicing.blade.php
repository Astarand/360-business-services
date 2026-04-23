@extends('layouts.app')

@section('title', 'GST Invoicing - 360 Business and Services')
@section('meta_description', 'Ensure accurate and compliant GST invoicing in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of GST (Goods and Services Tax) invoicing, ensuring adherence to regulatory requirements and standards. Whether you are a small business, a corporation, or a sole proprietorship, our experienced team provides reliable support for all your GST invoicing needs. From generating GST-compliant invoices to incorporating necessary details such as GSTIN, HSN codes, and tax rates, we ensure that your invoicing process is efficient and compliant. With our streamlined solutions, navigating the intricacies of GST invoicing becomes hassle-free, allowing you to focus on serving your customers and growing your business. Partner with us for the best GST invoicing services in Kolkata and ensure compliance with GST laws.')
@section('long_keywords', 'GST invoicing process in Kolkata, How to generate GST invoices in Kolkata, Best GST invoicing services in Kolkata, Requirements for GST invoicing in Kolkata, Steps to create GST invoices in Kolkata, GST invoicing software in Kolkata, Professional assistance for GST invoicing in Kolkata, Benefits of GST invoicing in Kolkata, Legal aspects of GST invoicing in Kolkata, Kolkata GST invoice consultants')
@section('short_keywords', 'GST invoicing Kolkata, GST invoice generation, Invoicing compliance, GST invoice consultants Kolkata')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure accurate and compliant GST invoicing in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of GST (Goods and Services Tax) invoicing, ensuring adherence to regulatory requirements and standards. Whether you are a small business, a corporation, or a sole proprietorship, our experienced team provides reliable support for all your GST invoicing needs. From generating GST-compliant invoices to incorporating necessary details such as GSTIN, HSN codes, and tax rates, we ensure that your invoicing process is efficient and compliant. With our streamlined solutions, navigating the intricacies of GST invoicing becomes hassle-free, allowing you to focus on serving your customers and growing your business. Partner with us for the best GST invoicing services in Kolkata and ensure compliance with GST laws.')
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
                                <h2 class="title">GST Invoicing</h2>
                                <p>GST invoicing refers to the process of creating invoices that comply with Goods and Services Tax regulations. These invoices include essential details such as tax rates, HSN codes, and business information to ensure legal compliance with GST laws. Accurate GST invoicing is crucial for proper tax documentation and smooth business operations.</p>
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
                                                        What is GST Invoicing?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>GST Invoicing refers to the process of creating and issuing invoices for the supply of goods or services under the Goods and Services Tax (GST) regime. It is important for businesses to comply with GST regulations, maintain proper records, and facilitate seamless tax compliance and input tax credit (ITC) claims.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the key components of a GST-compliant invoice?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A GST-compliant invoice must contain key details such as the supplier's name, address, GSTIN (Goods and Services Tax Identification Number), invoice number, date of issue, recipient's name and address, HSN (Harmonized System of Nomenclature) code or SAC (Service Accounting Code) for goods or services, description and quantity of goods or services, taxable value, GST rate, and amount of GST charged.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the different types of GST invoices?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The different types of GST invoices include tax invoices for taxable supplies, bill of supply for exempt or non-GST supplies, export invoices for exports, and debit/credit notes for adjustments or corrections to previous invoices. Each type of invoice has specific requirements and implications under GST regulations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the consequences of issuing incorrect or non-compliant GST invoices?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Issuing incorrect or non-compliant GST invoices may result in penalties, fines, and legal actions by the tax authorities. It can also lead to denial of input tax credit (ITC) claims, disruption of business operations, and damage to the reputation and credibility of the business.</p>
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
