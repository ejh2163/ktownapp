<?php
// navbar:

?>

<nav class="navbar navbar-custom navbar-fixed-top navbar-font navbar-hover">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./">
				<i class="glyphicon glyphicon-home" aria-hidden="true"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li <?php if($page=="jobs"){echo ' class="nav-active"';} ?>>
					<a href="?page=jobs"><!--<i class="fa fa-users" aria-hidden="true"></i>--> 구인</a>
				</li>
				<li <?php if($page=="sale"){echo ' class="nav-active"';} ?>>
					<a href="?page=sale"><!--<i class="fa fa-money" aria-hidden="true"></i>--> 사고/팔고</a>
				</li>
				<li <?php if($page=="cars"){echo ' class="nav-active"';} ?>>
					<a href="?page=cars"><!--<i class="fa fa-car" aria-hidden="true"></i>--> 자동차</a>
				</li>
				<li <?php if($page=="homes"){echo ' class="nav-active"';} ?>>
					<a href="?page=homes"><!--<i class="fa fa-home" aria-hidden="true"></i>--> 집/부동산</a>
				</li>
				<li <?php if($page=="services"){echo ' class="nav-active"';} ?>>
					<a href="?page=services"><!--<i class="fa fa-briefcase" aria-hidden="true"></i>--> 전문서비스</a>
				</li>
				<!--<li <?php if($page=="free"){echo ' class="nav-active"';} ?>>
					<a href="?page=free"><i class="fa fa-comment-o" aria-hidden="true"></i> 톡톡</a>
				</li>-->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li <?php if(signed_in()==true){echo ' class="hidden"';} ?>>
					<a href="?page=signup"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a>
				</li>
				<li <?php if(signed_in()==true){echo ' class="hidden"';} ?>>
					<a href="?page=signin"><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</a>
				</li>
				<li <?php if(signed_in()==false){echo ' class="hidden"';} ?>>
					<a href="?page=profile"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username'] ?></a>
				</li>
				<li <?php if(signed_in()==false){echo ' class="hidden"';} ?>>
					<a href="?page=signout"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- END navbar -->