<?php
/* 
Author : Ramesh K
Date : 17/07/2019 11:15:00
Decsription :  	program that prints all the numbers from 1 to 100. However, for
				multiples of 3, instead of the number, print "Linio". For multiples of 5 print
				"IT". For numbers which are multiples of both 3 and 5, print "Linianos".

 */
class Linianos{
	public $multiplesof3;
	public $multiplesof5;
	public $multiplesof3and5;
	public $remainingnums;

	function getResult(){ 
		for($incNum =1; $incNum <=100;$incNum++)
		{
		    $this->remainingnums = $incNum; 
		    $this->multiplesof3  = $this->getRemainder($incNum,3);
		    $this->multiplesof5  = $this->getRemainder($incNum,5);
		    $this->multiplesof3and5 = $this->addRemainder($this->multiplesof3,$this->multiplesof5);
		    $this->showResult($this);
		}
	    }
	
	function getRemainder($number,$devider )
	{
		return $number % $devider;
	}
	function addRemainder($number3,$number5)
	{
		return $number3 +  $number5;
	}

	function showResult($result)
	{
		switch ($result) {
			case ($result->multiplesof3and5 == 0 ):
				echo "Linianos"."</br>";
				break;
			case ($result->multiplesof5 == 0):
				echo "IT"."</br>";
				break;
			case ($result->multiplesof3==0):
				echo "Linio"."</br>";
				break;
			default:
				echo $result->remainingnums."</br>";
		}
	}	
}

$obj = new Linianos();
$obj->getResult();
?>
