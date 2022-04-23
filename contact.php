<?php 
require 'core/connection.php';

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$userip = get_client_ip();
$min = date('i');
$hour = date('H');
$day = date('d');
$month = date('m');
$year = date('Y');
$page = "contact";

$inn = array('ip' => $userip,
                   'page' => $page, 
                   'min' => $min, 
                   'hour' => $hour, 
                   'day' => $day, 
                   'month' => $month, 
                   'year' => $year, 

                    );
create('visitors',$inn)
 ?>
<?php
require 'inc/header.php';
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-editor-area d-flex align-items-center" id="questions">
        <!-- Editor Content -->
        <div class="editor-content-area" style="text-align: justify;">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Contact Us</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">If you would like to discuss your concerns in person, then we would be delighted if you call us on +234 8122814294, or you can request a callback, and we will get back to you!</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>CAREERS</h2>
            </div>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">Qualified Staffs</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">As one of the leading quick sales of properties , we know how significant it is to invest in Staffs at all levels in order to maintain the high quality service that our customers expect from us. If you have strong academics, experience in our area of specialisation, are looking for new challenges and more responsibility in an international team, we want to hear from you. Email us at: gp@vibadia.com</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Training</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Vibadia properties is a truly commercial compeny, always seeking new opportunities and setting new standards in customer service. We run a pro-active policy to our team’s development and on-going training. Training requirements are identified via our appraisal process and are associated with company objectives. Employees can always request training on an on-going basis. For our trainees, it is an exciting environment in which they are both supported and challenged to realise their full potential</p>

            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@adronhomesproperties.com</h6>
            </div>
        </div>
        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/contact-us.png" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/phone-call.png" alt="">+234 812 2814 294</h6>
                            <h6><img src="img/icons/envelope.png" alt=""> office@adronhomesproperties.com</h6>
                            <h6><img src="img/icons/location.png" alt=""> Austria, United Kingdom, Nigeria</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="#" method="post" id="promess">
                            <input type="text" name="check" value="check" style="display: none;">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="contact-number" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn south-btn">Send Message</button>
                            <span id="loading" style="display:none"><img src="img/core-img/loading.gif"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div>

<?php
require 'inc/footer.php';
?>