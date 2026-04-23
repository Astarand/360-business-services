@extends('layouts.app')

@section('title', 'Shop & Establishment - 360 Business and Services')
@section('meta_description', 'Simplify your Shop & Establishment registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of compliance with local Shop & Establishment laws, ensuring seamless adherence to regulatory requirements. Whether you are opening a new shop or renewing existing registrations, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Shop & Establishment obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to establish and maintain your business presence.')
@section('long_keywords', 'Shop registration process in Kolkata, How to renew Shop registration in Kolkata, Best Shop registration services in Kolkata, Requirements for Shop renewal in Kolkata, Steps to obtain Shop registration in Kolkata, Shop renewal cost in Kolkata, Professional assistance for Shop registration in Kolkata, Benefits of Shop registration in Kolkata, Legal aspects of Shop renewal in Kolkata, Kolkata Shop consultant')
@section('short_keywords', 'Shop registration Kolkata, Shop renewal services, Shop compliance support, Shop consultants Kolkata, Shop assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Simplify your Shop & Establishment registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of compliance with local Shop & Establishment laws, ensuring seamless adherence to regulatory requirements. Whether you are opening a new shop or renewing existing registrations, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Shop & Establishment obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with regulations to establish and maintain your business presence.')


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
                                <h2 class="title">Shop & Establishment</h2>
                                <p>Legalize your business operations and ensure a compliant work environment under state labour laws.</p>
                                <p>The Shop and Establishment Act is a state-specific legislation that regulates the working conditions, employment terms, and operating hours of businesses and commercial establishments such as retail shops, offices, warehouses, service centers, restaurants, and more. Obtaining a Shop & Establishment License is mandatory for all businesses — whether you're a small startup or a growing enterprise — operating within municipal limits.</p>
                                <p>It is issued by the Labour Department of the respective state and acts as legal proof of business operation, required for other registrations like GST, trade license, or bank account opening.</p>
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
                                                        What is Shop & Establishment registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Shop & Establishment registration is a mandatory requirement for businesses operating in commercial establishments, including shops, offices, restaurants, hotels, and other service-oriented enterprises. It applies to all establishments engaged in trading, commercial activities, or providing services, irrespective of their size or nature of operations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of Shop & Establishment registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Shop & Establishment registration signifies compliance with labor laws and regulations governing the working conditions, employment practices, and welfare measures for employees in commercial establishments. It involves obtaining a license from the respective state's labor department, providing details such as business name, address, nature of activities, working hours, and employment information.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Advantages of obtaining Shop & Establishment registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>For businesses, Shop & Establishment registration ensures legal compliance with labor laws, avoiding penalties, fines, or legal actions for non-compliance. It promotes a conducive work environment by enforcing standards for working hours, holidays, wages, and other labor-related matters. Moreover, registered establishments gain credibility and trust among customers, employees, and stakeholders, enhancing business reputation and competitiveness.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Disadvantages of not having Shop & Establishment registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without a valid Shop & Establishment registration can lead to legal repercussions, including fines, penalties, or closure of the business for non-compliance with labor laws. Unregistered establishments may face challenges in attracting and retaining skilled workers, as employees prefer working in compliant and regulated environments offering job security and welfare benefits. Additionally, non-compliance with labor regulations undermines employee rights and welfare, risking their safety, health, and well-being in the workplace.</p>
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
                        <div class="row mx-lg-2">
                            <div class="col-lg-12">
                                <ul class="list-wrap1">
                                    <li>Incorporation certificate / Registration Copy</li>
                                    <li>MOA and AOA</li>
                                    <li>KYC (Pan and Aadhar card) of an authorized person</li>
                                    <li>Office Agreement/Property Deed</li>
                                    <li>Latest Rent Invoice</li>
                                    <li>The exact nature of business</li>
                                    <li>Contact No &amp; email address of authorized personnel</li>
                                    <li>Latest Trade License Copy</li>
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
