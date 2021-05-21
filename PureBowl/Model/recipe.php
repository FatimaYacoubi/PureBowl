<?PHP
	class Recipe{
		private ?int $idR= null;
		private ?string $duration = null;
		private ?string $steps = null;
		private ?string $name = null;
		
		
		function __construct( string $duration, string $steps,string $name){
			
			$this->duration=$duration;
			$this->steps=$steps;
			$this->name=$name;
		}
		
		function getIdR(): int{
			return $this->idR;
		}
		function getDuration(): string{
			return $this->duration;
		}
		function getSteps(): string{
			return $this->steps;
		}
		function getName(): string{
			return $this->name;
		}
		function setIdR(int $idR): void{
			$this->idR=$idR;
		}
		function setDurarion(string $duration): void{
			$this->duration=$duration;
		}
		function setSteps(string $steps): void{
			$this->steps=$steps;
		}
        function setName(string $name): void{
			$this->name=$name;
		}
		
	}
?>