
<?php 
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;


require_once DIR_SKIN.'_header.php'; // include design of header
?>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("imgslider");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}

});



</script>

<div id="page">
  <?php
if( isset( $aData['sName'] ) ){ // displaying pages and subpages content

  echo '<h1>'.$aData['sName'].'</h1>'; // displaying page name

  if( isset( $aData['sPagesTree'] ) )
    echo '<div class="breadcrumb">'.$aData['sPagesTree'].'</div>'; // displaying page tree (breadcrumb)
  
  echo $oFile->listImagesByTypes( $aData['iPage'], 1 ); // displaying images with type: left
  
  echo $oFile->listImagesByTypes( $aData['iPage'], 2 ); // displaying images with type: right
  
  if( isset( $aData['sDescriptionFull'] ) )
    echo '<div class="content" id="pageDescription">'.$aData['sDescriptionFull'].'</div>'; // full description

  if( isset( $aData['sPages'] ) )
    echo '<div class="pages">'.$lang['Pages'].': <ul>'.$aData['sPages'].'</ul></div>'; // full description pagination
  
  echo $oFile->listFiles( $aData['iPage'] ); // display files included to the page
  
  if( $aData['iSubpagesShow'] > 0 )
    echo $oPage->listSubpages( $aData['iPage'], $aData['iSubpagesShow'] ); // displaying subpages

  if( isset( $aData['iProducts'] ) ){
    $oProduct = Products::getInstance( );
    $_SESSION['sLastProductsPageUrl'] = $_SERVER['REQUEST_URI'];
    $_SERVER['REQUEST_URI'] = str_replace( '&', '&amp;', $_SERVER['REQUEST_URI'] );
    echo $oProduct->listProducts( $aData['iPage'], isset( $bViewAll ) ? 999 : null ); // displaying products
  }
}
else{
  echo '<div class="message" id="error"><h2>'.$lang['Data_not_found'].'</h2></div>'; // displaying 404 error
}
?>
</div>
<?php
require_once DIR_SKIN.'_footer.php'; // include design of footer
?>
