@extends('layouts.app')

    @section('title', 'Secure Payment Gateway | 360 Business and Services | Pay for Business Services Online')

@section('meta_description', 'Make secure online payments for 360 Business and Services. We accept multiple payment methods including UPI, credit cards, debit cards, and net banking. Fast, secure, and reliable payment processing for all our business services including GST registration, company formation, and tax filing.')

@section('keywords', 'secure payment gateway, online payment business services, pay for GST registration, company formation payment, business services payment, secure transaction, payment methods, UPI payment, credit card payment, net banking, PhonePe payment, business billing Kolkata')

@section('canonical_url', url('/payment'))

@section('og_title', 'Secure Payment Gateway | 360 Business and Services | Online Payments')
@section('og_description', 'Secure online payments for business services. Multiple payment options including UPI, cards, and net banking. Fast and reliable transaction processing.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/payment/360-business-services-payment-og.jpg')
@section('og_image_alt', '360 Business and Services Secure Payment Gateway - Online Payments')

@section('twitter_title', 'Secure Payment Gateway | 360 Business and Services')
@section('twitter_description', 'Secure online payments for business services. Multiple payment options with fast and reliable transaction processing.')

@section('breadcrumb_schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Payment",
            "item": "{{ url('/payment') }}"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "PaymentMethod",
    "name": "360 Business and Services Payment Gateway",
    "description": "Secure online payment system for business services with multiple payment options.",
    "provider": {
        "@type": "Organization",
        "name": "360 Business and Services",
        "url": "https://360bizservice.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "11th Floor,TowerNo-1, PS Srijan Corporate Park, GP Block, Sector-V",
            "addressLocality": "Kolkata",
            "addressRegion": "West Bengal",
            "postalCode": "700091",
            "addressCountry": "IN"
        },
        "telephone": "+91-9830747981"
    },
    "paymentMethodId": "PhonePe_Gateway",
    "acceptedPaymentMethod": [
        "http://purl.org/goodrelations/v1#ByBankTransferInAdvance",
        "http://purl.org/goodrelations/v1#ByInvoice",
        "http://purl.org/goodrelations/v1#Cash",
        "http://purl.org/goodrelations/v1#CheckInAdvance",
        "http://purl.org/goodrelations/v1#COD",
        "http://purl.org/goodrelations/v1#DirectDebit",
        "http://purl.org/goodrelations/v1#GoogleCheckout",
        "http://purl.org/goodrelations/v1#PayPal",
        "http://purl.org/goodrelations/v1#PaySwarm"
    ]
}
</script>
@endsection

