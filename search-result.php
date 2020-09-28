<!DOCTYPE html>
<?php require_once('connectvars.php'); ?>
<?php
if ( empty($_GET['q']) )
{
    header('Location: index.php');
    exit;
}
?>
  <html lang="en" class="no-js">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9b7cab">
    <title>i❤colors - colors for you, by you.</title>
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
    <script src="js/clipboard.min.js"></script>

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

        <!--PHP LOOP ADD DATA-->
        <?php
									$search_query=$_GET["q"];
									$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
									$query = "SELECT * FROM `colors` WHERE Concat(hex_val, rgb_val, color_name, added_by, color_tag) LIKE '%$search_query%' ORDER BY id DESC";
									$result = mysqli_query($dbc, $query);
									$counter = mysqli_num_rows($result);

                  if ($counter != 0) {
									  echo '<div class="search_message">'.$counter.' color(s) found for <span class="bolded">"'.$search_query.'"</span></div>';
                  }
                  else {
                    echo '<div class="search_message">No color(s) found for <span class="bolded">"'.$search_query.'"</span></div>';
                  }


									echo '<div class="section group">';
										while($row = mysqli_fetch_array($result))
										{
											echo '<div class="col span_1_of_4"><!--START COLORBOX-->';
											echo '<div class="color_box">';
											echo '<div class="color_hex_bg" data-clipboard-text="'.$row['hex_val'].'" style="background:'.$row['hex_val'].'">'.$row['hex_val'].'</div>';
											echo '<div class="color_info">';
											echo '<div class="color_name" data-clipboard-text="'.$row['hex_val'].'" style="color:'.$row['hex_val'].'">'.$row['color_name'].'</div>';
                      echo '<div class="color_rgb">'.$row['rgb_val'].' &nbsp;<span class="rgb_copy_icon" style="cursor:pointer;" data-clipboard-text="'.$row['rgb_val'].'"><i class="fa fa-clone"></i></span></div>';
											echo '<div class="added_by">by <span class="bolded"><a href="search-result.php?q='.$row['added_by'].'" class="no_dec">'.$row['added_by'].'</a></span></div>';
											echo '<div class="added_on">on <span class="bolded">'.$row['date_added'].'</span></div>';
											echo '<div class="color_tag">color tag<a href="search-result.php?q='.$row['color_tag'].'" class="tag" id="tag" style="background:'.$row['color_tag'].'" title="'.$row['color_tag'].'"></a></div>';
											echo '</div></div></div>';
										}
									echo '</div>';

									mysqli_close($dbc);
									?>
          <!--PHP LOOP ADD DATA-->
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
          <p>Welcome to i❤colors - a public library of colors for you, by you.
            i❤colors provides you with wide range of colors submitted by creative minds around the world.</p>
          <p>Click &nbsp;<i class="fa fa-plus"></i>&nbsp; to add new color anonymously or by a username. Tap on the hex code or the &nbsp;<i class="fa fa-clone"></i>&nbsp; icon beside the rgb values and voila!
            You have the color copied to your clipboard. That's how easy it is!</p>
          <p><strong>NOTE</strong>: i❤colors is still in beta and may have some bugs,
            but i am working on it so that the stable version can be released ASAP.
            I will add more features in future based on your <a href="http://sladnom.blogspot.in/p/contact.html" target="_blank" title="Provide your feedback here">feedback</a>.</p>
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
          <p><center><span style="font-size: 20px; font-weight:400;">Share if you <strike>like</strike> love i❤colors</span></center></p>

          <div class="social_share_icons">
            <a href="mailto:?subject=Check%20Out%20I%20Heart%20Colors&body=Hey!%20Check%20out%20this%20awesome%20tool%20for%20choosing%20colors%20for%20your%20project%20UI:%20http%3A%2F%2Fiheartcolors.com" id="mail_share"><i class="fa fa-envelope"></i></a>
            <a href="javascript:void(0);" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A//www.iheartcolors.com', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');" id="fb_share"><i class="fa fa-facebook"></i></a>
            <div class="block_on_tab"></div>
            <a href="javascript:void(0);" onclick="window.open('https://twitter.com/home?status=Check%20out%20this%20awesome%20tool%20for%20selecting%20colors%20for%20your%20project%20UI.%0AYou%20will%20l%CC%B6i%CC%B6k%CC%B6e%CC%B6%20love%20it!%0Ahttp%3A//www.iheartcolors.com', 'twitter_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');" id="twitter_share"><i class="fa fa-twitter"></i></a>
            <a href="javascript:void(0);" onclick="window.open('https://plus.google.com/share?url=http%3A//www.iheartcolors.com', 'gplus_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');" id="gplus_share"><i class="fa fa-google-plus"></i></a>
            <div class="block_on_tab"></div>
            <a href="javascript:void(0);" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.iheartcolors.com&title=I%20Heart%20Colors&summary=This%20is%20i%E2%9D%A4colors%20-%20a%20public%20library%20of%20colors%20for%20you,%20by%20you.%20i%E2%9D%A4colors%20provides%20you%20with%20wide%20range%20of%20colors%20submitted%20by%20creative%20minds%20around%20the%20world.&source=', 'in_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');" id="in_share"><i class="fa fa-linkedin"></i></a>
            <a href="javascript:void(0);" onclick="window.open('https://pinterest.com/pin/create/button/?url=http%3A//www.dreamtimefx.com/sites/default/files/blog/featured-images/flat-colors.png&media=http%3A//www.dreamtimefx.com/sites/default/files/blog/featured-images/flat-colors.png&description=This%20is%20i%E2%9D%A4colors%20-%20a%20public%20library%20of%20colors%20for%20you,%20by%20you.%20i%E2%9D%A4colors%20provides%20you%20with%20wide%20range%20of%20colors%20submitted%20by%20creative%20minds%20around%20the%20world.', 'gplus_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');" id="pin_share"><i class="fa fa-pinterest-p"></i></a>
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
    <script src="js/notificationFx.js"></script>

    <!--COPY TO CLIPBOARD-->
    <script>
      var clipboard = new Clipboard('.color_hex_bg, .rgb_copy_icon');

    		    clipboard.on('success', function(e) {
    		        console.log(e);
    		    });

    		    clipboard.on('error', function(e) {
    		        console.log(e);
    		    });
    </script>

    <!--COLOR CONTRAST-->
    <script>
      $(".color_hex_bg").each(function() {
      				//Color text change
      				var color = $(this).css('background');
      				var regExp = /\(([^)]+)\)/;
      				var matches = regExp.exec(color);
      				var rgb = matches[1].split(',');
      				var c = 'rgb('+rgb[0]+','+rgb[1]+','+rgb[2]+')';
      				var o = Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) /1000);
      				if(o > 153) {
      				    $(this).css('color', 'rgba(0,0,0,0.4)');
      				}else{
      				    $(this).css('color', 'rgba(255,255,255,0.9)');
      				}
      		});
    </script>

    <!--CLIPBOARD NOTIFICATION-->
    <script>
      $(".color_hex_bg, .rgb_copy_icon").each(function() {
      					$(this).click(function() {
      						// create the notification
      						if(!$('.ns-box').is(":visible")){
      						var notification = new NotificationFx({
      							message : '<p><i class="fa fa-clipboard"></i> &nbsp;Color copied to your Clipboard!</p>',
      							layout : 'growl',
      							effect : 'slide',
      							type : 'notice', // notice, warning or error
      							onClose : function() {
      						}
      						});
      						// show the notification
      						notification.show();
      					}
      				});
      			});
    </script>

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
