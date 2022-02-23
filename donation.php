<?php include('header.php')?>

<div id="donation">
    <!-- Header Section -->
    <div class="header-section home2-header">
   
        <div class="hero-section">
            <div class="container vector-container">
                <img src="assets/images/circle.png" class="circle-vector" alt="circle-vector">
                <img src="assets/images/red-vector.png" class="red-vector" alt="red-vector">
                <img src="assets/images/yellow-vector.png" class="yellow-vector" alt="yellow-vector">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-title">
                            <h1 class="wow fadeInDown home2-heading-color">Give, But give until It hurtache is<br> To
                                forget one's own</h1>
                            <div class="progress-bar-area">
                                <h1><span class="stroke-text number-counter">500</span><span
                                        class="stroke-text">K</span></h1><span
                                    class="donate-title home2-heading-color">Donation overal World</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="70" data-color="#d1312d"><span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-btn">
                                <a href="donation-single.html" class="home2-primary-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner">
                            <img src="assets/images/banner.png" class="wow fadeInRight" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <!-- Home Page Blog Area -->
    <!-- <section class="home2-blog-section padding-top-116">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="home2-blog-left">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Healthy Life Need</h3>
                                    </a>
                                    <p class="home2-p-color">Healthy Life Need demoz selle whalefish zebra lion fish
                                        pelican</p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-saline.png" class="vector-bg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Safe Environment</h3>
                                    </a>
                                    <p class="home2-p-color">Safe environment Need demoz selle whalefish zebra lion fish
                                    </p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-users.png" class="vector-bg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Fresh Water</h3>
                                    </a>
                                    <p class="home2-p-color">Healthy Life Need demoz selle whalefish zebra lion fish
                                        pelican</p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-bottle.png" class="vector-bg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Safe Environment</h3>
                                    </a>
                                    <p class="home2-p-color">Healthy Life Need demoz selle whalefish zebra lion fish
                                        pelican</p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-tshirt.png" class="vector-bg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="home2-blog-video">
                        <img src="assets/images/blog-img.png" alt="">
                        <a href="javascript:if(confirm('https://www.youtube.com/watch?v=owiwCIhc0I0\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.youtube.com/watch?v=owiwCIhc0I0'" class="blog-popup-video">
                            <div class="play-btn">
                                <span class="play-icon"><img src="assets/images/play-circle.png" alt=""></span>
                            </div>
                        </a>
                        <div class="bottom-quote-text">
                            <span class="quote-icon"><i class="fas fa-quote-right"></i></span>
                            <h3 class="home2-heading-color">By giving a little, you will help out a lot</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Donate Section -->
    <section class="donate-section padding-top-120">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-12">
                    <div class="donate-right">
                        <h2 class="margin-bottom-25 home2-heading-color">Cash Donation Plans</h2>
                        <!-- <p class="home2-p-color">Donation Plans</p> -->
                        <div class="countdown-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="countdown">
                                        <h2 class="stroke-text ">DAILY</h2>
                                        <br>  <div  @click="payWithPaystack()" class="home2-primary-btn margin-top-30 donate-btn">Donate Now</div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="countdown">
                                        <h2 class="stroke-text">MONTHLY</h2>
                                        <br>  <div data-toggle="modal" data-target="#showPayment" class="home2-primary-btn donate-btn margin-top-30">Donate Now</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="countdown">
                                        <h2 class="stroke-text">EVERY THREE MONTHS</h2>
                                        <br>  <a href="donation-single.html" class="home2-primary-btn margin-top-30">Donate Now</a>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="countdown">
                                        <h2 class="stroke-text">EVERY SIX MONTHS</h2>
                                        <br>  <a href="donation-single.html" class="home2-primary-btn margin-top-30">Donate Now</a>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="countdown">
                                        <h2 class="stroke-text">EVERY NINE MONTHS</h2>
                                        <br>  <a href="donation-single.html" class="home2-primary-btn margin-top-30">Donate Now</a>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="countdown">
                                        <h2 class="stroke-text">YEARLY</h2>
                                        <br>  <a href="donation-single.html" class="home2-primary-btn margin-top-30">Donate Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PAYMENT DIALOG -->
