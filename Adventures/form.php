<?php 

echo "Form submitted";
echo "The Details are";
/*
echo $f; echo $e; echo $l; echo $a;  echo $p;
echo $g; echo $pw; echo $rpw; echo $c; echo $t;

$f=$_POST["f"];
$l=$_POST["l"];
$a=$_POST["a"];
$e=$_POST["e"];
$p=$_POST["p"];
$g=$_POST["g"];
$pw=$_POST["pw"];
$rpw=$_POST["rpw"];
$c=$_POST["c"];
$t=$_POST["t"];

*/
ini_set("display_errors","on");
error_reporting(E_ERROR);


if(isset($_POST['submitted']))
{
$conn=mysql_connect("localhost","root","") or die("could not connect to database")."<br>";
echo "successfully connected"."<br>";
$select_db=mysql_select_db('adventure sports') or die("could not find database")."<br>";
$f=$_POST["f"];
$l=$_POST["l"];
$a=$_POST["a"];
$e=$_POST["e"];
$p=$_POST["p"];
$g=$_POST["g"];
$pw=$_POST["pw"];
$rpw=$_POST["rpw"];
$c=$_POST["c"];
$t=$_POST["t"];

$sqlinsert="INSERT INTO account(first_name,last_name,age,email_id,phone_no,gender,password,c_password,country,agree) VALUES ('$f','$l','$a','$e','$p','$g','$pw','$rpw','$c','$t');";


mysql_query($sqlinsert) or die("error inserting in new record!!");
$newrecord="1 record added to the database";
echo $newrecord;
header("Location: login.html");
exit;

}
?>


































