<?php
var_dump($_GET); #superglobal(forms) -- update/create

#stops either
#die();
$all_name = $_REQUEST['full-name'];
$age = $_GET['age'];
$gender = $_GET['gender'];

/*Getting the first name if it exists*/
$space_position = strpos($all_name,' ');

if($space_position == false){
  $first_name =  $all_name;
}else{
  $first_name =  substr($all_name,0,$space_position);
}

#echo $age;
$greeting = $first_name;
if ($gender=='f' and $age>30){
  header("Location:index.php?msg=lovely, ${greeting}&greet=yes");
}elseif($gender=='m' and $age>30){
  header("Location:index.php?msg=mzito, ${greeting}&greet=yes");
}else if($age >= 20 and $age <= 30){
  header("Location:index.php?msg=Yout, ${greeting}&greet=yes");
}else if($age >= 13 and $age <= 19){
  header("Location:index.php?msg=Teenie, ${greeting}&greet=yes");
}else{
  header("Location:index.php?msg=Child, ${greeting}&greet=yes");
}
 
