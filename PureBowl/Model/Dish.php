<?PHP
	class Dish{
		
		private ?string $name = null;
		private ?string $ingredients = null;
		private ?float $price = null;
		private ?int $etat = null;
        
		function __construct(string $name, string $ingredients, float $price,int $etat){
			
			$this->name=$name;
			$this->ingredients=$ingredients;
			$this->price=$price;
			$this->etat=$etat;
		}
		
		
		function getName(): string{
			return $this->name;
		}
		function getIngredients(): string{
			return $this->ingredients;
		}
		function getPrice(): float{
			return $this->price;
		}
		function getEtat(): int{
			return $this->etat;
		}

		function setName(string $name): void{
			$this->name=$name;
		}
		function setIngredients(string $ingredients): void{
			$this->ingredients;
		}
		function setPrice(float $price): void{
			$this->price=$price;

		}
		function setetat(int $etat): void{
			$this->etat=$etat;
		}
	}
?>