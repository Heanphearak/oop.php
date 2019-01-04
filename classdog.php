<!-- <?php 
	// Class Dog
	// {
	// 	public $name="KIKI";
	// 		public function bark()
	// 		{
	// 			$name="Jakala";
	// 			echo $name." Woof!"."<br>";//It take local variable $name in function
	// 			echo $this->name."Woof!"."<br>";//It take variable $name from newClass $newDog1 and $newDog2
	// 		}
	// }

	// $newDog1 = new Dog();
	// $newDog1->name="KILU";
	// //echo $newDog1->name;
	// $newDog1->bark();

	// $newDog2 = new Dog();
	// $newDog2->name="KAKA";
	// //echo $newDog2->name;
	// $newDog2->bark();
 ?> -->

 <?php 
	Class Dog
	{
		private $name;
		//we use constructor to declear defuale value 
		function __construct()
		{
			$this->name="KiKi";
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

	$newDog1 = new Dog();
	//$newDog1->setName("KILU");
	//$newDog2 = new Dog();
	//$newDog2 = $newDog1;
	//$newDog2->setName("BoBo");
	$newDog1->bite();
	//echo $newDog1->getName();
	//echo $newDog1->name;
	
 ?>