<?php include 'partials/header.php' ?>

<section class="p3-android-website-bg pt-150 pb-70 sm-pt-100">
    <div class="container">

        <div class="row pt-3 web-head">
            <div class="col-md-6">
                <div class="pt-2r">
                    <div class="banner-line position-relative wow fadeInUp pb-20">
                        Services
                    </div>
                    <h1 class="text-white wow fadeInUp">
                        Android App Development Services - <span class="web-color">Building Apps </span>Your Users Will
                        Love
                    </h1>
                    <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        Android is the right choice for businesses, from growing startups to enterprise-grade
                        corporations, because of its higher number of users. Dev Pickles provides complete Android app
                        development services to its clients from diverse industries. Our team of experts will ensure
                        that your business scales higher with our expertise.
                    </p>
                    <div class="button-row">
                        <button class="button-one"><a class="form-1" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#contactModal">Get Started </a></button>
                        <button class="button-two"> <a href="javascript:$zopim.livechat.window.show()"
                                class="live-chat">Chat Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 shadow-sm inner-form2 wow fadeInRightBig mt-4 pb-40">
                <form action="/backend/action/action" method="POST" class="pt-20 sm-pt-30 form form-padding-set-2">
                    <input type="hidden" name="type" value="publishingJourney">
                    <input type="hidden" name="slug" value="android-app-development">

                    <div class="input-group mb-4">
                        <select name="application_type" class="form-control rounded-pill" style="padding: 10px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">
                                Which type of application you are
                                looking for?</option>
                            <option value="Web App">Web App</option>
                            <option value="Native App">Native App</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Hybrid App">Hybrid App</option>
                        </select>
                    </div>
                    <div class="input-group mb-4">
                        <select name="application_before" class="form-control rounded-pill" style="padding: 10px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">Do
                                you have an application before?
                            </option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <select name="business_nature" class="form-control rounded-pill" style="padding: 10px 20px;">
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
                                            value="Custom App Development" id="coverDesign">
                                        <label class="form-check-label" for="coverDesign">
                                            Custom App Development
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
                                    placeholder="Your Name">
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
                        <button class="btn form2-submit-button rounded-pill w-100" name="submit" type="submit">
                            Build my App </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="rn-bg-2 pt-160 sm-pt-40">
        <div class="our-technologies rnpg theme-style dark">
            <div class="container">
                <div class="row smactionbt">
                    <div class="col-md-12 text-center">
                        <h2 class="fs-16m">
                            <span>Have questions? </span>Let's talk today and take the first step towards <span>building
                                your app.</span>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="action-nnew">
                            <a href="tel:(949) 323-3170">
                                <img src="assets/images/website-design-and-development/phone.png" alt="Talk To Us" title="Dev Pickles Talk To Us Section Phone Png" >
                                <p>Talk to us on the phone</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-nnew">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#contactModal"
                                class="popup-btn form-2">
                                <img src="assets/images/website-design-and-development/quote.png" alt="Get A Qoute" title="Dev Pickles Get A Qoute Section Qoute Png" >
                                <p> Get a quote</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-nnew">
                            <a href="javascript:$zopim.livechat.window.show()" class="live-chat">
                                <img src="assets/images/website-design-and-development/chat.png" alt="Chat With Us" title="Dev Pickles Chat With Us Section Chat Png" >
                                <p>Chat with us </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Second Section Start -->

<!-- SECOND SECTION END  -->

