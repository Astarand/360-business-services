@extends('layouts.app')

@section('title', 'Pollution License - 360 Business and Services')
@section('meta_description', 'Facilitate your Pollution License registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of pollution control compliance, ensuring seamless adherence to regulatory requirements. Whether you are a new industry or renewing existing permits, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Pollution License obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with environmental regulations to contribute to a cleaner and healthier environment.')
@section('long_keywords', 'Pollution License registration process in Kolkata, How to renew Pollution License in Kolkata, Best Pollution License registration services in Kolkata, Requirements for Pollution License renewal in Kolkata, Steps to obtain Pollution License registration in Kolkata, Pollution License renewal cost in Kolkata, Professional assistance for Pollution License registration in Kolkata, Benefits of Pollution License registration in Kolkata, Legal aspects of Pollution License renewal in Kolkata, Kolkata Pollution License consultant')
@section('short_keywords', 'Pollution License registration Kolkata, Pollution License renewal services, Pollution License compliance support, Pollution License consultants Kolkata, Pollution License assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate your Pollution License registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of pollution control compliance, ensuring seamless adherence to regulatory requirements. Whether you are a new industry or renewing existing permits, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating Pollution License obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with environmental regulations to contribute to a cleaner and healthier environment.')


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
                    <div class="col-lg-7  order-lg-0 order-0">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title">Pollution License</h2>
                                <p>Operate responsibly and sustainably with a Pollution Control License for your business.</p>
                                <p>A Pollution License — also known as Consent to Establish (CTE) and Consent to Operate (CTO) — is a mandatory environmental clearance issued by the State Pollution Control Board (SPCB) under the Water (Prevention and Control of Pollution) Act, 1974 and Air (Prevention and Control of Pollution) Act, 1981. This license regulates industrial emissions, effluent discharge, and waste management practices to ensure minimal environmental impact.</p>
                                <p>Whether you're setting up a factory, manufacturing unit, food processing plant, or chemical facility, a pollution license is essential to maintain legal compliance and protect air, water, and soil quality.</p>
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
                                                        What is a pollution license, and who needs to obtain it?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A pollution license, officially known as the Consent to Establish (CTE) and Consent to Operate (CTO) under the Water (Prevention and Control of Pollution) Act, 1974 and the Air (Prevention and Control of Pollution) Act, 1981, is a mandatory permit required for industries and establishments that have the potential to pollute air or water. It applies to factories, manufacturing units, power plants, chemical industries, and other operations that discharge pollutants into the environment.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of a pollution license?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A pollution license signifies compliance with environmental regulations and standards governing the discharge of pollutants into the air and water bodies. It involves a thorough assessment by the respective State Pollution Control Board (SPCB) or Pollution Control Committee (PCC) to ensure that the establishment adopts pollution control measures and adheres to prescribed emission and effluent standards.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of obtaining a pollution license for industries and the environment?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>For industries, obtaining a pollution license demonstrates environmental responsibility and commitment to sustainable practices, enhancing credibility and reputation. It ensures legal compliance with pollution control laws, minimizing the risk of fines, penalties, or closure of operations for non-compliance. Moreover, pollution licenses promote pollution prevention and control measures, safeguarding public health and the environment from adverse impacts of industrial pollution.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the disadvantages of not having a pollution license?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without a valid pollution license can lead to severe consequences, including legal actions, fines, shutdown of operations, and damage to the environment and public health. Non-compliance with pollution control regulations can result in pollution-related health hazards, ecological degradation, and contamination of natural resources, impacting communities and ecosystems. Additionally, unlicensed industries may face reputational risks and challenges in securing contracts or investments due to concerns about environmental compliance and sustainability.</p>
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
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mx-lg-2">
                            <div class="col-lg-12">
                                <ul class="list-wrap1">
                                    <h5>Application Form:</h5>
                                    <li>Duly filled out and signed the application form for obtaining consent</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Proof of Legal Identity:</h5>
                                    <li>Certificate of Incorporation or partnership deed, depending on the legal structure of the business.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Proof of address:</h5>
                                    <li>Proof of ownership of the land, such as a sale deed.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Encumbrance Certificate:</h5>
                                    <li>Copy of the electricity bill, property tax receipt, or lease agreement for the business premises.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Site Plan:</h5>
                                    <li>Layout plan of the manufacturing or operational site.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Process Flow Diagram:</h5>
                                    <li>A detailed diagram illustrating the production or operational processes.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Details of Manufacturing Processes:</h5>
                                    <li>Comprehensive information about the manufacturing or operational processes and the associated raw materials.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Details of Products and Services:</h5>
                                    <li>Information about the products or services provided by the business.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Water Consumption Details:</h5>
                                    <li>Data on water consumption, if applicable.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Details of the Effluent Treatment Plant (ETP) or Sewage Treatment Plant (STP):</h5>
                                    <li>Information on the treatment and disposal of effluents or sewage generated by the business.s</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Air Pollution Control Measures:</h5>
                                    <li>Description of measures in place for controlling air pollution, if applicable.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Stack Height and Location:</h5>
                                    <li>Details of the height and location of emission stacks</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Hazardous Waste Management Plan:</h5>
                                    <li>If applicable, details of the management and disposal of hazardous waste.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Environmental Management Plan:</h5>
                                    <li>Outline of the environmental management plan adopted by the business.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Undertaking of Compliance:</h5>
                                    <li>A signed undertaking to comply with environmental norms and regulations.</li>
                                </ul>
                                <ul class="list-wrap1">
                                    <h5>Consent Fees Receipt:</h5>
                                    <li>Proof of payment of the required consent fees.</li>
                                </ul>
                                <h6>Any other documents specific to the industry or as required by the Pollution Control Board.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- main-area-end -->

@endsection
