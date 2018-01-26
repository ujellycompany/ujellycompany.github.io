<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;

echo '<?xml'; ?> version="1.0" encoding="<?php echo $config['charset']; ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $config['language']; ?>" lang="<?php echo $config['language']; ?>">
<head>
  <title><?php echo $sTitle.$config['title']; ?></title>
  <meta name="Language" content="<?php echo $config['language']; ?>" />
  <meta name="Description" content="<?php echo $sDescription; ?>" />
  <meta name="Generator" content="<?php echo $config['version']; ?>" />

  <link rel="stylesheet" href="<?php echo $config['dir_skin'].$config['style']; ?>" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $config['dir_core']; ?>common.js"></script>
  <script type="text/javascript" src="<?php echo $config['dir_plugins']; ?>mlbox/mlbox.js"></script>
  <script type="text/javascript">
    var cfLangNoWord      = "<?php echo $lang['cf_no_word']; ?>";
    var cfLangMail        = "<?php echo $lang['cf_mail']; ?>";
    var cfWrongValue      = "<?php echo $lang['cf_wrong_value']; ?>";
  </script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript">
    $(document).on("scroll", function() {

      if($(document).scrollTop()>100) {
        $("#large").removeClass("container").addClass("small");
        $("#searchbutton").removeClass("searchlarge").addClass("searchsmall");
        $("#jellylogo").removeClass("logolarge").addClass("logosmall");
      } else {
        $("#large").removeClass("small").addClass("container");
        $("#searchbutton").removeClass("searchsmall").addClass("searchlarge");
        $("#jellylogo").removeClass("logosmall").addClass("logolarge");
      }

    });

  </script>

  <?php displayAlternateTranslations( ); ?>
</head>
<body<?php if( isset( $aData['iPage'] ) && is_numeric( $aData['iPage'] ) ) echo ' id="page'.$aData['iPage'].'"'; elseif( isset( $aData['iProduct'] ) && is_numeric( $aData['iProduct'] ) ) echo ' id="product'.$aData['iProduct'].'"'; ?>>
<ul id="skiplinks">
  <li><a href="#menu2" tabindex="1"><?php echo $lang['Skip_to_main_menu']; ?></a></li>
  <li><a href="#content" tabindex="2"><?php echo $lang['Skip_to_content']; ?></a></li>
  <?php 
  if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ ?>
  <li><a href="#search" tabindex="3"><?php echo $lang['Skip_to_search']; ?></a></li>
  <?php } ?>
</ul>

<div id="container">
  <div id="header">

   <div id="head3" ><?php // second top menu starts here ?>
    <div id="large" class="container" >
      <?php echo $oPage->throwMenu( 2, $iContent, 0 ); // content of top menu second ?>
      <div id="shopsecimage"> <img src="templates/default/img/jelly.png" id="jellylogo" class="logolarge"> </div>

      <div id="head1"><?php // first top menu starts here ?>
        <?php echo $oPage->throwMenu( 1, $iContent, 0 ); // content of top menu first ?>
        <form method="post" action="<?php echo $oPage->aPages[$config['page_search']]['sLinkName']; ?>" id="searchForm">
          <fieldset>
            <legend><?php echo $lang['Search_form']; ?></legend>
            <span><label for="searchField"><?php echo $lang['search']; ?></label><input type="text" size="15" placeholder="zoeken" name="sPhrase" id="searchField" value="<?php echo $sPhrase; ?>" class="input" maxlength="100" accesskey="1" /></span>
            <em><input type="submit" value=""  id="searchbutton" class="searchlarge" /></em>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <div id="head2"><?php // banner, logo and slogan starts here ?>
    <div class="container">
      <div id="logo"><?php // logo and slogan ?>

        <div id="title"><a href="./" tabindex="4"><?php echo $config['logo']; ?></a></div>
        <div id="slogan"><?php echo $config['slogan']; ?></div>
      </div>
    </div>
  </div>
</div>
<div id="body"<?php if( isset( $config['this_is_order_page'] ) ) echo ' class="order"'; elseif( isset( $config['this_is_basket_page'] ) ) echo ' class="basket-page"'; ?>>
  <div class="container">
    <div id="column"><?php 
    if( !isset( $config['this_is_order_page'] ) ){ // left column with left menu ?><?php
      if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ // search form starts here ?>
      <a id="search" tabindex="-1"></a>
      <?php
    }  // search form ends here ?><?php 
    echo $oPage->throwMenu( 3, $iContent, 1, true ); // content of left menu ?><?php 
  }?>       
</div>
<div id="content">