<section class="design-counters bg-dark page-spacing">
    <div class="container">
        <!-- <div class="row wow fadeInUp">
            <div class="col-md-6 position-relative ">
                <h3 class="line-counter pl-140 sm-pl-80 text-white">Lorem ipsum dolor sit</h3>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-6 wow fadeinup">
                <h2 class="line-before fs-20m fs-30 lh-40 text-white">Why Is Dev PicklesYour Go-To <span
                        class="web-color">Android App </span>Development Company?</h2>
            </div>
        </div>
        <div class="row pt-2 ">
            <div class="col-md-10 wow fadeInUp text-white">
                <p class="fs-normal color-grey fs-14m">
                    We are an Android mobile app development company that focuses on helping your business grow to new
                    heights.
                </p>
            </div>
        </div>
        <div class="row counters-md pt-40 ">
            <div class="col-md-3 counter-1-android wow fadeInUp">
                <img src="assets/images/p3-custom-website-design-development/01.png" alt="Web Design And Development Process 01" title="Dev PicklesSolution Web Design And Development Process 01 Png" >
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-1.png" alt="Icon 1" title="Dev PicklesSolution Icon 01 Png" >
                <div></div>
                <h3 class=" text-white d-inline-block text-center">Focus on UI <br> design</h3>
                <p class="text-center text-white fs-14 m-0">
                    We have a complete app development process that starts with the product vision and ends with a
                    working, fully functional mobile app.
                    <span id="dots-new-1">...</span><span id="more-new-1">
                        We are a design obsessive agency, that's why we always do
                        rigorous research to come up with the best possible UI designs for your app.
                    </span>
                </p>
                <a class="see-more-android1" onclick="myFunctionnew1()" id="myBtn-new-1">Read more</a>
            </div>
            <div class="col-md-3 counter-2-android wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/02.png" alt="Web Design And Development Process 02" title="Dev PicklesSolution Web Design And Development Process 02 Png" >
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-2.png" alt="Icon 2" title="Dev PicklesSolution Icon 02 Png" >
                <div></div>
                <h3 class=" text-white d-inline-block text-center">Unlocking all Android <br> capabilities
                </h3>
                <p class="text-center text-white fs-14 m-0 ">
                    Using native apps helps other apps work at their full potential in terms of both hardware and
                    sensors. For Android app development, we use
                    <span id="dots-new-2">...</span><span id="more-new-2">
                        programming languages like Java and Kotlin. These
                        programming languages create functionalities that evaluate the capacity of any Android app you
                        may
                        need for your business.
                    </span>
                </p>
                <a class="see-more-android2" onclick="myFunctionnew2()" id="myBtn-new-2">Read more</a>
            </div>
            <div class="col-md-3 counter-3-android wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/03.png" alt="Web Design And Development Process 03" title="Dev PicklesSolution Web Design And Development Process 03 Png" >
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-3.png" alt="Icon 3" title="Dev PicklesSolution Icon 03 Png" >
                <div></div>
                <h3 class="text-white d-inline-block text-center">Apps for a diverse range <br> of Android devices</h3>
                <p class="text-center text-white fs-14 m-0">
                    Unlike IOS, Android is an open-source operating system. This makes it the first preference of OS
                    manufacturers for devices, wearables,
                    <span id="dots-new-3">...</span><span id="more-new-3">
                        and other gadgets. Our expert Android development team will
                        help create the best Android app for your business across different platforms. Be it a
                        smartphone,
                        smartwatch, TV, or any other gadget, we will create an app depending on the user's needs.
                    </span>
                </p>
                <a class="see-more-android3" onclick="myFunctionnew3()" id="myBtn-new-3">Read more</a>
            </div>
            <div class="col-md-3 counter-4-android wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/04.png" alt="Web Design And Development Process 04" title="Dev PicklesSolution Web Design And Development Process 04 Png" >
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-4.png" alt="Icon 4" title="Dev PicklesSolution Icon 04 Png" >
                <div></div>
                <h3 class=" text-white d-inline-block text-center">Fully functional <br> products</h3>
                <p class="text-center text-white fs-14 m-0">
                    We test every Android app internally before it is launched. Our team checks everything from
                    functionality to design so the users get an app
                    <span id="dots-new-4">...</span><span id="more-new-4">
                        experience that works seamlessly without any problem
                        across a multitude of platforms.
                    </span>
                </p>
                <a class="see-more-android4" onclick="myFunctionnew4()" id="myBtn-new-4">Read more</a>
            </div>
        </div>

    </div>
</section>

<!-- Testimonial Section Start -->
<?php include 'partials/video-testimonials-white.php' ?>
<!-- Testimonial Section End -->

<section class="bg-color page-spacing">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeinup">
                <h2 class="text-white paragraph">Want to know more <span class="text-black">about why you</span> should
                    trust <span class="text-black">HOI</span>?</h2>
            </div>
        </div>
        <div class=" text-center pt-20 wow fadeinup">
            <a class="btn consultation mt fs-12m form-5" href="javascript:;" data-bs-toggle="modal"
                data-bs-target="#contactModal">Book a Call
                &nbsp; </a>
        </div>
    </div>
</section>

<!-- Portfolio Section End -->
<?php include 'partials/portfolio-app.php' ?>
<!-- Portfolio Section End -->


