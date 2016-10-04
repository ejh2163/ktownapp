<?php
// Views edit_main.php:


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

function form_general($page){
    $custom_subject = '';
    if($page=='homes'){
        $custom_subject = 'Address/주소';
    } else if($page=='jobs'){
        $custom_subject = 'Employer/회사명';
    } else{
        $custom_subject = '제목';
    }
    ?>
    <div class="form-group col-xs-12">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
            <input type="text" class="form-control" id="subject" placeholder="<?php echo $custom_subject; ?>">
            
        </div>
    </div> <!-- END subject form -->

    <div class="form-group col-xs-12 col-sm-5">
        <div class="input-group" >
            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="text" class="form-control" id="email" placeholder="Email (optional)">
        </div>
    </div><!-- END email form -->
    
    <div class="form-group col-xs-6 col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input type="text" class="form-control" id="phone" placeholder="전화 (optional)">
        </div>
    </div><!-- END phone form -->
    
    <div class="dropdown col-xs-6 col-sm-3">
        <div class="input-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                <?php if(!empty($_GET['region'])) {
                    echo $_GET['region'];
                } else {
                    echo "Location ";
                }?>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Los Angeles">Los Angeles, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Fullerton">Fullerton, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Cerritos">Cerritos, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Torrance">Torrance, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Irvine">Irvine, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Torrance">Glendale, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Diamond Bar">Diamond Bar, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Buena Park">Buena Park, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Rowland Heights">Rowland Heights, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Cypress">Cypress, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=La Mirada">La Mirada, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=La Crescenta">La Crescenta, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=La Canada">La Canada, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Garden Grove">Garden Grove, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=San Diego">San Diego, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Anaheim">Anaheim, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Yorba Linda">Yorba Linda, CA</a></li>
                <li><a href="?page=<?php echo $page;?>&action=edit&region=Walnut">Walnut, CA</a></li>
            </ul>
        </div>
    </div>
    
    <div class="form-group col-xs-12">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
            <textarea class="form-control vresize" rows="15" id="body" placeholder="Comment/Description..."></textarea>
        </div>
    </div><!-- END textarea form -->';
    <?php
}

?>

