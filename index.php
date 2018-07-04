<!doctype html>  
<html lang="en-us">
<head>
	<meta charset="utf-8">
	
	<title>Qr-Code</title>
	
	<meta name="description" content="">
	<meta name="author" content="CodePassenger">
	<meta name="copyright" content="CodePassenger">
	<meta name="generator" content="Documenter v2.0 http://rxa.li/documenter">
	<meta name="date" content="2014-11-20T00:00:00+02:00">
	
	<link rel="stylesheet" href="assets/css/documenter_style.css" media="all">
	<link rel="stylesheet" href="assets/js/google-code-prettify/prettify.css" media="screen">
	<script src="assets/js/google-code-prettify/prettify.js"></script>

	<script src="assets/js/jquery.js"></script>
	
	<script src="assets/js/jquery.scrollTo.js"></script>
	<script src="assets/js/jquery.easing.js"></script>
	
	<script>document.createElement('section');var duration='988',easing='swing';</script>
	<script src="assets/js/script.js"></script>
	
	<style>
		html{background-color:#FFFFFF;color:#383838;}
		::-moz-selection{background:#444444;color:#DDDDDD;}
		::selection{background:#444444;color:#DDDDDD;}
		#documenter_sidebar #documenter_logo{background-image:url(assets/images/logo.png);}
		a{color:#0000FF;}
		.btn {
			border-radius:3px;
		}
		.btn-primary {
			  background-image: -moz-linear-gradient(top, #0088CC, #0044CC);
			  background-image: -ms-linear-gradient(top, #0088CC, #0044CC);
			  background-image: -webkit-gradient(linear, 0 0, 0 0088CC%, from(#DDDDDD), to(#0044CC));
			  background-image: -webkit-linear-gradient(top, #0088CC, #0044CC);
			  background-image: -o-linear-gradient(top, #0088CC, #0044CC);
			  background-image: linear-gradient(top, #0088CC, #0044CC);
			  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088CC', endColorstr='#0044CC', GradientType=0);
			  border-color: #0044CC #0044CC #bfbfbf;
			  color:#FFFFFF;
		}
		.btn-primary:hover,
		.btn-primary:active,
		.btn-primary.active,
		.btn-primary.disabled,
		.btn-primary[disabled] {
		  border-color: #0088CC #0088CC #bfbfbf;
		  background-color: #0044CC;
		}
		hr{border-top:1px solid #EBEBEB;border-bottom:1px solid #FFFFFF;}
		#documenter_sidebar, #documenter_sidebar ul a{background-color:#DDDDDD;color:#222222;}
		#documenter_sidebar ul a{-webkit-text-shadow:1px 1px 0px #EEEEEE;-moz-text-shadow:1px 1px 0px #EEEEEE;text-shadow:1px 1px 0px #EEEEEE;}
		#documenter_sidebar ul{border-top:1px solid #AAAAAA;}
		#documenter_sidebar ul a{border-top:1px solid #EEEEEE;border-bottom:1px solid #AAAAAA;color:#444444;}
		#documenter_sidebar ul a:hover{background:#444444;color:#DDDDDD;border-top:1px solid #444444;}
		#documenter_sidebar ul a.current{background:#444444;color:#DDDDDD;border-top:1px solid #444444;}
		#documenter_copyright{display:block !important;visibility:visible !important;}
	</style>
	
</head>
<body class="documenter-project-ultimate-responsive-contact-form-html5-bootstrap">
	<div id="documenter_sidebar">
		<a href="#documenter_cover" id="documenter_logo"></a>
		<ul id="documenter_nav">
			<li><a class="current" href="#documenter_cover">Home</a></li>
				
			<li><a href="#introduction" title="Introduction">Introduction</a></li>
			<li><a href="#features" title="Features">Features</a></li>
			<li><a href="#html_structure" title="HTML Structure">HTML Structure</a></li>
			<li><a href="#css_files_and_structure" title="CSS Files and Structure">CSS Files and Structure</a></li>
			<li><a href="#javascript_and_ajax" title="JavaScript and Ajax">JavaScript and Ajax</a></li>
			<li><a href="#php_files_and_customization" title="PHP Files and Customization">PHP Files and Customization</a></li>
			<li><a href="#changelog" title="Changelog">Changelog</a></li>
			<li><a href="#source_credits" title="Source & Credits">Source & Credits</a></li>
			<li><a href="#thank_you" title="Thank You">Thank You</a></li>

		</ul>
		<div id="documenter_copyright">Copyright &copy; CodePassenger 2015<br>
		made with the <a href=#">Documenter v2.0</a> 
		</div>
	</div>
	<div id="documenter_content">
	<section id="documenter_cover">
	<h1>Qr-Code-As-a-Service</h1>
	<h2>HTML5 Bootstrap Landing Page</h2>
	<div id="documenter_buttons">
		<a href="http://codepassenger.com" class="btn btn-primary btn-large">CodePassenger</a> <a href="http://themeforest.net/user/codepassenger" class="btn btn-large">Portfolio</a> 
	</div>
	<hr>
			<form action="index.php" method="post">
<input type="text" name="str" />
Size: <select name="size">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

Frame size:
<select name="frame">
<option value="2">2</option>
<option value="4">4</option>
<option value="6">6</option>
<option value="8">8</option>
<option value="10">10</option>
</select>

<input type="submit" name="submit" value="submit" />
</form>

<?php

include "phpqrcode/qrlib.php";
//include "config.php"; 


if(isset($_POST['submit'])){
	$str = $_POST['str'];
	$size = $_POST['size'];
	$frame = $_POST['frame'];
$tempDir = "Qrcode"; 
$urlRelativeFilePath = $tempDir.$str; 
	// // create a QR Code with this text and display it
// QRcode::png($str);
// QRcode::png($str,QR_ECLEVEL_L);
// QRcode::png($str,QR_ECLEVEL_M);
// QRcode::png($str,QR_ECLEVEL_Q);
QRcode::png($str,$urlRelativeFilePath,QR_ECLEVEL_H,$size,$frame);




?>
<div style="background-color: #e6e6e6; width: 500px; margin-top: 10px; padding: 20px">
<img src="<?php echo $urlRelativeFilePath; ?> " />
</div>
<?php
}

?>
	</section>
	
	<section id="introduction">
	<div class="page-header"><h3>Introduction</h3><hr class="notop"></div>
<p>
	<strong>GRAPE</strong> is Responsive HTML5 App Landing Onepage Template built with Bootstrap v3.2.0, HTML5 and CSS3. Well Organized and valid Code. This Documentation provide you a clear guideline for how to use and customize template. If you facing any problem, please don't forget to ask any question or contact with us for support. Thank You for Purchasing our Product.</p>
</section>
<section id="features">
	<div class="page-header"><h3>Features</h3><hr class="notop"></div>
<ul>
	<li>Fully Responsive Design</li>
	<li>Modern &amp; Elegant Design</li>
	<li>HTML5 &amp; CSS3</li>
	<li>Bootstrap v3.2.0</li>
	<li>Google Fonts Used</li>
	<li>Google Map integrated</li>
	<li>Parallax Background</li>
	<li>Mailchimp Integrated</li>
	<li>Font Awesome Used</li>
	<li>Smooth Scrool Used</li>
	<li>4 Variations - Solid, Image, Image Slider, Transparent</li>
	<li>Easy Customization</li>

	<li>Many More</li>
</ul>
</section>
<section id="html_structure">
	<div class="page-header"><h3>HTML Structure</h3><hr class="notop"></div>
<p>
	GRAPE is fully responsive HTML5 Template followed HTML5 Structure. Every section is seperated with Comments. We maintain all Coding Procedure.</p>
<p>
	<strong>Head Section Structure:</strong> Here is the example code of <head> section</p>
<p>
	&nbsp;</p>
<pre class="prettyprint lang-html linenums">
&lt;!DOCTYPE html&gt;

&lt;html&gt;

  &lt;head&gt;    

    &lt;meta charset=&quot;UTF-8&quot;&gt;

&lt;title&gt;GRAPE App Landing Template by CodePassenger&lt;/title&gt;

    &lt;meta name=&quot;description&quot; content=&quot;GRAPE App landing Page by CodePassenger&quot;&gt;

    &lt;meta name=&quot;author&quot; content=&quot;CodePassenger&quot;&gt;


&lt;!-- Mobile Specific Meta --&gt;<span class="Apple-tab-span" style="white-space:pre"> </span>

    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;

&lt;!--[if IE]&gt;&lt;meta http-equiv=&#39;X-UA-Compatible&#39; content=&#39;IE=edge,chrome=1&#39;&gt;&lt;![endif]--&gt;


    &lt;!-- Bootstrap --&gt;

    &lt;link href=&quot;assets/css/bootstrap.css&quot; rel=&quot;stylesheet&quot;&gt;


    &lt;!-- Font awesome --&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/font-awesome.min.css&quot;&gt;


    &lt;!-- Animate.css --&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/animate.css&quot;&gt;


    &lt;!-- Owl-carousel style --&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/owl.carousel.css&quot;&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/owl.theme.css&quot;&gt;


    &lt;!-- magnific style --&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/magnific-popup.css&quot;&gt;


    &lt;!-- &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/YTPlayer.css&quot; media=&quot;screen&quot;&gt; --&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/ui.totop.css&quot;&gt;


    &lt;!-- Custom stylesheet--&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/style.css&quot;&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/responsive.css&quot; media=&quot;screen&quot;&gt;


    &lt;!-- Added google font --&gt;

    &lt;link href=&#39;http://fonts.googleapis.com/css?family=Dosis:400,600,700,800&#39; rel=&#39;stylesheet&#39; type=&#39;text/css&#39;&gt;

    &lt;link href=&#39;http://fonts.googleapis.com/css?family=Raleway:400,300,700&#39; rel=&#39;stylesheet&#39; type=&#39;text/css&#39;&gt;


    &lt;!--Fav and touch icons--&gt;

    &lt;link rel=&quot;shortcut icon&quot; href=&quot;assets/images/icons/favicon.ico&quot;&gt;

    &lt;link rel=&quot;apple-touch-icon&quot; href=&quot;assets/images/icons/apple-touch-icon.png&quot;&gt;

    &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;72x72&quot; href=&quot;assets/images/icons/apple-touch-icon-72x72.png&quot;&gt;

    &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;114x114&quot; href=&quot;assets/images/icons/apple-touch-icon-114x114.png&quot;&gt;


    &lt;!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --&gt;

    &lt;!-- WARNING: Respond.js doesn&#39;t work if you view the page via file:// --&gt;

    &lt;!--[if lt IE 9]&gt;

      &lt;script src=&quot;https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js&quot;&gt;&lt;/script&gt;

      &lt;script src=&quot;https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js&quot;&gt;&lt;/script&gt;

    &lt;![endif]--&gt;

  &lt;/head&gt;</pre>
<p>
	<strong>Body Section Structure:</strong> Here is the example code of &lt;body&gt; section</p>
<pre class="prettyprint lang-html linenums">
  &lt;body data-spy=&quot;scroll&quot; data-target=&quot;.navbar-example&quot;&gt;


&lt;!-- Preloader --&gt;

      &lt;div id=&quot;faceoff&quot;&gt;

        &lt;div id=&quot;preloader&quot;&gt;&lt;/div&gt;

        &lt;div class=&quot;preloader-section&quot;&gt;&lt;/div&gt;

      &lt;/div&gt;

    &lt;!-- Preloader end --&gt;

  

    &lt;!-- header start --&gt;

    &lt;header id=&quot;home&quot; class=&quot;navbar-fixed-top&quot;&gt;

      &lt;nav class=&quot;navbar navbar-default&quot; role=&quot;navigation&quot;&gt;

        &lt;div class=&quot;container&quot;&gt;

          &lt;div class=&quot;row&quot;&gt;

            &lt;div class=&quot;col-sm-3&quot;&gt;

              &lt;!-- Brand and toggle get grouped for better mobile display --&gt;

              &lt;div class=&quot;navbar-header&quot;&gt;

                &lt;button type=&quot;button&quot; class=&quot;navbar-toggle collapsed&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#bs-example-navbar-collapse-1&quot;&gt;

                  &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;

                  &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

                  &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

                  &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

                &lt;/button&gt;

                &lt;h1&gt;&lt;a class=&quot;nav-brand&quot; href=&quot;&quot;&gt; &lt;img src=&quot;assets/images/logo.png&quot; alt=&quot;gigninga&quot;&gt;&lt;/a&gt;&lt;/h1&gt;

              &lt;/div&gt;

            &lt;/div&gt;

            &lt;div class=&quot;col-sm-7&quot;&gt;

              &lt;!-- Collect the nav toggling --&gt;

              &lt;div class=&quot;collapse navbar-collapse navbar-example&quot; id=&quot;bs-example-navbar-collapse-1&quot;&gt;

                &lt;ul class=&quot;nav navbar-nav&quot;&gt;

                  &lt;li&gt;&lt;a href=&quot;#intro&quot; class=&quot;smoothScroll&quot;&gt;Intro&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;#feature&quot; class=&quot;smoothScroll&quot;&gt;Feature&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;#description&quot; class=&quot;smoothScroll&quot;&gt;Description&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;#screenshot&quot; class=&quot;smoothScroll&quot;&gt;Screenshots&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;#download&quot; class=&quot;smoothScroll&quot;&gt;Download&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;#contact&quot; class=&quot;smoothScroll&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;

                &lt;/ul&gt;             

              &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;

            &lt;/div&gt;

            &lt;div class=&quot;col-sm-2 mob-right&quot;&gt;

              &lt;ul class=&quot;app pull-right&quot;&gt;

                &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-apple&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;

                &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-android&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;

                &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-windows&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;

              &lt;/ul&gt;

            &lt;/div&gt;

          &lt;/div&gt;

        &lt;/div&gt;&lt;!-- /.container --&gt;

      &lt;/nav&gt;

    &lt;/header&gt;

    &lt;!-- header end --&gt;


    &lt;!-- banner start --&gt;

    &lt;section id=&quot;banner&quot; class=&quot;banner&quot;&gt;

      &lt;div class=&quot;trans-bg&quot;&gt;

        &lt;div class=&quot;container-fluid&quot;&gt;

          &lt;div class=&quot;row&quot;&gt;

            &lt;div class=&quot;col-sm-12&quot;&gt;              

              &lt;h2&gt;&lt;a href=&quot;&quot; class=&quot;lg-logo default-color&quot;&gt; &lt;img src=&quot;assets/images/lg-logo.png&quot; alt=&quot;GRAPE&quot; /&gt; &lt;/a&gt;&lt;/h2&gt; &lt;!--/ .lg-logo --&gt;

               &lt;!-- Text slider start here --&gt;

               &lt;div id=&quot;myCarousel&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;

                  &lt;div class=&quot;carousel-inner&quot;&gt;

                    &lt;div class=&quot;active item&quot;&gt;

                      &lt;h3 class=&quot;banner-title&quot;&gt;Present your beautiful app&lt;br&gt; with GRAPE&lt;/h3&gt;

                    &lt;/div&gt;

                    &lt;div class=&quot;item&quot;&gt;

                      &lt;h3 class=&quot;banner-title&quot;&gt;not only app landing&lt;br&gt; you can use GRAPE as business template&lt;/h3&gt;

                    &lt;/div&gt;

                    &lt;div class=&quot;item&quot;&gt;

                      &lt;h3 class=&quot;banner-title&quot;&gt;You can find hundreds&lt;br&gt; but ultimately you love us&lt;/h3&gt;

                    &lt;/div&gt;

                  &lt;/div&gt;

               &lt;/div&gt;

               &lt;!-- Text slider end here --&gt;

                &lt;p class=&quot;text-center&quot;&gt;Choose your environment&lt;/p&gt;

                &lt;ul class=&quot;app&quot;&gt;

                  &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-apple&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-android&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;

                  &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-windows&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;

                &lt;/ul&gt;               

            &lt;/div&gt;

          &lt;/div&gt;

        &lt;/div&gt;

      &lt;/div&gt; &lt;!-- /.trans-bg --&gt;                 

    &lt;/section&gt;

    &lt;!-- banner end --&gt;</pre>
</section>
<section id="css_files_and_structure">
	<div class="page-header"><h3>CSS Files and Structure</h3><hr class="notop"></div>
<p>
	We are using latest CSS coding standard. Custom Style writeen into style.css which is override Bootstrap style somewhere else. An Responsive style written into responsive.css.</p>
<div>
	<strong>CSS Files included:</strong></div>
<ul>
	<li>
		Bootstrap CSS</li>
	<li>
		Fontawesome CSS</li>
	<li>
		OWL Carousel CSS</li>
	<li>
		Magnific POPUP CSS</li>
	<li>
		Custom CSS</li>
</ul>
<p>
	<strong>style.css</strong> file contains all of the specific styling for the template. Here is an example of general style which is specify using following label:</p>
<pre class="prettyprint lang-css linenums">
</pre>
<div>
	/*</div>
<div>
	========================================================================</div>
<div>
	Index</div>
<div>
	------------------------------------------------------------------------</div>
<div>
	&nbsp;</div>
<div>
	# 1 - General styles</div>
<div>
	# - 1.1 - Heading styles</div>
<div>
	# - 1.2 - Button styles</div>
<div>
	# - 1.3 - Preloader styles</div>
<div>
	# 2 - Header styles</div>
<div>
	# - 2.1 - Menu styles</div>
<div>
	# - 2.2 - App styles</div>
<div>
	# 3 - Banner styles</div>
<div>
	# 4 - Intro styles</div>
<div>
	# 5 - Feature styles</div>
<div>
	# 6 - Why it best styles</div>
<div>
	# 7 - How it work styles</div>
<div>
	# 8 - Screenshots styles</div>
<div>
	# 9 - Review styles</div>
<div>
	# 10 - Pricing table styles</div>
<div>
	# 11 - Help &amp; Support styles</div>
<div>
	# 12 - Subscription styles</div>
<div>
	# 13 - Contact styles</div>
<div>
	# - 13.1 - Contact-form</div>
<div>
	# - 13.2 - Contact-info</div>
<div>
	# 14 - Footer styles</div>
<div>
	&nbsp;</div>
<div>
	*/</div>
<p>
	If you would like to edit a specific section of the site, simply find the appropriate label in the CSS file, and then scroll down until you find the appropriate style that needs to be edited.</p>
<p>
	If you change the navigation style of Header section, find the following section in the style sheet:</p>
<pre class="prettyprint lang-css linenums">
</pre>
<div>
	/*</div>
<div>
	========================================================================</div>
<div>
	# 2 - Header styles</div>
<div>
	------------------------------------------------------------------------</div>
<div>
	*/</div>
<div>
	&nbsp;</div>
<div>
	header {</div>
<div>
	&nbsp; display: none;</div>
<div>
	&nbsp; padding: 20px 0;</div>
<div>
	&nbsp; background-color: #fff;</div>
<div>
	&nbsp; -webkit-box-shadow:0 0 9px -5px #000;</div>
<div>
	&nbsp; -moz-box-shadow:0 0 9px -5px #000;</div>
<div>
	&nbsp; box-shadow:0 0 9px -5px #000;</div>
<div>
	}</div>
<p>
	&nbsp;</p>
</section>
<section id="javascript_and_ajax">
	<div class="page-header"><h3>JavaScript and Ajax</h3><hr class="notop"></div>
<p>
	GRAPE imports following Javascript files.</p>
<ol>
	<li>
		jQuery</li>
	<li>
		My custom scripts</li>
	<li>
		Google Map Api</li>
	<li>
		Owl Carousel</li>
	<li>
		Magnific POPUP</li>
	<li>
		SmoothScrool</li>
	<li>
		AjaxChimp</li>
	<li>
		WOW</li>
	<li>
		etc</li>
</ol>
<p>
	<span style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; line-height: 18px;">All code are beautifully written. You can customize easily. Just look the js code.</span><br>
	Example: If you want to Configure Mailchimp, just find the following block and change the post url:<br>
	&nbsp;</p>
<pre class="prettyprint lang-js linenums">
 // --------------Newsletter-----------------------


$(&quot;.newsletter-signup&quot;).ajaxChimp({

    callback: mailchimpResponse,

    url: &quot;http://codepassenger.us10.list-manage.com/subscribe/post?u=6b2e008d85f125cf2eb2b40e9&id=6083876991&quot; // Replace your mailchimp post url inside double quote &quot;&quot;.  

});


function mailchimpResponse(resp) {

     if(resp.result === &#39;success&#39;) {


        $(&#39;.newsletter-success&#39;).html(resp.msg).fadeIn().delay(3000).fadeOut();

        

    } else if(resp.result === &#39;error&#39;) {

        $(&#39;.newsletter-error&#39;).html(resp.msg).fadeIn().delay(3000).fadeOut();

    }  

};</pre>
<p>
	&nbsp;</p>
</section>
<section id="php_files_and_customization">
	<div class="page-header"><h3>PHP Files and Customization</h3><hr class="notop"></div>
<p>
	We followed the standard technique and latest PHP coding structure.&nbsp;</p>
<p>
	<strong>PHP File included:</strong></p>
<ol>
	<li>
		email.php</li>
</ol>
<p>
	<strong>Mail Configuration:</strong></p>
<p>
	In email.php, find the following line:</p>
<pre class="prettyprint lang-php linenums">
// receiver email address

$to = &#39;&#114;&#101;&#99;&#101;&#105;&#118;&#101;&#114;&#95;&#101;&#109;&#97;&#105;&#108;&#64;&#100;&#111;&#109;&#97;&#105;&#110;&#46;&#99;&#111;&#109;&#39;;</pre>
<p>
	Replace the&nbsp;<span style="line-height: 19px;"><strong>&#114;&#101;&#99;&#101;&#105;&#118;&#101;&#114;&#95;&#101;&#109;&#97;&#105;&#108;&#64;&#100;&#111;&#109;&#97;&#105;&#110;&#46;&#99;&#111;&#109;</strong> to your receiver email address.</span></p>

</section>
<section id="changelog">
	<div class="page-header"><h3>Changelog</h3><hr class="notop"></div>
<div>
	/*&nbsp;</div>
<div>
	========================================================================</div>
<div>
	This css file will over write bootstarp css</div>
<div>
	------------------------------------------------------------------------</div>
<div>
	# Template Name: GRAPE</div>
<div>
	# Template URI: http://codepassenger.com/</div>
<div>
	# Author: CodePassenger</div>
<div>
	# Author URI: http://codepassenger.com/</div>
<div>
	# Description: GRAPE App Landing HTML Template by CodePassenger</div>
<div>
	# Version: 1.0</div>
<div>
	# License: GPL v2 or later</div>
<div>
	# License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html</div>
<div>
	# Tags: html, template, app landing, marketing, GRAPE, CodePassenger</div>
<div>
	----------------------------------------------------------------------&nbsp;</div>
<div>
	========================================================================</div>
<div>
	*/</div>
</section>
<section id="source_credits">
	<div class="page-header"><h3>Source & Credits</h3><hr class="notop"></div>
<ul>
	<li>
		<a href="http://jquery.com" target="_blank">jQuery</a></li>
	<li>
		<a href="http://getbootstrap.com" target="_blank">Bootstrap</a></li>
	<li>
		<a href="http://fontawesome.io/icons" target="_blank">Fontawesome</a></li>
	<li>
		<a href="https://maps.googleapis.com/maps/api/js?v=3.exp" target="_blank">Google Map API</a></li>
	<li>
		<a href="https://github.com/dimsemenov/Magnific-Popup" target="_blank">Magnific POPUP</a></li>
	<li>
		<a href="https://github.com/kswedberg/jquery-smooth-scroll" target="_blank">Smooth Scroll</a></li>
	<li>
		<a href="https://github.com/OwlFonk/OwlCarousel" target="_blank">OWL Carousel</a></li>
	<li>
		<a href="https://github.com/scdoshi/jquery-ajaxchimp" target="_blank">AjaxChimp</a></li>
	<li>
		<a href="https://github.com/sksmatt/UItoTop-jQuery-Plugin" target="_blank">UItoTOP</a></li>
	<li>
		<a href="http://gsgd.co.uk/sandbox/jquery/easing" target="_blank">Easing</a></li>
	<li>
		<a href="https://github.com/matthieua/WOW" target="_blank">WOW.JS</a></li>
	<li>
		<a href="http://modernizr.com/download" target="_blank">Modernizr</a></li>
</ul>
</section>
<section id="thank_you">
	<div class="page-header"><h3>Thank You</h3><hr class="notop"></div>
<section id="thank_you" style="padding-top: 70px;">
	<p style="margin: 18px 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5em;">
		<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: 700; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; color: rgb(56, 56, 56);">Once again, thank you so much for purchasing this product. As I said at the beginning, I&#39;d be glad to help you if you have any questions relating to this product. No guarantees, but I&#39;ll do my best to assist. If you have a more general question relating to this product on Shapebootstrap, you might consider visiting the forums and asking your question in the &quot;Item Discussion&quot; section.</span></p>
	<p style="margin: 18px 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5em;">
		<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: 700; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; color: rgb(56, 56, 56);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline;">CodePassenger Team</span></span></p>
</section>
</section>

	</div>
</body>
</html>