<?php
	class Produkt {
		private $nazwa = null;
		private $producent = null;
		private $cena = null;

		public function setNazwa($tmp) {
			if ($this->nazwa == null) {
				$this->nazwa = $tmp;
				return true;
			}
			else {
				return false;
			}
		}
		public function setProducent($tmp) {
			$this->producent = $tmp;
		}
		public function setCena($tmp) {
			$this->cena = $tmp;
		}
		public function getNazwa() {
			return $this->nazwa;
		}
		public function getProducent() {
			return $this->producent;
		}
		public function getCena() {
			return $this->cena;
		}
	}
?>