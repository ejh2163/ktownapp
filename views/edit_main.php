<?php
// Views form_main.php:

function edit_main_heading($page){
    echo '<i class="glyphicon glyphicon-edit" aria-hidden="true"></i>';
	switch($page){
    	case '':
    		echo '&nbspHome'; break;
    	case 'jobs':
    		echo '&nbsp구인 글쓰기'; break;
    	case 'sale':
    		echo '&nbsp사고/팔고 글쓰기'; break;
    	case 'cars':
    		echo '&nbsp자동차 글쓰기'; break;
    	case 'homes':
    		echo '&nbsp집/부동산 글쓰기'; break;
    	case 'services':
    		echo '&nbsp전문서비스 글쓰기'; break;
    	case 'free':
    		echo '&nbsp자유게시판'; break;
	}
} // END main heading

function page_form(){
    switch($page){
    	case '':
    		break;
    	case 'jobs':
    		
    		break;
    	case 'sale':
    		
    		break;
    	case 'cars':
    		form_cars();
    		break;
    	case 'homes':
    		form_homes();
    		break;
    	case 'services':
    		form_service();
    		break;
    	case 'free':
    		form_free();
    		break;
	}
}

function form_cars(){
    echo '<div class="dropdown">';
        echo '<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            echo '종류';
            echo '<span class="caret"></span>';
        echo '</button>';
        echo '<ul class="dropdown-menu">';
            echo '<li><a href="">Lease</a></li>';
            echo '<li><a href="">Rent</a></li>';
            echo '<li><a href="">Sale</a></li>';
        echo '</ul>';
    echo '</div>';
}

function form_homes(){
    
}

function form_jobs(){
    
}

function form_services(){
    
}

function form_sale(){
    
}

?>

<!--
<div class='form-group col-xs-12 col-sm-4' style='margin-right: 24px;'>
    <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-usd'></i></span>
        <input type='text' class='form-control' id='price' placeholder=''>
    </div>
</div><!-- END price form -->
