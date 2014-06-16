<?php
	require('..\produkty.php');
	class TestProdukt extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('nazwa', 'Produkt');
		}
		public function testNullArgument() {
			$temp = new Produkt;
			$pom = $temp->getNazwa();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Produkt;
			$temp1->setNazwa('Monitor');
			$i = $temp1->getNazwa();
			$this->assertEquals('Monitor', $i);
		}
		public function testInstanceOf() {
			$obj = new Produkt;
			$this->assertInstanceOf('Produkt', $obj);
		}
		public function testTrue() {
			$obj = new Produkt;
			$obj->setCena(12);
			$cos = $obj->getCena();
			$this->assertTrue($cos);
		}
	}
?>