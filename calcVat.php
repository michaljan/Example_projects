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
	public $product=0;
	public $endprice=null;
	public function setPrice($product){
		$this -> product = $product;
	}
	public function calculate(){
		if (is_numeric($this->product)){
			$this -> endprice = $this->product * $this->currentVat;
		}
		else{
			echo "Please provide number"."<pre>";
			
		}
	}
	public function getPrice(){
		return $this -> endprice;
	}
} 
$bread = new productPrice();
$bread -> setVat(0.22);
echo "Today vat is : ". $bread -> getVat();
$bread -> setPrice(10);
$bread -> calculate();
echo " and the bread price is: ". $bread -> getPrice();
