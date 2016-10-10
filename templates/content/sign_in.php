<?php
// Template signin.php:

signin_process_check($dbc);
?>


<div class='container'>
    <div class='row'>
        <div class="col-xs-12 col-md-12">
            <div class='heading-box'>
                <h2 class="heading">Sign In</h2>
            </div>
            <div class="sign-box fade-in">

                <form action="" method="post">
                    <ul id="signin">
                        <li>
                            Username: <br>
                            <input type="text" name="username"/>
                        </li>
                        <li>
                            Password: <br>
                            <input type="password" name="password"/>
                        </li>
                        <li>
                            <br><input type="submit" name="SIGN IN"/>
                        </li>
                        <li>
                            <a href="/signup">REGISTER</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
