@extends('layouts.app')

@section('title', 'Terms and Conditions | 360 Business and Services | Terms of Service and Usage Agreement')

@section('meta_description', 'Read the terms and conditions for using 360 Business and Services. Understand our terms of service, usage agreement, service conditions, liability policies, and user responsibilities. Legal terms governing our business services and website usage in Kolkata.')

@section('keywords', 'terms and conditions 360 business services, terms of service, usage agreement, service conditions, legal terms, liability policy, user responsibilities, service agreement, website terms, business terms Kolkata, legal disclaimer, service usage policy')

@section('canonical_url', url('/terms'))

@section('og_title', 'Terms and Conditions | 360 Business and Services | Service Agreement')
@section('og_description', 'Terms and conditions governing the use of 360 Business and Services. Read our service agreement, usage terms, and legal policies for our business services.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/terms/360-business-services-terms-og.jpg')
@section('og_image_alt', '360 Business and Services Terms and Conditions - Service Agreement')

@section('twitter_title', 'Terms and Conditions | 360 Business and Services')
@section('twitter_description', 'Terms and conditions for 360 Business and Services. Read our service agreement and usage terms for our business solutions.')

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
            "name": "Terms and Conditions",
            "item": "{{ url('/terms') }}"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Terms and Conditions - 360 Business and Services",
    "description": "Terms and conditions governing the use of 360 Business and Services website and business solutions.",
    "url": "{{ url('/terms') }}",
    "publisher": {
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
        "telephone": "+91-9830747981",
        "email": "contact@360bizservice.com"
    },
    "dateModified": "{{ date('Y-m-d') }}",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "name": "360 Business and Services",
        "url": "https://360bizservice.com"
    },
    "about": {
        "@type": "Thing",
        "name": "Terms of Service",
        "description": "Legal terms and conditions for using business services"
    }
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
                            <h2 class="title">Terms Of Use</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Terms Of Use</li>
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

        <!-- Text Area -->
            <section class=" pt-50 pb-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <h2 class="text-center">Terms Of Use</h2>

                        <p>
                            By using our website, you agree to the terms and conditions outlined in our User Agreement and Privacy Policy. We reserve the right to change this agreement without notice, and you are responsible for reviewing it periodically to familiarize yourself with any changes. Continued use of the site after such modifications signifies your agreement with the modified terms and conditions.
                        </p>
                        <ul class="pb-30">
                            <li>Accessing our resources requires providing accurate and up-to-date personal information, such as identification, email, phone number, and contact details. You are responsible for maintaining the confidentiality of your login information and are responsible for all activities under your account. Accessing resources through any other means, including automated, unethical, or unconventional means, is strictly prohibited. Engaging in activities that disrupt or interfere with our resources, including the servers and networks to which they are located, is also strictly prohibited. Attempting to copy, duplicate, reproduce, sell, trade, or resell our resources is also strictly prohibited.</li>
                            <li>You are solely responsible for any consequences, losses, or damages that may arise from unauthorized activities, which may incur criminal or civil liability. We may provide various open communication tools on our website, such as blog comments, posts, public chat, forums, message boards, newsgroups, product ratings and reviews, and social media services. However, we do not pre-screen or monitor the content posted by users. If you choose to use these tools to submit content to our website, you must use them responsibly and ethically.</li>
                            <li>You agree not to upload, post, share, or distribute content that is illegal, threatening, defamatory, abusive, harassing, degrading, intimidating, fraudulent, deceptive, invasive, racist, or contains any type of suggestive, inappropriate, or explicit language. You must also not infringe on any trademark, patent, trade secret, copyright, or other proprietary right of any party, contains unauthorized or unsolicited advertising, or impersonates any person or entity, including <a href="https://360bizservice.com">www.360bizservice.com</a> employees or representatives. We have the right at our sole discretion to remove any content that, in our judgement, does not comply with this User Agreement, along with any content that we feel is otherwise offensive, harmful, objectionable, inaccurate, or violates any 3rd party copyrights or trademarks. We are not responsible for any delay or failure in removing such content. If you post content that we choose to remove, you hereby consent to such removal and consent to waive any claim against us.</li>
                            <li><a href="https://360bizservice.com">www.360bizservice.com</a> does not assume any liability for any content posted by users or third-party users. However, content posted using open communication tools on the website becomes the property of 360 Business and Services granting them a perpetual, irrevocable, worldwide, royalty-free, exclusive license to reproduce, modify, adapt, translate, publish, publicly display, and distribute as they see fit. This only applies to content posted via open communication tools and does not cover information provided during the registration process.</li>
                            <li>You agree to indemnify 360 Business and Services or its parent company, affiliates, and their directors, officers, managers, employees, donors, agents, and licensors from and against losses, expenses, damages, and costs resulting from any violation of this User Agreement or failure to fulfill account obligations. <a href="https://360bizservice.com">www.360bizservice.com</a> reserves the right to take over the exclusive defense of any claim for which it is entitled to indemnification under this User Agreement, and you must provide reasonable cooperation. </li>
                        </ul>

                        <h5>LIMITATION OF WARRANTIES</h5>
                        <p class="pb-30">By using our website, you understand and agree that all resources we provide are "as is" and "as available." This means that we do not represent or warrant to you that.</p>

                        <h5>LIMITATION OF LIABILITY</h5>
                        <p class="pb-30">You agree that any claim against us will be limited to the amount paid for the use of our products and services. www.360bizservice.com is not liable for any direct, indirect, incidental, consequential, or exemplary loss or damages incurred due to using our resources, changes, data loss, corruption, cancellation, loss of access, or downtime, as long as applicable limitation of liability laws apply.</p>

                        <h5>TERMINATION OF USE</h5>
                        <p class="pb-30">We reserve the right to suspend or terminate your access to our website and resources at any time, including for breach of this User Agreement. If you suspect illegal, fraudulent, or abusive activity, your relationship may be terminated and you may be referred to law enforcement authorities. Your right to use our resources will cease immediately, and we may remove any information you have on file, including account or login information.</p>

                        <h5>GOVERNING LAW</h5>
                        <p class="pb-10">This website is controlled by 360 Business and Services from our offices located in the state of West Bengal, India. By accessing our website, you agree that the statutes and laws of West Bengal, India,</p>
                        <p class="pb-30">Furthermore, any action to enforce this User Agreement shall be brought in the federal or state courts located in West Bengal, India only. You hereby agree to personal jurisdiction by such courts and waive any jurisdictional, venue, or inconvenient forum objections to such courts.</p>

                        <h5>CANCELLATION AND REFUND</h5>
                        <p class="pb-30">A cancellation of an order is not possible once the payment has been made. No refunds will be given except in the event of cancellation or non-performance of service by 360 Business and Services.</p>

                        <h5>CHANGE TO THE REFUND AND CANCELLATION POLICY</h5>
                        <p class="pb-30">360 Business and Services is committed to providing high-quality accounting, financial, and secretarial services online & Offline. We guarantee customer satisfaction and strive to improve our services. If you are not satisfied, you can contact us immediately for a refund but the refund or credit can be used for future orders ( Products or Services ) only.</p>

                        <h5>REFUND POLICY</h5>
                        <p class="pb-30">360 Business and Services retains advance fees in a client account and earns them upon working on a client's matter. Fees are earned at different rates and times depending on milestones, such as providing client portal access, assigning a relationship manager, obtaining a DIN, and filing forms. Refunds cannot be provided for earned fees as resources and man hours spent on delivering the service are non-returnable. Additionally, 360 Business and Services cannot refund or credit money paid to government entities or third parties involved in processing orders. Under any circumstance, 360 Business and Services shall be liable to refund only up to the fee paid by the client.</p>

                        <h5>CHANGE OF SERVICE</h5>
                        <p class="pb-30">If you want to change the service you ordered for a different one, you must request this change of service within 60 days of purchase. The purchase price of the original service, less any earned fee and money paid to government entities, such as filing fees or taxes, or to other third parties with a role in processing your order, will be credited to your 360 Business and Services account. You can use the balance credit for any other 360 Business and Services's service.</p>

                        <h5>SATISFACTION GUARANTEE:</h5>
                        <p class="pb-30">360 Business and Services (Company) guarantees you the customer satisfaction with our website services and support. If you are not satisfied, you can contact us at <a href="mailto:contact@360bizservice.com">contact@360bizservice.com</a>contact@360bizservice.com and we will address the issue immediately. However, we cannot refund or credit any money paid to government entities, third parties, or directly to an affiliated partner. If you want to exchange a product or service, you must request it and complete a replacement order within 60 days of purchase, excluding payments made to affiliated partner. The full original purchase price, less any tax, is credited to the original form of your payment.
                            The company cannot guarantee the results or outcome of your specific procedure, such as government rejection of company name or trademark applications, government backlogs, or website downtime. The company does not guarantee the results or outcomes of services rendered by our affiliated partners.The guarantee only covers satisfaction issues caused by 360 Business and Services, not changes to the situation or state of mind. These issues are beyond our control and are not covered by the guarantee.
                        </p>

                        <h5>FORCE MAJEURE</h5>
                        <p class="pb-30">360 Business and Services is not liable for any cessation, interruption, or delay in fulfilling its obligations due to natural disasters, acts of God, epidemics, court actions, law changes, explosions, wars, terrorism, armed conflicts, labor strikes, lockouts, or other Force Majeure Events beyond its reasonable control, whether foreseen or unforeseen. This policy ensures that 360 Business and Services remains committed to providing quality service to its clients.</p>

                        <h5>CANCELLATION FEE</h5>
                        <p>360 Business and Services guarantees satisfaction only, not changes to your situation or state of mind. If you require a service to be held, the fee paid will be held until you start the service. Before processing refunds, we will make our best effort to complete the service. If you are not satisfied, a cancellation fee of 20% plus the earned fee and government fee will apply. If a service change occurs, the cancellation fee will not apply.+</p>
                    </div>
                </div>
            </section>
        <!-- Text Area -end -->

    </main>
    <!-- main-area-end -->
@endsection
