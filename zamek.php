class zamek{
  private $czyOtwarty = true;
	
	public function otworz(){
		echo 'Czy twoj zamek jest otwary:: ' , $this ->czyOtwarty;
	
	}
	
	

}

$szafka = new zamek();
$szafka -> otworz();
