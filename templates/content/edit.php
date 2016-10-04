<?php
// Template edit.php:

?>

<div class='container'>
    <div class='row'>
        <div class='col-xs-12 col-md-12'>
            <div class='header-box'>
                <h2><?php edit_side_heading($page) ?></h2>
                <?php //edit_main_category_dropdown($page) ?>
            </div>
            
            <div class='form-box'>
                <form class="" action="" method="post">
                    <?php
                        form_category($page);
                    ?>
                </form>
            </div><!-- END class 'form-box' -->
            
        </div><!-- END side column -->

        <div class='col-xs-12 col-md-12'>
            <div class='form-box'>
                <div class='row'>
                    <form class="" action="" method="post">
                        <?php
                            form_general($page);
                        ?>
                    </form>
                </div><!-- END row -->
            </div><!-- END form card -->
            

            <div class='tray-box'>
                <div class="btn-form-submit">
                    <button type="submit" class="btn btn-default btn-lg btn-primary"><b>등록하기</b></button>
                </div>
            </div><!-- END submit button -->
            
        </div><!-- END main column -->
    </div>
</div>