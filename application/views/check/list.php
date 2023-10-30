<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<div class="container mt-3">
		<form action="/arraylist" method="post">
			<div class="form-floating mb-3 mt-3">
				<h4>Enter <?=$array_element?> array Element</h4>
				<?php
				for ($i = 0; $i < $array_element; $i++) {
					// echo($i);
					echo ('
					<input type="text" class="form-control" id="element" placeholder="Enter element" name="array_element">
					<br>');
					
				}
				?>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</body>

</html>
