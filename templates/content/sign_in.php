<?php
// Template signin.php:

signin_process_check($dbc);
?>

<div class='container'>
    <div class='row'>
        <div class="col-md-4 col-md-offset-4 fade-in" style="margin-top:6px;">
            <h2 class="sign-up-title" style="text-align:center;">Welcome Back!</h2>
            <form method="post" action="" accept-charset="UTF-8">
                <div class="form-group">
                    <label class="sign-attr-text">아이디*</label>
                    <input type="text" class="form-control" name="username" placeholder="">
                </div>
                <div class="form-group">
                    <label class="sign-attr-text">비밀번호*</label>
                    <input type="password" class="form-control" name="password" placeholder="">
                    <p class="pull-right" style="font-size:12px"><a href="/password-reset">비밀번호가 기억 안나세요?</a></p>
                </div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-sign btn-block" value="signup"><b>로그인</b></button>
                </div>
            </form>
            <p class="text-center"><a href="/signup">회원가입하세요!</a></p>
        </div>
    </div>
</div>
