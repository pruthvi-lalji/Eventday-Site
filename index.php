
<!DOCTYPE html>
	<html lang="en">
	<!--This is Linking the CSS File Here.-->
	<!--So it can be used for Styling this page-->
		<head>
<title>Events At Wembley</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116482256-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116482256-1');
</script>




			<link rel="stylesheet" type="text/css" href="styles.css"/>
				<script type="text/javascript"> src="js/scripts.js"></script>
	</head>

	
<!--Main Body -->	
<body>
	<h1 class="h1"><center>IS IT EVENT DAY AT WEMBLEY?</center></h1>
	
		<!--Need to add JavaScript Code for time-->
		<center><p id="demo"></p></center>
	
				<!--This is the Script for Time-->
					<script>
						var mydate= new Date()
						var theyear= mydate.getFullYear()
						var themonth= mydate.getMonth()+1 
						var thetoday= mydate.getDate()
						var now= thetoday+"-"+themonth+"-"+theyear

						<!--This show the time on the Page-->
						document.getElementById("demo").innerHTML = now;
					</script>
	

			 
	<?php include 'File.php';?>
 <center><img alt="Is there event at Wembley Stadium?" src="<?php echo $image; ?>" style="width:304px;height:228px;"/></center>



<center><p id="demo"><?php echo $info; echo $myFormatForView;?></p></center>
<center><p id="no_event"><?php echo $display;?></p></center>
<br>
<hr>
<h3 class="h2"><center>If You Found This Website Useful Please Share It!</center></h3>
<center><hr></center>

	
<footer>
<div align="center">
<p>Disclaimer :</p>
<p>While every care has been taken in the compilation of this information, we will not be held responsible for any loss, damage or inconvenience caused as a result of inaccuracy or error within these pages. We do not endorse any external linked sites and are not responsible for their content.</p>
<p>The information for this site has been sourced from <a href="http://www.wembleystadium.com" style="color: #FFFFFF">www.WembleyStadium.com</a> and <a href="https://www.brent.gov.uk/events-and-whats-on-calendar/?eventCat=Wembley+Stadium+events" style="color: #FFFFFF">Brent.gov.uk</a></p>

<p>&copy; 2016<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Event Day at Wembley. All rights reserved. All trademarks are property of their respective owners in the UK.</p>

</div>
</footer>	
	</body>
</html>

