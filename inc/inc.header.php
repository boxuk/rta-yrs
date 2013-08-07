<?php
	echo '
		<div class="navbar navbar-fixed-top" style ="background-color:#b5d5ff">
			<a class="navbar-brand" href="index.php">R.T.A</a>
			<ul class="nav navbar-nav">';
				switch( basename($_SERVER['PHP_SELF']) ){
					case "index.php":
						echo '<li class="active"><a href="index.php">Dashboard</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="stats.php">Stats</a></li>
						<li><a href="input.php">Input</a></li>';
						break;
					case "about.php":
						echo '<li><a href="index.php">Dashboard</a></li>
						<li class="active"><a href="about.php">About</a></li>
						<li><a href="stats.php">Stats</a></li>
						<li><a href="input.php">Input</a></li>';
						break;
					case "map.php":
						echo '<li><a href="index.php">Dashboard</a></li>
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="stats.php">Stats</a></li>
						<li><a href="input.php">Input</a></li>';
						break;
					case "stats.php":
						echo '<li><a href="index.php">Dashboard</a></li>
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="stats.php">Stats</a></li>
						<li><a href="input.php">Input</a></li>';
						break;
					case "input.php":
						echo '<li><a href="index.php">Dashboard</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="stats.php">Stats</a></li>
						<li class="active"><a href="input.php">Input</a></li>';
						break;
				}
			echo'
			</ul>
		</div>
	';
?>