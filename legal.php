<!DOCTYPE html>
<?php require_once('connectvars.php'); ?>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#9b7cab">
  <title>Legal Information | i❤colors</title>
  <meta name="description" content="iheartcolors-a color library for the world, by the world" />
  <meta name="keywords" content="colors, colours, flat design, flat ui, flat colors, flat colours, flat ui colors, color library" />
  <meta name="author" content="sudipto" />
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/iheartcolors.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" href="fonts/font-awesome-4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/tip-twitter/tip-twitter.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/ns-default.css" />
  <link rel="stylesheet" type="text/css" href="css/ns-style-growl.css" />

  <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script type="text/javascript" src="js/jquery.poshytip.js"></script>

  <script type="text/javascript">
    //<![CDATA[
    			$(function(){

    				$('#home,#plus,#info,#logout,#delete,#faq,#share,#search,#tag').poshytip({
    					className: 'tip-twitter',
    					showTimeout: 80,
    					alignTo: 'target',
    					alignX: 'center',
    					offsetY: 10,
    					allowTipHover: false,
    					fade: false,
    					slide: false
    				});

    				});
    				//]]>
  </script>

</head>

<body>

  <!--START SEARCH CONTAINER-->
  <div class="search-container">
    <div class="overlay"></div>
    <div class="search-area">

      <?php
				if ( !empty($_POST['searchfield']) )
				{
					$url=$_POST['searchfield'];
					echo '<script>window.location = "search-result.php?q='.$url.'";</script>';
					die;
				}
				?>

        <form method="post" action="index.php" class="site-search">
          <input class="search-field" id="search-field" type="text" name="searchfield" placeholder="Search Colors" autocomplete="off" />
        </form>

        <div class="search-msg">
          <div class="main-msg">Type a search term and hit enter.</div>
          <div class="sub-msg">Search by color tag, color name or username.<br/>Example search terms: <span class="search-eg-bold">"grey" "sweet leaf" "anonymous"</span></div>
        </div>

    </div>
    <!--END SEARCH AREA-->

    <div class="search-close">× <span class="close-name">Close</span></div>

  </div>
  <!--END SEARCH CONTAINER-->

  <!--START CONTAINER-->
  <div class="container">

    <!--START HEADER-->
    <div class="header">
      <div class="left_shift_header">
        <a href="index.php"><h1 class="logo">i<span style="color:#ed7161; font-size:0.7em;">❤</span>colors</h1></a>
        <h4 class="tagline">BETA</h4>
      </div>

      <nav>
        <a href="addcolor.php" class="bp-icon plus add_color_btn" id="plus" title="Add New Color"><i class="fa fa-plus"></i></a>

        <a href="javascript:void(0);" class="bp-icon search" id="search" title="Search Colors"><i class="fa fa-search"></i></a>

        <a href="javascript:void(0);" class="bp-icon info md-trigger" data-modal="modal-7" id="info" title="About i❤colors"><i class="fa fa-info"></i></a>

        <a href="javascript:void(0);" class="bp-icon faq md-trigger" data-modal="modal-8" id="faq" title="FAQs"><i class="fa fa-question"></i></a>

        <a href="javascript:void(0);" class="bp-icon con md-trigger" data-modal="modal-9" id="share" title="Share the love"><i class="fa fa-heart"></i></a>
      </nav>
    </div>
    <!--END HEADER-->

    <!--START COLOR GRID-->
    <div class="color_grid_container">
      <div class="legal_page">

        <h2><span style="font-family:'Source Sans Pro',sans-serif; font-weight:900; font-size:1.3em;">i<span style="color:#ff8070; font-size:0.8em;">❤</span>colors</span>:&nbsp; Terms of Use and Privacy Policy</h2>

        <div class="legal_data">
          <p><strong>Last Updated:</strong> 09/04/2016</p>
          <h3>1. Terms</h3>

          <p>By accessing <a href="http://iheartcolors.com/">iheartcolors.com</a>, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any
            applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trademark law.</p>

          <h3>2. Use License</h3>

          <ol type="a">
            <li>Permission is granted to use all the materials(colors) on iheartcolors for personal as well as commercial use.</li>
            <li>This is the grant of a license not a transfer of title.</li>
            <li>This license shall automatically terminate if you violate any of these restrictions.</li>
          </ol>

          <h3>3. Disclaimer</h3>

          <p>The Website is provided "as is". iheartcolors and its suppliers and licensors hereby disclaim all warranties of any kind, express or implied, including, without limitation, the warranties of merchantability, fitness for a particular purpose
            and non-infringement. Neither iheartcolors nor its suppliers and licensors, makes any warranty that the Website will be error free or that access thereto will be continuous or uninterrupted. You understand that you download from, or otherwise
            obtain content or services through, the Website at your own discretion and risk.
          </p>

          <h3>4. Limitation of Liability</h3>

          <p>In no event will iheartcolors or its suppliers or licensors, be liable with respect to any subject matter of this agreement under any contract, negligence, strict liability or other legal or equitable theory for:

            <ol type="a">
              <li>any special, incidental or consequential damages;</li>
              <li>for interruption of use or loss or corruption of data.</li>
            </ol>
            iheartcolors shall have no liability for any failure or delay due to matters beyond their reasonable control. The foregoing shall not apply to the extent prohibited by applicable law.</p>

          <h3>5. Revisions and Errata</h3>

          <p>The materials appearing on site could include technical errors. iheartcolors does not warrant that any of the materials on this site are accurate, complete, or current. iheartcolors may make changes to the materials contained on its web site
            at any time without notice. iheartcolors do not, however, make any commitment to update the materials.</p>

          <h3>6. Links</h3>

          <p>iheartcolors has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by us of the site. Use of any such linked web
            site is at the user's own risk.</p>

          <h3>7. Site Terms of Use Modifications</h3>

          <p>iheartcolors may revise these terms of use for its web site at any time without notice. Although the last update date will be provided here. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions
            of Use.</p>

          <h3>8. Governing Law</h3>

          <p>Any claim relating to iheartcolors shall be governed by the laws of India without regard to its conflict of law provisions.</p>

          <p>General Terms and Conditions applicable to Use of a Web Site.</p>

        </div>
      </div>
      <!--END PAGE-->

      <div class="legal_page">
        <h2>Privacy Policy</h2>

        <div class="legal_data">
          <p><strong>Last Updated:</strong> 09/04/2016</p>
          <p>Your privacy is important, and it is iheartcolors's policy to respect your privacy regarding any information we may collect while operating our websites. Accordingly, we have developed this Policy in order for you to understand how we collect,
            use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>

          <ul>
            <li>iheartcolors does not collect any personal data like email address, payment information etc.</li>
            <li>iheartcolors just uses your first name in order to keep track of the materials(colors) on this site.</li>
            <li>iheartcolors will collect and use of this information solely with the objective of improving user experience, enhance site's features etc.</li>
            <li>iheartcolors will only retain this information as long as necessary for the fulfillment of those purposes.</li>
            <li>iheartcolors will collect information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
            <li>iheartcolors will make readily available to customers information about our policies and practices relating to the management of this information.</li>
          </ul>

          <p>iheartcolors may change its Privacy Policy from time to time, and at iheartcolors's sole discretion.</p>
        </div>
      </div>
      <!--END PAGE-->

    </div>
    <!--END COLOR GRID-->

  </div>
  <!--END CONTAINER-->

  <!--START MODALS-->
  <div class="md-modal md-effect-7" id="modal-7">
    <div class="md-content">
      <h3>About &nbsp;<span style="font-family:'Source Sans Pro',sans-serif; font-weight:900;">i<span style="color:#ff8070; font-size:0.8em;">❤</span>colors</span></h3>
      <div>
        <p><strong>Thanks for using i❤colors my precious!</strong></p>
        <p>Welcome to i❤colors - a public library of colors for you, by you. i❤colors provides you with wide range of colors submitted by creative minds around the world.</p>
        <p>Click &nbsp;<i class="fa fa-plus"></i>&nbsp; to add new color anonymously or by a username. Tap on the hex code or the &nbsp;<i class="fa fa-clone"></i>&nbsp; icon beside the rgb values and voila! You have the color copied to your clipboard. That's
          how easy it is!</p>
        <p><strong>NOTE</strong>: i❤colors is still in beta and may have some bugs, but i am working on it so that the stable version can be released ASAP. I will add more features in future based on your <a href="http://sladnom.blogspot.in/p/contact.html"
            target="_blank" title="Provide your feedback here">feedback</a>.</p>
        <p>
          Crafted with ❤ by
          <a href="http://sladnom.blogspot.in/" target="_blank">Sudipto Mondal</a>
        </p>
        <p>Check out the <a href="legal.php">Legal Information</a> for Terms of Use and Privacy Policy.</p>
        <p>&copy; 2016 i❤colors | BETA</p>
        <button class="md-close">×</button>
      </div>
    </div>
  </div>

  <div class="md-modal md-effect-7" id="modal-8">
    <div class="md-content">
      <h3>FAQs</h3>
      <div>
        <p><strong>How to pronunce i❤colors?</strong><br/>It's Easy! Just repeat after me. I-HEART-COLORS.</p>
        <p><strong>Can i add my own colors?</strong><br/>Yes, you can. Head over to the <a href="addcolor.php">Add New Color</a> page to add one.</p>
        <p><strong>Do i need to signup/login to add colors?</strong><br/>No, as i❤colors is a public color library - anyone can add their own color without the need of signing up.</p>
        <p><strong>Is it mandatory to use my name everytime i add a color?</strong><br/>No, its not. Well it's upto you. You can add colors either by using your first name or anonymously.</p>
        <p><strong>Are the colors free to use?</strong><br/>Absolutely! All the colors on i❤colors are free to use for both personal and commercial use. Read the <a href="legal.php">Legal Information</a> for more information.</p>
        <p><strong>More questions?</strong><br/>Feel free to drop me a message <a href="http://sladnom.blogspot.in/p/contact.html" target="_blank">here</a>.</p>
        <button class="md-close">×</button>
      </div>
    </div>
  </div>

  <div class="md-modal md-effect-7" id="modal-9">
    <div class="md-content">
      <div>
        <p>
          <center><span style="font-size: 20px; font-weight:400;">Share if you <strike>like</strike> love i❤colors</span></center>
        </p>

        <div class="social_share_icons">
          <a href="mailto:?subject=Check%20Out%20I%20Heart%20Colors&body=Hey!%20Check%20out%20this%20awesome%20tool%20for%20choosing%20colors%20for%20your%20project%20UI:%20http%3A%2F%2Fiheartcolors.com" id="mail_share"><i class="fa fa-envelope"></i></a>
          <a href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A//www.iheartcolors.com', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"
            id="fb_share"><i class="fa fa-facebook"></i></a>
          <div class="block_on_tab"></div>
          <a href="javascript:void(0);" onclick="window.open('https://twitter.com/home?status=Check%20out%20this%20awesome%20tool%20for%20selecting%20colors%20for%20your%20project%20UI.%0AYou%20will%20l%CC%B6i%CC%B6k%CC%B6e%CC%B6%20love%20it!%0Ahttp%3A//www.iheartcolors.com', 'twitter_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"
            id="twitter_share"><i class="fa fa-twitter"></i></a>
          <a href="javascript:void(0);" onclick="window.open('https://plus.google.com/share?url=http%3A//www.iheartcolors.com', 'gplus_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"
            id="gplus_share"><i class="fa fa-google-plus"></i></a>
          <div class="block_on_tab"></div>
          <a href="javascript:void(0);" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.iheartcolors.com&title=I%20Heart%20Colors&summary=This%20is%20i%E2%9D%A4colors%20-%20a%20public%20library%20of%20colors%20for%20you,%20by%20you.%20i%E2%9D%A4colors%20provides%20you%20with%20wide%20range%20of%20colors%20submitted%20by%20creative%20minds%20around%20the%20world.&source=', 'in_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"
            id="in_share"><i class="fa fa-linkedin"></i></a>
          <a href="javascript:void(0);" onclick="window.open('https://pinterest.com/pin/create/button/?url=http%3A//www.dreamtimefx.com/sites/default/files/blog/featured-images/flat-colors.png&media=http%3A//www.dreamtimefx.com/sites/default/files/blog/featured-images/flat-colors.png&description=This%20is%20i%E2%9D%A4colors%20-%20a%20public%20library%20of%20colors%20for%20you,%20by%20you.%20i%E2%9D%A4colors%20provides%20you%20with%20wide%20range%20of%20colors%20submitted%20by%20creative%20minds%20around%20the%20world.', 'gplus_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"
            id="pin_share"><i class="fa fa-pinterest-p"></i></a>
        </div>

        <p></p>
        <button class="md-close">×</button>
      </div>
    </div>
  </div>

  <div class="md-overlay"></div>
  <!--END MODALS-->

  <!--JS PLIUGINS-->
  <script src="js/classie.js"></script>
  <script src="js/modalEffects.js"></script>

  <!--SEARCH TRIGGER-->
  <script>
    $("#search").click( function(){
    			  if(!$(".search-container").is(":visible")){
    			    $(".search-container").css("display","block");
    					$('body').css("overflow","hidden");
    			  }
    			});

    			$(".search-close").click( function(){
    			  if($(".search-container").is(":visible")){
    			    $(".search-container").css("display","none");
    					$('body').css("overflow","auto");
    			  }
    			});
  </script>

</body>

</html>
