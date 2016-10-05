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
		height: 60px;
	}
	.content{
		min-height: 600px;
		margin-top: 60px;
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
		font-weight: 900;
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

	/* card CSS */
	.btn-edit{
		float: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
		color: #ffffff;
	}
	.card {
		display: block;
	    margin: 9px -3px 9px -3px;
	    height: 276px;
	    background-color: #ffffff;
	    border: 1px solid #d4d4d4;
	    border-radius: 3px;
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
		height: 192px;
		border-top-left-radius:3px;
		border-top-right-radius:3px;
		display:block;
		overflow: hidden;
	}
	.img-card img{
		width: 100%;
		height: 192px;
		object-fit: cover;
		transition: all .25s ease;
		border-bottom: 1px solid #D4D4D4;
	}
	.card-content {
		text-align:left;
	}
	.card-title {
		padding: 6px 9px 3px 9px;
		padding: 3px 6px 3px 6px;
		margin: 0px;
		font-size: 14px;
		font-weight: bold;
	}
	.card-title a {
		color: #787878;
		text-decoration: none;
	}
	.card-description {
		padding: 3px 9px 3px 9px;
		padding: 3px 6px 3px 6px;
	}
	.card-desc-1 {
		color: #373737;
		font-size: 14px;
		font-size: 13px;
		font-weight: bold;
	}
	.card-desc-2 {
		font-size: 12px;
		font-weight: normal;
		font-size: 12px;
	}
	.card-read-more {
		padding: 2px 9px 9px 9px;
		padding: 1px 6px 6px 6px;
		border-top: 1px solid #D4D4D4;
		color: #757575;
		font-size: 11px;
	}
	.card-premium{
		border: 1px solid #014b96;
	}
	.card-premium a{
		color: #014b96;
	}
	.vcenter{
		position: relative;
		top: 38%;
	}

	/* card CSS v2.0 
	.btn-edit{
		float: right;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		font-weight: bold;
		color: #ffffff;
	}
	.card {
		display: block;
	    margin: 6px -9px 6px -9px;
	    height: 84px;
	    background-color: #ffffff;
	    border: 1px solid #d4d4d4;
	    border-radius: 3px;
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
	}
	.img-card {
		width: 100%;
		height: 192px;
		height: 156px;
		border-top-left-radius:3px;
		border-top-right-radius:3px;
		display:block;
		overflow: hidden;
	}
	.img-card img{
		width: 100%;
		height: 192px;
		height: 156px;
		object-fit: cover;
		transition: all .25s ease;
		border-bottom: 1px solid #D4D4D4;
	}
	.card-content {
		text-align:left;
	}
	.card-title {
		padding: 6px 9px 3px 9px;
		padding: 4px 6px 2px 6px;
		margin: 0px;
		font-size: 14px;
		font-weight: bold;
	}
	.card-title a {
		color: #787878;
		text-decoration: none;
	}
	.card-description {
		padding: 3px 9px 3px 9px;
		padding: 3px 6px 3px 6px;
	}
	.card-desc-1 {
		color: #373737;
		font-size: 14px;
		font-size: 13px;
		font-weight: bold;
	}
	.card-desc-2 {
		font-size: 12px;
		font-weight: normal;
		font-size: 12px;
	}
	.card-read-more {
		padding: 2px 9px 9px 9px;
		padding: 1px 6px 6px 6px;
		border-top: 1px solid #D4D4D4;
		color: #757575;
		font-size: 11px;
	}
	.card-premium{
		border: 1px solid #014b96;
		height: 285px;
		height: 240px;
	}
	.card-plus{
		border: 1px solid #014b96;
	}
	.card-premium a{
		color: #014b96;
	}
	.card-plus a{
		color: #014b96;
	}
	.vcenter{
		position: relative;
		top: 38%;
	}
	*/


	/* form CSS */
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

/*"http://www.fostrap.com/"*/
</style>

