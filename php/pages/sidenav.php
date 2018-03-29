<style type="text/css">
        /* label focus color */
        .input-field input[type=search]:focus + label {
            color: white;
        }
        /* label underline focus color */
        .input-field input[type=search]:focus {
            border-bottom: 1px solid white !important;
            box-shadow: 0 1px 0 0 white !important;
        }
        .input-field label {
            color: white;
        }
          /* icon prefix focus color */
   .input-field .prefix.active {
     color: red;
   }
   .input-field input[type="search"]:focus, .input-field input[type="search"]:focus + label i{
        background-color: transparent;
        color: white;
   }
 
   .input-field input[type="search"]:focus + label i {
    margin-top: 0.3rem;
    font-size: 0.9rem;
   }
   .input-field i {
    margin-top: 0.3rem;
    font-size: 0.9rem;
   }
</style>
<div class="left">
                    <div class="grey lighten-3">
                        <ul class="sidenav center">
                 <div class="nav-wrapper">
      <form action="map3.php" method="post">

        <div class="input-field container">
          <input id="search" type="search" name="location" required>
          <label for="search" style="color: white !important;"><i class="material-icons ">search</i> Search Map</label><br>
          
        </div>
      </form>
    </div>
                            <a href="search_prop.php"><li>Search Property</li></a>
                            <a href="postreq.php"><li>Post Requirements </li></a>
                           
                       		 <?php if ( isset( $_SESSION['username'] )) {  ?>
                              <a href="postad.php"><li>Post Ad</li></a>
                    <a  href="#" class="disp"><li>Display Porperty</li></a>
                    <li class="red"><?php echo "Welcome : ".$_SESSION['username']; ?></li>
                    <a href="php/script/logout.php"><li>Logout</li><a>
                    <a  href="#" class="delete" id="<?php=$_SESSION['email'];?>"><li>Delete Account</li></a>
                    <a class="modal-trigger " href="#modal3"><li>Edit Password</li></a> 
                    
                   
                    <?php } else { ?>
                        <a class="modal-trigger" href="#modal1"><li>Login</li></a> 
                        <a class="modal-trigger" href="#modal2"><li>Sign Up</li></a>
                    <?php } ?>
                    		 <a href="about_us.php"><li>  About Us</li></a>
                    		  <a href="feedback.php"><li>  Contact Us</li></a>
                        </ul>
                    </div>
                </div>