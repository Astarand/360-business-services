@extends('layouts.app')

@section('title', 'Digital Signature Registration - 360 Business and Services')
@section('meta_description', 'Streamline your Digital Signature (DSC) registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding individuals and businesses through the intricacies of DSC compliance, ensuring seamless adherence to regulatory requirements. Whether you are obtaining your first DSC or renewing an existing one, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating DSC obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with digital signature regulations to securely conduct your online transactions and communications.')
@section('long_keywords', 'DSC registration process in Kolkata, How to renew DSC in Kolkata, Best DSC registration services in Kolkata, Requirements for DSC renewal in Kolkata, Steps to obtain DSC registration in Kolkata, DSC renewal cost in Kolkata, Professional assistance for DSC registration in Kolkata, Benefits of DSC registration in Kolkata, Legal aspects of DSC renewal in Kolkata, Kolkata DSC consultant')
@section('short_keywords', 'DSC registration Kolkata, DSC renewal services, DSC compliance support, DSC consultants Kolkata, DSC assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Streamline your Digital Signature (DSC) registration and renewal processes in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding individuals and businesses through the intricacies of DSC compliance, ensuring seamless adherence to regulatory requirements. Whether you are obtaining your first DSC or renewing an existing one, we provide reliable assistance at every stage of the process. From initial application to periodic filings and renewals, trust us to handle the paperwork while you focus on your core activities. With our expertise, navigating DSC obligations in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with digital signature regulations to securely conduct your online transactions and communications.')


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
                    <div class="col-lg-7">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <h2 class="title">Digital Signature (DSC)</h2>
                                <p>Secure your digital identity and authorize online transactions with a legally valid Digital Signature Certificate.</p>
                                <p>A Digital Signature Certificate (DSC) is a government-issued electronic key used to validate the identity of the signer in digital transactions, filings, and contracts. Issued under the provisions of the Information Technology Act, 2000, a DSC provides legally recognized authentication and encryption, ensuring that your digital communications and documents are tamper-proof and secure.</p>
                                <p>DSCs are mandatory for a wide range of activities including MCA filings, GST, income tax returns, PF/ESI, tender submissions, and trademark registrations.</p>
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
                                                        What is a Digital Signature Certificate (DSC), and how does it work?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Digital Signature Certificate (DSC) is a digital equivalent of a handwritten signature, used for authentication of electronic documents and transactions. It is issued by Certifying Authorities (CAs) after verifying the identity of the applicant. A DSC contains the public key of the applicant, encrypted with their private key, allowing recipients to verify the authenticity and integrity of digital documents signed with the certificate.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What are the features of a Digital Signature Certificate?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>A Digital Signature Certificate ensures the authenticity, integrity, and non-repudiation of electronic documents and transactions. It allows users to digitally sign documents and forms, such as income tax returns, company filings, e-tenders, and online transactions, securely and legally. DSCs are classified into various types based on the level of verification and usage, including Class 1, Class 2, and Class 3 certificates.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the advantages of using a Digital Signature Certificate?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Using a Digital Signature Certificate offers several benefits, including enhanced security, efficiency, and convenience in electronic transactions. It eliminates the need for physical signatures and paper-based documentation, reducing costs and administrative burdens. DSCs also ensure data integrity and non-repudiation, providing legal validity and enforceability to electronically signed documents.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What are the disadvantages of Digital Signature Certificates?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>While Digital Signature Certificates offer numerous advantages, there are certain limitations to consider. One potential disadvantage is the need for initial setup and registration with a Certifying Authority (CA), which involves identity verification and authentication processes. Additionally, DSCs may require periodic renewal and maintenance, adding to the administrative overhead for users. Moreover, the acceptance and recognition of digital signatures may vary across jurisdictions and industries, affecting their usability and effectiveness in certain contexts.</p>
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
                                    <li>Aadhar card</li>
                                    <li>Pan Card</li>
                                    <li>Photo</li>
                                    <li>Mobile No &amp; Email Id</li>
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
