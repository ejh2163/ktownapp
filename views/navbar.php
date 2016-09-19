
<nav class="navbar navbar-custom navbar-font navbar-hover">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li <?php if($cat=="jobs"){echo 'class="nav-active"';} ?>>
					<a href="?category=jobs"><i class="fa fa-users" aria-hidden="true"></i> 구인</a>
				</li>
				<li <?php if($cat=="sale"){echo 'class="nav-active"';} ?>>
					<a href="?category=sale"><i class="fa fa-money" aria-hidden="true"></i> 사고팔고</a>
				</li>
				<li <?php if($cat=="cars"){echo 'class="nav-active"';} ?>>
					<a href="?category=cars"><i class="fa fa-car" aria-hidden="true"></i> 자동차</a>
				</li>
				<li <?php if($cat=="homes"){echo 'class="nav-active"';} ?>>
					<a id='' href="?category=homes"><i class="fa fa-home" aria-hidden="true"></i> 부동산</a>
				</li>
				<li <?php if($cat=="free"){echo 'class="nav-active"';} ?>>
					<a href="?category=free"><i class="fa fa-comment-o" aria-hidden="true"></i> 자유게시판</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- END navbar -->