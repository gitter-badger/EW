<?php
	// Initialize the session
	session_start();
	
	// Include the configuration file
	include("config.php");

	if(!(isset($_SESSION["login"])) || !(isset($_SESSION["username"])) {
		header("Location: " . $main_url . "/?msg=Your+session+has+timed+out.+Please+login+again.");
		exit;
	} else {
		$username = $_SESSION['username'];
	}
?>
<!DOCTYPE html>

<html lang="en"><head><script type="text/javascript">window["_gaUserPrefs"] = { ioo : function() { return true; } }</script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Edlightened Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/dashboard/#">Edlightened Web</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
		  <h3>Welcome back, <?php echo $username; ?>!</h3>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href= "http://empire-london.codio.io/Quizscreen.html"<a><img data-src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" class="img-responsive" alt="200x200" src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" data-holder-rendered="true"</img></a>
              <h4>Math</h4>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
               <a href= "http://edlightened.tk/betaweb/Quizscreen"<a><img data-src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" class="img-responsive" alt="200x200" src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" data-holder-rendered="true"</img></a>
              <h4>Language Arts</h4>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
               <a href= "http://edlightened.tk/betaweb/Quizscreen"<a><img data-src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" class="img-responsive" alt="200x200" src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" data-holder-rendered="true"</img></a>
              <h4>Science</h4>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
               <a href= "http://edlightened.tk/betaweb/Quizscreen"<a><img data-src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" class="img-responsive" alt="200x200" src="http://ecx.images-amazon.com/images/I/61Tchc9QyeL._SL290_.jpg" data-holder-rendered="true"</img></a>
              <h4>Social Studies</h4>
              
              
              
            </div>
          </div></div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" title="" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1415133448437">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1415133448437" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg></body></html>