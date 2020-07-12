<?php
$f=0;
$values=array();
include("loadInfo.php");
dataFromFile();
//dataFromXML();
foreach($values as $infos)
{
	if($_POST["name"]==$infos["name"] && $_POST["pass"]==$infos["password"] )
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