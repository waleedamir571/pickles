<?php include 'partials/header.php' ?>

<section class="website-design-bg pt-150 pb-70 sm-pt-110">
    <div class="container">
        <div class="banner-line position-relative wow fadeInUp">
            Services
        </div>
        <div class="row pt-3 website-design">
            <div class="col-md-6">
                <h1 class="fw-600 poppins fs-30 fs-16m wow fadeInUp">
                    Website <span class="web-color">Design and Development </span>Services for Businesses
                </h1>
                <p class="wow fadeInUp">
                    Your website is your very own place on the internet. Think of it as the real estate of the internet.
                    With custom website design and development services from Dev Pickles, you’ll get websites that
                    forward your vision with the right aesthetics and high-end performance.
                </p>
                <p class="wow fadeInUp">
                    We customize your websites according to your business goals and target audience: this strategically
                    encourages user actions on your brand’s website
                </p>
                <div class="button-row">
                    <button class="button-one"><a class="wp form-1" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#contactModal">Get Started </a></button>
                    <button class="button-two"> <a href="javascript:$zopim.livechat.window.show()"
                            class="live-chat">Chat Now</a></button>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 shadow-lg inner-form landing-form wow fadeInRightBig mt-5">
                <form action="/backend/action/action" method="POST" class="pt-20 sm-pt-30 form form-padding-set-2">
                    <input type="hidden" name="type" value="publishingJourney">
                    <div class="input-group mb-4">
                        <select name="application_type" class="form-control rounded-pill" style="padding: 14px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">
                                Which type of website you are
                                looking for?</option>
                            <option value="Informative Website">Informative Website</option>
                            <option value="Ecommerce Website">Ecommerce Website</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Blog">Blog</option>
                            <option value="Business">Business</option>
                            <option value="Personal Web Page">Personal Web Page</option>
                            <option value="Internet Forum">Internet Forum</option>
                            <option value="Landing Page">Landing Page</option>
                            <option value="Media">Media</option>
                            <option value="Non-Profit">Non-Profit</option>
                            <option value="Brochure">Brochure</option>
                            <option value="Wikipedia">Wikipedia</option>
                            <option value="Wiki">Wiki</option>
                            <option value="News">News</option>
                            <option value="Employment Website">Employment Website</option>
                            <option value="Online Auction">Online Auction</option>
                            <option value="MSN">MSN</option>
                            <option value="Community Forums">Community Forums</option>
                            <option value="Others">Others</option>

                        </select>
                    </div>
                    <div class="input-group mb-4">
                        <select name="application_before" class="form-control rounded-pill" style="padding: 14px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">Do
                                you have an website before?
                            </option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <select name="business_nature" class="form-control rounded-pill" style="padding: 14px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">
                                What's the nature of your business?
                            </option>
                            <option value="Gaming">Gaming</option>
                            <option value="Ecommerce">Ecommerce</option>
                            <option value="FinTech">FinTech</option>
                            <option value="Media &amp; Entertainment">Media &amp; Entertainment</option>
                            <option value="Travel &amp; Transportation">Travel &amp; Transportation</option>
                            <option value="Food Tech">Food Tech</option>
                            <option value="Subscription Apps">Subscription Apps</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <div class="inner-published-form form-padding-2">
                            <div class="form-group-select">
                                <h4>What services are you looking for?</h4>
                                <div class="form-check-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="Conceptualization" id="selfPublishing">
                                        <label class="form-check-label" for="selfPublishing">
                                            Conceptualization
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="UI/UX Design" id="editing">
                                        <label class="form-check-label" for="editing">
                                            UI/UX Design
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="Custom Web Development" id="coverDesign">
                                        <label class="form-check-label" for="coverDesign">
                                            Custom Web Development
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="QA And Testing" id="printing">
                                        <label class="form-check-label" for="printing">
                                            QA And Testing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="Optimization" id="interiorFormatting">
                                        <label class="form-check-label" for="interiorFormatting">
                                            Optimization
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="Maintenance And Support" id="illustration">
                                        <label class="form-check-label" for="illustration">
                                            Maintenance And Support
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control rounded-pill"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="Full Name">
                            </div>
                            <div class="col-md-6 sm-pt-20">
                                <input type="tel" name="phone" class="form-control rounded-pill"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <input type="email" name="email" class="form-control rounded-pill"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="Email" required="">
                    </div>
                    <div class="text-md-end sm-pt-0">
                        <button class="btn form2-submit-button rounded-pill w-100" name="submit" type="submit">Build
                            my
                            website </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="rn-bg-2 pt-160 pb-30 sm-pt-40">
        <div class="our-technologies rnpg theme-style dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="fs-16m">
                            <span>Have questions? </span>Let's talk today and take the first step towards <span>building
                                your app.</span>
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="action-nnew">
                            <a href="tel:(949) 323-3170">
                                <img src="assets/images/website-design-and-development/phone.png" alt="Talk To Us"
                                    title="Dev Pickles Talk To Us Section Phone Png">
                                <p>Talk to us on the phone</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-nnew">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#contactModal"
                                class="popup-btn form-2">
                                <img src="assets/images/website-design-and-development/quote.png" alt="Get A Qoute"
                                    title="Dev Pickles Get A Qoute Section Qoute Png">
                                <p> Get a quote</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-nnew">
                            <a href="javascript:$zopim.livechat.window.show()" class="live-chat">
                                <img src="assets/images/website-design-and-development/chat.png" alt="Chat With Us"
                                    title="Dev Pickles Chat With Us Section Chat Png">
                                <p>Chat with us </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="solutionsec page-spacing-topnull">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="topsec">
                    <div class="position-relative">
                        <div class="p6-second-line text-black">Tailored Benefits</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="topsec">
                    <h2 class="fs-30 pt-20 pb-20 fs-20m">Why Invest In A <span class="web-color">Custom-Built
                            Website?</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="paragraph text-center">
                    <p>
                        A custom website design service provides all the information your audience needs about your
                        business: products and services, in one centralized place. A custom website design and
                        development gives you complete control over how customers connect with your brand’s story.
                    </p>
                    <p>
                        Custom websites also enable you to create sales funnels that bring in new customers for your
                        business.
                    </p>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="paragraph">
                    <p>
                        Custom websites also enable you to create sales funnels that bring in new customers for your
                        business.
                    </p>
                    <div class="wow fadeInUp p3-first-button">
                        <button> <a class="web-color form-4" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#contactModal">Let’s Get Started &nbsp;</a></button>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row after-line">
            <div class="col-md-4">
                <div class="innersec">
                    <img class="" src="assets/images/website-design-and-development/solution-1.svg" alt="ROI"
                        title="Dev Pickles ROI Section Png">
                    <p>Businesses can achieve the highest ROI with a custom-built website.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="innersec">
                    <img class="" src="assets/images/website-design-and-development/solution-2.svg"
                        alt="Website Design & Development" title="Dev Pickles Custom Websites Section Png">
                    <p>Custom websites that are mobile-friendly cater to a diverse range of devices.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="innersec">
                    <img class="" src="assets/images/website-design-and-development/solution-3.svg"
                        alt="Search Engine Optimization" title="Dev Pickles Search Engine Optimization Section Png">
                    <p>Better visibility in search results and increased chances of attracting organic traffic.</p>
                </div>
            </div>
        </div>
        <div class="wow fadeInUp p3-first-button text-center">
            <button> <a class="web-color form-4" href="javascript:;" data-bs-toggle="modal"
                    data-bs-target="#contactModal">Book a Consultation </a></button>
        </div>
    </div>
