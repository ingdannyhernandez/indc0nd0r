<body>
<link href="../estilo.css" rel="stylesheet" type="text/css" media="all">
<?php
 $qry="SELECT * FROM modulos";
 $result=mysql_query($qry);


 $Modulos = array();

 while($row = mysql_fetch_assoc($result)){ 
 $Modulos[$row['id']] = array("superior" => $row['superior'], "descripcion" =>                       
 $row['descripcion']);   
  }
//createTree($arrayCategories, 0);

 function createTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['superior']) {                       

    if ($currLevel > $prevLevel) echo " <ol class='tree'> "; 

    if ($currLevel == $prevLevel) echo " </li> ";

    echo '<li>
	 <label for="subfolder2">'.$category['descripcion'].'</label> <input type="checkbox" id="subfolder2"/>
';

    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTree ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </li>  </ol> ";

}   
?>
<div id="content" class="general-style1">
<?php
 if(mysql_num_rows($result)!=0)
 {
?>
<?php 

createTree($Modulos, 0); ?>
<?php
}
?>

</div>
</body>
</html>