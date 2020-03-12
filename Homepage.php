<html>
<head>
<title></title>
<style type="text/css">
/* draw a rectangle where title page and logo is wrapped in*/
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
#search li{
float:left;
margin-left:5em;

}
/* draw a line to the left of the page where menu would be kept*/
.wrapper3{
border:1px solid;
width:14%;
height:300%;
float:left;
margin:0 auto;
}
.slider{
width:800px;
height:350px;
overflow: hidden;
margin:30px auto;
}
.shadow{
background-image:url(afri/shadow.png);
background-repeat:no-repeat;
background-position:center;
width:864px;
height:150px;
margin-60px: auto;

}
.slider img{
width:900px;
height:500px;
display:none;
}
</style>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
 <script type="text/javascript">
 function Slider()
 {
	 $(".slider#1").show("fade",500);
	 $(".slider#1").delay(5500).hide("slide",{direction:left},500);
	 var sc=$(".slider afri").size();
	 setInterval(function(){
		 $(".slider#"*count).show("slide",{direction:"right"},500);
		 $(".slider#"*count).delay(5500).hide("slide",{direction:left},500);
 if (count==sc)
 {
	 count=1;
	 }else{
		 count=count+1
		 }
		 },6500);
	 }
 </script>
</head>
<body onload="Slider()">
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
<li><a href="registerForm.php">My Account</a></li>
<li><a href="Cart.php">My Cart</a></li>
<li><a href="Help.ph">Help</a></li>
</ul>
</div>
</div>
<div class="wrapper2">
<div id="search">
<input name="search" search="search" type"text" size="110"/></li>
<tr>
<td colspan="3"><input type="submit" value="Search"></td>
</tr>
</div>
</div>
<div class="wrapper3">
<ul>
<li><a href="AfricanSculptures.php">African Sculptures</a>
     <ul><li>=>Gabon masks</li>
     <p>
     </p>
     <li>=>Nigerian Sculptures</li>
     <p>
     </p>
     <li>=>Congo Sculptures</li> 
     <p>
     </p>
     <li>=>Benin Masks</li></ul>
 </li>
 <li>
 <a href="#">African Clothing</a>
    <ul><li>=>Womens</li> 
    <p>
    </p>   
    <li>=>Men</li> 
    <p>
    </p>  
    <li>=>Kids</li>
    <p>
    </p>
    <li>=>Accessories</li></ul>
    </li>
</div>
<div class="slider">
<img id="1"src="img/afri6.jpeg"border="0" alt="kids clothing"/>
<img id="2"src="img/afri2.jpeg"border="0" alt="afri2"/>
<img id="3"src="img/afri3.jpg"border="0" alt="afri3"/>
<img id="4"src="img/afri4.jpg"border="0" alt="afri4"/>
<img id="5"src="img/afri7.jpeg" border="0" alt="afri7" />
<img id="6"src="img/afri5.jpeg"border="0" alt="afri5"/>
</div>
</head>
</html>
