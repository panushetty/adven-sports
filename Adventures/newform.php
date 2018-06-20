<?php 

/*
echo $f; echo $e; echo $l; echo $a;  echo $p;
echo $g; echo $pw; echo $rpw; echo $c; echo $t;
*/



ini_set("display_errors","on");
error_reporting(E_ERROR);


if(isset($_POST['submitted']))
{

$conn=mysql_connect("localhost","root","") or die("could not connect to database")."<br>";
echo "successfully connected"."<br>";
$select_db=mysql_select_db('adventure sports') or die("could not find database")."<br>";
$email=$_POST["email"];
$pass=$_POST["l"];


$query= "SELECT * FROM account ";
$fetch=mysql_query($query) or die  ("could not find table")."<br>";

while($row=mysql_fetch_assoc($fetch))
{
echo "<hr>"."id:".$row['age']."<br>";
echo "first name:".$row['first_name']."<br>";
echo "last name:".$row['last_name']."<br>"."<hr>";
}


}



?>
