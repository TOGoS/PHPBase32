<?php

$srcDir = __DIR__."/../..";

set_include_path( implode(PATH_SEPARATOR,array(
	"$srcDir/test/php",
	"$srcDir/main/php",
	get_include_path(),
)));

// Configuration so I can test this locally.
// .travis.yml assumes we're running with PHPUnit, therefore it should be available.
// PHPSimplerTest is not available, since that would require composer to install,
// which doesn't work on Travis's old (e.g. 5.2) PHP machines.
$simplerTestAvailable = false;
$phpunitAvailable = true;

if( $simplerTestAvailable ) require_once __DIR__."/../../../vendor/autoload.php";
else if( $phpunitAvailable ) require_once __DIR__."/fake-simplertest.php";
else throw new Exception("Need PHPSimplerTest or PHPUnit");

require_once "TOGoS/Base32.php";
require_once "TOGoS/Base32Test.php";

echo "base32_encode('hi') = ".TOGoS_Base32::encode("hi")."\n";