</section>

<section class="bg-color page-spacing">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeinup">
                <p class="text-white paragraph">Want to know more <span class="text-black">about why you</span> should
                    trust <span class="text-black">HOI</span>?</p>
            </div>
        </div>
        <div class=" text-center pt-20 wow fadeinup">
            <a class="btn consultation mt fs-12m form-6" href="javascript:;" data-bs-toggle="modal"
                data-bs-target="#contactModal">Book a Call
                &nbsp; </a>
        </div>
    </div>
</section>


<!-- Testimonial Section Start -->
<?php include 'partials/video-testimonials-white.php' ?>
<!-- Testimonial Section End -->

<section class="bg-color page-spacing loaded">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h2 class="poppins fw-600 wow fadeInUp fs-30 fs-20m"
                    style="visibility: visible; animation-name: fadeInUp;">Let’s <span class="text-white">Pioneer
                        Business
                    </span>Evolution!</h2>
                <p class="text-center para wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    We're not just an app development company; we're on a mission to revolutionize the global business
                    infrastructure. Your route to readiness begins here.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section End -->
<?php include 'partials/portfolio-main.php' ?>
<!-- Portfolio Section End -->
<section class="pricingrevamp pricing-wrapper page-spacing-topnull">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="outer1">
                    <div class="position-relative">
                        <div class="p6-price-first-line text-black">PREMIUM SERVICES AT AFFORDABLE PRICES</div>
                    </div>
                    <h2 class="web-color">Choose <span class="text-black">From Our Economical </span>Packages</h2>
                    <p>We have designed our pricing points, considering the varying requirements of various
                        businesses
                        and niches.</p>
                </div>
            </div>
        </div>
        <div class="row pt-130 sm-pt-0">
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/bronze.png">
                        <h3>Web Bronze</h3>
                    </div>
                    <div class="inner2">
                        <h4>$199 <span>$399.00</span></h4>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>2 Stock Images </li>
                            <li>3 Page Website</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>Contact/Query Form</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-3 main mp">
                    <div class="innertop">
                        <h2>MOST POPULAR</h2>
                    </div>
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/silver.png">
                        <h3>Web Silver</h3>
                    </div>
                    <div class="inner2">
                        <h4>$349 <span>$699.00</span></h4>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>5 Stock Photos </li>
                            <li>5 Page Website </li>
                            <li>3 Banner Design</li>
                            <li>1 jQuery Slider Banner </li>
                            <li>FREE Google Friendly Sitemap</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                            <li>Mobile Responsive will be Additional $200*</li>
                            <li>CMS will be Additional $250*</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/gold.png">
                        <h3>Web Gold</h3>
                    </div>
                    <div class="inner2">
                        <h4>$699 <span>$1199.00</span></h4>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>10 Unique Pages Website</li>
                            <li>CMS / Admin Panel Support</li>
                            <li>8 Stock images</li>
                            <li>5 Banner Designs</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>FREE Google Friendly Sitemap</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                            <li>Mobile Responsive will be Additional $200* </li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="row pr">
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/platinum.png">
                        <h3>Web Platinum</h3>
                    </div>
                    <div class="inner2">
                        <h4>$1,199 <span>$1999.00</span></h4>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>Upto 15 Unique Pages Website</li>
                            <li>Conceptual and Dynamic Website</li>
                            <li>Mobile Responsive</li>
                            <li>Online Reservation/Appointment Tool (Optional)</li>
                            <li>Online Payment Integration (Optional)</li>
                            <li>Custom Forms</li>
                            <li>Lead Capturing Forms (Optional)</li>
                            <li>Striking Hover Effects</li>
                            <li>Newsletter Subscription (Optional)</li>
                            <li>Newsfeed Integration</li>
                            <li>Social Media Integration</li>
                            <li>Search Engine Submission</li>
                            <li>5 Stock Photos</li>
                            <li>3 Unique Banner Design</li>
                            <li>1 jQuery Slider Banner</li>
                            <li> Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/titanium.png">
                        <h3>Web Titanium</h3>
                    </div>
                    <div class="inner2">
                        <h4>$1,999 <span>$3199.00</span></h4>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>15 to 20 Pages Website</li>
                            <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                            <li>Custom WP (or) Custom PHP Development</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>10 Stock Images</li>
                            <li>Unlimited Revisions</li>
                            <li>Special Hover Effects</li>
                            <li>Content Management System (CMS)</li>
                            <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                            <li>Online Payment Integration (Optional)</li>
                            <li>Multi Lingual (Optional)</li>
                            <li>Custom Dynamic Forms (Optional)</li>
                            <li>Signup Area (For Newsletters, Offers etc.)</li>
                            <li>Search Bar</li>
                            <li>Live Feeds of Social Networks integration (Optional)</li>
                            <li>Mobile Responsive</li>
                            <li>FREE 5 Years Domain Name</li>
                            <li>Free Google Friendly Sitemap</li>
                            <li>Search Engine Submission</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>Industry Specified Team of Expert Designers and Developers</li>
                            <li>Complete Deployment</li>
                            <li>Dedicated Accounts Manager</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/bronze.png">
                        <h3>Web Business</h3>
                    </div>
                    <div class="inner2">
                        <h4>$2,499 <span>$4999.00</span></h4>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>15 Seconds 2D Explainer Video</li>
                            <li>Voice - Over &amp; Sound Effects</li>
                            <li>Professional Script Writing</li>
                            <li>Storyboard</li>
                            <li>SEO Meta Tags</li>
                            <li>15 to 20 Pages Website</li>
                            <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                            <li>Custom WP (or) Custom PHP Development</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>10 Stock Images</li>
                            <li>Unlimited Revisions</li>
                            <li>Special Hover Effects</li>
                            <li>Content Management System (CMS)</li>
                            <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                            <li>Online Payment Integration (Optional)</li>
                            <li>Multi Lingual (Optional)</li>
                            <li>Custom Dynamic Forms (Optional)</li>
                            <li>Signup Area (For Newsletters, Offers etc.)</li>
                            <li>Search Bar</li>
                            <li>Live Feeds of Social Networks integration (Optional)</li>
                            <li>Mobile Responsive</li>
                            <li>FREE 5 Years Domain Name</li>
                            <li>Free Google Friendly Sitemap</li>
                            <li>Search Engine Submission</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>Industry Specified Team of Expert Designers and Developers</li>
                            <li>Complete Deployment</li>
                            <li>Dedicated Accounts Manager</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- PRICING SECTION START  -->
