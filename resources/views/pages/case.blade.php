@extends('layouts.app')

@section('title', 'Case Studies - 360 Business and Services')
@section('meta_description', 'Contact us to get in touch with our business consulting services.')
@section('keywords', 'contact, business consulting, services')
@section('canonical_url', url('/case'))

@section('main')
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Case Study</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Case Study</li>
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

        <!-- project-area -->
        <section class="project-area-two project-bg-two" data-background="{{ asset('assets/img/bg/project_bg02.jpg') }}">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two mb-40 tg-heading-subheading animation-style3">
                            <span class="sub-title">Complete Projects</span>
                            <h2 class="title tg-element-title">Our recently case <br> studies of our clients</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="project-content-top">
                            <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img01.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img02.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img03.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}l">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img01.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img02.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img03.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img02.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <img src="{{ asset('assets/img/project/h2_project_img03.jpg') }}" alt="">
                            </div>
                            <div class="project-content-two">
                                <h2 class="title"><a href="{{ route('casedetails') }}">Finance Consultancy</a></h2>
                                <span>Advisory</span>
                                <a href="{{ route('casedetails') }}" class="link-btn"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
