<?php include("include/admin_process.php");?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.Coingalaxy.ltd/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2021 03:36:15 GMT -->
<head>
    
        

        <!--=======Header-Section Starts Here=======-->
        <?php include("include/head.php");?>
        <!--=======Header-Section Ends Here=======-->



        




<!--=======Banner-Section Starts Here=======-->
        <section class="bg_img hero-section-2 left-bottom-lg-max" data-background="home/images/about/hero-bg5.png">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Login</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Login
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->

<section class="contact-section padding-bottom padding-top">
            <div class="container">
                <div class="contact-wrapper padding-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-xl-4 offset-xl-1">
                            <div class="contact-header">
                                <h2 class="title">Admin Login</h2>
                                <p>Enter Username & Password</p>
                            </div>
                        </div>






<div class="col-lg-5 offset-xl-1">
<form method="POST" name=mainform action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact-form"><input type="hidden" name="form_id" value="16110273306893"><input type="hidden" name="form_token" value="2d0b25b5ffcf6c0cc11032ada572cf21">
<?php echo"$fail";?>
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>

<div class="form-group">
<?php echo"$username_err";?>
<label for="name">Username:</label>
<input type="text" value="" name="username" placeholder="<?php echo"$username_err";?>" autofocus required>
 </div>
 
 <div class="form-group">
 <?php echo"$password_err";?>
<label for="name">Password:</label>
<input type="password" name="password" placeholder="<?php echo"$password_err";?>" required>
 </div>
 


<div class="form-group">
<input type="submit" value="Login">
</div>
</form>

</div>
                    </div>
                </div>
            </div>
        </section>
        
<style>
    .contact-form{
        background: #f8f9fa;
    }
    
    .contact-wrapper::before{
        height: calc(100% - 45px);
    }
    
    .contact-wrapper .contact-header{
        margin-bottom: 66px;
    }
</style>
<script src="../widget-v4.tidiochat.com/1_48_0/static/js/render.42c0d66b33e45751ff47.js" async></script>
<!-- ==========Footer-Section Starts Here========== -->
<?php include("include/foot.php");?>
        <!-- ==========Footer-Section Ends Here========== -->

        
    </div>

    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/modernizr-3.6.0.min.js"></script>
    <script src="home/js/plugins.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/magnific-popup.min.js"></script>
    <script src="home/js/jquery-ui.min.js"></script>
    <script src="home/js/wow.min.js"></script>
    <script src="home/js/odometer.min.js"></script>
    <script src="home/js/viewport.jquery.js"></script>
    <script src="home/js/nice-select.js"></script>
    <script src="home/js/owl.min.js"></script>
    <script src="home/js/paroller.js"></script>
    <script src="home/js/contact.js"></script>    
    <script src="home/js/main.js"></script>
<style>
        .goog-te-gadget-simple {
            border: none;
            border-radius: 20px;
            background-color: transparent;
        }

        .goog-te-gadget img {
            display: none;
        }

    </style> 
<script src="../widget-v4.tidiochat.com/1_48_0/static/js/render.42c0d66b33e45751ff47.js" async></script>
<script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>

<?php echo"$yes";?>
<!-- Mirrored from www.Coingalaxy.ltd/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2021 03:36:16 GMT -->
</html>