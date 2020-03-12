
  <?php 
  mysql_connect("localhost","root","kayambi")
  or die("<p> Error".mysql_error()."</P>");
  echo "<p> </P>";
  mysql_select_db("afrorootstores")
  or die("<p>error".mysql_error()."</p>");
  $title=trim($_REQUEST['title']);
  $surname=trim($_REQUEST['surname']);
  $firstname=trim($_REQUEST['firstname']);
  $address1=trim($_REQUEST['address1']);
  $address2=trim($_REQUEST['address2']);
  $town=trim($_REQUEST['town']);
  $postcode=trim($_REQUEST['postcode']);
  $countryId=trim($_REQUEST['country_id']);

   
  $insert_sql="INSERT INTO customers(title,surname,firstname,address1,address2,town,postcode,country_id)".
    "VALUES('{$title}','{$surname}','{$firstname}','{$address1}','{$address2}',
                '{$town}','{$postcode}','{$countryId}');";
  //insert the customer detail into database
  mysql_query($insert_sql)
  or die(mysql_error());
  ?>
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
  <title>AfroRoot</title>
  </head>
  <body>
  <div id="header"><h1>Customer Detail</h1></div>
  <div id="content"></div>
  <p> Please Check if your details you submit are correct</p>
  <?php if(!empty($title)){?>
  <p>
    Title:<?php echo $title; ?><br />
    <?php }?>
    <?php if(!empty($firstname)) {?>
    Name:<?php echo $firstname." ".$surname;?><br />
    <?php }?>
    
    <?php if(!empty($address1)){?>
    Address:<?php echo $address1." " .$address2?><br/>
               <?php  echo $town?> <br />
                <?php echo $postcode?><br />
                <?php echo $countryId ?><br />
                <?php }?>
</p>
</div>
<div id="footer"></div>
 </body>
 </html>
 