<!-- <section class="pricingrevamp pricing-wrapper page-spacing-topnull">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="outer1">
                    <div class="position-relative">
                        <div class="p6-price-first-line text-black">PREMIUM SERVICES AT AFFORDABLE PRICES</div>
                    </div>
                    <h2 class="web-color">Choose <span class="text-black">From Our Economical </span>Packages</h2>
                    <p>We have designed our pricing points, considering the varying requirements of various
                        businesses
                        and niches.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="t-col-first t-col-transition">
                    <div class="inner1">
                        <h2>Web Bronze</h2>
                    </div>
                    <div class="inner2">
                        <h2>$199 <span>$399.00</span></h2>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>2 Stock Images </li>
                            <li>3 Page Website</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>Contact/Query Form</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get A
                            Quote</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-3 t-col-transition">
                    <div class="inner1">
                        <h2>Web Silver</h2>
                    </div>
                    <div class="inner2">
                        <h2>$349 <span>$699.00</span></h2>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>5 Stock Photos </li>
                            <li>5 Page Website </li>
                            <li>3 Banner Design</li>
                            <li>1 jQuery Slider Banner </li>
                            <li>FREE Google Friendly Sitemap</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                            <li>Mobile Responsive will be Additional $200*</li>
                            <li>CMS will be Additional $250*</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get A
                            Quote</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" t-col-transition">
                    <div class="inner1">
                        <h2>Web Gold</h2>
                    </div>
                    <div class="inner2">
                        <h2>$699 <span>$1199.00</span></h2>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>10 Unique Pages Website</li>
                            <li>CMS / Admin Panel Support</li>
                            <li>8 Stock images</li>
                            <li>5 Banner Designs</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>FREE Google Friendly Sitemap</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                            <li>Mobile Responsive will be Additional $200* </li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get A
                            Quote</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class=" t-col-transition">
                    <div class="inner1">
                        <h2>Web Platinum</h2>
                    </div>
                    <div class="inner2">
                        <h2>$1,199 <span>$1999.00</span></h2>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>Upto 15 Unique Pages Website</li>
                            <li>Conceptual and Dynamic Website</li>
                            <li>Mobile Responsive</li>
                            <li>Online Reservation/Appointment Tool (Optional)</li>
                            <li>Online Payment Integration (Optional)</li>
                            <li>Custom Forms</li>
                            <li>Lead Capturing Forms (Optional)</li>
                            <li>Striking Hover Effects</li>
                            <li>Newsletter Subscription (Optional)</li>
                            <li>Newsfeed Integration</li>
                            <li>Social Media Integration</li>
                            <li>Search Engine Submission</li>
                            <li>5 Stock Photos</li>
                            <li>3 Unique Banner Design</li>
                            <li>1 jQuery Slider Banner</li>
                            <li> Complete W3C Certified HTML</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get A
                            Quote</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-1 t-col-transition">
                    <div class="inner1">
                        <h2>Web Titanium</h2>
                    </div>
                    <div class="inner2">
                        <h2>$1,999 <span>$3199.00</span></h2>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>15 to 20 Pages Website</li>
                            <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                            <li>Custom WP (or) Custom PHP Development</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>10 Stock Images</li>
                            <li>Unlimited Revisions</li>
                            <li>Special Hover Effects</li>
                            <li>Content Management System (CMS)</li>
                            <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)
                            </li>
                            <li>Online Payment Integration (Optional)</li>
                            <li>Multi Lingual (Optional)</li>
                            <li>Custom Dynamic Forms (Optional)</li>
                            <li>Signup Area (For Newsletters, Offers etc.)</li>
                            <li>Search Bar</li>
                            <li>Live Feeds of Social Networks integration (Optional)</li>
                            <li>Mobile Responsive</li>
                            <li>FREE 5 Years Domain Name</li>
                            <li>Free Google Friendly Sitemap</li>
                            <li>Search Engine Submission</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>Industry Specified Team of Expert Designers and Developers</li>
                            <li>Complete Deployment</li>
                            <li>Dedicated Accounts Manager</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get A
                            Quote</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-2 t-col-transition">
                    <div class="inner1">
                        <h2>Web Business</h2>
                    </div>
                    <div class="inner2">
                        <h2>$2,499 <span>$4999.00</span></h2>
                        <a href="tel:(949) 323-3170" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>15 Seconds 2D Explainer Video</li>
                            <li>Voice - Over &amp; Sound Effects</li>
                            <li>Professional Script Writing</li>
                            <li>Storyboard</li>
                            <li>SEO Meta Tags</li>
                            <li>15 to 20 Pages Website</li>
                            <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                            <li>Custom WP (or) Custom PHP Development</li>
                            <li>1 jQuery Slider Banner</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>10 Stock Images</li>
                            <li>Unlimited Revisions</li>
                            <li>Special Hover Effects</li>
                            <li>Content Management System (CMS)</li>
                            <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)
                            </li>
                            <li>Online Payment Integration (Optional)</li>
                            <li>Multi Lingual (Optional)</li>
                            <li>Custom Dynamic Forms (Optional)</li>
                            <li>Signup Area (For Newsletters, Offers etc.)</li>
                            <li>Search Bar</li>
                            <li>Live Feeds of Social Networks integration (Optional)</li>
                            <li>Mobile Responsive</li>
                            <li>FREE 5 Years Domain Name</li>
                            <li>Free Google Friendly Sitemap</li>
                            <li>Search Engine Submission</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>Industry Specified Team of Expert Designers and Developers</li>
                            <li>Complete Deployment</li>
                            <li>Dedicated Accounts Manager</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:(949) 323-3170">(949) 323-3170</a></p>
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get A
                            Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- PRICING SECTION END  -->


