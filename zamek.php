class zamek{
	private $czyOtwarty = true;
	
	public function otworz($klucz){
	
		$this -> czyOtwarty = $klucz;
		echo 'Czy twoj zamek jest otwary:: ' , $this ->czyOtwarty;
	
	}
	
	

}

$szafka = new zamek();
$szafka -> otworz(0);
