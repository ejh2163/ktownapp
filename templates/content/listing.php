<?php
// Template listing.php:

?>
<div class='container'>
    <div class='row'>
    	<div class='col-xs-12 col-md-12'>
    	    <div class='heading-box'>
    	        <h2 class='heading'><?php listing_heading($page); ?></h2>
    	        <?php listing_button($page); ?>
    	    </div>
            
            <div class='filter-box'>
                <?php generate_filter($page); ?>
			</div>

            <?php
                $filter_type = filter_by_type($page, $type);
                $result_premium = get_data_premium($dbc, $page);
                $result_general = get_data_general($dbc, $page, $pagenum, $filter_type);
            ?>
            
            <div class="sub-heading-box">
                <h3 class="sub-heading">Premium Listings:</h3>
            </div>
            <div class="row">
    			<?php listing_premium($result_premium, $page); ?>
            </div>
            
            <div class="sub-heading-box">
                <h3 class="sub-heading">Featured Listings:</h3>
            </div>
            <div class="row">
                <?php listing_general($result_general, $page); ?>
            </div>
            
            <div class='tray-box'>
                <?php listing_button($page); ?>
            </div>
            <?php pagination($page, $pagenum, $type); ?>
        </div>
    </div>
</div>