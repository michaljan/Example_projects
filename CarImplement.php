interface Car{
  public function steringWeelMaterial();
	public function carBody();
	public function carAge($age);
}
class BMW implements Car{
	public $age=null;
	public function steringWeelMaterial(){
		return "</br> Stering weel is made of leather";
	}
	public function carBody()
	{
		return "</br> this is sedan bodywork";
	}
	public function carAge($age){
		$this ->age = $age;
		if (is_numeric($age)){
			return "this car is ". $this->age . " yeras old"; 
		}
		else
			echo "No age avaliable";
	}
}

class Toyota implements Car{
	public $age=null;
	public function steringWeelMaterial(){
		return "</br> Stering weel is made of plastic";
	}
	public function carBody()
	{
		return "</br> this is combi bodywork";
	}
	public function carAge($age){
		$this ->age = $age;
		if (is_numeric($age)){
			return "this car is ". $this->age . " yeras old"; 
		}
		else
			echo "No age avaliable";
	}
}


$BMW_363 = new BMW();
echo "BMW 363 has ". $BMW_363->steringWeelMaterial();
echo " and ". $BMW_363->carBody();
echo $BMW_363->carAge(10);

$Toyota_Supra = new BMW();
echo "</br> Toyota Supra has ". $Toyota_Supra->steringWeelMaterial();
echo " and ". $Toyota_Supra->carBody();
echo $Toyota_Supra->carAge(10);
