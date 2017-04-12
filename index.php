<?php

class ing{
	public function in(){
		echo $this ->a();
	}
	
	private function a(){
		echo date();
	}
	
	
}

$dd = new ing();
echo $dd->in();

class ingb extends ing{
	
	
}

$a = new ingb();
$a->in();