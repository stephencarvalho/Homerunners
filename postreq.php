<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post Requirements</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--Import Google Icon Font-->
    <link href="css/googlefonts.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/form.css"/>

<script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
    

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>

    <link type="text/css" rel="stylesheet" href="css/pagecont.css"/>
    <style>
        .input-field label {
      color: #000;
    }
    /* label focus color */
    .input-field input[type=text]:focus + label {
      color: red;
    }
    .input-field input[type=tel]:focus + label {
      color: red;
    }
    .input-field input[type=email]:focus + label {
      color: red;
    }

    .input-field input[type=number]:focus + label {
      color: red;
    }
    .input-field textarea.materialize-textarea:focus + {
      color: red;
    } 
    

    /* label underline focus color */
    .input-field input[type=text]:focus {
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;
    }
    .input-field input[type=tel]:focus {
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;
    }
    .input-field input[type=email]:focus {
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;
    }
    
    .input-field input[type=number]:focus {
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;
    }

    input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea:focus {

      border-bottom: 1px solid #000;

    }
    textarea.materialize-textarea {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid #000;
      border-radius: 0;
      outline: none;
      height: 3rem;
      width: 100%;
      font-size: 1rem;
      margin: 0 0 15px 0;
      padding: 0;
      box-shadow: none;
      box-sizing: content-box;
      transition: all .3s;
    }
    textarea.materialize-textarea:focus:not([readonly]){
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;

    }
    textarea.materialize-textarea:focus + label:not([readonly]){
      color: red;
    }

    input[type="radio"]:checked+label:after {

      border: 2px solid red;
      background-color: red;

    }
    label{
      color:black;
    }
    .dropdown-content li>a, .dropdown-content li>span {

      color: #black;

    }

    .select-wrapper input.select-dropdown {

      border-bottom: 1px solid #000;
    }
    .dropdown-content li>a, .dropdown-content li>span {

      color: #000;

    }
    input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]){
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;
    }
    [type="checkbox"]:checked+label:before {
      
      border-right: 2px solid red;
      border-bottom: 2px solid red;
      
    }
        /* navbar css */
        .
        /* navbar css end*/
        .logo
        {
            height:4rem;  
            vertical-align: middle;
        }
        .footer-copyright
        {
            border-top :1px solid #da251c !important;
            border: 10px;
            background-color: black;
        }
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            flex: 1 0 auto;
        }
        .navbar_bg_color
        {
            background-color: rgba(0,0,0,1);
            width: 100%;
        }

        main {

        }
        ul#menu li {
    display:inline;
}
.liSpacing{
      padding-left: 25px !important;
    padding-right: 15px;
}
    </style>

