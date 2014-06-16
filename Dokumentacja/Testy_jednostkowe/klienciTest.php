<?php
	require('..\klienci.php');
	class TestKlient extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('imie', 'Klient');
		}
		public function testNullArgument() {
			$temp = new Klient;
			$im = $temp->getImie();
			$this->assertNull($im);
		}
		public function testEquals() {
			$temp1 = new Klient;
			$temp1->setImie('Jan');
			$i = $temp1->getImie();
			$this->assertEquals('Stefan', $i);
		}
	}
?>