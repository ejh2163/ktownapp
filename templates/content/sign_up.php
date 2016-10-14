<?php
// Template signup.php:

?>
<div class='container'>
    <div class='row'>
        <!--<div class="col-xs-12 col-sm-7 col-md-8" style="border: 1px solid red;">
            <a class="sign-side-img height-xs" href="#">
				<img src="/resources/images/cars/mustang1.jpg" />
		    </a>
        </div><!-- END sign-box left -->
            
        <div class="col-md-6 col-md-offset-3 fade-in" style="margin-top:6px;">
            <h2 style="text-align:center;">Welcome!</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label class="sign-attr-text">이름</label>
                    <input type="text" class="form-control" name="first_name" placeholder="">
                </div>
                <div class="form-group">
                    <label class="sign-attr-text">성별: </label>
                    <label class="radio-inline"><input type="radio" name="gender" id="maleRadio" value="Male">남&nbsp</label>
                    <label class="radio-inline"><input type="radio" name="gender" id="femaleRadio" value="Female">여&nbsp</label>
                    <label class="radio-inline"><input type="radio" name="gender" id="otherRadio" value="Other">Other</label>
                </div>
                <div class="form-group">
                    <label class="sign-attr-text">생년월일</label>
                    <input type="date" class="form-control" id="" placeholder="생년월일">
                </div>
                <hr>
                <div class="form-group">
                    <label class="sign-attr-text">이메일*</label>
                    <input type="email" class="form-control" name="email" placeholder="">
                </div>
                <div class="form-group">
                    <label class="sign-attr-text">아이디*</label>
                    <input type="text" class="form-control" name="username" placeholder="">
                </div>
                <div class="form-group">
                    <label class="sign-attr-text">비밀번호*</label>
                    <input type="password" class="form-control" name="password" placeholder="">
                </div>
                <div class="form-group">
                    <label class="sign-attr-text">비밀번호 확인*</label>
                    <input type="password" class="form-control" name="password_again" placeholder="">
                </div>
                <hr>
                <div class="form-group">
                    <input type="checkbox"> 모든 <a data-toggle="modal" href="#tc-modal">이용약관</a>에 동의합니다
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LevTgkUAAAAAHBXBHGywqz-VpaMoZN96x3KDNQX"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sign btn-lg btn-block" value="signup"><b>가입하기</b></button>
                </div>
            </form>
        </div>
    </div><!-- END outer row -->
</div><!-- END container -->


<div class="modal fade" id="tc-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>