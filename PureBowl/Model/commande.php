<?PHP
	class commande{
		private ?int $id = null;
		private ?string $dish = null;
		private ?string $meat = null;
		private ?string $option = null;
		private ?string $person = null;
		private ?string $date = null;
		private ?string $time = null;
		private ?int $etatC = null;

		function __construct(string $dish, string $meat, string $option, string $person, string $date, string $time, int $etatC){
			
			$this->dish=$dish;
			$this->meat=$meat;
			$this->option=$option;
			$this->person=$person;
			$this->date=$date;
			$this->time=$time;
			$this->etatC=$etatC;

		}
		
		function getId(): int{
			return $this->id;
		}
		function getetatC(): int{
			return $this->etatC;
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
		function setetatC(int $etatC): void{
			$this->etatC=$etatC;
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