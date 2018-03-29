    <div class="row navbar_bg_color no-margin nav nav_change">

        <!-- sidebar  -->

                 
        <!-- end of sidebar -->

        <div class=" white-text vwrapper col s12">

            <div class="col s1 menu-button button-collapse" data-activates="slide-out">
                   
            </div>



            <div class="col s3 left_navbar">
               <a href="home1.php"><img src="images/icon.png" height="40px " width="64px" style="vertical-align: middle;"><img src="images/logo.png" class="logo" hspace="">    </a> 
            </div>
        
            <div class="col s7 right_navbar ">
                <ul>
                    <a href="search_prop.php"><li>Search Property</li></a>
                    <a href="postreq.php"><li>Post Requirements </li></a>
                    
                    <?php if ( isset( $_SESSION['username'] )) {  ?>
                    <a href="postad.php"><li>Post Ad</li></a>
                    <li><?php echo "Welcome : ".$_SESSION['username']; ?></li>
                    <li><a href="php/script/logout.php">Logout<a></li>
                    
                   
                    <?php } else { ?>
                       
                    <?php } ?>
                </ul>
            
            </div>

        </div>   
    </div>