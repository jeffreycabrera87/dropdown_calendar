<html>
	<head>
		<title>Years</title>
	</head>
	<body>
		<?php 
			$months = array('January', 'February',  'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		 ?>
		<select id = "years">
			<?php 
				for($i = 2014; $i >= 1990; $i--)
					echo "<option value='" . $i . "'>" . $i . "</option>";
			?>
		</select>
		<select id = "months">
			<?php 
				foreach($months as $month)
					echo "<option value='". $month . "'>" . $month . "</option>";
			?>
		</select>
		<select id = "days">
			<?php 
				for($i = 1; $i <= 31; $i++)
					echo "<option value='" . $i . "'>" . $i . "</option>";
			?>
		</select>
		<script type="text/javascript" src = "js/jquery-1.8.3.js"></script>
		<script type="text/javascript" src = "js/ajax.js"></script>
	</body>
</html>