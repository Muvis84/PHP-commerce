<<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
.wrapper{
   border:1px solid;
   width:100%;
   height:15%;
   margin:0 auto;
}
/* style for the header with font and size */
.header{
   font-family:amiene;
   font-size:72px;
   font-color:#C0C0C0;
   border-bottom:20px;
   padding:15px;
}
.wrapper1{
  border:1px solid;
  width:100%;
  height:5%;
  margin: 0 auto;
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
*/  file menu 
.wrapper1{
       border:1px solid;
       width:100%;
       height:6%;
       margin:0 auto;
}
#menu ul
{
    margin :0px;
    padding:0px;
    list-style-type:none;
}
#menu a{
      display:block;
      width:8em;
      margin-left:0em;
      color:white;
      background-color:#A9A9A9;
      text-decoration:none;
      text-lign:center;
}
#menu a: hover{
        background-color:#F0F8FF;
}
#menu li{
      float:left;
      margin-left:3em;
}
/* search mechanism where users can type what they looking for.*/

}
.wrapper2{
  border:1px solid;
  width:100%;
  height:5%;
  margin:0 auto;
}
#search ul{
margin:0px;
padding:0px;
}
#search li{
font-family:bold;
font-size:18px;
float:left;
margin:0 auto;
}
</style>
<div class="wrapper">
<div class="header">
AfroRoots
</div>
</div>
<div class="wrapper1">
   <div id="menu">
   <ul>
   <li><a href="AfricanSculptures.php">African Sculpture</a></li>
   <li><a href="homepage1.php">African Clothes</a></li>
   <li><a href="MyAccount.php">My Account</a></li>
   <li><a href="Cart.php">My Cart</a></li>
   <li><a href="Help.ph">Help</a></li>
   </ul>
   </div>
</div>
<div class="wrapper2">
   <div id ="search">
   <label>Search</label>
   <input id="search" search="search" type"text" size="110"/></li>
   <td colspan="3"><input type="submit" value="Search"></td>
   </div>
</div>
  <title>AfroRoot</title>
</head>
<body>
<h1>Order Process</h1>
<img alt="afri" src="afri3.jpg" height="30%" width="20%">
 <p></P>
 <form action="shoppingpage.php" method="post">
 <p> Product  Description</p>
 <fieldset>
 <legend>Your Orders</legend>
 <label for="size">Size</label>
 <select id="size" name="size">
 <option value="xsmall">X-Small</option>
 <option value="small">Small</option>
 <option value="Medium"> Medium</option>
 <option value="Xlarge">X_large</option>
 <option value="large">Large</option>
 <option value="6"> 6</option>
 </select>
 </fieldset>
 <fieldset>
 <legend>Fit</legend>
 <input type="checkbox" id="slimfit" name="Fittypes[]" value="slimfit"/>
 <label for= "slimfit"> Slim Fit</label>
 <input type="checkbox" id="Otherfit" name="othertypes[]" value="Other" />
 <label for="otherfit">Other</label>
 <input type="checkbox" id="regularfit" name="regulartypes[]" value="Regular" />
 <label for="regularfit">Regular</label>
 </fieldset>
 <fieldset>
 <legend>quantity</legend>
 <label for="quantity">Qty</label>
 <select id="quantity" name="Qty">
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 </select>
 </fieldset>
 </li>
 <label for="total price">Total Price</label>
 <input id="total price"  type="text" size="2%"/>
<input type="Submit" value=" Add to Cart " name="Mycart.php"/>
 </form>
 <?php 
 $size=$_POST['size'];
 $fit=$_POST['fit'];
 $quantity=$_POST['quantity'];
  if(!$size||$fit||$quantity)
  {
  	echo 'You have not entered your order details.Please enter your order details and try again. ';
		exit;
  }
  if(!get_magic_quotes_gpc())
  {
  	$size=addslashes($size);
  	$fit=addslashes($fit);
  	$quantity=addslashes($quantity);
  }
  	@ $db=new mysqli('localhost','root','kayambi','dresses');
  	if(mysqli_connect_errno())
  	{
  		echo 'error';
  		exit;
  	}
  	$query="select * from dresses where".$size."like'%'".$fit."like %'".$quantity."%'";
  	$result=$db->query($query);
  	$num_results=$result->$num_rows;
  	echo "<p> your orders have been processed".$num_results."</P";
  	for ($i=0;$i <$num_results;$i++) {
  		$row=$result->fetch_assoc();
  		echo"<p><strong>".($i+1).".Product name:";
  		echo htmlspecialchars(stripslashes($row['productName']));
  		echo "</strong><br />Size: ";
  		echo stripslashes($row['size']);
  		echo "<br />product ID:  ";
  		echo stripslashes($row['productId']);
  		echo "<br /> Price: ";
  		echo stripslashes($row['price']);
  		echo "<p/>";
  	}
  	$result->free();
  	$db->close();
  	
 ?>
</body>
<a href="womenpage.php"> <label for="backbutton">Return</label></a>
</html>