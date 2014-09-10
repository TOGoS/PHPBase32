<?php

class TOGoS_Base32Test extends PHPUnit_Framework_TestCase
{
	protected $testIO = array(
		'' => '',
		'a' => 'ME',
		'ab' => 'MFRA',
		'abc' => 'MFRGG',
		'abcd' => 'MFRGGZA',
		'abcde' => 'MFRGGZDF',
		'Hello, world!' => 'JBSWY3DPFQQHO33SNRSCC'
	);
	
	public function testEncoding() {
		foreach( $this->testIO as $in=>$out ) {
			$this->assertEquals( $out, TOGoS_Base32::encode($in) );
		}
	}
	
	public function testDecoding() {
		foreach( $this->testIO as $in=>$out ) {
			$this->assertEquals( $in, TOGoS_Base32::decode($out) );
		}
	}
}