<section class="bg-dark rs-services style3 page-spacing">
    <div class="container">
        <div class="pb-40">
            <div class="row pt-5 wow slideInLeft">
                <div class="col-md-6 position-relative">
                    <div class=" line-9-new pl-130 sm-pl-70 text-white fs-20">WHAT SETS US APART?</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow slideInLeft">
                    <h2 class="fs-30 poppins text-white fs-20m sm-pt-10">Our <span class="web-color">Web Design And
                            Development </span> Process At Dev Pickles
                    </h2>
                </div>
                <div class="col-md-6 wow slideInRight">
                    <p class="sm-pt-15 text-white fs-14m">
                        Dev Pickles has developed a proven roadmap for the project’s success. This process results
                        from years of experience working with clients from around the world.
                    </p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div class="col-md-3">
                <div class="services-item mb-20 sr-item" style="cursor: pointer;">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="assets/images/p3-custom-website-design-development/01.png"
                                alt="Web Design And Development Process 01"
                                title="Dev PicklesSolution Web Design And Development Process 01 Png">
                            <!-- <img class="hover-img" src="assets/images/home/image-2-white.png" > -->
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="title"><a class="title-mobileappdev">
                                    Plan
                                </a></h3>
                        </div>
                        <div class="services-desc">
                            <p class=" pb-20">
                                This is the strategy stage where our team studies your business and objectives closely.
                                We conduct creative team sessions to brainstorm ideas for your project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sm-pt-20">
                <div class="services-item s2 mb-20 sr-item" style="cursor: pointer;">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="assets/images/p3-custom-website-design-development/02.png"
                                alt="Web Design And Development Process 02"
                                title="Dev PicklesSolution Web Design And Development Process 02 Png">
                            <!-- <img class="hover-img" src="assets/images/home/image-2-white.png" > -->
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="title"><a class="title-mobileappdev">Design</a></h3>
                        </div>
                        <div class="services-desc">
                            <p class="pb-20">
                                Next, we start transforming your ideas into a strategy: calling it wireframes and UI in
                                technical terms.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 sm-pt-20">
                <div class="services-item s3 mb-20 sr-item" style="cursor: pointer;">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="assets/images/p3-custom-website-design-development/03.png"
                                alt="Web Design And Development Process 03"
                                title="Dev PicklesSolution Web Design And Development Process 03 Png">
                            <!-- <img class="hover-img" src="assets/images/home/image-2-white.png" > -->
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="title"><a class="title-mobileappdev">Development</a></h3>
                        </div>
                        <div class="services-desc">
                            <p class=" pb-20">
                                This is the execution stage where we code websites on the foundations of UI and US
                                designs created early in the process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sm-pt-20">
                <div class="services-item s4 mb-20 sr-item" style="cursor: pointer;">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="assets/images/p3-custom-website-design-development/04.png"
                                alt="Web Design And Development Process 04"
                                title="Dev PicklesSolution Web Design And Development Process 04 Png">
                            <!-- <img class="hover-img" src="assets/images/home/image-2-white.png" > -->
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="title"><a class="title-mobileappdev">Analysis</a></h3>
                        </div>
                        <div class="services-desc">
                            <p class="pb-20">
                                After your website goes live on the internet, we regularly provide after sales support
                                through maintenance, patch fixes, and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 wow fadeinup">
                <h3 class="poppins services-sec-2 text-white ">Not sure which platform would be ideal for your unique
                    <span class="web-color">business requirements?</span>
                </h3>
            </div>
            <div class="col-md-2 pt-80  wow fadeInUp sm-pt-30">
                <div class=" d-block text-center">
                    <a class="btn web-btn consultation get-in-app-development form-3" href="javascript:;"
                        data-bs-toggle="modal" data-bs-target="#contactModal">Book a Call
                    </a>
                </div>
            </div>
        </div>
        <div class="row wow fadeinup">
            <div class="col-md-6">
                <p class="text-white">Get in touch and we’ll take you from target audience research, competitor analysis
                    to execution and successful launch!</p>
            </div>
        </div>
    </div>
