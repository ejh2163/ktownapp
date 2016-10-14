<?php
// Template edit.php:

?>
<div class='container'>
    <div class='row'>
        <div class='col-xs-12 col-md-12'>
            <div class='heading-box'>
                <h2 class="heading"><?php edit_side_heading($page) ?></h2>
            </div>
            
            <div class='form-box fade-in'>
                <div class="row">
                    <form class="" action="" method="post">
                        <?php
                            form_category($page);
                        ?>
                    </form>
                </div>
            </div><!-- END class 'form-box' -->
        </div><!-- END side column -->

        <div class='col-xs-12 col-md-12'>
            <div class='form-box fade-in'>
                <div class='row'>
                    <?php
                        $custom_subject = '';
                        if($page=='homes'){
                            $custom_subject = 'Address/주소';
                        } else if($page=='jobs'){
                            $custom_subject = 'Employer/회사명';
                        } else{
                            $custom_subject = '제목';
                        }
                    ?>
                    <form class="" action="" method="post">
                        <div class="form-group col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="subject" placeholder="<?php echo $custom_subject; ?>">
                            </div>
                        </div> <!-- END subject form -->
                        <div class="dropdown col-xs-5 col-sm-3">
                            <div class="input-group">
                                <label for="region">
                                    <?php
                                    if(!empty($_GET['region'])) {
                                        echo $_GET['region'];
                                    } ?>
                                </label>
                                <select class="form-control" id="region">
                                    <option><a href="/<?php echo $page;?>/edit?region=Los Angeles County">지역</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=Los Angeles County">Los Angeles County</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=Orange County">Orange County</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=Riverside County">Riverside County</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=San Diego County">San Diego County</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=San Bernardino County">San Bernardino County</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=Santa Barbara County">Santa Barbara County</a></option>
                                    <option><a href="/<?php echo $page;?>/edit?region=Ventura County">Ventura County</a></option>
                                </select>
                            </div>
                        </div><!-- END region select -->
                        <div class="form-group col-xs-7 col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" class="form-control" id="phone" placeholder="전화 (optional)">
                            </div>
                        </div><!-- END phone form -->
                        <div class="form-group col-xs-12 col-sm-5">
                            <div class="input-group" >
                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="email" placeholder="Email (optional)">
                            </div>
                        </div><!-- END email form -->
                        <div class="form-group col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                <textarea class="form-control vresize" rows="12" id="body" placeholder="Comment/Description..."></textarea>
                            </div>
                        </div>
                    </form><!-- END textarea -->
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