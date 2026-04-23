@extends('layouts.app')

@section('title', 'E-way Bill - 360 Business and Services')
@section('meta_description', 'Ensure seamless E-Way Bill generation and compliance in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of E-Way Bill regulations, ensuring adherence to GST requirements for interstate movement of goods. Whether you are a small business, a corporation, or a logistics provider, our experienced team provides reliable support for all your E-Way Bill needs. From generating E-Way Bills to updating transportation details and ensuring compliance with distance-based validity, we ensure that your goods transportation process is efficient and compliant. With our streamlined solutions, navigating the intricacies of E-Way Bill generation becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best E-Way Bill services in Kolkata and ensure smooth interstate goods movement under GST.')
@section('long_keywords', 'E-Way Bill process in Kolkata, How to generate E-Way Bills in Kolkata, Best E-Way Bill services in Kolkata, Requirements for E-Way Bills in Kolkata, Steps to create E-Way Bills in Kolkata, E-Way Bill software in Kolkata, Professional assistance for E-Way Bills in Kolkata, Benefits of E-Way Bills in Kolkata, Legal aspects of E-Way Bills in Kolkata, Kolkata E-Way Bill consultants')
@section('short_keywords', 'E-Way Bill Kolkata, EWB generation, E-Way Bill compliance, EWB consultants Kolkata')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Ensure seamless E-Way Bill generation and compliance in Kolkata with our expert assistance at 360 Business and Services. We specialize in guiding businesses through the complexities of E-Way Bill regulations, ensuring adherence to GST requirements for interstate movement of goods. Whether you are a small business, a corporation, or a logistics provider, our experienced team provides reliable support for all your E-Way Bill needs. From generating E-Way Bills to updating transportation details and ensuring compliance with distance-based validity, we ensure that your goods transportation process is efficient and compliant. With our streamlined solutions, navigating the intricacies of E-Way Bill generation becomes hassle-free, allowing you to focus on your core business activities. Partner with us for the best E-Way Bill services in Kolkata and ensure smooth interstate goods movement under GST.')


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
                                <h2 class="title">E Way Bill</h2>
                                <p>The E-Way Bill is an electronic document required for the movement of goods in India, both interstate and intrastate, under the Goods and Services Tax (GST) regime. It includes details such as the consignor, consignee, goods being transported, and the vehicle used for transportation. The E-Way Bill is generated online via the GST portal by registered taxpayers or transporters before the commencement of goods movement. It aims to ensure proper documentation and tracking of goods, preventing tax evasion and facilitating smoother logistics operations.</p>
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
                                                        What is an E-Way Bill?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>An E-Way Bill is an electronic document generated on the E-Way Bill portal, which is required for the movement of goods worth over a specified threshold value from one place to another, either within the same state or across different states in India. It ensures the seamless movement of goods and enables tax authorities to track and verify the movement of goods for compliance with GST regulations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Who is responsible for generating the E-Way Bill?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The responsibility for generating the E-Way Bill lies with the consignor or consignee of the goods, or the transporter assigned by the consignor or consignee. They are required to generate the E-Way Bill electronically on the E-Way Bill portal before the commencement of the movement of goods.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What is the validity period of an E-Way Bill?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The validity period of an E-Way Bill varies depending on the distance to be covered for the transportation of goods. Generally, for distances up to 100 km, the E-Way Bill is valid for one day, and for every additional 100 km or part thereof, the validity period is extended by one additional day. However, the maximum validity period cannot exceed 15 days. It is essential to ensure that the E-Way Bill remains valid for the entire duration of the goods' transportation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What information is required for generating an E-Way Bill?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>The information required for generating an E-Way Bill includes details such as the GSTIN of the consignor and consignee, the invoice or challan number, the quantity and description of goods, the value of goods, the place of supply, the vehicle number or transport document number, and the reason for transportation.</p>
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