<section class="bg-dark page-spacing">
    <div class="container">
        <!-- <div class="row">
            <div class="offset-md-4">
                <div class="position-relative">
                    <div class="p3-wordpress-line2">Lorem ipsum dolor sit</div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="text-center pt-3">
                <h2 class="text-white wow fadeInUp fs-30 fs-22m">
                    A Custom Android App To Take Your <span class="web-color">Business Global</span>
                </h2>
                <div class="col-md-6 offset-md-3">
                    <p class="text-white fs-14">
                        We provide Android application development services for your business that make your products
                        transcend borders.
                    </p>
                </div>
            </div>
        </div>
        <div class="row pt-5 sm-pt-0">
            <div class="col-sm-5 sm-pb-40 wow slideInLeft">
                <img class="" alt="Custom Android App" title="Dev PicklesSolution Custom Android App Section Png" src="assets/images/p3-android-app/mobile-app-dev 1.png">
            </div>
            <div class="col-sm-7 wow slideInRight">
                <h3 class="pl-50 sm-pl-0 web-color fs-20">UI/UX Design</h3>
                <p class="pt-10 pl-50 sm-pl-0 text-white fs-14m">
                    A great UI/UX design is critical for the success of any Android app because it operates on a wide
                    range of devices. Our Android UI/UX experts have mastered the skill to create immersive designs
                    across all Android gadgets and platforms.
                </p>

                <h3 class="pl-50 sm-pl-0 web-color fs-20">Custom Android Application Development</h3>
                <p class="pt-10 pl-50 sm-pl-0 text-white fs-14m">
                    Our Android developers have expertise in creating functional and robust app solutions. We have a
                    portfolio with a wide range of industries globally to showcase our capabilities. Dev Picklescreates Android
                    apps that transform your company's vision into an immersive Android application.
                </p>

                <h3 class="pl-50 sm-pl-0 web-color fs-20">Manual and Automated Android Software Testing</h3>
                <p class="pt-10 pl-50 sm-pl-0 text-white fs-14m">
                    Our development process always prioritizes security and performance above anything else. We make
                    sure that the app is 100% glitch-free with zero lags. We run a range of manual and automated tests
                    to create an Android app that boasts future-ready Android software.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- FIVE SECTION START  -->

<section class="page-spacing">
    <div class="container">
        <div class="row">
            <div class="position-relative wow slideInleft">
                <div class="p3-second-line text-black wow slideInLeft">OUR SOLUTIONS</div>
            </div>
        </div>
        <div class="row p3-android-paragraph">
            <div class="col-md-6 pt-2  wow slideInLeft">
                <h2 class="text-black fs-30 fs-20m fw-600 lh-44 lh-32m pb-10">Custom <span class="web-color">Android App
                    </span>Development Services Across All Platforms
                </h2>
                <div class="wow fadeInUp p3-first-button">
                    <button> <a class="web-color form-3" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#contactModal">Let’s Get Started &nbsp;</a></button>
                </div>
            </div>
            <div class="col-md-6 wow slideInRight sm-pt-20">
                <p class="text-black second lh-24 fs-16">
                    Our Android development company doesn’t create Android apps only for smartphones. Our app
                    development portfolio speaks for itself. We have expertise across a wide range of android devices
                    and platforms.
                </p>
                <p class="lh-24 fs-16">
                    The Android app development process we follow helps us explore new horizons in the Android world. We
                    have complete app solutions for android smartphones, wearables, TVs, and all other types of devices
                    and platforms.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="p3-android-bg1">
    <div class="container">
        <div class="row pt-120 sm-pt-20 p3-android-para">
            <div class="col-md-5">
                <!-- <div class="p3-fourth-line position-relative wow fadeInUp">
                    Lorem ipsum
                </div> -->
                <h2 class="wow fadeInUp text-black first fs-20m">
                    We Develop Android App Solutions <span class="text-white">Armed With Diverse Technologies.</span>
                </h2>

                <p class="second wow fadeInUp pt-10 fs-14m">
                    Over the course of many years, Dev Pickleshas built a reputation as a top Android application development
                    company out there. From smartphones to wearable Android apps, our developers always ensure that you
                    get the most user-centered and custom Android app that functions smoothly across all platforms.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- FOURTH SECTION START  -->
