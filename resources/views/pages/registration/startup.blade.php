@extends('layouts.app')

@section('title', 'Start Up Registration- 360 Business and Services')
@section('meta_description', 'Empower your startup journey in Kolkata with our comprehensive support for startup registration. At 360 Business and Services, we specialize in guiding entrepreneurs through the process of registering their startups, ensuring compliance with legal requirements. Whether you are launching a tech startup, an e-commerce venture, or a social enterprise, our experienced team provides reliable assistance at every stage, from documentation to registration approval. With our streamlined solutions, navigating the complexities of startup registration becomes seamless, allowing you to focus on building and growing your business. Partner with us for the best startup registration services in Kolkata and kickstart your entrepreneurial dream with confidence.')
@section('long_keywords', 'Startup registration process in Kolkata, How to register a startup in Kolkata, Best startup registration services in Kolkata, Requirements for startup registration in Kolkata, Steps to obtain startup registration in Kolkata, Startup registration cost in Kolkata, Professional assistance for startup registration in Kolkata, Benefits of startup registration in Kolkata, Legal aspects of startup registration in Kolkata, Kolkata startup consultant')
@section('short_keywords', 'Startup registration Kolkata, New business registration, Startup consultants Kolkata, Startup assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Empower your startup journey in Kolkata with our comprehensive support for startup registration. At 360 Business and Services, we specialize in guiding entrepreneurs through the process of registering their startups, ensuring compliance with legal requirements. Whether you are launching a tech startup, an e-commerce venture, or a social enterprise, our experienced team provides reliable assistance at every stage, from documentation to registration approval. With our streamlined solutions, navigating the complexities of startup registration becomes seamless, allowing you to focus on building and growing your business. Partner with us for the best startup registration services in Kolkata and kickstart your entrepreneurial dream with confidence.')


@section('main')

<!-- main-area -->
<main class="fix">

    <!-- services-details-area -->
    <section class="services-details-area pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 order-1 order-lg-1">
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
                            <h2 class="title">Start Up Registration</h2>
                            <p>Turn your idea into a recognized business with Startup India registration.</p>
                            <p>Startup Registration under the Startup India initiative, managed by the Department for Promotion of Industry and Internal Trade (DPIIT), gives early-stage businesses legal recognition, access to tax benefits, government grants, and simplified compliance. It is a crucial first step for innovators, entrepreneurs, and small businesses looking to scale with credibility, support, and regulatory protection.</p>
                            <p>Whether you are building a tech platform, product-based company, or service-driven venture, Startup India registration lays the foundation for sustainable growth in the competitive ecosystem.</p>
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

                                                <li class="justify-content-lg-center"><img src="{{ asset('assets/img/icons/check_icon.svg') }}" alt="">Professional and experienced team</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-btn-two d-flex justify-content-start">
                                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#DocModal">Documents Required</a>
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
                                                    What is Start-up Registration?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Start-up registration refers to the process of formally registering a new business venture with the appropriate government authorities. It is important for establishing the legal identity of the business, complying with regulatory requirements, and accessing benefits and incentives available to start-ups.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the different types of registrations or licenses required for a start-up?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>The registrations or licenses required for a start-up vary based on factors such as the nature of the business, industry, location, and scale of operations. Common registrations include business registration or incorporation, GST registration, MSME registration, professional tax registration, trade licenses, and any industry-specific licenses or permits.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the benefits of registering a start-up
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Registering a start-up offers several benefits, including legal recognition and protection of business assets, access to government schemes, incentives, and grants for start-ups, eligibility for tax benefits and exemptions, easier access to funding and investment opportunities, and enhanced credibility and trust among customers, partners, and stakeholders.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Are there any specific registration schemes or initiatives for start-ups in India?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes, the Government of India has introduced various initiatives and schemes to promote and support start-ups, such as the Start-up India initiative, which offers benefits such as tax exemptions, self-certification compliance, access to funding, incubation and mentorship support, and simplified regulatory norms for start-ups. Additionally, states may offer their own incentives and support programs for start-ups.</p>
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
                    <div class="row mx-lg-2">
                        <div class="col-lg-12">
                            <ul class="list-wrap1">
                                <li>Application Form</li>
                                <li>Letter of Authorization by the Directors</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company Pan Card</li>
                                <li>Brief about Your Company</li>
                                <li>Company Logo & Letterhead</li>
                                <li>Director’s Aadhar Card & Photo</li>
                                <li>MSME Registration Certificate</li>
                                <li>GST Registration Certificate</li>
                                <li>Company DSC</li>
                                <li>Director’s Details with Mail ID & Contact No.</li>
                                <li>Website / App (if any)</li>
                                <li>Funded / Bootstrapped?</li>
                                <li>No. of Employers?</li>
                                <li>Improvements of Your Startup (briefly describe)</li>
                                <li>Is Startup Receiving Any Award? (briefly describe)</li>
                                <li>What Problem Is Your Startup Solving? (briefly describe)</li>
                                <li>How Is Your Startup Solving the Problem? (briefly describe)</li>
                                <li>What Is Unique About Your Startup's Solution? (briefly describe)</li>
                                <li>How Is Your Startup Generating Revenue? (briefly describe)</li>
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