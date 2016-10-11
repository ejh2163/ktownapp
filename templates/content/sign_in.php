<?php
// Template signin.php:

signin_process_check($dbc);
?>

<div class='container'>
    <div class='row'>
        <div class="col-xs-12 col-md-12">
            <div class='heading-box'>
                <h2 class="heading">로그인</h2>
            </div>
            
            <div class="sign-box col-xs-12 col-sm-5 col-md-4 fade-in">
                <div class="" style="width:100%">
                    <img src="/resources/images/logo.png" />
                </div>
                <form method="post" action="">
                    <div class="form-group">
                        <label>아이디</label>
                        <input type="text" class="form-control" name="username" placeholder="아이디 *">
                    </div>
                    <div class="form-group">
                        <label>비밀번호</label>
                        <input type="password" class="form-control" name="password" placeholder="비밀번호 *">
                    </div>
                    <br />
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" value="signup"><b>로그인</b></button>
                    </div>
                </form>
                <br />
                <p class="">Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
                <p class="">가입하세요! <u style="color:#f1c40f;">Click Here!</u></p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
</div>
