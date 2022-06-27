
<?php
include "header.php";
?>
<main>
    <section class="site-logo">
        <div class="container">
            <div class="lg wow fadeInUp">
                <img class="w-100 d-block" src="assets/images/logo.png" alt="">
            </div>
            <div class="content" id="whoweare">
                <div class="row">
                    <div class="col-1">
                        <div class="line sticky-top"><img src="assets/images/line1.png" alt=""></div>
                    </div>
                    <div class="col-11">
                        <div class="text">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">We create value for <span>your business</span> by <br> creating value for <span>your customers.</span></p>
                            <p class="wow fadeInUp" data-wow-delay="1s">Our working core is simple: <br>
                                We merge <span>imagination</span> and <span>technology</span> to help brands grow in an age of digital <br> transformation.</p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="slider-content" id="work">
                <p class="veticar">Our focus lies in</p>
                <div class="slider">
                    <div class="item-slider">
                        <div class="line wow fadeInRight" data-wow-delay="0.5s">
                            <img src="assets/images/line2.png" alt="">
                        </div>
                        <h3 class="wow fadeInLeft" data-wow-delay="0.5s">Digital performance</h3>
                        <div class="images">
                            <img class="img1 wow rotateIn" data-wow-delay="0.5s" src="assets/images/bg-img.png" alt="">
                            <img class="img2 wow fadeIn" data-wow-delay="0.5s" src="assets/images/sl1.png" alt="">
                        </div>
                        <p class="wow fadeInRight" data-wow-delay="0.5s">How can your marketing become more data driven and more human-centric? 
                        We believe the answer lies in deeper collaboration, powerful storytelling, analytical rigor, combined with the agile methodology needed to bring it all together.</p>
                    </div>
                    <div class="item-slider">
                        <div class="line">
                            <img src="assets/images/line2.png" alt="">
                        </div>
                        <h3>Social monitoring <br> 
                        and management</h3>
                        <div class="images">
                            <img class="img1" src="assets/images/bg-img.png" alt="">
                            <img class="img2" src="assets/images/sl2.png" alt="">
                        </div>
                        <p>How can your marketing become more data driven and more human-centric? 
                        We believe the answer lies in deeper collaboration, powerful storytelling, analytical rigor, combined with the agile methodology needed to bring it all together.</p>
                    </div>
                    <div class="item-slider">
                        <div class="line">
                            <img src="assets/images/line2.png" alt="">
                        </div>
                        <h3>Digital performance</h3>
                        <div class="images">
                            <img class="img1" src="assets/images/bg-img.png" alt="">
                            <img class="img2" src="assets/images/sl3.png" alt="">
                        </div>
                        <p>How can your marketing become more data driven and more human-centric? 
                        We believe the answer lies in deeper collaboration, powerful storytelling, analytical rigor, combined with the agile methodology needed to bring it all together.</p>
                    </div>
                    <div class="item-slider">
                        <div class="line">
                            <img src="assets/images/line2.png" alt="">
                        </div>
                        <h3>Design & <br> Development</h3>
                        <div class="images">
                            <img class="img1" src="assets/images/bg-img.png" alt="">
                            <img class="img2" src="assets/images/sl4.png" alt="">
                        </div>
                        <p>How can your marketing become more data driven and more human-centric? 
                        We believe the answer lies in deeper collaboration, powerful storytelling, analytical rigor, combined with the agile methodology needed to bring it all together.</p>
                    </div>
                </div>
                <span class="pagingInfo"></span>
            </div>
        </div>
    </section>
    <section class="site-our">
        <div class="bg-cli">
            <span class="bg"></span>
            <span class="borderh"></span>
            <span class="pt"><img src="assets/images/Vector2.png" alt=""></span>
        </div>
        <div class="line line2"><img src="assets/images/line4.png" alt=""></div>
        <div class="container">
            <div class="title-main">
                <h2 class="heading">Our clients</h2>
            </div>
            <div class="content">
                <img src="assets/images/p.png" alt="">
                <p>They enjoy what we delivered to them, and so will you!</p>
            </div>
            <div class="pn">
                <div class="row">
                    <?php for($i=1; $i<15; $i++){ ?>
                    <div class="col-md-3 col-4">
                        <div class="item">
                            <a href="#"><img src="assets/images/dt<?php echo $i ?>.png" alt=""></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="line line1"><img src="assets/images/line3.png" alt=""></div>
    </section>
    <section class="star-project" id="contact">
        <div class="container">
            <div class="title-main">
                <h2 class="heading">Start a Project</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4327268269185!2d106.6779127152167!3d10.778131892320378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2639b32e09%3A0x97169d1fc37df0b6!2sViettel%20Tower!5e0!3m2!1svi!2s!4v1655279460243!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact">
                        <ul>
                            <li>
                                <img src="assets/images/icon1.png" alt="">
                                <span>Aidigital.vn</span>
                            </li>
                            <li>
                                <img src="assets/images/icon2.png" alt="">
                                <span>09 27 37 79 79</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-cli">
            <span class="bg"></span>
            <span class="borderh"></span>
            <span class="pt"><img src="assets/images/Vector.png" alt=""></span>
        </div>
    </section>
</main>

<?php
include "footer.php";
?>