<?PHP
	class coupon{
		private ?int $id = null;
	    private ?string $discount_code = null;
        private ?float $price = null;

		function __construct(string $discount_code, float $price){
			
			
			$this->discount_code=$discount_code;
			$this->price=$price;
		
		}
		
		function getid(): int{
			return $this->id;
		}
		function getcode(): string{
			return $this->discount_code;
		}
	
		function getprice(): float{
			return $this->price;
		}
		

		
		function setcode(string $discount_code): void{
			$this->discount_code=$discount_code;
		}
		
		function setprice(float $price): void{
			$this->price=$price;
		}
		
	}
?>