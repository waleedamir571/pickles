<!-- Start Modal Form 60 Sec-->

<section class="mdlrevamp">
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <div class="col-xl-5 leftside hidden-sm">
                        <div class="contact-text">
                            <!-- <img class="col-img hidden-sm hidden-tb" src="assets/images/forms/pop-up.jpg"
                                alt="Dev Pickles Software Development Services"
                                title="Dev PicklesSolution Pop-up Form Image"> -->
                            <h5>Boost Your Business with Up to</h5>
                            <h4><span>30% </span>OFF</h4>
                            <h3>On All the Services</h3>
                        </div>
                    </div>
                    <div class="col-xl-7 rightside">
                        <div class="contact-form-revamp">
                            <h6><span>Fill Out </span>The Form!</h6>
                            <form id="contact-modal" method="POST" action="/backend/action/action">
                                <input type="hidden" name="type" value="modalForm">
                                <input type="hidden" name="cta" class="cta" value="">

                                <div class="form-group">
                                    <label for="lblname" class="form-label">Enter Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Your Name" required="" id="lblname">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lblemail" class="form-label">Enter Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Enter Your Email" required="" id="lblemail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lblphone" class="form-label">Phone Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Enter Your Phone Number" required="" id="lblphone">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lblmsg" class="form-label">Type Your Message</label>
                                    <textarea class="form-control" name="message" rows="1"
                                        placeholder="Enter Your Message" required="" id="lblmsg"></textarea>
                                </div>
                                <div class="form-group pt-2">
                                    <div class="g-recaptcha" data-callback="recaptchaCallback"
                                        data-sitekey="6Le5s8kiAAAAAAybz_6EE86zmybsLtt_tdxe27l-"></div>
                                </div>
                        </div>

                        <button class="btns form-submit-button" type="submit" name="submit" disabled>Send
                            Message</button>
                        </form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-footer-left">
                                    <h5>
                                        Email Us
                                    </h5>
                                    <h6>
                                        <a href="mailto:info@devpickles.com">info@devpickles.com</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-footer-right">
                                    <!-- <a href="#0"><i class="fa fa-twitter icon-twitter"></i></a> -->
                                    <a href="https://www.facebook.com/share/1EvwDDffNb/"><i class="fa fa-facebook icon-fb"></i></a>
                                    <a href="https://www.linkedin.com/company/dev-pickles/"><i class="fa fa-linkedin icon-linkedin"></i></a>
                                    <a href="https://www.instagram.com/devpickles/"><i class="fa fa-instagram icon-insta"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Modal Form 60 Sec-->

<!-- Start Float Form and Chat Actions -->

<div class="floatbutton">
    <div class="btns_wrap">
        <a href="mailto:info@devpickles.com" class="chat_wrap">
            <span class="icoo"><i class="fa fa-comment"></i></span>
            <span>Dev Pickles</span>
        </a>
        <a href="tel:(949) 245-2405" class="call_wrap">
            <span class="icoo"><i class="fa fa-phone"></i></span>
            <span>Dev Pickles</span>
        </a>
        <!-- <a href="https://twitter.com" class="twitter_wrap">
            <span>Dev Pickles</span>
            <span class="icoo"><i class="fa fa-twitter"></i></span>
        </a> -->
    </div>
    <div class="clickbutton">
        <div class="crossplus">GET A QUOTE</div>
    </div>
    <div class="banner-form">
        <h3>Chat With Us to <br>Avail 30% Discount</h3>
        <div class="banform">
            <div class="container">
                <div class="row">
                    <div class="ban-form">
                        <!--<form class="form-get-quote" id="ordernow-form" action="https://agilewebstudios.com/shopify/javascript;" method="post">-->
                        <form method="POST" action="/backend/action/action">
                            <input type="hidden" name="type" value="modalForm">
                            <input type="hidden" name="cta" class="cta" value="">
                            <div class="alert alert-danger error" style="display: none;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="username" name="name" minlength="2" type="text"
                                            placeholder="Enter your name" required />

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="cemail" type="email" name="email" placeholder="Enter email here"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input type="text" name="phone" id="phone-coun"
                                            class="phone-country masking contact phoneNum" placeholder="Phone*"
                                            required>
                                        <span class="bg-danger col-lg-offset-3 contact_error "
                                            style="display: none;">Contact No Incorrect</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <textarea name="message" id="" rows="7"
                                            placeholder="Talk About Your Project"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <div class="g-recaptcha" data-callback="recaptchaCallback"
                                            data-sitekey="6Le5s8kiAAAAAAybz_6EE86zmybsLtt_tdxe27l-"></div>
                                    </div>
                                </div>

                                <input name="page_link" type="hidden" value="#0">

                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input name="submit" id="submit-btn-modal2" type="submit"
                                            class="form-submit-button" disabled />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Float Form and Chat Actions -->