<!-- Modal -->
<div class="modal fade" id="showPayment" tabindex="-1" role="dialog" aria-labelledby="showPaymentTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showPaymentTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Help Section -->
    <!-- <section class="help-section padding-top-120 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="help-left">
                        <h2 class="home2-heading-color">Help the Many People in Need Donation</h2>
                        <p class="home2-p-color">We help local nonprofits access the funding, tools, training, and
                            support they need to become more.</p>
                        <img src="assets/images/help-left.png" class="wow fadeInUp" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="help-right">
                        <div class="top-img">
                            <img src="assets/images/help-right.png" alt="">
                            <a href="index.htm#"><span class="home2-img-top-btn img-top-btn">Healthy</span></a>
                        </div>
                        <div class="left-content margin-top-60">
                            <img src="assets/images/vector-saline.png" alt="">
                            <div class="help-blog">
                                <h3 class="home2-heading-color">Helping Today. Helping Tommorow</h3>
                                <p class="home2-p-color">BigHearts is the largets global crowdfunding community
                                    connecting nonprofits, donation and companies in nearly every country.</p>
                                <a href="donation-list.html" class="readmore">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Campaign Area -->
    <!-- <section class="campaign-section padding-top-110 padding-bottom-75">
        <div class="container">
            <div class="campaign-title">
                <div class="row">
                    <div class="col-lg-6 col-md-9">
                        <div class="title">
                            <h2 class="home2-heading-color">Our Donation Campaign</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 align-self-center">
                        <div class="readmore-btn-container">
                            <a href="event-list.html" class="home2-primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="campaign-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Health</span></a>
                            <div class="img-container">
                                <a href="event-single.html"><img src="assets/images/campaign-1.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="90" data-color="#1f1f53">
                                        <span>90%</span>
                                    </div>
                                </div>
                                <a href="event-single.html">
                                    <h3 class="home2-heading-color">Help children proverty and world safe environment
                                    </h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Water</span></a>
                            <div class="img-container">
                                <a href="event-single.html"><img src="assets/images/campaign-2.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="70" data-color="#1f1f53">
                                        <span>70%</span>
                                    </div>
                                </div>
                                <a href="event-single.html">
                                    <h3 class="home2-heading-color">Help children water pollution and human health</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Food</span></a>
                            <div class="img-container">
                                <a href="event-single.html"><img src="assets/images/campaign-3.png" alt=""></a>

                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="95" data-color="#1f1f53">
                                        <span>95%</span>
                                    </div>
                                </div>
                                <a href="event-single.html">
                                    <h3 class="home2-heading-color">Children are going hungry around the world</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Education</span></a>
                            <div class="img-container">
                                <a href="event-single.html"><img src="assets/images/campaign-4.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="50" data-color="#1f1f53">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <a href="event-single.html">
                                    <h3 class="home2-heading-color">Help children proverty and world safe environment
                                    </h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Environment</span></a>
                            <div class="img-container">
                                <a href="event-single.html"><img src="assets/images/campaign-5.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="60" data-color="#1f1f53">
                                        <span>60%</span>
                                    </div>
                                </div>
                                <a href="event-single.html">
                                    <h3 class="home2-heading-color">Help Children Water pollution and Human Health</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Cloth</span></a>
                            <div class="img-container">
                                <a href="event-single.html"><img src="assets/images/campaign-6.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="40" data-color="#1f1f53">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <a href="event-single.html">
                                    <h3 class="home2-heading-color">Children are going hungry around the world</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Donate Tab Section -->
    <!-- <section class="donate-tab-section home2-dn-tab padding-top-110 padding-bottom-120">
        <div class="container vector-container">
            <img src="assets/images/yellow-vector.png" class="vector-bg yellow-vector" alt="">
            <img src="assets/images/red-vector.png" class="vector-bg red-vector" alt="">
            <img src="assets/images/dot-vector.png" class="vector-bg dot-vector" alt="">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title">
                        <h2 class="home2-heading-color">Sympatho Donation Goal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-tab wow fadeInUp">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="index.htm#pills-1" role="tab"
                                    aria-controls="pills-1" aria-selected="true">1995-1998</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="index.htm#pills-2" role="tab"
                                    aria-controls="pills-2" aria-selected="false">1999-2002</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="index.htm#pills-3" role="tab"
                                    aria-controls="pills-3" aria-selected="false">2003-2006</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="index.htm#pills-4" role="tab"
                                    aria-controls="pills-4" aria-selected="false">2007-2010</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="index.htm#pills-5" role="tab"
                                    aria-controls="pills-5" aria-selected="false">2011-2014</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="index.htm#pills-6" role="tab"
                                    aria-controls="pills-6" aria-selected="false">2015-2018</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel">
                                <h2 class="number-counter">50,000</h2><span>K</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="80" data-color="#d1312d">
                                        <span>80%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html" class="home2-primary-btn">Donate</a>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel">
                                <h2 class="number-counter">55,000</h2><span>K</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="85" data-color="#d1312d">
                                        <span>85%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html" class="home2-primary-btn">Donate</a>
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel">
                                <h2 class="number-counter">56,000</h2><span>K</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="88" data-color="#d1312d">
                                        <span>88%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html" class="home2-primary-btn">Donate</a>
                            </div>
                            <div class="tab-pane fade" id="pills-4" role="tabpanel">
                                <h2 class="number-counter">80,000</h2><span>K</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="90" data-color="#d1312d">
                                        <span>90%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html" class="home2-primary-btn">Donate</a>
                            </div>
                            <div class="tab-pane fade" id="pills-5" role="tabpanel">
                                <h2 class="number-counter">50,000</h2><span>K</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="70" data-color="#d1312d">
                                        <span>70%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html" class="home2-primary-btn">Donate</a>
                            </div>
                            <div class="tab-pane fade" id="pills-6" role="tabpanel">
                                <h2 class="number-counter">85,000</h2><span>K</span>
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="92" data-color="#d1312d">
                                        <span>92%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html" class="home2-primary-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="charity-form-area home2-ch-form padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-left">
                        <img src="assets/images/charity.png" alt="">
                        <div class="left-content">
                            <img src="assets/images/form-vector.png" class="margin-bottom-20" alt="">
                            <h2 class="margin-bottom-20 home2-heading-color">Join the Sympatho Team</h2>
                            <a href="contact.html" class="home2-primary-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-right">
                        <h2 class="home2-heading-color margin-bottom-30">Donate to Charity Projects Around The World
                        </h2>
                        <form action="index.htm#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <input type="text" name="s" placeholder="First Name*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <input type="text" name="s" placeholder="Last Name*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <input type="email" name="s" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <input type="tel" name="s" placeholder="Phone Number*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <span class="currency">USD</span>
                                        <input type="text" name="s" placeholder="Amount*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <select name="s">
                                            <option value="">Type Of Donation*</option>
                                            <option value="">Type One</option>
                                            <option value="">Type Two</option>
                                            <option value="">Type three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-textarea">
                                        <textarea name="s" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="s" class="home2-primary-btn" value="Donate">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Testimonial Section -->
    <!-- <section class="testimonial-section padding-top-60 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="testimonial-left">
                        <h2 class="home2-heading-color">What people say about our company</h2>
                        <p class="home2-p-color">We help local nonprofits access the funding, tools, training, and
                            support they need to become more</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="client-slider">
                        <div class="single-slide">
                            <div class="client-img">
                                <img src="assets/images/client-img.png" alt="">
                            </div>
                            <div class="client-content">
                                <h5 class="home2-heading-color">Tanmoy Khan || UI/UX Designer</h5>
                                <h3 class="home2-heading-color">Help Children Water pollution and Human Health</h3>
                                <p class="home2-p-color">By organizing an event in aid of Sympatho - whether it be big
                                    or small - you will be giving children in Bangladesh the opportunity to break out of
                                    the poverty. </p>
                                <span class="donate-amount">Doante Amount : 50000K USD</span>
                                <span class="slider-btn">Environment</span>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="client-img">
                                <img src="assets/images/client-img.png" alt="">
                            </div>
                            <div class="client-content">
                                <h5 class="home2-heading-color">Tanmoy Khan || UI/UX Designer</h5>
                                <h3 class="home2-heading-color">Help Children Water pollution and Human Health</h3>
                                <p class="home2-p-color">By organizing an event in aid of Sympatho - whether it be big
                                    or small - you will be giving children in Bangladesh the opportunity to break out of
                                    the poverty. </p>
                                <span class="donate-amount">Doante Amount : 50000K USD</span>
                                <span class="slider-btn">Environment</span>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="client-img">
                                <img src="assets/images/client-img.png" alt="">
                            </div>
                            <div class="client-content">
                                <h5 class="home2-heading-color">Tanmoy Khan || UI/UX Designer</h5>
                                <h3 class="home2-heading-color">Help Children Water pollution and Human Health</h3>
                                <p class="home2-p-color">By organizing an event in aid of Sympatho - whether it be big
                                    or small - you will be giving children in Bangladesh the opportunity to break out of
                                    the poverty. </p>
                                <span class="donate-amount">Doante Amount : 50000K USD</span>
                                <span class="slider-btn">Environment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Education Section -->
    <!-- <section class="education-section padding-top-100">
        <div class="container vector-container">
            <img src="assets/images/yellow-vector.png" class="yellow-vector" alt="">
            <img src="assets/images/dot-vector.png" class="dot-vector" alt="">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="left-img">
                        <img src="assets/images/education.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="education-slider">
                        <div class="single-slide">
                            <span>Education</span>
                            <h2 class="home2-heading-color">Donate Food for the Poor People & Children</h2>
                            <p class="home2-p-color">We help local nonprofits access the funding, tools, training, and
                                support they need to become more.</p>
                            <div class="animated-progress-bar">
                                <div class="animated-progress" data-percent="70" data-color="#d1312d"><span>70%</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <span>Education</span>
                            <h2 class="home2-heading-color">Donate Food for the Poor People & Children</h2>
                            <p class="home2-p-color">We help local nonprofits access the funding, tools, training, and
                                support they need to become more.</p>
                            <div class="animated-progress-bar">
                                <div class="animated-progress" data-percent="70" data-color="#d1312d"><span>70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Campaign Blog -->
    <!-- <section class="campaign-section home2-cp-2 padding-top-110">
        <div class="container">
            <div class="campaign-title">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2 class="home2-heading-color">Donation Campaigns Blog</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="readmore-btn-container">
                            <a href="donation-list.html" class="donate-btn home2-primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="campaign-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Health</span></a>
                            <div class="img-container">
                                <a href="donation-single.html"><img src="assets/images/blog1.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="90" data-color="#1f1f53">
                                        <span>90%</span>
                                    </div>
                                </div>
                                <a href="donation-single/index.htm">
                                    <h3 class="home2-heading-color">Help children proverty and world safe environment
                                    </h3>
                                </a>
                                <div class="campaign-meta">
                                    <a href="donation-single.html" class="readmore-btn">Read more</a>
                                    <a href="index.htm#"><span>Date: 02Dec2020</span></a>
                                    <a href="index.htm#"><span>By: Tonmoy</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Water</span></a>
                            <div class="img-container">
                                <a href="donation-single.html"><img src="assets/images/campaign-2.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="70" data-color="#1f1f53">
                                        <span>70%</span>
                                    </div>
                                </div>
                                <a href="donation-single.html">
                                    <h3 class="home2-heading-color">Help children water pollution and human health</h3>
                                </a>
                                <div class="campaign-meta">
                                    <a href="donation-single.html" class="readmore-btn">Read more</a>
                                    <a href="index.htm#"><span>Date: 02Dec2020</span></a>
                                    <a href="index.htm#"><span>By: Tonmoy</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="index.htm#"><span class="img-top-btn home2-img-top-btn">Food</span></a>
                            <div class="img-container">
                                <a href="donation-single/index.htm"><img src="assets/images/campaign-3.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="95" data-color="#1f1f53">
                                        <span>95%</span>
                                    </div>
                                </div>
                                <a href="donation-single/index.htm">
                                    <h3 class="home2-heading-color">Children are going hungry around the world</h3>
                                </a>
                                <div class="campaign-meta">
                                    <a href="donation-single/index.htm" class="readmore-btn">Read more</a>
                                    <a href="index.htm#"><span>Date: 02Dec2020</span></a>
                                    <a href="index.htm#"><span>By: Tonmoy</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Donar Section -->
    <!-- <div class="donar-area padding-top-80 padding-bottom-120">
        <div class="container">
            <div class="donar-slider">
                <div class="single-donar">
                    <img src="assets/images/gifts.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/love.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/charity-logo.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/foram.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/hope.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/gifts.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/love.png" alt="">
                </div>
                <div class="single-donar">
                    <img src="assets/images/charity-logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer Section -->
    </div>

    <?php include('footer.php')?>
