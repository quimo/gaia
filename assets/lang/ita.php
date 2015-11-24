<?php
	class Language {
		
		private $labels = array();
		
		function __construct() {
			$this->labels['collections_id'] = 3; 
		}
		
		public function getLabel($id) {
			return $this->labels[$id];
		}
		
	}
?>
