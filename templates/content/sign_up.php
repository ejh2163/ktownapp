<?php
// Template signup.php:


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
?>

<div class='container'>
    <div class='row'>
        <div class="col-xs-12 col-md-12">
            <div class='heading-box'>
                <h2 class="heading">Sign Up</h2>
            </div>
            <div class="sign-box col-xs-12 col-sm-5 col-md-4 fade-in">
                <div class="row">
                    <form method="post" action="">
                        <div class="form-group col-xs-12">
                            <input type="text" class="form-control" name="first_name" placeholder="이름">
                        </div>
                        <div class="form-group col-xs-12">
                            <span class="sign-attr-text">생년월일:</span>
                            <input type="date" class="form-control" id="" placeholder="생년월일">
                        </div>
                        
                        <div class="form-group col-xs-12">
                            <span class="sign-attr-text">성별:</span>
                            <label class="radio-inline"><input type="radio" id="maleRadio" value="Male">남&nbsp&nbsp</label>
                            <label class="radio-inline"><input type="radio" id="femaleRadio" value="Female">여&nbsp&nbsp</label>
                            <label class="radio-inline"><input type="radio" id="uncknownRadio" value="Unknown">Other</label>
                        </div>

                        <div class="form-group col-xs-12">
                            <input type="text" class="form-control" name="username" placeholder="아이디 *">
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="email" class="form-control" name="email" placeholder="이메일 *">
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="password" class="form-control" name="password" placeholder="비밀번호 *">
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="password" class="form-control" name="password_again" placeholder="비밀번호 확인 *">
                        </div>
                        <div class="form-group col-xs-12">
                            <input type="checkbox"> 모든<a href=""> 이용약관</a>에 동의합니다
                        </div>

                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-default btn-primary" value="signup"><b>가입하기</b></button>
                        </div>
                    </form>
                    
                    <p class="col-xs-12">Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
                </div>
            </div>
        </div>
    </div>
</div>