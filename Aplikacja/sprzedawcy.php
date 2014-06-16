<?php
	class Sprzedawca {
		private $login = null;
		private $haslo = null;

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
		public function getLogin() {
			return $this->login;
		}
		public function getHaslo() {
			return $this->haslo;
		}
	}
?>