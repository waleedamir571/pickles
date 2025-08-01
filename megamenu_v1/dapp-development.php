<?php include 'partials/header.php' ?>

<section class="p3-android-website-bg pt-150 pb-70 sm-pt-110">
    <div class="container">
        <div class="row pt-3 web-head">
            <div class="col-md-6">
                <div class="pt-2r">
                    <div class="banner-line position-relative wow fadeInUp pb-20">
                        Services
                    </div>
                    <h1 class="text-white wow fadeInUp">
                        Top-Rated <span class="web-color">dApp Development </span>Company
                    </h1>
                    <p class="wow fadeInUp">
                        Dev Pickles is a leading dApp development company offering decentralized app development
                        services harnessing the power of blockchain technology. We build censorship-resistant dApps,
                        ensuring scalability and sustainability while revolutionizing user experiences.
                    </p>
                    <div class="button-row wow fadeInUp">
                        <button class="button-one"><a class="wp form-1" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#contactModal">Get Started </a></button>
                        <button class="button-two"> <a href="javascript:$zopim.livechat.window.show()"
                                class="live-chat">Chat Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 shadow-sm inner-form top-50 landing-form wow fadeInRightBig mt-4">
                <form action="/backend/action/action" method="POST" class="pt-20 sm-pt-30 form form-padding-set-2">
                    <input type="hidden" name="type" value="publishingJourney">
                    <div class="input-group mb-4">
                        <select name="application_type" class="form-control rounded-pill" style="padding: 10px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">
                                Which type of application are you looking for?
                            </option>
                            <option value="Web App">Web App</option>
                            <option value="Native App">Native App</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Hybrid App">Hybrid App</option>
                        </select>
                    </div>
                    <div class="input-group mb-4">
                        <select name="application_before" class="form-control rounded-pill" style="padding: 10px 20px;">
                            <option value="" selected="selected" disabled="disabled" style="color: grey !important;">Do
                                you have an application?
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

<div class="rn-bg-2 pt-32rm ">
    <div class="our-technologies rnpg theme-style dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="fs-16m">
                        <span>Have questions? </span>Let's talk today and take the first step towards <span>building
                            your app.</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 actions-tab">
                    <ul>
                        <li><a href="tel:(949) 323-3170"> <img src="assets/images/home/action-1.png" alt="Talk To Us"
                                    title="Dev PicklesSolution Phone Png" width="79" height="71"> Talk to us on the phone</a>
                        </li>
                        <li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#contactModal"
                                class="popup-btn form-2"> <img src="assets/images/home/action-2.png" alt="Get A Qoute"
                                    title="Dev PicklesSolution Get A Qoute Png" width="79" height="71">
                                Get a quote</a></li>
                        <li><a href="javascript:$zopim.livechat.window.show()" class="live-chat"> <img
                                    src="assets/images/home/action-3.png" alt="Chat With Us"
                                    title="Dev PicklesSolution Chat With Us Png" width="79" height="71">
                                Chat with us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Second Section Start -->

<!-- SECOND SECTION END  -->

