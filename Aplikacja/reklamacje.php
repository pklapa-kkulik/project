<?php
	class Reklamacja {
		private $status = null;

		public function setStatus($tmp) {
			$this->status = $tmp;
		}
		public function getStatus() {
			return $this->status;
		}
	}
?>