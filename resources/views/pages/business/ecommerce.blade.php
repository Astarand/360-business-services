@extends('layouts.app')

@section('title', 'E-Commerce Business Registration - 360 Business and Services')
@section('meta_description', 'Embark on your journey into the world of online commerce with 360 Business and Services.
expert assistance in registering your E-Commerce business in Kolkata. Our dedicated team offers comprehensive support,
ensuring all legal formalities are meticulously handled. From documentation to setup, trust us to provide reliable
guidance at every step. Establishing an E-Commerce business in Kolkata has never been easier with our professional
expertise. Seize the opportunity to tap into the vast potential of the digital marketplace by registering your venture
with us. With our assistance, setting up an E-Commerce business in Kolkata becomes a seamless endeavor. Join the ranks
of successful online entrepreneurs and start building your digital storefront today!')
@section('long_keywords', 'E-Commerce company registration process in Kolkata, How to register an E-Commerce business in
Kolkata, Best E-Commerce registration services in Kolkata, Requirements for E-Commerce registration in Kolkata, Steps to
start an E-Commerce in Kolkata, E-Commerce registration cost in Kolkata, Professional assistance for E-Commerce
registration in Kolkata, Benefits of E-Commerce registration in Kolkata, Legal aspects of E-Commerce registration in
Kolkata, Kolkata E-Commerce registration consultant')
@section('short_keywords', 'E-Commerce registration Kolkata, Register E-Commerce in Kolkata, E-Commerce registration
services, Kolkata business registration, E-Commerce setup assistance, E-Commerce incorporation Kolkata, Register as
E-Commerce in Kolkata, Kolkata E-Commerce registration, Business registration consultants Kolkata, Kolkata E-Commerce
formation')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Embark on your journey into the world of online commerce with 360 Business and Services.
expert assistance in registering your E-Commerce business in Kolkata. Our dedicated team offers comprehensive support,
ensuring all legal formalities are meticulously handled. From documentation to setup, trust us to provide reliable
guidance at every step. Establishing an E-Commerce business in Kolkata has never been easier with our professional
expertise. Seize the opportunity to tap into the vast potential of the digital marketplace by registering your venture
with us. With our assistance, setting up an E-Commerce business in Kolkata becomes a seamless endeavor. Join the ranks
of successful online entrepreneurs and start building your digital storefront today!')


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
                                        <label class="form-check-label justify-content-start mb-0"
                                            for="flexSwitchCheckChecked">Get Easy Update through <img
                                                src="{{ asset('assets/img/icons/whatsapp.png') }}"> Whatsapp</label>
                                        <div class="ms-5">
                                            <input class="form-check-input" name="whatsapp_update" type="checkbox"
                                                role="switch" id="flexSwitchCheckChecked" checked>
                                        </div>
                                    </div>

                                    <button type="submit" class="submit-btn" id="registerFormSubmit">Send
                                        Message</button>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-7 order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">E-Commerce Business</h2>
                            <p>Launch your online store with expert support and tap into the digital marketplace.</p>
                            <p>An E-Commerce Business enables the buying and selling of goods or services over the
                                internet, offering entrepreneurs 24/7 access to a global customer base. With the rise of
                                digital adoption, mobile usage, and online payments, setting up an e-commerce platform
                                has become one of the most profitable and scalable business models today.</p>
                            <p>Whether you're selling physical products, digital goods, or offering services, a legally
                                structured and well-branded e-commerce business can drive sustainable growth and
                                customer loyalty.</p>

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
                                                                <li
                                                                    style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">
                                                                    Total payment may vary depending on government fees
                                                                    and the entity of the company.</li>
                                                                <li
                                                                    style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">
                                                                    Downtime on the government portal may cause work
                                                                    delays.</li>
                                                                <li
                                                                    style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">
                                                                    Documents should be appropriate as per the
                                                                    requirements.</li>
                                                                <li
                                                                    style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">
                                                                    Documents must be provided in time to avoid delay.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="justify-content-lg-center"><img
                                                        src="{{ asset('assets/img/icons/check_icon.svg') }}"
                                                        alt="">Professional and experienced team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-btn-two d-flex justify-content-start">
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#DocModal">Required Documents for apply</a>
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
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    What is E-Commerce, and how does it work?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>E-Commerce, or electronic commerce, refers to the buying and
                                                        selling of goods and services over the internet. It involves the
                                                        online transactions of goods and services between businesses,
                                                        consumers, or individuals. E-Commerce platforms facilitate
                                                        transactions by providing an online marketplace or storefront
                                                        where buyers and sellers can interact and conduct business.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the different types of E-Commerce models?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Business-to-Consumer (B2C): Businesses sell products or
                                                            services directly to consumers through online platforms.
                                                        </li>
                                                        <li>Business-to-Business (B2B): Businesses sell products or
                                                            services to other businesses through online marketplaces or
                                                            specialized platforms.</li>
                                                        <li>Consumer-to-Consumer (C2C): Consumers sell products or
                                                            services to other consumers through online platforms or
                                                            marketplaces.</li>
                                                        <li>Consumer-to-Business (C2B): Consumers offer products or
                                                            services to businesses, such as freelancers offering
                                                            services to companies through online platforms.</li>
                                                        <li>Business-to-Government (B2G): Businesses sell products or
                                                            services to government entities through online procurement
                                                            portals or marketplaces.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    What are the key components of an E-Commerce business?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Online storefront or platform: A website or mobile app where
                                                            products or services are listed and transactions are
                                                            conducted.</li>
                                                        <li>Product catalog: A database or collection of products or
                                                            services available for sale, including descriptions, images,
                                                            and prices.</li>
                                                        <li>Payment gateway: A secure payment processing system that
                                                            allows customers to make online payments using credit/debit
                                                            cards, digital wallets, or other payment methods.</li>
                                                        <li>Order management system: Software or platform that manages
                                                            orders, inventory, shipping, and fulfillment processes.</li>
                                                        <li>Customer support: Channels for providing customer service
                                                            and support, such as live chat, email, or phone support.
                                                        </li>
                                                        <li>Marketing and promotion: Strategies and tactics for driving
                                                            traffic to the online store, acquiring customers, and
                                                            promoting products through digital marketing, social media,
                                                            and other channels.</li>
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

            </div>
        </div>
    </section>
    <!-- services-details-area-end -->
    <div class="modal fade" id="DocModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 my-auto">
                            <h6>Documents for Owner:</h6>
                            <li>Business Registration Documents</li>
                            <li>GST (Goods and Services Tax) Registration</li>
                            <li>PAN (Permanent Account Number)</li>
                            <li>Trade License & Professional Tax Registration/li>
                            <li>Bank Account and Payment Gateway Integration</li>
                            <li>Shop and Establishment License</li>
                            <li>FSSAI (Food Business) Registration (If applicable)</li>
                            <li>Import/Export Code (IEC) (If applicable)</li>
                            <li>Trademark Registration (Optional, but recommended)</li>
                            <li>Product-Specific Certification</li>
                            <li>Latest Office Electricity bill</li>
                            <li>Legal Documents for Contracts</li>
                            <li>Digital Signature Certificate (DSC)</li>
                            <li>Return and Refund Policy</li>
                            <li>Business Website / App</li>
                            <li>Inventory Management and Warehouse Documentation</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- main-area-end -->

@endsection