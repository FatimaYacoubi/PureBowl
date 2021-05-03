<?PHP
	class Notification{
		private  $id ;
		private $objet;
		private $message ;
        // private $time ;
       

        function __construct($objet =null, $message= null){
			
			$this->objet=$objet;
            $this->message = $message;
            // $this->time = date('F j, Y, g:i a');
            
		}

        public function getId()
        {
            return $this->id;
        }

        public function getObjet()
        {
            return $this->objet;
        }

        public function setObjet($objet)
        {
            $this->objet = $objet;
        }

        public function getMessage()
        {
            return $this->message;
        }

        public function setMessage($message)
        {
            $this->message = $message;
        }


	}