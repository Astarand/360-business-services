@extends('layouts.app')

@section('title', 'Trade License - 360 Business and Services')
@section('meta_description', 'Navigate the complexities of trade licensing in Kolkata with ease, courtesy of 360 Business and Services. Our seasoned team provides comprehensive assistance for the registration and renewal of trade licenses, ensuring seamless compliance with local regulations. From initial application to ongoing support, trust us to handle all aspects of your trade licensing needs. Whether youre establishing a new business or renewing existing permits, we offer reliable guidance and support throughout the process. Simplify your regulatory obligations and focus on growing your business while we take care of the paperwork. With our expertise, obtaining and renewing trade licenses in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure uninterrupted operations for your business.')
@section('long_keywords', 'Trade license registration process in Kolkata, How to renew trade license in Kolkata, Best trade license registration services in Kolkata, Requirements for trade license renewal in Kolkata, Steps to obtain trade license in Kolkata, Trade license renewal cost in Kolkata, Professional assistance for trade license registration in Kolkata, Benefits of trade license registration in Kolkata, Legal aspects of trade license renewal in Kolkata, Kolkata trade license consultant')
@section('short_keywords', 'Trade license registration Kolkata, Trade license renewal services, Kolkata business licensing, Trade license support, Trade license consultants Kolkata, Trade license assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Navigate the complexities of trade licensing in Kolkata with ease, courtesy of 360 Business and Services. Our seasoned team provides comprehensive assistance for the registration and renewal of trade licenses, ensuring seamless compliance with local regulations. From initial application to ongoing support, trust us to handle all aspects of your trade licensing needs. Whether youre establishing a new business or renewing existing permits, we offer reliable guidance and support throughout the process. Simplify your regulatory obligations and focus on growing your business while we take care of the paperwork. With our expertise, obtaining and renewing trade licenses in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure uninterrupted operations for your business.')


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
                                <h2 class="title">Trade Licence</h2>
                                <p>Start your business legally with a verified trade license — required for shops, businesses, and service providers across municipalities in West Bengal.</p>
                                <p>A Trade License is a mandatory legal document issued by the Municipal Corporation or local governing authority that permits individuals or establishments to carry out specific business activities in a designated area. Whether you're operating a shop, office, or factory — obtaining a trade license ensures your business is compliant with local laws.</p>
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
                                                        What is a trade license, and why is it necessary?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A trade license is an official permit issued by a local government or regulatory authority that allows individuals or businesses to engage in specific commercial activities within a defined jurisdiction. It is necessary to ensure that businesses operate legally and comply with regulations related to safety, health, taxation, and zoning.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Can I transfer or renew my trade license if I relocate my business?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes, you can typically transfer or renew your trade license if you relocate your business to a different jurisdiction within the same country. However, the specific procedures and requirements for transferring or renewing a trade license may vary depending on the regulations of the new location. It's important to notify the relevant authorities of your business's relocation and follow their guidelines for transferring or renewing your license to ensure continued compliance</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the consequences of run a business without a trade license?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating a business without a trade license can have serious consequences, including fines, penalties, and legal action. In some cases, authorities may shut down your business until you obtain the necessary license. Additionally, operating without a license can damage your business's reputation, hinder its growth, and jeopardize relationships with customers, suppliers, and partners.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Are there different types of trade licenses for different businesses?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes, there are often different types of trade licenses tailored to various types of businesses and industries. For example, businesses operating in sectors such as food service, healthcare, construction, or transportation may have specific license requirements. It's essential to research and understand the specific requirements relevant to your type of business.</p>
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
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>For Sole Proprietorship</h5>
                                <ul class="list-wrap1">
                                    <li>Proprietor's Pan card & Aadhar card</li>
                                    <li>Latest Office Agreement Copy / Lease Deed</li>
                                    <li>Latest Office Rent Invoice / Mutation copy</li>
                                    <li>Latest Office Property Tax Receipt.</li>
                                    <li>Nature of Business ?</li>
                                    <li>Sq fts of the office area?</li>
                                    <li>No of employees?</li>
                                    <li>Contact person Name, Mobile no & mail Id .</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h5>For Partnership / LLP</h5>
                                <ul class="list-wrap1">
                                    <li>Partnership Deed / LLP Deed copy</li>
                                    <li>Pan card of Partnership / LLP</li>
                                    <li>Latest Office Agreement Copy / Lease Deed</li>
                                    <li>Latest Office Rent Invoice / Mutation Copy</li>
                                    <li>Latest Office Property Tax Receipt.</li>
                                    <li>One Partner’s Pan card and address proof.</li>
                                    <li>Nature of Business?</li>
                                    <li>Sq fts of the office area?</li>
                                    <li>No of employees?</li>
                                    <li>Contact person Name, Mobile no & mail Id .</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h5>For Ltd / Pvt. Ltd Company</h5>
                                <ul class="list-wrap1">
                                    <li>Incorporation certificate.</li>
                                    <li>Complete MOA & AOA </li>
                                    <li>Company’s Pan card.</li>
                                    <li>Latest Office Agreement Copy / Lease Deed</li>
                                    <li>Latest Office Rent Invoice / Mutation Copy</li>
                                    <li>Latest Office Property Tax Receipt..</li>
                                    <li>One Director’s Pan card and address proof.</li>
                                    <li>Nature of Business .?</li>
                                    <li>Sq fts of the office area?</li>
                                    <li>No of employees ?</li>
                                    <li>Contact person Name, Mobile no & mail Id .</li>
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
