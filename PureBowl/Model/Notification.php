<?PHP
	class Notification{
		private  $id ;
		private $idCommand;
		private $message ;
        // private $time ;
       

        function __construct($idCommand =null, $message= null){
			
			$this->idCommand=$idCommand;
            $this->message = $message;
            // $this->time = date('F j, Y, g:i a');
            
		}

        public function getId()
        {
            return $this->id;
        }

        public function getIdCommand()
        {
            return $this->idCommand;
        }

        public function setIdCommand($idCommand)
        {
            $this->idCommand = $idCommand;
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