<!DOCTYPE html>  
<html>  
  <head>
	<title>Input</title>  
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet">   
    <script src="js/jquery.js"></script>  
    <script src="js/bootstrap.js"></script>   
  </head>  
 
  <body>
  
	<div class="container">
	
		<?php
			include("inc/inc.header.php");
		?>
	
		<div class="well">	
			<h1>Input</h1>
			
				<form >
					Lattitude: <input type="text" name="lattitude" id="lattitude">
					Longitude: <input type="text" name="longitude" id="longitude">
					<button id="submit">Submit</button>
				</form>
				
		</div>
	</div>
	
	<?php include("inc/inc.footer.php"); ?>
	
	<script>
		// Google Maps API version 3
		
		function initialize()
		{	
			var mapProp = 
			{
				center:new google.maps.LatLng(51.480341,-3.18164),
				zoom:12,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

			google.maps.event.addListener(map, 'dragend', function showCorners()
			{
				var latLng = map.getBounds();
				alert(latLng);
			});

		}
		
	google.maps.event.addDomListener(window, 'load', initialize);


			function clickMe() {
				var elem = document.querySelector("#submit");
				elem.addEventListener('click', changeCenter);
				alert("Clicked");
								}

			function changeCenter() {
				var inLat = document.querySelector("#lattitude");
				var lat = inLat.value;
				var inLng = document.querySelector("#longitude");
				var lng = inLng.value;
					alert(lng + lat); 					
				map.setCenter(new google.maps.LatLng(51.0, 0.0));
								 }

			addEventListener('load', clickMe);



</script>
	
  </body>  
</html>  
