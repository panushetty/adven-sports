<?php 

/*
echo $f; echo $e; echo $l; echo $a;  echo $p;
echo $g; echo $pw; echo $rpw; echo $c; echo $t;
*/



/*
    // Starting session
    session_start();
    // Storing session data
    $_SESSION["firstname"] = "Peter";
    $_SESSION["lastname"] = "Parker";

*/



ini_set("display_errors","on");
error_reporting(E_ERROR);

if(isset($_POST['submitted']))
{

$conn=mysql_connect("localhost","root","") or die("could not connect to database")."<br>";
echo "successfully connected"."<br>";
$select_db=mysql_select_db('adventure sports') or die("could not find database")."<br>";
$email=$_POST["un"];
$pass=$_POST["Pass"];
#$sql="SELECT ID, FirstName, LastName FROM Contacts WHERE  FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" . $name  ."%'"; 

$query= "SELECT * FROM account WHERE email_id LIKE '%". $email ."%'";
echo $query;
$fetch=mysql_query($query) or die  ("could not find table")."<br>";

while($row=mysql_fetch_assoc($fetch))
{
if($pass==$row['password'])
{
	 // Starting session
    session_start();
    // Storing session data
    $_SESSION["first_name"] =$row['first_name'];
    $_SESSION["last_name"] = $row['last_name'];
    header("Location: Adventures/adven.php");
    exit;

}
else
{
	header("Location: wlogin.html");
	exit;
}
}

}



?>
