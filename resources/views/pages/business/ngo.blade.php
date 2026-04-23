@extends('layouts.app')

@section('title', 'NGO & Trust Registration - 360 Business and Services')
@section('meta_description', 'Empower your philanthropic endeavors in Kolkata with 360 Business and Services. seamless assistance in registering your NGO or Trust. Our dedicated team offers comprehensive support, ensuring meticulous handling of all legal formalities. From documentation to setup, trust us to provide reliable guidance at every step. Establishing an NGO or Trust in Kolkata has never been easier with our professional expertise. Embrace the opportunity to make a positive impact on society by registering your organization with us. With our assistance, setting up an NGO or Trust in Kolkata becomes a seamless endeavor. Join the league of organizations dedicated to driving meaningful social change, community development, and humanitarian efforts today!')
@section('long_keywords', 'NGO registration process in Kolkata, Trust registration process in Kolkata, How to register an NGO in Kolkata, How to register a Trust in Kolkata, Best NGO registration services in Kolkata, Best Trust registration services in Kolkata, Requirements for NGO registration in Kolkata, Requirements for Trust registration in Kolkata, Steps to start an NGO in Kolkata, Steps to start a Trust in Kolkata, NGO registration cost in Kolkata, Trust registration cost in Kolkata, Professional assistance for NGO registration in Kolkata, Professional assistance for Trust registration in Kolkata, Benefits of NGO registration in Kolkata, Benefits of Trust registration in Kolkata, Legal aspects of NGO registration in Kolkata, Legal aspects of Trust registration in Kolkata, Kolkata NGO registration consultant, Kolkata Trust registration consultant')
@section('short_keywords', 'NGO registration Kolkata, Trust registration Kolkata, Register NGO in Kolkata, Register Trust in Kolkata, NGO registration services, Trust registration services, Kolkata business registration, NGO setup assistance, Trust setup assistance, NGO incorporation Kolkata, Trust incorporation Kolkata, Register as NGO in Kolkata, Register as Trust in Kolkata, Kolkata NGO registration, Kolkata Trust registration, Business registration consultants Kolkata, Kolkata NGO formation, Kolkata Trust formation')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Empower your philanthropic endeavors in Kolkata with 360 Business and Services. seamless assistance in registering your NGO or Trust. Our dedicated team offers comprehensive support, ensuring meticulous handling of all legal formalities. From documentation to setup, trust us to provide reliable guidance at every step. Establishing an NGO or Trust in Kolkata has never been easier with our professional expertise. Embrace the opportunity to make a positive impact on society by registering your organization with us. With our assistance, setting up an NGO or Trust in Kolkata becomes a seamless endeavor. Join the league of organizations dedicated to driving meaningful social change, community development, and humanitarian efforts today!')


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
                <div class="col-lg-7 order-lg-0 order-0">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <h2 class="title">NGO Registration Services</h2>
                            <p>Transform your social vision into a legally recognized organization with our comprehensive NGO and Trust registration services.</p>
                            <p>Establishing a Non-Governmental Organization (NGO) or Trust is a powerful way to create lasting social impact in India. These organizations serve as vital pillars in addressing societal challenges across education, healthcare, environmental conservation, women empowerment, child welfare, and community development.</p>

                            <h6>Complete Registration Package Starting from ₹9,499/-</h6>
                            <div class="sd-inner-wrap sd-inner-wrap-four">
                                <div class="row">
                                    <div class="col-12 pb-10">
                                        <div class="content">
                                            <ul class="list-wrap">
                                                <li>
                                                    <img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">
                                                    Complete documentation and legal compliance support&nbsp;
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
                                                    What is an NGO (Non-Governmental Organization) and a Trust?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>An NGO is a non-profit organization that operates independently of government control and aims to address social, environmental, or humanitarian issues. A Trust is a legal entity created by a settlor (or founder) to hold assets and property for the benefit of beneficiaries, which could include charitable purposes. The purpose of NGOs and Trusts is typically to serve the public good, advance charitable causes, and provide services to communities in need.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the key differences between an NGO and a Trust?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Legal structure: An NGO can take various legal forms, including Trusts, Societies, or Section 8 Companies, while a Trust is a specific legal entity created for charitable purposes.</li>
                                                        <li>Management and governance: NGOs may have a governing board or committee responsible for decision-making, while a Trust is typically managed by trustees appointed in the trust deed.</li>
                                                        <li>Registration requirements: The registration process and regulatory requirements may vary depending on the legal form chosen for an NGO, while a Trust follows specific trust laws and regulations.</li>
                                                        <li>Tax status: NGOs may be eligible for tax exemptions or benefits under relevant tax laws, while trusts may also enjoy tax benefits but are subject to specific provisions governing charitable trusts.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the compliance requirements for registered NGOs and Trusts?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="list-wrap1">
                                                        <li>Annual reporting: Submission of annual reports, financial statements, and activity reports to the registering authority or regulatory bodies.</li>
                                                        <li>Governance and management: Compliance with governance standards, including holding regular meetings of the governing board or trustees and maintaining proper records and documentation.</li>
                                                        <li>Tax compliance: Filing of tax returns, obtaining tax-exempt status or registrations under relevant tax laws, and compliance with any tax obligations.</li>
                                                        <li>Regulatory compliance: Adherence to laws, rules, and regulations governing charitable activities, fundraising, and other operational aspects.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Can an NGO or Trust work internationally?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes, registered NGOs and Trusts can work internationally, subject to compliance with local laws and regulations in the countries where they operate. This may involve obtaining necessary approvals, permits, and registrations, establishing partnerships or collaborations with local organizations, and complying with legal and tax requirements applicable to foreign entities operating in those jurisdictions.</p>
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
                            <h6>Member's details (Name,Father's name,Date of Birth,Full address with Pin & PS,Religion,Profession)</h6>
                            <ul class="list-wrap1">
                                <li>Rent Agreement or Ownership Proof of registered office</li>
                                <li>Latest Property Tax Receipt / Mutation Copy </li>
                                <li>Latest Registered Office Photo with Society Banner </li>
                                <li>Google Location Map Through “GPS Map Camera App”</li>
                                <li>Identity Proof of all Members (Aadhar Card / Passport) </li>
                                <li>Passport-sized Photographs of all members </li>
                                <li>No Objection Certificate (NOC) from the landlord (if the NGO office is on rented property).</li>
                                <li>Organization Name & Description of Services</li>
                                <li>List of Designated Members with their Photo & Signature</li>
                                <li><strong>Any specific clause / Condition, if you want.send us also.</strong></li>
                            </ul>
                            <h6>Required the KYC ( Pan Card & Aadhar card) of all Members & their Passport size photo</h6>
                            <h6>Excel sheet with details of Members with their Designation & signature</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- main-area-end -->

@endsection