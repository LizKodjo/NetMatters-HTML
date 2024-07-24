<?php
session_start();

$token = md5(uniqid(microtime(), true));
$_SESSION['token'] = $token;

include "inc/dbconnect.php";

// Page title
$title = "Contact Us | Netmatters";
include "inc/header.php";
?>

<!-- End of header  -->
</header>

<main>
    <div id="middle">
        <div class="hidden-xs breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>Our Offices</li>
                </ul>
            </div>
        </div>
        <div class="section top">
            <div class="page-head">
                <div class="container">
                    <h1>Our Offices</h1>
                </div>
            </div>
        </div>
        <div class="office-addresses">
            <div class="service-list container">
                <div class="row office-address-row">
                    <div class="col-md-4 spacer-sm">
                        <div class="block address address-cambridge">
                            <div class="image">
                                <a href="#">
                                    <img src="img/Cambridge.jpeg" alt="Cambridge Office" class="img-full">
                                </a>
                            </div>
                            <div class="content">

                                <p class="h2">
                                    <a href="#">Cambridge Office</a>
                                </p>
                                <p class="p">
                                    Unit 1.31, <br>
                                    St John's Innovation Centre, <br>
                                    Cowley Road, Milton <br>
                                    Cambridge, <br>
                                    CB4 0WS
                                </p>
                                <div class="tel">
                                    <a href="#" class="h3 text-web">01223 37 57 72 </a>
                                </div>
                                <div class="view-more">
                                    <a href="#" class="btn btn--web">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 spacer-sm">
                        <div class="block address address-wymondham">
                            <div class="image">
                                <a href="#">
                                    <img src="img/Wymondham.jpeg" alt="Wymondham Office" class="img-full">
                                </a>
                            </div>
                            <div class="content">
                                <p class="h2">
                                    <a href="#">Wymondham Office</a>
                                </p>
                                <p class="p">
                                    Unit 15, <br>
                                    Penfold Drive, <br>
                                    Gateway 11 Business Park, <br>
                                    Wymondham, Norfolk, <br>
                                    NR18 0WZ
                                </p>
                                <div class="tel">
                                    <a href="#" class="h3 text-web">01603 72 40 20 </a>
                                </div>
                                <div class="view-more">
                                    <a href="#" class="btn btn--web">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block address address-yarmouth">
                            <div class="image">
                                <a href="#">
                                    <img src="img/GYarmouth.jpeg" alt="Great Yarmouth Office" class="img-full">
                                </a>
                            </div>
                            <div class="content">
                                <p class="h2">
                                    <a href="#">Great Yarmouth Office</a>
                                </p>
                                <p class="p">
                                    Suite F23, <br>
                                    Beacon Innovation Centre, <br>
                                    Beacon Park, Gorleston, <br>
                                    Great Yarmouth, Norfolk, <br>
                                    NR31 7RA
                                </p>
                                <div class="tel">
                                    <a href="#" class="h3 text-web">01493 60 32 04</a>
                                </div>
                                <div class="view-more">
                                    <a href="#" class="btn btn--web">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bottom container">
            <div class="row formlayout">
                <div class="col-lg-4 col-lg-push-8 hourstest">
                    <div>
                        <div class="cms-block">
                            <p>
                                <strong>Email us on:</strong><br>
                            </p>
                            <p>
                                <a href="#" class="h3 text-web">sales@netmatters.com</a>
                            </p>
                            <p>
                                <strong>Business hours:</strong>
                            </p>
                            <p>
                                <strong>Monday - Friday 07:00 - 18:00&nbsp;</strong>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="cms-block">
                            <div class="container">
                                <div class="accordion out-of-hours">
                                    <div class="question out-of-hours">
                                        <h4>
                                            <a href="#">
                                                <p class="question-text">Out of Hours IT Support
                                                    <em style="font-style: normal"
                                                        class="fa fa-chevron-down rotate"></em>
                                                </p>
                                            </a>
                                        </h4>
                                        <div class="answer initiallyHidden" style="display: none;">
                                            <p>
                                                Netmatters IT are offering an Out of Hours service for Emergency and
                                                Critical tasks.
                                            </p>
                                            <p>
                                                <strong>Monday - Friday 18:00 - 22:00 </strong>
                                                <strong>Saturday 08:00 - 16:00 </strong><br>
                                                <strong>Sunday 10:00 - 18:00 </strong>
                                            </p>
                                            <p>
                                                To log a critical task, you will need to call our main line number and
                                                select
                                                Option 2 to leave an Out of Hours&nbsp;
                                                voicemail. A technician will contact you on the number provided within
                                                45
                                                minutes
                                                of your call.&nbsp;
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-pull-4 formtest">
                    <form method="POST" action="inc/contactform.php" id="contact-form" accept-charset="UTF-8">
                        <!-- Display error messages -->
                        <?php if (isset($_SESSION['status']) && $_SESSION['status'] === 'error'):
                            $errors = $_SESSION['errors'];
                            ?>
                            <ul class="formerrors">
                                <?php foreach ($errors as $e): ?>
                                    <li><?= $e; ?></li>
                                <?php endforeach; ?>

                            </ul>
                        <?php elseif (isset($_SESSION['status']) && $_SESSION['status'] === 'success'):
                            $data = $_SESSION['data'];
                            ?>
                            <div class="formsuccess">
                                <p>Form submitted successfully.</p>
                            </div>

                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="required">Your name</label>
                                    <input class="form-control" name="name" type="text" value id="name">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company">Company Name</label>
                                    <input class="form-control" name="company" type="text" value id="company">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="required">Your email</label>
                                    <input class="form-control" name="email" type="email" value id="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telephone" class="required">Your Telephone Number</label>
                                    <input class="form-control" name="telephone" type="text" value id="telephone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="required">Message</label>
                            <textarea class="form-control" name="message" cols="50" rows="10" id="message">Hi, I am interested in discussing Our Offices solution, could you please give me a call or send an email?
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label class="pretty-checkbox">
                                <span class="media">
                                    <span class="media-left checkbox-left">
                                        <span class="button">
                                            <span class="mdi-action-done"></span>
                                            <input name="marketing_preference" type="checkbox" value="1">
                                        </span>
                                    </span>
                                    <span class="media-body">
                                        Please tick this box if you wish to receive marketing information
                                        from us. Please see our
                                        <a href="#">Privacy Policy</a> for more information
                                        on how we keep your data safe.
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="form-group form-label recaptcha-terms">
                            <span>
                                This site is protected by reCAPTCHA and the Google
                                <a href="#"><u>Privacy Policy</u></a> and
                                <a href="#"><u>Terms of Service</u></a>
                                apply.
                            </span>
                        </div>
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <div class="my_name_wrap" style="display: none;"></div>
                        <input type="hidden" name="token" value="<?= $token ?>">
                        <div class="action-block">
                            <button class="btn btn-primary">Send Enquiry</button>
                            <small class="helper-text">
                                <span class="text-danger">*</span>
                                Fields Required
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <!-- Start of footer -->
    <?php include "inc/footer.php";
    unset($_SESSION['status']);
    unset($_SESSION['errors']);
    unset($_SESSION['data']);
    ?>