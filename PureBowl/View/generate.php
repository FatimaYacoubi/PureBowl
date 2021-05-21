<?php
	function discount_code($l){
		$discount_code = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',$l-2)),0,$l-2);

		return $discount_code;
	}
	
	echo discount_code(10);
?>