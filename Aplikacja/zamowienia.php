<?php
	class Zamowienie {
		private $adres = null;

		public function setAdres($tmp) {
			$this->adres = $tmp;
		}
		public function getAdres() {
			return $this->adres;
		}
	}
?>