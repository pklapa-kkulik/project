<?php
	require('..\zamowienia.php');
	class TestZamowienie extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('status', 'Zamowienie');
		}
		public function testNullArgument() {
			$temp = new Zamowienie;
			$pom = $temp->getAdres();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Zamowienie;
			$temp1->setAdres('Wojska Polskiego 23');
			$i = $temp1->getAdres();
			$this->assertEquals('Matejki 11', $i);
		}
		public function testInstanceOf() {
			$obj = new Zamowienie;
			$this->assertInstanceOf('Zamowienie', $obj);
		}
	}
?>