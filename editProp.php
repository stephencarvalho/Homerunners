<?php 
session_start();
include "php/script/config.php";

$_SESSION['edit_id'] = $_GET['edit_id']; 
$editQry = "SELECT * from `post_add` where id = '".$_SESSION['edit_id']."'";
if(!$editCheckQry = mysqli_query($con,$editQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	echo "<script>alert('Connection Error!! ');</script>";
	echo "<script>window.location='displayProp.php';</script>";

	mysqli_close($con);// close connection
	die("");
}

$editProp = mysqli_fetch_assoc($editCheckQry);

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Edit Property</title>

	<!--Import Google Icon Font-->
	<link href="css/googlefonts.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script> 
	<script src="script.js"></script> 

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>



	<style>
		b{
			color:black !important;
		}
		
		.tabs .indicator{
			background-color:red;
		}
		a div { display: none; }
		a:hover div { display: block; }
		#autocomplete::-webkit-input-placeholder{
			color:red;
			font-weight:bold;
		}
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		#map {
			height: 400px;
			width=100%;

		}
		.controls {
			background-color: #fff;
			border-radius: 2px;
			border: 1px solid transparent;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			box-sizing: border-box;
			font-family: Roboto;
			font-size: 15px;
			font-weight: 300;
			height: 29px;
			margin-left: 17px;
			margin-top: 10px;
			outline: none;
			padding: 0 11px 0 13px;
			text-overflow: ellipsis;
			width: 400px;
		}

		.controls:focus {
			border-color: #4d90fe;
		}
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
		.tabs .tab.disabled a {
    color: grey;
   
}



	</style>
