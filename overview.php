<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Goodplant - track your collection of house plants</title>
</head>
<body>

<h1>Goodplant - track your collection of house plants</h1>

<form action="" method="post">
	<p>
	Plantsy Name:				<br><input type="text" name="plant_name"><br>

	Plantsy needs light?		<br><input type="text" name="light"><br>

	Plantsy needs water?		<br><input type="text" name="water"><br>

	How do we get more plantses?<br><input type="text" name="propogation_method"><br>
	</p>

	<input type="submit"  name="submit">
	<br><br><br>
</form>	

<h2>Our little preciousessss: </h2>  

	<?php foreach ($plants as $plant) : ?>
	<br><form action="?edit=<?=$plant['plant_name']?>" method="post">
	<input 	type="checkbox" 
			name="<?= $plant['plant_name'] ?>" 
			value="<?= $plant['plant_name'] ?>">
	<label><?= 
	$plant['plant_name']?>   </label>
	<br>
	<?php endforeach; ?>

	
	<input type="submit" name="editSubmit" value="edit">

</form>
<br><br>

<h3>last added plant:</h3>

<?php 
	echo " <strong>" . $plant['plant_name'] . "</strong>";
	echo " <br>This plant needs " . $plant['light'] . " amount of light to grow well.";
	echo " <br>Water it " . $plant['water'] . ". ";
	echo " <br>Use " . $plant['propogation_method'] . " techniques to propogate!";
?>
<br><br><br>



</body>
</html>