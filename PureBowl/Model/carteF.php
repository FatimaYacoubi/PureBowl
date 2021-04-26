<?PHP
	class carte{
		private ?int $idC = null;
		private ?int $nbP = null;
		private ?string $dateC = null;
        
		function __construct(int $nbP, string $dateC){
			
			$this->nbP=$nbP;
			$this->dateC=$dateC;
		
		}
		
		function getId(): int{
			return $this->idC;
		}
		function getNbP(): int{
			return $this->nbP;
		}
		function getdate(): string{
			return $this->dateC;
		}
		

		
		function setNbP(int $nbP): void{
			$this->ingredients;
		}
		function setdate(string $dateC): void{
			$this->dateC=$dateC;
		}
	}
?>