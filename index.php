<?php

@$id=$_GET["id"];

if($id==5)
{
	echo "<script>alert('Successfully')</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Security</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>

	<header><h2>Data Security Pvt.Ltd</h2></header>

	<h3 style="color: #CCC">Enter A Text Then Use Cryptography And Secured File</h3>

	<form method="post" action="crypto.php">
		<input type="text" name="filename" value="" placeholder="Enter File name" required="required" />
		<textarea name="data" placeholder="Please Write Important Data"></textarea>
		<input type="submit" name="cryt" value="Secured File">
	</form>

|<br />
<br />

<?php

$scan=scandir("Data/");
$count=count($scan);

for($i=2;$i<$count;$i++)
{
$x=$scan[$i];
$y="Data/".$x;

echo "<p><a href='show.php?data=$y' target='_blank'>$x</a></p>";

}

?>

</body>
</html>