<section class="design-counters bg-dark page-spacing">
    <div class="container">
        <!-- <div class="row wow fadeInUp">
            <div class="col-md-6 position-relative ">
                <h3 class="line-counter pl-140 sm-pl-80 text-white">Lorem ipsum dolor sit</h3>
            </div>
        </div> -->
        <div class="row pt-2">
            <div class="col-md-6 wow fadeinup">
                <h2 class="line-before fs-20m fs-30 lh-40 text-white">Unparalleled
                    <span class="web-color">dApp Development </span>Services
                </h2>
            </div>
        </div>
        <div class="row pt-2 ">
            <div class="col-md-10 wow fadeInUp text-white">
                <p class="fs-normal color-grey fs-14m">
                    At Dev Pickles, we are a team of UX analysts, developers and blockchain enthusiasts enabling
                    businesses in automating, scaling and sustaining via decentralized tech.
                </p>
            </div>
        </div>
        <div class="row counters-md pt-40 ">
            <div class="col-md-3 counter-1-android wow fadeInUp">
                <img src="assets/images/p3-custom-website-design-development/01.png"
                    alt="Web Design And Development Process 01"
                    title="Dev PicklesSolution Web Design And Development Process 01 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-1.png" alt="Icon 1"
                    title="Dev PicklesSolution Icon 01 Png">
                <div></div>
                <h3 class=" text-white d-inline-block ">Custom dApp<br>Development</h3>
                <p class="text-center text-white fs-14 m-0">
                    Our custom dApp development services include building blockchain-backed, futuristic, applications
                    like DeFi apps, decentralized games,
                    <span id="dots-new-1">...</span><span id="more-new-1">
                        crypto wallets, social media apps, insurance apps, and more,
                        offering a seamless user experience like never before.
                    </span>
                </p>
                <a class="see-more-android1" onclick="myFunctionnew1()" id="myBtn-new-1">Read more</a>
            </div>
            <div class="col-md-3 counter-2-android wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/02.png"
                    alt="Web Design And Development Process 02"
                    title="Dev PicklesSolution Web Design And Development Process 02 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-2.png" alt="Icon 2"
                    title="Dev PicklesSolution Icon 02 Png">
                <div></div>
                <h3 class=" text-white d-inline-block">Smart<br>Contract Development</h3>
                <p class="text-center text-white fs-14 m-0 ">
                    As a leading blockchain dApp development company, we excel in smart contract development. Our dApp
                    developers specialize in crafting
                    <span id="dots-new-2">...</span><span id="more-new-2">
                        secure smart contracts that automate complex processes, remove
                        intermediaries, and establish trust and transparency.
                    </span>
                </p>
                <a class="see-more-android2" onclick="myFunctionnew2()" id="myBtn-new-2">Read more</a>
            </div>
            <div class="col-md-3 counter-3-android wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/03.png"
                    alt="Web Design And Development Process 03"
                    title="Dev PicklesSolution Web Design And Development Process 03 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-3.png" alt="Icon 3"
                    title="Dev PicklesSolution Icon 03 Png">
                <div></div>
                <h3 class="text-white d-inline-block">dApp Integration<br>& Interoperability</h3>
                <p class="text-center text-white fs-14 m-0">
                    We offer unrivaled dApp integration and interoperability solutions to effortlessly bridge the gap
                    between blockchain platforms. We ensure
                    <span id="dots-new-3">...</span><span id="more-new-3">
                        frictionless communication and data exchange between
                        distinct decentralized applications, culminating in a unified and harmonious ecosystem.
                    </span>
                </p>
                <a class="see-more-android3" onclick="myFunctionnew3()" id="myBtn-new-3">Read more</a>
            </div>
            <div class="col-md-3 counter-4-android wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/04.png"
                    alt="Web Design And Development Process 04"
                    title="Dev PicklesSolution Web Design And Development Process 04 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-4.png" alt="Icon 4"
                    title="Dev PicklesSolution Icon 04 Png">
                <div></div>
                <h3 class=" text-white d-inline-block">dApp Maintenance<br>& Support</h3>
                <p class="text-center text-white fs-14 m-0">
                    Our dApp maintenance and support services are designed for uninterrupted operations and continuous
                    improvement of your
                    <span id="dots-new-4">...</span><span id="more-new-4">
                        decentralized application. Our dApp developers seamlessly monitor tasks, address
                        bugs, and implement prompt updates for constant monitoring, security enhancements, and
                        performance
                        optimization.
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

<section class="bg-color pt-80 pb-80 sm-pt-40 sm-pb-40">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeinup">
                <h2 class="text-white paragraph fs-26i">Book a Free Consultation Session to Discuss the <span
                        class="text-black">Cost & Turnaround</span> Time for Your dApp Development Project.</h2>
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
<?php include 'partials/portfolio-main.php' ?>
<!-- Portfolio Section End -->

