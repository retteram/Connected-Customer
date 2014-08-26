<?php

	// Get and set variables
	$user = $button = $page = null;
	$user = $_GET['user'];
	$button = $_GET['button'];
	$page = $_GET['page'];

	if($user == null)
		$user = "none";
	if($button == null)
		$button = "none";
	if($page == null)
		$page = "none";
	// Finish setting variables


	// Set date and time
	date_default_timezone_set("America/New_York");
	$date = date("Y-m-d H:i:s");
	// finish set date and time


	// Load XML file
	$xml = simplexml_load_file("../../../rss.xml");
	$json = json_encode($xml);
	$array = json_decode($json,TRUE);
	// XML file decoded


	// Create new item
	$addition = array('title'=>'Button Click', 'link'=>'http://connected-customer-sr.herokuapp.com/htdocs/pages/$page', 
					  'description'=>'Time and Click Info', 'guid'=>'$user', 'category'=>'$button', 'pubDate'=>'$date');

	// Open file for reading
	$file = fopen("../../../rss.xml", "w") or die("Unable to open file!");
	$header =  "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
			  ."<rss version=\"2.0\">\n"
			  ."	<channel>\n"
			  ."		<title>Clicks on Site</title>\n"
			  ."		<link>http://connected-customer-sr.herokuapp.com/</link>\n"
			  ."		<description>History of button clicks</description>\n";

	$content = "		<item>\n"
			  ." 			<title>$button</title>\n"
			  ."			<link>$page</link>\n"
			  ."			<description>$date</description>\n"
			  ."			<guid>$user</guid>\n"
			  ."			<category></category>\n"
			  ."			<pubDate></pubDate>\n"
			  ."		</item>\n";

	//echo "<br><br>" . count($array['channel']['item']) . "<br><br>";
    // print_r($array['channel']['item']);

    if(isset($array['channel']['item'])){

		if(isset($array['channel']['item'][0])) {
			$arraysize = count($array['channel']['item']);
		} else {
			$arraysize = 1;
		}

		for($i = 0; ($i < $arraysize) && $i < 30; $i++){

			if($arraysize == 1){
				$user = $array['channel']['item']['guid'];
				$button = $array['channel']['item']['title'];
				$page = $array['channel']['item']['link'];
			} else {
				$user  = $array['channel']['item'][$i]['guid'];
				$button= $array['channel']['item'][$i]['title'];
				$page  = $array['channel']['item'][$i]['link'];
			}

			$content .="		<item>\n"
					  ."			<title>$button</title>\n"
					  ."			<link>$page</link>\n"
					  ."			<description>$date</description>\n"
					  ."			<guid>$user</guid>\n"
					  ."			<category></category>\n"
					  ."			<pubDate></pubDate>\n"
					  ."		</item>\n";
		}
	}


	$footer =  "	</channel>\n"
			  ."</rss>";


	fwrite($file, $header.$content.$footer);
	fclose($file);
	echo "Done";
?>