</section>

<!-- THIRD SECTION START  -->
<section class="page-spacing">
    <div class="container">
        <div class="row">
            <div class="position-relative wow slideInleft">
                <div class="p3-second-line text-black wow slideInLeft">OUR SOLUTIONS</div>
            </div>
        </div>
        <div class="row p3-custom-paragraph">
            <div class="col-md-6 pt-2  wow slideInLeft">
                <p class="text-black first">
                <h2 class="fs-30 fs-28m">We Elevate Your <span class="web-color">Digital Presence with Tailored
                    </span>Web Development Services</h2>
                </p>
                <div class="wow fadeInUp p3-first-button">
                    <button> <a class="web-color form-4" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#contactModal">Let’s Get Started &nbsp;</a></button>
                </div>
            </div>
            <div class="col-md-6 wow slideInRight sm-pt-20">
                <p class="text-black second">
                    Dev Pickles, a leading custom website design and development agency in the USA, is here to empower
                    your brand with client-centric web solutions. Whether you're a startup or an established enterprise,
                    we specialize in crafting web experiences that go beyond the ordinary. Our commitment lies in
                    delivering excellence across every facet of web development.
                </p>
                <p class="text-black second">
                <ul class="wdadlist">
                    <li class="fs-14">We create captivating user experiences (UX) and eye-catching user interfaces (UI).
                    </li>
                    <li class="fs-14">We provide robust coding, secure hosting, and precise localization.</li>
                    <li class="fs-14">We improve the overall SEO ratings, capturing the lucrative search engine
                        audience.</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- THIRD SECTION END  -->

