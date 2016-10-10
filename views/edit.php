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
    <div class="dropdown col-xs-4 col-sm-3 col-md-2">
        <div class="input-group">
            <label for="cars_year">
            </label>
            <select class="form-control" id="cars_year">
                <option>년형</option>
                <option><?php echo date("Y"); ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
                <option><?php echo date("Y")-1; ?></option>
                <option><?php echo date("Y")-2; ?></option>
                <option><?php echo date("Y")-3; ?></option>
                <option><?php echo date("Y")-4; ?></option>
                <option><?php echo date("Y")-5; ?></option>
                <option><?php echo date("Y")-6; ?></option>
                <option><?php echo date("Y")-7; ?></option>
                <option><?php echo date("Y")-8; ?></option>
                <option><?php echo date("Y")-9; ?></option>
                <option><?php echo date("Y")-10; ?></option>
            </select>
        </div>
    </div>
    <div class="form-group col-xs-8 col-sm-4 col-md-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
            <input type="text" class="form-control" id="cars_make" placeholder="Make/제조사">
        </div>
    </div>
   <div class="form-group col-xs-12 col-sm-5 col-md-6">
        <div class="input-group">
            <span class="input-group-addon" style="font-weight:bold;">M</span>
            <input type="text" class="form-control" id="cars_model" placeholder="Model/모델명">
        </div>
    </div>
    <div class="dropdown col-xs-4 col-sm-3 col-md-2">
        <div class="input-group">
            <label for="cars_type">
            </label>
            <select class="form-control">
                <option>분류</option>
                <option>Lease/리스</option>
                <option>Rent/렌트</option>
                <option>Sale/구매</option>
            </select>
        </div>
    </div>
    <div class="form-group col-xs-8 col-sm-4 col-md-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input type="text" class="form-control" id="cars_price" placeholder="Price/가격">
        </div>
    </div>
    <div class="form-group col-xs-12 col-sm-5 col-md-6">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
            <input type="text" class="form-control" id="cars_model" placeholder="Mileage/마일리지">
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