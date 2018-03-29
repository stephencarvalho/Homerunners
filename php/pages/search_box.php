 <div class="row no-margin" style="background-image: url(images/bg4.jpg); height: 36rem; background-size: cover;">
    <div class="bg-wrapper" ></div>
    <!--   SEARCH BAR     -->
    <div class="row" style=" color : black;">
        <form class=""  action="sea_display.php" method="post">
            <div class="search_box">

                <input type="search" class="col s4" name="search" id="search" placeholder="Enter Landmark, Location or Project" required />
                <div class="col s6">
                   
                    <div class="col s6 budget-dropdown" >
                       
                        <select required name="budget" >
                            <option value="1000000000"  selected  >Max Budget</option>
                          
                            <option value="5000000"> 50 Lacs</option>
                            <option value="6000000"> 60 Lacs</option>
                            <option value="7000000"> 70 Lacs</option>
                            <option value="8000000"> 80 Lacs</option>
                            <option value="9000000"> 90 Lacs</option>
                            <option value="10000000">1 Crore</option>
                            <option value="20000000">2 Crore</option>
                            <option value="50000000">5 Crore</option>
                            <option value="100000000"> 10 Crore</option>
                            <option value="200000000"> 20 Crore</option>
                            <option value="500000000"> 50 Crore</option>
                            <option value="1000000000"> 100 Crore</option>
                        </select>
                    </div>
                    <div class="col s4 bhk-dropdown" >
                        <select required class="initialized" name="bhk">
                            <option  value = 6 selected>Bedrooms </option>
                            <option value="1">1BHK</option>
                            <option value="2">2BHK</option>
                            <option value="3">3BHK</option>
                            <option value="4">4BHK</option>
                            <option value="5">5BHK</option>
                           

                        </select>
                    </div>
                </div>
                <button class=" col s2 btn-large search-btn waves-effect waves-darkred accent-4"  >
                    <b><i class="material-icons  " style="    height: 31px; ">search</i></b>
                </button>

            </div>
        </form>




    </div>    
</div>