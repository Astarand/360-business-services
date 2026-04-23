@extends('layouts.app')

@section('title', '360 Business Services Pricing | Transparent Pricing for All Services | Compare Business Service Costs')
@section('meta_description', '360 Business Services transparent pricing for all business solutions. Compare costs for company registration (₹6,499), GST registration (₹999), MSME registration (₹1,499), tax filing and more. No hidden charges.')
@section('keywords', '360 business services pricing, business registration cost, GST registration price, company formation charges, MSME registration fees, tax filing costs, business service rates, transparent pricing, no hidden charges, business services cost comparison')
@section('canonical_url', route('pricing'))

@section('og_title', '360 Business Services Pricing | Transparent Costs for All Business Services')
@section('og_description', 'Transparent pricing for all business services. Company registration from ₹6,499, GST registration from ₹999, MSME registration from ₹1,499. No hidden charges.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/logo/360-business-services-pricing-og.jpg')
@section('og_image_alt', '360 Business Services Pricing - Transparent Costs')

@section('twitter_title', '360 Business Services Pricing | Compare Business Service Costs')
@section('twitter_description', 'Transparent pricing for business services: Company registration ₹6,499, GST registration ₹999, MSME ₹1,499. No hidden charges.')

@section('breadcrumb_schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Pricing",
            "item": "{{ route('pricing') }}"
        }]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "360 Business Services Pricing",
        "description": "Transparent pricing for all business services offered by 360 Business and Services. Compare costs and choose the right package for your business needs.",
        "url": "{{ route('pricing') }}",
        "mainEntity": {
            "@type": "ItemList",
            "name": "Business Service Pricing",
            "itemListElement": [{
                    "@type": "Offer",
                    "position": 1,
                    "name": "Basic Business Package",
                    "description": "Essential business registration services",
                    "price": "6499",
                    "priceCurrency": "INR",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Private Limited Company Registration"
                    }
                },
                {
                    "@type": "Offer",
                    "position": 2,
                    "name": "Standard Business Package",
                    "description": "Comprehensive business setup with compliance",
                    "price": "9999",
                    "priceCurrency": "INR",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Complete Business Setup Package"
                    }
                },
                {
                    "@type": "Offer",
                    "position": 3,
                    "name": "Premium Business Package",
                    "description": "Full business setup with ongoing support",
                    "price": "15999",
                    "priceCurrency": "INR",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Premium Business Setup with Support"
                    }
                }
            ]
        },
        "hasPart": [{
                "@type": "WebPageElement",
                "name": "Service Packages",
                "description": "Compare different business service packages"
            },
            {
                "@type": "WebPageElement",
                "name": "Pricing Calculator",
                "description": "Calculate costs for your specific business needs"
            },
            {
                "@type": "WebPageElement",
                "name": "Payment Options",
                "description": "Flexible payment methods available"
            }
        ]
    }
</script>
@endsection

@section('main')

<!-- main-area -->
<main class="fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Pricing Plans</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing Plans</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('assets/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src="{{ asset('assets/img/images/breadcrumb_shape02.png') }}" alt="">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- pricing-area -->
    <section class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Pricing Chart</span>
                        <h2 class="title tg-element-title">Best Pricing Plan For You</h2>
                        <p>Ever find yourself staring at your computer screen a good consulting <br> Here we are providing the best pricing plan for you.</p>
                    </div>
                </div>
            </div>
            <div class="pricing-item-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h2 class="title">Start Up </h2>
                                <p>Ever find yourself staring at your follow computer screen a good</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>₹</strong>19,999<span>/Month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    @foreach ([
                                    'DIN & DSC',
                                    'MCA Name approval',
                                    'Company Formation',
                                    'Business Commencement',
                                    'Auditor Recruitment',
                                    'Tan Registration',
                                    'Trade License',
                                    'P-Tax Registration',
                                    'Business Bank Account',
                                    'GST Registration',
                                    'Shop & Establishment',
                                    ] as $item)
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{ route('payment') }}" class="btn">Get The Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box active">
                            <span class="popular-tag">Popular</span>
                            <div class="pricing-head">
                                <h2 class="title">Standard</h2>
                                <p>Ever find yourself staring at your follow computer screen a good</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>₹</strong>24,999<span>/Month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    @foreach ([
                                    'DIN & DSC',
                                    'MCA Name approval',
                                    'Company Formation',
                                    'Business Commencement',
                                    'Auditor Recruitment',
                                    'Tan Registration',
                                    'Trade License',
                                    'P-Tax Registration',
                                    'Business Bank Account',
                                    'GST Registration',
                                    'Shop & Establishment',
                                    'MSME registration',
                                    'PF & ESI Registration',
                                    ] as $item)
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{ route('payment') }}" class="btn">Get The Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h2 class="title">Accounting Outsource</h2>
                                <p>Ever find yourself staring at your follow computer screen a good</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>₹</strong>4,999<span>/Month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    @foreach ([
                                    'Professional Accountant Support',
                                    'CA provides backend support',
                                    'Weekly Accounting support',
                                    'Monthly GST returns',
                                    'Company accounts management',
                                    'PF & ESI Management',
                                    'TDS return submission',
                                    'Virtual CFO Services',
                                    ] as $item)
                                    <li><img src="{{ asset('assets/img/icons/check_icon02.svg') }}" alt="">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{ route('payment') }}" class="btn">Get The Plan Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->


    <!-- brand-area -->
    <div class="brand-area-six pt-80 pb-80">
        <div class="container">
            <div class="row brand-active">
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img03.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img04.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img05.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img06.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img07.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img08.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img09.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img10.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img11.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img12.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img13.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img14.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img15.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img16.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img17.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img18.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="{{ asset('assets/img/brand/brand_img19.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->


</main>
<!-- main-area-end -->

@endsection