<section class="page-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 wow slideInLeft">
                <p class="second">
                    Hoi's Solutions is a custom Android app development company that offers all-in-one services for your
                    online brand.
                </p>
            </div>
            <div class="col-md-6">
                <div class="position-relative wow slideInRight">
                    <div class="p3-third-line pl-120 ">Our Expertise</div>
                </div>
                <div class=" web-paragraph-2">
                    <div class=" pt-2 wow slideInRight">
                        <h2 class="text-black fs-30 fs-20m fw-600 lh-34">HOI’s Full-Circle
                            <span class="web-color">Android Mobile App Development
                            </span>Services.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs-services app-boxes style3 web-boxes pt-40 sm-pt-20 _hidden-sm wow fadeinup">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="services-item mb-20 sr-box-shadow">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img class="main-img" src="assets/images/website-design/icon-1.png" alt="Custom Web Concepts" title="Dev PicklesSolution Custom web concepts Section Png Black" >
                                        <img class="hover-img" src="assets/images/website-design/icon-1-hover.png" alt="Custom Web Concept" title="Dev PicklesSolution Custom web concepts Section Png White"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                Custom iOS & Android apps development
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
                                        <img class="main-img" src="assets/images/website-design/icon-2.png" alt="Custom Website Design" title="Dev PicklesSolution Custom website design Section Png Black" >
                                        <img class="hover-img" src="assets/images/website-design/icon-2-hover.png" alt="Custom Website Designs" title="Dev PicklesSolution Custom website design Section Png White"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                Native and cross-platform solutions
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
                                        <img class="main-img" src="assets/images/website-design/icon-3.png" alt="Custom Coding for UI and UX" title="Dev PicklesSolution Custom Coding for UI and UX Section Png Black" >
                                        <img class="hover-img" src="assets/images/website-design/icon-3-hover.png" alt="Custom Coding for UI & UX" title="Dev PicklesSolution Custom Coding for UI and UX Section Png White"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="lh-48i">
                                                UI/UX design
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
                                        <img class="main-img" src="assets/images/website-design/icon-4.png" alt="Ecommerce Site Development" title="Dev PicklesSolution Ecommerce Site Development Section Png Black" >
                                        <img class="hover-img" src="assets/images/website-design/icon-4-hover.png" alt="Ecommerce Website Development" title="Dev PicklesSolution Ecommerce Site Development Section Png White"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                Consulting and prototyping
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
                                        <img class="main-img" src="assets/images/website-design/icon-5.png" alt="Niche-Based Websites" title="Dev PicklesSolution Niche-Based Websites Section Png Black" >
                                        <img class="hover-img" src="assets/images/website-design/icon-5-hover.png" alt="Niche Based Website" title="Dev PicklesSolution Niche-Based Websites Section Png White"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                Automated QA and testing
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
                                        <img class="main-img" src="assets/images/website-design/icon-6.png" alt="Website Maintenance" title="Dev PicklesSolution Website Maintenance Section Png Black" >
                                        <img class="hover-img" src="assets/images/website-design/icon-6-hover.png" alt="Web Maintenance" title="Dev PicklesSolution Website Maintenance Section Png White"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content ">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                Maintenance & post-warranty support
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
    </div>

</section>
<!-- FOURTH SECTION END  -->

