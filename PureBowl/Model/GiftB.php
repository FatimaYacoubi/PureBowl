<?PHP
	class gift{
		private ?int $id = null;
		private ?string $imageG = null;
		private ?string $nom = null;
        private ?string $descr = null;
		private ?float $price = null;

		function __construct(string $nom, string $imageG, string $descr, float $price){
			
			
			$this->nom=$nom;
			$this->imageG=$imageG;
			$this->descr=$descr;
            $this->price=$price;
		}
		
		
		
		function getName(): string{
			return $this->nom;
		}
        function getImage(): string{
			return $this->imageG;
		}
		function getdesc(): string{
			return $this->descr;
		}
		function getPrice(): float{
			return $this->price;
		}
       
				
     
		function setName(string $nom): void{
			$this->nom=$nom;
		} 

		function setImage(string $imageG): void{
			$this->imageG=$imageG;
		}
	
        function setdesc(string $descr): void{
			$this->descr=$descr;
		}
		function setPrice(float $price): void{
			$this->price=$price;
		}
      
	}
?>