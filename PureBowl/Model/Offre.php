<?PHP
	class offre{
		private ?int $id_offre = null;
		private ?string $nom_offre = null;
		private ?string $image_offre = null;
		private ?string $descrip_offre = null;
		private ?int $type_offre = null;
		private ?int $prix_offre = null;
		
		function __construct(string $nom_offre, string $image_offre, string $descrip_offre, int $type_offre, int $prix_offre){
			
			$this->nom_offre=$nom_offre;
			$this->image_offre=$image_offre;
			$this->descrip_offre=$descrip_offre;
			$this->type_offre=$type_offre;
			$this->prix_offre=$prix_offre;
		}
		
		function getId_offre(): int{
			return $this->id_offre;
		}
		function getNom_offre(): string{
			return $this->nom_offre;
		}
		function getImage_offre(): string{
			return $this->image_offre;
		}
		function getDescrip_offre(): string{
			return $this->descrip_offre;
		}
		function getType_offre(): int{
			return $this->type_offre;
		}
		function getPrix_offre(): int{
			return $this->prix_offre;
		}

		function setNom_offre(string $nom_offre): void{
			$this->nom_offre=$nom_offre;
		}
		function setImage_offre(string $image_offre): void{
			$this->image_offre=$image_offre;
		}
		function setdescrip_offre(string $descrip_offre): void{
			$this->descrip_offre=$descrip_offre;
		}
		function settype_offre(int $type_offre): void{
			$this->type_offre=$type_offre;
		}
		function setPrix_offre(int $prix_offre): void{
			$this->prix_offre=$prix_offre;
		}
	}
?>