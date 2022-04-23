<?php
require 'core/connection.php';
require'inc/header.php';
?>
<?php 
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
$page = "home";

$inn = array('ip' => $userip,
                   'page' => $page, 
                   'min' => $min, 
                   'hour' => $hour, 
                   'day' => $day, 
                   'month' => $month, 
                   'year' => $year, 

                    );
create('visitors',$inn);
 ?>

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/feature6.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">ADRON HOMES AND PROPERTIES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/slide2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">ADRON HOMES AND PROPERTIES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/feature6.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms"> ADRON HOMES AND PROPERTIES </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

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
                        <form method="get" id="advanceSearch">
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

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Featured Property -->
<?php
if (isset($_GET['search'])) {
    $searchname = $_GET['search'];
    if (empty($searchname)) {
        redirect('index.php');
    }else{
$a = $conn->query("SELECT * FROM properties WHERE status = 'not acquired' AND rent_sell LIKE '%$searchname%' || type_of_house LIKE '%$searchname%' || price LIKE '%$searchname%' || category LIKE '%$searchname%' || location_state LIKE '%$searchname%' || location_country LIKE '%$searchname%' || location_details LIKE '%$searchname%' || summary_of_house LIKE '%$searchname%' || number_room LIKE '%$searchname%' || size LIKE '%$searchname%'");
$d = $a->fetchAll(PDO::FETCH_OBJ);
$c = $a->rowCount();
if ($c > 0) {
 if (!isset($_GET['pg'])) {

                $c = 21;
                $num = 0;

                }else{
                $page = $_GET['pg'];
                $c = 21;
                $num = $page;
            }

            if (empty($page)) {
                $c = 21;
                $num = 0;
            }
            $a = $conn->query("SELECT * FROM properties WHERE status = 'not acquired' AND rent_sell LIKE '%$searchname%' || type_of_house LIKE '%$searchname%' || price LIKE '%$searchname%' || category LIKE '%$searchname%' || location_state LIKE '%$searchname%' || location_country LIKE '%$searchname%' || location_details LIKE '%$searchname%' || summary_of_house LIKE '%$searchname%' || number_room LIKE '%$searchname%' || size LIKE '%$searchname%' order by id DESC LIMIT $num, $c");
                $b = $a->fetchAll(PDO::FETCH_OBJ);
                $c = $a->rowCount();
            }
                if ($c > 0) {
                    foreach ($b as $key) {
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
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <a data-toggle="modal" data-target="#accept<?php echo $id; ?>" onclick="rep('<?php echo $id; ?>');">
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
                    </a>
                    </div>
                </div>

                    <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 12%;">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <p class="modal-title" id="myModalLabel" style="color: black; text-align: center; text-transform: capitalize; font-weight: bolder;">Reply us  in respect of this property</p>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>
                     <div class="modal-body">
                        <img src="img/pro-img/<?php echo $pic ?>" width="100%">
                        <hr>
                    <form method="post" id="promess<?php echo $id; ?>">
                         <div class="form-group" style="display: none;">
                            <input type="text" name="iden" value="<?php echo $id ?>" class="form-control">
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message col-md-6">Your Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-danger" type="submit" value="pmess" name="pmess">Send</button>
                    <span id="loading<?php echo $id; ?>" style="display:none"><img src="img/core-img/loading.gif"></span>
                    </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
<?php
}
}else{
?>

                    <div class="alert alert-danger">
                        <h1>Sorry! we could not find what you have searched for... Please Go back to home</h1>
                    </div>

<?php
}
?>
            </div>

                <div class="row">
                <div class="col-md-6 col-xs-6 col-sm-6">

                <?php
                $aa = $conn->query("SELECT * FROM properties WHERE status = 'not acquired'");
                $bb = $aa->fetchAll(PDO::FETCH_ASSOC);
                $cc = $aa->rowCount();

                if (!isset($_GET['pg'])){

                    $nws = 21;
                }else{
                $th = $_GET['pg'];

                    $nws =$th+21;

            }
            if ( $cc > $nws ) {
            

                ?>
                <a href="?search=<?php echo"$searchname" ?>&pg=<?php echo"$nws"?>"><button class="btn btn-danger btn-xs pull-left"><i class="fa fa-chevron-left"> </i> Previous</button></a>

        <?php       
    }
        ?>  
                    </div>


                <div class="col-md-6 col-xs-6 col-sm-6">
                <?php
                if (!isset($_GET['pg'])){

                    $nw = 0;
                }else{
                $th = $_GET['pg'];

                    $nw =$th-21;

            } if ($nw >=  0) {
            

                ?>
                
                <a href="?search=<?php echo"$searchname" ?>&pg=<?php echo"$nw"?>" ><button class="btn btn-danger btn-xs pull-right"><i class="fa fa-chevron-right"> </i> Next </button></a><br>
                

                <?php
        }
        ?>

    <?php
    }
}else{
?>


<?php


$a = $conn->query("SELECT * FROM properties WHERE status = 'not acquired' order by 'id' DESC");
$d = $a->fetchAll(PDO::FETCH_OBJ);
$c = $a->rowCount();
if ($c > 0) {
 if (!isset($_GET['pg'])) {

                $c = 21;
                $num = 0;

                }else{
                $page = $_GET['pg'];
                $c = 21;
                $num = $page;
            }

            if (empty($page)) {
                $c = 21;
                $num = 0;
            }
                $a = $conn->query("SELECT * FROM properties WHERE status = 'not acquired' order by id DESC LIMIT $num, $c");
                $b = $a->fetchAll(PDO::FETCH_OBJ);
                $c = $a->rowCount();
            }
                if ($c > 0) {
                    foreach ($b as $key) {
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
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms"><a data-toggle="modal" data-target="#accept<?php echo $id; ?>" onclick="rep('<?php echo $id; ?>');">
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
                    </a>
                    </div>
                </div>


                     <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 12%;">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <p class="modal-title" id="myModalLabel" style="color: black; text-align: center; text-transform: capitalize; font-weight: bolder;">Reply us  in respect of this property</p>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>
                     <div class="modal-body">
                        <img src="img/pro-img/<?php echo $pic ?>" width="100%">
                        <hr>
                    <form method="post" id="promess<?php echo $id; ?>">
                         <div class="form-group" style="display: none;">
                            <input type="text" name="iden" value="<?php echo $id ?>" class="form-control">
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message col-md-6">Your Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-danger" type="submit" value="pmess" name="pmess">Send</button>
                    <span id="loading<?php echo $id; ?>" style="display:none"><img src="img/core-img/loading.gif"></span>
                    </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
<?php
}
}
?>
            </div>

                <div class="row">
                <div class="col-md-6 col-xs-6 col-sm-6">

                <?php
                $aa = $conn->query("SELECT * FROM properties WHERE status = 'not acquired'");
                $bb = $aa->fetchAll(PDO::FETCH_ASSOC);
                $cc = $aa->rowCount();

                if (!isset($_GET['pg'])){

                    $nws = 21;
                }else{
                $th = $_GET['pg'];

                    $nws =$th+21;

            }
            if ( $cc > $nws ) {
            

                ?>
                <a href="?pg=<?php echo"$nws"?>"><button class="btn btn-danger btn-xs pull-left"><i class="fa fa-chevron-left"> </i> Previous</button></a>

        <?php       
    }
        ?>  
                    </div>


                <div class="col-md-6 col-xs-6 col-sm-6">
                <?php
                if (!isset($_GET['pg'])){

                    $nw = 0;
                }else{
                $th = $_GET['pg'];

                    $nw =$th-21;

            } if ($nw >=  0) {
            

                ?>
                
                <a href="?pg=<?php echo"$nw"?>" ><button class="btn btn-danger btn-xs pull-right"><i class="fa fa-chevron-right"> </i> Next </button></a><br>
                

                <?php
        }
        ?>
<?php
}
?>


        </div>
        </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

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

    <!-- ##### Editor Area Start ##### -->
    <section class="south-editor-area d-flex align-items-center" id="process">
        <!-- Editor Content -->
        <div class="editor-content-area" style="text-align: justify;">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Our Process</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Here at Adron Home and properties buyers we have you, our customer, at the forefront of everything. we are firmly committed to transparency, integrity and confidentiality.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">We are completely aware that many of our customers approach us when they are in difficulties, and after all, no one deserves a nasty surprise during such times.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">We complete quick house sales on a daily basis because we constantly adapt to the new challenges that arise every day in the property market.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">With guaranteed funding and an established track record we are uniquely placed to purchase your home within days.</p>
            <p class="wow fadeInUp" data-wow-delay="500ms">We are incredibly proud of the fact that we have assisted a wealth of individuals and couples in selling their house or properties quickly with minimal fuss. This has reinforced our leading reputation within the industry and this is reflected in the numerous positive reviews that we have received.</p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/OurProcess_page.jpg" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

        <!-- ##### Editor Area Start ##### -->
    <section class="south-editor-area d-flex align-items-center" id="property">
        <!-- Editor Content -->
        <div class="editor-content-area" style="text-align: justify;">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Property News</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Beginning your home search can be an overwhelming and daunting task. Our resident home and property news team always keeps a close eye on the housing market – from economic factors to emerging house-buying trends – so we can bring you the very latest in Nigeria and abroad property news</p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/house.jpg" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

     <!-- ##### Editor Area Start ##### -->
    <section class="south-editor-area d-flex align-items-center" id="Buyer">
        <!-- Editor Content -->
        <div class="editor-content-area" style="text-align: justify;">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <h2>Buyer Locations</h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">It’s true we buy any house and properties in any location across the country in Nigeria and in United Kingdom, Canada and in every U.S. State and Washington, D.C. It doesn’t matter if you live in Virginia, Iowa, Texas, or any other part of the world; if we have a client for it we will buy your property. But, if you’re more comfortable meeting us at one of our preferred Partner locations, we’ve got you covered there too.</p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="img/icons/phone-call.png" alt=""> +234 812 2814 294</h6>
                <h6><img src="img/icons/envelope.png" alt=""> office@vibadiaproperties.com</h6>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="img/bg-img/locations.jpg" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->
    <?php
    require 'inc/footer.php';

    echo sha1(md5("admin"));
    ?>