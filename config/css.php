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
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

<!-- custom stylez -->
<style>
	html,
	body{
	  	height: 100%;
	  	background-color: #f3f3f3;
	  	font-family: oxygen, arial;
	}
	p {
		margin: 0px;
	}
	.clear{
		clear: both;
	}
	.face-box{
		width: 100%;
		height: 240px;
		display:block;
		overflow: hidden;
	}
	.face-img{
		width: 100%;
		height: 240px;
		object-fit: cover;
		transition: all .25s ease;
	}
	.container{
		max-width: 940px;
	}
	.header-box{
		margin: 0px 0px 3px 0px;
		height: 60px;
	}
	.content{
		min-height: 600px;
		margin-top: 60px;
	}
	.tray-box{
		margin: 0px 0px 3px 0px;
		overflow: hidden;
		height: 60px;
	}
	.pagination-nav{
    	text-align: center;
	}
	h2{
		float: left;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		margin: 0px;
		color: #444444;
		font-size: 20px;
		font-weight: bold;
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
	.navbar-font a{
		color: #787878;
		font-size: 15px;
		font-weight: bold;
	}
	.navbar-toggle .icon-bar {
		width: 18px;
		height: 2px;
		background-color: #787878;
	}
	.navbar-hover li a:hover{
		background-color: #FFFFFF;
		color: #004080;
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
	.filter-box{
		display: block;
	    margin: 0px -12px 3px -12px;
	    height: 90px;
	    background-color: #ffffff;
	    border: 1px solid #d4d4d4;
	    border-radius: 0px;
	    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
	    transition: box-shadow .25s;
	}
	.card {
		display: block;
	    margin: 3px -12px 3px -12px;
	    height: 228px;
	    background-color: #ffffff;
	    border-radius: 0px;
	    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
	    transition: box-shadow .25s;
	    position:relative;
	}
	.card:hover {
	  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.views-tag {
		position:absolute;
		right: 6px;
		top: 6px;
		background-color: #444444;
		border: 1px solid #444444;
		border-radius: 3px;
		opacity: 0.75;
		padding: 0px 3px 0px 3px;
		color: #FFFFFF;
		font-size: 11px;
	} /*http://stackoverflow.com/questions/17342315/mysql-increase-value-when-button-is-clicked*/
	.img-card {
		width: 100%;
		height: 144px;
		border-top-left-radius:0px;
		border-top-right-radius:0px;
		display:block;
		overflow: hidden;
	}
	.img-card img{
		width: 100%;
		height: 144px;
		object-fit: cover;
		transition: all .25s ease;
		border-bottom: 1px solid #D4D4D4;
	}
	.card-content {
		text-align:left;
	}
	.card-title {
		padding: 5px 6px 2px 6px;
		margin: 0px;
		text-align: center;
		font-size: 13px;
		font-weight: normal;
	}
	.card-title a {
		color: #6c6c6c;
		text-decoration: none;
	}
	.card-description {
		padding: 3px 6px 3px 6px;
		text-align: center;
	}
	.card-desc-1 {
		color: #373737;
		font-size: 13.5px;
		font-weight: bold;
	}
	.card-desc-2 {
		font-size: 12px;
		font-weight: normal;
	}
	.card-read-more {
		padding: 2px 6px 6px 6px;
		border-top: 1px solid #D4D4D4;
		color: #757575;
		font-size: 11px;
	}
	.card-premium{
		border: 1px solid #787878;
	}
	.card-premium a{
		color: #014b96;
	}


	/* form page CSS */
	.form-box {
		margin: 9px 0px 9px 0px;
		padding: 9px;
		border: 1px solid #d4d4d4;
		border-radius: 3px;
		box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
		background-color: #FFFFFF;
	}
	.form-group {
		margin: 0px;
	}
	.input-group {
		margin-top: 0px;
		margin-bottom: 9px;
	}
	.btn-form-submit {
		text-align: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
	}
	.btn-form-category {
		text-align: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
		color: #444444;
	}
	.vresize {
		resize: vertical;
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

