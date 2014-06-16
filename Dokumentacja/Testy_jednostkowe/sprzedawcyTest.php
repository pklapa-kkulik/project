<?php
	require('..\sprzedawcy.php');
	class TestSprzedawca extends PHPUnit_Framework_TestCase {
		public function testArgument() {
			$this->assertClassHasAttribute('imie', 'Sprzedawca');
		}
		public function testNullArgument() {
			$temp = new Sprzedawca;
			$temp->setLogin('admin');
			$pom = $temp->getLogin();
			$this->assertNull($pom);
		}
		public function testEquals() {
			$temp1 = new Sprzedawca;
			$temp1->setLogin('admin');
			$i = $temp1->getLogin();
			$this->assertEquals('admin', $i);
		}
	}
?>