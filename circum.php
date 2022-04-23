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
$page = "circumstances";

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Vibadia Properties | Circumstances</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/vp.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:office@vibadiaproperties.com">office@vibadiaproperties.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:>+234 812 2814 294">>+234 812 2814 294</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
       <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/vp new.png" alt="" width="50%" height="50%"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php#process">Our Process</a></li>
                                <li><a href="circum.php">Circumstances</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Circumstances</li>
                                            <li><a href="#ourpromise">Our Promise</a></li>
                                            <li><a href="#strugglingfinancially">Struggling Financially</a></li>
                                            <li><a href="#pipc">Property In Poor Condition</a></li>
                                            <li><a href="#hdit">How Does It Work</a></li>
                                            <li><a href="#ivs">Initial Valuation Stage</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Circumstances</li>
                                            <li><a href="#foec">Formal Offer, Exchange & Completion</a></li>
                                            <li><a href="#"> </a></li>
                                            <li><a href="#hso">House Sale Options</a></li>
                                            <li><a href="#wamowswrss">What Are My Options When Selling With Ready  Steady Sell</a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Circumstances</li>
                                            <li><a href="#sfc">Selling For Cash</a></li>
                                            <li><a href="#ahs">Assisted Home Sale</a></li>
                                            <li><a href="#lo">Leased Option</a></li>
                                            <li><a href="#carhbctsyh">Choosing A Reputable House Buying Company To Sell Your Home</a></li>
                                            <li><a href="#"> </a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Circumstances</li>
                                            <li><a href="#saa">Selling At Auction</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="index.php#Buyer">Buyer Locations</a></li>
                                <li><a href="index.php#property">Property News</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="index.php" method="get">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">CIRCUMSTANCES</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

        <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form action="index.php" method="get" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="search" placeholder="Keyword">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="country" id="cities">
                                            <option>All Countries</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" name="category" id="catagories">
                                            <option>All Catagories</option>
                                            <option>Apartment</option>
                                            <option>Bar</option>
                                            <option>Farm</option>
                                            <option>House</option>
                                            <option>Store</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <select class="form-control" name="bedrooms" id="bedrooms">
                                            <option>Bedrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5+">5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820" name="val">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 sq. ft - 820 sq. ft</div>
                                    </div>
                                </div>

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" name="type" id="types">
                                                    <option value="all">All Types</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" name="category" id="catagories2">
                                                    <option value="all">All Catagories</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" name="sor" id="Actions3">
                                                    <option value="all">All Actions</option>
                                                    <option value="sales">Sales</option>
                                                    <option value="rent">Rent</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" name="state" id="city5">
                                                    <option value="all city">All City</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

        <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <?php
                     $aa = $conn->query("SELECT * FROM properties order by id DESC LIMIT 1");
                $bb = $aa->fetchAll(PDO::FETCH_OBJ);
                $cc = $aa->rowCount();
                if ($cc > 0) {
                    foreach ($bb as $key) {
                    $id = $key->id;
                    $pic = $key->pic;
                    $ros = $key->rent_sell;
                    $price = $key->price;
                    $toh = $key->type_of_house;
                    $locations = $key->location_state;
                    $locationc = $key->location_country;
                    $locationd = $key->location_details;
                    $soh = $key->summary_of_house;
                    $nor = $key->number_room;
                    $size = $key->size;
                ?>
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>We search for the perfect home</h2>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="img/pro-img/<?php echo $pic; ?>" alt="" width ="90%" height="90%">
                        <p class="wow fadeInUp" data-wow-delay="450ms"><?php echo "$soh"; ?></p>
                    </div>
                    <?php
                }
            }
            ?>

                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Featured Properties</h2>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">
                         <?php
                                $a1 = $conn->query("SELECT * FROM properties order by 'id' DESC LIMIT 10");
                                $d1 = $a1->fetchAll(PDO::FETCH_OBJ);
                                $c1 = $a1->rowCount();
                                if ($c1 > 0) {
                                foreach ($d1 as $key1) {
                                $id = $key1->id;
                                $pic = $key1->pic;
                                $ros = $key1->rent_sell;
                                $price = $key1->price;
                                $toh = $key1->type_of_house;
                                $locations = $key1->location_state;
                                $locationc = $key1->location_country;
                                $locationd = $key1->location_details;
                                $soh = $key1->summary_of_house;
                                $nor = $key1->number_room;
                                $size = $key1->size;
                             ?>
                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/pro-img/<?php echo $pic; ?>" alt="">

                                <div class="tag">
                                    <span>For <?php echo $ros; ?></span>
                                </div>
                                <div class="list-price">
                                    <p><?php echo $price; ?></p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5><?php echo $toh; ?> in <?php echo $locations; ?> <?php echo $locationc; ?></h5>
                                <p class="location"><img src="img/icons/location.png" alt=""><?php echo $locationd; ?></p>
                                <p><?php echo $soh; ?></p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span><?php echo $nor; ?></span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span><?php echo $size; ?> sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->
<section class="south-editor-area d-flex align-items-center" id="questions">
        <!-- Editor Content -->
        <div class="editor-content-area" style="text-align: justify;">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Circumstances</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Your property has been on the market for months and months, you have decided to follow the dream and emigrate, financial concerns are causing you to worry. </p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Whatever the reason for looking to sell your properties quickly, take the most important step: call today on <a href="tel:+234812814294">+234 812 2814 294</a>. We can have a legal offer sometimes within 24/48 hours,  so please don’t delay.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Enter your details on our enquiry form and we will call you back.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">we can visit you on the same or next day of enquiry and because of our extensive network of investors we are confident that we can facilitate the purchase of your property quickly.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Therefore we are always confident of helping when you must sell your house and properties.</p>
            <h2 id="ourpromise">Our Promise</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">We promise that your personal assistant will be on hand at every point to answer any of your questions and will schedule specific days to provide you with feedback and progress updates.  You will never be left “out of the loop” or concerned with the sale. </p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Our process is smooth and compassionate and will set your mid at ease. We are constantly updating our systems to ensure the level of service you experience is second to none.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">A specific member of our team is appointed as your one point of contact, who will call you within 24 hours , chat over how we can help and guide you through the whole process.</p>
            <h2 id="strugglingfinancially">Struggling financially</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">We understand that having money worries can cause a lot of problems, and can even take its toll on your health. Here at Guobadia Properties, we aim to solve your money problems by freeing up the cash you need to settle your debts or to balance your books.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">For the majority of people, their most valuable asset is their home but it can also be their most expensive to keep. With mortgage payments, bills, upkeep and various other costs – property becomes a big drain on your finances. Instead of struggling to keep your head above water, let us buy your property, free up the cash and help you with options after the sale.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Why not take advantage of our Cash Advance option – funds can be released after exchange of contracts and is completely interest free. This will tide you over until the full funds are released to you on completion of the sale. This service is completely bespoke so please contact us to discuss your requirements in confidence.</p>
            <h2 id="pipc">Property in poor condition</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">Maintaining your home  and  other of properties can be tough especially  if there’s a lot to do to make your property ready for sale. We don’t mind if there’s work to do on your property, we aim to offer the best price no matter what condition it is in.</p>
            <h2 id="hdit">How Does It Work</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">How does the quick house and properties sale process work with Ready, Steady Sell?</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Our experts will give you a further understanding of how our cash buying process works, and whether or not it is going to be suitable for your needs. First and foremost the starting point for any quick house sale application is to get a <span style="color: blue;">free initial valuation through online correspondace</span> with the details that you provide we will then make an estimation and give you an indicative offer of what we may pay for you property in cash.</p>
            <h2 id="ivs">Initial Valuation Stage</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">This online offer is only indicative, therefore one of our sell experts will contact you to discuss your property or home sale in more detail, and clear up any questions you may have. The expert will then give you a more accurate valuation over the phone as well as firming up our cash offer. This again is not the final cash price; <b>our advisor hasn't seen the property therefore can't give a 100% accurate</b> valuation at this stage. </p>
            <h2 id="foec">Formal Offer, Exchange & Completion</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">Once our advisor come back to us with their valuation after visitation of the property after all other investigation we will then be at a point where we can make you a formal offer. This offer is presented to you, and if you accept - we simply get contracts drawn up by our solicitor and agree a date to exchange. Some customers want to sell as quickly as possible and we are able to do this being cash buyers. In fact, we can usually complete on a sale in an average of <span style="color: blue">14 days</span>.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">However, if you don't need to sell that quickly you don't have to. We can delay the completion date for as long as you need to find your next home or arrange your moving dates.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Step 1.  We value your property using our in office expert staff to get a guide as to what your home will value from a surveyor. If you are happy with this guide price, we send out a the surveyor to carry out a full valuation at our expense.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Step 2.  If you are happy with our survey, and our formal cash offer - we agree a date to exchange and complete the contract. We can make this as quick as <span style="color: blue">14 day</span> or work to a timeframe that better suits you. We are really flexible and can work within your needs.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Step 3.  On the day of completion our solicitor will pay the cash funds directly into your bank account. <span style="color: blue">All legal fees, home selling fees and independent valuation costs are covered by you.</span> </p>
            <h2 id="hso">House Sale Options</h2>
            <h2 id="wamowswrss">What Are My Options When Selling With Ready Steady Sell?</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">We specialise in buying houses and properties quickly for cash which often puts us at risk. We need to sell the property on, we are relying on market conditions being good and ultimately we need to make a profit in order to still function as a company. Therefore our cash offers are reflective of the speedy service and risk we are taking. This means you will not receive 100% market value for a cash sale. we believe anyone saying '100% cash market value' is not being honest.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">If you are not in a desperate situation to sell quickly. We do however have other options to help you sell quickly and get you a better price. These services will not be as quick as a cash purchase, and they do come with greater risk of not completing however we feel we are the best in the industry in Nigeria at what we do.</p>
            <h2 id="sfc">Selling For Cash</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">This is our easiest sale method whereby we simply buy your houseor properties from you for cash. Regardless of the location or condition we will be able to buy your house from you and give you the funds within  8 days.</p>
            <h2 id="ahs">Assisted Home Sale</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">We work with you to get your house sold quickly on the open market by taking full control of the sale process. If this means we have to refurbish the property we will do so at our cost.</p>
            <h2>Quick Sale Estate Agency</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">Sometimes our cash offers are not high enough or you don't need to sell in such a hurry - but are still motivated to sell quickly. Our estate agency model is one of the best in the Nigeria industry and can get you moving fast.</p>
            <h2 id="lo">Leased Option</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">we take control of a property you own and agree to complete at a later date. This is great if you have negative equity in the property.</p>
            <h2 id="saa">Selling At Auction </h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">we work with Nigeria's  auction companies </p>
            <h2>Sale and Rent Back </h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">a service whereby you sell your house to a cash buyer and get to remain in the property after completion as a tenant.</p>
            <h2 id="carhbctsyh">Choosing A Reputable House Buying Company To Sell Your Home</h2>
            <p class="wow fadeInUp" data-wow-delay="500ms">If you are thinking about selling your home to a house buying company, then you need to make sure that you choose one that is not only reputable, but will also give you a fair price. Here at Guobadia Properties, we are here to help you. we offer you options that can even get you smile. We believe in being up front and honest with our customers in the first instance. We will give you a fair offer for your home after a valuation.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Whatever you reason for sale, we have option to help you and get you the best possible price obtainable on the market for your home.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">At VP, we have adapted with the market and drastically changed the way we do business <span style="color: blue">therefore our offers are reflecting that.</span> Our offers are completely unique to your home and properties. </p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/home-sold-a.png" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <section class="south-editor-area d-flex align-items-center" id="questions">
        <!-- Editor Content -->
        <div class="editor-content-area" style="text-align: justify;">
            <!-- Section Heading -->
             <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Frequently Asked Questions</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Here Are Some Questions We Frequently Get Asked. Got Your Own Question? Why Not Contact Us And We Will Answer It.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">Will you really buy ANY house or properties?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">Yes, indeed we will! We’ve found that demand for a guaranteed AND quick house and properties sale has risen dramatically in recent decades, due to the nature of the property chain and the hassle of dealing with estate agents.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> I've heard that you'll buy my house and properties fast. Exactly how fast? </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">The process varies and is based upon each individual offer. We do, however, strive to complete the sale as quickly as possible and will arrange the sale date around your preference. You can realistically expect the entire process to take around four weeks to complete before you have the money in your bank account, providing we don’t experience unexpected delays in the selling process.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> Are there any costs I have to pay? </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">We do have a small fee for our service. Guobadia properties will carry out a full valuation of your property in order to make an offer and the fee we charge is to cover a portion of our costs in providing this for you. A copy of the valuation report will be sent to you along with your offer.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> How Much Will I Receive For My Home?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">The price we will give you for your property is entirely dependent on the location, recent property sales, and also the current economic climate. It also depends on how quickly you would like to sell! At the time of selling an independent surveyor will assess your property and decide how much your house is worth.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> Are There Any Fees To Pay To Sell?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> If you decide to sell your home with us, there are no fees to pay. We pay all of the solicitors and legal costs involved in selling.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> If I Get An Offer Am I Obliged To Sell?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> Absolutely not. We will guide you every step of the way and at any point up until you sign legally binding documents you can change your mind.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> How Quickly Can I Sell My House?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">  If you submit our online form, we can make you an offer as quickly as 24/48 hours. We can proceed to sale as quickly as 8 days, and you can bank the cash within 14-28 days.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> What If My Property Is In Poor Condition?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> We buy any property guaranteed. We don’t mind what condition your property is in, as long as you respect that any offer we make will be based on this conditon and the amount of repair we will need to do.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms"> What if something comes up and I need you to be flexible?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms">  That is absolutely no problem at all as far as we are concerned. We have no limits with regards to the completion date and are completely flexible and cater to suit your needs.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  Why should I use Guobadia properties buyers?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> VP buyers has a highly commendable reputation and track record within the industry.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms"> We pride ourselves on our high level of transparency and quality. We have a well-trained, friendly and sympathetic team in place to ensure that our customers know exactly what we’re undertaking, when and exactly how much it is all going to cost.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms"> We fully appreciate that our service is not the best solution for everyone and we are completely aware of this. However, if we cannot agree on a sale price, we will not continue to harass you in an attempt to change your mind.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms"> There are some cases where we are open to negotiation regarding offers, but please remember that we only want to purchase properties where there is mutual benefit.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  What do you do with my property once you buy it? </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> It totally depends on the property. We may renovate it if required, we may sell it on the open market, or chose to rent it out.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  Do you use averages or percentages to value my property? </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> VP Home and properties buyers do not use set percentages or averages when valuing your property or making you an offer. As we guarantee to make an offer on any property, in any condition, anywhere in the Nigeria, our dedicated research team will assess each property completely individually. This enables us to make the best offer for your property to allow a quick and hassle free sale.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  What type of properties do you buy?</h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> VP Home and Properties buyers purchases any type of property, in any condition, anywhere in the Nigeria. From a penthouse apartment in Lagos/Abuja to a fire-damaged house in Benin city, we guarantee to make a cash offer to purchase your property. We also buy park homes, retirement properties, compenies, commercial properties , landes properties, properties with short leases and valuable properties in generial. </p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  Who is buying my property? </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> VP Home and properties buyers. We’re a direct cash buyer and do not use third parties or investors – so we don’t need to find a buyer to complete our purchase of your property. We simply buy the property directly from you, as a straightforward transaction.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  What’s the top price you will pay?  </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> As VP Home and properties buyers deals with all types of property all over the Nigeria, we don’t have a ceiling price. We instruct a full valuation on the property, which enables us to make a fair and realistic offer to help you to sell your property quickly.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  Why do people use VP Home and properties buyers? </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> There are numerous reasons why people choose to sell their house quickly to VP Home and properties.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms"> More often than not, people want to move because they need or want to relocate, either to a differently sized property or a different area. We’re able to provide a quick and flexible sale completion date specifically tailored to suit our clients’ needs.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms"> There are, however, also those who find themselves in less fortunate situations and we are delighted to extend a helping hand to them. For over a decade our quick house properties sale service has enabled the bereaved unload unwanted properties quickly and with minimal fuss, allowing them to enjoy their inheritance as it was intended.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms"> We also assist those who are currently suffering financial difficulties, and it is particularly rewarding to help people to avoid their house being repossessed and getting themselves into a whole host of problems.</p>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">  What exactly is your house nd properties buying process?  </h3>
            <p class="wow fadeInUp" data-wow-delay="500ms"> Each valuation is completely individual, there is however, a general pattern that our house and properties buyers follow. It is possible to break this down into three  steps:</p>
            <ol class="wow fadeInUp" data-wow-delay="500ms">  
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 1. Information Gathering</h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> We make a point of spending some time talking to our customers about the local area, the available amenities but also details about the property interior. We also liaise with our local property experts and estate agents to ensure that the most accurate valuation is provided.  </p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 2. Valuation Report</h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> The valuation report includes an extensive overview of the information which has been compiled by our dedicated research team about your property, along with our guaranteed cash offer. Our customers can usually expect to receive our cash offer within <span style="color:red">8 working days</span> of initial contact with us. Following this, our offer will remain open <span style="color:red">for 30 days.</span> If you decided to accept the offer, VP buyers can arrange a completion date that suits you.</p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 3. Acceptance</h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> Once our offer has been accepted, VP Home and properties conduct an internal survey of the property to ensure that the specification and condition of the property is as described. As already mentioned, our customers have <span style="color:red;">30 days</span> to accept our offer and when they have accepted, are free to choose a completion date which is convenient for them. We would also like to reiterate that our offer will be below market value and that at all stages of the process, VP Home and properties buyers have a dedicated Customer Care Team to work with you to provide a quick, easy and stress-free service, allowing you to sell your property fast. </p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 4. How exactly do you reach your valuation of property?</h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> We have a dedicated customer research team who undertake extensive market research and speak to local property agents and surveyors in the area to ascertain an exact market value of your property.</p>
                    <p class="wow fadeInUp" data-wow-delay="500ms"> Whatever reason you may have for wanting to sell your house for cash, here at VP Home and properties buyers we are able to provide you with a personalised valuation and the opportunity to sell your house fast.</p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 5. Is the process entirely confidential? </h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> You can rest assured that the whole process is fully confidential and unburdens you from endless viewings and there is no need for intrusive ‘for sale’ signs outside of your property. There are, however, certain items that remain in the public domain by law, such as the sale price of the property.</p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 6. Will you buy my house if it's currently let to a tenant? </h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> We can buy properties even if there is still a tenant living there, VP Home and properties buyers will simply become the landlords of the property.</p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 7. What if I don’t want to proceed after I have your offer?  </h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> All offers that we make are completely obligation free. VP Home and properties buyers will not tie you into Option Agreements or lengthy agency contracts. Our offers also remain open for <span style="color: red;"> 30 days,</span> so you have plenty of time to consider your options.</p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 8. Will you buy my house if it's being repossessed? </h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> VP Home and properties buyers offer you a quick and hassle free solution to repossession.</p>
                </li>
                <li>
                    <h4 class="wow fadeInUp" data-wow-delay="500ms"> 9. Do you send someone out to the property to value it?  </h4> 
                    <p class="wow fadeInUp" data-wow-delay="500ms"> we will send a representative round to the property to check the details we have are correct. We do require internal access to the property in order to be able to provide an offer for you. </p>
                </li>
            </ol>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/home-sold-a.png" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="img/bg-img/footer.jpg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo.pn" alt="">
                            </div>
                            <p>Here at VP Home and properties buyers we have you, our customer, at the forefront of everything.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> >+234 812 2814 294</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
                                <h6><img src="img/icons/location.png" alt=""> Austria, United Kingdom, Nigeria  </h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <?php
                                $a1 = $conn->query("SELECT * FROM properties order by 'id' DESC LIMIT 10");
                                $d1 = $a1->fetchAll(PDO::FETCH_OBJ);
                                $c1 = $a1->rowCount();
                                if ($c1 > 0) {
                                foreach ($d1 as $key1) {
                                $usepic = $key1->pic;
                                ?>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/pro-img/<?php echo $usepic ?>" alt=""></a>
                                </div>

                                <?php
                                }
                                }
                                ?>
                                
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>