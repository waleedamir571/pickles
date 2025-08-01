<div class="testimonials2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="outer1">
                    <div class="position-relative">
                        <div class="p6-price-first-line text-black">CLIENT TESTIMONIALS</div>
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
                                        I had always wanted to make a game and was looking for game design services for
                                        a while. I then found out about Dev Pickles,
                                        <span id="dotstestigamedev1">...</span><span id="moretestigamedev1">
                                            and immediately connected with
                                            them. To my surprise, their team was super professional and ethical and
                                            added a
                                            fun little twist to my game and made it look 10x better. I am happy to say
                                            it
                                            was a great experience working with them on my dream project.
                                        </span>
                                    </p>
                                    <a class="smb-testi" onclick="myFunctiontestigamedev1()"
                                        id="myBtntestigamedev1">Read
                                        more</a>
                                </div>
                                <div class="picture">
                                    <img src="assets/images/testimonials/testi-1.png" alt="client 1 picture"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="name">
                                <h3>Henry Miller</h3>
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
                                        I worked with Dev Picklesfor game testing and maintenance and found them knowledgeable
                                        and transparent in communications.
                                        <span id="dotstestigamedev2">...</span><span id="moretestigamedev2">
                                            They had given a deadline of 6 months
                                            considering there were 5 major issues with the game’s backend. However, they
                                            fixed the issues in 4 months only and tested and launched during the sixth
                                            month.
                                        </span>
                                    </p>
                                    <a class="smb-testi" onclick="myFunctiontestigamedev2()"
                                        id="myBtntestigamedev2">Read
                                        more</a>
                                </div>
                                <div class="picture">
                                    <img src="assets/images/testimonials/testi-2.png" alt="client 1 picture"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="name">
                                <h3>Lucas Davis</h3>
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
                                        We hired Dev Pickles to create a development and launch strategy for a bowling
                                        game. We interviewed their business analysts
                                        <span id="dotstestigamedev3">...</span><span id="moretestigamedev3">
                                            and hired them because they gave us
                                            decent deadlines for the UI and UX part. We are currently working with them
                                            on deployment and soft launch and everything has gone well so far.
                                        </span>
                                    </p>
                                    <a class="smb-testi" onclick="myFunctiontestigamedev3()"
                                        id="myBtntestigamedev3">Read
                                        more</a>
                                </div>
                                <div class="picture">
                                    <img src="assets/images/testimonials/testi-3.png" alt="client 1 picture"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="name">
                                <h3>Olivia Rodriguez</h3>
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
    #moretestigamedev1 {
        display: none;
    }

    #moretestigamedev2 {
        display: none;
    }

    #moretestigamedev3 {
        display: none;
    }
</style>

<script>
    function myFunctiontestigamedev1() {
        var dots = document.getElementById("dotstestigamedev1");
        var moreText = document.getElementById("moretestigamedev1");
        var btnText = document.getElementById("myBtntestigamedev1");

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

    function myFunctiontestigamedev2() {
        var dots = document.getElementById("dotstestigamedev2");
        var moreText = document.getElementById("moretestigamedev2");
        var btnText = document.getElementById("myBtntestigamedev2");

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

    function myFunctiontestigamedev3() {
        var dots = document.getElementById("dotstestigamedev3");
        var moreText = document.getElementById("moretestigamedev3");
        var btnText = document.getElementById("myBtntestigamedev3");

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