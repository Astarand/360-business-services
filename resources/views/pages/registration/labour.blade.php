@extends('layouts.app')

@section('title', 'Labour License - 360 Business and Services')
@section('meta_description', '
Simplify your labor license registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of labor compliance, ensuring seamless adherence to regulatory requirements. Whether you are a new employer or renewing existing permits, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating labor license obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with labor regulations to foster a safe and productive work environment for your employees.')
@section('long_keywords', 'Labor license registration process in Kolkata, How to renew labor license in Kolkata, Best labor license registration services in Kolkata, Requirements for labor license renewal in Kolkata, Steps to obtain labor license registration in Kolkata, Labor renewal cost in Kolkata, Professional assistance for labor license registration in Kolkata, Benefits of labor license registration in Kolkata, Legal aspects of labor renewal in Kolkata, Kolkata labor consultant')
@section('short_keywords', 'Labor license registration Kolkata, Labor license renewal services, Labor compliance support, Labor consultants Kolkata, Labor assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', '
Simplify your labor license registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding businesses through the intricacies of labor compliance, ensuring seamless adherence to regulatory requirements. Whether you are a new employer or renewing existing permits, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating labor license obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with labor regulations to foster a safe and productive work environment for your employees.')


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
                                <h2 class="title">Labour License</h2>
                                <p>Ensure lawful hiring practices and worker safety through labour license compliance.</p>
                                <p>A Labour License is a mandatory legal approval issued under the Contract Labour (Regulation & Abolition) Act, 1970 by the Ministry of Labour and Employment. It applies to contractors and establishments employing a specified number of contract labourers or workers. The license helps enforce fair employment terms, safety standards, and statutory benefits for workers, while protecting employers from legal liabilities.</p>
                                <p>Businesses involved in construction, manufacturing, logistics, security services, and contract-based operations must obtain this license to operate legally.</p>
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
                                                        What is a labour license?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A labour license, also known as a Labour Identification Number (LIN) or Labour License Certificate, is a mandatory registration required for certain establishments under the Shops and Establishments Act or Factories Act in India. It applies to businesses engaging a certain number of employees, typically in manufacturing, trade, or service sectors, and varies based on state-specific regulations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of a labour license?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A labour license is issued by the respective state's labour department and signifies compliance with labour laws and regulations concerning employment, working conditions, and welfare measures for employees. It involves the submission of necessary documents, such as proof of establishment, details of employees, workplace safety measures, and other statutory requirements, to obtain the license.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of obtaining a labour license for employers and employees?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>For employers, a labour license ensures legal compliance with labour laws, mitigating the risk of penalties, fines, or legal actions for non-compliance. It also promotes a safe and healthy work environment by enforcing standards for workplace safety, hygiene, and welfare measures. For employees, a licensed establishment provides assurance of fair employment practices, timely wages, and adherence to statutory benefits and rights.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the disadvantages of not having a labour license?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Operating without a valid labour license can lead to severe repercussions, including legal consequences, fines, closure of the establishment, or even imprisonment for the employer. Non-compliance with labour laws undermines employee rights and welfare, risking their safety, health, and well-being in the workplace. Moreover, unlicensed establishments may face challenges in attracting and retaining skilled workers due to concerns about job security and legal compliance.</p>
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
                                    <li>Incorporation certificate / registration Copy</li>
                                    <li>Trade license</li>
                                    <li>All employees and employers KYC</li>
                                    <li>Employer name &amp; complete address</li>
                                    <li>Form X (appointment letter of labor)</li>
                                    <li>Total wages of labor</li>
                                    <li>Joining date of labor</li>
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
