<?php
// View signup.php:

function signup_process_check(){
    if (!empty($_POST)){
        echo 'form submitted';
        $required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
        foreach($_POST as $key=>$value){
            if(empty($value) && in_array($key, $required_fields) == true){
                $errors[] = 'Please complete all required fields!';
                break;
            }
        }
    echo print_r($_POST);
    }
print_r($errors);
}

?>