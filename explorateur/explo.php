<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/explo.css">
<!-- <link rel="stylesheet" href= "style.css" type= "text/css" media= "screen"> -->
<link rel="stylesheet" href="jqueryFileTree.css" type= "text/css"/>




    <title>Explorateur de fichier</title>
</head>
<body>

<div class="entete">
        
<?php
echo posix_getcwd();
?>
</div>


<div id="recent">

<h2>Eléments récents</h2>
      
</div>

<div class="reseau">

</div>



<div class="example">
    <h2>Animaux</h2>
<div id="essai" class="demo"></div>
</div>


<div id="lorem">
<!-- <?php



$fichier = './animaux/DeuxBosses/Chameau/chameau.txt'; 


if ( (file_exists($fichier)) && (is_readable($fichier)) ){ 
    
 
readfile($fichier);
// $text = file_get_contents($fichier); 
//    echo $text; 
} 

else {


echo erreur;

}

?> -->
</div>

<script type="text/javascript" src="jquery.easing.js"> </script>
<script type="text/javascript" src="jquery.js"> </script>
<script type="text/javascript" src="jqueryFileTree.js"> </script>

    <script type="text/javascript" src="explo.js">   </script>

    
</body>
</html>