<section class="bg-dark pt-80 pb-80 sm-pb-20 sm-pt-20">
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
                <h2 class="text-white wow fadeInUp fs-30 fs-22m">Our <span class="web-color">dApp Development
                    </span>Framework</h2>
                <div class="col-md-6 offset-md-3">
                    <p class="text-white fs-14">
                        Here's what our dApp development framework looks like
                    </p>
                </div>
            </div>
        </div>
        <div class="row pt-5 sm-pt-0">
            <div class="col-sm-5 sm-pb-40 wow slideInLeft">
                <img class="" alt="Custom Android App" title="Dev PicklesSolution Custom Android App Section Png" src="assets/images/p3-android-app/mobile-app-dev 1.png">
            </div>
            <div class="col-sm-7 wow slideInRight">
                <h3 class="pl-50 sm-pl-0 web-color fs-20">Blockchain Platforms</h3>
                <p class="pt-10 pl-50 sm-pl-0 text-white fs-14m">
                    Our dApp development framework revolves around the most powerful blockchain platforms, including
                    Ethereum, Binance Smart Chain, and Hyperledger Fabric. Our dApp development services offer failproof
                    data protection and security, network transparency, scalability, interoperability, and a streamlined
                    development process to build seamless user experiences.
                </p>

                <h3 class="pl-50 sm-pl-0 web-color fs-20">dApp Tools & Environments</h3>
                <p class="pt-10 pl-50 sm-pl-0 text-white fs-14m">
                    We use state-of-the-art dApp development tools and environments like Testnet, Zeppelin, Truffle,
                    Blockstack, Remix, and Ethereum Geth to leverage the blockchain and decentralization element fully.
                    From data protection and security to gateways and testing, these dedicated tools and environments
                    help us streamline our dApp development process.
                </p>

                <h3 class="pl-50 sm-pl-0 web-color fs-20">dApp Programming Languages</h3>
                <p class="pt-10 pl-50 sm-pl-0 text-white fs-14m">
                    As a leading decentralized app development company, we are well-versed with dApp back-end
                    programming languages like Solidity, Rust, JavaScript, and Golang to create smart contracts and
                    chain codes in hyper-ledger fabric. Our dApp developers also have a strong grasp of front-end dApp
                    development tools like React, jQuery, and Angular. JS.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- FIVE SECTION START  -->
<!-- THIRD SECTION START  -->
<section class="pt-60 pb-60 sm-pt-30 sm-pb-30">
    <div class="container">
        <div class="row">
            <div class="position-relative wow slideInleft">
                <div class="p3-second-line text-black wow slideInLeft">OUR SOLUTIONS</div>
            </div>
        </div>
        <div class="row p3-android-paragraph">
            <div class="col-md-6 pt-2  wow slideInLeft">
                <h2 class="text-black first fs-30">DeFi <span class="web-color">dApp Development </span>Services
</h2>
                <div class="wow fadeInUp p3-first-button d-none d-sm-block">
                    <button> <a class="web-color form-3" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#contactModal">Let’s Get Started &nbsp;</a></button>
                </div>
            </div>
            <div class="col-md-6 wow slideInRight sm-pt-10">
                <p class="text-black second lh-24 fs-14m">
                    Our DeFi dApp development services go beyond surface-level solutions, delving deep into the
                    intricacies of decentralized finance. We employ a meticulous approach, leveraging cutting-edge
                    blockchain platforms such as Ethereum, Solidity, and Web3.js to build failproof and impregnable DeFi
                    apps.
                </p>
                <p class="lh-24 fs-14m">
                    Our DeFi app development revolves around the foundation of smart contracts, guaranteeing trust,
                    transparency, and immutability in every financial transaction. We empower you to create DeFi apps
                    that foster financial inclusivity and facilitate seamless global transactions, opening doors to new
                    investment opportunities and wealth creation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="wow fadeInUp p3-first-button d-lg-none">
                <button> <a class="web-color form-3" href="javascript:;" data-bs-toggle="modal"
                        data-bs-target="#contactModal">Let’s Get Started &nbsp;</a></button>
            </div>
        </div>
    </div>
