
	<html>
	<link href="css/grayscale.min.css" rel="stylesheet">

		<head><title>Presentation</title>

	<!-- <img src="logo.png"alt="Mountain View" height="42" width="42"> -->
	Steven Harper
</br>



</head>
<body>
	<div id = "menu">
			<a class="btn btn-default btn-lg" href = "index.php?v=0"  >Who I am</a>&nbsp; &nbsp;
			<a class="btn btn-default btn-lg" href = "index.php?v=1"  >Tri-Tech</a>&nbsp; &nbsp;
			<a class="btn btn-default btn-lg" href = "index.php?v=2"  >Plans</a>&nbsp; &nbsp;
			<a class="btn btn-default btn-lg" href = "index.php?v=3"  >Project</a>&nbsp; &nbsp;
			<hr />
		</div>
		<div id = "contents">
		<pre>
			<?php
			if (isset($_GET['v'])) {
				$thepost = $_GET['v']; // Default page
				} else {
					$thepost = -1;
				}
			if ($thepost == -1) {
				echo "welcome to the bid presentation";
			}
			if ($thepost == 0) {
				require "me.php";
			}
			if ($thepost == 1) {
				require "tritech.php";
			}
			if ($thepost == 2) {
				require "plans.php";
			}
			if ($thepost == 3) {
				require "computer.php";
			}
			if ($thepost == 4) {
				require "server.txt";
			}
			if ($thepost == 5) {
				require "about.txt";
			}
			if ($thepost == 6) {
				require "spreadsheet/Sheet1.html";
				echo "<a href = \"https://docs.google.com/spreadsheets/d/1seClcHbb_Nnny084qBjNJx28Q0xrCUj7fa0hdJNHcyk/edit#gid=0\"  >link to spreadsheet</a>";
			}
			?>
		</pre>
		<hr />
	</div>
</body>
</html>
