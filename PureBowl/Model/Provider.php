<?PHP
	class Provider{

		private  $id ;
		private $name;
		private $region ;
		private $num_tel ;
        private $image ;

        
		function __construct( $name =null, $region = null, $num_tel = null, $image = null){
			
			$this->name=$name;
			$this->region=$region;
			$this->num_tel = $num_tel;
            $this->image = $image;
		}

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getRegion()
        {
            return $this->region;
        }

        public function getNumTel()
        {
            return $this->num_tel;
        }
        public function setName($name)
        {
            $this->name = $name;
        }

        public function setRegion($region)
        {
            $this->region = $region;
        }
        public function setNumTel($num_tel)
        {
            $this->num_tel = $num_tel;
        }
        public function getImage()
        {
            return $this->image;
        }
        public function setImage($image)
        {
            $this->image = $image;
        }

	}