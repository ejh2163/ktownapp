<?php
// View signin.php:

function signin_process_error_check($dbc){
    if(!empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if(empty($username) || empty($password)) {
            $errors[] = 'Please enter username and password.';
        } else if (user_exists($dbc, $username) == false) {
            $errors[] = 'Username does not exist. Please sign up.';    
        } else if (user_active($dbc, $username) == false) {
            $errors[] = 'Please activate account before proceeding.';
        } else {
            $signin = signin($dbc, $username, $password);
            
            if ($signin == false){
                $errors[] = "username/password combination is incorrect.";
            } else {
                // set user session 
                $_SESSION['id'] = $signin;
                $_SESSION['username'] = sanitize($dbc, $username);
                
                // redirect to home page
                header('Location: index.php');
                exit();
            }
        }
    } else {
        $errors[] = '';
    }
    echo output_errors($errors);
}


?>