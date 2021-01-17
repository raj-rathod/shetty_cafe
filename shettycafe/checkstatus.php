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
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">shettyscafe@gmail.com</a><br><a href="#">shettyscafe@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="checkstatus.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Check Reservation Status</h4>
                            </div>
                            <div class="col-lg-12 ">
                                <!--- error section---->
        
                            </div>
                            
                            <div class="col-lg-12 col-sm-12">
                              <fieldset>
                              <input name="email" type="text"  pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="" autocomplete="off"/>
                            </fieldset>
                            </div>
                           
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon" name="submit">Check Status</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <!-----Php Section -->
                    <?php
                         $con = mysqli_connect('localhost', 'root', '', 'shettycafe');
                         if(!$con){
                             echo 'connection error';
                         }

                         if(isset($_POST["submit"])){
                             $email = $_POST["email"];
                             $sql="SELECT * FROM reservation WHERE email='$email'";
                             $run_query=mysqli_query($con,$sql);
                             $count=mysqli_num_rows( $run_query);
                             if($count>0){
                                 $row = mysqli_fetch_array($run_query);
                                 $name = $row["name"];
                                 $time = $row["time"];
                                 $seat = $row["seatcount"];
                                 $date = $row["date"];
                                 $email = $row["email"];
                                 echo "  <div class='card'>
                                 <div class='card-header'>
                                      <div class='row'>
                                          <div class='col-md-3 text-centetr'><h4>Name</h4></div>
                                          <div class='col-md-3 text-centetr'><h4>Time</h4></div>
                                          <div class='col-md-2 text-centetr'><h4>Guests</h4></div>
                                          <div class='col-md-2 text-centetr'><h4>Date</h4></div>
                                          <div class='col-md-2 text-centetr'><h4>Action</h4></div>
                                          
                                 
                                      </div>
                                 </div>
                                 <div class='card-body'>
                                     <div class='row'>
                                         <div class='col-md-3 text-centetr'><h5>$name</h5></div>
                                         <div class='col-md-3 text-centetr'><h5>$time</h5></div>
                                         <div class='col-md-2 text-centetr'><h5>$seat</h5></div>
                                         <div class='col-md-2 text-centetr'><h5>$date</h5></div>
                                         <div class='col-md-2 text-centetr'><h5><div class='btn btn-outline-danger' eid ='$email' id='email' >Cancle</div></h5></div>
                                         
                                
                                     </div>
                                </div>
                               
                             </div>";
                             }else{
                                
                                echo "<script type='text/javascript'>
                                   window.location.href = 'http://localhost/shettycafe/index.php';
                                 </script>";
                             }
                         }
                         
                    ?>
                  
                </div>
            </div>
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

        $("body").delegate("#email","click",function(event){
          var eid=$(this).attr('eid');
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{check:1,eid:eid},
         success : function(data){
             alert(data)
             window.location.href = "http://localhost/shettycafe/index.php";
         }
        })
       });

    </script>
  </body>
</html>