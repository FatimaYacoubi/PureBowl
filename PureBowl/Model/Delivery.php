<?PHP
	class Delivery{
		private  $id ;
		private $name;
		private $hour_start ;
		private $hour_end ;
		private $salary ;
        
		function __construct( $name =null, $hour_start = null, $hour_end = null, $salary= null){
			
			$this->name=$name;
			$this->hour_start=$hour_start;
			$this->hour_end=$hour_end;
			$this->salary = $salary;
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

	}