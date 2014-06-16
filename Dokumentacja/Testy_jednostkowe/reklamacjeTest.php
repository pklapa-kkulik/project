<?php
	require('..\reklamacje.php');
	class TestReklamacja extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('status', 'Reklamacja');
		}
		public function testNullArgument() {
			$temp = new Reklamacja;
			$pom = $temp->getStatus();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Reklamacja;
			$temp1->setStatus('w toku');
			$i = $temp1->getStatus();
			$this->assertEquals('w toku', $i);
		}
		public function testInstanceOf() {
			$obj = new Reklamacja;
			$this->assertInstanceOf('Reklamacja', $obj);
		}
	}
?>