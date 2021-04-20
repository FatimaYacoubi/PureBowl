<?PHP
	class post{
		private ?int $id = null;
		private ?string $description = null;
		private ?string $date = null;
		private ?string $titre = null;
		private ?string $etat = null;
		function __construct(string $description, string $date, string $titre, string $etat){
			
			$this->description=$description;
			$this->date=$date;
			$this->titre=$titre;
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
		function gettitre(): string{
			return $this->titre;
		}
		function getetat(): string{
			return $this->etat;
		}

		function setdescription(string $description): void{
			$this->description=$description;
		}
		function setdate(string $date): void{
			$this->date-$date;
		}
		function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setetat(string $etat): void{
			$this->etat=$etat;
		}
	}
?>