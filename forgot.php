<!DOCTYPE html>
<html>
<head>
<title>Forgot Your Password? &bull; Mega File Hosting</title>
	<link rel="shortcut icon" href="favicon.png">
	<link href="theme/united/bootstrap.css" type='text/css' rel="stylesheet">
	<link href="css/bootstrap.font-awesome.min.css" type='text/css' rel="stylesheet">
	<link href="css/mytip.css" type='text/css' rel="stylesheet"></head>
<body style="background:url(images/body6.png) fixed center">
	<div class="container-fluid" style="margin-top:10px">
	<div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="http://files.megasoft-id.com" style='font-family:pirata-one'>Mega FileHosting</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="http://files.megasoft-id.com/login.php">Login</a></li>
            <li><a href="http://files.megasoft-id.com/register.php">Register</a></li>
			<li><a href="http://files.megasoft-id.com/browse">All Files</a></li>
			<li>
				<a data-toggle="modal" href="#modal-setting" class='tipsy-kiri-bawah' title='Pengaturan Tampilan'><dewa class='icon icon-cogs'></dewa></a>
			</li>
          </ul>
          <form class="navbar-search pull-left" action="http://files.megasoft-id.com/search.php">
            <input class="search-query span2" placeholder="Search Files" name='keyword' type="text">
			<input type='hidden' value='searchfile' name='action'/>
          </form>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	<div class="modal" id="modal-setting" style='display:none;width:710px'>
    <div class="modal-header">
    <a class="close" data-dismiss="modal">�</a>
    <h3 style='font-family:pirata-one'>Setting Theme</h3>
    </div>
    <div class="modal-body">
    <p>Slect Theme</p>
	<style>
	input[type=radio] {
		position: absolute;
		z-index: 100;
		opacity: 0;
		cursor: pointer;
		height: 110px;
		width: 40px;
	}

	.control {
		display: inline-block;
		width: 30px;
		height: 30px;
		background: #eddfc7;
		padding: 5px 5px 5px 5px;
		border-right: 1px solid #e0cba0;
		cursor: pointer;
		vertical-align: bottom;
	}
		
	.control:hover, 
	input[type=radio]:hover + .control, 
	input[type=radio]:checked + .control {
	box-shadow: inset 0px 0px 20px #d3b67a;
	}
	</style>
	<div class="control-group info">
								<div class="controls">
								<form action='http://files.megasoft-id.com/f_theme.php' method='get'>
									<input type='hidden' name='next' value='http://files.megasoft-id.com/forgot.php'/>
									<select id="selectError" class='span6' name='f'>
									<option>united.php</option>
										<option value='cosmo.php'>cosmo</option><option value='default.php'>default</option><option value='spacelab.php'>spacelab</option><option value='slate.php'>slate</option><option value='cerulean.php'>cerulean</option><option value='readable.php'>readable</option><option value='united.php'>united</option><option value='flatly.php'>flatly</option><option value='cyborg.php'>cyborg</option>									</select>
								</div>	
	</div>
	Select Background
	<div class="control-group info" style='max-height:50px'>
								<div class="controls" >
										<input type='radio' class='control' name='back' checked='checked' value='http://files.megasoft-id.com/images/body/body6.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body6.png' style='height:30px;width:30px'/></span>
										<input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body8.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body8.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body5.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body5.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body15.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body15.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body11.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body11.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body13.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body13.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body14.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body14.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body1.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body1.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body9.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body9.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body3.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body3.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body2.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body2.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body12.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body12.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body4.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body4.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body6.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body6.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body10.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body10.png' style='height:30px;width:30px'/></span><input type='radio' class='control' name='back' value='http://files.megasoft-id.com/images/body/body7.png'/><span class='control'><img src='http://files.megasoft-id.com/images/body/body7.png' style='height:30px;width:30px'/></span>		
								</div>	
	</div>
    </div>
    <div class="modal-footer">
	<button class='btn btn-primary'><dewa class='icon icon-leaf'></dewa> Terapkan</button>
	</form>
    </div>
    </div>    <div class="row-fluid">
		<div class="span12" >
			<div class='well'>
							<link rel='stylesheet' href='css/other_page.css' type='text/css'/>
				<div class='well'>
						<p style='font-family:pirata-one;font-size:17px;color:red'>Forgot Your Password??</p>
						<form action='forgot1.php' method='post'>
							Input Your Email Address:<br>
							<input type='text' name='email' class='span12'/>
							<input class='btn btn-inverse' type='submit' value='Send Now'>
						</form>
				</div>
			</div>
		</div>
		<footer>
		<div class="span12" align='center'>
			<div class="well">
				<div class="row">
					&copy;  2012 - 2014 <a href='http://megasoft-id.com' target='_blank'>Megasoft Informer</a> &bull; Design use <a href='http://twitter.github.com/bootstrap'>Bootstrap Twitter</a> - Create By <a href='http://about.megasoft-id.com/Dewa' target='_blank'>Dewa</a></p>
				</div>
			</div>
		</div>
</footer>    </div>
	</div>
	<script src="http://files.megasoft-id.com/js/jquery.min.js"></script>
	<script src="http://files.megasoft-id.com/js/tip-image.js"></script>
	<script src="http://files.megasoft-id.com/js/mytip.js"></script>
	<script src="http://files.megasoft-id.com/js/prettify.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-transition.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-alert.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-modal.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-dropdown.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-scrollspy.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-tab.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-tooltip.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-popover.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-button.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-collapse.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-carousel.js"></script>
    <script src="http://files.megasoft-id.com/js/bootstrap-typeahead.js"></script>
	<script>
	  $(function() {
		$('.tipsy-atas').tipsy
		({
			fade: true,
			gravity: 's'
		});
		$('.tipsy-bawah').tipsy
		({
			fade: true,
			gravity: 'n'
		});
		
		$('.tipsy-kiri').tipsy
		({
			fade: true,
			gravity: 'e'
		});
		
		$('.tipsy-kanan').tipsy
		({
			fade: true,
			gravity: 'w'
		});
		
		$('.tipsy-kanan-bawah').tipsy
		({
			fade: true,
			gravity: 'nw'
		});
		
		$('.tipsy-kanan-atas').tipsy
		({
			fade: true,
			gravity: 'sw'
		});
		
		$('.tipsy-kiri-bawah').tipsy
		({
			fade: true,
			gravity: 'ne'
		});
		
		$('.tipsy-kiri-atas').tipsy
		({
			fade: true,
			gravity: 'se'
		});
		
	  });
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44837206-2', 'megasoft-id.com');
	  ga('send', 'pageview');
	</script>
<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="frontpage hit counter" ><script  type="text/javascript" >
try {Histats.start(1,2679536,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2679536&101" alt="frontpage hit counter" border="0"></a></noscript>
<!-- Histats.com  END  --></body>
</html>