</head>
<body>
   <?php include  "mapnav.php"; ?>
	<div class="center">
		<h3> <b>Post Your Property</b></h3>
		<h5><i>It's Easy...It's Simple.. & Yes It's <span style="color:red;">FREE</span></i></h5>
	</div>
	<div class="row " style="background:#9e9e9e; ">
		<div class="col s3 offset-s2" >
			<ul class="tabs">
				<li class="tab col s3 disabled "><a class="active" href="#test1">Step 1</a></li>
				<li class="tab col s3 disabled"><a  href="#test2" >Step 2</a></li>
				<li class="tab col s3 disabled "><a  href="#test3" >Step 3</a></li>
			</ul>
		</div>
	</div>


	<div id="test1" >
		<form action="editProp1.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col s8 offset-s2">
					<div class="card ">
						<div class="card-content ">
							<span class="card-title"><b>User Info</b></span>
							<div class="row">
								<div class="col s12">
									<div class="row">
										<div class="input-field col s5">
											<input placeholder="Enter Name" id="first_name" name="name" type="text" value="<?php echo $editProp['name']; ?>" class="validate" required>
											<label for="first_name">Name</label>
										</div>
										<div class="input-field col s3">
											<input id="moblie" placeholder="Enter Mobile Number" value="<?php echo $editProp['mobile_number']; ?>" name="mobile_number" type="tel" class="validate" required>
											<label for="mobile">Mobile Number</label>
										</div>
										<div class="input-field col s4">
											<input id="email_id" placeholder="Enter Email" value="<?php echo $editProp['email']; ?>" type="email" name="email" class="validate" required>
											<label for="email_id">Email</label>
										</div>

									</div>
									<hr>
									
									
									<span class="card-title"><b>Location</b></span>
									<div id="map"></div>


									<div class="row">
										<div class="input-field col s3">
											<input placeholder=" " id="route" type="text" value="<?php echo $editProp['street']; ?>"  name="street" required>
											<label for="route">Street</label>
										</div>
										<div class="input-field col s3">
											<input placeholder=" " id="locality" type="text" value="<?php echo $editProp['city']; ?>"  name="city" required>
											<label for="locality">City</label>
										</div>
										<div class="input-field col s3">
											<input placeholder=" " id="administrative_area_level_2" value="<?php echo $editProp['locality']; ?>" type="text"  name="locality" required>
											<label for="administrative_area_level_2">Locality</label>
										</div>

									</div>
									<div class="row">
										<div class="input-field col s3">
											<input placeholder=" " id="administrative_area_level_1" value="<?php echo $editProp['state']; ?>" type="text"  name="state" required>
											<label for="administrative_area_level_1">State</label>
										</div>
										<div class="input-field col s3">
											<input placeholder=" " id="country" type="text" value="<?php echo $editProp['country']; ?>"  name="country" required>
											<label for="country">Country</label>
										</div>
										<div class="input-field col s3">
											<input placeholder=" " id="postal_code" type="text" value="<?php echo $editProp['zip_code']; ?>"  name="zip_code" required>
											<label for="postal_code">Zip Code</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s6">
											<input placeholder="Full Address " id="pla" value="<?php echo $editProp['full_address']; ?>"   name="full_address"  >
											<label for="pla"></label>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="input-field col s6">
											<input  id="autocomplete" class="controls" value="<?php echo $editProp['address']; ?>" placeholder="Enter your address" onFocus="geolocate()"  type="text" name="address" required>

										</div>
									</div>
									<span class="card-title"><b>Property Features</b></span>
									<div class="row">
										<div class="col s2">
											<select name="Bedrooms" value="<?php echo $editProp['name'] ?>">
												<option value="<?php echo $editProp['Bedrooms']; ?>" selected><?php echo $editProp['Bedrooms']; ?></option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												
											</select>
											<!--<label>Bedrooms</label>-->
										</div>
										<div class=" col s2">
											<select name="Bathrooms" id="bathrooms"  >
												<option value="<?php echo $editProp['Bathrooms']; ?>"  selected><?php echo $editProp['Bathrooms']; ?></option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												
											</select>
											<!--	<label for="bathrooms">Bathrooms</label>-->
										</div>
										<div class="input-field col s2">
											<input id="floor" placeholder="Floor No." type="number" value="<?php echo $editProp['floor_no']; ?>" class="validate" name="floor_no" required>
											<label for="floor">Floor No.</label>
										</div>
										<div class="input-field col s2">
											<input id="floors" placeholder="Total Floors" type="number" value="<?php echo $editProp['total_floors']; ?>" class="validate" name="total_floors" required>
											<label for="floors">Total Floors</label>
										</div>
									</div><hr>
									<span class="card-title"><b>Area</b></span>
									<div class="row">
										<div class="input-field col s4">
											<input id="area" placeholder="Enter Area" value="<?php echo $editProp['area']; ?>" type="text" class="validate" name="area" required>
											<label for="area">Covered Area</label>
										</div>
										<div class=" col s2">
											<font size="6px">Sq-Ft &#x23cd;</font>

										</div>
										<div class="input-field col s4">
											<a>
												<font size="6px">&#x2753;</font>
												<div><img src="images/area.jpg" /></div>
											</a>
										</div>
									</div><hr>
									<span class="card-title"><b>Property Type</b></span>
									<div class="row">
										<div class="col s12">
											<input  name="prop_type" type="radio" id="new"	value="new" required/>
											<label for="new">New</label>
											<input  name="prop_type" type="radio" id="resale" value="resale"  required />
											<label for="resale">Resale</label>
										</div>
									</div><hr>
									<span class="card-title"><b>Price Details</b></span>
									<div class="row">
										<div class="col s3">
											<h5>Expected Price  &#8377;</h5>
										</div>
										<div class="input-field col s2">
											<select name="crore" required >
												<option value="<?php echo $editProp['crore']; ?>" selected><?php echo $editProp['crore']; ?></option>
												<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option>
											</select>
											<label>Crore</label>
										</div>
										<div class="input-field col s2">
											<select name="lacs" required>
												<option value="<?php echo $editProp['lacs']; ?>" selected><?php echo $editProp['lacs']; ?></option>
												<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option>
											</select>
											<label>Lacs</label>
										</div>

									</div>
									<div class="row">
										<div class="col s12">
											Show Price As:
											<input   type="radio"   name="fixed_negotiable" value="fixed" id="fixed" required/>
											<label for="fixed">Fixed</label>
											<input  type="radio"   name="fixed_negotiable" value="negotiable" id="negotiable" required/>
											<label for="negotiable">Negotiable</label>
										</div>
									</div><hr>



									<div class="row">
										<div class="col s4">
											<button class="btn waves-effect waves-light red" type="submit" name="submit">Submit
												<i class="material-icons right">send</i>
											</button>
											<br>
										</div>								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div id="test2">
		<form action="editProp2.php" method="post" >
			<div class="row">
				<div class="col s8 offset-s2">
					<div class="card ">
						<div class="card-content">
							<span class="card-title"><b>Amenities</b></span>
							
							<div class="row">
								<div class="col s5">
									<p>
										<input type="checkbox" id="Security" value="Security" name="amenities[]" />
										<label for="Security">Security</label>
									</p>
									<p>
										<input type="checkbox" id="Lift" value="Lift" name="amenities[]" />
										<label for="Lift">Ease Of Lift</label>
									</p>
									<p>
										<input type="checkbox" id="Park" value="Park" name="amenities[]" />
										<label for="Park">Nature Park</label>
									</p>
									<p>
										<input type="checkbox" id="Gym" value="Gym" name="amenities[]" />
										<label for="Gym">Gym</label>
									</p>
									<p>
										<input type="checkbox" id="Pool" value="Pool" name="amenities[]" />
										<label for="Pool">Swimming Pool</label>
									</p>
									<p>
										<input type="checkbox" id="Club" value="Club" name="amenities[]" />
										<label for="Club">Relax Club</label>
									</p>
									<p>
										<input type="checkbox" id="Quaters" value="Quaters" name="amenities[]" />
										<label for="Quaters">Security Quaters</label>
									</p>
									<p>
										<input type="checkbox" id="Parking" value="Parking" name="amenities[]" />
										<label for="Parking">Parking Space</label>
									</p>
								</div>
							</div>
							<span class="card-title"><b>Description & Landmarks</b></span>
							<div class="row">
								<div class="input-field col s8">
									<textarea id="textarea1" class="materialize-textarea" length="3000" placeholder="Add Interesting details about your property e.g. East-facing, fully furnished flat with modular kitchen, power back-up for immediate sale." name="description" ><?php echo $editProp['description']; ?></textarea>
									<label for="textarea1">Description</label>

								</div>
							</div>
							<div class="row">
								<div class="input-field col s8">
									<textarea id="textarea2" class="materialize-textarea" length="3000" placeholder="e.g. The Property is close to the metro station & has a reputed school in the vicinity." name="landmarks" value="<?php echo $editProp['landmarks'] ?>"></textarea>
									<label for="textarea2">Landmark</label>

								</div>
							</div>
							<button class="btn waves-effect waves-light red" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>	
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div id="test3" >
		<div class="row">
			<div class="col s8 offset-s2">
				<form enctype="multipart/form-data" action="Upload/upload.php" method="POST">
					<div class="card ">
						<div class="card-content">
							<span class="card-title"><b>Images Upload</b></span>
							<p><font size="2px" color="grey"><i>It's Optional! But, don't forget to upload them later.</i></font></p><br>
							<div class="row">
							<div class="col s8">
								<p>Upload images of Site View, Exterior View, Common Area, Living Room, Bedrooms, Bathrooms, Kitchen, Floor Plan, Master Plan, Location Map, etc...</p><br>
							</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input id="img_name" placeholder="Eg. Bedroom, bathroom, living room, etc" type="text"  name="img_name" required>
									<label for="img_name">Image Name</label> 
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field col s7">
									<div class="btn red">
										<span>File</span>
										<input type="file" name="fileToUpload" id="fileToUpload">
									</div>
									<div class="file-path-wrapper col s3">
										<input class="file-path validate" disabled="true" type="text">
									</div>
								</div>
								<div class="col s5">
									<ul >
									  <li>&#9632;Click Upload To Upload An Image.</li>
									  <li>&#9632;Click Finish Once Your Done Uploading All Your Images.</li>
									 
									</ul>
									
								</div>
							</div>

						

							<div class="row">
								<div class="col s3" style="padding-left: 0px;">
									<button class="btn waves-effect waves-light red" type="submit" value="Upload Image" name="submit" >Upload
										<i class="material-icons right">file_upload</i>
									</button>
								</div>
									<div class="col s6">
								<a class="btn waves-effect waves-light red" href="thankyou.html" name="action">Finish
									<i class="material-icons right">send</i>
								</a>
							</div>
							
						</div>

					</div>
					<p style="color: grey;"><i>*Accepted formats are .jpg, .gif, .bmp & .png. Maximum size allowed is 4 MB. Minimum dimension allowed 600*400 Pixel</i></p>
				</div>
			</div>
		</div>
	</form>

