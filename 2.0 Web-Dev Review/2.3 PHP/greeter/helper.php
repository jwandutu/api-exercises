<?php
function print y{
    echo 'yeah'; //prints out sth
//doesnt return anything
  return 'something';
}
//$value = printy();
//var_dump($value);

/**
 Saves the submitted form data into a cookie
 $new looks like : ['example-name',43,'male'] - array
*/

function saveInCookie($new){

  $cookie = $_COOKIE['greeter']; //associative array
   /* $_COOKIE
   [
        "greeter" => "["
         "["'example',43,'male'"]"
       ...


   ]
   */
  if(isset($cookie)){

    $greeters = getCookieAsArray($cookie);

    array_push($greeters,$new);

  }else{
    $greeters = array(
      $new
    );
  }

  //convert array into a string
  $json = json_encode($greeters);

  //save cookie
  setcookie('greeter', $json);

}
/**
  Get the saved cookie as an array
*/
function getCookieAsArray($cookie){
  $cookie = stripslashes($cookie);
  return json_decode($cookie, true);
}
