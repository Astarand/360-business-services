@extends('layouts.app')

@section('title', 'Partnership Registration - 360 Business and Services')
@section('meta_description', 'Ready to embark on a collaborative business venture in Kolkata? Let 360 Business and Services facilitate the seamless registration of your Partnership company. Our seasoned team offers comprehensive assistance, ensuring all legal formalities are handled with precision. From documentation requirements to setup assistance, rely on us for reliable support every step of the way. Establishing a Partnership business in Kolkata has never been easier with our expert guidance. Gain the advantages of shared responsibility and expertise by registering your Partnership with us today. Trust in our experience and let us pave the way for your joint entrepreneurial journey!')
@section('long_keywords', 'Partnership company registration process in Kolkata, How to register a Partnership business in Kolkata, Best Partnership registration services in Kolkata, Requirements for Partnership registration in Kolkata, Steps to start a Partnership in Kolkata, Partnership registration cost in Kolkata, Professional assistance for Partnership registration in Kolkata, Benefits of registering as a Partnership in Kolkata, Legal aspects of Partnership registration in Kolkata, Kolkata Partnership registration consultant')
@section('short_keywords', 'Partnership registration Kolkata, Register Partnership in Kolkata, Partnership registration services, Kolkata business registration, Partnership setup assistance, Partnership incorporation Kolkata, Register as Partnership in Kolkata, Kolkata partnership registration, Business registration consultants Kolkata, Kolkata Partnership formation')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ready to embark on a collaborative business venture in Kolkata? Let 360 Business and Services facilitate the seamless registration of your Partnership company. Our seasoned team offers comprehensive assistance, ensuring all legal formalities are handled with precision. From documentation requirements to setup assistance, rely on us for reliable support every step of the way. Establishing a Partnership business in Kolkata has never been easier with our expert guidance. Gain the advantages of shared responsibility and expertise by registering your Partnership with us today. Trust in our experience and let us pave the way for your joint entrepreneurial journey!')


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
                                <h2 class="title">Partnership Registration</h2>
                                <p>Start your business with a trusted partner and shared success through Partnership Firm Registration.</p>
                                <p>A Partnership Firm is a legally recognized business structure where two or more individuals come together to manage, operate, and grow a business with shared responsibilities, profits, and risks. The terms and roles are defined in a legally binding Partnership Deed, ensuring transparency and accountability.</p>
                                <h6>Price Starting from ₹2,499/-</h6>
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
                                                        What is a partnership firm?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Partnership Firm Is A Business Structure In Which Two Or More Individuals Manage And Operate A Business In Accordance With The Terms And Objectives Set Out In A Partnership Deed That May Or May Not Be Registered. In Such A Business, The Members Are Individually Partners And Share The Liabilities As Well As Profits Of The Firm In A Predetermined Ratio.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Why should I set up a partnership firm?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Partnership Firm Is Best For Small Businesses That Plan To Remain Small. Low Costs, Ease Of Setting Up And Minimal Compliance Requirements Make It A Sensible Option For Such Businesses. Registration Is Optional For General Partnerships. It Is Governed By Section 4 Of The Partnership Act, 1932. For Larger Businesses, It Has Lost Its Relevance With The Introduction Of The Limited Liability Partnership (LLP). This Is Because An LLP Retains The Low Costs Of A Partnership While Providing The Benefit Of Unlimited Liability, Which Means That Partners Are Not Personally Liable For The Debts Of The Business.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Is a partnership firm a separate entity?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The Partners In A Partnership Firm Are The Owners, And Thus, Are Not Separate Entity From The Firm. Any Legal Issues Or Debt Incurred By The Firm Is The Responsibility Of Its Owners, The Partners.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Is partnership firm registration necessary?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>No, Registration Of A Partnership Is Not Necessary. However, For A Partner To Sue Another Partner Or The Firm Itself, The Partnership Should Be Registered. Moreover, For The Partnership To Bring Any Suit To Court, The Firm Should Be Registered. For This Reason, It Is Recommended That Larger Businesses Register The Partnership Deed.</p>
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
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 my-auto">
                                <h6>Partner's details (Name,Father's name,Date of Birth,Full address with Pin & PS, Religion,Profession)</h6>
                               <ul class="list-wrap1">

                                   <li>Full Office address</li>
                                   <li>Organization's name</li>
                                   <li>Nature of Business</li>
                                   <li>Description of Business</li>
                                   <li>Share Ratio (%)</li>
                                   <li>Total Investment capital in time of starting the business</li>
                                   <li><strong>Any specific clause/Condition,if you want.send us also.</strong></li>
                               </ul>
                                <h6><strong>Required the KYC ( Pan Card & Aadhar card) of all Partners & Passport size photo</strong></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- main-area-end -->

@endsection
