<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Shetty's Cafe - Restaurant </title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php
               include("header_check.php");     
    ?> 
    
    <!-- ***** Header Area End ***** -->
  
               
    <!-- ***** Main Banner Area Start ***** -->
    


    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 align-self-center">
                    
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="admin.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Admin LogIn</h4>
                            </div>
                            <div class="col-lg-12 ">
                                <!--- error section---->
        
                            </div>
                            
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="uname" type="text"   placeholder="Username" required="" autocomplete="off"/>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="psw" type="password"   placeholder="Password" required="" autocomplete="off"/>
                            </fieldset>
                            </div>
                           
                            <div class="col-lg-12 mt-3">
                              <fieldset>
                                <button type="submit"  class="btn btn-primary" name="submit">Log In</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
               $con = mysqli_connect('localhost', 'root', '', 'shettycafe');
               if(!$con){
                   echo 'connection error';
               }
               if(isset($_POST["submit"])){
                   $uname = $_POST["uname"];
                   $psw = $_POST["psw"];
                   $sql="SELECT * FROM admin WHERE username='$uname'and password='$psw'";
                   $run_query=mysqli_query($con,$sql);
                   $count=mysqli_num_rows( $run_query);
                   if ($count > 0) 
                   {
                       session_start();
                       $_SESSION["admin"]=$uname;
                       echo "<script type='text/javascript'>
                                   window.location.href = 'http://localhost/shettycafe/admin_profile.php';
                            </script>";
                   }else{
                    echo "<script type='text/javascript'>
                    window.location.href = 'http://localhost/shettycafe/index.php';
                  </script>";
                   }
               }
            
            ?>
            
        </div>
    </section>
   
    <!-- ***** Reservation Area Ends ***** -->

    
    
    <!-- ***** Footer Start ***** -->
  <?php
    include("footer.php");
  ?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>