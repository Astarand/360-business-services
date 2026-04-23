@extends('layouts.app')

@section('title', 'One Person Company Registration - 360 Business and Services')
@section('meta_description', 'Ready to embark on your entrepreneurial journey in Kolkata? Let 360 Business and Services simplify the registration process for your One Person Company (OPC). Our expert team offers comprehensive assistance, ensuring all legal formalities are meticulously handled. From documentation to setup, trust us to provide reliable support at every step. Establishing an OPC in Kolkata has never been easier with our professional guidance. Enjoy the benefits of limited liability and full control by registering your OPC with us. With our expertise, setting up an OPC in Kolkata becomes a hassle-free endeavor. Take the first step towards realizing your business dreams today!')
@section('long_keywords', 'OPC company registration process in Kolkata, How to register an OPC business in Kolkata, Best OPC registration services in Kolkata, Requirements for OPC registration in Kolkata, Steps to start an OPC in Kolkata, OPC registration cost in Kolkata, Professional assistance for OPC registration in Kolkata, Benefits of OPC registration in Kolkata, Legal aspects of OPC registration in Kolkata, Kolkata OPC registration consultant')
@section('short_keywords', 'OPC registration Kolkata, Register OPC in Kolkata, OPC registration services, Kolkata business registration, OPC setup assistance, OPC incorporation Kolkata, Register as OPC in Kolkata, Kolkata OPC registration, Business registration consultants Kolkata, Kolkata OPC formation')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ready to embark on your entrepreneurial journey in Kolkata? Let 360 Business and Services simplify the registration process for your One Person Company (OPC). Our expert team offers comprehensive assistance, ensuring all legal formalities are meticulously handled. From documentation to setup, trust us to provide reliable support at every step. Establishing an OPC in Kolkata has never been easier with our professional guidance. Enjoy the benefits of limited liability and full control by registering your OPC with us. With our expertise, setting up an OPC in Kolkata becomes a hassle-free endeavor. Take the first step towards realizing your business dreams today!')


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
                                <h2 class="title">One Person Company (OPC)</h2>
                                <p>Build your own company — with full control and limited liability.</p>
                                <p>A One Person Company (OPC) is a unique legal structure introduced under the Companies Act, 2013, enabling a single individual to register a private limited company. It offers the benefits of limited liability, corporate status, and continuity — without the need for multiple shareholders.</p>
                                <p>Ideal for solo entrepreneurs, consultants, freelancers, and small business owners, an OPC allows you to scale your operations professionally while retaining complete ownership.</p>
                                <h6>Price Starting from ₹9,999/-</h6>
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
                                                        What is What is One Person Company (OPC)?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A One Person Company Is A Company With A Single Member. It Was Introduced By The Companies Act, 2013. OPC Extends The Concept Of Limited Liability To A Company Run By A Single Person. It Is Similar In Respects To A Private Limited Company With Certain Differences Like Fewer Compliances And Relaxation Of Certain Restrictions. Thus, An OPC Is Subject To All The Provisions Of The Act Like A Private Limited Company Unless Expressly Excluded.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Who can start a OPC Company in India?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>This Is One Of The Most Important Question That Is Asked By Every Person Who Is Willing To Start A OPC In India.Through There Is No Restriction On Anybody To Form A Company In India, But Still, We Would Like To Discuss Some Special Cases:</li>
                                                            <li><strong>Existing Directors: </strong>Yes, They Can Open The OPC But If They Already Own One, Then Any Further OPC Is Not Allowed.</li>
                                                            <li><strong>Employees: </strong>Employees Are Generally Not Allowed By Their Employers To Form A Company And Be A Director. They May Hold Shares But Cannot Take Position As Director. If You Want To Open A Company, Then Check Your Employment Agreement And You May Also Seek Permission From The Respective Employer.</li>
                                                            <li>Companies, Firms: As Per Companies, Act, 2013 Only Individual Can Form A OPC.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        ADVANTAGES & BENEFITS of OPC
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>Limited Liability Protection To Directors Personal Assets</li>
                                                            <li>Better Image And Credibility In Market</li>
                                                            <li>Complete Control Of The Company With A Single Owner</li>
                                                            <li>Easy To Manage And Freedom From Compliances</li>
                                                            <li>Easy To Sell OPC: OPC Company Is Easy To Sell, Very Less Documentation And Cost Is Involved In Selling A One Person Company.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Disadvantage of One Person Company
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap1">
                                                            <li>One Director Must Be A Indian Resident.</li>
                                                            <li>Statutory Compliance Are High.</li>
                                                            <li>Costing Is High As Compare To LLP/Firms.</li>
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
                                    <li>Notarized Rent agreement</li>
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
