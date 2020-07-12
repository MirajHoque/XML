<?php
$f=0;
$cred=array();
require("loadData.php");
loadFromXML();

foreach($cred as $value)
{
	if($_POST["name"]==$value["name"] && $_POST["pass"]==$value["pass"] )
	{
		echo "welcome you are a valid user"."<br>";
		$f=1;
	}
}
	if(!$f==1)
	{
		echo "invalid user"."<br>"; 
	}




?>