<?php
// CSS:

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
-->

<!-- FontAwesome icons -->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- Material icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="http://fonts.googleapis.com/earlyaccess/hanna.css" rel="stylesheet">

<!-- custom stylez -->
<style>
	@font-face {
	    font-family: nanumpenscript;
	    src: url(/resources/fonts/NanumPenScript-Regular.ttf);
	}
	@font-face {
	    font-family: nanumgothic;
	    src: url(/resources/fonts/NanumGothic-Bold.ttf);
	}
	@media only screen and (max-width : 767px) {
    /* only size 'xs' and below */
	    .height-xs {
	        height: 180px;
	    }
	    .height-xs img{
	    	height: 180px;
	    }
	}

	html,
	body{
	  	height: 100%;
	  	background-color: #f6f6f6;
	  	font-family: Raleway, arial;
	}
	.clear{
		clear: both;
	}
	.face-box{
		width: 100%;
		height: auto;
		display:block;
	}
	.face-img{
		width: 100%;
		height: 120px;
		object-fit: cover;
	}
	.container{
		max-width: 940px;
	}
	.heading-box{
		margin: 4px 0px 4px 0px;
		height: 54px;
	}
	.heading{
		float: left;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		margin: 0px;
		color: #444444;
		font-size: 20px;
		font-weight: bold;
	}
	.sub-heading-box{
		margin: 4px 0px 4px 0px;
		height: 30px;
	}
	.sub-heading{
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		margin: 0px;
		color: #444444;
		font-size: 16px;
		font-weight: bold;
	}
	.content{
		min-height: 660px;
		margin-top: 60px;
	}
	.tray-box{
		margin: 4px 0px 4px 0px;
		height: 54px;
	}
	.pagination-nav{
    	text-align: center;
	}
	
	.ellipsis{
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	
	/* navbar CSS */
	.navbar-custom {
		background-color: #ffffff;
		border-radius: 0px;
		border-bottom: 1px solid #d4d4d4;
		box-shadow: 0 8px 6px -6px #999;
	}
	.navbar a{
		color: #787878;
		font-weight: bold;
	}
	.navbar li a:hover{
		background-color: #FFFFFF;
		color: #004080;
	}
	.navbar-toggle .icon-bar {
		width: 18px;
		height: 2px;
		background-color: #787878;
	}
	.nav-active a{
		color: #014b96;
	}

	/* ad unit CSS */
	.ad-skyscraper-left { 
		width: 160px; 
		height: 600px; 
		border: 1px solid red;
		display:block; 
		position:fixed; 
		margin-top:100px; 
		margin-left:-200px; 
	}
	.ad-skyscraper-right { 
		display:block; 
		position:fixed; 
		margin-top:100px; 
		margin-left:960px; 
	}
	
	/* card page CSS */
	.btn-edit{
		float: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
		color: #ffffff;
	}
	.btn-group{
		display:block;
	}
	.filter-box{
		display: block;
	    margin: 4px -11px 4px -11px;
	    background-color: #ffffff;
	    border: 1px solid #d4d4d4;
	    padding: 6px;
	    box-shadow: 0 2px 6px 0 rgba(0,0,0,0.1),0 2px 6px 0 rgba(0,0,0,0.1);
	}
	.card {
		display: block;
	    margin: 4px -11px 4px -11px;
	    height: 225px;
	    background-color: #ffffff;
	    border-radius: 0px;
	    border: 1px solid #d4d4d4;
	    transition: box-shadow .25s;
	    position:relative;
	    overflow: hidden;
	}
	.card:hover {
		box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
	}
	.views-tag {
		position:absolute;
		right: 6px;
		top: 6px;
		background-color: #444444;
		border: 1px solid #444444;
		border-radius: 3px;
		opacity: 0.80;
		padding: 0px 3px 0px 3px;
		color: #FFFFFF;
		font-size: 11px;
	} /*http://stackoverflow.com/questions/17342315/mysql-increase-value-when-button-is-clicked*/
	.img-card {
		width: 100%;
		height: 141px;
		border-top-left-radius:0px;
		border-top-right-radius:0px;
		display:block;
		overflow: hidden;
	}
	.img-card img{
		width: 100%;
		height: 141px;
		object-fit: cover;
		transition: all .25s ease;
	}
	.card-title {
		padding: 6px 6px 1px 6px;
		margin: 0px;
		text-align: left;
		font-size: 13px;
		font-weight: bold;
	}
	.card-title a {
		color: #6c6c6c;
		text-decoration: none;
	}
	.card-description {
		padding: 2px 6px 3px 6px;
		text-align: left;
	}
	.card-desc-1 {
		margin: 0px;
		color: #444444;
		font-size: 13.5px;
		font-weight: bold;
	}
	.card-desc-2 {
		margin: 0px;
		font-size: 12px;
		font-weight: normal;
	}
	.card-read-more {
		padding: 1px 6px 6px 6px;
		border-top: 1px solid #D4D4D4;
		color: #757575;
		font-size: 11px;
	}
	.card-premium a{
		color: #014b96;
	}
	
	/* sign pages CSS */
	.sign-box {
		display: block;
		padding: 12px;
		box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
		background-color: #FFFFFF;
	}
	.sign-attr-text{
		margin: 0px 6px 0px 3px;
		color: #787878;
		font-size: 13px;
	}
	.sign-side-img {
		width: 100%;
		height: 450px;
		display: block;
		overflow: hidden;
	}
	.sign-side-img img{
		border: 1px solid red;
		width: 100%;
		height: 450px;
		object-fit: cover;
		transition: all .25s ease;
	}
	
	/* form page CSS */
	.form-box {
		display: block;
		margin-bottom: 9px;
		padding: 9px 9px 0px 9px;
		border: 1px solid #d4d4d4;
		overflow: hidden;
		/*box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);*/
		background-color: #FFFFFF;
	}
	.form-group {
		margin-bottom: 9px;
	}
	.btn-form-submit {
		text-align: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
	}
	.vresize {
		resize: vertical;
	}
	.dropdown select{
		font-size: 13px;
	}

	/* footer CSS */
	.footer{
		margin-top: 120px;
		padding: 18px;
		clear: both;
		background-color: #444444;
		color: #FFFFFF;
	}
	
/*"http://www.fostrap.com/"*/
</style>

