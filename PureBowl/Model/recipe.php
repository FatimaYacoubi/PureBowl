<?PHP
	class Recipe{
		private ?int $idR= null;
		private ?string $duration = null;
		private ?string $steps = null;
		private ?int $id = null;
		
		
		function __construct( string $duration, string $steps,int $id){
			
			$this->duration=$duration;
			$this->steps=$steps;
			$this->id=$id;
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
		function getId(): int{
			return $this->id;
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
        function setId(int $id): void{
			$this->id=$id;
		}
		
	}
?>