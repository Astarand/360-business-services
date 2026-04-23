@extends('layouts.app')

@section('title', 'ISO Certification - 360 Business and Services')
@section('meta_description', 'Facilitate your ISO (International Organization for Standardization) certification registration and renewal in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding organizations through the process of ISO certification, ensuring seamless adherence to international standards. Whether you are seeking ISO 9001 for quality management, ISO 14001 for environmental management, or any other ISO certification, we provide reliable assistance at every stage of the process. From initial assessment to implementation and audit preparation, trust us to handle the paperwork while you focus on your core operations. With our expertise, obtaining and renewing ISO certification in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with global quality standards.')
@section('long_keywords', 'ISO certification process in Kolkata, How to renew ISO certification in Kolkata, Best ISO certification services in Kolkata, Requirements for ISO renewal in Kolkata, Steps to obtain ISO certification in Kolkata, ISO renewal cost in Kolkata, Professional assistance for ISO certification in Kolkata, Benefits of ISO certification in Kolkata, Legal aspects of ISO renewal in Kolkata, Kolkata ISO consultant')
@section('short_keywords', 'ISO certification Kolkata, ISO renewal services, ISO compliance support, ISO consultants Kolkata, ISO assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Facilitate your ISO (International Organization for Standardization) certification registration and renewal in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding organizations through the process of ISO certification, ensuring seamless adherence to international standards. Whether you are seeking ISO 9001 for quality management, ISO 14001 for environmental management, or any other ISO certification, we provide reliable assistance at every stage of the process. From initial assessment to implementation and audit preparation, trust us to handle the paperwork while you focus on your core operations. With our expertise, obtaining and renewing ISO certification in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure compliance with global quality standards.')


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
                            <h2 class="title">ISO Certificate</h2>
                            <p>Boost your business credibility and global reach with ISO Certification.</p>
                            <p>ISO Certification is an internationally recognized standard that signifies a company’s commitment to quality management, regulatory compliance, and customer satisfaction. Issued by the International Organization for Standardization (ISO), it validates that your business meets global benchmarks across products, services, processes, and systems.</p>
                            <p>Whether you're a manufacturer, service provider, IT company, or MSME, obtaining an ISO certificate enhances your marketability, operational efficiency, and stakeholder trust.</p>
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
                                                    What is an ISO certificate, and why is it important for businesses?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>An ISO certificate is a certification issued by an accredited certification body that confirms a business's compliance with international standards set by the International Organization for Standardization (ISO). It demonstrates that the organization has implemented and maintained effective management systems, processes, and procedures in accordance with ISO standards, enhancing its credibility, competitiveness, and market acceptance.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the features of ISO certification?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>ISO certification covers various aspects of business operations, including quality management, environmental management, information security management, occupational health and safety management, and more. It involves a systematic audit process conducted by certification bodies to assess the organization's compliance with specific ISO standards and requirements.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What are the advantages of ISO certification for businesses?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>ISO certification offers several benefits to businesses, including improved product and service quality, enhanced customer satisfaction, increased operational efficiency, and reduced risks and liabilities. It also provides access to new markets, as many government and private sector organizations require ISO-certified suppliers. Moreover, ISO certification can lead to cost savings through improved processes and resource optimization.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What are the disadvantages of ISO certification?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>While ISO certification offers numerous advantages, there are some potential drawbacks to consider. The certification process can be time-consuming and costly, especially for small and medium-sized enterprises (SMEs) with limited resources. Maintaining compliance with ISO standards requires ongoing investment in training, documentation, and audits, which may add to the administrative burden for businesses. Additionally, ISO certification does not guarantee business success or immunity from quality-related issues, as it is ultimately dependent on effective implementation and continuous improvement efforts.</p>
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
                                <li>Incorporation certificate / Registration copy</li>
                                <li>Latest Trade License</li>
                                <li>Name, Contact No &amp; email address</li>
                                <li>The exact nature of business</li>
                                <li>Quality Objectives with supporting documents</li>
                                <li>Sales & Purchase Bills</li>
                                <li>Letter Head</li>
                                <li>Visiting Card</li>
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