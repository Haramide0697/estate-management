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
$page = "about-us";

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
                        <h3 class="breadcumb-title">About us</h3>
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
                <h2>Our Team</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">At GP,we believe team work is the key to getting the job done and we stop at nothing short of the best.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">Our Staffs are proactive, diligent, articulate and dedicated men and women with a rare passion for excellent service delivery and customers satisfaction.We bring our combined strengths together to provide the best services to our diverse clients in specific areas of sale and buying of properties. We're entrepreneurial. We approach things with fresh minds and a talent for innovation. We provide the best approach for our customers that bring together technical expertise with hard-nosed practicality and commercial nous.</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Our People</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">With their exceptional insight, expertise and depth of experience, our people are essential to our success.</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Our Values</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Our values define us as a company. They form a coherent set of principles that are relevant across our business and underpin everything we do. They are Integrity, Originality, Long-term focus, and Quality.</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Integrity</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">our corporate culture demands uncompromising and consistent adherence to a well understood set of principles and standards that govern how we behave internally and when dealing with customers. We treat everyone equally and with respect and we are trusted to honour our commitments and deliver on our promises.</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Originality</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Our way of working is built on a tradition of doing things differently. Open to new ideas, curious to find unique perspectives resulting in innovative, inspiring solutions, our approach is to be persistent, have uncompromising attention to detail, yet maintain flexibility. We reward creativity, we have the courage to challenge convention and we always respect differences of opinion.</p>

            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Business Overview</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Creative Transformation captures what we do and how we do it. It underlines the creative mindset and long-term approach that enables us to seek out new perspectives, and original thinking that goes beyond the conventional. It also encapsulates our ability to unlock the potential of places and create vibrant destinations that can engender further growth and create sustainable value for our stakeholders.</p>

            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
            </div>
        </div>
        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/about-us.png" alt="">
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
                        <a href="#advanceSearch" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

<?php
require 'inc/footer.php';
?>