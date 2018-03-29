    <div class="row navbar_bg_color no-margin nav nav_change">

        <!-- sidebar  -->

                 
        <!-- end of sidebar -->

        <div class=" white-text vwrapper col s12 m12 l12">

            <div class="col s1 m1 l1 menu-button button-collapse" data-activates="slide-out">
                    <i class="small material-icons top-bar">remove</i>
                    <i class="small material-icons mid-bar">remove</i>
                    <i class="small material-icons bot-bar">remove</i>
            </div>



            <div class="col s0 m0 l3 left_navbar">
               <a href="home1.php"><img src="images/icon.png" height="40px " width="64px" style="vertical-align: middle;"> <img src="images/logo.png" class="logo" hspace="">    </a> 
            </div>
            
            <div class="col s0 m0 l7 right_navbar ">
                <ul>
                    <a href="search_prop.php"><li>Search Property</li></a>
                    <a href="postreq.php"><li>Post Requirements </li></a>
                    
                    <?php if ( isset( $_SESSION['username'] )) {  ?>
                    <a href="postad.php"><li>Post Ad</li></a>
                     <a  href="#" class="disp"><li>Display Porperty</li></a><!-- jo disp -->
                    <li><?php echo "Welcome : ".$_SESSION['username']; ?></li>
                    <a href="php/script/logout.php"><li>Logout</li><a>
                    
                   
                    <?php } else { ?>
                        <a class="modal-trigger" href="#modal1"><li>Login</li></a> 
                        <a class="modal-trigger" href="#modal2"><li>Sign Up</li></a>
                    <?php } ?>
                </ul>
            
            </div>

        </div>   
    </div>
    