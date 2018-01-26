<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?>
<div id="options"><div class="print"><a href="javascript:window.print();"><?php echo $lang['print']; ?></a></div><div class="back"><a href="javascript:history.back();">&laquo; <?php echo $lang['back']; ?></a></div></div>
</div>
</div>
</div>

<div id="foot"><?php // footer starts here ?>
  <div class="container">

    <div id="footer">

      <div class="socialwrapper">
       <div id="retour">
         <h1 class="footerheader">VERZENDEN & RETOUREN</h1>
         <ul>
          <li> <a href="?track-trace,26">Track & Trace</a> </li>
          <li> <a href="?artikel-retouren,27">Artikel retouren </a> </li>
        </div>
        <div id="socials">
          <h1 class="footerheader">SOCIALS</h1>
          <div class="iconcontainer">
            <a href="https://www.mailinator.com"  target="_blank"><div id="mailicon"></div></a>
            <a href="https://www.instagram.com/p/Bd5stY9nKXT/?tagged=jelly"  target="_blank"><div id="instagramicon"></div></a>
            <a href="https://twitter.com/tastemade/status/953677232207286274"  target="_blank"><div id="twittericon"></div></a>
            <a href="https://www.facebook.com/myjesusjam/" target="_blank"><div id="facebookicon"></div></a>
          </div>
          <div id="contactus">
            <img src="templates/default/img/socials/phone_dark.png" class="phoneicon" width="20" height="20">
            <span style="padding-top: 10px;">+123 456 789</span>
          </div>  
        </div>
        <div id="customerservice">
         <a href="?klantenservice,22"><h1 class="footerheader"> KLANTENSERVICE </h1></a>
         <ul>
          <li> <a href="?faq,23">FAQ</a> </li>
          <li> <a href="?betalen,24">Betalen</a></li>
          <li> <a href="?versheidsgarantie,25"> Versheidsgarantie </a></li>
        </div>


      </div>
      <div id="copy"><?php echo $config['foot_info']; ?></div>
    </div>


  </div>
</div>
</div>
</body>
</html>