@extends('layouts.app')

@section('title', 'FAQ - Frequently Asked Questions | 360 Business and Services | Business Solutions Kolkata')

@section('meta_description', 'Find answers to frequently asked questions about 360 Business and Services. Get information about GST registration, company formation, tax filing, business compliance, pricing, documentation, and our professional CA services in Kolkata. Expert solutions for all your business queries.')

@section('keywords', 'FAQ 360 business services, business services questions, GST registration FAQ, company registration questions, tax filing queries, business compliance FAQ, CA services questions, startup queries, business formation FAQ, accounting services questions, Kolkata business services FAQ')

@section('canonical_url', url('/faq'))

@section('og_title', 'FAQ - Business Services Questions Answered | 360 Business and Services')
@section('og_description', 'Get answers to common questions about our business services including GST registration, company formation, tax filing, and compliance management. Expert guidance from 360 Business and Services.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/faq/360-business-services-faq-og.jpg')
@section('og_image_alt', '360 Business and Services FAQ - Business Services Questions Answered')

@section('twitter_title', 'FAQ - Business Services Questions | 360 Business and Services')
@section('twitter_description', 'Common questions about GST registration, company formation, tax filing & compliance management answered by our expert team.')

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
            "name": "FAQ",
            "item": "{{ url('/faq') }}"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "name": "Frequently Asked Questions - 360 Business and Services",
    "description": "Common questions and answers about business services, company registration, GST filing, and compliance management.",
    "publisher": {
        "@type": "Organization",
        "name": "360 Business and Services",
        "url": "https://360bizservice.com"
    },
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What services does 360 Business and Services provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We provide comprehensive business solutions including GST registration, income tax consultation, company formation, accounting services, business compliance, virtual CFO services, and business consultation."
            }
        },
        {
            "@type": "Question",
            "name": "How much does company registration cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company registration costs vary based on the type of entity. Private Limited Company registration starts from ₹10,999 including basic documentation and government fees."
            }
        },
        {
            "@type": "Question",
            "name": "How long does GST registration take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration typically takes 3-7 working days after submission of complete documents, subject to government portal availability."
            }
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
                            <h2 class="title">FAQ</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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

        <!-- services-details-area -->
        <section class="services-details-area pt-50 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="order-0 order-lg-12">
                        <div class="services-details-wrap">
                            <div class="services-details-content">
                                <div class="company-benefit-wrap">
                                    <h2 class="title-two text-center pb-5">Frequently Asked Question</h2>
                                   <div class="accordion-wrap-three">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What services does your firm provide?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We offer a range of services, including compliance management, licensing assistance, and taxation advisory, for businesses of all sizes.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Why is compliance important for my business?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Compliance ensures that your business operates within the legal framework, minimizing the risk of penalties, lawsuits, and reputational damage.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        How can you help with licensing requirements?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Our experts guide you through the complex process of obtaining the necessary licenses and permits for your business, saving you time and ensuring compliance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        What types of taxes does your firm handle?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We provide comprehensive taxation services covering income tax, sales tax, VAT, GST, and other relevant taxes, ensuring accurate filings and minimizing tax liabilities.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        How do you stay updated with changing regulations and tax laws?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Our team continuously monitors regulatory changes and updates to ensure that our clients remain compliant with the latest laws and regulations.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        Can you assist with international compliance and taxation?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes, we have expertise in international compliance and taxation, helping businesses navigate the complexities of operating in multiple jurisdictions.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        What industries do you specialize in?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We cater to a diverse range of industries, including, but not limited to, finance, healthcare, technology, manufacturing, and retail.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                        How do I get started with your firm?
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Simply reach out to us via phone, email, or our website, and one of our consultants will be happy to discuss your specific needs and tailor a solution for your business.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                        How do you ensure client confidentiality?
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We adhere to strict confidentiality policies and procedures, safeguarding our clients' sensitive information at all times.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                        What sets your firm apart from others in the industry?
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Our firm combines expertise, personalized service, and a commitment to excellence to deliver tailored solutions that meet our clients' unique needs and exceed their expectations.</p>
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

    </main>
    <!-- main-area-end -->
@endsection
