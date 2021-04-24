<?PHP
	class post{
		private ?int $id = null;
		private ?string $description = null;
		private ?string $date = null;
		private ?string $titre = null;
		private ?string $image = null;
		private ?string $etat = null;
		function __construct(string $description, string $date, string $titre,string $image, int $etat){
			
			$this->description=$description;
			$this->date=$date;
			$this->titre=$titre;
			$this->image=$image;
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
		function getimage(): string{
			return $this->image;
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
		function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setimage(string $image): void{
			$this->image=$image;
		}
		function setetat(int $etat): void{
			$this->etat=$etat;
		}
	}
?>