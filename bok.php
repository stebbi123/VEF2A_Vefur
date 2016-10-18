<!DOCTYPE html>
<html>
<?php 
class Bok
{
	public $titill;
	public $verð;

	public function __construct($titill, $verð)
	{

		$this->titill = $titill;
		$this->verð = $verð;
	}

	public function setPrice($verð)
	{
		$this->verð = $verð;
	}
	public function getPrice()
	{
		return $this->verð;

	}
	public function setTitill($titill)
	{
		$this->titill = $titill;
	}
	public function getTitill()
	{
		return $this->titill;
	}

}

$bok1 = new Bok('Kisur', '5000');


$bok2 = new Bok('Margar Kisur', '10000');


var_dump($bok1);
var_dump($bok2);
?>

</html>