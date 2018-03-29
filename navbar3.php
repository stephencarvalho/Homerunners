<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--Import Google Icon Font-->
    <link href="css/googlefonts.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script> 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
</head>
	<body>
		<style type="text/css">
			  .right_navbar a
        {
            display: flex;
            float: right;

        }
        
        .right_navbar 
        {
            margin: 0 1rem;
            transition:all ease .3s;
        }
        
        .right_navbar a:hover
        {
            color: red;
            transition:all ease .3s;
        }
        .font2{
		    font-size: 0.8rem;
		    font-family: cursive;
		}
		</style>
		<nav>
		    <div class="nav-wrapper black">
		     <a href="home1.php" class="brand-logo offset-s1"><img src="images/icon.png" height="40px " width="64px" style="vertical-align: middle;"><img src="images/logo.png" class="logo" style="width:240px; height: 56px;"></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li class="right_navbar"><a href="search_prop.php" class="font2">Search Property</a></li>
		        <li class="right_navbar"><a href="postreq.php" class="font2">Post Requirements</a></li>
		       
		         <?php if ( isset( $_SESSION['username'] )) {  ?>
                  <li class="right_navbar"><a href="postad.php" class="font2">Post Ad</a></li>
                    <li class="right_navbar font2"><?php echo "Welcome : ".$_SESSION['username']; ?></li>
                    <li class="right_navbar "><a href="php/script/logout.php" class="font2">Logout<a></li>
                    
                   
                    <?php } else { ?>
                    
                    <?php } ?>
		       
		      </ul>
		    </div>
		</nav>
		 <div id="modal1" class="modal" style=" overflow-x:hidden; overflow-y: hidden; ">
        <div class="row">
            <div class="col s4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/picture1.png" style="height:600px; width:330px ;margin-left:0px;  " >
            </div>
                <div class="col s8">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s2 offset-s2">
                                <i class=" large material-icons prefix" style="margin:10px; font-size: 3rem; ">perm_identity</i>
                            </div>
                            <div class="col s7" style="margin-top: 8px; ">
                                <h5 style="font-weight:bold; font-style:italic; ">Login</h5>
                            </div>
                        </div>
            
                    <form method="post" action="php/script/login.php">
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="email" name="email" class="validate">
                                <label for="icon_prefix" data-error="Enter_Valid_Email" >Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                    <label for="icon_prefix">Enter Password</label>
                                
                            </div>
                        </div>
                        
                        
                       <div class="row">
                            <div class="col s6 offset-s1">  
                                <button class="modal-action modal-close btn waves-effect waves-light  grey darken-3 hoverable" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s5">
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
            <div class="col s4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/picture1.png" style="height:600px; width:330px ;margin-left:0px;  " >
            </div>
                <div class="col s8">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s2 offset-s2">
                                <i class=" large material-icons prefix" style="margin:10px; font-size: 3rem; ">perm_identity</i>
                            </div>
                            <div class="col s7" style="margin-top: 8px; ">
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
                            <div class="input-field col s10 offset-s1">
                                
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="email" class="validate">
                                    
                                    <label for="email" data-error="Enter_Valid_Email" data-success="">Email</label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                    <label for="icon_prefix">Choose Password</label>
                                
                            </div>
                        </div>
                        
                        
                       <div class="row">
                            <div class="col s6 offset-s1">  
                                <button class="modal-action modal-close btn waves-effect waves-light  grey darken-3 hoverable" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s5">
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
    <script type="text/javascript">
    
    </script>
	</body>
</html>
