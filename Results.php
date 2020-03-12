<html>
<head>
<title>
</title>
</head>
<body>
<?php 
//variable names

if(isset($_REQUEST['search'])){
$productname=$_REQUEST['productname'];
}?>
if (!get_magic_quotes_gpc()){
	<?php if(empty($productname)) { ?>
	$productname=addslashes($productname);
	<?php {?>
}
<?php 
$connection=@new mysqli('localhost','root','kayambi','afrorootstores');
if ($connection->connect_error)
{
	die ('there is a connetion fail, please try again:'.$connection->connect_error);
}else{
	echo 'you are connected to your database <br />';
	$query="select * from products where ".$productname." %'";
			$result=$connection->query($query);
			$num_results=$result->num_rows;
			echo"<p> products found :".$num_results."</p>";
			for ($i=0;$i<$num_results;$i++)
				$row=$result->fetch_assoc();
				echo "<p><strong>".($i+1).".Product:";
				echo htmlspecialchars(stripslashes($row['proName']));
				echo stripslashes($row['makeYear']);
				echo stripslashes($row['description']);
				echo stripslashes($row['price']);			
}
$result->free();
$connection->close();
				
	
	?>
	</body>
	</html>
