<?php
	require('..\magazyn.php');
	class TestMagazyn extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('ilosc', 'Magazyn');
		}
		public function testNullArgument() {
			$temp = new Magazyn;
			$temp->setIlosc(20);
			$pom = $temp->getIlosc();
			$this->assertNotNull($pom);
		}
		public function testEquals() {
			$temp1 = new Magazyn;
			$temp1->setIlosc(5);
			$i = $temp1->getIlosc();
			$this->assertEquals(0, $i);
		}
		public function testInstanceOf() {
			$obj = new Magazyn;
			$this->assertInstanceOf('Magazyn', $obj);
		}
		public function testTrue() {
			$obj = new Magazyn;
			$cos = $obj->getIlosc();
			$this->assertTrue($cos);
		}
	}
?>