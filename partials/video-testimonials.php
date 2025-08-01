<section class="page-spacing">
    <div class="blue-wraper">
        <div class="container">
            <div class="row">
                <div class="slider-top">
                    <h2>
                        Over <span class="">10,000 </span>Satisfied customers trust
                    </h2>
                    <p><img class="mobile-hide" src="assets/images/slider/pseudo.png">&nbsp;&nbsp;What do Real customer
                        have to say
                        about us&nbsp;&nbsp;<img class="mobile-hide" src="assets/images/slider/pseudo.png">
                    </p>
                </div>
                <div class="swiper mySwiper videotestimain">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card2">
                                <!-- <img class="card-img-top" src="assets/images/slider/slider-1.png"
                                        alt="Card image cap"> -->

                                <iframe id="youtube-video" width="500" height="500"
                                    src="https://www.youtube.com/embed/-XtZo2WhHlQ?mute=1" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>

                                <div class="card-body2">
                                    <h5 class="card-title">Commitment</h5>
                                    <p class="card-text">
                                        I had just started a skincare brand and I was looking for someone to design
                                        a feminine boutique-like logo for me. After a quick Google search, I hired
                                        Dev Pickles for the job. I would highly recommend them, if you want to get
                                        a logo designed, you should go to Dev Pickles.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card2">
                                <iframe id="youtube-video" width="500" height="500"
                                    src="https://www.youtube.com/embed/J6VfCyDZSJw?mute=1" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <div class="card-body2">
                                    <h5 class="card-title">Save more Time</h5>
                                    <p class="card-text">
                                        I had just started a skincare brand and I was looking for someone to design
                                        a feminine boutique-like logo for me. After a quick Google search, I hired
                                        Dev Pickles for the job. I would highly recommend them, if you want to get
                                        a logo designed, you should go to Dev Pickles.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card2">
                                <iframe id="youtube-video" width="500" height="500"
                                    src="https://www.youtube.com/embed/yFhLP147Mbg?mute=1" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <div class="card-body2">
                                    <h5 class="card-title">One stop shop</h5>
                                    <p class="card-text">
                                        I had just started a skincare brand and I was looking for someone to design
                                        a feminine boutique-like logo for me. After a quick Google search, I hired
                                        Dev Pickles for the job. I would highly recommend them, if you want to get
                                        a logo designed, you should go to Dev Pickles.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card2">
                                <iframe id="youtube-video" width="500" height="500"
                                    src="https://www.youtube.com/embed/p18g1eL-3Mo?mute=1" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <div class="card-body2">
                                    <h5 class="card-title">Commitment</h5>
                                    <p class="card-text">
                                        I had just started a skincare brand and I was looking for someone to design
                                        a feminine boutique-like logo for me. After a quick Google search, I hired
                                        Dev Pickles for the job. I would highly recommend them, if you want to get
                                        a logo designed, you should go to Dev Pickles.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card2">
                                <iframe id="youtube-video" width="500" height="500"
                                    src="https://www.youtube.com/embed/qe6rgnHQbEI?mute=1" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <div class="card-body2">
                                    <h5 class="card-title">Save more Time</h5>
                                    <p class="card-text">
                                        I had just started a skincare brand and I was looking for someone to design
                                        a feminine boutique-like logo for me. After a quick Google search, I hired
                                        Dev Pickles for the job. I would highly recommend them, if you want to get
                                        a logo designed, you should go to Dev Pickles.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the YouTube iframe element
        const youtubeVideo = document.getElementById('youtube-video');

        // Function to play the video when the seek bar is clicked
        function playVideoOnSeekBarClick() {
            // If the video is currently paused, play it
            if (youtubeVideo.paused) {
                youtubeVideo.play();
            }
        }

        // Attach the playVideoOnSeekBarClick function to the seek bar's click event
        youtubeVideo.addEventListener('click', playVideoOnSeekBarClick);
    });

</script>