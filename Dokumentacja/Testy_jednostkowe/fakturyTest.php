<?php
	require('..\faktury.php');
	class TestFaktura extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('cos', 'Faktura');
		}
		public function testNullArgument() {
			$temp = new Faktura;
			$temp->setSuma(1);
			$pom = $temp->getSuma();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Faktura;
			$temp1->setSuma(5);
			$i = $temp1->getSuma();
			$this->assertEquals(9, $i);
		}
		public function testInstanceOf() {
			$obj = new TestFaktura;
			$this->assertInstanceOf('Faktura', $obj);
		}
	}
?>