<?php 
	Class Dog
	{
		private $name;
		// we can not create multiple contructor example we can not create contructor parameter and contructor
		//we use constructor to declear defuale value 
		function __construct($name)
		{
			$this->name=$name;
		}
	 	public function getName()
		{
			return $this->name;
		}
		// public function setName($name)
		// {
		// 	$this->name=$name;
		// }
		public function bite()
		{
			echo $this->getName()." bite someone";
			
		}
	}

	$newDog1 = new Dog("Dara");
	//$newDog1->setName("KILU");
	//$newDog2 = new Dog();
	//$newDog2 = $newDog1;
	//$newDog2->setName("BoBo");
	$newDog1->bite();
	//echo $newDog1->getName();
	//echo $newDog1->name;
	
 ?>