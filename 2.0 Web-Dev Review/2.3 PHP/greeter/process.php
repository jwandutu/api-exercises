<?php
<<<<<<< HEAD

var_dump($_GET);#superglobal #global variable(used in forms)-considered insecure thus not for(Update/create)
echo "<br>";

#die(); //stops execution here...


=======
var_dump($_GET); #superglobal(forms) -- update/create

#stops either
#die();
>>>>>>> b2c72d8b391d5160f6616ff988e5264b46865c83
$all_name = $_REQUEST['full-name'];
$age = $_GET['age'];
$gender = $_GET['gender'];

<<<<<<< HEAD
//Getting the first name if it exists..
$space_position = strpos($all_name,' ');

if($space_position == false){
   $first_name = $all_name;
}else {
  $first_name = substr($all_name,0,$space_position);
=======
/*Getting the first name if it exists*/
$space_position = strpos($all_name,' ');

if($space_position == false){
  $first_name =  $all_name;
}else{
  $first_name =  substr($all_name,0,$space_position);
>>>>>>> b2c72d8b391d5160f6616ff988e5264b46865c83
}

#echo $age;
$greeting = $first_name;
<<<<<<< HEAD

if($age <= 12){
  //redirecting you to another page in php
    header("location:index.php?msg=Child, ${greeting}&greet=yes")
}else if($age >= 13 and $age <= 19 ){
    header("location:index.php?msg=Hello Child, ${greeting} &greet=yes")
}else if($age >= 20 and $age <= 30 ){
  header("location:index.php?msg=Yout, ${greeting}&greet=yes")
}else {
    header("location:index.php?msg=Mzito, ${greeting}&greet=yes")
}











 ?>
=======
if($age <= 12){
  //redirecting you to another page in PHP
  header("Location:index.php?msg=Child, ${greeting}&greet=yes");
}else if($age >= 13 and $age <= 19){
  header("Location:index.php?msg=Teenie, ${greeting}&greet=yes");
}else if($age >= 20 and $age <= 30){
  header("Location:index.php?msg=Yout, ${greeting}&greet=yes");
}else{
  header("Location:index.php?msg=Mzito, ${greeting}&greet=yes");
}
>>>>>>> b2c72d8b391d5160f6616ff988e5264b46865c83
