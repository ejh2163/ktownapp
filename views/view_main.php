<?php
// view_main:

generate_main_heading($cat);

$result_premium = get_premium_data($dbc, $cat, $page_num);
$result = get_category_data($dbc, $cat, $page_num);
mysqli_close($dbc);

generate_premium_listing($result_premium, $cat);
generate_category_listing($result, $cat);

?>



