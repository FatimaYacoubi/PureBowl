<?PHP
	class affectation{
		private $id ;
		private  $name ;


		function __construct(string $dish){
			
			$this->dish=$dish;

		}
		
		function getId(): int{
			return $this->id;
		}
		
		function getdish(): string{
			return $this->dish;
		}
		

		function setdish(string $dish): void{
			$this->dish=$dish;
		}
		
		
		
	}
?>