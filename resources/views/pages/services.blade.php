@extends('layouts.app')

@section('title', '70+ Business Services | GST ₹499 | Company Registration ₹5999')
@section('meta_description', 'Complete business services catalog: GST registration ₹499, company formation ₹5999, MSME registration ₹1999. Compare prices, get instant quotes. 24/7 expert support.')
@section('keywords', '360 business services, all business solutions, complete business services India, company registration services, GST registration online, MSME registration, tax filing services, business compliance India, virtual CFO services, business consulting India, 360 business solutions')
@section('canonical_url', route('services'))

@section('og_title', '360 Business Services | 70+ Business Solutions | All Services in One Place')
@section('og_description', '360 Business Services offers 70+ business solutions including company registration, GST registration, MSME registration, tax filing, compliance services, and business consulting across India.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/logo/og-logo.jpg')
@section('og_image_alt', '360 Business Services - All Business Solutions in One Place')

@section('twitter_title', '360 Business Services | 70+ Business Solutions Available')
@section('twitter_description', 'Complete business solutions: Company registration, GST registration, MSME registration, tax filing, compliance services & business consulting across India.')

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
            "name": "All Services",
            "item": "{{ route('services') }}"
        }]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "360 Business Services - Complete Service Catalog",
        "description": "Browse all 70+ business services offered by 360 Business and Services including company registration, licensing, compliance, and consulting services across India.",
        "url": "{{ route('services') }}",
        "mainEntity": {
            "@type": "ItemList",
            "name": "Business Services Categories",
            "numberOfItems": 4,
            "itemListElement": [{
                    "@type": "Service",
                    "position": 1,
                    "name": "Business Formation Services",
                    "description": "Complete company registration services including Private Limited, OPC, LLP, Partnership, NGO, and more",
                    "url": "{{ route('pvt') }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "360 Business and Services"
                    }
                },
                {
                    "@type": "Service",
                    "position": 2,
                    "name": "Registration & Licensing Services",
                    "description": "GST registration, MSME registration, Trade License, FSSAI, ISO certification and 20+ more licenses",
                    "url": "{{ route('gst') }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "360 Business and Services"
                    }
                },
                {
                    "@type": "Service",
                    "position": 3,
                    "name": "Compliance & Tax Filing Services",
                    "description": "GST filing, Income Tax filing, TDS filing, Annual compliance, Audit services and more",
                    "url": "{{ route('gst-return-filling') }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "360 Business and Services"
                    }
                },
                {
                    "@type": "Service",
                    "position": 4,
                    "name": "Business Consulting Services",
                    "description": "Virtual CFO, Management consulting, Property services, Legal notices and business advisory",
                    "url": "{{ route('virtual-cfo-service') }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "360 Business and Services"
                    }
                }
            ]
        },
        "hasPart": [{
                "@type": "WebPageElement",
                "name": "Service Categories",
                "description": "Browse services by category for easy navigation"
            },
            {
                "@type": "WebPageElement",
                "name": "Pricing Information",
                "description": "Transparent pricing for all business services"
            },
            {
                "@type": "WebPageElement",
                "name": "Service Comparison",
                "description": "Compare different business registration options"
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
                        <h2 class="title">Our Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
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

    <!-- about-area -->
    <section class="about-area about-bg" data-background="assets/img/bg/about_bg.jpg">
        <div class="container">
            <div class="row align-items-center pb-30">
                <div class="col-lg-5">
                    <div class="about-img-wrap">
                        <img src="{{ asset('assets/img/images/about_img01.png') }}" alt="" class="main-img">
                        <img src="{{ asset('assets/img/images/about_img_shape01.png') }}" alt="">
                        <img src="{{ asset('assets/img/images/about_img_shape02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title mb-25 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">What We are Doing</span>
                            <h2 class="title tg-element-title">Changing The Way To Do Best Business Solutions</h2>
                        </div>
                        <p>At 360 Business and Services, we deliver customized management consulting solutions to help businesses improve performance, optimize operations, and drive sustainable growth. Our experienced consultants and industry experts provide end-to-end services tailored to your organization's unique challenges and goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services-area pt-50 pb-60">
        <div class="services-container">
            <div class="services-grid">

                <!---== Accounting & Auditing Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Accounting & Auditing Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Maintain clean, up-to-date financial records</li>
                                        <li>Ensure internal & external audit readiness</li>
                                        <li>Customized accounting solutions</li>
                                        <li>MIS reports & actionable financial insights</li>
                                        <li>End-to-end regulatory compliance support</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Accounting Outsourcing Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Accounting Outsourcing Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Accurate bookkeeping and financial record maintenance</li>
                                        <li>Salary disbursement with PF, ESI, and TDS compliance</li>
                                        <li>Expert handling of GST, TDS, and income tax returns</li>
                                        <li>Reduce operational cost and improve financial efficiency</li>
                                        <li>Dedicated compliance management for growing businesses</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Business Health Check-Up Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-puzzle-piece"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Business Health Check-Up Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Assess workflow, productivity, and efficiency metrics</li>
                                        <li>Analyze cash flow, profitability, and cost structure</li>
                                        <li>SWOT analysis and performance diagnostics</li>
                                        <li>Design risk mitigation plans</li>
                                        <li>Build custom growth roadmaps</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== E-Cashbook – Smart Accounting Software ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="card-title">
                                    <h3>E-Cashbook – Smart Accounting Software</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>User-friendly dashboard with intuitive navigation</li>
                                        <li>Real-time income, expense, and transaction tracking</li>
                                        <li>Automated financial report generation</li>
                                        <li>Tax and compliance-ready features</li>
                                        <li>Specially designed for MSMEs & startups</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Company Funding Solutions ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Company Funding Solutions</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Assess funding readiness and capital requirement</li>
                                        <li>Connect with lenders, investors, and VCs</li>
                                        <li>Pitch decks, financial projections, and term sheet support</li>
                                        <li>Assistance for MSME/Startup India scheme-based funding</li>
                                        <li>End-to-end documentation & compliance</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Management Consulting Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Management Consulting Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Strategic growth planning and roadmap development</li>
                                        <li>Organizational restructuring and leadership enablement</li>
                                        <li>Workflow optimization for efficiency</li>
                                        <li>Expert-led transition and change management</li>
                                        <li>Innovation strategies for performance improvement</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Company Incorporation & Business Setup ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-puzzle-piece"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Company Incorporation & Business Setup</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Business name reservation and legal registration</li>
                                        <li>MOA & AOA drafting and filing</li>
                                        <li>PAN, TAN, DSC, DIN processing</li>
                                        <li>GST, MSME and other statutory registrations</li>
                                        <li>Advisory on post-incorporation compliance</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== GST Registration & Return Filing Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <div class="card-title">
                                    <h3>GST Registration & Return Filing Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Hassle-free GST registration for startups and MSMEs</li>
                                        <li>Timely monthly/quarterly GST return filings</li>
                                        <li>Accurate GSTR-1, GSTR-3B and reconciliation</li>
                                        <li>Amendments, cancellations, and corrections support</li>
                                        <li>Avoid penalties with expert guidance</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Licensing & Registration Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-puzzle-piece"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Licensing & Registration Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Trade & business license application and renewal</li>
                                        <li>UDYAM, ROC, FSSAI, Shops & Establishment registrations</li>
                                        <li>Legal documentation, filing, and follow-up</li>
                                        <li>End-to-end compliance with industry norms</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Personal & Business Tax Consultation ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Personal & Business Tax Consultation</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Personalized income tax planning and savings optimization</li>
                                        <li>Strategic tax advisory for business entities</li>
                                        <li>Accurate and timely tax filing services</li>
                                        <li>Minimize legal liabilities and enhance compliance</li>
                                        <li>Custom support for individuals, startups, and enterprises</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Project Reports & Financing Solutions ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Project Reports & Financing Solutions</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Draft detailed and bank-compliant project reports</li>
                                        <li>Conduct financial feasibility studies</li>
                                        <li>Assistance in securing bank loans and MSME financing</li>
                                        <li>Tailored financing strategies by business sector</li>
                                        <li>Documentation and liaison services</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Property Compliance & Regulatory Support ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-puzzle-piece"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Property Compliance & Regulatory Support</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Property valuation and title verification</li>
                                        <li>End-to-end property registration and legal due diligence</li>
                                        <li>Regulatory approvals for property transactions</li>
                                        <li>Stamp duty consultation and transparent cost guidance</li>
                                        <li>Residential & commercial coverage across West Bengal</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Legal Advisory & Cybercrime Protection Services ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Legal Advisory & Cybercrime Protection Services</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>Cyber law compliance and data privacy consultation</li>
                                        <li>Drafting cybersecurity policies and legal clauses</li>
                                        <li>Support for online fraud reporting and FIR filing</li>
                                        <li>Digital evidence guidance & documentation</li>
                                        <li>Cyber-risk awareness training for teams</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---== Strategic Company Legal Advisory Support ==--->
                <div class="premium-card">
                    <div class="premium-card-inner">
                        <div class="premium-card-front">
                            <div class="card-decoration"></div>
                            <div class="floating-element element-1"></div>
                            <div class="floating-element element-2"></div>
                            <div class="floating-element element-3"></div>
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Strategic Company Legal Advisory Support</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-description">
                                    <ul>
                                        <li>ROC compliance, resolutions, and secretarial filings</li>
                                        <li>MOA, AOA, NDAs, agreements, and legal drafting</li>
                                        <li>Structuring advisory and regulatory audits</li>
                                        <li>Dispute resolution and legal representation</li>
                                        <li>Business governance and legal risk management</li>
                                    </ul>
                                </div>
                                <div class="card-action">
                                    <a href="javascript:void(0)" onclick="openQuotePopup(this, event)" class="premium-btn quote-btn">
                                        <span>Learn More <i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- brand-area -->
    <x-Brand />
    <!-- brand-area-end -->

</main>
<!-- main-area-end -->

@endsection