</head>
<body>

    <!-- ____________________________________________________NAV BAR START____________________________________________________--> 

    <?php include  "php/pages/navbar1.php"; ?>
    <?php include  "php/pages/modal.php"; ?>
    <!-- ____________________________________________________NAV BAR END____________________________________________________--> 
    <div class="container">
        <div class="card" style="margin-top:171px; border: 1px dashed red">
            <div class="row" style="color: black">

                <form class=" col s12 " style="font-size:1em;margin:30px;" id="postreq">
                    <style type="text/css"> 
              #hr6:after {
              content:"Tell Us Your Property Requirement";
              font-weight: bolder;

             
            
            }
          </style>

          
                    <span ><hr id="hr6" class="container" style=" margin-bottom: 30px ;"></span>
                    <br>
                    <br>
                    <div class="row">

                        <div class="col s3">  

                        </div> 
                        <div class="input-field col s6">

                              <input placeholder="Enter Locality" id="locality1" name="locality1" type="text" placeholder="Eg.Malad, Andheri, Bandra, etc." required>
                              <label for="locality1">Enter Locality</label>
                       

                      </div>
                      <div class="col s3 ">
                        <p>BHK:</p>
                       <ul id="menu">
                            <li>  <input name="bhk" type="radio" id="1bhk" value= 1  />
                                <label for="1bhk" class="liSpacing">1</label>
                            </li>
                             <li>  <input name="bhk" type="radio" id="2bhk" value= 2  />
                                <label for="2bhk" class="liSpacing">2</label>
                            </li>
                             <li>  <input name="bhk" type="radio" id="3bhk" value= 3 />
                                <label for="3bhk" class="liSpacing" >3</label>
                            </li>
                             <li>  <input name="bhk" type="radio" id="4bhk" value= 4 />
                                <label for="4bhk" class="liSpacing">4</label>
                            </li>
                             <li>  <input name="bhk" type="radio" id="5bhk" value= 5 />
                                <label for="5bhk" class="liSpacing">5</label>
                            </li>
                         
                        </ul>  

                    </div>
                    
                </div>
                <div class="row" >

                    <div class="col s4">
                        Maximum Budget:
                        <select name="budget">
                            <option value= 500000000 disabled selected >Budget</option>
                            <option value= 1000000> &#8377;10 Lacs</option>
                            <option value= 2000000> &#8377;20 Lacs</option>
                            <option value= 3000000> &#8377;30 Lacs</option>
                            <option value= 4000000> &#8377;40 Lacs</option>
                            <option value= 5000000> &#8377;50 Lacs</option>
                            <option value= 6000000> &#8377;60 Lacs</option>
                            <option value= 7000000> &#8377;70 Lacs</option>
                            <option value= 8000000> &#8377;80 Lacs</option>
                            <option value= 9000000> &#8377;90 Lacs</option>
                            <option value= 10000000>&#8377;1 Crore</option>
                            <option value= 20000000>&#8377;2 Crore</option>
                            <option value= 50000000>&#8377;5 Crore</option>
                            <option value= 100000000> &#8377;10 Crore</option>
                            <option value= 200000000> &#8377;20 Crore</option>
                            <option value= 500000000> &gt&#8377;50 Crore</option>
                        </select>


                    </div>
                    <div class="input-field col s4" >

                      <input placeholder="Area" id="area1" name="area1"  type="text" class="validate" style="margin-top: 7px;" required>
                      <label for="area1">Minimum Area</label>
                  </div>
                </div>
                <div class="row">
                    <p>Amenities</p>
                     <ul id="menu" >
                     <li >
                                 
                                        <input type="checkbox" id="Security" value="Security" name="amenities[]"  />
                                        <label for="Security" class="liSpacing">Security</label>
                                    
                                    </li>
                                   <li>
                                    
                                        <input type="checkbox" id="Lift" value="Lift" name="amenities[]" />
                                        <label for="Lift" class="liSpacing">Ease Of Lift</label>
                                    
                                    </li>
                                   <li>
                                    
                                        <input type="checkbox" id="Park" value="Park" name="amenities[]" />
                                        <label for="Park" class="liSpacing">Nature Park</label>
                                    
                                    </li>
                                   <li>
                                    
                                        <input type="checkbox" id="Gym" value="Gym" name="amenities[]" />
                                        <label for="Gym" class="liSpacing">Gym</label>
                                    
                                    </li>
                                   <li>
                                    
                                        <input type="checkbox" id="Pool" value="Pool" name="amenities[]" />
                                        <label for="Pool" class="liSpacing">Swimming Pool</label>
                                    
                                    </li>
                                   <li>
                                    

                                        <input type="checkbox" id="Club" value="Club" name="amenities[]" />
                                        <label for="Club" class="liSpacing">Relax Club</label>
                                    
                                    </li>

                                   <li>
                                    
                                        <input type="checkbox" id="Quaters" value="Quaters" name="amenities[]" />
                                        <label for="Quaters" class="liSpacing">Security Quarters</label>
                                    
                                    </li>
                                  <li>
                                    
                                        <input type="checkbox" id="Parking" value="Parking" name="amenities[]" />
                                        <label for="Parking" class="liSpacing">Parking Space</label>
                                    
                                    </li>
                                </ul>
                </div>
                 <div class="row">
                  <div class="col s8">
                    <p>Property Preference: </p>
                     <ul id="menu" >
                                   <li>
                                    
                                        <input type="radio" id="new" value="new" name="resale" />
                                        <label for="new" class="liSpacing">New</label>
                                    
                                    </li>
                                   <li>
                                    
                                        <input type="radio" id="resale" value="resale" name="resale" />
                                        <label for="resale" class="liSpacing">Resale</label>
                                    
                                    </li>
                                  </ul>
                  </div>
                </div>
                <div class="row">
                  
              
                    <div class="input-field col s4">
                      <input placeholder="Enter Full Name" id="first_name" name="full_name" type="text" class="validate" required>
                      <label for="first_name">Full Name</label>
                  </div>
                  <div class="input-field col s3 ">
                    <input id="icon_telephone" type="tel" name="telephone" class="validate" required>
                    <label for="icon_telephone">Telephone</label>
                    </div>
                      <div class="input-field col s4 ">

                        <input id="email" placeholder="Enter your Email Id" type="email" name="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>

                
            </div>
            <div class="row"> 
                <div class="col s12">
                    <input type="checkbox" class="" id="filled-in-box"  required/>
                    <label for="filled-in-box">I Agree to term & conditions* of homerunners</label>
                </div>

            </div>
            
            
        </form>
        <div class="row">
                <div class="col s6 offset-s4">
                    <button class="btn waves-effect waves-light red" type="submit" id="postrqbtn" name="action">POST NOW
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </div>
    </div>
