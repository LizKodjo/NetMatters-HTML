<?php
include "inc\dbconnect.php";

//$db = connect();

$title = "Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters";
include('inc/header.php'); ?>


<main>

    <div class="banner">

        <div class="bannerSlideshow">

            <!-- Banner pictures and labels -->
            <div class="main-pic">

                <!-- <div class="testing"> -->

                <!-- Image container -->
                <div class="banner-image">
                    <img class="headerpic" src="img/asset3.png" alt="Netmatters Office">
                    <!-- </div> -->
                    <!-- text container -->
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left">
                                <strong>The East of England's Leading Technology
                                    Company</strong>
                                <div class="bottom-left">Performance-driven digital and technology
                                    services<br>
                                    with complete transparency.
                                </div>
                                <button class="main-button btn--web">why choose us? <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bespoke Software -->
                <div class="banner-image">
                    <img class="headerpic headerpic1" src="img/asset4.jpeg" alt="Colleague on phone with laptop">
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left compactHeading"><strong>Bespoke Software</strong><br>
                                <div class="bottom-left">Delivering expert bespoke software<br>
                                    solutions across a range of industries.</div>
                                <button class="main-button btn--bespoke">Find out more <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IT Support -->

                <div class="banner-image">
                    <img class="headerpic" src="img/asset5.png" alt="Technician fixing computer">
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left compactHeading"><strong>IT Support</strong><br>
                                <div class="bottom-left">Fast and cost-effective IT Support<br>
                                    services for your business
                                </div>
                                <button class="main-button btn--it-support">Find out more <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing -->

                <div class="banner-image">
                    <img class="headerpic" src="img/asset6.png" alt="Colleagues working in the office">
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left compactHeading"><strong>Digital Marketing</strong><br>
                                <div class="bottom-left">Generating your new business<br> through
                                    result-driven marketing activities
                                </div>
                                <button class="main-button btn--digital">Find out more <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Telecoms Services -->

                <div class="banner-image">
                    <img class="headerpic" src="img/asset7.png" alt="Telephone">
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left compactHeading"><strong>Telecoms Services</strong><br>
                                <div class="bottom-left">A new approach to connectivity, see <br>
                                    how we can help your business.
                                </div>
                                <button class="main-button btn--telecoms">Find out more <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web Design -->

                <div class="banner-image">
                    <img class="headerpic" src="img/asset1.jpeg" alt="Colleague working">
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left compactHeading"><strong>Web Design</strong><br>
                                <div class="bottom-left">For businesses looking to make a strong<br>
                                    and effective first impression.
                                </div>
                                <button class="main-button btn--web">Find out more <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cyber Security -->
                <div class="banner-image">
                    <img class="headerpic" src="img/asset2.png" alt="Padlock icon">
                    <div class="gradient">
                        <div class="container imgText">
                            <div class="top-left compactHeading"><strong>Cyber Security</strong><br>
                                <div class="bottom-left">
                                    Keeping businesses and their customers<br>
                                    sensitive information protected.
                                </div>
                                <button class="main-button btn--cyber">Find out more <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>


    <!-- Our Services -->
    <div class="container servicegrid">
        <div class="serviceSections">
            <div class="servicebreakdown">

                <div class="row">
                    <div class="col-md-12 clearfix serveheadings">
                        <!-- <div class="topHeadings"> -->
                        <h2 class="h1 float-left-sm serviceheading"><strong>Our Services</strong></h2>
                        <h3 class="float-right-sm hidden-xs servicesubheading"><a href="#">View Our Work <i class="fa-solid fa-arrow-right"></i></a></h3>
                        <!-- </div> -->
                    </div>

                    <!-- <div class="container service-blocks"> -->
                    <!-- <div class="row upper-row"> -->
                    <!-- <div class="container"> -->
                    <div class="col-md-4 bespoke-b">
                        <div class="service bespoke-block">
                            <!-- <span class="material-symbols-outlined bespoke-icon">monitor</span> -->
                            <span class="icon-apps bespoke-icon"></span>
                            <p class="service-topic">Bespoke Software</p>
                            <p class="service-info">Bespoke software solutions for all your
                                business
                                needs
                                including
                                integrations
                                and reporting.</p> <button class="btn servebespoke">Read
                                more</button>
                        </div>
                    </div>
                    <div class="col-md-4 it-b">
                        <div class="service it-block">
                            <!-- <span class="material-symbols-outlined it-icon">monitor</span> -->
                            <span class="icon-display it-icon"></span>
                            <p class="service-topic">IT Support</p>
                            <p class="service-info">Fully managed IT support and consultancy
                                packages
                                tailored
                                to
                                meet
                                your
                                exact
                                business needs.</p><button class="btn serveit">Read
                                more</button>
                        </div>
                    </div>
                    <div class="col-md-4 digital-b">
                        <div class="service digital-block"><span class="material-symbols-outlined digital-icon">signal_cellular_alt</span>
                            <p class="service-topic">Digital Marketing</p>
                            <p class="service-info">Driven brand awareness & ROI through
                                creative
                                digital
                                marketing
                                campaigns.
                            </p>
                            <br>
                            <button class="btn servedigital">Read more</button>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="row lower-row"> -->
                    <!-- <div class="container lower-first"> -->
                    <div class="col-lg-3 col-md-6 col-sm-6 telecoms-b">
                        <div class="service telecoms-block">
                            <!-- <span class="material-symbols-outlined tele-icon">phone_in_talk</span> -->
                            <span class="icon-phone_in_talk1 tele-icon"></span>
                            <p class="service-topic">Telecoms Services</p>
                            <p class="service-info">Business telephony solutions including
                                mobile &
                                connectivity
                                solutions.
                            </p>
                            <button class="btn servetelecoms">Read more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 web-b">
                        <div class="service web-block">
                            <!-- <i class="fa-solid fa-code web-icon"></i> -->
                            <span class="icon-code1 web-icon"></span>
                            <p class="service-topic">Web Design</p>
                            <p class="service-info">User-centric design for businesses looking
                                to make a
                                lasting
                                impression.
                            </p>
                            <button class="btn serveweb">Read more</button>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="container lower-second"> -->
                    <div class="col-lg-3 col-md-6 col-sm-6 cyber-b">
                        <div class="service cyber-block"><span class="material-symbols-outlined cyber-icon">security</span>
                            <p class="service-topic">Cyber Security</p>
                            <p class="service-info">Prevention, testing, consultancy & breach
                                management
                                services.
                            </p>
                            <button class="btn servecyber">Read more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 dev-b">
                        <div class="service dev-block">
                            <span class="material-symbols-outlined "></span>
                            <!-- <span><i class="fa-solid fa-graduation-cap fa-flip-horizontal dev-icon"></i></span> -->
                            <span class="icon-school dev-icon"></span>
                            <p class="service-topic">Developer Training</p>
                            <p class="service-info">Web design & software training courses
                                designed to
                                secure a
                                job
                                in
                                tech.
                            </p>
                            <button class="btn servedev">Read more</button>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                </div>

                <h2 class="service-subheading2"><a href="#">View our Work <i class="fa-solid fa-arrow-right"></i></a></h2>
            </div>
        </div>
    </div>
    <!-- Partners -->
    <div class="partners">
        <img src="img/asset9.jpeg" alt="Investing in Future Growth Winner Awards Barclays">
        <img src="img/asset11.jpeg" alt="Norfolk Carbon Chapter">
        <img src="img/asset13.jpeg" alt="Prompt Payment Code">
        <img src="img/asset15.jpeg" alt="Princess Royal Training Award 2020">
        <img src="img/asset17.jpeg" alt="Future 50 Member">
        <img src="img/asset19.jpeg" alt="QMS ISO 9001 : 2015 Registered">
        <img src="img/asset21.jpeg" alt="IS0 27001 : 2013 Registered">
        <img src="img/asset23.jpeg" alt="Skills of Tomorrow Winner, Barclays">
        <img src="img/asset25.jpeg" alt="Google Partner">
        <img src="img/asset27.png" alt="We are a Living Wage Employer">
        <img src="img/asset29.png" alt="Norfolk ProHelp">

    </div>
    <!-- Reviews -->
    <div class="reviews">
        <div class="container">
            <div class="intro-review">
                <div class="welcomenet">
                    <div class="col-md-6">
                        <h2 class="welcome">Welcome to Netmatters</h2>
                        <p><strong>Netmatters is a leading Bespoke Software, IT Support, and Digital
                                Marketing
                                company
                                based
                                in
                                the
                                East of
                                England with offices in London, Cambridge, Wymondham, and Great
                                Yarmouth.</strong>
                        </p>
                        <p>We aren't tied into contracts with third-party providers, so you know that our
                            recommendations
                            for
                            your
                            business are based purely with one benefit in mind: to help improve your
                            business
                            with
                            the
                            most
                            appropriate solutions.</p>
                        <p>We pride ourselves on being an ethical business and have a unique business
                            offering
                            and
                            cost
                            model
                            that
                            ensures you get the most from our relationship in an upfront manner.</p>
                        <div class="netButtons">
                            <button class="btn choose-us">Why Choose us? <i class="fa-solid fa-arrow-right"></i></button>
                            <button class="btn culture">Our Culture <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="starclient">
                    <div class="col-md-6">
                        <h2 class="clients-think">What Our Clients Think</h2>
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                        <div class="review1">
                            <p class="ash-review">Netmatters stood out from the start. Great guys and very
                                easy
                                to
                                work
                                with.
                                Both
                                the build and
                                digital
                                marketing teams are clearly skilled -
                                they know their stuff! They delivered a website to our (high!) expectations
                                and
                                went
                                over
                                and
                                above
                                to
                                ensure we were satisfied clients - and we are!</p>
                            <p class="reviewer">Eleanor Bishop, Head of Marketing - <span class="ashllp">Ashcroft
                                    Partnership
                                    LLP</span></p>
                            <div>
                                <button class="btn googlebtn">Google Reviews <i class="fa-solid fa-arrow-right"></i></button>
                                <button class="btn trustbtn">Trustpilot Reviews <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest news -->
    <div class="latestnews">
        <div class="latest-sections">
            <div class="container">
                <div class="lateheadings">
                    <div>
                        <h3 class="newsheading">Latest News</h3>
                    </div>
                    <div>
                        <a href="#" class="viewheading2">View All <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="newsarticles">
                <div class="container">
                    <div class="vacancy-list">
                        <div class="row">
                            <?php include("inc/newsarticles.php"); ?>
                        </div>
                    </div>                    
                </div>
            </div>  
          
        </div>


        <h2 class="viewheading">View All <i class="fa-solid fa-arrow-right"></i></h2>
    </div>
    <!-- Clients -->
    <div class="clients">
        <div class="clients-img">

            <div class="tooltipimg">
                <img src="img/asset35.png" alt="Ashcroft logo">
                <div class="imgtext">
                    <h3>Ashcroft Partnership LLP</h3><br>
                    Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP
                    in 2020 and are one of the top chartered accountancy firms in Cambridge, advising
                    entrepreneus and families." <br>
                    <button class="btn btn--web">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset36.png" alt="One Traveller logo">
                <div class="imgtext">
                    <h3>One Traveller</h3>
                    One Traveller, founded in 2007, is a leading provider of solo holidays for over 50s."
                    <br>
                    <button class="btn btn--web">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset37.jpeg" alt="Searles Leisure Resort Hunstanton">
                <span class="imgtext">
                    <h3>Searles Leisure Resort</h3><br>
                    Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning
                    UK holiday resort for families. <br>
                    <button class="btn btn--digital">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </span>
            </div>

            <div class="tooltipimg">
                <img src="img/asset38.png" alt="Busseys">
                <div class="imgtext">
                    <h3>Busseys</h3>
                    One of the UK's leading Ford dealerships.
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset39.png" alt="Crane Garden Buildings">
                <div class="imgtext">
                    <h3>Crane Garden Buildings</h3>
                    Leading manufacturer and supplier of high-end garden rooms,
                    summerhouses, workshops and sheds in the UK.
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset40.png" alt="Black Swan Care Group">
                <div class="imgtext">
                    <h3>Black Swan Care Group</h3>
                    Black Swan Care Group own and manage
                    21 high-quality care and residential homes with
                    a focus on putting the needs of their residents first"
                    <button class="btn btn--bespoke">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset41.png" alt="Xupes logo">
                <div class="imgtext">
                    <h3>Xupes</h3>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset42.png" alt="Beat logo">
                <div class="imgtext">
                    <h3>BEAT</h3>
                    The UK's eating disorder charity founded in 1989.
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset43.png" alt="Survey Solutions logo">
                <div class="imgtext">
                    <h3>Survey Solutions</h3>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset44.png" alt="GirlGuiding Anglia logo">
                <div class="imgtext">
                    <h3>Girl Guiding Anglia</h3>
                    Girl Guiding Anglia is part of Girguiding, the UK's leading charity for
                    girls and young women in the UK. <br>
                    <button class="btn btn--it-support">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset45.png" alt="Sweetzy logo">
                <div class="imgtext">
                    <h3>Sweetzy</h3>
                    Sweetzy are an online sweets retailer, based in Wymondham. <br>
                    <button class="btn btn--digital">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset46.png" alt="Howes Percival">
                <div class="imgtext">
                    <h3>Howes Percival</h3>
                </div>
            </div>

            <div class="tooltipimg">
                <img src="img/asset47.png" alt="Girls Day School Trust logo">
                <div class="imgtext">
                    <h3>GDST</h3>
                    The <strong>Girls' Day School Trust (GDST)</strong> is the UK's leading
                    family of 25 independent girls' schools. <br>
                    <button class="btn btn--digital">View our case study <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter form -->
    <!-- <div class="newsletter"> -->
    <!-- <div class="container news-section">
                        <form class="newsform" method="post">
                            <h2>Email Newsletter Sign-Up</h2>
                            <div class="tablerows">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="yourname">Your name <em style="color:red">*</em></label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="yourname" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="email">Your email <em style="color:red">*</em></label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="email" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </form> -->

    <!-- <div class="marketinfo"> -->
    <!-- <input id="privacy" type="checkbox" class="private-check"> -->
    <!-- <label class="privacy-label" for="privacy">Please tick this box if you wish to receive marketing
                        information
                        from us.
                        Please see our <a class="privacy" href="#">Privacy Policy</a> for more information on how we
                        keep
                        your
                        data safe.</label> -->
    <!-- </div> -->
    <!-- <label class="container creatingbox">Please tick this box if you wish to receive marketing
                            information
                            from us.
                            Please see our <a class="privacy" href="#">Privacy Policy</a> for more information on how we
                            keep
                            your
                            data safe.
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> -->
    <!-- <button class="sub-btn">Subscribe</button> -->
    <!-- </div> -->
    <!-- </div> -->
</main>

<?php include('inc/footer.php'); ?>

