<?php
	class Faktura {
		private $dataWystawienia = null;
		private $suma = null;

		public function setData($tmp) {
			$this->dataWystawienia = $tmp;
		}
		public function setSuma($tmp) {
			$this->suma = $tmp;
		}
		public function getData() {
			return $this->dataWystawienia;
		}
		public function getSuma() {
			return $this->suma;
		}
	}
?>