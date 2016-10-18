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

class Publisher extends Bok{
	public $publisher;

	public function setPublisher($publisher)
	{
	$this->publisher = $publisher;
	}
	public function getPublisher()
	{
		return $this->publisher;
	}
}

$efnafraedi = new Bok('Kisur', '5000');
$staerdfraedi = new Bok('Margar Kisur', '10000');
$islenska = new Bok('Ennþá fleiri kisur', '15000');

$test = new Publisher('asd', '1');
$test->setPublisher('asdd');




var_dump($test);
//var_dump($efnafraedi);
//var_dump($staerdfraedi);
//var_dump($islenska);
//var_dump($test)
?>

</html>