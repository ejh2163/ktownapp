<?php
// Template listing.php:

?>

<div class='container'>
    <div class='row'>
    	<div class='col-xs-12 col-md-3'>
    	    <div class='header-box'>
    	        <h2><i class='fa fa-filter' aria-hidden='true'></i><?php listing_side_heading($page); ?></h2>
    	    </div>
            <div class='clear'></div>
            
    		<?php
            // listing_side:
                generate_side($page);
            ?>
            
    	</div>
        <div class='col-xs-12 col-md-9'>
			<div class='header-box'>
			    <h2><i class='fa fa-th-list' aria-hidden='true'></i><?php listing_main_heading($page); ?></h2>
			    <a class="btn btn-default btn-lg btn-edit" href="<?php echo '?page='.$page.'&'; ?>action=edit" role="button">+글쓰기</a>
			</div>
	        <div class='clear'></div>
			
			<?php
            // listing_main:
                $result_premium = get_data_premium($dbc, $page);
                $result_general = get_data_general($dbc, $page, $page_num);
                listing_premium($result_premium, $page);
                listing_general($result_general, $page);
                mysqli_close($dbc);
            ?>
            
            <div class='tray-box'>
                <a class="btn btn-default btn-lg btn-edit" href="<?php echo '?page='.$page.'&'; ?>action=edit" role="button">+글쓰기</a>
            </div>
            <div class='clear'></div>
            <?php
                include('pagination.php');
            ?>
            
        </div>
    </div>
</div>