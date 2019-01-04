<?php 
	Class Person
	{
		private $name;
		private $gender;
		private $age;
		private $status;

		
		public function walk()
		{
			echo $this->getName."Walk to anywhere";
		}
		public function eat()
		{
			echo $this->getName."eat rice";
		}
		public function sleep()
		{
			echo $this->getName."sleep anywhere";
		}

		public function getName()
		{
			return $this->name;
		}
		public function setName($name)
		{
			$this->name=$name;
		}

		public function getGender()
		{
			return $this->gender;
		}
		public function setGender($gender)
		{
			return $this->gender;
		}

		public function getAge()
		{
			return $this->age;
		}
		public function setAge($age)
		{
			$this->age=$age;
		}

		public function getStatus()
		{
			return $this->status;
		}
		public function setStatus($status)
		{
			$this->status=$status;
		}
	}

 ?>