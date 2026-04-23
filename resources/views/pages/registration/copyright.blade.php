@extends('layouts.app')

@section('title', 'Copyright Registration - 360 Business and Services')
@section('meta_description', 'Streamline your copyright registration process in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding individuals and businesses through the intricacies of copyright registration, ensuring seamless protection of your creative works. Whether you are an artist, author, musician, or content creator, we provide reliable assistance at every stage of the registration process. From preparing application documents to filing with the appropriate authorities, trust us to handle the paperwork while you focus on your creative endeavors. With our expertise, navigating copyright registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure robust protection for your intellectual property assets.')
@section('long_keywords', 'Copyright registration process in Kolkata, How to register a copyright in Kolkata, Best copyright registration services in Kolkata, Requirements for copyright registration in Kolkata, Steps to obtain copyright registration in Kolkata, Copyright registration cost in Kolkata, Professional assistance for copyright registration in Kolkata, Benefits of copyright registration in Kolkata, Legal aspects of copyright registration in Kolkata, Kolkata copyright consultant')
@section('short_keywords', 'Copyright registration Kolkata, Copyright application services, Copyright compliance support, Copyright consultants Kolkata, Copyright assistance')

@section('og_title', '360 Business and Services | Income Tax Consultation in Kolkata')
@section('og_description', 'Streamline your copyright registration process in Kolkata with the comprehensive support of 360 Business and Services. Our expert team specializes in guiding individuals and businesses through the intricacies of copyright registration, ensuring seamless protection of your creative works. Whether you are an artist, author, musician, or content creator, we provide reliable assistance at every stage of the registration process. From preparing application documents to filing with the appropriate authorities, trust us to handle the paperwork while you focus on your creative endeavors. With our expertise, navigating copyright registration in Kolkata becomes a hassle-free endeavor. Partner with us for efficient solutions and ensure robust protection for your intellectual property assets.')


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
                                <h2 class="title">Copyright Registration</h2>
                                <p>Don’t let objections stop your brand — respond professionally and secure your trademark.</p>
                                <p>Copyright is a legal right granted to authors, artists, composers, designers, and content creators to protect their original literary, artistic, musical, and dramatic works. Copyright Registration provides undisputed proof of ownership, helping creators safeguard their work from unauthorized use, reproduction, or distribution.</p>
                                <p>Whether you're a writer, musician, graphic designer, filmmaker, software developer, or content creator, registering your work under the Copyright Act, 1957 ensures exclusive rights and legal protection.</p>
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
                                                        What is copyright registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Copyright registration is the process of legally securing the rights to original works of authorship, such as literary, artistic, musical, or dramatic works. It provides creators with exclusive rights to reproduce, distribute, perform, or display their works and serves as evidence of ownership in case of infringement disputes.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        What types of works can be copyrighted?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Copyright protection can be granted to a wide range of creative works, including literary works (such as books, articles, and computer programs), artistic works (such as paintings, sculptures, and photographs), musical compositions, dramatic works, choreographic works, and audiovisual works (such as films and videos).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        What are the benefits of copyright registration?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Copyright registration offers several benefits, including a legal presumption of ownership and validity, which facilitates enforcement of copyright claims in court. It also provides public notice of the copyright claim, making it easier for potential licensees or users to identify and contact the copyright owner. Additionally, registration is a prerequisite for pursuing statutory damages and attorney's fees in copyright infringement lawsuits.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Is copyright registration required to protect my work?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>No, copyright protection exists automatically upon the creation of an original work of authorship and fixation in a tangible medium of expression. However, registering your copyright with the copyright office provides additional legal benefits and protections, making it easier to enforce your rights and assert ownership in case of infringement disputes.</p>
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
                                    <li>Logo with Tagline</li>
                                    <li>List of Services</li>
                                    <li>Incorporation Certificate</li>
                                    <li>Trade License</li>
                                    <li>Udyami Registration</li>
                                    <li>Name of Signatory &amp; Designation</li>
                                    <li>KYC (Pan &amp; Aadhar card) of Signatory</li>
                                    <li>Mobile no &amp; Email Id of Signatory</li>
                                    <li>List of Services</li>
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
