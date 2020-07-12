<?php
function loadFromFile(){
	global $cred;
	$file=fopen("fleData.txt","r")or die("error");
	while($line=fgets($file)){
		$line=trim($line);
		$cr=explode(" ",$line);
		$cred[]=array("name"=>$cr[0],"pass"=>$cr[1]);
	}
	fclose($file);
}
function loadFromXML(){
	global $cred;
	$xml=simplexml_load_file("xmldata.xml") or die("Error: Cannot create object");
	foreach($xml as $st){
		$dar=array();
		$dar["name"]=(string)$st->name;
		$dar["pass"]=(string)$st->pass;
		//$dar["id"]=(string)$st->id;
		$cred[]=$dar;
	}
	//fclose($file);
}
?>