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
        <div class="col-xs-12 col-sm-12">
            <div class='heading-box'>
                <h2 class="heading">회원가입</h2>
            </div>
    
            <!--<div class="col-xs-12 col-sm-7 col-md-8" style="border: 1px solid red;">
                <a class="sign-side-img height-xs" href="#">
    				<img src="/resources/images/cars/mustang1.jpg" />
    		    </a>
            </div><!-- END sign-box left -->
            
            <div class="sign-box col-xs-12 col-sm-5 col-md-4 fade-in">
                <label>회원정보</label>

                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" placeholder="이름">
                    </div>
                    <div class="form-group">
                        <label class="sign-attr-text">생년월일:</label>
                        <input type="date" class="form-control" id="" placeholder="생년월일">
                    </div>
                    <div class="form-group">
                        <span class="sign-attr-text">성별:</span>
                        <label class="radio-inline"><input type="radio" id="maleRadio" value="Male">남&nbsp&nbsp</label>
                        <label class="radio-inline"><input type="radio" id="femaleRadio" value="Female">여&nbsp&nbsp</label>
                        <label class="radio-inline"><input type="radio" id="uncknownRadio" value="Unknown">Other</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="이메일 *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="아이디 *">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="비밀번호 *">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_again" placeholder="비밀번호 확인 *">
                    </div>
                    <div class="form-group">
                        <input type="checkbox"> 모든 <a data-toggle="modal" href="#tc-modal">이용약관</a>에 동의합니다
                    </div>
                    <br />
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" value="signup"><b>가입하기</b></button>
                    </div>
                </form>
            </div><!-- END sign-box right -->
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