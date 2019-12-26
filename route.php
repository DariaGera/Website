<?php
 $route = preg_split("[/]",key($_GET));
 $main = $route[0];
 if(function_exists($main)){
   $main();
 }
 else{
   require('index.php');
 }
function index()
{
  require('index.php');
}
function description()
{
  require('description.php');
}
function singin(){
	require('singin.php');
}
function regis(){
	require('regis.php');
}
function review(){
	require('review.php');
}
function logout(){
	require('logout.php');
}
function haiku(){
	require('haiku.php');
}
function haikuM(){
	require('haikuM.php');
}
function haikuYo(){
	require('haikuYo.php');
}
function haikuKo(){
	require('haikuKo.php');
}
function newtime(){
	require('newtime.php');
}
?>
