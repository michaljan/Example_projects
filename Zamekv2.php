class zamek{

public $czyOtwarty = false;

public $strStan = null;

public $strZamkniety = null;

public function SprawdzZamek($czyOtwarty){

               if ($this -> czyOtwarty = 0){
                                $this -> strStan = 'Zamek jest otwarty';
                }

                else{
                                $this -> strStan = 'Zamek jest zamkniety';

                }

              echo 'Stan zamka: ' . $this -> strStan;

 }

}


$OtworzZamek = new zamek();

$OtworzZamek -> SprawdzZamek(1);