<section class="p3-android-bg2">
    <div class="container">
        <div class="row pt-100 sm-pt-35 banner-third">
            <div class="col-md-6 offset-md-6">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-80 text-white">Lorem ipsum</h3>
                </div> -->
                <div class="row pt-10">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-1.png" alt="Vector 1" title="Dev PicklesSolution Vector 1 Section Png" >
                    </div>
                    <div class="col-md-11">
                        <p class="fs-18 fs-14mm text-white">
                            We use native languages for Android, like Kotlin, to create custom-made high-performance
                            apps.
                        </p>
                    </div>
                </div>
                <div class="row pt-20">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-2.png" alt="Vector 2" title="Dev PicklesSolution Vector 2 Section Png" >
                    </div>
                    <div class="col-md-11">
                        <p class="fs-18 fs-14mm text-white">
                            We run manual and automated tests before publishing your Android applications.
                        </p>
                    </div>
                </div>
                <div class="row pt-20">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-3.png" alt="Vector 3" title="Dev PicklesSolution Vector 3 Section Png" >
                    </div>
                    <div class="col-md-11">
                        <p class="fs-18 fs-14mm text-white">
                            We align your business ideas with interactive UI/UX designs.
                        </p>
                    </div>
                </div>
                <div class="pt-10 sm-pt-30 wow fadeInUp">
                    <a class="btn web-btn consultation hover get-in-app-development form-4" href="javascript:;"
                        data-bs-toggle="modal" data-bs-target="#contactModal">Book a Consultation
                        &nbsp; </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <p class="lh-24 fs-14m">
                    We have a proven roadmap from as early as brainstorming to post-release support.
                </p>
            </div>
            <div class="col-md-5 offset-md-1 wow slideInRight">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-90">WHY PARTNER WITH US?</h3>
                </div> -->
                <h2 class="fs-30 fs-20m pb-20">We Have A Proven Process <span class="web-color">To Help You Grow</span></h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row counters">
            <div class="col-md-4 counter-1-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/01.png" alt="Dev PicklesSoluions Number 01" title="Dev PicklesSolution Number 1 Png" >
                <h3 class=" web-color d-inline-block">Research And Estimation</h3>

                <p class="pl-75 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Our process begins with a deep understanding of your business, goals, and app requirements. Next,
                    our team starts evaluating your project through
                    <span id="dots">...</span><span id="more">
                        the prism of the target audience, competitors, and more. This helps us outline expected
                        milestones, costs, deliverables, and deadlines.
                    </span>
                </p>
                <a class="see-more-btn" onclick="myFunction()" id="myBtn">Read more</a>
            </div>

            <div class="col-md-4 counter-2-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/02.png" alt="Dev PicklesSoluions Number 02" title="Dev PicklesSolution Number 2 Png" >
                <h3 class=" web-color d-inline-block">Planning</h3>

                <p class="pl-80 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    In this stage, we start planning the ideas through the lens of the end user. With this process, we
                    start to create the most meaningful features needed
                    <span id="dots-2">...</span><span id="more-2">
                        for your Android app. At the end of this stage, we present you with projection documentation
                        that includes app design drafts and wireframes.
                    </span>
                </p>
                <a class="see-more-btn-2" onclick="myFunction2()" id="myBtn-2">Read more</a>
            </div>

            <div class="col-md-4 counter-3-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/03.png" alt="Dev PicklesSoluions Number 03" title="Dev PicklesSolution Number 3 Png" >
                <h3 class=" web-color d-inline-block">Design And Development</h3>
                <p class="pl-80 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Next, we start bringing those draft designs to life through app development. Our Android developers
                    use the optimal set of tech to create a high performing
                    <span id="dots-3">...</span><span id="more-3">
                        and secure Android app for your business. The final deliverables are tested rigorously before
                        the app gets published.
                    </span>
                </p>
                <a class="see-more-btn-2" onclick="myFunction3()" id="myBtn-3">Read more</a>
            </div>
        </div>
        <div class="row counters pt-50 sm-pt-0 wow fadeinup">
            <div class=" offset-md-2 col-md-4 counter-4-p3-android">
                <img src="assets/images/hoi-mobile-app-development/04.png" alt="Dev PicklesSoluions Number 04" title="Dev PicklesSolution Number 4 Png" >
                <h3 class=" web-color d-inline-block">Application Release</h3>

                <p class="pl-96 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    When your app is up and running, we will start preparing your application for release. Next, we
                    submit the app in line with Google play's submission
                    <span id="dots-4">...</span><span id="more-4">
                        guidelines. We also provide ongoing support after your app goes live on the Play Store.
                    </span>
                </p>
                <a class="see-more-btn-3" onclick="myFunction4()" id="myBtn-4">Read more</a>
            </div>

            <div class="col-md-4 counter-5-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/05.png" alt="Dev PicklesSoluions Number 05" title="Dev PicklesSolution Number 5 Png" >
                <h3 class=" web-color d-inline-block">Product Growth</h3>

                <p class="pl-90 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Dev Picklesstands by your side every step of the way. That's why we offer post-production support and
                    maintenance after your app goes live. Our team keeps
                    <span id="dots-5">...</span><span id="more-5">
                        a close check on enhancing your product with new features, security patches, and more.
                    </span>
                </p>
                <a class="see-more-btn-4" onclick="myFunction5()" id="myBtn-5">Read more</a>
            </div>
        </div>
    </div>
</section>


