<?php
	class Raport {
		private $dataPocz = null;
		private $dataKonc = null;
		private $iloscSprzedazy = null;

		public function setPocz($tmp) {
			$this->dataPocz = $tmp;
		}
		public function setKonc($tmp) {
			$this->dataKonc = $tmp;
		}
		public function setIloscSprzedazy($tmp) {
			$this->iloscSprzedazy = $tmp;
		}
		public function getPocz() {
			return $this->dataPocz;
		}
		public function getKonc() {
			return $this->dataKonc;
		}
		public function getIloscSprzedazy() {
			return $this->iloscSprzedazy;
		}
	}
?>