<!DOCTYPE html>
<html lang="en">
<?php
 if(isset($_POST['startapp'])){
    $username = sanitize($_POST['username']);
    $password = $_POST['password'];
    $hash = sha1(md5($password));

    if(empty($username) || empty($password)){
      $error = "All fields must be filled to login";
      echo "<script>alert('$error')</script>";
    }else{
      $verify = get_alias('staff','email',$username,'password',$hash);
      if($verify->rowCount() > 0){
        $fetch = $verify->fetchAll(PDO::FETCH_OBJ);
        foreach($fetch as $log){
          $id = $log->id;
          $user = $log->email;
          $surname = $log->surname;
          $passport = $log->passport;
          $encode_id = md5($id);
          session_start();
          $_SESSION['is_admin'] = $encode_id; 
          $_SESSION['username'] = $username; 
          $_SESSION['surname'] = $surname; 
          $_SESSION['passport'] = $passport; 
          $_SESSION['admin_id'] = $id; 

          redirect('user/main.php');
        }
      }else{
        echo "<script>alert('$hash')</script>";

        $error = "Invalid login credentials. Try again";
         echo "<script>alert('$error')</script>";
      }
    }
  }
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ADRON HOMES AND PROPERTIES | <?php echo "$page"; ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/vp.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/body.css"> -->

    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<script type="text/javascript">
$(document).ready(function(e) {
$("#promess").on('submit' ,(function(e) {
e .preventDefault();
$('#loading').show();
$ .ajax({
url : "control.php" , //Url to which the request issend
type : "POST" , //Type of request to be send,called as method
data : new FormData(this), //Data sent to server, a set of key/value pairs(i.e.form fields and values)
contentType : false, //The content type used when sending data to the server.
cache : false , //To unable request pages to be cached
processData : false, //To send DOMDocument or non processed data file it is set to false
beforeSend : function(){
            $('#loading').show();
        },
success: function(data) //A function to be called if request succeeds
{
$('#loading').hide();
alert(data);
window.location.reload(1);
}
});
}));
});
</script>
<script type="text/javascript">
function rep(iden){
$(document).ready(function(e) {
$("#promess"+iden).on('submit' ,(function(e) {
e .preventDefault();
$('#loading'+iden).show();
$ .ajax({
url : "control.php" , //Url to which the request issend
type : "POST" , //Type of request to be send,called as method
data : new FormData(this), //Data sent to server, a set of key/value pairs(i.e.form fields and values)
contentType : false, //The content type used when sending data to the server.
cache : false , //To unable request pages to be cached
processData : false, //To send DOMDocument or non processed data file it is set to false
beforeSend : function(){
            $('#loading'+iden).show();
        },
success: function(data) //A function to be called if request succeeds
{
$('#loading').hide();
alert(data);
window.location.reload(1);
}
});
}));
});
}
</script>
<script type="text/javascript">
$(document).ready(function(e) {
$("#uploadimage").on('submit' ,(function(e) {
e .preventDefault();
$("#message").empty();
$('#loading').show();
$ .ajax({
url : "control.php" , //Url to which the request issend
type : "POST" , //Type of request to be send,called as method
data : new FormData(this), //Data sent to server, a set of key/value pairs(i.e.form fields and values)
contentType : false, //The content type used when sending data to the server.
cache : false , //To unable request pages to be cached
processData : false, //To send DOMDocument or non processed data file it is set to false
beforeSend : function(){
            $('#loading').show();
        },
success: function(data) //A function to be called if request succeeds
{
$('#loading').hide();
alert(data);
window.location.reload(1);
}
});
}));
// Function to preview image after validation
$(function() {
$("#pass").change(function()
{
$("#message").empty(); // Toremove the previous error message
var file = this .files [ 0 ];
var imagefile = file .type ;
var match = [ "image/jpeg" , "image/png" , "image/jpg" ];
if(!((imagefile == match [ 0]) ||(imagefile == match[ 1 ]) || (imagefile == match[ 2 ])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false ;
}
else
{
var reader = new FileReader();
reader .onload = imageIsLoaded ;
reader .readAsDataURL(this.files [0]);
}
});
});
function imageIsLoaded(e) {
$("#pass").css("color" , "green");
$('#image_preview').css("display" , "block");
$('#previewing').attr('src' , e .target .result);
$('#previewing').attr('width' , '10%');
$('#previewing').attr('height' , '10%');
};
});
</script>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="south-load"></div>
    </div>
 -->
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:office@adronhomesproperties.com">office@adronhomesproperties.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:>+234 812 2814 294">+234 812 2814 294</a>
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
                                <li><a href="#process">Our Process</a></li>
                                <li><a href="#Buyer">Buyer Locations</a></li>
                                <li><a href="#property">Property News</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="get">
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
                  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 7%;">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <p class="modal-title" id="myModalLabel" style="color: black; text-align: center; text-transform: capitalize; font-weight: bolder;"><i class="fa fa-lock"></i> Login</p>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>
                     <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="username" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Password</label>
                            <input type="password" name="password" class="form-control" id="phone">
                        </div>
                    <button class="btn btn-danger" type="submit" name="startapp">Login</button>
                    <a data-toggle="modal" data-target="#signup">Sign up here</a> 
                    </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>

                 <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 7%;">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <p class="modal-title" id="myModalLabel" style="color: black; text-align: center; text-transform: capitalize; font-weight: bolder;"><i class="fa fa-lock"></i> Login</p>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>
                     <div class="modal-body">
                    <form id="uploadimage" action ="" method ="post" enctype ="multipart/form-data">
                        <div id ="image_preview"><img id ="previewing" src ="assets/img/Graphic1.jpg"/></div>
                        <hr id ="line">
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="pass" >Upload Passport</label>
                                <input type="file" name="pass" id="pass" class="form-control" accept="image/*">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="sname" >Surname</label>
                                <input type="text" name="sname" id="sname" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="oname" >Other Names</label>
                                <input type="text" name="oname" id="oname" class="form-control">
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender" >Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value=" " selected="">Select...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="country" >Country</label>
                                <input type="text" name="country" id="country" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="number" >Number</label>
                                <input type="number" name="number" id="number" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="password" >Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="cpassword" >Confirm Password</label>
                                <input type="password" name="cpassword" id="cpassword" class="form-control">
                            </div>
                            </div>
                            </div>
                            </div>
                            <button  class="btn btn-success submit" value="Upload" type="submit" name="submit">Submit</button></a>
                            <span id="loading" style="display:none"><img src="../img/core-img/loading.gif"></span>
                    </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>