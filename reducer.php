#!/usr/bin/php
<?php
$in = fopen("php://stdin", "r");
$results = array();
while ( $line = fgets($in, 4096) )
{
	    $line = trim($line); 
	    $temp = explode("\t", $line);
		if(isset($temp[1])) {
		    $key = $temp[0];
			$value = $temp[1];
			if(isset($results[$key])) {
			    $results[$key] += $value;
			} else {
				$results[$key] = $value;
			}
		}
}
fclose($in);
foreach ($results as $key => $value)
echo "$key\t$value\n";

