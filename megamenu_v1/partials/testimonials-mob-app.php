<div class="testimonials2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="outer1">
                    <div class="position-relative">
                        <div class="p6-price-first-line text-black">PREMIUM SERVICES AT AFFORDABLE PRICES</div>
                    </div>
                    <h2 class="text-black">Read Our <span class="web-color">Client’s Experience </span>Working With Us
                    </h2>
                    <p>We don’t deliver just projects. We build relationships that are founded on mutual growth and
                        benefits.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="swiper mySwiper testipdmain">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="picture-hover">
                                <div class="card9">
                                    <div class="card-title">
                                        <img class="card-quote" src="assets/images/testimonials/quote-up.png"
                                            alt="Card image cap">
                                    </div>
                                    <p class="lh-lg">
                                        I own a travel agency and I wanted an app where users would receive offers, read
                                        content about travel and tourism, and make bookings. Overall,
                                        <span id="dotstestimob1">...</span><span id="moretestimob1">
                                            I wanted an app that would provide a great user experience to tourists and
                                            travelers.
                                            That is when I came across Dev Pickles and connected with them through a
                                            call. They were more enthusiastic about my app’s success than I was. We
                                            created app
                                            screen designs together, kicked off in the second week and started
                                            development.
                                        </span>
                                    </p>
                                    <a class="smb-testi" onclick="myFunctiontestimob1()" id="myBtntestimob1">Read
                                        more</a>
                                </div>
                                <div class="picture">
                                    <img src="assets/images/testimonials/testi-1.png" alt="client 1 picture"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="name">
                                <h3>Liam Smith</h3>
                                <h6>United State</h6>
                            </div>
                            <div class="ratings p-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="picture-hover">
                                <div class="card9">
                                    <div class="card-title">
                                        <img class="card-quote" src="assets/images/testimonials/quote-up.png"
                                            alt="Card image cap">
                                    </div>
                                    <p class="lh-lg">
                                        I run a skincare brand so I wanted an app where users could order products from
                                        my skincare line. I wanted a speedy and buyer-friendly app.
                                        <span id="dotstestimob2">...</span><span id="moretestimob2">
                                            When I checked their reviews on Clutch, I decided to schedule a discovery
                                            call. Thankfully, they turned out to be wonderful, their service was great,
                                            and I can't wait to collab with them for future projects.
                                        </span>
                                    </p>
                                    <a class="smb-testi" onclick="myFunctiontestimob2()" id="myBtntestimob2">Read
                                        more</a>
                                </div>
                                <div class="picture">
                                    <img src="assets/images/testimonials/testi-2.png" alt="client 1 picture"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="name">
                                <h3>Noah Johnson</h3>
                                <h6>United State</h6>
                            </div>
                            <div class="ratings p-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-hover">
                                <div class="card9">
                                    <div class="card-title">
                                        <img class="card-quote" src="assets/images/testimonials/quote-up.png"
                                            alt="Card image cap">
                                    </div>
                                    <p class="lh-lg">
                                        We hired Dev Pickles for developing a small-scale mobile app for our cakes
                                        business. We are basically a very small bakery in Princeton and
                                        <span id="dotstestimob3">...</span><span id="moretestimob3">
                                            recently started selling customized cakes. We had some inbound leads from
                                            our B2C website, and wanted to scale with an app that would help our users
                                            book and pay online.The design and development experience has been good with
                                            HOI. We can say that because visitors haven’t had any problems in booking so
                                            far.
                                        </span>
                                    </p>
                                    <a class="smb-testi" onclick="myFunctiontestimob3()" id="myBtntestimob3">Read
                                        more</a>
                                </div>
                                <div class="picture">
                                    <img src="assets/images/testimonials/testi-3.png" alt="client 1 picture"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="name">
                                <h3>Oliver Williams</h3>
                                <h6>United State</h6>
                            </div>
                            <div class="ratings p-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    #moretestimob1 {
        display: none;
    }

    #moretestimob2 {
        display: none;
    }

    #moretestimob3 {
        display: none;
    }
</style>

<script>
    function myFunctiontestimob1() {
        var dots = document.getElementById("dotstestimob1");
        var moreText = document.getElementById("moretestimob1");
        var btnText = document.getElementById("myBtntestimob1");

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
    function myFunctiontestimob2() {
        var dots = document.getElementById("dotstestimob2");
        var moreText = document.getElementById("moretestimob2");
        var btnText = document.getElementById("myBtntestimob2");

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
    function myFunctiontestimob3() {
        var dots = document.getElementById("dotstestimob3");
        var moreText = document.getElementById("moretestimob3");
        var btnText = document.getElementById("myBtntestimob3");

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