<section class="dark-bg page-spacing">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeinup">
                <h2 class="text-white paragraph-android">Want to expand your <span class="web-color">business globally
                    </span>with an Android app?</h2>
            </div>
        </div>
        <div class=" text-center pt-20 wow fadeinup">
            <a class="btn consultation hover-web mt text-capitalize fs-12m form-6" href="javascript:;"
                data-bs-toggle="modal" data-bs-target="#contactModal">Yes, build my app&nbsp; </a>
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
                <img src="assets/images/home/clutch.png" alt="Dev Pickles Clutch Profile" title="Dev PicklesSolution Clutch Png " >
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.crunchbase.com/organization/hoi-solutions-68a7','new_window');">
                <img src="assets/images/home/crunch.png" alt="Dev Pickles Crunchbase Profile" title="Dev PicklesSolution Crunchbase Png" >
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.trustpilot.com/review/hoisolutions.com','new_window');">
                <img src="assets/images/home/trustpilot.png" alt="Dev Pickles Trustpilot Profile" title="Dev PicklesSolution Trustpilot Png" >
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.thumbtack.com/ca/newport-beach/web-design/hoi-solutions-award-winning-agency/service/445210545835835397','new_window');">
                <img src="assets/images/home/thumb.png" alt="Dev Pickles Thumbtack Profile" title="Dev PicklesSolution Thumbtack Png" >
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<?php include 'partials/testimonials-mob-app-new.php' ?>
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

<section>
    <div class="rs-partner style2 pt-20 pb-10 services sm-pb-24">
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
                        <img src="assets/images/home/wp.png" alt="WordPress Website Design & Development" title="Dev PicklesSolution WordPress Png" >
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">

                        <img src="assets/images/home/sp.png" alt="Shopify Website Design & Development" title="Dev PicklesSolution Shopify Png" >

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <img src="assets/images/home/nodejs.png" alt="Node.js Website Design & Development" title="Dev PicklesSolution Node.js Png" >

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">

                        <img src="assets/images/home/blockchain.png" alt="Blockchain Website Design & Development" title="Dev PicklesSolution Blockchain Png" >

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <img src="assets/images/home/angular.png" alt="Angular Website Design & Development" title="Dev PicklesSolution Angular Png" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faqs page-spacing">
    <div class="container ">
        <div class="row wow fadeInUp">
            <h2 class="fs-20m">Frequently Asked <span class="web-color">Questions</span></h2>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do you allocate the resources for my app development in Android?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We have multiple SMEs in our development team. We carefully analyze your app idea and
                                the industry you operate in and then allocate the most suitable SME which has experience
                                in your industry.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Which tools and technologies do you use?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We use the following tools and technologies.
                                <li>Android Studio</li>
                                <li>AVD Manager</li>
                                <li>ADB (Android Debug Bridge)</li>
                                <li>Eclipse</li>
                                <li>Fabric</li>
                                <li>Genymotion</li>
                                <li>GameMaker: Studio</li>
                                <li>Gradle</li>
                                <li>IntelliJ IDEA</li>
                                <li>Instabug</li>
                                <li>LeakCanary</li>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Will you assist me in uploading my Android app to the Play Store?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we take full responsibility for publishing your Android app on the Play Store. This
                                is a part of the end-to-end android App development service we have.
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
                                How long does Android app development take?
                            </button>
                        </h3>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The timeline of the project varies from project to project. Simpler Android apps take up
                                to four months, while complex applications can take, on average, nine months.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Should I develop for Android or iOS first?
                            </button>
                        </h3>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Each platform has its own advantages. To select the right option, you should first delve
                                into the demographics and location of your target audience. For example, iOS dominates
                                in Japan and the US, while Android trounces the competition in China and India.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Which Android app development services do you offer?
                            </button>
                        </h3>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer the following app development services
                                <li>Android app development code review</li>
                                <li>Android app development strategy</li>
                                <li>Android app UI and UX design</li>
                                <li>Android app QA and testing</li>
                                <li>Android app development monetization</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    #form {
        display: none !important;
    }

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

    #more-new-1 {
        display: none;
    }

    #more-new-2 {
        display: none;
    }

    #more-new-3 {
        display: none;
    }

    #more-new-4 {
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

    function myFunctionnew1() {
        var dots = document.getElementById("dots-new-1");
        var moreText = document.getElementById("more-new-1");
        var btnText = document.getElementById("myBtn-new-1");

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

    function myFunctionnew2() {
        var dots = document.getElementById("dots-new-2");
        var moreText = document.getElementById("more-new-2");
        var btnText = document.getElementById("myBtn-new-2");

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

    function myFunctionnew3() {
        var dots = document.getElementById("dots-new-3");
        var moreText = document.getElementById("more-new-3");
        var btnText = document.getElementById("myBtn-new-3");

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

    function myFunctionnew4() {
        var dots = document.getElementById("dots-new-4");
        var moreText = document.getElementById("more-new-4");
        var btnText = document.getElementById("myBtn-new-4");

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