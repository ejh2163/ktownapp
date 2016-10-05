<?php
// user Functions:


function signed_in(){
    return (isset($_SESSION['id'])) ? true : false;
}

function user_exists($dbc, $username){
    $username = sanitize($dbc, $username);
    $q="SELECT * FROM users 
        WHERE username = '$username'";
    $r=mysqli_query($dbc, $q);
    $row=mysqli_num_rows($r);
    return $row;
}

function user_active($dbc, $username){
    $username = sanitize($dbc, $username);
    $q="SELECT * FROM users 
        WHERE username = '$username'
        AND active = 1";
    $r=mysqli_query($dbc, $q);
    $row=mysqli_num_rows($r);
    return $row;
}

function user_id($dbc, $username){
    $username = sanitize($dbc, $username);
    $q="SELECT id FROM users
        WHERE username = '$username'";
    $r=mysqli_query($dbc, $q);
    $row=mysqli_fetch_assoc($r);

    return $row['id'];
}

function signin($dbc, $username, $password){
    $user_id = user_id($dbc, $username);
    $username = sanitize($dbc, $username);
    $password = md5($password);
    
    $q="SELECT * FROM users
        WHERE username = '$username'
        AND password = '$password'";
    $r=mysqli_query($dbc, $q);
    $row=mysqli_num_rows($r);
    return ($row == 1) ? $user_id : false;
}

?>