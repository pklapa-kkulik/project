<?php
	require('..\adresy.php');
	class TestAdres extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('ulica', 'Adres');
		}
		public function testNullArgument() {
			$temp = new Adres;
			$temp->setKod(72510);
			$pom = $temp->getKod();
			$this->assertNotNull($pom);
		}
		public function testEquals() {
			$temp1 = new Adres;
			$temp1->setKod(72510);
			$i = $temp1->getKod();
			$this->assertEquals(72510, $i);
		}
		public function testInstanceOf() {
			$obj = new Adres;
			$this->assertInstanceOf('Adres', $obj);
		}
	}
?>