@section('main')

    <style>
        .bank-card-wrap {
            background: linear-gradient(145deg, #f7faff 0%, #eef4ff 100%);
            border: 1px solid #d4e3ff;
            border-radius: 16px;
            box-shadow: 0 14px 32px rgba(18, 72, 164, 0.12);
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        .bank-card-wrap::before {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            top: -55px;
            right: -45px;
            background: rgba(37, 86, 193, 0.12);
        }

        .bank-header {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #2556c1;
            color: #fff;
            font-size: 11px;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            padding: 5px 11px;
            border-radius: 20px;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .bank-title {
            color: #13213f;
            font-size: 23px;
            line-height: 1.2;
            margin-bottom: 14px;
            position: relative;
            z-index: 1;
        }

        .payment-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        .payment-tab-btn {
            border: 1px solid #cadcff;
            background: #ffffff;
            color: #24427e;
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            line-height: 1;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .payment-tab-btn.active {
            background: #2556c1;
            border-color: #2556c1;
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(37, 86, 193, 0.2);
        }

        .payment-tab-pane {
            display: none;
            position: relative;
            z-index: 1;
        }

        .payment-tab-pane.active {
            display: block;
        }

        .bank-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .bank-info-row {
            background: #fff;
            border: 1px solid #d6e5ff;
            border-radius: 10px;
            padding: 10px 12px;
            position: relative;
            z-index: 1;
        }

        .bank-info-label {
            display: block;
            color: #5b6f92;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 2px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .bank-info-value {
            color: #13213f;
            font-size: 16px;
            font-weight: 700;
            word-break: break-word;
            margin: 0;
        }

        .bank-value-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .copy-btn {
            border: 1px solid #bed3ff;
            background: #edf3ff;
            color: #1c4db3;
            font-size: 13px;
            border-radius: 8px;
            width: 32px;
            height: 32px;
            padding: 0;
            line-height: 1;
            cursor: pointer;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .copy-btn:hover {
            background: #2556c1;
            border-color: #2556c1;
            color: #fff;
        }

        .qr-box {
            text-align: center;
            background: #fff;
            border: 1px dashed #a9c4ff;
            border-radius: 12px;
            padding: 12px;
            position: relative;
            z-index: 1;
        }

        .qr-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 8px;
            border: 1px solid #d8e6ff;
            box-shadow: 0 8px 20px rgba(15, 45, 95, 0.12);
            cursor: zoom-in;
            transform: scale(1.05);
        }

        .qr-preview-crop {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 10px;
        }

        .qr-click-hint {
            margin-top: 6px;
            color: #6b80ab;
            font-size: 12px;
            margin-bottom: 0;
        }

        .copy-toast {
            color: #1e5bcf;
            font-size: 12px;
            margin-top: 8px;
            display: none;
        }

        .copy-toast.show {
            display: block;
        }

        .qr-lightbox {
            position: fixed;
            inset: 0;
            background: rgba(8, 17, 39, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            padding: 20px;
        }

        .qr-lightbox.active {
            display: flex;
        }

        .qr-lightbox-content {
            position: relative;
            max-width: 420px;
            width: 100%;
            background: #fff;
            border-radius: 14px;
            padding: 12px;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.22);
        }

        .qr-lightbox-content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .qr-lightbox-close {
            position: absolute;
            top: -12px;
            right: -12px;
            width: 30px;
            height: 30px;
            border: none;
            border-radius: 50%;
            background: #2556c1;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(37, 86, 193, 0.35);
        }

        .qr-note {
            color: #4a628d;
            font-size: 13px;
            margin-top: 10px;
            margin-bottom: 0;
        }

        @media (max-width: 575.98px) {
            .bank-card-wrap {
                padding: 16px;
                border-radius: 14px;
            }

            .bank-title {
                font-size: 20px;
            }

            .bank-grid {
                grid-template-columns: 1fr;
            }

            .bank-info-value {
                font-size: 15px;
            }
        }
    </style>



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
                        <div class="section-title-two mb-30 tg-heading-subheading animation-style2">
                            <h5 class="title tg-element-title pb-15" style="font-size: 25px; ">We Accept Payment With</h5>
                            <img src="{{ asset('assets/img/payment/payment-options.png') }}" alt="payment">
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
                            <div class="estimate-form-wrap payment-form">
                                {{--
                                <form id="paymentForm" action="{{ route('paymentPhonePay') }}" method="POST">
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
                                        <div class="col-lg-8">
                                            <div class="form-grp">
                                                <input id="purposes" name="purposes" type="text" placeholder="Purposes*">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-grp">
                                                <input id="amount" name="amount" type="text" placeholder="Amount*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-grp">
                                                <textarea id="comments" name="comments" placeholder="Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="payNowBtn" class="btn btn-three" type="submit">Pay Now</button>
                                </form>
                                --}}

                                <div class="bank-card-wrap">
                                    <span class="bank-header"><i class="fas fa-university"></i> Bank Transfer Details</span>
                                    <h5 class="bank-title">360 Business &amp; Services.</h5>

                                    <div class="payment-tabs" role="tablist" aria-label="Payment info tabs">
                                        <button class="payment-tab-btn active" type="button" data-tab-target="bank-details-pane">Bank Details</button>
                                        <button class="payment-tab-btn" type="button" data-tab-target="scan-qr-pane">Scan QR</button>
                                    </div>

                                    <div class="payment-tab-pane active" id="bank-details-pane">
                                        <div class="bank-grid">
                                            <div class="bank-info-row">
                                                <span class="bank-info-label">Axis Bank A/C no</span>
                                                <div class="bank-value-wrap">
                                                    <p class="bank-info-value" id="accountNoValue">915020010733180</p>
                                                    <button type="button" class="copy-btn" data-copy-target="accountNoValue" title="Copy account number" aria-label="Copy account number">
                                                        <i class="far fa-copy"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="bank-info-row">
                                                <span class="bank-info-label">IFSC</span>
                                                <div class="bank-value-wrap">
                                                    <p class="bank-info-value" id="ifscValue">UTIB0000436</p>
                                                    <button type="button" class="copy-btn" data-copy-target="ifscValue" title="Copy IFSC" aria-label="Copy IFSC">
                                                        <i class="far fa-copy"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="copy-toast" id="copyToast">Copied successfully.</p>
                                    </div>

                                    <div class="payment-tab-pane" id="scan-qr-pane">
                                        <div class="qr-box">
                                            <div class="qr-preview-crop">
                                                <img src="{{ asset('assets/img/qr.jpeg') }}" alt="360 Business and Services QR" id="qrPreviewImage">
                                            </div>
                                            <p class="qr-click-hint">Click image to enlarge</p>
                                            <p class="qr-note">Scan QR to complete payment instantly.</p>
                                        </div>
                                    </div>
                                </div>
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

    <div class="qr-lightbox" id="qrLightbox" aria-hidden="true">
        <div class="qr-lightbox-content">
            <button type="button" class="qr-lightbox-close" id="qrLightboxClose" aria-label="Close QR preview"><i class="fas fa-times"></i></button>
            <img src="{{ asset('assets/img/qr.jpeg') }}" alt="QR Full Preview">
        </div>
    </div>

    <script>
        (function() {
            var tabButtons = document.querySelectorAll('.payment-tab-btn');
            var tabPanes = document.querySelectorAll('.payment-tab-pane');
            var copyButtons = document.querySelectorAll('.copy-btn');
            var copyToast = document.getElementById('copyToast');
            var qrPreviewImage = document.getElementById('qrPreviewImage');
            var qrLightbox = document.getElementById('qrLightbox');
            var qrLightboxClose = document.getElementById('qrLightboxClose');

            tabButtons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var targetId = btn.getAttribute('data-tab-target');

                    tabButtons.forEach(function(item) {
                        item.classList.remove('active');
                    });

                    tabPanes.forEach(function(pane) {
                        pane.classList.remove('active');
                    });

                    btn.classList.add('active');
                    document.getElementById(targetId).classList.add('active');
                });
            });

            copyButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var targetId = button.getAttribute('data-copy-target');
                    var valueElement = document.getElementById(targetId);
                    if (!valueElement) {
                        return;
                    }

                    var value = valueElement.textContent.trim();
                    navigator.clipboard.writeText(value).then(function() {
                        if (copyToast) {
                            copyToast.classList.add('show');
                            copyToast.textContent = 'Copied: ' + value;
                            setTimeout(function() {
                                copyToast.classList.remove('show');
                            }, 1500);
                        }
                    });
                });
            });

            if (qrPreviewImage && qrLightbox) {
                qrPreviewImage.addEventListener('click', function() {
                    qrLightbox.classList.add('active');
                    qrLightbox.setAttribute('aria-hidden', 'false');
                });
            }

            if (qrLightboxClose && qrLightbox) {
                qrLightboxClose.addEventListener('click', function() {
                    qrLightbox.classList.remove('active');
                    qrLightbox.setAttribute('aria-hidden', 'true');
                });
            }

            if (qrLightbox) {
                qrLightbox.addEventListener('click', function(event) {
                    if (event.target === qrLightbox) {
                        qrLightbox.classList.remove('active');
                        qrLightbox.setAttribute('aria-hidden', 'true');
                    }
                });
            }
        })();
    </script>



@endsection
