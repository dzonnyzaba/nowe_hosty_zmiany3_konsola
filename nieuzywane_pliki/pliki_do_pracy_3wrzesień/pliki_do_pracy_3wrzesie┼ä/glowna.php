<?php

class Glowna{
    protected $tresc;
    public function __construct($tr) {
        $this->tresc = $tr;
		
	$this->zapiszDoLoga("rozpoczynam działanie");
		
    }
	
			private function zapiszDoLoga($komunikat){
			file_put_contents('roznice_oop_log.txt', $komunikat."\r\n",  FILE_APPEND);
		}
		
		
    public function wyswietlNaglowek(){
   echo "<!doctype html>\n\r<html>";
   echo "<head>\n\t<meta charset=\"UTF-8\" />\n\t</head>";
}

public function wyswietlZawartosc(){
    echo "<body>";
    echo $this->tresc;
    echo "</body>";
    echo "</html>";
}

public function wyswietlCalosc(){
    $this->wyswietlNaglowek();
    $this->wyswietlZawartosc();
}
}

