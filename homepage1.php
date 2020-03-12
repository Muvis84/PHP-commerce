<html>
<head>
<title>AfroRoot</title>
<style type="text/css">
.wrapper{
border:1px solid;
width:100%;
height:15%;
  margin:0 auto;
}
.header{
font-family:amiene;
font-size:72px;
font-color:#C0C0C0;
border-bottom:20px;
padding:15px;
}
ul
{
list-style-type:none;
margin:1;
padding:1;
padding-top:7px;
padding-bottom:5px;
}
li
{
display:inline;
}
a:link,a:visited
{
font-weight:bold;
color:#000000;
text-align:center;
padding:6px;
text-decoration:italic;
text-trasformation:upperCase;
}
a:hover,a:active
{
background-color:#00FFFF;
}
.wrapper1{
 border:1px solid;
 width:100%;
 height:5%;
 margin:0 auto;

}
</style>
</head>
<body>
<div class="wrapper">
<div class="header">
AfroRoots
</div>
</div>
<div class="wrapper1">
<ul>
<li><a href="womenpage.php">Women Clothing</a></li>
<li><a href="Men.php"> Men Clothing</a></li>
<li><a href="kidspage.php"> Kids Clothing</a></li>
<li><a href="Accessories.php">Accessories</a></li>
</div>
<?php 
mysql_connect("localhost","root","kayambi")
or die("<p> error:".mysql_error()."</P>");
echo "<p> you are connected </P>";
mysql_select_db("afrorootstores")
or die("<p> error".mysql_error()."</P>");

?>

</body>
</html>