<section class="p3-bg-3 page-spacing">
    <div class="container">
        <div class="row banner-third">
            <div class="col-md-6 offset-md-6">
                <div class="row pt-20 sm-pt-0">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-1.png" alt="Vector 1"
                            title="Dev PicklesSolution Vector 1 Section Png">
                    </div>
                    <div class="col-md-11">
                        <p class="fs-16 fs-14mm text-white">
                            We build tailored websites that match your unique vision and needs.
                        </p>
                    </div>
                </div>
                <div class="row pt-30">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-2.png" alt="Vector 2"
                            title="Dev PicklesSolution Vector 2 Section Png">
                    </div>
                    <div class="col-md-11">
                        <p class="fs-16 fs-14mm text-white">
                            We excel in crafting websites that shine on every device.
                        </p>
                    </div>
                </div>
                <div class="row pt-30">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-3.png" alt="Vector 3"
                            title="Dev PicklesSolution Vector 3 Section Png">
                    </div>
                    <div class="col-md-11">
                        <p class="fs-16 fs-14mm text-white">
                            We merge creativity and strategy for online success.
                        </p>
                    </div>
                </div>
                <div class="pt-10 wow fadeInUp sm-pt-40">
                    <a class="btn web-btn consultation get-in-app-development form-5" href="javascript:;"
                        data-bs-toggle="modal" data-bs-target="#contactModal">Book a Consultation
                        &nbsp; </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6  wow slideInLeft">
                <p class="second">
                    Dev Pickles is a top-ranked website development and design company that offers all-in-one website
                    services for your online brand.
                </p>
            </div>
            <div class="col-md-6">
                <div class="position-relative wow slideInRight">
                    <div class="p3-third-line pl-120 ">Web Brilliance</div>
                </div>
                <div class=" web-paragraph-2">
                    <div class=" pt-2 wow slideInRight">
                        <h2 class="text-black fs-30 fs-20m fw-600 lh-34">
                            HOI’s Full-cycle <span class="web-color">Web
                                Design and Development
                            </span>Services</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rs-services app-boxes style3 pb-20 sm-pb-30 web-boxes _hidden-sm  wow fadeinup">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="services-item mb-20 sr-box-shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="assets/images/website-design/icon-1.png"
                                        alt="Custom Web Concepts"
                                        title="Dev PicklesSolution Custom web concepts Section Png Black">
                                    <img class="hover-img" src="assets/images/website-design/icon-1-hover.png"
                                        alt="Custom Web Concept"
                                        title="Dev PicklesSolution Custom web concepts Section Png White">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title">
                                        <a class="">
                                            Custom web concepts
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="services-item mb-20 sr-box-shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="assets/images/website-design/icon-2.png"
                                        alt="Custom Website Design"
                                        title="Dev PicklesSolution Custom website design Section Png Black">
                                    <img class="hover-img" src="assets/images/website-design/icon-2-hover.png"
                                        alt="Custom Website Designs"
                                        title="Dev PicklesSolution Custom website design Section Png White">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title">
                                        <a class="">
                                            Custom website design
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="services-item mb-20 sr-box-shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="assets/images/website-design/icon-3.png"
                                        alt="Custom Coding for UI and UX"
                                        title="Dev PicklesSolution Custom Coding for UI and UX Section Png Black">
                                    <img class="hover-img" src="assets/images/website-design/icon-3-hover.png"
                                        alt="Custom Coding for UI & UX"
                                        title="Dev PicklesSolution Custom Coding for UI and UX Section Png White">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title">
                                        <a class="">
                                            Custom coding for UI and UX
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services-item mb-20 sr-box-shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="assets/images/website-design/icon-4.png"
                                        alt="Ecommerce Site Development"
                                        title="Dev PicklesSolution Ecommerce Site Development Section Png Black">
                                    <img class="hover-img" src="assets/images/website-design/icon-4-hover.png"
                                        alt="Ecommerce Website Development"
                                        title="Dev PicklesSolution Ecommerce Site Development Section Png White">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title">
                                        <a class="">
                                            Ecommerce site development
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row _pt-30">
            <div class="col-md-3 offset-md-3">
                <div class="services-item mb-20 sr-box-shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="assets/images/website-design/icon-5.png"
                                        alt="Niche-Based Websites"
                                        title="Dev PicklesSolution Niche-Based Websites Section Png Black">
                                    <img class="hover-img" src="assets/images/website-design/icon-5-hover.png"
                                        alt="Niche Based Website"
                                        title="Dev PicklesSolution Niche-Based Websites Section Png White">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title">
                                        <a class="">
                                            Niche-based websites
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="services-item mb-20 sr-box-shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="assets/images/website-design/icon-6.png"
                                        alt="Website Maintenance"
                                        title="Dev PicklesSolution Website Maintenance Section Png Black">
                                    <img class="hover-img" src="assets/images/website-design/icon-6-hover.png"
                                        alt="Web Maintenance"
                                        title="Dev PicklesSolution Website Maintenance Section Png White">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="services-content ">
                                <div class="services-text">
                                    <h3 class="title">
                                        <a class="">
                                            Website <br> maintenance
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <p class="lh-24 fs-14m pt-20">
                    At Dev Pickles, we have a team of leading industry experts who work relentlessly to make your
                    project a success no matter what!
                </p>
            </div>
            <div class="col-md-5 offset-md-1 wow slideInRight">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-90">WHY PARTNER WITH US?</h3>
                </div> -->
                <h2 class="fs-30 fs-20m">Your Partner for <span class="web-color">Comprehensive </span>Web Solutions
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-40 sm-pt-20 counters">
            <div class="col-md-4 counter-1-custom wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/01.png" alt="Dev PicklesSoluions Number 01"
                    title="Dev PicklesSolution Number 1 Png">
                <h2 class=" web-color d-inline-block">Custom Website <br> Design</h2>

                <p class="pl-75 pt-30 lh-20 sm-pl-72 sm-pt-20 fs-14">
                    Our website builders have years of experience in WordPress, HTML, Shopify, and more custom
                    platforms.
                    <span id="dots">...</span><span id="more">
                        We all incorporate all the features for your websites for working seamlessly.
                    </span>
                </p>
                <a class="see-more-btn" onclick="myFunction()" id="myBtn">Read more</a>
            </div>

            <div class="col-md-4 counter-2-custom wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/02.png" alt="Dev PicklesSoluions Number 02"
                    title="Dev PicklesSolution Number 2 Png">
                <h2 class=" web-color d-inline-block">Custom <br> Programming</h2>
                <p class="pl-80 pt-30 lh-20 sm-pl-72 sm-pt-20 fs-14">
                    The backend of any custom website is its core. We offer custom programing services that create web
                    applications
                    <span id="dots-2">...</span><span id="more-2">
                        tailor made for your business.
                    </span>
                </p>
                <a class="see-more-btn-2" onclick="myFunction2()" id="myBtn-2">Read more</a>
            </div>

            <div class="col-md-4 counter-3-custom wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/03.png" alt="Dev PicklesSoluions Number 03"
                    title="Dev PicklesSolution Number 3 Png">
                <h2 class=" web-color d-inline-block">eCommerce Site<br>Design And Development</h2>
                <p class="pl-80 pt-30 lh-20 sm-pl-72 sm-pt-20 fs-14">
                    Dev Pickles’ experts create eCommerce websites with vivid designs, essential payment integrations,
                    and custom APIs.
                </p>
            </div>
        </div>
        <div class="row counters pt-50 sm-pt-0 wow fadeinup">
            <div class=" offset-md-2 col-md-4 counter-4-custom">
                <img src="assets/images/hoi-mobile-app-development/04.png" alt="Dev PicklesSoluions Number 04"
                    title="Dev PicklesSolution Number 4 Png">
                <h2 class=" web-color d-inline-block">Search<br>Engine Optimization</h2>

                <p class="pl-96 pt-30 lh-20 sm-pl-72 sm-pt-20 fs-14">
                    All of your website efforts go in vain if customers can’t find your website on search engines. HOI
                    Solutions offers SEO services that include technical SEO,
                    <span id="dots-4">...</span><span id="more-4">
                        local SEO, on-page SEO, and much more.
                    </span>
                </p>
                <a class="see-more-btn-3" onclick="myFunction4()" id="myBtn-4">Read more</a>
            </div>

            <div class="col-md-4 counter-5-custom wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/05.png" alt="Dev PicklesSoluions Number 05"
                    title="Dev PicklesSolution Number 5 Png">
                <h2 class=" web-color d-inline-block">Conversion<br>Landing Pages</h2>

                <p class="pl-90 pt-30 lh-20 sm-pl-72 sm-pt-20 fs-14">
                    A website is the last stop on a customer’s buying journey; that’s why create we create marketing
                    funnels with optimized landing pages.
                    <span id="dots-5">...</span><span id="more-5">
                        A marketing funnel with an optimized landing page brings in new leads for your business
                        strategically.
                    </span>
                </p>
                <a class="see-more-btn-4" onclick="myFunction5()" id="myBtn-5">Read more</a>
            </div>
        </div>
    </div>
