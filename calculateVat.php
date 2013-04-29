class vat{
	public $currentVat;
	public function __construct(){
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
	public function __construct(){
		$this -> endprice = $this -> product * $this -> currentVat;  
	}
	public function getPrice(){
		return $this -> endprice;
	}
} 
$bread = new productPrice();
$bread -> setVat(0.22);
echo "Today vat is : ". $bread -> getVat();
$bread -> setPrice(15);
echo " and the bread price is: ". $bread -> getPrice();
