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
	  	font-family: oxygen, arial;
	}
	p {
		margin: 0px;
	}
	.container{
		max-width: 940px;
	}
	.clear{
		clear: both;
	}
	.header-box{
		overflow: hidden;
		height: 60px;
	}
	.content{
		min-height: 600px;
	}
	.tray-box{
		overflow: hidden;
		height: 60px;
	}
	.pagination-nav{
    	text-align: center;
	}
	
	
	/* text format CSS */
	h2{
		float: left;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		margin: 0px;
		color: #373737;
		font-size: 20px;
		font-weight: bold;
	}
	.ellipsis{
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	
	/* navbar CSS */
	.navbar-custom{
		background-color: #373737;
		border-radius: 0px;
	}
	.navbar-font a{
		color: #FFFFFF;

	}
	.navbar-toggle .icon-bar {
		width: 18px;
		height: 2px;
		background-color: #FFFFFF;
	}
	.navbar-hover li a:hover{
		background-color: #00BFFF;
		background-color: #089DE3;
	}
	.nav-active{
		background-color: #089DE3;
	}

	
	/* card CSS */
	.btn-edit{
		float: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
	}
	.card {
		display: block;
	    margin: 12px -3px 12px -3px;
	    height: 300px;
	    background-color: #fff;
	    border-radius: 3px;
	    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
	    transition: box-shadow .25s;
	}
	.card:hover {
	  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.img-card {
		width: 100%;
		height: 180px;
		border-top-left-radius:3px;
		border-top-right-radius:3px;
		display:block;
		overflow: hidden;
	}
	.img-card img{
		width: 100%;
		height: 180px;
		object-fit: cover;
		transition: all .25s ease;
	}
	.card-content {
		text-align:left;
	}
	.card-title {
		padding: 9px 9px 3px 9px;
		margin: 0px;
		color: #ffffff;
		font-size: 16px;
		font-weight: bold;
	}
	.card-title a {
		text-decoration: none !important;
	}
	.card-description {
		padding: 3px 9px 3px 9px;
	}
	.card-desc-1 {
		color: #373737;
		font-size: 14px;
		font-weight: bold;
	}
	.card-desc-2 {
		font-size: 14px;
		font-weight: normal;
	}
	.card-read-more {
		padding: 3px 9px 9px 9px;
		border-top: 1px solid #D4D4D4;
		color: #757575;
		font-style: italic;
		font-size: 12px;
	}
	.card-read-more a {
		text-decoration: none !important;
	}
	.card-premium{
		border: 1px solid #089DE3;
		background-color: #F5FAFF;
	}


	/* form CSS */
	.form-box {
		margin-bottom: 9px;
		padding: 9px;
		border-radius: 3px;
		box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
	}
	.form-group {
		margin-top: 0px;
		margin-bottom: 9px;
	}
	.btn-form-submit {
		float: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
	}
	.btn-form-category {
		margin: 6px;
	}
	.vresize {
		resize: vertical;
	}


	/* footer CSS */
	.footer{
		margin-top: 120px;
		padding: 18px;
		clear: both;
		background-color: #373737;
		color: #FFFFFF;
	}

</style>