</div>
</div>
</div>



<script>
	$(document).ready(function(){
		$('ul.tabs').tabs();
		$('select').material_select();
	});
      // This sample uses the Place Autocomplete widget to allow the user to search
      // for and select a place. The sample then displays an info window containing
      // the place ID and other information about the place that the user has
      // selected.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?&libraries=places">

      function initMap() {

      	var map = new google.maps.Map(document.getElementById('map'), {
      		center: {lat: 19.2000, lng: 72.8621},
      		zoom: 13
      	});

      	var input = document.getElementById('autocomplete');

      	var autocomplete = new google.maps.places.Autocomplete(input);
      	autocomplete.bindTo('bounds', map);
      	autocomplete.addListener('place_changed', fillInAddress);
      	function fillInAddress() {
	        // Get the place details from the autocomplete object.
	        var place = autocomplete.getPlace();

	        for (var component in componentForm) {
	        	document.getElementById(component).value = '';
	        	document.getElementById(component).disabled = false;
	        }
        	// Get each component of the address from the place details
        	// and fill the corresponding field on the form.
        	for (var i = 0; i < place.address_components.length; i++) {
        		var addressType = place.address_components[i].types[0];
        		if (componentForm[addressType]) {
        			var val = place.address_components[i][componentForm[addressType]];
        			document.getElementById(addressType).value = val;
        		}
        	}
        }

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
        	map: map
        });
        marker.addListener('click', function() {
        	infowindow.open(map, marker);
        });

        autocomplete.addListener('place_changed', function() {
        	infowindow.close();
        	var place = autocomplete.getPlace();
        	if (!place.geometry) {
        		return;
        	}

        	if (place.geometry.viewport) {
        		map.fitBounds(place.geometry.viewport);
        	} else {
        		map.setCenter(place.geometry.location);
        		map.setZoom(17);
        	}


          // Set the position of the marker using the place ID and location.
          marker.setPlace({
          	placeId: place.place_id,
          	location: place.geometry.location
          });
          marker.setVisible(true);

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
          	'<br>' +
          	place.formatted_address);
          infowindow.open(map, marker);
		  //$("#pla").val(place.formatted_address);
		  document.getElementById("pla").value = place.formatted_address;
		});
    }

    var placeSearch, autocomplete;
    var componentForm = {
    	route: 'long_name',
    	locality: 'long_name',
    	administrative_area_level_1: 'long_name',
    	administrative_area_level_2: 'long_name',



    	postal_code: 'long_name',
    	country: 'long_name'
    };



</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap"
async defer></script>
</body>
</html>