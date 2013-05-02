interface Car{
  public function steringWeelMaterial();
	public function carBody();
	public function carAge($age);
}
class BMW implements Car{
	public $age=null;
	public function steringWeelMaterial(){
		return "Stering weel is made of leather";
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



$BMW_363 = new BMW();
echo "BMW 363 has ". $BMW_363->steringWeelMaterial();
echo " and ". $BMW_363->carBody();
echo $BMW_363->carAge(10);
