
          
<html>
	<head>
		<style>
			.active { color: red; }
		</style>
	</head>
	<body>
	<?php

		$current = array(
			"" => "Home",
			"two" => "Tab2",
			"three" => "Tab3",
			"four" => "Tab4"
		);
		foreach( $current as $k => $v ) {
			$active = $_GET['page'] == $k
				? ' class="active"'
				: '';
			echo '<li class="item"><a href="/'. $k .'"'. $active .'>'. $v .'</a></li>';
		}

	?>
	</body>
</html>















