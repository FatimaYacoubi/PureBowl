<?PHP
	class reclamation{
		private ?int $id = null;
		private ?string $description = null;
		private ?string $date = null;
		private ?string $nomClient = null;
		private ?string $emailClient = null;
		private ?int $phoneClient = null;
		private ?int $etat = null;
		function __construct(string $description, string $date, string $nomClient, string $emailClient, string $phoneClient,int $etat){
			
			$this->description=$description;
			$this->date=$date;
			$this->nomClient=$nomClient;
			$this->emailClient=$emailClient;
			$this->phoneClient=$phoneClient;
			$this->etat=$etat;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getdescription(): string{
			return $this->description;
		}
		function getdate(): string{
			return $this->date;
		}
		function getnomClient(): string{
			return $this->nomClient;
		}
		function getemailClient(): string{
			return $this->emailClient;
		}
		function getphoneClient(): string{
			return $this->phoneClient;
		}
		function getetat(): int{
			return $this->etat;
		}

		function setdescription(string $description): void{
			$this->description=$description;
		}
		function setdate(string $date): void{
			$this->date-$date;
		}
		function setnomClient(string $nomClient): void{
			$this->nomClient=$nomClient;
		}
		function setemailClient(string $emailClient): void{
			$this->emailClient=$emailClient;
		}
		function setphoneClient(string $phoneClient): void{
			$this->phoneClient=$phoneClient;
		}
		function setetat(string $etat): void{
			$this->etat=$etat;
		}
	}
?>