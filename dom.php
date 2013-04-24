class sciany{
              public $material = "cegla";

}
class dach{

                public $rodzajDachu = "Metal";                
}

class dom{

                public $material;

                public $rodzajDachu;

                public $okna=array();

                function __construct(sciany $material,dach $rodzajDachu){

                                $this -> material = $material;

                                $this -> rodzajDachu= $rodzajDachu;
                }

                public function dodajOkna($okna){

                                $this -> okna = $okna;

                }

}

$rodzajDachu = new dach();

$material = new sciany();

$modelZofia = new dom($material,$rodzajDachu);

//$okna["Parter"] = "Kwadrat";

//$okna["Pietro"] = "Prostokat";

//$modelZofia -> dodajOkna($okna);

$modelZofia->okna["Parter"] = "Kwadrat"; //poprawnie

echo "<pre>";

var_dump($modelZofia);
