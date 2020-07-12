<?php
$xml=simplexml_load_file("Producers.xml");

//echo $xml->producer[2]->name." is ".$xml->producer[2]->age;
foreach($xml->producer as $producerInfo)
{
	echo $producerInfo->name." is ".$producerInfo->age."<br>";
}



?>