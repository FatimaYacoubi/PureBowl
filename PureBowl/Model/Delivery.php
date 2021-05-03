<?PHP
	class Delivery{
		private  $id ;
		private $name;
		private $hour_start ;
		private $hour_end ;
		private $salary ;
		private $image ;

        function __construct($name =null, $salary= null, $hour_start = null, $hour_end = null, $image = null){
			
			$this->name=$name;
            $this->salary = $salary;
			$this->hour_start=$hour_start;
			$this->hour_end =$hour_end;
			$this->image = $image;

		}

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getHourStart()
        {
            return $this->hour_start;
        }

        public function setHourStart($hour_start)
        {
            $this->hour_start = $hour_start;
        }

        public function getHourEnd()
        {
            return $this->hour_end;
        }

        public function setHourEnd($hour_end)
        {
            $this->hour_end = $hour_end;
        }

        public function getSalary()
        {
            return $this->salary;
        }

        public function setSalary($salary)
        {
            $this->salary = $salary;
        }

        public function getImage()
        {
            return $this->image;
        }
        public function setImage($image)
        {
            $this->image = $image;
        }

	}