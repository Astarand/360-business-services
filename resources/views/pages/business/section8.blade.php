@extends('layouts.app')

@section('title', 'Section 8 Company Registration - 360 Business and Services')
@section('meta_description', 'Empower your vision for social change in Kolkata with 360 Business and Services. assistance in registering your Section 8 Company. Our dedicated team offers comprehensive support, ensuring meticulous handling of all legal formalities. From documentation to setup, trust us to provide reliable guidance at every step. Establishing a Section 8 Company in Kolkata has never been easier with our professional expertise. Embrace the opportunity to make a positive impact on society by registering your company with us. With our assistance, setting up a Section 8 Company in Kolkata becomes a seamless endeavor. Join the league of organizations dedicated to driving meaningful social change and community development today!')
@section('long_keywords', 'Section 8 company registration process in Kolkata, How to register a Section 8 company in Kolkata, Best Section 8 company registration services in Kolkata, Requirements for Section 8 company registration in Kolkata, Steps to start a Section 8 company in Kolkata, Section 8 company registration cost in Kolkata, Professional assistance for Section 8 company registration in Kolkata, Benefits of Section 8 company registration in Kolkata, Legal aspects of Section 8 company registration in Kolkata, Kolkata Section 8 company registration consultant')
@section('short_keywords', 'Section 8 Company registration Kolkata, Register Section 8 Company in Kolkata, Section 8 Company registration services, Kolkata business registration, Section 8 Company setup assistance, Section 8 Company incorporation Kolkata, Register as Section 8 Company in Kolkata, Kolkata Section 8 Company registration, Business registration consultants Kolkata, Kolkata Section 8 Company formation')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Empower your vision for social change in Kolkata with 360 Business and Services. assistance in registering your Section 8 Company. Our dedicated team offers comprehensive support, ensuring meticulous handling of all legal formalities. From documentation to setup, trust us to provide reliable guidance at every step. Establishing a Section 8 Company in Kolkata has never been easier with our professional expertise. Embrace the opportunity to make a positive impact on society by registering your company with us. With our assistance, setting up a Section 8 Company in Kolkata becomes a seamless endeavor. Join the league of organizations dedicated to driving meaningful social change and community development today!')


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
                                <h2 class="title">Section 8 company </h2>
                                <p>Incorporate a legally recognized NGO focused on social impact, charity, and public welfare.</p>
                                <p>A Section 8 Company is a non-profit organization (NPO) registered under Section 8 of the Companies Act, 2013, with the primary objective of promoting charitable causes, including education, environment, health, arts, sports, research, and social welfare. Unlike traditional companies, a Section 8 company does not distribute profits or dividends to its members. Instead, all income and donations are reinvested in furthering the organization’s goals.</p>
                                <h6>Price Starting from ₹10,999/-</h6>
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

                                                    <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                                    <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Online & Offline Services Available</li>
                                                    <li class="justify-content-lg-start"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Hand holding post services</li>
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
                                                        What is a Section 8 Company?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Widely Known As Section-8 Companies, These Organizations Are Registered Under The Section-8 Of Companies Act 2013. These Companies Intend To Promote Art, Commerce, Sports, Safety, Science, Research, Healthcare, Social Welfare, Religion, Protection Of The Environment, Etc. The Main Object Of These Companies Ensure The Promotion Of Above-Mentioned Fields, Provided The Profit Is Used For Promoting Only Objects Of The Company (Sec 8(1)(B)). Sec 8 (1) (C) States The Prohibition Of Payment Of Any Dividend To Its Members. Ministry Of Corporate Affairs (MCA), Administers And Maintains The Rules And Regulations Through ROC In All Of The States Of India.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Concerns Related to Section 8 Company
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li> Profit Or Income Of The Section 8 Company Cannot Be Used For Any Object Other Than Those Mentioned In Its MOA.</li>
                                                            <li>Distribution Of Profits Or Declaration Of Dividend To Its Members Is Prohibited</li>
                                                            <li>No Member Can Be Appointed As An Office Of The Company With Any Remuneration.</li>
                                                            <li>Its Income Is Taxed At The Same Rates As Other Companies</li>
                                                            <li>A Section 8 Company Cannot Alter The Provisions Of Its MOA And AOA Except With The Previous Approval Of The Central Government.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Advantage of Section 8 Company
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>No Minimum Share Capital Requirement</li>
                                                            <li>Easy Transfer Of Ownership</li>
                                                            <li>Tax Benefits</li>
                                                            <li>No Stamp Duty</li>
                                                            <li>Clear Objectives For Easy Donations And Loans</li>
                                                            <li>Easy To Manage</li>
                                                            <li>Exemptions And Privileges Under Companies Act, 2013</li>
                                                            <li>Relaxation In Compliances</li>
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
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 my-auto">
                                <ul class="list-wrap1">
                                    <h6>Documents for Directors:</h6>
                                    <li>Voter ID / Aadhar card / Passport copy</li>
                                    <li>PAN Card</li>
                                    <li>Passport Size photo</li>
                                    <li>Latest bank statement</li>
                                    <li>Valid Mobile No & Mail ID</li>
                                    <p><strong>** All the above papers should be self-attested.</strong></p>
                                    <li>Property Deed & Mutation copy, if owned.</li>
                                    <li>Notarized Rent Agreement</li>
                                    <li>Notarized Office NOC by the rent owner.</li>
                                    <li>Latest Rent Invoice</li>
                                    <li>Latest office property tax receipt</li>
                                    <li>Latest Office Electricity bill</li>
                                    <li>Office Images</li>
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
