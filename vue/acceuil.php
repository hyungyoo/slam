<!DOCTYPE html>
<html>
<head>
<title>Marvel</title>
<link rel="stylesheet" href ="css/style.css">
<meta name="viewport" content = "width=device-width,intiale-scale=1,user-scaleable=no">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id ="navbar">



<a href=  "acceuil.php" class="navbar-brand" id ="text"> Cat Universe</a>
<ul class="nav  navbar-nav">


   <ul id="Home">
      <li><a href="./?action=acceuil">Home</a></li>
      <li><a href="./?action=liste">Liste</a></li>
      <li><a href="./?action=inscription">About</a></li>
    </ul>
</nav>
 </div>


 <div class="progamme">

 <li><img src="image/house.jpg" alt ="house"/></li>


 <?php

 for($i=1;$i<=$countcat;$i++){
   ?>
   
   <a href="./action=everycat&nul<?php echo $i;?>">
 </a>

 <?php }?>

 <?php }?>
 
 </div>
 






</body>
</html>
