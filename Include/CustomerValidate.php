<?php 
	/**
	* 
	*/
	class CustomerValidate
	{
		

		public static function testarEmail($paramEmail){
			$sintaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
			if (preg_match($sintaxe, $paramEmail)) {
				echo "<script>console.log( 'Debug Object: é email' );</script>";
				return true;
			}else{
				echo "<script>console.log( 'Debug Object: NÃO É EMAIL' );</script>";
				return false;
			}
		}
	}

 ?>