</section>

<section class="sliders bg-light-orange services pt-30">
    <div class="container wow fadeInUp">
        <div class="brand-carousel owl-carousel  row" data-loop="true" data-items="4" data-margin="30"
            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true"
            data-md-device-dots="false">
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://clutch.co/profile/hoi-solutions','new_window');">
                <img src="assets/images/home/clutch.png" alt="Dev Pickles Clutch Profile"
                    title="Dev PicklesSolution Clutch Png ">
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.crunchbase.com/organization/hoi-solutions-68a7','new_window');">
                <img src="assets/images/home/crunch.png" alt="Dev Pickles Crunchbase Profile"
                    title="Dev PicklesSolution Crunchbase Png">
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.trustpilot.com/review/hoisolutions.com','new_window');">
                <img src="assets/images/home/trustpilot.png" alt="Dev Pickles Trustpilot Profile"
                    title="Dev PicklesSolution Trustpilot Png">
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.thumbtack.com/ca/newport-beach/web-design/hoi-solutions-award-winning-agency/service/445210545835835397','new_window');">
                <img src="assets/images/home/thumb.png" alt="Dev Pickles Thumbtack Profile"
                    title="Dev PicklesSolution Thumbtack Png">
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<?php include 'partials/testimonials-web-app-new.php' ?>
<!-- Testimonial Section End -->

