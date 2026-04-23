@extends('layouts.app')

@section('title', 'Satisfaction Guarantee - 360 Business and Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/faq'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Satisfaction Guarantee</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Satisfaction Guarantee</li>
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
                        <h2 class="text-center">Satisfaction Guarantee</h2>

                        <p style="font-size: 16px; line-height: 25px;">360 Business and Services guarantees customer satisfaction with our website services and support. If you are not satisfied, please contact us at contact@360bizservice.com, and we will address the issue promptly. However, we cannot refund or credit any payments made to government entities, third parties, or affiliated partners. If you wish to exchange a product or service, please request it and complete a replacement order within 60 days of purchase, excluding payments made to affiliated partners. The full original purchase price, less any taxes, will be credited to your original form of payment.
                        </p>
                        <p style="font-size: 16px; line-height: 25px;">The company cannot guarantee specific outcomes or results, such as government rejections of company names or trademark applications, government backlogs, or website downtime. Additionally, the company does not guarantee the results or outcomes of services provided by affiliated partners. The guarantee only applies to satisfaction issues caused directly by 360 Business and Services and does not cover external factors, such as changes in the situation or state of mind. These issues are beyond our control and are not included in the guarantee.</p>
                    </div>
                </div>
            </section>
        <!-- Text Area -end -->

    </main>
    <!-- main-area-end -->
@endsection
