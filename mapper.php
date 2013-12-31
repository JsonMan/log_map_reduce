#!/usr/bin/php
<?php
/**
211.138.125.213 - - [30/Dec/2013:00:00:05 +0800] GET /topic.php?v=1.2&hid=863187010480631&is=460005490731517&r=10116&dev=android&appvers=2.3.2.13530 HTTP/1.0 "200" 24 0.006 "-" "LG/U8120/v1.0" "211.138.125.213"
 */
$in = fopen ( "php://stdin", "r" );
$results = array ();

while ( $line = fgets ( $in, 4096 ) ) {
	$line = trim ( $line, "\r\n" );
	$line = trim ( $line, "\n" );
	if (! $line) {
		continue;
	}
	$temp = explode ( " ", $line );
	if (isset ( $temp [6] )) {
		$api = $temp [6];
		$index = strpos ( $api, "?" );
		if ($index) {
			$api = substr ( $api, 0, $index );
		}
		$api = trim ( $api, "/" );
		print "$api\t1\n";
	}
}
fclose ( $in );

		
