@extends('layouts.app')

@section('title', 'Nidhi Company Registration - 360 Business and Services')
@section('meta_description', 'Ready to foster financial inclusivity in Kolkata? Let 360 Business and Services facilitate the seamless registration of your Nidhi Company. Our expert team offers comprehensive assistance, ensuring all legal formalities are meticulously handled. From documentation to setup, trust us to provide reliable support at every step. Establishing a Nidhi Company in Kolkata has never been easier with our professional guidance. Embrace the mission of promoting thrift and mutual benefit by registering your company with us. With our expertise, setting up a Nidhi Company in Kolkata becomes a hassle-free endeavor. Join the league of organizations dedicated to serving the community financial needs today!')
@section('long_keywords', 'Nidhi company registration process in Kolkata, How to register a Nidhi company in Kolkata, Best Nidhi company registration services in Kolkata, Requirements for Nidhi company registration in Kolkata, Steps to start a Nidhi company in Kolkata, Nidhi company registration cost in Kolkata, Professional assistance for Nidhi company registration in Kolkata, Benefits of Nidhi company registration in Kolkata, Legal aspects of Nidhi company registration in Kolkata, Kolkata Nidhi company registration consultant')
@section('short_keywords', 'Nidhi Company registration Kolkata, Register Nidhi Company in Kolkata, Nidhi Company registration services, Kolkata business registration, Nidhi Company setup assistance, Nidhi Company incorporation Kolkata, Register as Nidhi Company in Kolkata, Kolkata Nidhi Company registration, Business registration consultants Kolkata, Kolkata Nidhi Company formation')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ready to foster financial inclusivity in Kolkata? Let 360 Business and Services facilitate the seamless registration of your Nidhi Company. Our expert team offers comprehensive assistance, ensuring all legal formalities are meticulously handled. From documentation to setup, trust us to provide reliable support at every step. Establishing a Nidhi Company in Kolkata has never been easier with our professional guidance. Embrace the mission of promoting thrift and mutual benefit by registering your company with us. With our expertise, setting up a Nidhi Company in Kolkata becomes a hassle-free endeavor. Join the league of organizations dedicated to serving the communitys financial needs today!')


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
                                        <label class="form-check-label justify-content-start mb-0" for="flexSwitchCheckChecked">Get Easy Update through <img src="{{ asset('assets/img/icons/whatsapp.png') }}"> Whatsapp</label>
                                        <div class="ms-5">
                                            <input class="form-check-input" name="whatsapp_update" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        </div>
                                    </div>

                                    <button type="submit" class="submit-btn" id="registerFormSubmit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-7  order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">Nidhi Company</h2>
                            <p>Promote community savings and secure lending through a trusted mutual benefit company.</p>
                            <p>A Nidhi Company is a Non-Banking Financial Company (NBFC) registered under Section 406 of the Companies Act, 2013 and governed by the Nidhi Rules, 2014. Its core purpose is to encourage savings among its members and provide secured, low-interest loans to them. Based on the principles of mutual benefit and trust, a Nidhi Company offers a simple, community-focused financial model ideal for small-scale credit and savings activities.</p>

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
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What is a Nidhi Company?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>A Nidhi Company Is A Public Limited Company Which Is Formed With A Sole Purpose Of Accepting Deposit And Lending Money Only To Its Members. It Is Also An Non Banking Financial Company (NBFC) Which Has Been Exempted From The Provisions Of RBI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Requirements for Nidhi Company
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>A Nidhi Company That Has To Be Incorporated Under This Act Shall Be A Public Company</li>
                                                        <li>It Must Have A Minimum Paid Up Equity Share Capital Of Rs.5,00,000/-</li>
                                                        <li>There Will Be No Issuances Of Preference Shares. If Such Shares Had Already Been Issued By A Nidhi Company Before Commencement Of This Act, Such Preference Shares Are To Be Redeemed In Accordance With The Terms Of Issue Of Such Shares</li>
                                                        <li>The Objective Of Such A Firm Would Be To Imbibe In The Members A Habit Of Thrift And Saving And The Services Would Only Be Restricted To Its Members.</li>
                                                        <li> The Name Must Have Nidhi Limited</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Advantages of Nidhi Company
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Can Accept Deposits</li>
                                                        <li>Less Capital Required</li>
                                                        <li> Base To Establish NBFC</li>
                                                        <li>Best To Finance Business</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Disadvantages of Nidhi Company
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Cannot Run Micro Finance</li>
                                                        <li>More Restriction On Business</li>
                                                        <li>Cannot Invest In Any Company</li>
                                                        <li>No Advertisement Allowed</li>
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
                                <li>NotarizedRent agreement</li>
                                <li>NotarizedOffice NOC by the rent owner.</li>
                                <li>Latest Rent Invoice</li>
                                <li>Latest office property tax receipt</li>
                                <li>Latest Office Electricity bill</li>
                                <li>Office Images</li>
                                <li class="pt-4"><strong>Minimum 3 Directors</strong></li>
                                <li><strong>Minimum 7 Share Holders.</strong></li>
                                <li><strong>Minimum ₹10 Lakhs Paid up capital</strong></li>
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