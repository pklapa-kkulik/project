<?php
	require('..\raporty.php');
	class TestRaport extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('nazwa', 'Raport');
		}
		public function testNullArgument() {
			$temp = new Raport;
			$pom = $temp->getIloscSprzedazy();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Raport;
			$temp1->setIloscSprzedazy(3000);
			$i = $temp1->getIloscSprzedazy();
			$this->assertEquals(0, $i);
		}
		public function testInstanceOf() {
			$obj = new Raport;
			$this->assertInstanceOf('Raport', $obj);
		}
		public function testTrue() {
			$obj = new Raport;
			$obj->setIloscSprzedazy(12);
			$cos = $obj->getIloscSprzedazy();
			$this->assertTrue($cos);
		}
	}
?>