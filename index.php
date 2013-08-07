<!DOCTYPE html>  
<html>  
  <head>
	<title>Dashboard</title>  
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet">   
    <script src="js/jquery.js"></script>  
    <script src="js/bootstrap.js"></script>   
	
	<style type="text/css">
		table{
			display:block;
			width:764px;
			margin-left: auto ;
			margin-right: auto ;
			padding-top:40px;
		}
		table td:last-child{
			padding-right:0px;
		}
		table td{
			padding-right:120px;
		}
	</style>
  </head>  
 
  <body>
  
	<div class="container">
	
		<?php
			include("inc/inc.header.php");
		?>
	
		<div class="well">	
			<h1>Welcome to the Dashboard</h1>
			<table>
				<tr>
					<td>
					<div class="span2" id="about"><a href="about/about.html"><img src="img/info.png"/></a></div>
					</td>
					<td>
						<div class="span2" id="map"><a href="map.php"><img src="img/map.png"/></a></div>
					</td>
					<td>
						<div class="span2" id="stats"><a href="map.php"><img src="img/stats.png"/></a></div>
					</td>
					<td>
						<div class="span2" id="input"><a href="map.php"><img src="img/info.png"/></a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="span2 comingsoon"></div>
					</td>
					<td>
						<div class="span2 comingsoon"></div>
					</td>
					<td>
						<div class="span2 comingsoon"></a></div>
					</td>
					<td>
						<div class="span2 comingsoon"></a></div>
					</td>
				</tr>
			</table>
			
			<br />
			<br />
		</div>
	</div>
	
	<?php include("inc/inc.footer.php"); ?>
	
    <script>
		$('#map').tooltip({title:"Maps"});   
		$('#about').tooltip({title:"About"});
		$('#stats').tooltip({title:"Stats"});
		$('#input').tooltip({title:"Input"});
		$('.feature').tooltip({title:"This feature is not implimented yet."});
		$('.span2').tooltip({title:"Placeholder"});
		$('.span2').tooltip({title:"Placeholder"});
		$('.span2').tooltip({title:"Placeholder"});
    </script>

  </body>  
</html>  
