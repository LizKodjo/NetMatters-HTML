<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title"; ?></title>
    <link rel="preload" href="fonts/icomoon.ttf" as="font" type="font/tff" crossorigin>
    <!-- <link rel="stylesheet" href="https://i.icomoon.io/public/temp/3d408e3f39/UntitledProject/style.css"> -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f8bda8a3df.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Consent Policy -->

    <div class="cookieSettings">
        <div class="cookieSections">
            <!-- <div class="container mt-3"> -->
            <button type="button" class="btn-primary btn--bespoke cookiebtn" data-bs-toggle="modal"
                data-bs-target="#myModal">Manage Consent</button>
            <!-- </div> -->

            <!-- Consent Modal -->

            <div id="myModal" class="modal">
                <div id="consentPolicy" class="modal-dialog modal-dialog-centered">
                    <div class="modal-content cookie-popup">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Cookies Policy</h4>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>
                                Our website uses cookies. This helps us provide you with a good
                                experience on our website. To see what cookies we use and what they do,
                                and to opt-in on non-essential cookies click "change settings". For
                                a detailed explanation, click on <a class="privacy" href="#">"Privacy Policy"</a>
                                otherwise
                                click "Accept
                                Cookies" to enter.
                            </p>

                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-6 spacer-xs">
                                    <button class="btn btn--consent-change" data-bs-dismiss="modal">Change
                                        Settings</button>
                                </div>
                                <div class="col-sm-/6">
                                    <button id="acceptcookie" type="button" class="btn btn--web"
                                        data-bs-dismiss="modal">Accept cookies</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebars -->
    <?php include "sidebars.php"; ?>

    <!-- Main Body -->

    <div id="outermain" class="container outermain outermain-sm outermain-lg">

        <div id="innerSection" class="innerSection">

            <!-- Top header and subnav -->
            <header>
                <!-- Main header container -->
                <div id="main" class="inner">

                    <!-- Main menu -->

                    <div id="main-topnav" class="container main-topnav">

                        <!-- Tablet -->
                        <div class="container tabMenu">
                            <div class="row top-help">
                                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
                                    <div class="container-headerLogo">
                                        <a href="index.php"><img class="logo" src="img/asset0.png"
                                                alt="Netmatters Dark logo"></a>
                                    </div>
                                </div>
                                <!-- <div class="container headerSearch"> -->

                                <div class="col-xs-3 col-sm-6 col-md-7 col-lg-8">
                                    <div class="searchMenu">
                                        <a href="#" class="btn topcontactbtn itbtn"><i
                                                class="fa-solid fa-computer-mouse"></i>
                                            Support
                                        </a>
                                        <a href="contact-us.php" class="topcontactbtn contactbtn"><i
                                                class="fa-regular fa-paper-plane contactplane"></i>
                                            Contact</a>
                                        <span class="material-symbols-outlined smallsearchphone">phone_in_talk</span>
                                        <div class="hidden-xs searchInput pull-left">
                                            <form class="searchbar">
                                                <label for="search-tablet" class="hidden"></label>
                                                <input type="text" placeholder="Search..." name="q" id="search-tablet1">
                                                <button type="submit"><i class="fa fa-search searchbtn"></i></button>
                                            </form>
                                        </div>

                                        <!-- Burger menu -->
                                        <div class="btn hamburger">
                                            <div class="hamburger-container">
                                                <div class="hamburger-menu">
                                                    <div class="ham-bar bar-top"></div>
                                                    <div class="ham-bar bar-mid"></div>
                                                    <div class="ham-bar bar-bottom"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn hamburger-lg">
                                            <div class="hamburger-container">
                                                <div class="hamburger-menu hamburger-menu-lg">
                                                    <div class="ham-bar bar-top"></div>
                                                    <div class="ham-bar bar-mid"></div>
                                                    <div class="ham-bar bar-bottom"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Small header -->
                        <div id="smallnav1" class="smallnav">
                            <div class="container">
                                <div class="row smallnavtop">
                                    <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
                                        <div class="logo-container">
                                            <a href="index.php"><img class="logo" src="img/asset0.png"
                                                    alt="Netmatters Dark logo"></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 hidden-sm hidden-md hidden-lg mobile-container">
                                        <!-- <span class="material-symbols-outlined smallsearchphone">phone_in_talk</span> -->
                                        <!-- <span><i class="fa-solid fa-phone-volume smallsearchphone"></i></span> -->
                                        <span class="icon-phone_in_talk smallsearchphone"></span>
                                        <!-- <span class="smallsearchphone"><img src="img/629.svg" alt="phone"></span> -->
                                    </div>
                                    <!-- Burger menu -->
                                    <div class="col-xs-3 col-sm-6 col-md-7 col-lg-8 hamburger-container">
                                        <div class="burger-container">
                                            <div class="burger-menu">
                                                <div class="ham-bar bar-top"></div>
                                                <div class="ham-bar bar-mid"></div>
                                                <div class="ham-bar bar-bottom"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="searchform">
                                    <form class="searchbar">
                                        <label for="search-input">Search...</label>
                                        <input class="search-input" type="text" placeholder="Search..." name="q"
                                            id="search-input1">
                                        <button type="submit"><i class="fa fa-search searchbtn"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Top nav -->
                        <div class="topnav" id="myTopnav1">
                            <div class="container mainmenu">
                                <!-- <a href="#" class="icon"><i class="fa fa-bars"></i></a> -->
                                <!-- Bespoke Software -->
                                <!-- <div class="container"> -->
                                <div class="container menu-breakdown">
                                    <div class="bespoke">
                                        <button class="bespokebtn">
                                            <!-- <span><i class="fa-solid fa-laptop bespokepic"></i></span><br> -->
                                            <span class="icon-apps bespokepic"></span><br>
                                            <small>Bespoke</small><br>Software</button>
                                        <div class="bespoke-content">
                                            <div class="dropdown-bespoke">
                                                <div class="container dropdown-heading">
                                                    <a class="content-heading" href="#">Our Bespoke Software
                                                        Services</a>
                                                </div>
                                                <div class="container">
                                                    <div class="firstrow">
                                                        <div class="firstcolumn">
                                                            <a href="#" class="topnav-sublink">
                                                                <span class="icon-cogs1"></span><span
                                                                    class="link-text">Bespoke CRM</span></a>
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-mobile"></i><span
                                                                    class="link-text">Mobile
                                                                    App
                                                                    Development</span></a>
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-download"></i><span
                                                                    class="link-text">
                                                                    Operational
                                                                    Systems</span></a>
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-cloud"></i><span
                                                                    class="link-text">Intranet
                                                                    Development</span></a>
                                                        </div>
                                                        <div class="firstcolumn">
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-briefcase"></i><span
                                                                    class="link-text">
                                                                    Business
                                                                    Automation</span></a>
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-folder-open"></i><span
                                                                    class="link-text">
                                                                    Bespoke
                                                                    Databases</span></a>
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-users"></i><span
                                                                    class="link-text">Business
                                                                    Central
                                                                    Implementation</span></a>
                                                            <a href="#" class="topnav-sublink"><i
                                                                    class="fa-solid fa-cloud-arrow-down"></i><span
                                                                    class="link-text">
                                                                    Customer
                                                                    Portal
                                                                    Development</span></a>
                                                        </div>
                                                        <div class="firstcolumn">
                                                            <a href="#" class="topnav-sublink">
                                                                <i class="fa-solid fa-shuffle"></i>
                                                                <span class="link-text">Software Integrations</span>
                                                            </a>
                                                            <a href="#" class="topnav-sublink">
                                                                <i class="fa-solid fa-right-left"></i>
                                                                <span class="link-text">Sharepoint Development</span>
                                                            </a>
                                                            <a href="#" class="topnav-sublink">
                                                                <i class="fa-solid fa-laptop"></i>
                                                                <span class="link-text">Internet of Things (IoT)
                                                                    Software</span>
                                                            </a>
                                                            <a href="#" class="topnav-sublink">
                                                                <i class="fa-solid fa-earth-americas"></i>
                                                                <span class="link-text">Reporting Hub</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IT Support -->
                                    <div class="itsupport">
                                        <button class="itsupportbtn">
                                            <!-- <span class="material-symbols-outlined itpic">monitor</span><br> -->
                                            <span class="icon-display itpic"></span><br>
                                            <small>IT</small><br>Support</button>
                                        <div class="itsupport-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our IT Support Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#">
                                                            <i class="fa-solid fa-headphones"></i>
                                                            <span class="link-text">Managed IT Support</span>
                                                        </a>
                                                        <a href="#">
                                                            <i
                                                                class="fa-solid fa-graduation-cap fa-flip-horizontal"></i>
                                                            <span class="link-text">IT Consultancy</span>
                                                        </a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#">
                                                            <i class="fa-solid fa-briefcase"></i>
                                                            <span class="link-text">Business IT Support</span>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa-solid fa-cloud"></i>
                                                            <span class="link-text">Cloud Service Provider</span>
                                                        </a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#">
                                                            <i class="fa-solid fa-laptop"></i>
                                                            <span class="link-text">Office 365 for Business</span>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa-solid fa-hard-drive"></i>
                                                            <span class="link-text">Data Backup & Disaster
                                                                Recovery</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Digital Marketing -->
                                    <div class="digitalmarketing">
                                        <button class="digimarketbtn"><span
                                                class="material-symbols-outlined digipic">signal_cellular_alt</span><br><small>Digital</small><br>Marketing</button>
                                        <div class="digimarket-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Digital Marketing
                                                    Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i><span
                                                                class="link-text">
                                                                Search
                                                                Engine
                                                                Optimisation
                                                                (SEO)</span></a>
                                                        <a href="#"><i class="fa-solid fa-envelope"></i><span
                                                                class="link-text">Email
                                                                Marketing</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-money-bill-1"></i><span
                                                                class="link-text">Pay Per
                                                                Click
                                                                Advertising
                                                                (PPC)</span></a>
                                                        <a href="#"><i class="fa-solid fa-users"></i><span
                                                                class="link-text">Social Media
                                                                Marketing</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-arrow-trend-up"></i><span
                                                                class="link-text">
                                                                Conversion
                                                                Rate
                                                                Optimisation
                                                                (CRO)</span></a>
                                                        <a href="#"><i class="fa-solid fa-pen"></i>
                                                            <span class="link-text">Content
                                                                Marketing</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Telecoms Services -->
                                    <div class="telecomsservices">
                                        <button class="telecomsbtn">
                                            <span class="icon-phone_in_talk smallsearchphone telepic"></span><br>
                                            <!-- <span><i class="fa-solid fa-phone-volume telepic"></i></span><br> -->
                                            <small>Telecoms</small><br>Services</button>
                                        <div class="telecoms-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Telecoms Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i
                                                                class="fa-solid fa-ticket fa-flip-horizontal"></i><span
                                                                class="link-text">
                                                                Business
                                                                Mobile</span></a>
                                                        <a href="#"><i class='fas fa-tachometer-alt'></i><span
                                                                class="link-text">Business
                                                                Broadband</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-phone"></i><span
                                                                class="link-text">Hosted VOIP
                                                                Provider</span></a>
                                                        <a href="#"><i class="fa-regular fa-handshake"></i><span
                                                                class="link-text">Leased
                                                                Lines
                                                                Provider</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-square-phone"></i><span
                                                                class="link-text">
                                                                Business VOIP
                                                                Systems</span></a>
                                                        <a href="#"><i class="fa-solid fa-phone-volume"></i><span
                                                                class="link-text">3CX
                                                                Systems</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Web Design -->
                                    <div class="webdesign">
                                        <button class="webdesignbtn">
                                            <!-- <i class="fa-solid fa-code webpic"></i><br> -->
                                            <span class="icon-code1 webpic"></span><br>
                                            <small>Web</small><br>Design</button>
                                        <div class="webdesign-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Web Design Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-pen"></i><span
                                                                class="link-text">Bespoke Website
                                                                Design</span></a>
                                                        <a href="#"><i class="fa-solid fa-bullhorn"></i><span
                                                                class="link-text">Branding &
                                                                Design</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i
                                                                class="fa-solid fa-cart-shopping fa-flip-horizontal"></i><span
                                                                class="link-text">
                                                                eCommerce
                                                                Stores</span></a>
                                                        <a href="#"><i
                                                                class="fa-solid fa-mobile-screen-button"></i><span
                                                                class="link-text">
                                                                Mobile
                                                                App
                                                                Development</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-desktop"></i><span
                                                                class="link-text">Pay Monthly
                                                                Websites</span></a>
                                                        <a href="#"><i class="fa-solid fa-cloud"></i><span
                                                                class="link-text">Web
                                                                Hosting</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cyber Security -->
                                    <div class="cyber">
                                        <button class="cybersecbtn"><span
                                                class="material-symbols-outlined cyberpic">security</span><br><small>Cyber</small><br>Security</button>
                                        <div class="cyber-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Cyber Security Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-paste"></i><span
                                                                class="link-text">Cyber Security
                                                                Assessment</span></a>
                                                        <a href="#"><i
                                                                class="fa-solid fa-graduation-cap fa-flip-horizontal"></i><span
                                                                class="link-text">
                                                                Cyber
                                                                Essentials Certification</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i
                                                                class="fa-regular fa-clock fa-flip-horizontal"></i><span
                                                                class="link-text">
                                                                Cyber
                                                                Security
                                                                Management</span></a>
                                                        <a href="#"><span
                                                                class="material-symbols-outlined">security</span><span
                                                                class="link-text">PCI/DSS
                                                                Compliance</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-flask"></i><span
                                                                class="link-text">Cyber
                                                                Penetration
                                                                Testing</span></a>
                                                        <a href="#"><i class="fa-solid fa-lock"></i><span
                                                                class="link-text">Hacker
                                                                Prevention</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Developer Course -->
                                    <div class="devcourse">
                                        <button class="devcoursebtn">
                                            <!-- <span class="material-symbols-outlined devpic">school</span><br> -->
                                            <!-- <span><i class="fa-solid fa-graduation-cap fa-flip-horizontal devpic"></i></span><br> -->
                                            <span class="icon-school devpic"></span><br>
                                            <small>Developer</small><br>Course</button>
                                        <div class="devcourse-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Developer Course
                                                    Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-laptop"></i><span
                                                                class="link-text">Train For A
                                                                Career In
                                                                Tech</span></a>
                                                        <a href="#"><i class="fa-regular fa-handshake"></i><span
                                                                class="link-text">Scion
                                                                Collaborators</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-code"></i><span
                                                                class="link-text">Skills
                                                                Bootcamp</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-circle-question"></i>
                                                            <span class="link-text">
                                                                Scion
                                                                Frequently
                                                                Asked
                                                                Questions</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="main-topnavHide" class="main-topnav">

                        <!-- Tablet -->
                        <div class="container tabMenu">
                            <div class="row top-help">
                                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
                                    <div class="container-headerLogo">
                                        <img class="logo" src="img/asset0.png" alt="Netmatters Dark logo">
                                    </div>
                                </div>
                                <!-- <div class="container headerSearch"> -->

                                <div class="col-xs-3 col-sm-6 col-md-7 col-lg-8">
                                    <div class="searchMenu">
                                        <a href="#" class="btn topcontactbtn itbtn"><i
                                                class="fa-solid fa-computer-mouse"></i>
                                            Support
                                        </a>
                                        <a href="contact-us.php" class="topcontactbtn contactbtn"><i
                                                class="fa-regular fa-paper-plane contactplane"></i>
                                            Contact</a>
                                        <span class="material-symbols-outlined smallsearchphone">phone_in_talk</span>
                                        <div class="hidden-xs searchInput pull-left">
                                            <form class="searchbar">
                                                <label for="search-tablet" class="hidden"></label>
                                                <input type="text" placeholder="Search..." name="q" id="search-tablet">
                                                <button type="submit"><i class="fa fa-search searchbtn"></i></button>
                                            </form>
                                        </div>

                                        <!-- Burger menu -->
                                        <div class="btn hamburger">
                                            <div class="hamburger-container">
                                                <div class="hamburger-menu">
                                                    <div class="ham-bar bar-top"></div>
                                                    <div class="ham-bar bar-mid"></div>
                                                    <div class="ham-bar bar-bottom"></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Small header -->
                        <div id="smallnav" class="smallnav">
                            <div class="container">
                                <div class="row smallnavtop">
                                    <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
                                        <div class="logo-container">
                                            <img class="logo" src="img/asset0.png" alt="Netmatters Dark logo">
                                        </div>
                                    </div>
                                    <div class="col-xs-3 hidden-sm hidden-md hidden-lg mobile-container">
                                        <!-- <span class="material-symbols-outlined smallsearchphone">phone_in_talk</span> -->
                                        <!-- <span><i class="fa-solid fa-phone-volume smallsearchphone"></i></span> -->
                                        <span class="icon-phone_in_talk  smallsearchphone"></span>
                                        <!-- <span class="smallsearchphone"><img src="img/629.svg" alt="phone"></span> -->
                                    </div>
                                    <!-- Burger menu -->
                                    <div class="col-xs-3 col-sm-6 col-md-7 col-lg-8 hamburger-container">
                                        <div class="burger-menu">
                                            <div class="ham-bar bar-top"></div>
                                            <div class="ham-bar bar-mid"></div>
                                            <div class="ham-bar bar-bottom"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="searchform">
                                    <form class="searchbar">
                                        <label for="search-input">Search...</label>
                                        <input class="search-input" type="text" placeholder="Search..." name="q"
                                            id="search-input">
                                        <button type="submit"><i class="fa fa-search searchbtn"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Top nav -->
                        <div class="container topnav" id="myTopnav">
                            <div class="container mainmenu">
                                <!-- <a href="#" class="icon"><i class="fa fa-bars"></i></a> -->
                                <!-- Bespoke Software -->
                                <!-- <div class="container"> -->
                                <div class="container menu-breakdown">
                                    <div class="bespoke">
                                        <button class="bespokebtn">
                                            <span class="icon-apps bespokepic"></span><br>
                                            <!-- <span><i class="fa-solid fa-laptop bespokepic"></i></span><br> -->
                                            <small>Bespoke</small><br>Software</button>
                                        <div class="bespoke-content">
                                            <div class="dropdown-bespoke">
                                                <div class="container dropdown-heading">
                                                    <a class="content-heading" href="#">Our Bespoke Software
                                                        Services</a>
                                                </div>
                                                <div class="container">
                                                    <div class="firstrow">
                                                        <div class="firstcolumn">
                                                            <a href="#"><span class="icon-cogs1"></span><span
                                                                    class="link-text">Bespoke CRM</span></a>
                                                            <a href="#"><i class="fa-solid fa-mobile"></i><span
                                                                    class="link-text"> Mobile
                                                                    App
                                                                    Development</span></a>
                                                            <a href="#"><i class="fa-solid fa-download"></i><span
                                                                    class="link-text">Operational
                                                                    Systems</span></a>
                                                            <a href="#"><i class="fa-solid fa-cloud"></i><span
                                                                    class="link-text">Intranet
                                                                    Development</span></a>
                                                        </div>
                                                        <div class="firstcolumn">
                                                            <a href="#"><i class="fa-solid fa-briefcase"></i><span
                                                                    class="link-text"> Business
                                                                    Automation</span></a>
                                                            <a href="#"><i class="fa-solid fa-folder-open"></i><span
                                                                    class="link-text">
                                                                    Bespoke
                                                                    Databases</span></a>
                                                            <a href="#"><i class="fa-solid fa-users"></i><span
                                                                    class="link-text"> Business
                                                                    Central
                                                                    Implementation</span></a>
                                                            <a href="#"><i
                                                                    class="fa-solid fa-cloud-arrow-down"></i><span
                                                                    class="link-text">
                                                                    Customer
                                                                    Portal
                                                                    Development</span></a>
                                                        </div>
                                                        <div class="firstcolumn">
                                                            <a href="#"><i class="fa-solid fa-shuffle"></i><span
                                                                    class="link-text">Software
                                                                    Integrations</span></a>
                                                            <a href="#"><i class="fa-solid fa-right-left"></i><span
                                                                    class="link-text">
                                                                    Sharepoint
                                                                    Development</span></a>
                                                            <a href="#"><i class="fa-solid fa-laptop"></i><span
                                                                    class="link-text"> Internet
                                                                    of
                                                                    Things
                                                                    (IoT)
                                                                    Software</span></a>
                                                            <a href="#"><i class="fa-solid fa-earth-americas"></i><span
                                                                    class="link-text">
                                                                    Reporting
                                                                    Hub</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IT Support -->
                                    <div class="itsupport">
                                        <button class="itsupportbtn">
                                            <!-- <span class="material-symbols-outlined itpic">monitor</span><br> -->
                                            <span class="icon-display itpic"></span><br>
                                            <small>IT</small><br>Support</button>
                                        <div class="itsupport-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our IT Support Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-headphones"></i><span
                                                                class="link-text">Managed
                                                                IT
                                                                Support</span></a>
                                                        <a href="#"><i
                                                                class="fa-solid fa-graduation-cap fa-flip-horizontal"></i><span
                                                                class="link-text">
                                                                IT
                                                                Consultancy</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-briefcase"></i><span
                                                                class="link-text">Business
                                                                IT
                                                                Support</span></a>
                                                        <a href="#"><i class="fa-solid fa-cloud"></i><span
                                                                class="link-text">Cloud Service
                                                                Provider</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-laptop"></i><span
                                                                class="link-text">Office 365
                                                                for
                                                                Business</span></a>
                                                        <a href="#"><i class="fa-solid fa-hard-drive"></i><span
                                                                class="link-text">Data
                                                                Backup &
                                                                Disaster
                                                                Recovery</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Digital Marketing -->
                                    <div class="digitalmarketing">
                                        <button class="digimarketbtn"><span
                                                class="material-symbols-outlined digipic">signal_cellular_alt</span><br><small>Digital</small><br>Marketing</button>
                                        <div class="digimarket-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Digital Marketing
                                                    Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i><span
                                                                class="link-text">
                                                                Search
                                                                Engine
                                                                Optimisation
                                                                (SEO)</span></a>
                                                        <a href="#"><i class="fa-solid fa-envelope"></i><span
                                                                class="link-text">Email
                                                                Marketing</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-money-bill-1"></i><span
                                                                class="link-text">Pay Per
                                                                Click
                                                                Advertising
                                                                (PPC)</span></a>
                                                        <a href="#"><i class="fa-solid fa-users"></i><span
                                                                class="link-text">Social Media
                                                                Marketing</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-arrow-trend-up"></i><span
                                                                class="link-text">
                                                                Conversion
                                                                Rate
                                                                Optimisation
                                                                (CRO)</span></a>
                                                        <a href="#"><i class="fa-solid fa-pen"></i><span
                                                                class="link-text">Content
                                                                Marketing</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Telecoms Services -->
                                    <div class="telecomsservices">
                                        <button class="telecomsbtn">
                                            <span class="icon-phone_in_talk  smallsearchphone telepic"></span><br>
                                            <!-- <span><i class="fa-solid fa-phone-volume telepic"></i></span><br> -->
                                            <small>Telecoms</small><br>Services</button>
                                        <div class="telecoms-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Telecoms Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i
                                                                class="fa-solid fa-ticket fa-flip-horizontal"></i>
                                                            <span>Business Mobile</span></a>
                                                        <a href="#"><i class='fas fa-tachometer-alt'></i>
                                                            <span class="link-text">Business Broadband</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-phone"></i><span
                                                                class="link-text">Hosted VOIP
                                                                Provider</span></a>
                                                        <a href="#"><i class="fa-regular fa-handshake"></i>
                                                            <span class="link-text">Leased
                                                                Lines
                                                                Provider</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-square-phone"></i><span
                                                                class="link-text">
                                                                Business VOIP
                                                                Systems</span></a>
                                                        <a href="#"><i class="fa-solid fa-phone-volume"></i><span
                                                                class="link-text">3CX
                                                                Systems</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Web Design -->
                                    <div class="webdesign">
                                        <button class="webdesignbtn">
                                            <!-- <span><i class="fa-solid fa-code webpic"></i></span><br> -->
                                            <span class="icon-code1 webpic"></span><br>
                                            <small>Web</small><br>Design</button>
                                        <div class="webdesign-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Web Design Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-pen"></i><span
                                                                class="link-text">Bespoke Website
                                                                Design</span></a>
                                                        <a href="#"><i class="fa-solid fa-bullhorn"></i><span
                                                                class="link-text">Branding &
                                                                Design</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i
                                                                class="fa-solid fa-cart-shopping fa-flip-horizontal"></i><span
                                                                class="link-text">
                                                                eCommerce
                                                                Stores</span></a>
                                                        <a href="#"><i
                                                                class="fa-solid fa-mobile-screen-button"></i><span
                                                                class="link-text">
                                                                Mobile
                                                                App
                                                                Development</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-desktop"></i>
                                                            <span class="link-text">Pay Monthly
                                                                Websites</span></a>
                                                        <a href="#"><i class="fa-solid fa-cloud"></i>
                                                            <span class="link-text">Web Hosting</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cyber Security -->
                                    <div class="cyber">
                                        <button class="cybersecbtn"><span
                                                class="material-symbols-outlined cyberpic">security</span><br><small>Cyber</small><br>Security</button>
                                        <div class="cyber-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Cyber Security Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-paste"></i>
                                                            <span class="link-text">Cyber Security
                                                                Assessment</span></a>
                                                        <a href="#"><i
                                                                class="fa-solid fa-graduation-cap fa-flip-horizontal"></i>
                                                            <span class="link-text">Cyber Essentials
                                                                Certification</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i
                                                                class="fa-regular fa-clock fa-flip-horizontal"></i>
                                                            <span class="link-text">
                                                                Cyber
                                                                Security
                                                                Management</span></a>
                                                        <a href="#"><span
                                                                class="material-symbols-outlined">security</span>
                                                            <span class="link-text">PCI/DSS
                                                                Compliance</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-flask"></i>
                                                            <span class="link-text">Cyber
                                                                Penetration
                                                                Testing</span></a>
                                                        <a href="#"><i class="fa-solid fa-lock"></i>
                                                            <span class="link-text">Hacker
                                                                Prevention</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Developer Course -->
                                    <div class="devcourse">
                                        <button class="devcoursebtn">
                                            <!-- <span class="material-symbols-outlined devpic">school</span> -->
                                            <span class="icon-school devpic"></span><br>
                                            <!-- <span><i class="fa-solid fa-graduation-cap fa-flip-horizontal devpic"></i></span><br> -->
                                            <small>Developer</small><br>Course</button>
                                        <div class="devcourse-content">
                                            <div class="container dropdown-heading">
                                                <a class="content-heading" href="#">Our Developer Course
                                                    Services</a>
                                            </div>
                                            <div class="container">
                                                <div class="firstrow">
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-laptop"></i>
                                                            <span class="link-text">Train For A
                                                                Career In
                                                                Tech</span></a>
                                                        <a href="#"><i class="fa-regular fa-handshake"></i><span
                                                                class="link-text">Scion
                                                                Collaborators</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-code"></i><span
                                                                class="link-text">Skills
                                                                Bootcamp</span></a>
                                                    </div>
                                                    <div class="firstcolumn">
                                                        <a href="#"><i class="fa-solid fa-circle-question"></i><span
                                                                class="link-text">
                                                                Scion
                                                                Frequently
                                                                Asked
                                                                Questions</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of header -->