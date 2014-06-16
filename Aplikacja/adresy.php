<?php
	class Adres {
		private $miejscowosc = null;
		private $ulica = null;
		private $kodPocztowy = null;
		private $nrDomu = null;
		private $nrMieszkania = null;

		public function setMiejscowosc($tmp) {
			$this->miejscowosc = $tmp;
		}
		public function setUlica($tmp) {
			$this->ulica = $tmp;
		}
		public function setKod($tmp) {
			$this->kodPocztowy = $tmp;
		}
		public function setDom($tmp) {
			$this->nrDomu = $tmp;
		}
		public function setMieszkanie($tmp) {
			$this->nrMieszkania = $tmp;
		}
		public function getMiejscowosc() {
			return $this->miejscowosc;
		}
		public function getUlica() {
			return $this->ulica;
		}
		public function getKod() {
			return $this->kodPocztowy;
		}
		public function getDom() {
			return $this->nrDomu;
		}
		public function getMieszkanie() {
			return $this->nrMieszkania;
		}
	}
?>