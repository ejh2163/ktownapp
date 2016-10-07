<?php
// Template listing.php:

?>

<div class='container'>
    <div class='row'>
    	<div class='col-xs-12 col-md-12'>
    	    <div class='header-box'>
    	        
    	    </div>
            <div class='clear'></div>
            
    		<?php
            // listing_side:
                generate_side($page);
            ?>
    	</div>
        <div class='col-xs-12 col-md-12'>
            
			<div class='header-box'>
			    <h2><?php listing_side_heading($page); ?></h2>
			    <?php listing_button($page); ?>
			</div>
	        <div class='clear'></div>
	        
			<div class='filter-box'>
                
			</div>
			<div class='clear'></div>
			
			<?php
            // listing_main:
                $result_premium = get_data_premium($dbc, $page);
                $result_general = get_data_general($dbc, $page, $pagenum);
                listing_premium($result_premium, $page);
                listing_general($result_general, $page);
            ?>
            <div class='tray-box'>
                <?php listing_button($page); ?>
            </div>
            <?php pagination($page, $pagenum); ?>
        </div>
    </div>
</div>