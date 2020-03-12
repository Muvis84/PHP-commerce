<?php
define('SERVER_ROOT',   'C:/wamp/www/FINAL YEAR/');
define('SITE_ROOT',     'http://localhost/site_folder/');

mysql_connect("localhost","root","kayambi")
or die("<p> error:".mysql_error()."</P>");
echo "<p> you are connected </P>";
mysql_select_db("afrorootstores")
or die("<p> error".mysql_error()."</P>");

$upload_dir=SITE_ROOT."uploads/images/";
$image_fieldname="image_id";
// download images errors
$php_error=array(1=>'maximum file size in php.ini exceeded',
		         2=>'maximum file size in html form exceeded',
		         3=>'no file was selected to download',
		);
($_FILES[$image_fieldname]['error']==0)
or handle_error("the server couldn't upload the images.", $php_error($_FILES[$image_fieldname]['error']));
                 

$proId=trim($_REQUEST['proId']);
$proName=trim($_REQUEST['proName']);
$makeYear=trim($_REQUEST['makeYear']);
$description=trim($_REQUEST['description']);
$price=trim($_REQUEST['price']);

$insert_sql="INSERT INTO products(proId,proName,makeYear,description,image_id,price)".
		"VALUES('{$proID}','{$proName}','{makeYear}','{description}','{image_id}','{price}');";
// insert products into  the afrorootstores database
mysql_query($insert_sql);

// the product to the page that displays item details

header("location:show_product.php)proId=".mysql_insert_id());

exit();
?>

