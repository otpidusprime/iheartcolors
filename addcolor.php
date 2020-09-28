<!doctype html>
<?php require_once('connectvars.php'); ?>
<?php
/*if (!isset($_COOKIE['username']))
{
    header('Location: index.php');
    exit;
}*/
?>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#9b7cab">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
  <link rel="stylesheet" href="css/chosen.css">
  <link rel="stylesheet" href="css/prism.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>Add New Color | i❤colors</title>
	<meta name="description" content="iheartcolors-a color library for the world, by the world" />
  <meta name="keywords" content="colors, colours, flat design, flat ui, flat colors, flat colours, flat ui colors, color library" />
  <meta name="author" content="sudipto" />
  <link rel="shortcut icon" href="img/favicon.ico">

</head>
<body>
	<header role="banner">
	</header>

			<?php
			function redirect($location)
			{
				echo "\n".'<script language="javascript">setTimeout(\'window.location.href="'.$location.'"\', 5000);</script>'."\n";
			}

			$display_form = true;
			if(isset($_POST['submit']))
			{
			if(isset($_POST['hex_val'])){ $hex_val = $_POST['hex_val']; }
			if(isset($_POST['rgb_val'])){ $rgb_val = $_POST['rgb_val']; }
			if(isset($_POST['color_name'])){ $color_name = $_POST['color_name']; }
			if(isset($_POST['added_by'])){ $added_by = $_POST['added_by']; }
			if(isset($_POST['date_added'])){ $date_added = $_POST['date_added']; }
			if(isset($_POST['color_tag'])){ $color_tag = $_POST['color_tag']; }

				$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				if ( !empty($hex_val) && !empty($rgb_val) && !empty($color_name) && !empty($added_by) && !empty($date_added) && !empty($color_tag))
				{
					$query = "SELECT * FROM colors WHERE hex_val='$hex_val'";
					$data = mysqli_query($dbc, $query);
					if(mysqli_num_rows($data) == 0)
					{
							if(($hex_val == "#ffffff") || ($hex_val == "#fff") || ($hex_val == "#000000") || ($hex_val == "#000")) {
								echo '<p class="error">Pure Black and White Color not allowed.<br/>Add another color.</p>'."\n";
							}
							else {
								if( (strlen($hex_val) > 7) || (strlen($hex_val) < 4) ) {
									echo '<p class="error">Invalid Hex value!<br/>Enter correct hex value, (EG: #F5F5F5).'."\n";
								}
								else {
									if(!(preg_match('/^#[a-f0-9]{6}$/i', $hex_val))) {
										echo '<p class="error">Hex values can contain only<br/>numbers(0-9) and characters(a-f).'."\n";
									}
									else {
										$query = "INSERT INTO colors (hex_val, rgb_val, color_name, added_by, date_added, color_tag) VALUES "."('$hex_val', '$rgb_val', '$color_name', '$added_by', '$date_added', '$color_tag')";
										mysqli_query($dbc, $query);
										$display_form = false;
										redirect('index.php');
									}
								}
							}
					}
					else
					{
						echo '<p class="error">Seems like the color already exists.<br/>Be creative! Add another color.</p>'."\n";
					}
				}//else make it less
				else
				{
					echo '<p class="error">Enter all data.<br/>All fields are mandatory.</p>'."\n";
				}
				mysqli_close($dbc);
			}
			?>

					<div class="cd-form big">
					<?php
					if($display_form)
					{
					?>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="signup" id="signupform">
						<p class="fieldset">
							<div class="form-logo shiftL"><a href="index.php" style="border: 0;outline:none;"><img src="img/logo-png-small.png"></a></div>
							<div class="subtext">New Color</div>
						</p><div style="display=block;height:5px;"> </div>

							<p class="fieldset">
								<label class="image-replace cd-hexval">Color Hex Value</label>
								<input class="full-width has-padding has-border" id="hex_val" type="text" placeholder="Color Hex Value (eg: #ffffff)" name="hex_val">
							</p>

							<p class="fieldset">
									<label class="image-replace cd-colorname">Color Name</label>
									<input class="full-width has-padding has-border" id="color_name" type="text" placeholder="Color Name" name="color_name">
							</p>

              <p class="fieldset">
									<label class="image-replace cd-username">Your Name</label>
									<input class="full-width has-padding has-border" id="added_by" placeholder="Your Name (can be anonymous)" type="text" name="added_by">
							</p>

              <!--START TAG SELECTOR-->
              <select data-placeholder="Choose Color Tag" class="chosen-select" tabindex="2" id="color_tag" name="color_tag">
                <option value=""></option>
                <option value="blue">Blue</option>
                <option value="brown">Brown</option>
                <option value="cyan">Cyan</option>
                <option value="gold">Gold</option>
                <option value="grey">Grey</option>
                <option value="green">Green</option>
                <option value="indigo">Indigo</option>
                <option value="lime">Lime</option>
                <option value="maroon">Maroon</option>
                <option value="navy">Navy</option>
                <option value="olive">Olive</option>
                <option value="orange">Orange</option>
                <option value="pink">Pink</option>
                <option value="purple">Purple</option>
                <option value="red">Red</option>
                <option value="salmon">Salmon</option>
                <option value="silver">Silver</option>
                <option value="turquoise">Turquoise</option>
                <option value="teal">Teal</option>
                <option value="violet">Violet</option>
                <option value="wheat">Wheat</option>
                <option value="yellow">Yellow</option>
              </select>

              <script src="js/chosen.jquery.js" type="text/javascript"></script>
              <script src="js/prism.js" type="text/javascript" charset="utf-8"></script>
              <script type="text/javascript">
                var config = {
                  '.chosen-select'           : {},
                  '.chosen-select-deselect'  : {allow_single_deselect:true},
                  '.chosen-select-no-single' : {disable_search_threshold:10},
                  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                  '.chosen-select-width'     : {width:"95%"}
                }
                for (var selector in config) {
                  $(selector).chosen(config[selector]);
                }
              </script>
              <!--END TAG SELECTOR-->

							<input type="hidden" name="rgb_val" id="rgb_val" />
							<input type="hidden" name="date_added" id="date_added" />

				      <input type="submit" name="submit" value="Add This Color" class="full-width has-padding" id="submit" onclick="return checkform()">

						</form>
					<?php
					}
					else {
						echo '<center><p><div style="font-weight:800;">SWEEET!</div><br/>Your new color has been added successfully.<br/>Redirecting you to i❤colors homepage.
								<br/><br/>If not redirected within 5 seconds,<br/>then <a href="index.php">click here</a>.</p></center>'."\n";
					}
					?>
				    </div>

