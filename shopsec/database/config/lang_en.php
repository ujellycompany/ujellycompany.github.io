<?php
/*
* Start page
*/
$config['start_page'] = "1";
$config['rules_page'] = "4";
$config['page_search'] = "17";
$config['basket_page'] = "15";
$config['order_page'] = "16";
$config['order_print'] = "18";

$config['products_list'] = "6";

$config['currency_symbol'] = "EUR";
$config['orders_email'] = "cvannimwegen@gmail.com";

/*
* Your website's title, description
*/
$config['logo'] = "Shopsec";
$config['title'] = "Shopsec";
$config['description'] = "";
$config['slogan'] = "Trust you can build on like buildings you can trust on";
$config['foot_info'] = "Copyright Shopsec 2015 ©";

// Define all page ids where page tree for product list should be displayed
$aDisplayPagesTreeInProductsList = Array( $config['page_search']=>true );

/*
// Define characters that you want to be replaced in URL addresses, for example: ą to a, ü to u, etc
// Default charsets are specified in the core/libraries/trash.php in function change2Latin()
function change2Latin( $sContent ){
  return str_replace(
    Array( 'ś', 'ą' ), // from
    Array( 's', 'a' ), // to
    $sContent
  );
} // end function change2Latin
*/
?>