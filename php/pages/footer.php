   <style type="text/css">
       
         a:link
        {
            color:white;
        }
         a:visited
        {
            color:white;
        }
         a:active
        {
            color:black;
        }
         a:hover
        {
            color: red;
            transition:all ease .3s;
        }
        .font3{
        font-size: 0.8rem;
        font-family: cursive;
    }
    .logo
        {
            height:4rem;  
            vertical-align: middle;
        }



    </style>
   <footer class="page-footer #455a64 blue-grey darken-2 fixed "  style="margin-top: 0;">
        <div class="container fixed ">
            <div class="row ">
                <div class="col s6 m6 l6">
                    <h5 class="white-text">
                        <a href="home1.php"><img src="images/logo.png"  class="logo"></a>
                    </h5>
                    <p class="grey-text text-lighten-4 font3">HomeRunners.com is India's No 1 Property portal and has been adjudged as the most preferred property site in India, by independent surveys. The portal provides a platform for property buyers and sellers to locate properties of interest and source information on the real estate space in a transparent and unambiguous manner.
                    </p>
                </div>
                <div class="col s4 m4 l4 offset-s2 offset-m2 offset-l2 "><br><br>
                    <div class="white-text font3" ><div style="font-size:1.25rem; font-weight:bold; font-weight:bold; text-decoration: underline;">HomeRunners Essentials</div>
                        <ul>
                          <li><a  href="home1.php" >Home</a></li>
                          <li><a  href="postad.php">Sell/Rent Property</a></li>
                          <li><a  href="postreq.php">Post Requirements</a></li>
                          <li><a  href="about_us.php">About Us</a></li>
                          <li><a  href="feedback.php">Contact Us</a></li>
                          
                          
                          <?php if ( isset( $_SESSION['username'] )) {  ?>
                            <li><?php echo "Welcome : ".$_SESSION['username']; ?></li>
                            <li><a href="php/script/logout.php">Logout<a></li>
                          <?php } else { ?>
                           
                          <?php } ?>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
        <div class="footer-copyright black">
            <div class="container">
                All trademarks, logos and names are properties of their respective owners. All Rights Reserved. &#169; Copyright 2016 HomeRunners Services Limited.  
               
            </div>
        </div>
    </footer>
     <div id="modal1" class="modal" style=" overflow-x:hidden; overflow-y: hidden; ">
        <div class="row">
            <div class="col s4 m4 l4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/picture1.png" style="height:37.5rem; width:20.63rem ;margin-left:0px;  " >
            </div>
                <div class="col s8 m8 l8">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s2 m4 l4 offset-s2 offset-m2 offset-l2">
                                <i class=" large material-icons prefix" style="margin:0.625rem; font-size: 3rem; ">perm_identity</i>
                            </div>
                            <div class="col s7" style="margin-top: 0.5rem; ">
                                <h5 style="font-weight:bold; font-style:italic; ">Login</h5>
                            </div>
                        </div>
            
                    <form method="post" action="php/script/login.php">
                        <div class="row">
                            <div class="input-field col s10 m10 l10 offset-s1 offset-m1 offset-l1">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="email" name="email" class="validate">
                                <label for="icon_prefix" data-error="Enter_Valid_Email" >Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 m10 l10 offset-s1 offset-m1 offset-l1">
                                
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                    <label for="icon_prefix">Enter Password</label>
                                
                            </div>
                        </div>
                        
                        
                       <div class="row">
                            <div class="col s6 m6 l6  offset-s1 offset-m1 offset-l1">  
                                <button class="modal-action modal-close btn waves-effect waves-light  grey darken-3 hoverable" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s5 m5 l5">
                                <button class="modal-action modal-close btn waves-effect waves-light  grey darken-3 hoverable" type="reset" name="action">Cancel
                                    <i class="material-icons right">clear</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <div id="modal2" class="modal" style=" overflow-x:hidden; overflow-y: hidden; ">
            <div class="row">
            <div class="col s4 m4 l4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/picture1.png" style="height:37.5rem; width:20.63rem ;margin-left:0px;  " >
            </div>
                <div class="col s8 m8 l8">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s2 m2 l2 offset-s2 offset-m2 offset-l2">
                                <i class=" large material-icons prefix" style="margin:0.625rem; font-size: 3rem; ">perm_identity</i>
                            </div>
                            <div class="col s7" style="margin-top: 0.5rem; ">
                                <h5 style="font-weight:bold; font-style:italic; ">Sign Up</h5>
                            </div>
                        </div>
            
                    <form method="post" action="php/script/register.php" >
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" name="username" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="input-field col s10 m10 l10 offset-s1 offset-m1 offset-l1">
                                
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="email" class="validate">
                                    
                                    <label for="email" data-error="Enter_Valid_Email" data-success="">Email</label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 m10 l10 offset-s1 offset-m1 offset-l1">
                                
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                    <label for="icon_prefix">Choose Password</label>
                                
                            </div>
                        </div>
                        
                        
                       <div class="row">
                            <div class="col s6 m6 l6 offset-s1 offset-m1 offset-l1">  
                                <button class="modal-action modal-close btn waves-effect waves-light  grey darken-3 hoverable" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s5 m5 l5">
                                <button class="modal-action modal-close btn waves-effect waves-light  grey darken-3 hoverable" type="reset" name="action">Reset
                                    <i class="material-icons right">cached</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
