<?PHP
	class Dish{
		private ?int $id = null;
		private ?string $name = null;
		private ?string $ingredients = null;
		private ?float $price = null;
        
		function __construct(string $name, string $ingredients, float $price){
			
			$this->name=$name;
			$this->ingredients=$ingredients;
			$this->price=$price;
		}
		
		function getId(): int{
			return $this->id;
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

		function setName(string $name): void{
			$this->name=$name;
		}
		function setIngredients(string $ingredients): void{
			$this->ingredients;
		}
		function setPrice(float $price): void{
			$this->price=$price;
		}
	}
?>