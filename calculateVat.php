class vat{
  public $currentVat;
	public function __constrct(){
		$this -> currentVat = $currentVat;
	}
	public function setVat($currentVat){
		$this -> currentVat = $currentVat; 
	}
	public function getVat(){
		return $this -> currentVat;
	}
}
class productPrice extends vat{
	public $product=null;
	public $endprice=null;
	public function setPrice($product){
		$this -> product = $product;
	}
	private function calculatePrice(){
		$this -> endprice = $product * $currentVat;  
	}
} 
