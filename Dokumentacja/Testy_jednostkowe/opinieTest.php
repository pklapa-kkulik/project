<?php
	require('..\opinie.php');
	class TestOpinia extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('tresc', 'Opinia');
		}
		public function testNullArgument() {
			$temp = new Opinia;
			$pom = $temp->getTresc();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Opinia;
			$temp1->setTresc('fajny produkt');
			$i = $temp1->getTresc();
			$this->assertEquals('zly produkt', $i);
		}
		public function testInstanceOf() {
			$obj = new Opinia;
			$this->assertInstanceOf('TestOpinia', $obj);
		}
		public function testFalse() {
			$obj = new Opinia;
			$cos = $obj->getTresc();
			$this->assertFalse($cos);
		}
	}
?>