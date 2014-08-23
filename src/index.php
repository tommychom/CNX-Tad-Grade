<?php 
	include "../vendor/autoload.php";
	$grade = new Grade();
?>
<html>
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form name="form1" method="post" action="index.php" class="form-inline">
			<div class="form-group">
				<input type="text" name="score" class="form-control">
				<button class="btn btn-primary">Calculate</button>
			</div>
		 	<p><strong><?php echo $score = (!empty($_POST['score'])) ? 'Grade : ' . $grade->tad($_POST['score']) : ''; ?></strong></p>
		</form>
	</div>
</body>
</html>
