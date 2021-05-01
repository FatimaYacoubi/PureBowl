<?PHP
	class promo{
		private ?int $id_promo = null;
		private ?int $id_pack = null;
		private ?int $pourcentage = null;
		//private ?string $date_deb = null;
		private ?string $date_fin = null;
		
		
		function __construct(int $id_pack, int $pourcentage,/* string $date_deb,*/ string $date_fin){
			
		   $this->id_pack=$id_pack;
			$this->pourcentage=$pourcentage;
		//	$this->date_deb=$date_deb;
			$this->date_fin=$date_fin;
			
		}
		
		function getId_promo(): int{
			return $this->id_promo;
		}
		function getId_pack(): int{
			return $this->id_pack;
		}
		function getPourcentage(): int{
			return $this->pourcentage;
		}
	/*	function getDate_deb(): string{
			return $this->date_deb;
		} */
		function getDate_fin(): string{
			return $this->date_fin;
		}
		

		 function setId_pack(int $id_pack): void{
			$this->id_pack=$id_pack;
		} 
		function setPourcentage(int $pourcentage): void{
			$this->pourcentage=$pourcentage;
		}
	/* 	function setDate_deb(string $date_deb): void{
			$this->date_deb=$date_deb;
		}*/
		function setDate_fin(string $date_fin): void{
			$this->date_fin=$date_fin;
		}
		
	}
?>