<section>
    <div class="rs-partner style2 pb-10 services sm-pb-24">
        <div class="container wow fadeInDown">
            <div class="rs-carousel owl-carousel  owl-drag" data-loop="true" data-items="5" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"
                data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5"
                data-md-device-nav="true" data-md-device-dots="false">
                <div class="partner-item">
                    <div class="logo-img ">
                        <img src="assets/images/home/wp.png" alt="WordPress Website Design & Development"
                            title="Dev PicklesSolution WordPress Png">
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">

                        <img src="assets/images/home/sp.png" alt="Shopify Website Design & Development"
                            title="Dev PicklesSolution Shopify Png">

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <img src="assets/images/home/nodejs.png" alt="Node.js Website Design & Development"
                            title="Dev PicklesSolution Node.js Png">

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">

                        <img src="assets/images/home/blockchain.png" alt="Blockchain Website Design & Development"
                            title="Dev PicklesSolution Blockchain Png">

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <img src="assets/images/home/angular.png" alt="Angular Website Design & Development"
                            title="Dev PicklesSolution Angular Png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faqs pt-80 pb-80 sm-pt-50 sm-pb-50">
    <div class="container ">
        <div class="row wow fadeInUp">
            <h2 class="fs-24m">Frequently Asked <span class="web-color">Questions</span></h2>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How much do your websites cost?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Simply put, there is no one answer to this. The cost of your website depends on a lot of
                                factors, such as website architecture, custom integrations, website themes, and much
                                more.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How long does it take you to build a website?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Like the cost of your website, the time of building a website also varies from one
                                website to another. Custom programming, size of the overall website all these things
                                influence your project’s completion timeline.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you offer website hosting and maintenance?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Absolutely, we offer website hosting and maintenance services. Not just that, we also
                                offer enhancement features, bug fixes, and system updates even after completing your
                                project.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How can I reach you for my website development project?
                            </button>
                        </h3>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can book a free consultation call and let us know all your website requirements. We
                                will also give you recommendations relating to your project.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Which programming languages do you use for website development?
                            </button>
                        </h3>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our experts are well versed in programming languages like Java, Katlin, Ruby, CSS, and
                                much more.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<style>
    #more {
        display: none;
    }

    #more-2 {
        display: none;
    }

    #more-3 {
        display: none;
    }

    #more-4 {
        display: none;
    }

    #more-5 {
        display: none;
    }
</style>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction2() {
        var dots = document.getElementById("dots-2");
        var moreText = document.getElementById("more-2");
        var btnText = document.getElementById("myBtn-2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction3() {
        var dots = document.getElementById("dots-3");
        var moreText = document.getElementById("more-3");
        var btnText = document.getElementById("myBtn-3");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction4() {
        var dots = document.getElementById("dots-4");
        var moreText = document.getElementById("more-4");
        var btnText = document.getElementById("myBtn-4");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction5() {
        var dots = document.getElementById("dots-5");
        var moreText = document.getElementById("more-5");
        var btnText = document.getElementById("myBtn-5");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

<?php include 'partials/footer.php' ?>