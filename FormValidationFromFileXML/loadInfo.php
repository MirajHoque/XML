<?php
 function dataFromXML()
{
	global $values;
$xml=simplexml_load_file("information.xml") or die("authentication error");
foreach($xml->user as $info)
{
	$data=array();
	$data["name"]=(string)$info->name;
	$data["pass"]=(string)$info->password;
	$values[]=$data;
	}
}
function dataFromFile()
{
	global $values;
	$file="./info.txt";
	$document=file_get_contents($file);
	$space=trim($document);
	$line=explode(" ",$space);
	foreach($line as $newline)
	{
		$values[]=array("name"=>newline[0],"pass"=>newline[1]);
		//$cred[]=array("name"=>$cr[0],"pass"=>$cr[1]);
		//echo $newline."<br>";
	}
}


?>