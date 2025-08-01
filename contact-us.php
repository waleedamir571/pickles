<?php include 'partials/header.php' ?>

<script src="https://www.google.com/recaptcha/enterprise.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section class="contact-bg pt-150 poppins">
    <div class="container">
        <div class="banner-content">
            <div class="row">
                <div class="col-md-9 offset-md-3 position-relative wow fadeInUp">
                    <div class="line-contact pl-270 sm-pl-150 tb-pl-150">
                        <h1 class="heading-5">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="fs-55 text-white wow fadeInUp text-center pt-3 fw-600 fs-26m">
            <span class="web-color">Dev</span> Pickles
        </h2>
        <div class="col-lg-6 offset-lg-3 paragraph">
            <p class="text-white lh-14 text-center wow fadeInUp fs-normal pt-2 fs-14">
                Our tech experts are eager to help you meet your business targets. Get in touch today to get started.
            </p>
        </div>
        <div class=" wow fadeInUp text-center md-pt-0 pt-18m sm-pt-30">
            <a class="btn web-btn consultation get-in" href="javascript:;" data-bs-toggle="modal"
                data-bs-target="#contactModal">Book
                Consultation &nbsp;
            </a>
        </div>
    </div>
</section>


<!-- Footer Start -->
<section id="contact-form" class="form footer-form page-spacing">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-6">
                <div class="form-pic-contact">
                    <img src="assets/images/mockup/footer-01.JPG"
                        alt="Dev Pickles Software Development Services" title="Dev PicklesSolution Got an Idea Section Png"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative">
                    <div class="footer-line text-black pl-142 fs-14m sm-pl-115 ">Got an Idea? </div>
                </div>
                <h4 class="fs-40 fs-20m fw-600">Share your <span class="web-color">project details </span>with us.
                </h4>
                <form action="/backend/action/action" method="POST" class="pt-20 sm-pt-0">
                    <input type="hidden" name="type" value="contactForm">
                    <div class="input-group mb-4">
                        <input type="text" name="name" class="form-control rounded-pill"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="FIrst Name" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" name="last_name" class="form-control rounded-pill"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="Last Name">
                    </div>
                    <div class="input-group mb-4">
                        <input type="email" name="email" class="form-control rounded-pill"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="Email" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="number" name="phone" class="form-control rounded-pill"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="Phone Number" required>
                    </div>
                    <div class="input-group mb-4">
                        <textarea type="text" name="message" cols="30" rows="7" class="form-control "
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="Your message" required></textarea>
                    </div>
                    <div class="input-group mb-4">
                        <div class="g-recaptcha" data-callback="recaptchaCallback"
                            data-sitekey="6Le5s8kiAAAAAAybz_6EE86zmybsLtt_tdxe27l-"></div>
                    </div>
                    <div class="wow fadeInUp">
                        <button class="btn form-submit-button rounded-pill" type="submit" name="submit" disabled>Book a
                            Consultation
                            &nbsp;</button>
                    </div>
                    <!-- <div class="text-md-end pt-4 sm-pt-0 wow fadeInUp">
                        <button class="btn form-submit-button rounded-pill" type="submit" name="submit" disabled>Book a
                            Consultation
                            &nbsp;</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    #form {
        display: none !important;
    }
</style>
<script>
    function recaptchaCallback() {
        $('.form-submit-button').removeAttr('disabled');
    };
</script>
<?php include 'partials/footer.php' ?>