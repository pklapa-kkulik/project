<?php
	class Klient {
		private $imie = null;
		private $nazwisko = null;
		private $login = null;
		private $haslo = null;
		public function setImie($tmp) {
			if ($this->imie == null) {
				$this->imie = $tmp;
				return true;
			}
			else {
				return false;
			}
		}
		public function setNazwisko($tmp) {
			if ($this->nazwisko == null) {
				$this->nazwisko = $tmp;
				return true;
			}
			else {
				return false;
			}
		}
		public function setLogin($tmp) {
			if ($this->login == null) {
				$this->login = $tmp;
				return true;
			}
			else {
				return false;
			}
		}
		public function setHaslo($tmp) {
			if ($this->haslo == null) {
				$this->haslo = $tmp;
				return true;
			}
			else {
				return false;
			}
		}
		public function getImie() {
			return $this->imie;
		}
		public function getNazwisko() {
			return $this->nazwisko;
		}
		public function getLogin() {
			return $this->login;
		}
		public function getHaslo() {
			return $this->haslo;
		}
	}
?>