<?php
// Template signin.php:

signin_process_error_check($dbc);

?>

<div class='container'>
    <h3>Sign in</h3>
    <div class='row'>
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
                    <a href="?page=signup">REGISTER</a>
                </li>
            </ul>
        </form>
    </div>
</div>
