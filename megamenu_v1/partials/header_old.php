<?php include 'includes/function.php' ?>
<!DOCTYPE html>
<html>

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        <?php echo $title_name; ?>
    </title>
    <meta name="description" content="<?php echo $description; ?>">

    <meta http-equiv='content-language' content='en-us'>
    <meta http-equiv='content-language' content='en-ca'>
    <meta http-equiv='content-language' content='en-gb'>

    <meta name="robots" content="<?php echo $indexfollow; ?>" />
    <meta name="googlebot" content="<?php echo $indexfollow; ?>, max-snippet: -1" />
    <meta name="bingbot" content="<?php echo $indexfollow; ?>, max-snippet: -1 " />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $title_name; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:url" content="<?php echo $url; ?>" />
    <meta property="og:image" content="https://hoisolutions.com/assets/images/logo.png" />
    <meta property="og:image:width" content="880" />
    <meta property="og:image:height" content="660" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="hoisolutions" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="hoisolutions">
    <meta name="twitter:creator" content="@HoiSolutions">
    <meta name="twitter:title" content="<?php echo $title_name; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="https://hoisolutions.com/assets/images/logo.png">

    <meta name="google-site-verification" content="Lg096ScU8tBe3B-UXcmKLZpAHCYzb4nDdO7V24XDeyA" />
    <meta name="ahrefs-site-verification" content="3a4227905939061ffe57767c6d1029357f9ed646b19d2649f6428cdb2cd366fe">

    <link rel="alternate" hreflang="x-default" href="<?php echo $url; ?>" />
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-us" />
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-ca" />
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-gb" />
    <link rel="canonical" href="<?php echo $url; ?>" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- off canvas css -->
    <link rel="stylesheet" href="assets/css/off-canvas.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- swiper bundle css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- aos css -->
    <link rel='stylesheet' href='assets/css/aos.css'>
    <!-- Video Slider  -->
    <link rel='stylesheet' href='assets/css/video-slider.css'>
    <!-- GLIGHT BOX  -->
    <link rel='stylesheet' href='assets/vendors/css/glightbox.min.css'>
    <!-- Google tag (gtag.js) -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-268162610-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-268162610-1');
    </script>-->
    <!-- Google tag (gtag.js) -->

    <!-- Google tag (gtag.js) UK 11Sep2023-->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HRZJ4TQWQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-5HRZJ4TQWQ');
    </script>

    <!-- Google tag (gtag.js) UK 11Sep2023-->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11181026981"></script>
    <script>
        gtag('config', 'AW-11172097351');
    </script>

    <script>
        gtag('event', 'conversion', { 'send_to': 'AW-11172097351/K70OCMazrd8YEMfaos8p' });
    </script>

    <script>
        gtag('config', 'AW-11172097351/HUGoCPzIqN8YEMfaos8p', {
            'phone_conversion_number': '(949) 245-2405'
        });
    </script>

    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-11172097351/EXGsCILSqN8YEMfaos8p',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!--<script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-11181026981');
    </script>-->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N0S71N60TQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-N0S71N60TQ');
    </script>
    <!-- Google tag (gtag.js) -->
    <?php echo $gtag_thankyou; ?>
    <!-- Start of hoisolutions9420 Zendesk Widget script -->
    <script id="ze-snippet"
        src="https://static.zdassets.com/ekr/snippet.js?key=d4ed3c49-3369-4481-9256-03ffbe590dfe"></script>
    <script>
        zE(function () {
            $zopim(function () {
                $zopim.livechat.setOnUnreadMsgs(unread);

                function unread(number) {
                    if (number >= 1) {
                        $zopim.livechat.window.show();
                    }
                }
            });
        });
    </script>
    <!-- Start of hoisolutions9420 Zendesk Widget script -->
    <!-- Meta Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '567248367239234');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=567248367239234&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Reddit Pixel -->
    <script>
        ! function (w, d) {
            if (!w.rdt) {
                var p = w.rdt = function () {
                    p.sendEvent ? p.sendEvent.apply(p, arguments) : p.callQueue.push(arguments)
                };
                p.callQueue = [];
                var t = d.createElement("script");
                t.src = "https://www.redditstatic.com/ads/pixel.js", t.async = !0;
                var s = d.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(t, s)
            }
        }(window, document);
        rdt('init', 't2_cddnb0ny8', {
            "optOut": false,
            "useDecimalCurrencyValues": true,
            "email": "<EMAIL-HERE>"
        });
        rdt('track', 'PageVisit');
    </script>
    <!-- DO NOT MODIFY UNLESS TO REPLACE A USER IDENTIFIER -->
    <!-- Hotjar Tracking Code for https://hoisolutions.com/ -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3542264,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- End Hotjar Tracking Code for https://hoisolutions.com/ -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "ItemList",
            "itemListElement": [{
                    "@type": "SiteNavigationElement",
                    "position": 1,
                    "name": "Home",
                    "description": "Planning to launch your startup or scaling with a business software? Hire HOI's top-of-the-line mobile app development and software services.",
                    "url": " https://hoisolutions.com/"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 2,
                    "name": "About Us",
                    "description": "We deliver quality results to our clients through an extensive understanding of digital marketing trends for various platforms and audience types. Get in touch!",
                    "url": "https://hoisolutions.com/about-us"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 3,
                    "name": "Services",
                    "description": "From customization to full-cycle development services, we deliver reliable and cost-effective software solutions. Discover how we can help you",
                    "url": "https://hoisolutions.com/services"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 4,
                    "name": "Website Design and Development",
                    "description": "Dev Pickles' website design and development services aim to turn your website into a high-performing marketing tool for your business.",
                    "url": "https://hoisolutions.com/website-design-and-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 5,
                    "name": "Custom Website Design and Development",
                    "description": "Custom website development & design services from Dev Pickles, you’ll get websites that forward your vision with right aesthetics and high-end performance.",
                    "url": "https://hoisolutions.com/custom-website-design-and-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 6,
                    "name": "Full Stack Development",
                    "description": "Dev Pickles is a leading Fullstack development company helping startups to enterprise-grade corporations meet their business goals with websites, apps and custom software programs.",
                    "url": "https://hoisolutions.com/full-stack-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 7,
                    "name": "Shopify Website Development",
                    "description": "At Dev Pickles, our Shopify experts deliver an unbeatable combination - custom Shopify websites at affordable prices.",
                    "url": "https://hoisolutions.com/shopify-website-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 8,
                    "name": "eCommerce Website Development",
                    "description": "Dev Pickles is a full cycle tech company specializing as an ecommerce website development agency. We create online stores, marketplaces and interactive websites.",
                    "url": "https://hoisolutions.com/ecommerce-website-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 9,
                    "name": "Wordpress Design and Development",
                    "description": "Dev Pickles help businesses utilize the potential of WordPress with custom WordPress development and design services.",
                    "url": "https://hoisolutions.com/wordpress-design-and-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 10,
                    "name": "Website Maintenance",
                    "description": "Dev Pickles is a top website maintenance services company helping businesses across the globe improve the performance and security of their websites.",
                    "url": "https://hoisolutions.com/website-maintenance"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 11,
                    "name": "Mobile App Development",
                    "description": "We offer impactful mobile app development services to bring your project to market on every device and platform. Hire our mobile app developers in 48 hours!",
                    "url": "https://hoisolutions.com/mobile-app-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 12,
                    "name": "IOS App Development",
                    "description": "Dev Pickleshas been the frontrunner in iOS development, building apps specially for aspiring technopreneurs, startups and enterprise-grade corporations.",
                    "url": "https://hoisolutions.com/ios-app-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 13,
                    "name": "Android App Development",
                    "description": "Dev Pickles provides complete Android app development services from diverse industries. Our team of experts will help your business scale with expertise.",
                    "url": "https://hoisolutions.com/android-app-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 14,
                    "name": "Cross Platform App Development | Dev Pickles",
                    "description": "Dev Pickles is a leading cross platform mobile app development agency with multi-platform mobile technology experts and 10 years of experience in the domain.",
                    "url": "https://hoisolutions.com/cross-platform-app-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 15,
                    "name": "Web Application Development | Dev Pickles",
                    "description": " Dev Pickles empowers businesses to reach a wider client base - and we do that with progressive web application development services.",
                    "url": "https://hoisolutions.com/web-application-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 16,
                    "name": "CRM Web Portal",
                    "description": "Dev Pickles is a Customer Portal Solution developed for both B2C and B2B portals that do a single point of interaction between business and client.",
                    "url": "https://hoisolutions.com/crm-web-portal"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 17,
                    "name": "B2B & B2C Web Portal",
                    "description": "Dev Pickles offers Custom B2C-B2B web portal development services at an affordable price just according to your business requirement.",
                    "url": "https://hoisolutions.com/b2b-and-b2c-web-portals"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 18,
                    "name": "Python Development",
                    "description": "Dev Pickles is a Python development company offering unparalleled custom web applications, and desktop apps, all using the power of Python.",
                    "url": "https://hoisolutions.com/python-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 19,
                    "name": "Custom Software Development",
                    "description": "Dev Pickles offer software development services that offer a tailored approach for businesses of diverse sectors and sizes.",
                    "url": "https://hoisolutions.com/custom-software-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 20,
                    "name": "React Native Development",
                    "description": "Planning to accelerate your business processes with an app? Get HOI's React Native App Development Services for faster app development and quick turnaround.",
                    "url": "https://hoisolutions.com/react-native-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 21,
                    "name": "SaaS Development",
                    "description": "Dev Pickles is a software development company specializing in SaaS application development. SaaS applications are built to provide a framework for continuous innovatio.",
                    "url": "https://hoisolutions.com/saas-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 22,
                    "name": "Magento Development",
                    "description": "Magento Development Services | Custom Magento Development ·| Design and Themes | Magento Integration | UX Design and Checkout | Speed Optimization | Security",
                    "url": "https://hoisolutions.com/magento-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 23,
                    "name": "Blockchain Developent",
                    "description": "Fast, smart, affordable, blockchain solutions for your business. Trust the award-winning, experienced company to integrate blockchain into your business.",
                    "url": "https://hoisolutions.com/blockchain-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 24,
                    "name": "Dapp Development",
                    "description": "Dev Pickles leading DApp development company in USA offering dApp development architecture, token development and crypto games.",
                    "url": "https://hoisolutions.com/Dapp-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 25,
                    "name": "NFT Marketplace Development",
                    "description": "Dev Pickles is an advanced NFT Marketplace Development Company providing NFT marketplaces with multiple security layers which can be easily integrated with different blockchain networks.",
                    "url": "https://hoisolutions.com/nft-marketplace-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 26,
                    "name": "NFT Consulting Services",
                    "description": "NFT consulting services help estimate the feasibility of an NFT business idea and get expert advisory guidance throughout an NFT project.",
                    "url": "https://hoisolutions.com/nft-consulting-services"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 27,
                    "name": "Game Development",
                    "description": "Planning to launching a mobile game with stunning graphics and high-end user experience? Check HOI’s game development services and create immersive experiences for players.",
                    "url": "https://hoisolutions.com/game-development"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 28,
                    "name": "Portfolio",
                    "description": "We bring our client's visions to digital reality. Discover some of our best-delivered projects that brought our clients more cash and loyal customers.",
                    "url": "https://hoisolutions.com/portfolio"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 29,
                    "name": "Web Development NJ",
                    "description": "Dev Pickles is a top-rated web development company with a team of creative designers and web developers in NJ helping business owners build strong online presence.",
                    "url": "https://hoisolutions.com/web-development-nj/"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 30,
                    "name": "Reviews",
                    "description": "We value our clients & their feedback. Nothing makes us happier than when the hard work of our team gets appreciated. Our clients trust our work & that’s all we value.",
                    "url": "https://hoisolutions.com/reviews"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 31,
                    "name": "Blog",
                    "description": "Find guides and industry insights right from development experts, business analysts, tech startup founders and appreneurs.",
                    "url": "https://hoisolutions.com/blog/"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 32,
                    "name": "Contact Us",
                    "description": "Our digital experts are eager to assist you in meeting your targets. Get in touch today to get started. call us at 949-267-7994 or write us info@devpickles.com",
                    "url": "https://hoisolutions.com/contact-us"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 33,
                    "name": "Terms & Conditions",
                    "description": "These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of you & Dev Pickles LLC. Read more!",
                    "url": "https://hoisolutions.com/terms-and-conditions"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 34,
                    "name": "Privacy Policy",
                    "description": "Dev Pickles LLC. respects the privacy of our users. This Privacy Policy explains how we collect, use, disclose & safeguard your information when you visit our website",
                    "url": "https://hoisolutions.com/privacy-policy"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 35,
                    "name": "Pricing",
                    "description": "We have designed our pricing points, considering the varying requirements of various businesses and niches. Choose From Our Economical Packages",
                    "url": "https://hoisolutions.com/pricing"
                },
                {
                    "@type": "SiteNavigationElement",
                    "position": 36,
                    "name": " A Quick Rundown Of Xcode",
                    "description": "In this article, we are going to discuss what is Xcode. You&#039;ll also learn the benefits of using Xcode for your iOS development.",
                    "url": "https://hoisolutions.com/blog/a-quick-rundown-of-xcode/"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 37,
                    "name": "Shopify Store Ideas",
                    "description": "Looking for Shopify store ideas for your eCommerce business? We&#039;ve compiled a list of 15 online businesses you can start today",
                    "url": "https://hoisolutions.com/blog/shopify-store-ideas/"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 38,
                    "name": "Android App Development Cost",
                    "description": "The cost to develop an app can range from $40,000 to $300,000 and beyond. Many factors influence the price, including the complexity, features, timelines, and tech stack.",
                    "url": "https://hoisolutions.com/blog/android-app-development-cost/"
                }, {
                    "@type": "SiteNavigationElement",
                    "position": 39,
                    "name": "iOS Development Frameworks",
                    "description": "Planning to build an iOS app for business? Here are top 10 iOS development frameworks we use at Dev Pickles to build user-first iOS apps.",
                    "url": "https://hoisolutions.com/blog/ios-development-frameworks/"
                }
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "Custom Software and Mobile App Development Company | Dev Pickles",
            "description": "Planning to launch your startup or scaling with a business software? Hire HOI's top-of-the-line mobile app development and software services."
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http:\/\/schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "",
                    "name": "Dev Pickles"
                }
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Service",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "reviewCount": "100",
                "bestRating": "5",
                "worstRating": "1",
                "itemReviewed": {
                    "@type": "LocalBusiness",
                    "url": "https://hoisolutions.com/",
                    "name": "Dev Pickles",
                    "image": "https://hoisolutions.com/assets/images/logo.png",
                    "telePhone": "(949) 603-3532",
                    "priceRange": "$$",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "5000 Birch St Tower Suite 3000",
                        "addressLocality": "Newport Beach",
                        "addressRegion": "CA",
                        "postalCode": "92660",
                        "addressCountry": "US"
                    }
                }
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Dev Pickles",
            "alternateName": "Dev Pickles Custom Software and Mobile App Development Company",
            "url": "https://hoisolutions.com/",
            "logo": "https://hoisolutions.com/assets/images/logo.png",
            "sameAs": [
                "https://www.facebook.com/hoisolutions/",
                "https://www.linkedin.com/company/12616421",
                "https://www.instagram.com/hoi_solutions/",
                "https://twitter.com/HoiSolutions",
                "https://www.youtube.com/@hoisolutions3017",
                "https://hoisolutions.com/"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Dev Pickles",
            "image": "",
            "@id": "",
            "url": "https://hoisolutions.com/",
            "telephone": "(949) 603-3532",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "5000 Birch St Tower Suite 3000",
                "addressLocality": "Newport Beach",
                "addressRegion": "CA",
                "postalCode": "92660",
                "addressCountry": "US"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 33.6651171,
                "longitude": -117.8591821
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "09:00",
                "closes": "17:00"
            },
            "sameAs": [
                "https://www.facebook.com/hoisolutions/",
                "https://www.linkedin.com/company/12616421",
                "https://www.instagram.com/hoi_solutions/",
                "https://twitter.com/HoiSolutions",
                "https://www.youtube.com/@hoisolutions3017",
                "https://hoisolutions.com/"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Dev Pickles",
            "url": "https://hoisolutions.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <style type="text/css">
        @media only screen and (min-width: 991px) {
            .full-width-header .rs-header .menu-area .main-menu .rs-menu ul.sub-menu li a {
                padding-right: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- <div id="loader" class="loader">
        <div class="loader-container"></div>
    </div> -->
    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header style3 header-transparent">
            <!-- Menu Start -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-1">
                            <div class="logo-part">
                                <a href="/">
                                    <img class="normal-logo" src="assets/images/logo.png" alt="logo">
                                    <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
                                </a>
                            </div>
                            <div class="mobile-menu">
                                <a href="#0" class="rs-menu-toggle rs-menu-toggle-close">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-21 sm-pl-10">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <nav class="rs-menu text-start rs-menu-close">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu current-menu-item">
                                                <a class="nav-link nav-link-ltr" href="/">Home</a>
                                            </li>
                                            <li classs="menu-item-has-children">
                                                <a class="nav-link nav-link-ltr" href="about-us">About Us</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a class="" href="services">Services</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a class="" href="website-design-and-development">Website Design
                                                            and Development <i class="fa fa-plus hidden-sm"
                                                                aria-hidden="true"></i></a>
                                                        <ul class="sub-menu">
                                                            <li><a href="custom-website-design-and-development">Custom
                                                                    Website Design & Development</a></li>
                                                            <li><a href="full-stack-development">Full Stack
                                                                    Development</a></li>
                                                            <li><a href="shopify-website-development">Shopify Website
                                                                    Development</a></li>
                                                            <li><a href="ecommerce-website-development">Ecommerce
                                                                    Website Development</a></li>
                                                            <li><a href="wordpress-design-and-development">WordPress
                                                                    Design & Development</a></li>
                                                            <li><a href="website-maintenance">Website Maintenance</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="" href="mobile-app-development">Mobile Application
                                                            Development
                                                            <i class="fa fa-plus hidden-sm" aria-hidden="true"></i>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li><a href="ios-app-development">iOS App Development</a>
                                                            </li>
                                                            <li><a href="android-app-development">Android App
                                                                    Development</a></li>
                                                            <li><a href="cross-platform-app-development">Cross-Platform
                                                                    App Development</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="" href="web-application-development">Web Application
                                                            Development
                                                            <i class="fa fa-plus hidden-sm" aria-hidden="true"></i>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li><a href="crm-web-portal">CRM Web Portal</a></li>
                                                            <li><a href="b2b-and-b2c-web-portals">B2B & B2C Web
                                                                    Portals</a></li>
                                                            <li><a href="python-development">Python Development</a></li>
                                                            <li><a href="custom-software-development">Custom Software
                                                                    Development</a></li>
                                                            <li><a href="react-native-development">React Native
                                                                    Development</a></li>
                                                            <li><a href="saas-development">SAAS Development</a></li>
                                                            <li><a href="magento-development">Magento Development</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="" href="blockchain-development">Blockchain Development
                                                            <i class="fa fa-plus hidden-sm" aria-hidden="true"></i>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li><a href="dapp-development">dApp Development</a></li>
                                                            <li><a href="nft-marketplace-development">NFT Marketplace
                                                                    Development</a></li>
                                                            <li><a href="nft-consulting-services">NFT Consulting
                                                                    Services</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="game-development">Game Development</a></li>
                                            </li>
                                        </ul>
                                        </li>
                                        <li classs="menu-item-has-children">
                                            <a class="nav-link nav-link-ltr" href="portfolio">Portfolio</a>
                                        </li>
                                        <!--<li classs="menu-item-has-children">
                                            <a class="nav-link nav-link-ltr" href="industry">Industry</a>
                                        </li>-->
                                        <li class="menu-item-has-children">
                                            <a class="">Location</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a class="w-140i" href="web-development-nj">
                                                        New Jersey
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- <li classs="menu-item-has-children">
                                            <a class="nav-link nav-link-ltr" href="reviews">Reviews</a>
                                        </li> -->

                                        <li class="menu-item-has-children">
                                            <a href="industry" class="industry">Industries</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a class=""
                                                        href="https://hoisolutions.com/automotive-services-web-development">
                                                        Automotive Services Web Development
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="https://hoisolutions.com/real-estate-services-web-development">
                                                        Real Estate Services Web Development
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="https://hoisolutions.com/financial-services-web-development">
                                                        Financial Services Web Development
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="https://hoisolutions.com/healthcare-services-web-development">
                                                        Healthcare Services Web Development
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=""
                                                        href="https://hoisolutions.com/law-services-web-development">
                                                        Law Services Web Development
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li classs="menu-item-has-children">
                                            <a class="nav-link nav-link-ltr"
                                                href="https://hoisolutions.com/blog">Blog</a>
                                        </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 icons text-right hidden-sm hidden-tb">
                            <!-- <a href="https://www.facebook.com/hoisolutions/"><i class="fa fa-facebook active"></i></a> -->
                            <a href="https://www.linkedin.com/company/12616421"><i class="fa fa-linkedin"></i></a>
                            <!-- <a href="https://www.instagram.com/hoi_solutions/"><i class="fa fa-instagram"></i></a> -->
                        </div>
                        <div class="col-lg-2 call hidden-sm hidden-tb">
                            <!--<a href="tel:(949) 245-2405" class="number pl-30">(949) 245-2405</a>-->
                            <a href="tel:(949) 245-2405" onclick="gtag_report_conversion();" class="number pl-30">(949)
                                245-2405</a>
                        </div>
                        <div class="col-lg-2 hidden-sm hidden-tb">
                            <a href="contact-us"><button class="btn bg-button rounded-pill button">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->