</section>
<!-- THIRD SECTION END  -->
<section class="p5-dApps-bg1">
    <div class="container">
        <div class="row pt-120 sm-pt-20 p3-android-para">
            <div class="col-md-5">
                <div class="p5-dApps-line position-relative wow fadeInUp">
                    dApp Game Development
                </div>
                <h2 class="wow fadeInUp text-black first fs-26i fs-20m">Pushing the <span class="text-white">Boundaries
                        in
                        Decentralized </span>Game Development</h2>

                <p class="second wow fadeInUp pt-10 fs-14m">
                    Our dApp game development services epitomize the convergence of gaming and decentralized technology,
                    creating unparalleled gaming experiences and offering new means of monetization. Our focus on
                    decentralized architecture ensures transparency, fairness, and enhanced security, providing end
                    users with trust and ownership unparalleled in traditional gaming.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pt-80 sm-pt-30">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <p class="lh-24 fs-14m">
                    We follow a failproof dApp Development roadmap to build feature-rich, wow-worthy dApps:
                </p>
            </div>
            <div class="col-md-5 offset-md-1 wow slideInRight">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-90">WHY PARTNER WITH US?</h3>
                </div> -->
                <h2 class="fs-34 fs-20m">Our <span class="web-color">dApp Development </span>Process</h2>
            </div>
        </div>
    </div>

    <div class="container pt-40 pb-70">
        <div class="row counters">
            <div class="col-md-4 counter-1-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/01.png" alt="Dev PicklesSoluions Number 01"
                    title="Dev PicklesSolution Number 1 Png">
                <h3 class=" web-color d-inline-block">Blockchain Ideation</h3>

                <p class="pl-75 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    We initiate the process by brainstorming ideas and requirement gathering to assess the feasibility
                    of migrating existing systems to distributed ledger technology.
                    <span id="dots">...</span><span id="more">
                        We utilize a "Fail fast," "MVP," and
                        "v2.0" approach, define off-chain and on-chain business entities and establish a roadmap for
                        dApp
                        development.
                    </span>
                </p>
                <a class="see-more-btn" onclick="myFunction()" id="myBtn">Read more</a>
            </div>

            <div class="col-md-4 counter-2-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/02.png" alt="Dev PicklesSoluions Number 02"
                    title="Dev PicklesSolution Number 2 Png">
                <h3 class=" web-color d-inline-block">PoC Development</h3>

                <p class="pl-80 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    After careful analysis and ideation, we choose the most suitable blockchain technology, such as
                    Hyperledger, Ethereum, HashGraph, or Lightning Networks.
                    <span id="dots-2">...</span><span id="more-2">
                        Selecting a simple yet crucial use case, we
                        develop a Proof of Concept (PoC) to demonstrate the feasibility and viability of the dApp.
                    </span>
                </p>
                <a class="see-more-btn-2" onclick="myFunction2()" id="myBtn-2">Read more</a>
            </div>

            <div class="col-md-4 counter-3-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/03.png" alt="Dev PicklesSoluions Number 03"
                    title="Dev PicklesSolution Number 3 Png">
                <h3 class=" web-color d-inline-block">User Interface Design</h3>
                <p class="pl-80 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    We focus on creating intuitive and visually appealing user interfaces for each component of the
                    dApp. We design the technical architecture
                    <span id="dots-3">...</span><span id="more-3">
                        with a keen emphasis on scalability, security, and GDPR
                        compliance and launch clear sprints and delivery milestones for seamless progression
                    </span>
                </p>
                <a class="see-more-btn-2" onclick="myFunction3()" id="myBtn-3">Read more</a>
            </div>
        </div>
        <div class="row counters pt-50 sm-pt-0 wow fadeinup">
            <div class=" offset-md-2 col-md-4 counter-4-p3-android">
                <img src="assets/images/hoi-mobile-app-development/04.png" alt="Dev PicklesSoluions Number 04"
                    title="Dev PicklesSolution Number 4 Png">
                <h3 class=" web-color d-inline-block">dApp Development</h3>

                <p class="pl-96 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Beginning with Pre-alpha, we lay a strong foundation, refining concepts and establishing a solid
                    dApp development framework. We then dive
                    <span id="dots-4">...</span><span id="more-4">
                        deeper into development, translating ideas into tangible
                        solutions, meticulously crafting and fine tuning core functionalities, and rigorously testing
                        and
                        iterating for optimal performance.
                    </span>
                </p>
                <a class="see-more-btn-3" onclick="myFunction4()" id="myBtn-4">Read more</a>
            </div>

            <div class="col-md-4 counter-5-p3-android wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/05.png" alt="Dev PicklesSoluions Number 05"
                    title="Dev PicklesSolution Number 5 Png">
                <h3 class=" web-color d-inline-block">Deployment & Upgrades</h3>

                <p class="pl-90 pt-20 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    We handle deployment activities such as provisioning and deployment on the main chain. Our DevOps,
                    quality assurance, and delivery management teams
                    <span id="dots-5">...</span><span id="more-5">
                        oversee the deployment process and manage upgrades
                        effectively. In the case of hybrid dApps, we explore cloud deployment options and app store
                        releases.
                    </span>
                </p>
                <a class="see-more-btn-4" onclick="myFunction5()" id="myBtn-5">Read more</a>
            </div>
        </div>
    </div>
