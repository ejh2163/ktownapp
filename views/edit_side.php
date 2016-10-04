<?php
// views edit_side.php:

function edit_side_heading($page){
    echo '<i class="glyphicon glyphicon-edit" aria-hidden="true"></i>';
	switch($page){
    	case '':
    		echo '&nbspHome';
    		break;
    	case 'jobs':
    		echo '&nbsp구인 글쓰기';
    		break;
    	case 'sale':
    		echo '&nbsp사고/팔고 글쓰기';
    		break;
    	case 'cars':
    		echo '&nbsp자동차 글쓰기';
    		break;
    	case 'homes':
    		echo '&nbsp집/부동산 글쓰기';
    		break;
    	case 'services':
    		echo '&nbsp전문서비스 글쓰기';
    		break;
    	case 'free':
    		echo '&nbsp자유게시판';
    		break;
	}
} // END main heading

function form_category($page){
    switch($page){
    	case '':
    		break;
    	case 'jobs':
    		form_jobs();
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
    		form_services();
    		break;
    	case 'free':
    		form_free();
    		break;
	}
}

function form_cars(){
    ?>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input type="text" class="form-control" id="year" placeholder="년도">
        </div>
    </div>
    
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input type="text" class="form-control" id="make" placeholder="Make">
        </div>
    </div>
    
   <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input type="text" class="form-control" id="model" placeholder="Model">
        </div>
    </div>
    
    <div class="dropdown">
        <div class="input-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                종류&nbsp
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="">Lease</a></li>
                <li><a href="">Rent</a></li>
                <li><a href="">Sale</a></li>
            </ul>
        </div>
    </div>
    
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input type="text" class="form-control" id="price" placeholder="Price/Pay">
        </div>
    </div>
    <?php
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