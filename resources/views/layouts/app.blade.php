<!doctype html>
<html class="no-js" lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="format-detection" content="telephone=no">

    <!-- Performance & SEO Meta Tags -->
    <meta http-equiv="X-DNS-Prefetch-Control" content="on">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://www.google.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

    <!-- Google Fonts -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    </noscript>

    <!-- Font Loading Detection -->
    <script>
        (function() {
            'use strict';

            // Add font-loading class initially
            document.documentElement.classList.add('font-loading');

            // Check if fonts are loaded
            function checkFontsLoaded() {
                if (document.fonts && document.fonts.ready) {
                    document.fonts.ready.then(function() {
                        document.documentElement.classList.remove('font-loading');
                        document.documentElement.classList.add('font-loaded');
                    });
                } else {
                    // Fallback for browsers without FontFaceSet API
                    setTimeout(function() {
                        document.documentElement.classList.remove('font-loading');
                        document.documentElement.classList.add('font-loaded');
                    }, 3000);
                }
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', checkFontsLoaded);
            } else {
                checkFontsLoaded();
            }
        })();
    </script>

    <!-- Title -->
    <title>@yield('title', env('SEO_DEFAULT_TITLE', '360 Business and Services | Complete Business Solutions PAN India |
        GST, Income Tax, Company Registration'))</title>

    <!-- Meta Description -->
    <meta name="description"
        content="@yield('meta_description', env('SEO_DEFAULT_DESCRIPTION', '360 Business and Services provides comprehensive business solutions across India including GST registration, income tax consultation, company formation, accounting services, and compliance management. Expert CA services for startups and established businesses nationwide.'))">

    <!-- Keywords -->
    <meta name="keywords"
        content="@yield('keywords', env('SEO_DEFAULT_KEYWORDS', 'business services India, GST registration online, income tax consultant India, company registration PAN India, accounting services nationwide, CA services online, business compliance India, startup services India, tax filing online, virtual CFO services, business consultation India, MSME registration online, trademark registration India, 360 business services'))">

    <!-- Author & Publisher -->
    <meta name="author" content="{{ env('SEO_AUTHOR', '360 Business and Services') }}">
    <meta name="publisher" content="{{ env('SEO_AUTHOR', '360 Business and Services') }}">
    <meta name="robots"
        content="@yield('robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">
    <meta name="googlebot"
        content="@yield('googlebot', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title"
        content="@yield('og_title', '360 Business and Services | Complete Business Solutions PAN India')">
    <meta property="og:description"
        content="@yield('og_description', '360 Business and Services provides comprehensive business solutions across India including GST registration, income tax consultation, company formation, accounting services, and compliance management. Expert CA services for startups and established businesses nationwide.')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:site_name" content="360 Business and Services">
    <meta property="og:image"
        content="@yield('og_image', 'https://360bizservice.com/assets/img/logo/360-business-services-og-image.jpg')">
    <meta property="og:image:secure_url"
        content="@yield('og_image', 'https://360bizservice.com/assets/img/logo/360-business-services-og-image.jpg')">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt"
        content="@yield('og_image_alt', '360 Business and Services - Complete Business Solutions in Kolkata')">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ env('SEO_TWITTER_HANDLE', '@360bizservice') }}">
    <meta name="twitter:creator" content="{{ env('SEO_TWITTER_HANDLE', '@360bizservice') }}">
    <meta name="twitter:title"
        content="@yield('twitter_title', '360 Business and Services | Complete Business Solutions PAN India')">
    <meta name="twitter:description"
        content="@yield('twitter_description', '360 Business and Services provides comprehensive business solutions across India including GST registration, income tax consultation, company formation, accounting services, and compliance management.')">
    <meta name="twitter:image"
        content="@yield('twitter_image', 'https://360bizservice.com/assets/img/logo/360-business-services-og-image.jpg')">
    <meta name="twitter:image:alt"
        content="@yield('twitter_image_alt', '360 Business and Services - Complete Business Solutions in Kolkata')">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#2575fc">
    <meta name="msapplication-TileColor" content="#2575fc">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="application-name" content="360 Business and Services">
    <meta name="msapplication-tooltip" content="360 Business and Services - Complete Business Solutions">

    <!-- Geographic Meta Tags -->
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="Kolkata">
    <meta name="geo.position" content="22.569195;88.434127">
    <meta name="ICBM" content="22.569195, 88.434127">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0B1M5XS69S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0B1M5XS69S');
    </script>

    <!-- Business Schema Markup -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "360 Business and Services",
            "alternateName": "360BizService",
            "description": "Complete business solutions including GST registration, income tax consultation, company formation, accounting services, and compliance management across India.",
            "url": "https://360bizservice.com",
            "logo": "https://360bizservice.com/assets/img/logo/logo.png",
            "image": "https://360bizservice.com/assets/img/logo/360-business-services-og-image.jpg",
            "telephone": "+91-9830747981",
            "email": "contact@360bizservice.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "11th Floor,TowerNo-1, PS Srijan Corporate Park, GP Block, Sector-V,",
                "addressLocality": "Kolkata",
                "addressRegion": "West Bengal",
                "postalCode": "700091",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 22.569195,
                "longitude": 88.434127
            },
            "areaServed": {
                "@type": "Country",
                "name": "India"
            },
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://360bizservice.com/services?search={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            },
            "mainEntity": [{
                    "@type": "WebPage",
                    "name": "Business Formation Services",
                    "url": "https://360bizservice.com/services",
                    "description": "Complete business registration services including Private Limited, OPC, LLP, Partnership, and more"
                },
                {
                    "@type": "WebPage",
                    "name": "GST Registration",
                    "url": "https://360bizservice.com/gst",
                    "description": "Online GST registration services starting from ₹999"
                },
                {
                    "@type": "WebPage",
                    "name": "Company Registration",
                    "url": "https://360bizservice.com/pvt",
                    "description": "Private Limited Company registration services starting from ₹6499"
                },
                {
                    "@type": "WebPage",
                    "name": "MSME Registration",
                    "url": "https://360bizservice.com/msme",
                    "description": "MSME Udyam registration services for small and medium enterprises"
                },
                {
                    "@type": "WebPage",
                    "name": "Compliance Services",
                    "url": "https://360bizservice.com/gst-return-filling",
                    "description": "Tax filing and compliance services including GST, Income Tax, TDS"
                },
                {
                    "@type": "WebPage",
                    "name": "Career Opportunities",
                    "url": "https://360bizservice.com/career",
                    "description": "Join 360 Business Services team - Career opportunities in business consulting"
                }
            ],
            "serviceType": [
                "Business Formation Services",
                "Private Limited Company Registration",
                "One Person Company Registration",
                "Limited Liability Partnership",
                "Partnership Firm Registration",
                "Proprietorship Registration",
                "Section 8 Company Registration",
                "NGO Registration",
                "Nidhi Company Registration",
                "E-commerce Registration",
                "GST Registration",
                "MSME Registration",
                "Trade License Registration",
                "Professional Tax Registration",
                "FSSAI Registration",
                "ISO Certification",
                "Fire License Registration",
                "AYUSH License",
                "RERA Registration",
                "Labour License Registration",
                "Pollution Control License",
                "Shop Act License",
                "Digital Signature Certificate",
                "Trademark Registration",
                "International Trademark Registration",
                "Trademark Objection",
                "Copyright Registration",
                "IEC Registration",
                "Liquor License",
                "Clinical License",
                "Drug License",
                "Startup Registration",
                "Business Commencement",
                "Auditor Recruitment",
                "Annual Compliance",
                "Professional Tax Filing",
                "Business Tax Filing",
                "GST Return Filing",
                "GST Annual Filing",
                "TDS Filing",
                "PF Filing",
                "Professional Tax Services",
                "GST Invoicing",
                "E-way Bill Services",
                "Form 16 Services",
                "Statutory Audit",
                "Internal Audit",
                "External Audit",
                "Compliance Audit",
                "WEBEL Services",
                "Property Tax Assessment",
                "Property Registration",
                "GST Notice Services",
                "Income Tax Notice",
                "Company Strike Off",
                "Company Health Checkup",
                "Hindu Undivided Family",
                "Management Consulting",
                "Account Outsourcing",
                "Project Report Services",
                "NDA Services",
                "Service Level Agreement",
                "Business Contract",
                "Power of Attorney",
                "Virtual CFO Services",
                "HR Services",
                "Payroll Management",
                "Legal Notice Services"
            ],
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Business Services Catalog",
                "itemListElement": [{
                        "@type": "OfferCategory",
                        "name": "Business Formation Services",
                        "hasOfferCatalog": {
                            "@type": "OfferCatalog",
                            "name": "Company Registration Services",
                            "itemListElement": [{
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Private Limited Company Registration"
                                    },
                                    "price": "6499",
                                    "priceCurrency": "INR"
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "One Person Company Registration"
                                    },
                                    "price": "4999",
                                    "priceCurrency": "INR"
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "LLP Registration"
                                    },
                                    "price": "5999",
                                    "priceCurrency": "INR"
                                }
                            ]
                        }
                    },
                    {
                        "@type": "OfferCategory",
                        "name": "Registration Services",
                        "hasOfferCatalog": {
                            "@type": "OfferCatalog",
                            "name": "License & Registration Services",
                            "itemListElement": [{
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "GST Registration"
                                    },
                                    "price": "999",
                                    "priceCurrency": "INR"
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "MSME Registration"
                                    },
                                    "price": "1499",
                                    "priceCurrency": "INR"
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Trademark Registration"
                                    },
                                    "price": "2999",
                                    "priceCurrency": "INR"
                                }
                            ]
                        }
                    },
                    {
                        "@type": "OfferCategory",
                        "name": "Compliance Services",
                        "hasOfferCatalog": {
                            "@type": "OfferCatalog",
                            "name": "Tax Filing & Compliance Services",
                            "itemListElement": [{
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "GST Return Filing"
                                    },
                                    "price": "599",
                                    "priceCurrency": "INR"
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Income Tax Filing"
                                    },
                                    "price": "999",
                                    "priceCurrency": "INR"
                                }
                            ]
                        }
                    },
                    {
                        "@type": "OfferCategory",
                        "name": "Consulting Services",
                        "hasOfferCatalog": {
                            "@type": "OfferCatalog",
                            "name": "Business Consulting Services",
                            "itemListElement": [{
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Virtual CFO Services"
                                    },
                                    "price": "9999",
                                    "priceCurrency": "INR"
                                },
                                {
                                    "@type": "Offer",
                                    "itemOffered": {
                                        "@type": "Service",
                                        "name": "Management Consulting"
                                    },
                                    "price": "4999",
                                    "priceCurrency": "INR"
                                }
                            ]
                        }
                    }
                ]
            },
            "priceRange": "₹₹",
            "openingHours": "Mo-Sa 09:30-18:00",
            "sameAs": [
                "https://www.facebook.com/360bizservice",
                "https://www.linkedin.com/company/360bizservice",
                "https://twitter.com/360bizservice"
            ],
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "150",
                "bestRating": "5"
            }
        }
    </script>

    <!-- Website Schema for Sitelinks -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "360 Business and Services",
            "alternateName": "360BizService",
            "url": "https://360bizservice.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://360bizservice.com/services?search={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            },
            "mainEntity": {
                "@type": "ItemList",
                "name": "Main Services",
                "itemListElement": [{
                        "@type": "SiteNavigationElement",
                        "position": 1,
                        "name": "Business Registration",
                        "url": "https://360bizservice.com/services"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "position": 2,
                        "name": "GST Registration",
                        "url": "https://360bizservice.com/gst"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "position": 3,
                        "name": "Company Formation",
                        "url": "https://360bizservice.com/pvt"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "position": 4,
                        "name": "MSME Registration",
                        "url": "https://360bizservice.com/msme"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "position": 5,
                        "name": "Tax Filing Services",
                        "url": "https://360bizservice.com/gst-return-filling"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "position": 6,
                        "name": "Career Opportunities",
                        "url": "https://360bizservice.com/career"
                    }
                ]
            }
        }
    </script>

    <!-- Breadcrumb Schema (for internal pages) -->
    @yield('breadcrumb_schema')

    <!-- Article Schema (for blog pages) -->
    @yield('article_schema')

    <!-- CSS here -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/custom.css') }}" as="style">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    </noscript>

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Font Awesome and Icon Fonts - Load Early -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </noscript>
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/service-cards.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Form here -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LczXeQrAAAAAA6_iOZ6PXtD86gQrFT_WFujtvCy"></script>

    <!-- Preload Critical Resources -->
    <link rel="preload" href="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/custom.js') }}" as="script">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WPC9BLK8');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Enhanced Social Media Meta Tags -->
    <meta property="og:site_name" content="360 Business Services">
    <meta property="og:locale" content="en_IN">
    <meta property="article:author" content="360 Business Services">
    <meta property="article:publisher" content="https://www.facebook.com/profile.php?id=61555765840619">

    <!-- Twitter Card Enhanced -->
    <meta name="twitter:site" content="@360bizservice">
    <meta name="twitter:creator" content="@360bizservice">
    <meta name="twitter:card" content="summary_large_image">

    <!-- LinkedIn Meta Tags -->
    <meta property="linkedin:owner" content="360 Business Services">

    <!-- WhatsApp Sharing -->
    <meta property="whatsapp:title" content="@yield('title', 'Business Services')">
    <meta property="whatsapp:description" content="@yield('meta_description', 'Expert business solutions')">

    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="rating" content="general">
    <meta name="revisit-after" content="1 days">
    <meta name="distribution" content="global">
    <meta name="classification" content="business services">
    <meta name="coverage" content="worldwide">
    <meta name="target" content="business owners, entrepreneurs, startups, SMEs">

    <!-- Schema.org for Website -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "360 Business Services",
            "url": "https://360bizservice.com",
            "description": "Complete business solutions across India including GST registration, company formation, and CA services",
            "inLanguage": "en-IN",
            "copyrightHolder": {
                "@type": "Organization",
                "name": "360 Business Services"
            },
            "publisher": {
                "@type": "Organization",
                "name": "360 Business Services",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://360bizservice.com/assets/img/logo/logo.png"
                }
            }
        }
    </script>

    <!-- Sitemap Discovery -->
    <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ url('/sitemap.xml') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- DNS Prefetch for Performance -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">

    <!-- Preconnect for Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>

    <!-- Resource Hints for Performance -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}" as="script">

    <!-- Critical CSS Inline for Above-the-fold Content -->
    <style>
        /* Critical CSS for initial paint */
        body {
            font-family: "Plus Jakarta Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 0
        }

        /* Ensure Font Awesome icons display immediately */
        .fa,
        .fas,
        .far,
        .fab,
        .fal,
        i[class*="fa-"],
        [class*="fa-"] {
            font-family: "Font Awesome 5 Free", "Font Awesome 5 Brands" !important;
            font-style: normal !important;
            font-variant: normal !important;
            text-rendering: auto !important;
            -webkit-font-smoothing: antialiased !important;
        }

        .fas {
            font-weight: 900 !important;
        }

        .far {
            font-weight: 400 !important;
        }

        .fab {
            font-family: "Font Awesome 5 Brands" !important;
            font-weight: 400 !important;
        }

        .flaticon,
        [class*="flaticon-"] {
            font-family: "flaticon" !important;
        }

        .loading {
            opacity: 0.5;
            pointer-events: none
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in-out
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        /* Hide non-critical elements initially */
        .non-critical {
            opacity: 0;
            transition: opacity 0.3s ease
        }

        .loaded .non-critical {
            opacity: 1
        }
    </style>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPC9BLK8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('layouts.header')



    <!-- Scroll-top -->
    {{-- <button class="scroll-top scroll-to-target" data-target="html">--}}
        {{-- <i class="fas fa-angle-up"></i>--}}
        {{-- </button>--}}
    <!-- Scroll-top-end-->

    @yield('main')

    <!-- Modal -->
    <div class="container">
        <div class="row">

            <div class="modal fade" id="statusErrorsModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center p-lg-5">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6"
                                    stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <line class="path line" fill="none" stroke="#db3646" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8"
                                    y2="92.3" />
                                <line class="path line" fill="none" stroke="#db3646" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" X2="34.4"
                                    y2="92.2" />
                            </svg>
                            <h4 class="text-danger mt-3">Sorry!</h4>
                            <p class="mt-20 mb-30">This request can't be processed right now. Please try after sometime.
                            </p>
                            <a type="button" class="modal-btn" data-bs-dismiss="modal">Ok</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center p-lg-5">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#198754" stroke-width="6"
                                    stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <polyline class="path check" fill="none" stroke="#198754" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10"
                                    points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                            </svg>
                            <h4 class="text-success mt-3">Thanks!</h4>
                            <p class="mt-20 mb-30">Your Message Sent successfully. We will connect with you shortly.</p>
                            <a type="button" class="modal-btn" data-bs-dismiss="modal">Ok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End- Modal -->

    @include('layouts.footer')
    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallaxScroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @include('submitJs.registerSubmit')

</body>

</html>