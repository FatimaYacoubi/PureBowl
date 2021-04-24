<?PHP
	class gift{
		private ?int $id = null;
		private ?string $nom = null;
        private ?string $descr = null;
		private ?float $price = null;

		function __construct(string $nom, string $descr, float $price){
			
			
			$this->nom=$nom;
			$this->descr=$descr;
            $this->price=$price;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getName(): string{
			return $this->nom;
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
	
        function setdesc(string $descr): void{
			$this->descr=$descr;
		}
		function setPrice(float $price): void{
			$this->price=$price;
		}
      
	}
?>