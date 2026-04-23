@extends('layouts.app')

@section('main')

    <section class="estimate-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="estimate-img text-center">
                        <img src="assets/img/images/estimate_img.png" alt="" style="width: 60%" class="d-none d-lg-block">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="estimate-content">
                        <div class="section-title-two tg-heading-subheading animation-style2">
                            <h5 class="title tg-element-title pb-15" style="font-size: 25px; ">Get in Touch With us</h5>
                        </div>

                        <div class="tooltip-container">
                            <p>After Submit your Query form our one of employee Contact with you with in 24 hours *</p>
                            <div class="tooltip-content">
                                <p class="mb-0"><strong>Terms & Condition*</strong></p>
                                <ul style="padding-left: 20px;">
                                    <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">Satuday & Sunday our office closed.</li>
                                    <li style="font-size: 13px; margin-bottom: 5px; list-style-type: disc;">We off at Public Holidays.</li>
                                </ul>
                            </div>
                        </div>

                        <div id="successMessage">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                        </div>
                        <script>
                            setTimeout(function() {
                                $('#successMessage').fadeOut('fast');
                            }, 5000);
                        </script>

                        <div class="estimate-tab-wrap">
                            <div class="estimate-form-wrap leads-form">
                                <form id="qurieSubmitFormm" method="POST" action="{{ url('query_submit') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-grp">
                                                <input id="companyName" name="company_name" type="text" placeholder="Company/ Individual Name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-grp">
                                                <input id="contactNumber" name="contact_number" type="text" placeholder="Contact Number*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-grp">
                                                <input id="email" type="email" name="email" placeholder="E-mail*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-grp">
                                                <select id="topic" name="topic" onchange="showOtherField()">
                                                    <option value="" disabled selected>Topic*</option>
                                                    <option value="property-related-consultancy">Property-related Consultancy</option>
                                                    <option value="webel-property-consultancy">WEBEL Property-related Consultancy</option>
                                                    <option value="ud-webel-property-transfer">UD or WEBEL Property Transfer</option>
                                                    <option value="ud-webel-permission">UD or WEBEL permission</option>
                                                    <option value="webel-ud-ptax-assessments">WEBEL or UD P-tax Assessments</option>
                                                    <option value="ndita-nkda-tax-assessment">NDITA or NKDA Tax Assessment</option>
                                                    <option value="dpr-preparation-property-transfer">DPR preparation for Property Transfer</option>
                                                    <option value="ud-webel-mutation">UD or WEBEL Mutation</option>
                                                    <option value="ud-webel-property-registration">UD or WEBEL Property Registration</option>
                                                    <option value="it-ites-permission">IT and ITES Permission from UD or WEBEL</option>
                                                    <option value="property-tax-exemption-it-ites">Property Tax Exemption on IT and ITES</option>
                                                    <option value="property-tax-rebate">Required 50% Property Tax Rebate</option>
                                                    <option value="rent-permission-ud-webel">Rent permission from UD or WEBEL</option>
                                                    <option value="end-to-end-property-consultancy">End-to-end property consultancy in WEBEL or UD</option>
                                                    <option value="kmc-property-tax-mutation">KMC Property Tax & Mutation</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 d-none" id="other-topic-field">
                                            <div class="form-grp">
                                                <input id="other-topic" type="text" name="other_topic" placeholder="Other Topics*">
                                            </div>
                                        </div>
                                         <div class="col-lg-12" id="">
                                            <div class="form-grp">
                                               <div class="g-recaptcha" data-sitekey="6LczXeQrAAAAAA6_iOZ6PXtD86gQrFT_WFujtvCy"></div><br>
                                            </div>
                                        </div>

                                    </div>
                                    <button id="qurieSubmit" class="btn btn-three" type="submit">Submit Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="estimate-shape">
            <img src="assets/img/services/h4_services_shape.png" alt="" data-aos="fade-left" data-aos-delay="200">
        </div>
    </section>

@endsection
<script>
    function showOtherField() {
        var topic = document.getElementById('topic');
        var otherTopicField = document.getElementById('other-topic-field');

        if (topic.value === 'others') {
            otherTopicField.classList.remove('d-none');
        } else {
            otherTopicField.classList.add('d-none');
        }
    }
</script>
