@extends('layouts.app')

@section('title', 'Careers at 360 Business Services | Join Our Team | Business Consulting Jobs India')
@section('meta_description', 'Join 360 Business Services team! Explore career opportunities in business consulting, CA services, tax advisory, and business development across India. Apply now for exciting roles in the business services industry.')
@section('keywords', '360 business careers, business consulting jobs, CA jobs India, tax advisor careers, business development jobs, accounting jobs, virtual CFO jobs, business analyst careers, 360 business services jobs, business consultant recruitment')
@section('canonical_url', route('career'))

@section('og_title', 'Careers at 360 Business Services | Join Our Business Consulting Team')
@section('og_description', 'Join 360 Business Services team! Explore career opportunities in business consulting, CA services, tax advisory, and business development across India.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/logo/360-business-services-careers-og.jpg')
@section('og_image_alt', '360 Business Services Careers - Join Our Team')

@section('twitter_title', 'Careers at 360 Business Services | Business Consulting Jobs')
@section('twitter_description', 'Build your career with 360 Business Services. Opportunities in business consulting, CA services, tax advisory & business development across India.')

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
            "name": "Careers",
            "item": "{{ route('career') }}"
        }]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Careers at 360 Business Services",
        "description": "Join 360 Business Services team! Explore career opportunities in business consulting, CA services, tax advisory, and business development across India.",
        "url": "{{ route('career') }}",
        "mainEntity": {
            "@type": "Organization",
            "name": "360 Business and Services",
            "description": "Leading business services provider across India",
            "url": "https://360bizservice.com",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Career Opportunities",
                "itemListElement": [{
                        "@type": "JobPosting",
                        "title": "Business Consultant",
                        "description": "Help businesses with registration, compliance, and advisory services",
                        "hiringOrganization": {
                            "@type": "Organization",
                            "name": "360 Business and Services"
                        },
                        "jobLocation": {
                            "@type": "Place",
                            "address": {
                                "@type": "PostalAddress",
                                "addressCountry": "IN"
                            }
                        },
                        "employmentType": "FULL_TIME"
                    },
                    {
                        "@type": "JobPosting",
                        "title": "Tax Advisor",
                        "description": "Provide tax consultation and filing services to clients",
                        "hiringOrganization": {
                            "@type": "Organization",
                            "name": "360 Business and Services"
                        },
                        "jobLocation": {
                            "@type": "Place",
                            "address": {
                                "@type": "PostalAddress",
                                "addressCountry": "IN"
                            }
                        },
                        "employmentType": "FULL_TIME"
                    },
                    {
                        "@type": "JobPosting",
                        "title": "Business Development Executive",
                        "description": "Drive business growth and client acquisition",
                        "hiringOrganization": {
                            "@type": "Organization",
                            "name": "360 Business and Services"
                        },
                        "jobLocation": {
                            "@type": "Place",
                            "address": {
                                "@type": "PostalAddress",
                                "addressCountry": "IN"
                            }
                        },
                        "employmentType": "FULL_TIME"
                    }
                ]
            }
        },
        "hasPart": [{
                "@type": "WebPageElement",
                "name": "Job Openings",
                "description": "Current career opportunities at 360 Business Services"
            },
            {
                "@type": "WebPageElement",
                "name": "Application Form",
                "description": "Apply for careers at 360 Business Services"
            },
            {
                "@type": "WebPageElement",
                "name": "Company Culture",
                "description": "Learn about working at 360 Business Services"
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
                        <h2 class="title">Career</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
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

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif



    <!-- team-details-area -->
    <section class="team-details-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 card">
                    <div class="team-details-content">
                        <h2 class="title">Marketing Representative</h2>
                        <span>Kolkata -Onsite</span>
                        <p>As a Marketing Representative, you will play a pivotal role in promoting our products or services to potential customers. You will be responsible for developing and implementing marketing strategies, building relationships with clients, and representing our brand in a positive light. This role requires creativity, strong communication skills, and a keen understanding of market trends.</p>
                        <div class="team-skill-wrap">
                            <p><strong>Requirements:</strong></p>
                            <ul style="font-size: 14px;">
                                <li><strong>Salary:</strong> 1.80LPA - 2.40LPA ( Plus Incentives) </li>
                                <li><strong>Female Candidate Prefarable</strong></li>
                                <li>Strategically target and secure new corporate clients within the designated region or market, contributing to business growth and market penetration.</li>
                                <li>Consistently meet or exceed established sales and revenue targets, driving profitability and ensuring financial objectives are met.</li>
                                <li>Build and sustain strong, long-term relationships with clients, customizing product presentations and pitches to align with their specific needs and business objectives.</li>
                                <li>Ensure the timely collection of payments, maintaining a consistent cash flow and reducing outstanding receivables.</li>
                                <li>Successfully achieve annual sales quotas through proactive new business acquisition and client retention strategies.</li>
                                <li>Deliver impactful presentations to senior management teams, effectively communicating value propositions and business insights.</li>
                                <li>Identify and map potential sectors for business expansion, leveraging insights to drive targeted sales efforts.</li>
                                <li>Implement strategies to achieve the planned targets, adapting to market conditions and client feedback.</li>
                                <li>Continuously develop and implement new ideas and approaches to drive sales growth and enhance market share.</li>
                                <li>Regularly interact with clients to foster a committed, partnership-based relationship that ensures mutual success and satisfaction.</li>
                                <li>Adhere to the company's sales processes and mechanisms, ensuring all activities are conducted with professionalism, integrity, and in alignment with corporate standards.</li>
                                <li>Display an aggressive approach to converting leads into sales, with a focus on achieving and surpassing targets.</li>
                                <li>Demonstrate proficiency in follow-ups, ensuring that potential clients are consistently engaged and moved through the sales funnel.</li>
                                <li>Exhibit outstanding oral and written communication skills, ensuring clarity, professionalism, and effectiveness in all client interactions.</li>
                            </ul>
                        </div>
                        <div class="team-details-info-wrap mt-20 pb-20">
                            <div class="team-details-info">
                                <div class="td-info-bottom">
                                    <a class="btn btn-three career-btn">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 card">
                    <div class="team-details-content">
                        <h2 class="title">Accountant</h2>
                        <span>Kolkata -Onsite</span>
                        <p>We are seeking a skilled and detail-oriented Accountant to join our accounting team. The ideal candidate will be responsible for maintaining financial records, performing various accounting tasks, and ensuring compliance with relevant regulations and standards. This role offers an opportunity to contribute to the financial health and success of our organization.</p>
                        <div class="team-skill-wrap">
                            <p><strong>Requirements:</strong></p>
                            <ul style="font-size: 14px;">
                                <li><strong>Salary:</strong> 1.80L - 2.40L</li>
                                <li>Minimum 2 Years experience required</li>
                                <li>Ensure accurate and timely filing of GST returns, including GSTR-1, GSTR-3B, and annual returns. Keep abreast of any changes in GST regulations to ensure full compliance and avoid penalties.</li>
                                <li>Oversee the end-to-end process of accounts payable and receivable, ensuring that invoices are issued, payments are collected on time, and any discrepancies are resolved promptly.</li>
                                <li>Maintain accurate and up-to-date financial records, including ledgers, journals, and bank statements. Ensure all transactions are recorded in accordance with accounting principles and GST regulations.</li>
                                <li>Regularly perform reconciliations of bank accounts, GST ledgers, and other financial records to ensure accuracy and resolve any discrepancies.</li>
                                <li>Assist in tax planning by calculating and forecasting GST liabilities. Ensure that all tax obligations are met on time, and explore opportunities for tax optimization.</li>
                                <li>Prepare and organize financial documents and records for internal and external audits. Collaborate with auditors to ensure a smooth and efficient audit process.</li>
                                <li>Monitor and manage inventory levels, ensuring that records align with actual stock levels. Ensure that GST on inventory transactions is correctly accounted for.</li>
                                <li>Prepare and present financial statements, reports, and analyses to management, highlighting key financial metrics, trends, and any areas of concern.</li>
                                <li>Manage relationships with vendors and clients, addressing any issues related to billing, payments, and GST matters. Ensure clear communication and timely resolution of any financial disputes.</li>
                                <li>Assist in the preparation of budgets and financial forecasts, providing insights based on financial data and GST considerations.</li>
                                <li>Ensure that all accounting activities comply with the applicable accounting standards and regulations, including those related to GST.</li>
                                <li>Analyze financial data to identify areas for cost control and efficiency improvements, ensuring that the business operates within budget and maximizes profitability.</li>
                                <li>Utilize accounting software to manage financial records and GST filings efficiently. Stay updated on new tools and technologies that can enhance financial management processes.</li>
                                <li>Stay informed about changes in accounting practices, GST laws, and financial regulations. Continuously seek opportunities to improve accounting processes and financial controls.</li>
                            </ul>
                        </div>
                        <div class="team-details-info-wrap mt-20">
                            <div class="team-details-info">
                                <div class="td-info-bottom">
                                    <a class="btn btn-three career-btn">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details-area-end -->

</main>
<!-- main-area-end -->

<!-- Apply Now -->
<div class="apply-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="apply-close text-white">
        <span><i class="fas fa-times"></i></span>
    </div>

    <div class="apply-wrap text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/img/logo/w_logo.png') }}" class="mb-30" alt="Logo">

                    <h4 class="title">Apply Now</h4>
                    <p class="text-white mb-30">We are experts in comprehensive end-to-end solutions for your business, like company formation, taxation, and any kind of licencing and registration.</p>
                    <div class="apply-form">

                        <div class="col-lg-12">
                            <div class="contact-form">
                                <form method="POST" action="{{ route('submit.application') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="name" id="name" placeholder="Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" name="email" name="email" placeholder="E-mail *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="number" name="phone" id="phone" placeholder="Phone *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="position" id="position" placeholder="Position *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="experience" id="experience" placeholder="Experience *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="location" id="location" placeholder="Location *">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <input type="file" class="form-control" name="resume" id="resume" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="query-button" type="submit">Apply Now</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Apply now end -->
@endsection