<div id="modal1" class="modal" style=" overflow-x:hidden; overflow-y: hidden; ">
        <div class="row">
            <div class="col s4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/modal.jpg" style="height:600px; width:330px ;margin-left:0px;  " >
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
            
                    <form id="form1">
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
                        
                        
                    </form>
                       <div class="row">
                            <div class="col s6 offset-s1">  
                                <div class="showcase sweet">
                                <button class="modal-action modal-close btn waves-effect waves-light  red hoverable" type="submit" id="loginbtn" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                </div>
                            </div>
                            <div class="col s5">
                                <button class=" btn waves-effect waves-light  red hoverable" type="reset" id="resetbtn1" name="action">Cancel
                                    <i class="material-icons right">clear</i>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
    <div id="modal2" class="modal" style=" overflow-x:hidden; overflow-y: hidden; ">
            <div class="row">
            <div class="col s4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/modal.jpg" style="height:600px; width:330px ;margin-left:0px;  " >
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
            
                    <form method="post" id="form2" >
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
                        
                        
                       
                    </form>
                    <div class="row">
                            <div class="col s6 offset-s1">  
                                <button class="modal-action modal-close btn waves-effect waves-light  red hoverable" type="submit" name="action" id="signbtn">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s5">
                                <button class="btn waves-effect waves-light red hoverable" type="reset" name="action" id="resetbtn">Reset
                                    <i class="material-icons right">cached</i>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
     <div id="modal3" class="modal" style=" overflow-x:hidden; overflow-y: hidden; color: black;">
            <div class="row">
            <div class="col s4 login_bg" style="margin:none;padding-left: 0px; padding-right: 0px; "  >
                    <img src="images/modal.jpg" style="height:600px; width:330px ;margin-left:0px;  " >
            </div>
                <div class="col s8">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s2 offset-s2">
                                <i class=" large material-icons prefix" style="margin:10px; font-size: 3rem; ">perm_identity</i>
                            </div>
                            <div class="col s7" style="margin-top: 8px; ">
                                <h5 style="font-weight:bold; font-style:italic; ">Change Password</h5>
                            </div>
                        </div>
            
                    <form method="post" id="form3" >
                      
                        <div class="row"> 
                            <div class="input-field col s10 offset-s1">
                                
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" name="new_password" class="validate">
                                    
                                    <label for="email" data-success="">New Password</label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="icon_prefix" type="password" name="again_password" class="validate">
                                    <label for="icon_prefix">Enter Again</label>
                                
                            </div>
                        </div>
                        
                        
                       
                    </form>
                    <div class="row">
                            <div class="col s6 offset-s1">  
                                <button class="modal-action modal-close btn waves-effect waves-light  red hoverable editpass" id="<?php=$_SESSION['email'];?>"type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s5">
                                <button class="btn waves-effect waves-light red hoverable" type="reset" name="action" id="resetbtn">Reset
                                    <i class="material-icons right">cached</i>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
    </div>

