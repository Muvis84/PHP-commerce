<?php
mysql_connect("localhost","root","kayambi")
or die("<p> error:".mysql_error()."</P>");
echo "<p> you are connected </P>";
  mysql_select_db("afrorootstores")
or die("<p> error".mysql_error()."</P>");
$result = mysql_query(" select description  from products;");
if (!$result){
	die("<p> error:".mysql_error()."</p>");
}
	echo "<p> tables in database: </P>";
	echo "<ul>";
	while ($row= mysql_fetch_row($result)){
		echo "<li> name: ".$row[0]."</li>";
	}
	echo "</ul>";
?>