<script src="js/main.js"></script> <!-- Gem jQuery -->

<script type="text/javascript">
	$(".error").slideDown(4000).delay(4000).fadeOut();
</script>

	<script type="text/javascript">
        	var today = new Date();
        	var dd = today.getDate();
        	var mm = today.getMonth()+1;

        	var yyyy = today.getFullYear();
        	if(dd<10){
        	    dd='0'+dd;
        	}
        	if(mm<10){
        	    mm='0'+mm;
        	}
        	var today = dd+'/'+mm+'/'+yyyy;
        	document.getElementById('date_added').value = today;

          $('#added_by')
            .on('focus', function(){
                var $this = $(this);
                if($this.val() == ''){
                    $this.val('anonymous');
                }
            })

          $('#hex_val')
            .on('focus', function(){
                var $this = $(this);
                if($this.val() == ''){
                    $this.val('#');
                }
                var readOnlyLength = $('#hex_val').val().length;

                $('#hex_val').on('keypress, keydown', function(event) {
                    if ((event.which != 37 && (event.which != 39))
                        && ((this.selectionStart < readOnlyLength)
                        || ((this.selectionStart == readOnlyLength) && (event.which == 8)))) {
                        return false;
                    }
                });
            })
            .on('blur', function(){
                var $this = $(this);
                if($this.val() == '#'){
                    $this.val('');
                }
            });

    </script>



<script type="text/javascript">
    function bgcolor() {
    	var hex = $('#hex_val').val();
    	hex=hex.toUpperCase();

    	var $body = $('body');
    	var $header = $('header');

    	$body.css('background', hex);
    	$header.css('background', hex);

    }
    setInterval(bgcolor,10);

	var hex;
	function rgbify() {
	  hex = $('#hex_val').val().replace('#','');

	  var reg = hex.length === 3 ? hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2] : hex;
	  var conv = reg.match(/.{2}/g);

	  var r = parseInt(conv[0],16);
	  var g = parseInt(conv[1],16);
	  var b = parseInt(conv[2],16);

	  var rgb = r+','+g+','+b;
	  rgb = rgb.replace(/NaN/g,' ... ');

	  $('#rgb_val').val('rgb('+rgb+')');
	}
	setInterval(rgbify,10);

 </script>

</body>
</html>
