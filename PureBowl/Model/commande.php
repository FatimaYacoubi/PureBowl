<?PHP
	class commande{
		private ?int $id = null;
		private ?string $dish = null;
		private ?string $meat = null;
		private ?string $option = null;
		private ?string $person = null;
		private ?string $date = null;
		private ?string $time = null;
		function __construct(string $dish, string $meat, string $option, string $person, string $date, string $time){
			
			$this->dish=$dish;
			$this->meat=$meat;
			$this->option=$option;
			$this->person=$person;
			$this->date=$date;
			$this->time=$time;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getdish(): string{
			return $this->dish;
		}
		function getmeat(): string{
			return $this->meat;
		}
		function getoption(): string{
			return $this->option;
		}
		function getperson(): string{
			return $this->person;
		}
		function getdate(): string{
			return $this->date;
		}
		function gettime(): string{
			return $this->time;
		}

		function setdish(string $dish): void{
			$this->dish=$dish;
		}
		function setmeat(string $meat): void{
			$this->meat=$meat;
		}
		function setoption(string $option): void{
			$this->option=$option;
		}
		function setperson(string $person): void{
			$this->person=$person;
		}
		function setdate(string $date): void{
			$this->date-$date;
		}
		function settime(string $time): void{
			$this->time=$time;
		}
		
	}
?>