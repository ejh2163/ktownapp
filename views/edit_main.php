<?php
// Views form_main.php:

function edit_main_heading($page){
    echo '<i class="glyphicon glyphicon-edit" aria-hidden="true"></i>';
	switch($page){
    	case "":
    		echo "&nbspHome"; break;
    	case "jobs":
    		echo "&nbsp구인 글쓰기"; break;
    	case "sale":
    		echo "&nbsp사고/팔고 글쓰기"; break;
    	case "cars":
    		echo "&nbsp자동차 글쓰기"; break;
    	case "homes":
    		echo "&nbsp집/부동산 글쓰기"; break;
    	case "services":
    		echo "&nbsp전문서비스 글쓰기"; break;
    	case "free":
    		echo "&nbsp자유게시판"; break;
	}
} // END main heading

function page_form(){
    
}

function form_cars(){
    echo "<div class='dropdown' style='margin: 9px;'>";
        echo "<button type='button' class='btn btn-default btn-lg dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
            echo "게시판 목록";
            echo "<span class='caret'></span>";
        echo "</button>";
        echo "<ul class='dropdown-menu'>";
            echo "<li><a href=''>구인</a></li>";
            echo "<li><a href=''>사고팔고</a></li>";
            echo "<li><a href=''>자동차</a></li>";
            echo "<li><a href=''>집/부동산</a></li>";
        echo "</ul>";
    echo "</div>";
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