</div>
</div>
<!-- ____________________________________________________FOOTER START____________________________________________________--> 

<?php include "php/pages/footer.php" ?>
<!-- ____________________________________________________FOOTER END____________________________________________________--> 
<script language="javascript">
    $(document).ready(function(){
       $("#postrqbtn").on('click',function(){
      $.post("php/script/post_req.php",$("#postreq").serializeArray(),function(data){
        console.log(data);
        switch(data){
          
          case '0':
          console.log(data)
        swal({   title: "Error!",   text: "Values are not set!",   type: "error",   confirmButtonText: "Ok" });
      break;
      case '1':
        swal({   title: "Error!",   text: "Enter all values!",   type: "error",   confirmButtonText: "Ok" });
      break;
      case '2':
        swal({   title: "Error!",   text: "Connection Error!",   type: "error",   confirmButtonText: "Ok" });
      break;
      case '3':
        swal({   title: "Error!",   text: "Connection Error !",   type: "error",   confirmButtonText: "Enter again ?" });
      break;
      case '4':
        swal({   title: "Error!",   text: "No Property Found :( !",   type: "error",   confirmButtonText: "Enter again?" });
      break;
      default :
        swal({   title: "Thank you for posting",   text: "You will shortly receive mails ", confirmButtonColor: "#DD6B55",   confirmButtonText: "OK",   closeOnConfirm: false}, function(isConfirm){if(isConfirm){location.reload()}});
      break;
        }
      })
    })

        $(".button-collapse").click(function(){
            $(".button-collapse i").toggleClass("active");
        });


        $('.materialboxed').materialbox();
        
        $('.modal-trigger').leanModal({
              dismissible: true, // Modal can be dismissed by clicking outside of the modal
              opacity: .5, // Opacity of modal background

              in_duration: 300, // Transition in duration
              out_duration: 300, // Transition out duration
              
          });
        $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
  }
  );

        $('.carousel').carousel();

        
    });
    <!-- nav bar change -->
    

    $(function() {

        $("h2")
        .wrapInner("<span>")

        $("h2 br")
        .before("<span class='spacer'>")
        .after("<span class='spacer'>");

    });
    
    
    $(document).ready(function() {
        $('select').material_select();
    });
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
   




</script>
</body>
</html>