</section>
<section class="p5-dApps-bg2">
    <div class="container">
        <div class="row pt-100 sm-pt-35 banner-third">
            <div class="col-md-6 offset-md-6">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-80 text-white">Lorem ipsum</h3>
                </div> -->
                <div class="row pt-10">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-1.png" alt="Vector 1"
                            title="Dev PicklesSolution Vector 1 Section Png">
                    </div>
                    <div class="col-md-11">
                        <p class="fs-18 fs-14mm text-white">
                            <b>NFT Ticketing dApps:</b> Transform ticketing experiences with secure and verifiable NFT
                            technology
                        </p>
                    </div>
                </div>
                <div class="row pt-20">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-2.png" alt="Vector 2"
                            title="Dev PicklesSolution Vector 2 Section Png">
                    </div>
                    <div class="col-md-11">
                        <p class="fs-18 fs-14mm text-white">
                            <b>Social Media dApps:</b> Empower users with decentralized social interactions and data
                            privacy
                        </p>
                    </div>
                </div>
                <div class="row pt-20">
                    <div class="col-md-1">
                        <img src="assets/images/p3-custom-website-design-development/sec2-vector-3.png" alt="Vector 3"
                            title="Dev PicklesSolution Vector 3 Section Png">
                    </div>
                    <div class="col-md-11">
                        <p class="fs-18 fs-14mm text-white">
                            <b>Crypto Wallets:</b> Securely manage and transact cryptocurrencies with our customized
                            wallets
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
<section class=" dark-bg pt-80 pb-80 sm-pt-50 sm-pb-40">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeinup">
                <h2 class="text-white paragraph-android">Discuss & Validate your <span class="web-color">dApp Development
                    </span>Idea with Blockchain Experts Today!</h2>
            </div>
        </div>
        <div class=" text-center pt-20 wow fadeinup">
            <a class="btn consultation hover-web mt text-capitalize fs-12m form-6" href="javascript:;"
                data-bs-toggle="modal" data-bs-target="#contactModal">Let's Talk&nbsp; </a>
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
<?php include 'partials/testimonials-blockchain-new.php' ?>
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

<section class="faqs pt-80 pb-80 sm-pt-50 sm-pb-40">
    <div class="container ">
        <div class="row wow fadeInUp">
            <h2 class="fs-20m">Frequently Asked <span class="web-color">Questions</span></h2>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are dApps?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                dApps, or decentralized applications, epitomize the power of blockchain technology. By
                                leveraging decentralized networks, dApps enable users to engage in transparent
                                interactions, eliminating the need for intermediaries. With dApps, individuals can take
                                control of their data and transactions, fostering a new era of sovereignty and
                                empowerment.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is the difference between dApps and standard apps?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                dApps, unlike standard apps, operate on decentralized networks like blockchain, offering
                                utmost transparency, immutability, and enhanced security. Users own their data, and
                                transactions don't rely on a centralized authority.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How much does dApp development cost?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                dApp development costs vary based on complexity, features, platform, and development
                                time. Contact us for a personalized and more accurate estimate tailored to your project
                                requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How do dApps make money?
                            </button>
                        </h3>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                dApps generate revenue through transaction fees, in-app purchases, subscriptions, and
                                tokenization. Smart contracts in dApps automate revenue distribution and
                                incentivization, fostering sustainable business models within the dApp ecosystem.
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