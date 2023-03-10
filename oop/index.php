<?php
	class Books {
		var $title;

		function setTitle($param){
				$this->title = $param."<br>";
		}
		function getTitle(){
		echo $this->title."<br>";
		}
	}

	$math = new Books();
	$math->setTitle("Algebra");
	$math->getTitle();
?>