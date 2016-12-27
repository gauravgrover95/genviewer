<?php

$filename = "src/gnome.txt";
$file = fopen( $filename, "r" );

if( $file == false ) {
   echo ( "Error in opening file" );
   exit();
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );


$m = readline("Where do you want to start: ");
$n = readline("Where do you want to end: ");


$txt1 = "";
$txt2 = "";

for($i = $m; $i <= $n; $i++) {
   $txt1 .= sprintf("%02d", $i) . " - " . $filetext[$i-1] . "\n";
   $txt2 .= $filetext[$i];
}



$filename = "results/inline.txt";
$file = fopen( $filename, "w" );

if( $file == false ) {
   echo ( "Error in opening file" );
   exit();
}

fwrite( $file, "$txt1\n" );

fclose( $file );



$filename = "results/plain.txt";
$file = fopen( $filename, "w" );

if( $file == false ) {
   echo ( "Error in opening file" );
   exit();
}

fwrite( $file, "$txt2\n" );

fclose( $file );

echo "\nOK! We are done. Go check your 'results' folder.\n\n";

// echo ":) Thanks for using me\n\n";


$r = readline("Do you want me to print the results?(y/n)");

if($r != 'y') if($r == 'n') die("Okay Goodbye! :)"); else die("Incorrect choice");

$p = readline("Which one?(plain/inline)");

if($p == "plain") {
	$filename = "results/plain.txt";
	$file = fopen( $filename, "r" );

	if( $file == false ) {
	   echo ( "Error in opening file" );
	   exit();
	}

	$filesize = filesize( $filename );
	$filetext = fread( $file, $filesize );

	echo "$filetext";

	fclose( $file );
	exit();
}

if($p == "inline") {
	$filename = "results/inline.txt";
	$file = fopen( $filename, "r" );

	if( $file == false ) {
	   echo ( "Error in opening file" );
	   exit();
	}

	$filesize = filesize( $filename );
	$filetext = fread( $file, $filesize );

	echo "$filetext";

	fclose( $file );
	exit();
}




die("Incorrect Choice");