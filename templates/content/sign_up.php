<?php
// Template signup.php:

?>

<div class='container'>
    <h2>Sign Up</h2>
    <div class="form-box">
        <div class='row'>
    
            <form method="post" action="">
                <h2>Sign Up for a New Accou</h2>
                <div class="form-group col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="subject" placeholder="subject>">
                        
                    </div>
                </div> <!-- END subject form -->
                
                <input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
                  
                <input type="password" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
                  
                <a href="#"><div class="btn">Sign In</div></a> <!-- End Btn -->
                
                <a href="#"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->
              
            </form>
            
            <p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
    
        </div>
    </div>
</div>