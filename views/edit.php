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

function edit_main_category_dropdown($page){
            ?>
            <div class="dropdown btn-form-category">
                <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
                        <?php
                            switch($page){
                        		case "jobs":
                        			echo "구인&nbsp";
                        			break;
                        		case "sale":
                        			echo "사고/팔고&nbsp";
                        			break;
                        		case "cars":
                        			echo "자동차&nbsp";
                        			break;
                        		case "homes":
                        			echo "집/부동산&nbsp";
                        			break;
                        		case "services":
                        			echo "전문서비스&nbsp";
                        			break;
                        		case "free":
                        			echo "자유게시판&nbsp";
                        			break;
                        	}
                        ?> 
                        </b><span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="<?php echo '?page=jobs&action=edit'; ?>">구인</a></li>
                    <li><a href="<?php echo '?page=sale&action=edit'; ?>">사고/팔고</a></li>
                    <li><a href="<?php echo '?page=cars&action=edit'; ?>">자동차</a></li>
                    <li><a href="<?php echo '?page=homes&action=edit'; ?>">집/부동산</a></li>
                    <li><a href="<?php echo '?page=services&action=edit'; ?>">전문서비스</a></li>
                    <!--<li><a href="<?php echo '?page=free&action=edit'; ?>">톡톡</a></li>-->
                </ul>
            </div><!-- END category choice dropdown -->
            <?php
}

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