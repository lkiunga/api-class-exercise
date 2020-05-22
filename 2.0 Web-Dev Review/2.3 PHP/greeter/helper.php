<?php

/**
 Saves the submitted form data into a cookie
*/
function saveInCookie($new){

  $cookie = $_COOKIE['greeter'];
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
